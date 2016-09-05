<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table='post';
    protected $fillable=['judul','isi','id_admin','id_kategori','id_lokasi'];
    
    public function admin(){
     return $this->belongsTo('App\Admin','id_admin','id_admin');   
    }
    
    public function kategori(){
     return $this->belongsTo('App\Kategori','id_kategori','id_kategori');   
    }
    
    public function lokasi(){
     return $this->belongsTo('App\Lokasi','id_lokasi','id_lokasi');
    }
    
    public function image(){
     return $this->hasMany('App\Image');   
    }
    //
}
