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

            <form action="{{url('StoreFlowUps')}}" method="post">
                @csrf
                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                @endif
                <div class="col-lg-12 col-sm-12 col-xs-12">
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


                            <div id="registration-form">

                                <div class="form-title">

                                </div>

                                <div class="form-body">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Message To Lead</label>
                                                        <span class="input-icon icon-right">
                                                              <textarea name="MessageToLead" class="form-control" id="exampleFormControlTextarea1"></textarea>
                                                        </span>
                                    </div>
                                </div>

                                     <input type="hidden" name="lead_id" value="{{$lead_id}}">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Response</label>
                                                        <span class="input-icon icon-right">
                                                              <textarea class="form-control" name="Response" id="exampleFormControlTextarea1"></textarea>
                                                        </span>
                                    </div>
                                </div>




                                <button type="submit" class="btn btn-blue">update</button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </form>
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
                                        #Creation Date
                                    </th>
                                    <th>
                                        MessageToLead
                                    </th>
                                    <th>
                                        Response
                                    </th>
                                    <th>
                                        page_name
                                    </th>
                                    <th>
                                        EvaluationCall
                                    </th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($LeadFlowUps as $Lead)
                                    <tr>
                                        <td>{{$Lead->created_at}}</td>
                                        <td>{{$Lead->MessageToLead}}</td>
                                        <td>{{$Lead->Response}}</td>
                                        <td>{{\App\Models\Lead::find($Lead->lead_id)->page_name}}</td>
                                        <td>{{$Lead->EvaluationCall}}</td>

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
@section('js')
    <script>
        $(document).ready(function () {


            $(".uptStatus").on('click', function () {
                // this is for change the status of the leads
                //  $(this)
                $('#leadId').val($(this).attr('id'))
                $("#ChangeStatus").modal('show');
            });

        });
    </script>
@endsection
