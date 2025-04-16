<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('detail_pembelians', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pembelian_id')->constrained()->onDelete('cascade');
            $table->foreignId('produk_id')->constrained()->onDelete('cascade');
            $table->integer('qty');
            $table->decimal('harga', 10, 2);
            $table->decimal('sub_total', 10, 2);
            $table->timestamps();
        });
    }    

    public function down(): void
    {
        Schema::dropIfExists('detail_pembelians');
    }
};