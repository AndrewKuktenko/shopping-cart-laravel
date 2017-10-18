<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
            'imagePath' => 'https://ewedit.files.wordpress.com/2016/09/hpsorcstone.jpg?w=405',
            'title' => 'Harry Potter',
            'description' => '«Га́рри По́ттер» (англ. «Harry Potter») — серия из семи романов, написанных английской писательницей Дж. К. Роулинг. ',
            'price' => 30
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://upload.wikimedia.org/wikipedia/en/thumb/e/e9/First_Single_Volume_Edition_of_The_Lord_of_the_Rings.gif/220px-First_Single_Volume_Edition_of_The_Lord_of_the_Rings.gif',
            'title' => 'The Lord of the Rings',
            'description' => 'The Lord of the Rings is an epic high fantasy novel written by English author and scholar J. R. R. Tolkien.',
            'price' => 28
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://upload.wikimedia.org/wikipedia/en/thumb/d/dc/A_Song_of_Ice_and_Fire_book_collection_box_set_cover.jpg/220px-A_Song_of_Ice_and_Fire_book_collection_box_set_cover.jpg',
            'title' => 'A Song of Ice and Fire',
            'description' => 'A Song of Ice and Fire is a series of epic fantasy novels by the American novelist and screenwriter George R. R. Martin.',
            'price' => 50
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://upload.wikimedia.org/wikipedia/en/d/db/Fahrenheit_451_1st_ed_cover.jpg',
            'title' => 'Fahrenheit 451',
            'description' => 'Fahrenheit 451 is a dystopian novel by American writer Ray Bradbury, published in 1953.',
            'price' => 34
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/af/Tolstoy_-_War_and_Peace_-_first_edition%2C_1869.jpg/220px-Tolstoy_-_War_and_Peace_-_first_edition%2C_1869.jpg',
            'title' => 'War and Peace',
            'description' => 'War and Peace is a novel by the Russian author Leo Tolstoy, which is regarded as a central work of world literature and one of Tolstoy\'s finest literary achievements.',
            'price' => 40
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://upload.wikimedia.org/wikipedia/en/thumb/a/af/Stainless_Steel_Rat.jpg/220px-Stainless_Steel_Rat.jpg',
            'title' => 'The Stainless Steel Rat',
            'description' => 'James Bolivar diGriz, alias "Slippery Jim" and "The Stainless Steel Rat", is a fictional character and the antihero of a series of comic science fiction novels written by Harry Harrison.',
            'price' => 24
        ]);
        $product->save();
    }
}
