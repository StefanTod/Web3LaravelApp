<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class GPUS extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('GPUS', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('specs');
            $table->string('model');
            $table->date('release_date');
            $table->double('price', 15, 2);
            $table->text('reviews');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('GPUS');
    }
}
