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

    var prod = '{{$pesaje[0]->pesa_fk_prod}}';
    setInterval(function(){
      $('#proceso').load('http://localhost/balanza/public/pesajes/valorpesado/'+prod).fadeIn("slow");
    }, 1000);

  });

  $(document).on("click", "#detener", function() {
    var ruta = $(this).data('ruta');
    var id = $(this).data('id');
    var cod = $(this).data('cod');
    var idprod = $(this).data('idprod');
    var des =$(this).data('des');
    $('.modal-header #nom').text(des);
    $('#cod').text(cod);
    $('#des').text(des);
    $('.modal-footer #code').val(idprod);
    $('#formDetener').attr('action', ruta);
    $('#stopProceso').modal('show');
  });
</script>
@endpush

@section('content')
<!-- page content -->
<div class="col-md-12" role="main">
  <div class="alert alert-success alert-dismissible text-center" role="alert">
   <span>Proceso de Pesaje Iniciado Exitosamente</span> 
  </div>  
  <div class="">
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-6">
        <div class="table-responsive">
          <table class="table">
            <tbody>
              <tr>
                <th style="width:50%">Producto:</th>
                <td>{{$pesaje[0]->producto->prod_cod}} - {{$pesaje[0]->producto->prod_des}}</td>
              </tr>
              <tr>
                <th>Peso Mínimo:</th>
                <td>{{$pesaje[0]->producto->prod_min}}</td>
              </tr>
              <tr>
                <th>Peso Máximo:</th>
                <td>{{$pesaje[0]->producto->prod_max}}</td>
              </tr>
              <tr>
                <td colspan="2" align="center">
                  <a href="#" id="detener" class="btn btn-sm btn-danger" type="button" style="margin-top: 10px; width: 80%;" data-ruta="{{route('pesajes.update',$pesaje[0]->pesa_id)}}" data-idprod="{{$pesaje[0]->pesa_fk_prod}}" data-cod="{{$pesaje[0]->producto->prod_cod}}" data-des="{{$pesaje[0]->producto->prod_des}}">
                    <i class="fa fa-stop" aria-hidden="true"></i>    
                  </a>                        
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>      
      <div class="col-md-6 col-sm-6" id="proceso"></div>
    </div>
  </div>
  @include('pesaje.partial.modalStopProcess')
</div>    
  <!-- /page content -->


@endsection