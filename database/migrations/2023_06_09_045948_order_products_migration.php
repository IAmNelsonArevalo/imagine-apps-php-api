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
        Schema::create('order_products', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('order_id');
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('no action');
            $table->unsignedInteger('reference_id');
            $table->foreign('reference_id')->references('id')->on('product_references')->onDelete('no action');
            $table->string('price');
            $table->integer('quantity');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('orders', function(Blueprint $table) {
            $table->dropForeign(['reference_id', 'order_id']);
        });
        Schema::dropIfExists('order_products');
    }
};
