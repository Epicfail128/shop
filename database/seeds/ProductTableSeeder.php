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
        $product = new App\Product([
        'imagePath' => 'https://images-na.ssl-images-amazon.com/images/I/81iqZ2HHD-L.jpg',
        'title' => 'Harry Potter',
        'description' => 'GG good book',
        'price' => 200
    ]);
        $product->save();

        $product = new App\Product([
            'imagePath' => 'https://cdn.waterstones.com/bookjackets/large/9781/4088/9781408855652.jpg',
            'title' => 'Harry Potter 2',
            'description' => 'GG good book',
            'price' => 200
        ]);
        $product->save();

        $product = new App\Product([
            'imagePath' => 'https://m.media-amazon.com/images/I/51UoqRAxwEL.jpg',
            'title' => 'Harry Potter 3',
            'description' => 'GG good book',
            'price' => 200
        ]);
        $product->save();

        $product = new App\Product([
            'imagePath' => 'https://images-na.ssl-images-amazon.com/images/I/51EstVXM1UL._SX331_BO1,204,203,200_.jpg',
            'title' => 'Lord of the rings',
            'description' => 'GG good book',
            'price' => 200
        ]);
        $product->save();

        $product = new App\Product([
            'imagePath' => 'https://images-na.ssl-images-amazon.com/images/I/8134AkhQJgL.jpg',
            'title' => 'Lord of the rings 2',
            'description' => 'GG good book',
            'price' => 200
        ]);
        $product->save();

        $product = new App\Product([
            'imagePath' => 'https://kbimages1-a.akamaihd.net/dd36e70a-9657-48c0-bcb7-6333aecb4394/1200/1200/False/the-lord-of-the-rings-1.jpg',
            'title' => 'Lord of the rings 3',
            'description' => 'GG good book',
            'price' => 200
        ]);
        $product->save();
    }
}
