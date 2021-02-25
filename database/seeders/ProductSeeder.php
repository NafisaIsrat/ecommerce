<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            ['name'=>'LG phone',
            'price'=>'299',
            'description'=>"martphone runs on Android v10 (Q) operating system. The phone is powered by Octa core (2.8 GHz, Quad core, Kryo 385 + 1.8 GHz,",
            'category'=>"mobile",
            'gallery'=>"https://static.toiimg.com/photo/75156459/LG-Style-3.jpg"
            ],
            [
                'name'=>'LG TV',
                'price'=>'500',
                'description'=>"Get information on the LG 50UM7300PUA. Find pictures, reviews, technical specifications, and features for this 50 Inch Class 4K HDR Smart LED UHD",
                'category'=>"TV",
                'gallery'=>"https://www.lg.com/us/images/tvs/md06088916/gallery/UM73-D1.jpg"
            ],
            [
                'name'=>'Panasonic TV',
                'price'=>'399',
                'description'=>"Panasonic smart LED TV best price in Bangladesh with Home Delivery. Panasonic Viera TH-42AS610S 42 inch Smart TV has IPS LED technology.",
                'category'=>"TV",
                'gallery'=>"https://www.bdshop.com/pub/media/catalog/product/cache/0a9842a5e3033a11158d10717601d786/P/a/panasonic-smart-led-tv-th-42as610s.jpg"
            ]
        ]);
    }
}
