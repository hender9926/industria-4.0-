<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SPT|Abitek </title>
    <!-- Bootstrap -->
    <link href="{{URL::asset('vendors-gentella/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{URL::asset('vendors-gentella/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{URL::asset('vendors-gentella/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- jQuery custom content scroller -->
    <link href="{{URL::asset('vendors-gentella/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css')}}" rel="stylesheet"/>
    <!-- Custom Theme Style -->
    <link href="{{URL::asset('build-gentella/css/custom.min.css')}}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{URL::asset('vendors-gentella/iCheck/skins/flat/green.css')}}" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="{{URL::asset('vendors-gentella/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="{{URL::asset('vendors-gentella/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">


   <!-- <link rel="shortcut icon" type="image/png" href="{{URL::asset('images/icoplanet.ico')}}"/> -->
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        @include('layouts.sidebar')
        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <div class="nav toggle">
                  <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
          </div>
        <!-- /top navigation -->
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            @yield('content')
          </div>
        </div>
        <!-- /page content -->
        <!-- footer content -->
            @include('layouts.footer')
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="{{URL::asset('vendors-gentella/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
   <script src="{{URL::asset('vendors-gentella/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{URL::asset('vendors-gentella/fastclick/lib/fastclick.js')}}"></script>
    <!-- NProgress -->
    <script src="{{URL::asset('vendors-gentella/nprogress/nprogress.js')}}"></script>
        <!-- bootstrap-progressbar -->
    <script src="{{URL::asset('vendors-gentella/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
    <!-- jQuery custom content scroller -->
    <script src="{{URL::asset('vendors-gentella/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js')}}"></script>

    @stack('js')
    <!-- Custom Theme Scripts -->
    <script src="{{URL::asset('build-gentella/js/custom.min.js')}}"></script>
    <!-- Datatables -->
    <script src="{{URL::asset('vendors-gentella/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{URL::asset('vendors-gentella/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('vendors-gentella/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{URL::asset('vendors-gentella/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('vendors-gentella/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
    <script src="{{URL::asset('vendors-gentella/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{URL::asset('vendors-gentella/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{URL::asset('vendors-gentella/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')}}"></script>
    <script src="{{URL::asset('vendors-gentella/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
    <script src="{{URL::asset('vendors-gentella/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{URL::asset('vendors-gentella/datatables.net-responsive-bs/js/responsive.bootstrap.js')}}"></script>
    <script src="{{URL::asset('vendors-gentella/datatables.net-scroller/js/dataTables.scroller.min.js')}}"></script>



    <!-- Chart.js -->
    <script src="{{URL::asset('vendors-gentella/Chart.js/dist/Chart.min.js')}}"></script>
    <!-- gauge.js -->
    <script src="{{URL::asset('vendors-gentella/gauge.js/dist/gauge.min.js')}}"></script>
    <!-- iCheck -->
    <script src="{{URL::asset('vendors-gentella/iCheck/icheck.min.js')}}"></script>
    <!-- Skycons -->
    <script src="{{URL::asset('vendors-gentella/skycons/skycons.js')}}"></script>
    <!-- Flot -->
    <script src="{{URL::asset('vendors-gentella/Flot/jquery.flot.js')}}"></script>
    <script src="{{URL::asset('vendors-gentella/Flot/jquery.flot.pie.js')}}"></script>
    <script src="{{URL::asset('vendors-gentella/Flot/jquery.flot.time.js')}}"></script>
    <script src="{{URL::asset('vendors-gentella/Flot/jquery.flot.stack.js')}}"></script>
    <script src="{{URL::asset('vendors-gentella/Flot/jquery.flot.resize.js')}}"></script>
    <!-- Flot plugins -->
    <script src="{{URL::asset('vendors-gentella/flot.orderbars/js/jquery.flot.orderBars.js')}}"></script>
    <script src="{{URL::asset('vendors-gentella/flot-spline/js/jquery.flot.spline.min.js')}}"></script>
    <script src="{{URL::asset('vendors-gentella/flot.curvedlines/curvedLines.js')}}"></script>
    <!-- DateJS -->
    <script src="{{URL::asset('vendors-gentella/DateJS/build/date.js')}}"></script>

    <!-- JQVMap -->
    <script src="{{URL::asset('vendors-gentella/jqvmap/dist/jquery.vmap.js')}}"></script>
    <script src="{{URL::asset('vendors-gentella/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
    <script src="{{URL::asset('vendors-gentella/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{('vendors-gentella/moment/min/moment.min.js')}}"></script>
    <script src="{{('vendors-gentella/bootstrap-daterangepicker/daterangepicker.js')}}"></script>

  </body>
</html>