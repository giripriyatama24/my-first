<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    
    protected $table='admin';
    
    protected $fillable=['nama_admin','no_telepon'];
    
    public function post(){
     
        return $this->hasMany('App\Post');
    }
    
    //
}
