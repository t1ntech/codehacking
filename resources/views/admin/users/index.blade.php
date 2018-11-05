@extends('layouts.admin')

@section('content')

<main class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="form-group col-md-12">
        
                
                {{--  @if(isset($users))

                <img class="rounded-circle" src="/images/{{ $user->avatar->file }}" />
                
                @endif
                  --}}
                    
        <div class="box-body table-responsive">
          <table class="table table-hover">
                  <thead>
                  <tr>
                    <th>ID Number</th>
                    <th>Avatar</th>
                    <th>Naam</th>
                    <th>E-mail</th>
                    <th>Role</th>
                    <th>Active</th>
                    <th>Joined Date</th>
                    <th>Updated at</th>
                    
                  </tr>
                  </thead>
                  <tbody>
  
            @if($users)
  
                @foreach($users as $user)
  
              <tr>
                  <td>{{$user->id}}</td>
                  <td><img height="25" width="25" src="/images/{{$user->avatar ? $user->avatar->file : 'No Avatar'}}" alt=""></td>
                  <td><a href=" {{ route('users.edit', $user->id) }}"> {{$user->name}} </a></td>
                  <td>{{$user->email}}</td>
                  <td>{{$user->role['name']}}</td>
                  <td>{{$user->is_active == 1 ? 'Active' : 'Not Active'}}</td>
                  <td>{{$user->created_at->diffForHumans()}}</td>
                  <td>{{$user->updated_at->diffForHumans()}}</td>
                  
              </tr>
  
                @endforeach
            @endif
  
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
      </main>
@stop