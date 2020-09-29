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
</script>
@endpush

@section('content')

  <!-- page content -->
<div class="col-md-12" role="main">
  <div class="">
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Pesaje de Producto <small></small></h2>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <form class="form-label-left input_mask" action="{{route('pesajes.store')}}" method="POST">
              {{csrf_field()}}
              <div class="modal-body">
                <div class="form-group row" style="margin-left: 23%;">
                  <div class="col-md-8 col-sm-8 form-group has-feedback col-offset-2">
                    <label for="heard">Seleccione Producto:</label>
                    <select class="form-control" name="pesa_fk_prod" required>
                      <option value="">Elija un Producto..</option>
                      @foreach($productos as $prod)
                      <option value="{{$prod->prod_id}}">
                      {{$prod->prod_cod}} - {{$prod->prod_des}}
                      </option>
                      @endforeach
                    </select>
                    <input type="hidden" name="pesa_est" value="1">
                  </div>
                  <div class="col-md-2 col-sm-2 form-group has-feedback" style="margin-top: 28px;">
                    <button type="submit" class="btn btn-primary">Pesar</button>
                  </div>
                </div>
              </div>         
            </form> 
          </div>
        </div>
      </div>

    </div>
  </div>
  @include('producto.partial.modalAdd')
</div>    
  <!-- /page content -->


@endsection