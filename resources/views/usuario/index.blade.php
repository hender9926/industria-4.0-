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
  $(document).ready(function(){
    $("#datatable").DataTable({
      language: {
        "decimal": "",
        "emptyTable": "No hay información",
        "info": "Mostrando _START_ a _END_ de _TOTAL_ Registros",
        "infoEmpty": "Mostrando 0 to 0 of 0 Registros",
        "infoFiltered": "(Filtrado de _MAX_ total entradas)",
        "infoPostFix": "",
        "thousands": ",",
        "lengthMenu": "Mostrar _MENU_ Registros",
        "loadingRecords": "Cargando...",
        "processing": "Procesando...",
        "search": "Buscar:",
        "zeroRecords": "Sin resultados encontrados",
        "paginate": {
          "first": "Primero",
          "last": "Ultimo",
          "next": "Siguiente",
          "previous": "Anterior"
        }
      },      
    });

    var readURL = function(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('.profile-pic').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $(".file-upload").on('change', function(){
        readURL(this);
    });
    $(".upload-button").on('click', function() {
       $(".file-upload").click();
    });

  });

  $("#dig").blur(function(){
    var rutCompleto = $("#rut").val()+'-'+$("#dig").val();
    var Fn = {
      // Valida el rut con su cadena completa "XXXXXXXX-X"
      validaRut : function (rutCompleto) {
        if (!/^[0-9]+[-|‐]{1}[0-9kK]{1}$/.test( rutCompleto ))
          return false;
        var tmp   = rutCompleto.split('-');
        var digv  = tmp[1]; 
        var rut   = tmp[0];
        if ( digv == 'K' ) digv = 'k' ;
        return (Fn.dv(rut) == digv );
      },
      dv : function(T){
        var M=0,S=1;
        for(;T;T=Math.floor(T/10))
          S=(S+T%10*(9-M++%6))%11;
        return S?S-1:'k';
      }
    }
    // Uso de la función
    var rpt = ( Fn.validaRut(rutCompleto) ? 'Valido' : 'inválido');
      if (rpt == 'inválido'){
        $("#errormsg").addClass('hide')
        $("#registrar").prop('disabled', true);        
      }else if(rpt == 'Valido'){
        $("#errormsg").removeClass('hide')
        $("#registrar").prop('disabled', false);  
      }
  });

  $(document).on("click", "#add", function() {
    var ruta = $(this).data('ruta');
    $('#formAdd').attr('action', ruta);
    $('#addUsu').modal('show');
  });

  $(document).on("click", "#show", function() {
    $('#showUser').modal('show');
    var id = $(this).data('id');
    var rut = $(this).data('rut');
    var nom = $(this).data('nom');
    var car = $(this).data('car');
    var mail = $(this).data('mail');
    var tlf = $(this).data('tlf');
    var foto = $(this).data('foto');
    var del = $(this).data('del');
    $('#formDelete').attr('action', del);
    $('#id').val(id);
    $('.modal-body #rut').text(rut);
    $('.modal-header #nom').text(nom);
    $('#car').text(car);
    $('#mail').text(mail);
    $('#tlf').text(tlf);   
    $('#foto').attr('src', foto);   
  });

  $(document).on("click", "#access", function() {
    var ruta = $(this).data('ruta');
    var id = $(this).data('id');
    var rut = $(this).data('rut');
    var nom = $(this).data('nom');
    var est = $(this).data('est');
    console.log(est);
    if(est == "1") {
      $('#lockUsu').modal('show');
    }else if(est == "0"){
      $('#unlockUsu').modal('show');
    }
    $('.modal-footer #formAccess').attr('action', ruta);
    $('.modal-footer #id').val(id);
    $('.modal-body #rut').text(rut);
    $('.modal-body #nom').text(nom);
    $('.modal-footer #est').val(est);
  });  


  $(document).on("click", "#edit", function() {
    $('#editUsu').modal('show');
    var ruta = $(this).data('ruta');
    var id = $(this).data('id');
    var cod = $(this).data('cod');
    var des = $(this).data('des');
    var min = $(this).data('min');
    var max =$(this).data('max');
    $('#formEdit').attr('action', ruta);
    
    $('#id').val(id);
    $('#cod').val(cod);
    $('#des').val(des);
    $('.modal-header #nom').text(des);
    $('#min').val(min);
    $('#max').val(max);
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
            <h2>Usuarios Registrados<small></small></h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="" id="add" data-ruta="{{route('usuarios.store')}}"><i class="fa fa-plus"></i></a>
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
                        <th>Rut</th>
                        <th>Nombres</th>
                        <th>Cargo</th>
                        <th></th>
                        <th></th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($user as $u)
                      <tr style="height: 5px; padding: 0px;">
                        <td>{{$u->usu_rut}} - {{$u->usu_dig}}</td>
                        <td>{{$u->usu_nom}} {{$u->usu_ape}}</td>
                        <td>{{$u->usu_fk_car}}</td>     
                        <td style="padding: 0px;" align="center">                          
                          <a href="#" id="show" data-foto="{{URL::asset('images/avatar/')}}" class="btn btn-sm btn-secondary" type="button" style="margin-top: 10px; width: 80%;" data-ruta="" data-id="" data-cod="">
                            <i class="fa fa-eye" aria-hidden="true"></i>    
                          </a>                          
                        </td>
                        <td style="padding: 0px;" align="center">                          
                          <a href="#" id="access" class="btn btn-sm btn-secondary" type="button" style="margin-top: 10px; width: 80%;" data-ruta="" data-id="" data-cod="">
                            <i class="fa fa-unlock" aria-hidden="true"></i>
                          </a>                          
                        </td>
                        <td style="padding: 0px;" align="center">       
                          <a href="#" id="edit" class="btn btn-sm btn-secondary" type="button" style="margin-top: 10px; width: 80%;" data-ruta="" data-id="" data-cod="">
                            <i class="fa fa-edit" aria-hidden="true"></i>    
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
  @include('usuario.partial.modalAdd')
  @include('usuario.partial.show')
  @include('usuario.partial.modalLock')
  @include('usuario.partial.modalUnlock')
  @include('usuario.partial.modalEdit')
</div>    
  <!-- /page content -->


@endsection