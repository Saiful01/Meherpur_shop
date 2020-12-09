<?php

use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        \App\Slider::create([
                'slider_image' => '1.png',
                'slider_name' => 'deafult',
            ]
        );
    }
}
