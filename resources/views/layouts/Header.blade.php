
<!DOCTYPE html>
<!--
Restx
Version: 1.6.0
Date:2021-11-22 11:41 AM
-->

<html xmlns="http://www.w3.org/1999/xhtml">

<!-- Head -->
<head>
    <meta charset="utf-8" />
    <title>{{$CurrentPage}}</title>

    <meta name="description" content="blank page" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="shortcut icon" href="assets/img/favicon.png')}}" type="image/x-icon">

    <!--Basic Styles-->
    <link href="{{url('assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link id="bootstrap-rtl-link" href="" rel="stylesheet" />
    <link href="{{url('assets/css/font-awesome.min.css')}}" rel="stylesheet" />
    <link href="{{url('assets/css/weather-icons.min.css')}}" rel="stylesheet" />



    <!--Beyond styles-->
    <link id="beyond-link" href="{{url('assets/css/beyond.min.css')}}" rel="stylesheet" />
    <link href="{{url('assets/css/demo.min.css')}}" rel="stylesheet" />
    <link href="{{url('assets/css/typicons.min.css')}}" rel="stylesheet" />
    <link href="{{url('assets/css/animate.min.css')}}" rel="stylesheet" />
    <link id="skin-link" href="" rel="stylesheet" type="text/css" />

    <!--Skin Script: Place this script in head to load scripts for skins and rtl support-->
    <script src="{{url('assets/js/skins.min.js')}}"></script>


    <!-- Ignite UI for jQuery Required Combined CSS Files -->
    <link href="{{url('assets/dist/css/jquery.dm-uploader.min.css')}}" rel="stylesheet">
    <link href="{{url('styles.css')}}" rel="stylesheet">




</head>
@yield('SideBar')
@yield('content')
<!-- Main Container -->
@yield('Footer')
<!-- /Head -->
<!-- Body -->
