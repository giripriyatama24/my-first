@extends('layouts.layout_admin')
@section('content')
<div class="container">
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="panel">
            <div class="panel-heading">
                <div class="panel-title">Buat Posting Baru</div>
            </div>
            <div class="panel-body">
                {!! Form::open(array('action'=>'AdminController@insertNewPost','files'=>'true')) !!}
                
                <input type="hidden" name="imageTotal" id="imageTotal" value="">
                <div id="dont"></div>
        <div class="form-group">
            {!! Form::label('judul','Judul') !!}
            {!! Form::text('judul','', array('class'=>'form-control')) !!}
            </div>
            <div class="form-group">
            {!! Form::label('id_kategori','Kategori') !!}
                <select name="id_kategori" id="id_kategori" class="form-control">
                    @foreach($kat as $k)
                    <option value="<?php echo $k->id_kategori ?>">{!! $k->nama_kategori !!}</option>
                    @endforeach
                </select>
                
            </div>
                
            <div class="form-group">
            {!! Form::label('kecamatan','Kecamatan') !!}
                
                <select id="kecamatan" name="kecamatan" class="target form-control">
                    <option value="">-- pilih kecamatan --</option>
                    @foreach($kec as $l)
                    <option value="{!! $l->kecamatan !!}">{!! $l->kecamatan !!}</option>
                     @endforeach
                </select>
               
            </div>
                <div class="form-group">
                    {!! Form::label('desa','Desa') !!}
                    <select disabled name="desa" id="desa" class="form-control">
                        <option value="">-</option>
                    </select>
                </div>
                <div class="form-group">
                    {!! Form::label('isi','Isi') !!}
                    {!! Form::textarea('isi',null,['size'=>'30x10', 'class'=>'form-control']) !!}
                </div>
                
                {!! Form::label('', 'Upload Gambar') !!}
                <div id="ketPilih"><i>( untuk upload lebih dari 1 gambar, tekan ctrl + klik saat memilih gambar )</i></div>
                    <input type="file" name="image[]" id="image" multiple >
               
                
                <ul class="fieldUpload">
               
                </ul>
                
                <br>
                {!! Form::submit('Create',['class'=>'btn btn-primary']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
</div>




<script type="text/javascript">
     
    
    $("#kecamatan").change(function(){
        if($('#kecamatan').val()==""){
        $('#desa').html('<option value="">-</option>')
        }
        else
        {
        $('#desa').removeAttr('disabled');
        $('#desa').empty();
       $.ajaxSetup({
    headers:{
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
    });
        
         var kecamatan=$("#kecamatan").val();
        //var token=$('#token').val();
        console.log(kecamatan);
         $.ajax({
         url:"{!! url('caridesa')!!}",
             method:"POST",
             data:{'namaKecamatan':kecamatan},
             cache:false,
             success:function(msg){
                 
                 console.log(msg);
                 for(i=0;i<msg.length;i++){
                 $('#desa').append('<option value="'+msg[i].desa+'">'+msg[i].desa+'</option>');
                 }
             }
         });
    }
     });
</script>

<script type="text/javascript">
    
   
    
 $(document).ready(function(){
    
     
    
    var count=0;
     console.log("COUNT = "+count)
     
     
     $("#image").change(function(){
         $('#ketPilih').empty();
        readURL(this);
         $('#image').hide();
    });
     
     
     
     
     function readURL(input) {

        if (input.files && input.files[0]) {
            
            console.log(input.files);
            
           for(i=0;i<input.files.length;i++){
               
               console.log(input.files[i]);
               
               var reader = new FileReader();
                    
            reader.onload = function (e) {
               
                console.log(e.target);
                
                $('.fieldUpload').append(
                    '<div class="row" id="row'+count+'">'+
                    '<div class="col-xs-12 col-sm-4 col-md-4">'+
                    '<a class="thumbnail">'+
                    '<img src="'+e.target.result+'">'+
                    '</a>'+
                    '</div>'+
                    '<div class="col-xs-12 col-sm-8 col-md-8">'+
                    '<div class="form-group">'+
                    '<label for="nama'+count+'">Nama</label>'+
                    '<input type="text" id="nama'+count+'" name="nama'+count+'" class="form-control"></input>'+
                    '</div>'+
                    '<div class="form-group">'+
                    '<label for="keterangan'+count+'">Keterangan</label>'+
                    '<textarea id="keterangan'+count+'" name="keterangan'+count+'" rows="5" cols="30" class="form-control"></textarea>'+
                    '</div>'+
                    '<a class="btn btn-danger pull-right" onclick="hide('+"'row"+count+"'"+','+count+')">Cancel</a>'+
                    '</div>'+
                    '</div>');
                
                count++;
                    $('#imageTotal').attr('value',count);
            }
            reader.readAsDataURL(input.files[i]);
               
           }
        
        }

    }
     
     
     
    });
    
    
    
</script>



<script type="text/javascript">
    function hide($index,$in){
        $('#dont').append('<input type="hidden" name="unproc[]" value='+$in+' >');
         var myElement=document.getElementById($index);
         myElement.style.display='none';
     }
</script>


@endsection