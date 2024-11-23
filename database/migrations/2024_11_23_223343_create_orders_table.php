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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('clients_id')->constrained('clients');
            $table->text('status');
            $table->text('delivery_address_street');
            $table->text('delivery_address_number');
            $table->text('delivery_address_neibourhood');
            $table->text('delivery_address_city');
            $table->text('delivery_address_code');
            $table->decimal('freight_price');
            $table->decimal('products_price');
            $table->decimal('total_price');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
