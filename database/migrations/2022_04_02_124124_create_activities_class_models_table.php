<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivitiesClassModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activities_class_models', function (Blueprint $table) {
            $table->id();
            $table->string("title")->nullable();
            $table->string("image")->nullable();
            $table->string("date")->nullable();
            $table->string("description1")->nullable();
            $table->string("description2")->nullable();
            $table->string("description3")->nullable();
            
            $table->string("qoute")->nullable();
           
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
        Schema::dropIfExists('activities_class_models');
    }
}
