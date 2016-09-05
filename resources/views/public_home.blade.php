@extends('layouts.layout_public')
@section('content')

<div class="container">
    <div class="col-xs-12 col-sm-3 col-md-3" id="main-pan-left">
    <div class="row">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="panel-title">Pencarian</div>
            </div>
            <div class="panel-body">
                
                <div class="form-group">
                {!! Form::label("nama_objek", "Cari") !!}
                {!! Form::text("nama_objek","",["class"=>"form-control", "placeholder"=>"masukan objek wisata"]) !!}
                    <button type="button" class="btn btn-primary range3 form-control" onclick="search_post()">Search</button>
                </div>
                <div class="form-group">
                {!! Form::label("a", "Cari Kecamatan") !!}
                {!! Form::text("a","",["class"=>"form-control", "placeholder"=>"masukan kec wisata"]) !!}
                </div>
                <div class="form-group">
                {!! Form::label("b", "Cari Desa") !!}
                {!! Form::text("b","",["class"=>"form-control", "placeholder"=>"masukan des wisata"]) !!}
                </div>
                <div class="form-group">
                {!! Form::label("c", "Cari Jenis") !!}
                {!! Form::text("c","",["class"=>"form-control", "placeholder"=>"masukan jenis wisata"]) !!}
                </div>
            </div>
        </div>
        </div>
        <div class="row">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="panel-title">News *</div>
            </div>
            <div class="panel-body">
                <ul>
                <li><a href="#">Bapak Bupati KP melakukan Bedah Rumah</a></li>
                    <hr>
                <li><a href="#">Bapak Bupati KP melakukan Bedah Rumah</a></li>
                    <hr>
                <li><a href="#">Bapak Bupati KP melakukan Bedah Rumah</a></li>
                    <hr>
                <li><a href="#">Bapak Bupati KP melakukan Bedah Rumah</a></li>
                    <hr>
                </ul>
            </div>
        </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-9 col-md-9">
        <div class="row">
        <div class="panel">
            <div class="panel-body">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="upload/super hero_11.jpg" alt="super hero">
      <div class="carousel-caption">
        <h3>Bla Bla</h3>
          <p>blabla blababa</p>
      </div>
    </div>
    <div class="item">
      <img src="upload/bboy_14.jpg" alt="bboy">
      <div class="carousel-caption">
        <h3>Bla Bla</h3>
          <p>blabla blababa</p>
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div>
        </div>
    </div>
    </div>
        <div class="row">
            
                <div class="panel">
                    <div class="panel-body">
                        <div class="form-group">
                            {!! Form::label("suggest","Suggested") !!}
                        <div class="col-xs-12 col-sm-12 col-md-12" id="suggest">
                        <img src="upload/super hero_6.jpg" class="col-xs-12 col-sm-4 col-md-4 range2">
                            <img src="upload/loki tor_11.jpg" class=" col-xs-12 col-sm-4 col-md-4 range2">
                            <img src="upload/dlassh_7.png" class=" col-xs-12 col-sm-4 col-md-4 range2">
                        </div>
                        </div>
                        
                    </div>
                </div>
            
        </div>
    </div>
</div>
<script>
function search_post(){
    
    var judul=$('#nama_objek').val();
    if(judul!=""){
        $.ajax({
        method:"GET",
            url:"{!! url('search_post') !!}",
            data:{'judul':judul},
            cache:false,
            success:function(msg){
                alert(msg);
            }
        });
    }
}
</script>
@endsection