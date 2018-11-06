@extends('layouts.admin')

@section('content')

<main class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="form-group col-md-12">

                <h2>Posts</h2>

                <div class="box-body table-responsive">
                    <table class="table table-hover">


                        <thead>

                            <tr>
                                <th>Post ID</th>
                                <th>Photo</th>
                                <th>User</th>
                                <th>Title</th>
                                <th>Body</th>
                                <th>Category</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                            </tr>

                        </thead>
                        <tbody>

                            @if ($posts)

                            @foreach ($posts as $post)

                            <tr>
                                <td>{{$post->id}}</td>
                                <td><img height="50" src="{{$post->avatar ? $post->avatar->file : 'http://www.hutterites.org/wp-content/uploads/2012/03/placeholder.jpg'}}"
                                        alt=""></td>
                                <td>{{$post->user->name}}</td>
                                <td>{{$post->title}}</td>
                                <td>{{$post->body}}</td>
                                <td>{{$post->category_id}}</td>
                                <td>{{$post->created_at}}</td>
                                <td>{{$post->updated_at}}</td>

                            </tr>

                            @endforeach

                            @endif

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
    @endsection