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
        DB::table('products')->insert([
            'name' => 'Produk 1',
            'slug' => 'produk-1',
            'image' => 'https://via.placeholder.com/640x480.png/00ff77?text=Produk%201',
            'price' => '20000'
        ]);
    }
}
