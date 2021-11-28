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
                <a class="refresh" id="refresh-toggler" href="default.htm">
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

                <form  action="{{url($FormPosting)}}" method="post">
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
                                            Lead  Information
                                        </div>
                                        <div class="form-group">
                                                               <span class="input-icon icon-right">
                                                                   <input type="text" name="Username" class="form-control"  placeholder="Username">
                                                                   <i class="glyphicon glyphicon-user circular"></i>
                                                               </span>
                                        </div>



                                        <div class="form-group">
                                                               <span class="input-icon icon-right">
                                                                   <input type="text" name="email"  class="form-control" id="emailInput" placeholder="Email Address">
                                                                   <i class="fa fa-envelope-o circular"></i>
                                                               </span>
                                        </div>
                                        <div class="form-group">
                                                               <span class="input-icon icon-right">
                                                                   <input type="text"  name="Password" class="form-control" id="passwordInput" placeholder="Password">
                                                                   <i class="fa fa-lock circular"></i>
                                                               </span>
                                        </div>




                                        <div class="form-title">
                                            business Information
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                                       <span class="input-icon icon-right">
                                                                           <input type="text"  name="Shope_Name"  class="form-control" placeholder="Shope Name">
                                                                          <i class="fas fa-store-alt"></i>
                                                                       </span>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                                       <span class="input-icon icon-right">
                                                                           <input type="text" name="Shope_Type"  class="form-control" placeholder="Shope Type">
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
                                                                           <input type="text"  name="Name"  class="form-control" placeholder="Name">
                                                                           <i class="fa fa-user"></i>
                                                                       </span>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                                       <span class="input-icon icon-right">
                                                                           <input type="text" name="Family"  class="form-control" placeholder="Family">
                                                                           <i class="fa fa-user"></i>
                                                                       </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                                       <span class="input-icon icon-right">
                                                                           <input type="text" name="mobile"  class="form-control" placeholder="Phone one">
                                                                           <i class="glyphicon glyphicon-earphone"></i>
                                                                       </span>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                                       <span class="input-icon icon-right">
                                                                           <input type="text" name="Phone_2"  class="form-control" placeholder="anther phone">
                                                                           <i class="glyphicon glyphicon-phone"></i>
                                                                       </span>
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="wide" />
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                                       <span class="input-icon icon-right">
                                                                           <input class="form-control date-picker" id="id-date-picker-1" type="text" data-date-format="dd-mm-yyyy" placeholder="Birth Date">
                                                                           <i class="fa fa-calendar"></i>
                                                                       </span>
                                                </div>
                                            </div>

                                        </div>

                                        <button type="submit" class="btn btn-blue">Register</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- /Page Body -->
            </div>
            <!-- /Page Content -->
        </div>
        <!-- /Page Container -->
        <!-- Main Container -->

    </div>


@endsection
@extends('layouts.Footer')
