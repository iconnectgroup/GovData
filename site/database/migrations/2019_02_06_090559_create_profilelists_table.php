<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilelistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profilelists', function (Blueprint $table) {
            $table->increments('id');
            $table->string('trade_name');
            $table->string('contact');
            $table->string('address');
            $table->string('capabilities');
            $table->string('economic_id');
            $table->string('naics_id');
            $table->string('state');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profilelists');
    }
}
