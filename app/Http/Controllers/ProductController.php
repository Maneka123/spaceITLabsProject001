<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Cart;
use App\Models\Order;
use Session;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    function index()
    {
        $data=Book::all();
        return view('product',['products'=>$data]);
    }

    function detail($id)
    {
        $data= Book::find($id);
        return view('detail',['products'=>$data]);
    }


    /*can search book by title,description or genre */
    function search(Request $req)
    {
         $data =Book::
        where('Title','like','%'.$req->input('query').'%')
        ->orwhere('Description','like','%'.$req->input('query').'%')
        ->orwhere('Genre','like','%'.$req->input('query').'%')
        ->get();

        return view('search',['products'=>$data]);
    }

    function addToCart(Request $req)
    {
        if($req->session()->has('user'))
        {
            $cart=new Cart;
            $cart->user_id=$req->session()->get('user')['id'];
            $cart->product_id=$req->product_id;
            $cart->save();
            return redirect('/');
        }else{
            return redirect('/login');
        }
    }

    static function cartItem()
    {
        $userId=Session::get('user')['id'];
        return Cart::where('user_id',$userId)->count();
    }

    function cartList()
    {
        $userId=Session::get('user')['id'];
        $products=DB::table('cart')
        ->join('books','cart.product_id','=','books.id')
        ->where('cart.user_id',$userId)
        ->select('books.*','cart.id as cart_id')
        ->get();

        return view('cartlist',['products'=>$products]);
    }

    function removeCart($id)
    {
        Cart::destroy($id);
        return redirect('cartlist');
    }

    function orderNow()
    {
        $userId=Session::get('user')['id'];
        $total=$products=DB::table('cart')
        ->join('books','cart.product_id','=','books.id')
        ->where('cart.user_id',$userId)
       
        ->sum('books.price');

        return view('ordernow',['total'=>$total]);
    }

    function orderPlace(Request $req)
    {
        $userId=Session::get('user')['id'];
         $allCart=Cart::where('user_id',$userId)->get();
        foreach($allCart as $cart)
        {
            $order=new Order;
            $order->book_id=$cart['product_id'];
            $order->user_id=$cart['user_id'];
            $order->status="pending";
            $order->save();
            Cart::where('user_id',$userId)->delete();
        }
       $req->input();
       return redirect('/');
    }

    function myOrders()
    {
        $userId=Session::get('user')['id'];
          $orders=DB::table('orders')
        ->join('books','orders.book_id','=','books.id')
        ->where('orders.user_id',$userId)
       
        ->select('orders.*','orders.id as order_id')
        ->get();

        return view('myorders',['orders'=>$orders]);
    }

    function removemyBorrowing($id)
    {
         Order::destroy($id);
        return redirect('myorders');
    }



    function ourOrders()
    {

    $userId=Session::get('user')['id'];
        $orders=DB::table('orders')
        ->join('books','orders.book_id','=','books.id')
        ->where('orders.user_id',$userId)
        ->select('books.*','orders.id as order_id')
        ->get();

        return view('myorders',['orders'=>$orders]);
    }
}
