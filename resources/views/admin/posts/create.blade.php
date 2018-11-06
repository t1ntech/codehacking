@extends('layouts.admin')

@section('content')

<main class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="form-group col-md-12">


                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3 border-right">
                                <h4>Add New Post</h4>
                            </div>
                            {!! Form::open(['method'=>'POST', 'action'=> 'AdminPostsController@store', 'files' => true]) !!}

                            <div class="form-group col-md-7">
                                {!! Form::submit('New Post!', ['class' => 'btn btn-dark']) !!}
                            </div>

                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-8">
                                <form>
                                    <div class="form-group">
                                        {!! Form::label('title', 'Title') !!}
                                        {!! Form::text('title', '', ['class' => 'form-control']) !!}
                                    </div>

                                    <div class="form-group">
                                            {!! Form::label('category_id', 'Category:') !!}
                                            {!! Form::select('category_id', array(1 => 'PHP', 0 => 'Javascript' ), null, ['class' => 'form-control']) !!}
                                    </div>

                                    <div class="form-group">
                                            {!! Form::label('avatar_id', 'Post Pic Upload:') !!}
                                            {!! Form::file('avatar_id', null, ['class' => 'form-control']) !!}
                                    </div>

                                    <div class="form-group">
                                        {!! Form::label('body', 'Description:') !!}
                                        {!! Form::textarea('body', null, ['class' => 'form-control', 'rows' => 3]) !!}
                                    </div>
                                    
                                </form>

                                {!! Form::close() !!}

                                @include('includes.form_errors')
                                
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection