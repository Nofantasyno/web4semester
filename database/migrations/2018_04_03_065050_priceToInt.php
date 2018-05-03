<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PriceToInt extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        DB::statement('ALTER TABLE EShop.notebooks MODIFY COLUMN price INT');
    }

    public function down(){
        DB::statement('ALTER TABLE EShop.notebooks MODIFY COLUMN price INT');
    }
}
