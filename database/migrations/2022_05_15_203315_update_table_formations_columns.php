<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTableFormationsColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('formations', function (Blueprint $table) {
            //
            $table->string('modalite');
            $table->string('logiciels');
            $table->string('validation');
            $table->string('prerequis');
            $table->string('public_cible');
            $table->string('niveau');
            $table->string('moyen_materiel');
            $table->string('pedagogie');
            $table->string('objectif');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('formations', function (Blueprint $table) {
            //
        });
    }
}
