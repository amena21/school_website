<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSliderModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slider_models', function (Blueprint $table) {
            $table->id();
            $table->string("image")->nullable();
          
            // $table->string("image2")->nullable();
            // $table->string("image3")->nullable();
            // $table->string("image4")->nullable();
            // $table->string("image5")->nullable();
            // $table->string("image6")->nullable();
            // $table->string("image7")->nullable();
            // $table->string("image8")->nullable();
            // $table->string("image9")->nullable();
            // $table->string("image10")->nullable();
            // $table->string("image11")->nullable();
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
        Schema::dropIfExists('slider_models');
    }
}
