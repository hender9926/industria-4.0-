
<div class="modal" id="EditProd" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Editar <span id="nom"></span></h4>
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
        </button>
      </div>
      <br />
      <form class="form-label-left input_mask" id="formEdit" method="POST">
        <input type="hidden" name="_method" value="PUT">
        <input type="hidden" name="_token" value="{!! csrf_token() !!}">  
        <div class="modal-body">
            <div class="form-group row">
              <div class="col-md-3 col-sm-3 form-group has-feedback">
                <input type="text" class="form-control has-feedback-left" name="prod_cod" id="cod" placeholder="Código de Producto">
                <span class="fa fa-barcode form-control-feedback left" aria-hidden="true"></span>
              </div>

              <div class="col-md-2 col-sm-2 form-group has-feedback">
                <input type="number" class="form-control has-feedback-left" name="prod_min" id="min" placeholder="Peso Mínimo">
                <span class="fa fa-angle-down form-control-feedback left" aria-hidden="true"></span>
              </div>

              <div class="col-md-3 col-sm-3 form-group has-feedback">
                <input type="number" class="form-control has-feedback-left" name="prod_max" id="max" placeholder="Peso Máximo">
                <span class="fa fa-angle-up form-control-feedback left" aria-hidden="true"></span>
              </div>

              <div class="col-md-4 col-sm-4 form-group has-feedback">
                <input type="text" class="form-control has-feedback-left" name="prod_des" id="des" placeholder="Descripción">
                <span class="fa fa-bold form-control-feedback left" aria-hidden="true"></span>
              </div>              
            </div>

        </div>         
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary">Registrar</button>
        </div>
      </form>  
    </div>
  </div>
</div>