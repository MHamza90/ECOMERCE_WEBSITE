<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('product_name')->nullable();
            $table->string('product_slug')->nullable();
            $table->string('product_description')->nullable();
            $table->string('product_image')->nullable();
            $table->string('quantity')->nullable();
            $table->string('squ')->nullable();
            $table->string('price')->nullable();
            $table->integer('admin_id')->nullable();
            $table->integer('artist_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
