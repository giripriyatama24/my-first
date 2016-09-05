<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTabelPost extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post',function(Blueprint $tab){
         
            $tab->increments('id_post');
            $tab->string('judul');
            $tab->integer('id_admin');
            $tab->integer('id_kategori');
            $tab->integer('id_lokasi');
            $tab->timestamps();
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
        Schema::drop('post');
        //
    }
}
