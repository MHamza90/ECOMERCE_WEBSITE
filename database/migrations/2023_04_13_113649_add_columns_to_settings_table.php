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
        Schema::table('settings', function (Blueprint $table) {
            $table->string('home_title')->nullable();
            $table->string('home_sub_title')->nullable();
            $table->string('about_us_title')->nullable();
            $table->string('about_us_sub_title')->nullable();
            $table->string('spotlight_title')->nullable();
            $table->string('activity_title')->nullable();
            $table->string('activity_sub_title')->nullable();
            $table->string('vault_title')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('settings', function (Blueprint $table) {
            //
        });
    }
};
