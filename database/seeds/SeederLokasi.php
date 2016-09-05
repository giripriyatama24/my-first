<?php

use Illuminate\Database\Seeder;

class SeederLokasi extends Seeder{
    
    public function run(){
     
        DB::table('lokasi')->delete();
        
        $lokasi=array(
        array('desa'=>'desa 1', 'kecamatan'=>'kecamatan 1'),
            array('desa'=>'desa 2', 'kecamatan'=>'kecamatan 2'),
            array('desa'=>'desa 3', 'kecamatan'=>'kecamatan 1'),
            array('desa'=>'desa 4', 'kecamatan'=>'kecamatan 3')
        );
     
        DB::table('lokasi')->insert($lokasi);
    }
    
}
?>