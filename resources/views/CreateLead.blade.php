@extends('layouts.SideBar')
@section('content')


    <!-- /Chat Bar -->
    <!-- Page Content -->
    <div class="page-content">
        <!-- Page Breadcrumb -->
        <div class="page-breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="fa fa-home"></i>
                    <a href="#">Home</a>
                </li>
                <li>
                    <a href="#">{{$ParentPage}}</a>
                </li>
                <li class="active">{{$CurrentPage}}</li>
            </ul>
        </div>
        <!-- /Page Breadcrumb -->
        <!-- Page Header -->
        <div class="page-header position-relative">
            <div class="header-title">
                <h1>
                    {{$CurrentPage}}
                </h1>
            </div>
            <!--Header Buttons-->
            <div class="header-buttons">
                <a class="sidebar-toggler" href="#">
                    <i class="fa fa-arrows-h"></i>
                </a>
                <a class="refresh" id="refresh-toggler" href="#">
                    <i class="glyphicon glyphicon-refresh"></i>
                </a>
                <a class="fullscreen" id="fullscreen-toggler" href="#">
                    <i class="glyphicon glyphicon-fullscreen"></i>
                </a>
            </div>
            <!--Header Buttons End-->
        </div>
        <!-- /Page Header -->
        <!-- Page Body -->
        <div class="page-body">
            <!-- Your Content Goes Here -->


            <div class="row">

                <form action="{{url($FormPosting)}}" method="post">
                    @csrf

                    <div class="col-lg-6 col-sm-6 col-xs-12">
                        <div class="widget flat radius-bordered">
                            <div class="widget-header bg-blue">
                                <span class="widget-caption">{{$FormName}}</span>
                            </div>
                            <div class="widget-body">

                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif


                                @if ($message = Session::get('success'))
                                    <div class="alert alert-success alert-block">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @endif


                                <div id="registration-form">
                                    <form role="form">
                                        <div class="form-title">
                                            Lead Information
                                        </div>
                                        <div class="form-group">
                                                               <span class="input-icon icon-right">
                                                                   <input type="text" name="page_name"
                                                                          class="form-control" placeholder="page_name">
                                                                   <i class="glyphicon glyphicon-pawn circular"></i>
                                                               </span>
                                        </div>


                                        <div class="form-group">
                                                               <span class="input-icon icon-right">
                                                                   <input type="text" name="channel_type"
                                                                          class="form-control"
                                                                          id="emailInput" placeholder="channel_type">
                                                                   <i class="fa fa-envelope-o circular"></i>
                                                               </span>
                                        </div>


                                        <div class="form-title">
                                            business Information
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                                       <span class="input-icon icon-right">
                                                                           <input type="text" name="channel_links"
                                                                                  class="form-control"
                                                                                  placeholder="channel_links">
                                                                          <i class="fas fa-store-alt"></i>
                                                                       </span>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                                       <span class="input-icon icon-right">
                                                                           <input type="text" name="channel_liker"
                                                                                  class="form-control"
                                                                                  placeholder=" channel_liker">
                                                                           <i class="fas fa-store-alt"></i>
                                                                       </span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-title">
                                            Personal Information
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                                       <span class="input-icon icon-right">
                                                                           <input type="text" name="channel_number"
                                                                                  class="form-control"
                                                                                  placeholder="channel_number">
                                                                           <i class="fa fa-user"></i>
                                                                       </span>
                                                </div>
                                            </div>

                                        </div>

                                        <hr class="wide"/>
                                        <button type="submit" class="btn btn-blue">Register</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- /Page Body -->
            </div>


            <!-- this is for tables -->
            <div class="row">
                <div class="col-lg-12 col-sm-12 col-xs-12">
                    <div class="widget flat radius-bordered">
                        <div class="widget-header bg-gold">
                            <span class="widget-caption">{{$TableName}}</span>
                        </div>
                        <div class="widget-body">

                            <table class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>
                                        #
                                    </th>
                                    <th>
                                        page_name
                                    </th>
                                    <th>
                                        channel_type
                                    </th>
                                    <th>
                                        channel_number
                                    </th>
                                    <th>
                                        channel_liker
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($Leads as $Lead)
                                    <tr>
                                        <td>{{$Lead->id}}</td>
                                        <td>{{$Lead->page_name}}</td>
                                        <td>{{$Lead->channel_type}}</td>
                                        <td>{{$Lead->channel_number}}</td>
                                        <td>{{$Lead->channel_liker}}</td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>


                        </div>
                    </div>
                </div>

            </div>
            <!-- this is for tables -->
        </div>
        <!-- /Page Container -->
        <!-- Main Container -->
    </div>
@endsection
@extends('layouts.Footer')
