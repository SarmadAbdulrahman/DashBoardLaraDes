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
                                    <th>
                                       Lead status
                                    </th>

                                    <th>
                                        Actions
                                    </th>

                                    <th>
                                        Actions
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
                                        <td>{{\App\Models\DealStatus::find($Lead->deal_status_id)->name}}</td>
                                        <td>
                                            <button class="btn btn-azure">تحديث الحالة</button>
                                        </td>

                                        <td>
                                            <button class="btn btn-darkorange">تفاصيل</button>
                                        </td>
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
