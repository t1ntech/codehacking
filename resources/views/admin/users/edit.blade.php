@extends('layouts.admin')

@section('content')

<main class="page-content">

    <div class="container-fluid">
        <div class="row">

            <div class="form-group col-md-12">

                {!! Form::model($user, ['method'=>'PATCH', 'action'=> ['AdminUsersController@update', $user->id],
                'files' => true ]) !!}

                <div class="card col-md-12">
                    <p>Edit a new Agent </p>

                    <div class="form-group">

                        <img class="img-rounded" height="120" width="120" src="/images/{{ $user->avatar ? $user->avatar->file : 'http://www.hutterites.org/wp-content/uploads/2012/03/placeholder.jpg'}}"
                            alt=""><hr>

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
                        {!! Form::label('is_active', 'Status') !!}
                        {!! Form::select('is_active', array(1 => 'Active', 0 => 'Not Active'), null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('role_id', 'Role:') !!}
                        {!! Form::select('role_id', $roles, null, ['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group">

                        {!! Form::submit('Update User', ['class' => 'btn btn-success col-sm-3']) !!}
               
                    </div>

                    {!! Form::close() !!}

                
                    {!! Form::open(['method' => 'DELETE', 'action' => [ 'AdminUsersController@destroy', $user->id]]) !!}

                    <div class="form-group">

                    {!! Form::submit('Delete User', ['class' => 'btn btn-dark col-sm-3']) !!}

                    </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</main>


@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('Hi!');
</script>
@stop