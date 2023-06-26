<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Roda o "populador" de produtos.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            'title' => 'Produto 1',
            'description' => 'Descrição do produto 1',
            'photo' => 'no-image.jpg',
            'price' => 10.00,
        ]);

        DB::table('products')->insert([
            'title' => 'Produto 2',
            'description' => 'Descrição do produto 2',
            'photo' => 'no-image.jpg',
            'price' => 20.00,
        ]);

        DB::table('products')->insert([
            'title' => 'Produto 3',
            'description' => 'Descrição do produto 3',
            'photo' => 'no-image.jpg',
            'price' => 30.00,
        ]);
    }
}
