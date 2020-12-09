<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Category::create([
             'category_slug' => "-",
             'category_image' => "1.jpg",
             'category_name' => "Category 1"
         ]);

    }
}
