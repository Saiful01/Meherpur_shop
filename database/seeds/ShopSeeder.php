<?php

use Illuminate\Database\Seeder;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Shop::create([
            'shop_name' => 'My Shop',
            'shop_logo' => 'default.jpg',
            'shop_address' => 'Mirpur-1, Dhaka',
            'shop_phone' => '',
            'shop_email' => 'shop1@gmail.com',
            'facebook_url' => 'facebook.com',
            'android_app' => '',
            'ios_app' => '#',
            'about' => '',
        ]);
    }
}
