<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotebooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notebooks', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('categories_id');
            $table->string('brand');
            $table->string('model');
            $table->string('resolution');
            $table->double('mass');
            $table->string('cpu');
            $table->string('graphics');
            $table->string('ram');
            $table->string('hdd');
            $table->string('price');
            $table->string('img');
        });
        Schema::table('notebooks', function (Blueprint $table) {
            $table->foreign('categories_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notebooks');
        Schema::table('notebooks', function($table) {
            $table->dropColumn('categories_id');
        });
    }
}
