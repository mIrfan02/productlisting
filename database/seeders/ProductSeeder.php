<?php

namespace Database\Seeders;
use App\Models\Product;

use App\Models\Category;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Define the categories you want to seed
        $Products = [
            [
                'name' => 'Dell',
                'description' => 'Brand New',
                'image' => 'Laptop1.avif',
                'price' => '200',
                'category_id' => '1',
                'checkbox'=>'Boxes By industry'
            ],


            [
                'name' => 'Realme',
                'description' => 'Brand New',
                'image' => 'mob3.avif',
                'price' => '500',
                'category_id' => '2',
                'checkbox'=>'Boxes By industry'


            ],
            [
                'name' => 'Boss Headdset',
                'description' => 'Brand New',
                'image' => 'head1.avif',
                'price' => '500',
                'category_id' => '3',
                'checkbox'=>'Boxes By industry'


            ],
              [
                'name' => 'Boss Headdset',
                'description' => 'Brand New',
                'image' => 'head2.avif',
                'price' => '500',
                'category_id' => '3',
                'checkbox'=>'Boxes By industry'


            ],
            [
                'name' => 'Action Camera',
                'description' => 'Brand New',
                'image' => 'Cam1.avif',
                'price' => '500',
                'category_id' => '4',
                'checkbox'=>'Boxes By Material'


            ],
            [
                'name' => 'Compact Camera',
                'description' => 'Brand New',
                'image' => 'cam2.avif',
                'price' => '500',
                'category_id' => '4',
                'checkbox'=>'Boxes By Material'



            ],
                 [
                'name' => 'Sony Headdset',
                'description' => 'Brand New',
                'image' => 'head3.avif',
                'price' => '500',
                'category_id' => '3',
                'checkbox'=>'Boxes By Material'
            ],
             [
                'name' => 'Redme',
                'description' => 'Brand New',
                'image' => 'Mob2.avif',
                'price' => '500',
                'category_id' => '2',
                'checkbox'=>'Boxes By Industry'
            ],
             [
                'name' => 'Hp',
                'description' => 'Brand New',
                'image' => 'laptop2.avif',
                'price' => '200',
                'category_id' => '1',
                'checkbox'=>'Boxes By Material'
],
[
                'name' => 'Notepad',
                'description' => 'Brand New',
                'image' => 'laptop3.avif',
                'price' => '200',
                'category_id' => '1',
                'checkbox'=>'Boxes By Material'
],
//Print By Section Products
 [
                'name' => 'Phone Case',
                'description' => 'Brand New',
                'image' => '1715586052_1714371221_card-row2-four.png',
                'price' => '200',
                'category_id' => '1',
                'checkbox'=>'Boxes By Style',

 ],

            [
                'name' => 'Badge',
                'description' => 'Brand New',
                'image' => '1714295903_card-one.png',
                'price' => '500',
                'category_id' => '2',
                'checkbox'=>'Boxes By Style',


            ],
            [
                'name' => 'Sticker',
                'description' => 'Brand New',
                'image' => 'sticker.png',
                'price' => '500',
                'category_id' => '3',
                'checkbox'=>'Boxes By Style',


            ],
            [
                'name' => 'Mouse Pad',
                'description' => 'Brand New',
                'image' => 'mouse-pad.png',
                'price' => '500',
                'category_id' => '4',
                'checkbox'=>'Boxes By Style',

],
 [
                'name' => 'Mug',
                'description' => 'Brand New',
                'image' => '1714294448_card-row2-three.png',
                'price' => '500',
                'category_id' => '4',
                'checkbox'=>'Boxes By Style',

],
 [
                'name' => 'Tea Shirt',
                'description' => 'Brand New',
                'image' => 'sweatshirt.png',
                'price' => '500',
                'category_id' => '4',
                'checkbox'=>'Boxes By Style',

],
];

        // Create records in the database for each category
        foreach ($Products as $Product) {
            Product::create($Product);
        }
    }
}