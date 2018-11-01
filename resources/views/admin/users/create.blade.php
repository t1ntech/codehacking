{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Create Users</h1>
@stop

@section('content')

<div class="well coll-12">
    <p>Create a new Agent </p>

    {!! Form::open(['method'=>'POST', 'action'=> 'AdminUsersController@store', 'files' => true ]) !!}

<div class="form-group">  
    {!! Form::label('file', 'Avatar') !!}
    {!! Form::file('file', null, ['class' => 'form-control']) !!}
</div>


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
    {!! Form::select('status', array(1 => 'Active', 0 => 'Not Active'), 0 , ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('role_id', 'Role:') !!}
    {!! Form::select('role_id', ['' => 'Choose Options'] + $roles, null, ['class'=>'form-control']) !!}
</div>

<div class="form-group"> 
    {!! Form::submit('Hit me!', ['class' => 'btn btn-primary']) !!} 
</div>

    
    {!! Form::close() !!}
</div>

@if (count($errors) > 0 )



<div class="box-body">
    
        <div class="callout callout-danger">
                <h4>I am a danger callout!</h4>
        <ul>
             @foreach ($errors->all() as $error)

             <li>{{$errors}}</li>
                 
             @endforeach
        </ul>

    </div>
</div>
@endif

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop