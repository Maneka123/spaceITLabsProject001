<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('books')->insert([[
            'Title'=>'Harry Potter',
            'Description'=>'Harry Potter is a series of seven fantasy novels written by British author J. K. Rowling.',
            'Genre'=>'Fantasy fiction',
            'Price'=>'5000.00',
            'Gallery'=>"https://store.goodreads.lk/wp-content/uploads/2020/07/9781408855652.jpg"
        ],
        [
            'Title'=>'The Famous Five',
            'Description'=>'The Famous Five is a series of childrens adventure novels and short stories written by English author Enid Blyton.',
            'Genre'=>'Childrens literature',
            'Price'=>'2000.00',
            'Gallery'=>'src="https://upload.wikimedia.org/wikipedia/en/e/ed/FiveOnATreasureIsland.jpg"'
        ],[
            'Title'=>'The Secret Seven',
            'Description'=>'The Secret Seven or Secret Seven Society is a fictional group of child detectives created by Enid Blyton and based on the publishers children.',
            'Genre'=>'Fiction',
            'Price'=>'4500.00',
            'Gallery'=>'src="https://cdn.shopify.com/s/files/1/0554/7268/5246/products/9781444913569.jpg?v=1620403655"'
        ],[
            'Title'=>'The Mother',
            'Description'=>'Penned by award winning journalist Jane Caro, The Mother is a vital and principled story that looks at the life of a family placed under great duress',
            'Genre'=>'Novel',
            'Price'=>'3500.00',
            'Gallery'=>'src="https://m.media-amazon.com/images/I/B1Jz75Y9JyS.jpg"'
        ]]
    );
    }
}
