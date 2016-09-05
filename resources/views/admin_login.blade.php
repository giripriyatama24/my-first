@extends('layouts.custom_login')
@section('content')

<div class="container">
    <div class="col-xs-12 col-sm-4 col-sm-offset-4 col-md-4 col-md-offset-4">
    <div class="panel panel-default">
        
        <div class="form-group">
            {!! Form::label('user_name','User Name') !!}
            {!! Form::text('user_name','',array('class'=>'form-control')) !!}
        </div>
        <div class="form-group">
            {!! Form::label('password','Password') !!}
            {!! Form::text('password','',array('class'=>'form-control')) !!}
        </div>
        <br>
            {!! Form::submit('login') !!}
        </div>
    </div>
</div>

@endsection();