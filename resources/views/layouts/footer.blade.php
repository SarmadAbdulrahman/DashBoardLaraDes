
    <!--Basic Scripts-->
    @section('Footer')
    <script src="{{url('assets/js/jquery.min.js')}}"></script>
    <script src="{{url('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{url('assets/js/slimscroll/jquery.slimscroll.min.js')}}"></script>

    <!--Beyond Scripts-->
    <script src="{{url('assets/js/beyond.min.js')}}"></script>


    <script src="http://ajax.aspnetcdn.com/ajax/modernizr/modernizr-2.8.3.js"></script>
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="http://code.jquery.com/ui/1.11.1/jquery-ui.min.js"></script>

    <!-- Ignite UI for jQuery Required Combined JavaScript Files -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
    <script src="{{url('assets/dist/js/jquery.dm-uploader.min.js')}}"></script>
    <script src="{{url('demo-ui.js')}}"></script>
    <script src="{{url('demo-config.js')}}"></script>
    <!--Page Related Scripts-->
    @yield('js')

</body>
<!--  /Body -->
</html>
@endsection
