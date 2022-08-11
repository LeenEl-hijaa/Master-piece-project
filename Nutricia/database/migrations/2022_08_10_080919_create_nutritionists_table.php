<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNutritionistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nutritionists', function (Blueprint $table) {
            $table->id();
            $table->string('nutritionist_name');
            $table->string('nutritionist_image');
            $table->string('nutritionist_description');
             $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->on('categories')->references('id')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('nutritionists');
    }
}
