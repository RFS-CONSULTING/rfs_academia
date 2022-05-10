<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablFormation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formations', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description');
            $table->integer('instructor_id');
            $table->integer('nb_hours');
            $table->integer('nb_articles');
            $table->boolean('downloadable_ressources');
            $table->boolean('is_certified');
            $table->integer('actual_price');
            $table->integer('original_price');
            $table->string('slug');
            $table->string('keywords');
            $table->string('image_path');
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
        Schema::dropIfExists('formations');
    }
}
