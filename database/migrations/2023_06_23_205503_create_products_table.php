<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Constrói a tabela de produtos em SQL por meio do PHP
     */
    public $timestamps = false;

    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title', 50);
            $table->string('description', 255);
            $table->string('photo', 255);
            $table->decimal('price', 8, 2);
        });
    }

    /**
     * Dropa a tabela.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
