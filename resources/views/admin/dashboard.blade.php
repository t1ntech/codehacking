@extends('layouts.admin')

@section('content')

<style>

        .fb-profile-block {
            margin: auto;
            position: relative;
            width: 100%;
          }
          .cover-container{
             
            background:grey;
          }

          .fb-profile-block-thumb{
            display: block;
            height: 115px;
            overflow: hidden;
            position: relative;
            text-decoration: none;
          }
          .fb-profile-block-menu {
            border: 1px solid #d3d6db;
            border-radius: 0 0 3px 3px;
          }
          .profile-img a{
              bottom: 15px;
              box-shadow: none;
              display: block;
              left: 15px;
              padding:1px;
              position: absolute;
              height: 160px;
              width: 160px;
              background: rgba(0, 0, 0, 0.3) none repeat scroll 0 0;
              z-index:9;
          }
          .profile-img img {
            background-color: #fff;
            border-radius: 2px;
            box-shadow: 0 1px 1px rgba(0, 0, 0, 0.07);
            height:158px;
            padding: 5px;
            width:158px;
          }
          .profile-name {
            bottom: 60px;
            left: 200px;
            position: absolute;
          }
          .profile-name h2 {
            color: #fff;
            font-size: 24px;
            font-weight: 600;
            line-height: 30px;
            max-width: 275px;
            position: relative;
            text-transform: uppercase;
          }
          .fb-profile-block-menu{
            height: 44px;
            position: relative;
            width:100%;
            overflow:hidden;
           }
          .block-menu {
            clear: right;
            padding-left: 205px;
          }
          .block-menu ul{
              margin:0;
              padding:0;
          }
          .block-menu ul li{
              display:inline-block;
          }
          .block-menu ul li a {
            border-right: 1px solid #e9eaed;
            float: left;
            font-size: 14px;
            font-weight: bold;
            height: 42px;
            line-height: 3.0;
            padding: 0 17px;
            position: relative;
            vertical-align: middle;
            white-space: nowrap;
            color:#4b4f56;
            text-transform:capitalize;
          }
          .block-menu ul li:first-child a{
            border-left: 1px solid #e9eaed;
          }
</style>
<main class="page-content">
        
            <div class="row">
                            <div class="col-md-12">
                                <div class="fb-profile-block">
                                    <div class="fb-profile-block-thumb cover-container"></div>
                                    <div class="profile-img">
                                        <a href="#">
                                                <img src="/images/{{ Auth::user()->avatar->file }}">        
                                        </a>
                                    </div>
                                    <div class="profile-name">
                                        <h2>{{ auth()->user()->name }}</h2>
                                    </div>
                                    
                                    <div class="fb-profile-block-menu">
                                        <div class="block-menu">
                                            <ul>
                                                <li><a href="#">Timeline</a></li>
                                                <li><a href="#">about</a></li>
                                                <li><a href="#">Friends</a></li>
                                                <li><a href="#">Photos</a></li>
                                                <li><a href="#">More...</a></li>
                                            </ul>
                                        </div>
                                        <div class="block-menu">
                                            <ul>
                                                <li><a href="#">Timeline</a></li>
                                                <li><a href="#">about</a></li>
                                                <li><a href="#">Friends</a></li>
                                                <li><a href="#">Photos</a></li>
                                                <li><a href="#">More...</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
@stop