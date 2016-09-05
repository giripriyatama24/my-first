<!DOCTYPE html>
<html>
<head>
    <title>Admin</title>
    
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
                    <a href="#" class="navbar-brand">Admin
                </a>
                </div>
                
                <div class="collapse navbar-collapse" id="target-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="{!! url('/home_admin') !!}">Home</a></li>
                        <li><a href="{!! url('/new_post') !!}">Create New Post</a></li>
                        <li><a href="#">List Post</a></li>
                        <li><a href="#">List Comments</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropwown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
                                {!! Auth::user()->name !!}
                                <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                        <li><a href="{{ url('/logout') }}">logout</a></li>
                            </ul>
                        </li>
                        
                    </ul>
                </div>
            
            </nav> 
        </div>
        </div>
            </div>
        
        @yield('content')
       
        
        
    </body>
    
</html>