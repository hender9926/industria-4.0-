
<div class="modal" id="addProd" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Registrar Producto</h4>
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
        </button>
      </div>
      <br />
      <form class="form-label-left input_mask" id="formAdd" method="POST">
        {{csrf_field()}}
        <div class="modal-body">
            <div class="form-group row">
              <div class="col-md-3 col-sm-3 form-group has-feedback">
                <input type="text" class="form-control has-feedback-left" name="prod_cod" placeholder="Código">
                <span class="fa fa-barcode form-control-feedback left" aria-hidden="true"></span>
              </div>

              <div class="col-md-2 col-sm-2 form-group has-feedback">
                <input type="number" class="form-control has-feedback-left" name="prod_min" placeholder="Mínimo">
                <span class="fa fa-angle-down form-control-feedback left" aria-hidden="true"></span>
              </div>

              <div class="col-md-3 col-sm-3 form-group has-feedback">
                <input type="number" class="form-control has-feedback-left" name="prod_max" placeholder="Máximo">
                <span class="fa fa-angle-up form-control-feedback left" aria-hidden="true"></span>
              </div>

              <div class="col-md-4 col-sm-4 form-group has-feedback">
                <input type="text" class="form-control has-feedback-left" name="prod_des" placeholder="Descripción">
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