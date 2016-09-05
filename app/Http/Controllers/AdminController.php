<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Kategori;

use App\Lokasi;

use DB;

use App\Post;

use Auth;

use App\Http\Requests;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
   
    public function home(){
        
        $data['post']=DB::table('post')
            ->join('kategori','post.id_kategori','=','kategori.id_kategori')
            ->join('users','post.id_admin','=','users.id')
            ->select('post.*','kategori.nama_kategori','users.name')
            ->get();
        
     return view('admin_home',$data);
        
    }
    //
    
    public function new_post(){
        
        $kecamatan=DB::select('select distinct kecamatan from lokasi');
        $kategori=Kategori::all();
        return view('admin_create_post',['kat'=>$kategori,'kec'=>$kecamatan]);
        
    }
    
    public function insertNewPost(Request $req){
        
        $kecamatan=$req->input('kecamatan');
        $desa=$req->input('desa');
        
        $dataPost['id_admin']=Auth::user()->id;
        $dataPost['judul']=$req->input('judul');
        $dataPost['id_kategori']=$req->input('id_kategori');
        $dataPost['isi']=$req->input('isi');
        
        $idLok=DB::select('select id_lokasi from lokasi where desa="'.$desa.'" and kecamatan ="'.$kecamatan.'"');
        $dataPost['id_lokasi']=$idLok[0]->id_lokasi;
        
        
        $idPost=DB::table('post')->insertGetId($dataPost);
        
        //$jmlImage=$req->input('imageTotal');
        $except=$req->input('unproc');
        
       
        
        
        
        if($req->hasFile('image')){
        
        $files=$req->file('image');
            
        for($i=0;$i<count($files);$i++){
            if(count($except)==0){
                
                if($files[$i]->isValid()){
                    $extensi=$files[$i]->getClientOriginalExtension();
                     $newName=$req->input('nama'.$i).'_'.$idPost.'.'.$extensi;
                    
                    DB::table('image')->insert(
                    ['id_post'=>$idPost, 'nama_image'=>$req->input('nama'.$i), 'keterangan'=>$req->input('keterangan'.$i),
                    'directory'=>$newName]
                    ); 
                    
                 $files[$i]->move('upload',$newName);   
                
                    
                }
                
                  
            }
            else{
            for($j=0;$j<count($except);$j++){
                if($i==(int)$except[$j]){
                    $ada="yes";
                    break;
                }
                else{
                    $ada="no";
                }
            }
                    
                    if($ada=="no" && $files[$i]->isValid()){
                    $extensi=$files[$i]->getClientOriginalExtension();
                    $newName=$req->input('nama'.$i).'_'.$idPost.'.'.$extensi;
                        
                        DB::table('image')->insert(
                    ['id_post'=>$idPost, 'nama_image'=>$req->input('nama'.$i), 'keterangan'=>$req->input('keterangan'.$i),
                    'directory'=>$newName]
                    );   
                        
                    $files[$i]->move('upload',$newName);  
                }
        }
        }
    }
    }
    
    function caridesa(Request $req){
        
        $kec=$req->input('namaKecamatan');
        $desa=DB::select('select desa from lokasi where kecamatan="'.$kec.'"');
        
        return $desa;
    }
    
    function editPost(Request $req){
         
        $id=$req->input('id_post');
        
        $data['data_post']=DB::select('select * from post where id_post ='.$id);
        $data['image']=DB::select('select * from image where id_post='.$id);
        
        return ($data) ;
    }
    
    function editPict(Request $req){
        
        $id=$req->input('id_gb');
        $data=DB::select('select * from image where id_image='.$id);
        return $data;
    }
    
    
    function saveEditPost(Request $req){
        
        $ed_id=$req->input('ed_id');
        $ed_judul=$req->input('ed_judul');
        $ed_isi=$req->input('ed_isi');
        
        DB::update('update post set judul="'.$ed_judul.'", isi="'.$ed_isi.'" where id_post='.$ed_id);
        
        return redirect()->action('AdminController@home');
    }
     
    function deleteImg(Request $req){
        
        $id_img=$req->input('id_img');
        
        $dir_img=DB::select('select directory from image where id_image='.$id_img);
        unlink('upload/'.$dir_img[0]->directory);
        
        DB::delete('delete from image where id_image='.$id_img);
    }
    
    function deletePost($id){
        
        $dir_img=DB::select('select directory from image where id_post = '.$id);
        
        foreach($dir_img as $dir){
        unlink('upload/'.$dir->directory);
        }
        DB::delete('delete from image where id_post='.$id);
        DB::delete('delete from post where id_post='.$id);
            
        return redirect()->action('AdminController@home');
    }
}
