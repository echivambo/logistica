@include('admin.head.head')

<body>
<!-- Preloader -->
<div class="preloader">
    <div class="cssload-speeding-wheel"></div>
</div>

<div id="wrapper">
        @include('admin.header.header')
        @include('admin.sidebar.sidebar')

        <!-- Page Content -->
            <div id="page-wrapper">
                <div class="container-fluid">

                    @yield('content')

                </div>
            </div>
            <!-- /#page-wrapper -->

</div>


<script src="{{ asset('admin/plugins/bower_components/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('admin/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('admin/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js') }}"></script>
<script src="{{ asset('admin/js/jquery.slimscroll.js') }}"></script>
<script src="{{ asset('admin/js/waves.js') }}"></script>
<script src="{{ asset('admin/plugins/bower_components/waypoints/lib/jquery.waypoints.js') }}"></script>
<script src="{{ asset('admin/plugins/bower_components/counterup/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('admin/plugins/bower_components/raphael/raphael-min.js') }}"></script>
<script src="{{ asset('admin/plugins/bower_components/morrisjs/morris.js') }}"></script>
<script src="{{ asset('admin/js/custom.min.js') }}"></script>
<script src="{{ asset('admin/js/dashboard1.js') }}"></script>
<script src="{{ asset('admin/plugins/bower_components/toast-master/js/jquery.toast.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $.toast({
            heading: 'Welcome to Pixel admin',
            text: 'Use the predefined ones, or specify a custom position object.',
            position: 'top-right',
            loaderBg: '#ff6849',
            icon: 'info',
            hideAfter: 3500,
            stack: 6
        })
    });
</script>
</body>
</html>