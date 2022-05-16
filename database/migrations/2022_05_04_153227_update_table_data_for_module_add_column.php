<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTableDataForModuleAddColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('data_for_modules', function (Blueprint $table) {
            //
            $table->string('name');
            $table->integer('module_id');
            $table->string('data_path');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('data_for_modules', function (Blueprint $table) {
            //
            $table->dropColumn('name');
            $table->dropColumn('module_id');
            $table->dropColumn('data_path');
        });
    }
}
