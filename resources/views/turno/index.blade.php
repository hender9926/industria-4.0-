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

@push('js')
<script>
  $(document).ready(function() {
    $("#datatable").DataTable();
  });

  $(document).on("click", "#add", function() {
    var ruta = $(this).data('ruta');
    $('#formAdd').attr('action', ruta);
    $('#addTurno').modal('show');
  });

  $(document).on("click", "#edit", function() {
    var ruta = $(this).data('ruta');
    var id = $(this).data('id');
    var cod = $(this).data('cod');
    var des = $(this).data('des');
    var min = $(this).data('min');
    var max =$(this).data('max');
    $('#formEdit').attr('action', ruta);
    $('#EditProd').modal('show');
    $('#id').val(id);
    $('#cod').val(cod);
    $('#des').val(des);
    $('.modal-header #nom').text(des);
    $('#min').val(min);
    $('#max').val(max);
  });

  $(document).on("click", "#delete", function() {
    var ruta = $(this).data('ruta');
    var id = $(this).data('id');
    var cod = $(this).data('cod');
    var des = $(this).data('des');
    $('#formDelete').attr('action', ruta);
    $('#DeleteProd').modal('show');
    $('#id').val(id);
    $('.modal-body #cod').text(cod);
    $('.modal-body #des').text(des);
    $('.modal-header #nom').text(des);
  });  

</script>
@endpush

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
            <h2>Turnos Registrados <small></small></h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="" id="add" data-ruta="{{route('turnos.store')}}"><i class="fa fa-plus"></i></a>
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
                        <th>Nombre</th>
                        <th>Inicio</th>
                        <th>Término</th>
                        <th></th>
                        <th></th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($turnos as $tur)                      
                      <tr style="height: 5px; padding: 0px;">
                        <td>{{$tur->tur_cod}}</td>
                        <td>{{$tur->tur_nom}}</td>
                        <td>{{$tur->tur_ini}}</td>
                        <td>{{$tur->tur_fin}}</td>
                        <td style="padding: 0px;" align="center">                          
                          <a href="#" id="access" class="btn btn-sm btn-secondary" type="button" style="margin-top: 10px; width: 80%;" data-ruta="" data-id="" data-cod="">
                            <i class="fa fa-unlock" aria-hidden="true"></i>
                          </a>                          
                        </td>   
                        <td style="padding: 0px;" align="center">                          
                          <a href="#" id="edit" class="btn btn-sm btn-secondary" type="button" style="margin-top: 10px; width: 80%;" data-ruta="" data-id="" data-cod="" data-des="" data-min="" data-max="">
                            <i class="fa fa-edit" aria-hidden="true"></i>    
                          </a>                          
                        </td>
                        <td style="padding: 0px;" align="center">                          
                          <a href="#" id="delete" class="btn btn-sm btn-danger" type="button" style="margin-top: 10px; width: 80%;" data-ruta="
                          " data-id="" data-cod="" data-des="" data-min="" data-max="">
                            <i class="fa fa-trash" aria-hidden="true"></i>    
                          </a>                          
                        </td>
                      </tr>
                      @endforeach
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
  @include('turno.partial.modalAdd')
  @include('turno.partial.modalEdit')
  @include('turno.partial.modalDelete')
</div>    
  <!-- /page content -->


@endsection