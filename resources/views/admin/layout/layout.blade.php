@include('admin/fragment/header')
<!--  BEGIN MAIN CONTAINER  -->
<div class="main-container" id="container">
@include('admin/layout/sidebar')
<!--  BEGIN CONTENT AREA  -->
    @yield('content')
    <!--  END CONTENT AREA  -->
</div>
<!-- END MAIN CONTAINER -->



<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
<script src="{{asset('static/assets/js/libs/jquery-3.1.1.min.js')}}"></script>
<script src="{{asset('static/bootstrap/js/popper.min.js')}}"></script>
<script src="{{asset('static/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('static/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
<script src="{{asset('static/assets/js/app.js')}}"></script>
<script>
    $(document).ready(function () {
        App.init();
    });
</script>
<script src="{{asset('static/assets/js/custom.js')}}"></script>
<!-- END GLOBAL MANDATORY SCRIPTS -->

<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
<script src="{{asset('static/plugins/apex/apexcharts.min.js')}}"></script>
<script src="{{asset('static/assets/js/dashboard/dash_1.js')}}"></script>
<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->

</body>

<!-- Mirrored from designreset.com/cork/ltr/demo4/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Jan 2021 02:29:15 GMT -->
</html>
