@extends('layouts.layout_admin')
@section('content')
<div class="container" id="content">
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="row">
            <div class="table-responsive" id="tab">
                <table id="example" class="stripe" cellspacing="0" width="100%">
                <thead>
                    <tr>
                    <th>Id Posting</th>
                    <th>Judul Posting</th>
                    <th>Kategori</th>
                    <th>Author</th>
                    <th>Action</th>
                        </tr>
                    </thead>
                    
                    <tfoot>
                    <tr>
                    <th>Id Posting</th>
                    <th>Judul Posting</th>
                    <th>Kategori</th>
                    <th>Author</th>
                    <th>Action</th>
                        </tr>
                    </tfoot>
                    
                    <tbody>
                        @foreach($post as $p)
                        <tr>
                        <td>{!! $p->id_post !!}</td>
                        <td>{!! $p->judul !!}</td>
                        <td>{!! $p->nama_kategori !!}</td>
                        <td>{!! $p->name !!}</td>
                            <td><button type="button" class="btn btn-primary" onclick="editPost({!! $p->id_post !!})">Edit</button>
                                <a href="{!! url('delete_post') !!}/{!! $p->id_post !!}"><button type="button" class="btn btn-danger">Delete</button></a>
                            </td>
                        </tr>
                        @endforeach()
                    </tbody>
                </table>
                </div>
            
        </div>
        <div class="row">
            <div id="edfield">
            
            </div>
        </div>
           
    </div>
</div>
</div>
<script>
        $(document).ready(function() {
    $('#example').DataTable();
        });
    
    
    
        </script>

<script>
function editPost(id){
    $('#edfield').empty();
        $.ajax({
            url:"{!! url('editPost') !!}",
            method:"GET",
            data:{'id_post':id},
            cache:false,
            success:function(msg){
                console.log(msg);
                console.log(msg.data_post[0].judul);
                $('#edfield').append('<div class="row" id="ed">'+
                                '<br>'+
                                '<div class="panel panel-primary">'+
                                '<div class="panel-heading">'+
                                '<div class="panel-tittle">Edit Data</div>'+
                                '</div>'+
                                '<div class="panel-body">'+
                                '{!! Form::open(array("action"=>"AdminController@saveEditPost")) !!}'+
                                '<input type="hidden" name="ed_id" value="'+msg.data_post[0].id_post+'">'+
                                '<div class="form-group">'+
                                '{!! Form::label("ed_judul","Judul") !!}'+
                                '<input type="text" name="ed_judul" id="ed_judul" value="'+msg.data_post[0].judul+'" class="form-control">'+
                                '</div>'+
                                '<div class="form-group">'+
                                '{!! Form::label("ed_isi","Isi") !!}'+
                                '<input type="text" name="ed_isi" id="ed_isi" value="'+msg.data_post[0].isi+'" class="form-control">'+ 
                                '</div>'+
                                '<div class="form-group">'+
                                '{!! Form::label("pict_here","Gambar")!!}'+
                                '<div id="pict_here">'+
                                '</div>'+
                                '</div>'+
                                '<div class="form-group">'+
                                '<div id="ed_pict_field">'+
                                '</div>'+
                                '</div>'+
                                '<div class="form-group">'+
                                '<input type="submit" value="Simpan" id="simpanEdit" class="btn btn-primary range1">'+
                                '<button type="button" class="btn btn-danger range1" id="btn_cancel_edPost" onclick="cancel_edit_post()">Cancel</button>'+
                                '{!! Form::close() !!}'+
                                '</div>'+
                                '</div>'+
                                '<br>'+
                                '<br>'+
                                '</div>'+
                                '</div>'
                    );
                $('#pict_here').append('<div id ="content_pic" class="col-xs-12 col-sm-12 col-md-12"></div>');
                for(i=0;i<msg.image.length;i++){
                $('#content_pic').append(
                                '<div class="col-md-3 col-sm-3 col-xs-12">'+
                                '<div class="row">'+
                                '<img src="upload/'+msg.image[i].directory+'" class="img-thumbnail img-responsive">'+
                                '<br>'+
                                '</div>'+
                                '<div class="row">'+
                                '<center>'+
                                '<div class="btn-group range1">'+
                                '<button type="button" class="btn btn-default" onclick="editPict('+msg.image[i].id_image+')">Edit</button>'+
                                '<button type="button" class="btn btn-danger" onclick="delete_img('+msg.image[i].id_image+','+msg.data_post[0].id_post+')">Delete</button>'+
                                '</center>'+
                                '</div>'+
                                '<br>'+
                                '<br>'+
                                '</div>'
                );
                }
               $('body').scrollspy({target:'#edfield'});
            
            }
            
        });
}
</script>

<script>
    function delete_img(id_img,id_post){
    
        $.ajax({
        method:"GET",
            url:"{!! url('/delete_img') !!}",
            data:{'id_img':id_img},
            cache:false,
            success:function(){
                editPost(id_post);
                
            }
        });
        
    }
</script>

<script>
    function editPict(id){
     
        $('#simpanEdit').hide();
        $('#btn_cancel_edPost').hide();
        $('#ed_pict_field').empty();
        $.ajax({
        method:"GET",
        url:"{!! url('editPict') !!}",
            data:{'id_gb':id},
            cache:false,
            success:function(msg){
                console.log(msg);
                $('#ed_pict_field').append(
                '<div class="col-xs-12 col-sm-12 col-md-12">'+
                    '<div class="panel panel-danger">'+
                    '<div class="panel-body">'+
                    '<div class="form-group">'+
                    '{!! Form::label("nama_gb","Nama") !!}'+
                    '<input type="text" id="nama_gb" name="nama_gb" value="'+msg[0].nama_image+'" class="form-control">'+
                    '</div>'+
                    '<div class="form-group">'+
                    '{!! Form::label("ktr_gb","Keterangan") !!}'+
                    '<input type="text" id="ktr_gb" name="ktr_gb" value="'+msg[0].keterangan+'" class="form-control">'+
                    '</div>'+
                    '<div class="form-group">'+
                    '{!! Form::label("ubah_gb","Gambar") !!}'+
                    '<div class="col-xs-12 col-sm-12 col-md-12" id="ubah_gb">'+
                    '<img src="upload/'+msg[0].directory+'" class="img-thumbnail image-responsive col-xs-12 col-sm-12 col-md-3">'+
                    '</div>'+
                    '</div>'+
                    '<div class="form-group">'+
                    '{!! Form::label("ganti_pict","Ganti Gambar") !!}'+
                    '<input type="file" id="ganti_pict", name="ganti_pict">'+
                    '</div>'+
                    '<div class="form-group">'+
                    '<button type="button" class="btn btn-primary range1">Simpan</button>'+
                    '<button type="button" class="btn btn-danger range1" onclick="cancel_edit_img()">Cancel</div>'+
                    '</div>'+
                    '</div>'+
                    '</div>'+
                    '</div>'
                
                );
            }
        });
        
    }
</script>
<script>
function cancel_edit_img(){
 $('#ed_pict_field').empty();
    $('#simpanEdit').show();
    $('#btn_cancel_edPost').show();
}
</script>

<script>    
function cancel_edit_post(){
 $('#edfield').empty();   
}
</script>
@endsection