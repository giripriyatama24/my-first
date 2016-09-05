<?php

use Illuminate\Database\Seeder;

class SeederKategori extends Seeder{
 
    public function run(){
     
        DB::table('kategori')->delete();
        
        $kategori=array(
        array('nama_kategori'=>'Wisata Pantai'),
        array('nama_kategori'=>'Wisata Darat'),
        array('nama_kategori'=>'Wisata Air Terjun'),
        array('nama_kategori'=>'Wisata Gua')
        );
        
        DB::table('kategori')->insert($kategori);
        
    }
    
}

?>