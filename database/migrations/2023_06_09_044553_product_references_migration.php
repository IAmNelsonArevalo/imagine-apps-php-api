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
        Schema::create('product_references', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('product_id');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('no action')->onUpdate('no action');
            $table->string('reference');
            $table->integer('stock');
            $table->string('price');
            $table->unsignedInteger('status_id');
            $table->foreign('status_id')->references('id')->on('statuses')->onDelete('no action')->onUpdate('no action');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('product_references', function(Blueprint $table) {
            $table->dropForeign(['status_id', 'product_id']);
        });
        Schema::dropIfExists('product_references');
    }
};
