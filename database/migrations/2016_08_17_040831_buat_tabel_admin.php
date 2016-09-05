<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTabelAdmin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin',function(Blueprint $tab){
            
         $tab->increments('id_admin');
            $tab->string('nama_admin');
            $tab->string('no_telepon');
            $tab->string('status');
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
        Schema::drop('admin');
        //
    }
}

