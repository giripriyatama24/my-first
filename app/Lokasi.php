<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lokasi extends Model
{
    
    protected $table='lokasi';
    protected $fillable=['pedukuhan','desa','kecamatan','RT','RW'];
    
    public function post(){
     return $this->hasMany('App\Post');   
    }
    //
}
