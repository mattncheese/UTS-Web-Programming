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
        Schema::create('coffees', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('categoryId');
            $table->foreign('categoryId')->on('coffee_categories')->references('id');

            $table->string('image_url');
            $table->integer('price');
            $table->timestamps();
        });
    }

    /**
     * 
     *
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coffees');
    }
};
