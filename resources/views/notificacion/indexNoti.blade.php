@extends('layouts.main')

    <link href="cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link href="{{URL::asset('vendors-gentella/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{URL::asset('vendors-gentella/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{URL::asset('vendors-gentella/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{URL::asset('vendors-gentella/iCheck/skins/flat/green.css')}}" rel="stylesheet">
    <!-- Datatables -->
    <link href="{{URL::asset('vendors-gentella/datatables.net-bs/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('vendors-gentella/datatables.net-buttons-bs/css/buttons.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('vendors-gentella/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('vendors-gentella/datatables.net-responsive-bs/css/responsive.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('vendors-gentella/datatables.net-scroller-bs/css/scroller.bootstrap.min.css')}}" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="{{URL::asset('build-gentella/css/custom.min.css')}}" rel="stylesheet">

@section('content')
  <!-- page content -->
<div class="col-md-12" role="main">
  @include('include.mensajes')
  <div class="">
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
          <div class="x_title">
            <h2>Notificaciones Enviadas<small>{{$today}}</small></h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="" id="add" data-ruta="{{route('productos.store')}}"><i class="fa fa-search"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <div class="row">
              <div class="col-sm-12">
                <div class="card-box table-responsive">
                  <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                      <tr>
                        <th>Código</th>
                        <th>Descripción</th>
                        <th>Peso Mínimo</th>
                        <th>Peso Máximo</th>
                        <th></th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr style="height: 5px; padding: 0px;">
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td style="padding: 0px;" align="center"></td>
                        <td style="padding: 0px;" align="center"></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>    
  <!-- /page content -->


@endsection