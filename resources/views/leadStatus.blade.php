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

                            @if ($message = Session::get('success'))
                                <div class="alert alert-success alert-block">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                    <strong>{{ $message }}</strong>
                                </div>
                            @endif


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
                                            <button id="{{$Lead->id}}"  class="btn btn-azure uptStatus">تحديث الحالة</button>
                                        </td>

                                        <td>
                                            <a href="#" id="{{$Lead->id}}" class="btn btn-darkorange uptDetails">تفاصيل</a>
                                        </td>
                                    </tr>
                                @endforeach




                                </tbody>
                            </table>




                                <form method="POST" action="{{url('updateStatus')}}">
                                <div class="modal modal-primary" id="ChangeStatus">
                                    @csrf
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h4 class="modal-title">تحديث الحالة</h4>
                                            </div>
                                            <div class="modal-body">
                                                  <select  class="form-control" name="status">
                                                     @foreach($DealStatus as $Deal)
                                                          <option value="{{$Deal->id}}">{{$Deal->name}}</option>
                                                      @endforeach
                                                  </select>
                                                <input type="hidden" name="leadId" id="leadId">
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-warning" data-dismiss="modal">غلق</button>
                                                <button type="submit" class="btn btn-primary">تحديث</button>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->
                    </form>
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
        $(document).ready(function (){


            $(".uptStatus").on('click',function (){
                // this is for change the status of the leads
              //  $(this)
                $('#leadId').val( $(this).attr('id'))
                $("#ChangeStatus").modal('show');
            });

        });
    </script>
@endsection
