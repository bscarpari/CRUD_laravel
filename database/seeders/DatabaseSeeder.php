<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * "Semeia" o banco de dados da aplicação.
     */
    public function run(): void
    {
        $this->call(ProductsSeeder::class);
    }
}
