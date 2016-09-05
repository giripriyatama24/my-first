<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Post;

use App\Image;

use BD;

class PublicController extends Controller
{
    
    //
    
    function home(){
       
        $post=Post::all()->get();
        
        return view('home',$post);
    }
    
    function search(Request $req){
        
    }
    
    function post_comment(Request $req){
        
    }
}
