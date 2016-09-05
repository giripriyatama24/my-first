<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTabelLokasi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lokasi',function(Blueprint $tab){
         $tab->increments('id_lokasi');
            $tab->string('pedukuhan');
            $tab->string('desa');
            $tab->string('kecamatan');
            $tab->string('RT');
            $tab->string('RW');
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
        Schema::drop('lukisan');
        //
    }
}
