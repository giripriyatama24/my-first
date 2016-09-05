<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

class ClientController extends Controller
{
    //
    function public_home(){
     
        return view('public_home');
    }
    
    function search(Request $req){
        
        $judul=$req->input('judul');
        
        $data=DB::select('select * from post where judul like "%'.$judul.'%"');
        
        return($data[0]->judul);
    }
}
