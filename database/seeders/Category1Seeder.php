<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class Category1Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Define the categories you want to seed
        $categories = [
            [
                'image' => 'uploads/categories/DSC_3681-scaled.webp',
                'title' => 'Lamp',

            ],

            [
                'image' => 'uploads/categories/DSC_3746-1-scaled.webp',
                'title' => 'Light',

            ],
            [
                'image' => 'uploads/categories/DSC_3681-scaled.webp',
                'title' => 'Pink Lamp',

            ],
            [
                'image' => 'uploads/categories/DSC_3713-scaled.webp',
                'title' => 'Yellow Lamp',

            ],
            [
                'image' => 'uploads/categories/DSC_3681-scaled.webp',
                'title' => 'Pink Lamp',

            ],

        ];

        // Create records in the database for each category
        foreach ($categories as $categoryData) {
            Category::create($categoryData);
        }
    }
}
