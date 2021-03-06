@extends('layouts.app')

@section('content')

<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Agents</h3>

        <div class="box-tools">
          <div class="input-group input-group-sm" style="width: 150px;">
            <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

            <div class="input-group-btn">
              <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
            </div>
          </div>
        </div>
      </div>
      <!-- /.box-header -->
      <div class="box-body table-responsive">
        <table class="table table-hover">
                <thead>
                <tr>
                  <th>ID</th>
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
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>
</div>
</section>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop