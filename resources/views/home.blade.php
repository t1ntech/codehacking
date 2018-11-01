@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">New Agents</span>
              <span class="info-box-number">5</span>
            </div>
            
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                  <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>
      
                  <div class="info-box-content">
                    <span class="info-box-text">New Scripts</span>
                    <span class="info-box-number">5</span>
                  </div>
                  
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>
        <!-- /.col -->

@stop