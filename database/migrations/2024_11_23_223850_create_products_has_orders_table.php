<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('product_has_orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('products_id')->constrained('products');
            $table->foreignId('orders_id')->constrained('orders');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_has_orders');
    }
};
