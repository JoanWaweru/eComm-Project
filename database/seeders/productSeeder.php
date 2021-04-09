<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert(
            [[
                'name'=>'Bananas',
                'price'=>'50',
                'category'=>'Fruits',
                'description'=>'Ripe bananas',
                'picture'=>'C:\Users\laure\Desktop\school\imagesIAP\banan.jpg',
            ],
            [
                'name'=>'Pineapples',
                'price'=>'100',
                'category'=>'Fruits',
                'description'=>'Fresh pineapples',
                'picture'=>'C:\Users\laure\Desktop\school\imagesIAP\pineapple.jpg',
            ],
            [
                'name'=>'Watermelon',
                'price'=>'80',
                'category'=>'Fruits',
                'description'=>'Big,juicy watermelon',
                'picture'=>'C:\Users\laure\Desktop\school\imagesIAP\watermelon.jpg',
            ],
            [
                'name'=>'Fruit platter',
                'price'=>'100',
                'category'=>'Fruits',
                'description'=>'Variety of fruits',
                'picture'=>'C:\Users\laure\Desktop\school\imagesIAP\fruits.jpg',
            ]]
            );
    }
}
