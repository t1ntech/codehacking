{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Edit Users</h1>
@stop



@section('content')

{!! Form::model($user, ['method'=>'PATCH', 'action'=> ['AdminUsersController@update', $user->id], 'files' => true ]) !!}


@include('includes.form_errors')



<div class="col-sm-3">
    <center>
        <img class="img-rounded" height="120" width="120" src="/images/{{$user->avatar ? $user->avatar->file : 'No Avatar'}}"
            alt=""><br>
        <div class="form-group">

            {!! Form::label('avatar_id', 'Avatar:') !!}
            {!! Form::file('avatar_id', null, ['class' => 'form-control']) !!}
        </div>
</div>


<div class="well col-sm-9">
    <p>Edit a new Agent </p>

    <div class="form-group">
        {!! Form::label('name', 'Name') !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('email', 'E-mail') !!}
        {!! Form::email('email', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('password', 'Password:') !!}
        {!! Form::password('password', ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('status', 'Status') !!}
        {!! Form::select('status', array(1 => 'Active', 0 => 'Not Active'), '' , ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('role_id', 'Role:') !!}
        {!! Form::select('role_id', $roles, null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Edit', ['class' => 'btn btn-success']) !!}
    </div>


    {!! Form::close() !!}
</div>



@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('Hi!');
</script>
@stop