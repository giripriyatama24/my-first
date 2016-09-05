<!DOCTYPE html>
<html lang="en">
<head>
    <title>
    Wisata Kulon Progo
    </title>
    {!! Html::style('assets/bootstrap-3.3.6-dist/css/bootstrap.min.css') !!}
    {!! Html::style('assets/DataTables-1.10.12/media/css/jquery.dataTables.min.css') !!}
    {!! Html::style('assets/style.css') !!}
    
    
    {!! Html::script('assets/jquery/dist/jquery.js') !!}
        {!! Html::script('assets/bootstrap-3.3.6-dist/js/bootstrap.min.js') !!}
        {!! Html::script('assets/DataTables-1.10.12/media/js/jquery.dataTables.min.js') !!}
    
    </head>
    <body>
    <div class="container-fluid">
        <div class="row">
            <center>LARAVEL</center>
        </div>
        <div class="row">
            <div class="container-fluid">
            <nav class="navbar navbar-inverse">
                <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#target-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a href="#" class="navbar-brand">LOGO here...
                </a>
                </div>
                
                <div class="collapse navbar-collapse" id="target-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="{!! url('/') !!}">Home</a></li>
                        <li class="dropwown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
                                Wisata
                                <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                        <li><a href=#>Semua</a></li>
                                <li><a href=#>Wisata Pantai</a></li>
                                <li><a href=#>Wisata Air Terjun</a></li>
                                <li><a href=#>Wisata Gua</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Event</a></li>
                        <li><a href="#">News</a></li>
                    </ul>
                    
                </div>
            
            </nav> 
        </div>
        </div>
            </div>
        @yield('content')
    </body>
    <footer>
    <div class="panel">
        <div class="panel-body">
            <div class="col-xs-12 col-sm-6 col-md-6">
            <p>ini foteeeeeeeeeeeeeeeeeeeeeeeeeeeer ini foteeeeeeeeeeeeeeeeeeeeeeeeeeeer vini foteeeeeeeeeeeeeeeeeeeeeeeeeeeer
            ini foteeeeeeeeeeeeeeeeeeeeeeeeeeeer ini foteeeeeeeeeeeeeeeeeeeeeeeeeeeer ini foteeeeeeeeeeeeeeeeeeeeeeeeeeeer vini foteeeeeeeeeeeeeeeeeeeeeeeeeeeer ini foteeeeeeeeeeeeeeeeeeeeeeeeeeeer vini foteeeeeeeeeeeeeeeeeeeeeeeeeeeer
            ini foteeeeeeeeeeeeeeeeeeeeeeeeeeeer ini foteeeeeeeeeeeeeeeeeeeeeeeeeeee
            ini foteeeeeeeeeeeeeeeeeeeeeeeeeeeer ini foteeeeeeeeeeeeeeeeeeeeeeeeeeee
                ini foteeeeeeeeeeeeeeeeeeeeeeeeeeeer vini foteeeeeeeeeeeeeeeeeeeeeeeeeeeer
            ini foteeeeeeeeeeeeeeeeeeeeeeeeeeeer ini foteeeeeeeeeeeeeeeeeeeeeeeeeeee</p>
            </div>
        <div class="col-xs-12 col-sm-6 col-md-6">
            <p>ini foteeeeeeeeeeeeeeeeeeeeeeeeeeeer ini foteeeeeeeeeeeeeeeeeeeeeeeeeeeer vini foteeeeeeeeeeeeeeeeeeeeeeeeeeeer
            ini foteeeeeeeeeeeeeeeeeeeeeeeeeeeer ini foteeeeeeeeeeeeeeeeeeeeeeeeeeeer ini foteeeeeeeeeeeeeeeeeeeeeeeeeeeer vini foteeeeeeeeeeeeeeeeeeeeeeeeeeeer ini foteeeeeeeeeeeeeeeeeeeeeeeeeeeer vini foteeeeeeeeeeeeeeeeeeeeeeeeeeeer
            ini foteeeeeeeeeeeeeeeeeeeeeeeeeeeer ini foteeeeeeeeeeeeeeeeeeeeeeeeeeee
            ini foteeeeeeeeeeeeeeeeeeeeeeeeeeeer ini foteeeeeeeeeeeeeeeeeeeeeeeeeeee
                ini foteeeeeeeeeeeeeeeeeeeeeeeeeeeer vini foteeeeeeeeeeeeeeeeeeeeeeeeeeeer
            ini foteeeeeeeeeeeeeeeeeeeeeeeeeeeer ini foteeeeeeeeeeeeeeeeeeeeeeeeeeee</p>
            </div>
        </div>
        </div>
    </footer>
</html>