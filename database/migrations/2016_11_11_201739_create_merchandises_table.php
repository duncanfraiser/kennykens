<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMerchandisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('merchindises', function (Blueprint $table) {
            $table->increments('id');            
            $table->integer('album');
            $table->integer('bsmall');
            $table->integer('bmeduim');
            $table->integer('blarge');
            $table->integer('bxl');
            $table->integer('bxxl');
            $table->integer('bxxxl');
            $table->integer('wsmall');
            $table->integer('wmeduim');
            $table->integer('wlarge');
            $table->integer('wxl');
            $table->integer('wxxl');
            $table->integer('wxxxl');
            $table->integer('koozie');
            $table->integer('sticker');
            $table->integer('total');
            $table->softDeletes();
            $table->rememberToken();
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
        Schema::drop('merchindises');
    }
}
