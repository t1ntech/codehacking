@extends('layouts.admin')

@section('content')

<main class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="form-group col-md-12">
                <p>Create a new Agent </p>

                {!! Form::open(['method'=>'POST', 'action'=> 'AdminUsersController@store', 'files' => true ]) !!}

                <div class="form-group">
                    {!! Form::label('avatar_id', 'Avatar:') !!}
                    {!! Form::file('avatar_id', null, ['class' => 'form-control']) !!}
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
                    {!! Form::select('status', array(1 => 'Active', 0 => 'Not Active'), 0 , ['class' =>
                    'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('role_id', 'Role:') !!}
                    {!! Form::select('role_id', ['' => 'Choose Options'] + $roles, null, ['class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::submit('Hit me!', ['class' => 'btn btn-primary']) !!}
                </div>


                {!! Form::close() !!}

                @include('includes.form_errors')

            </div>
    
        </div>
    </div>
</main>




@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop