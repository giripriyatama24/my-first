<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTabelImage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('image',function(Blueprint $tab){
         
            $tab->increments('id_image');
            $tab->string('nama_image');
            $tab->integer('id_content');
            $tab->string('directory');
            $tab->text('keterangan');
        });
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('image');
        //
    }
}
