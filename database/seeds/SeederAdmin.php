<?php

use Illuminate\Database\Seeder;

class SeederAdmin extends Seeder{
    
    public function run(){
     
        DB::table('admin')->delete();
        
        $admin=array(
        array('nama_admin'=>'Giri Priyatama','no_telepon'=>'085729324468','status'=>'1','user_name'=>'giri','password'=>'giri123')
        );
     
        DB::table('admin')->insert($admin);
    }
    
}

?>