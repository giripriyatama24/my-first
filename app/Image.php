<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    
    protected $table='image';
    protected $fillable=['nama_image','id_content','directory','keterangan'];
    
    public function post_content(){
        
     return $this->belongsTo('App\Post','id_post','id_post');   
    }
    //
}
