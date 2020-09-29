
<div class="modal" id="addTurno" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Registrar Turno</h4>
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
        </button>
      </div>
      <br />
      <form class="form-label-left input_mask" id="formAdd" method="POST">
        {{csrf_field()}}
        <div class="modal-body">
          <div class="form-group row">
            <div class="col-md-12 col-sm-12 form-group has-feedback">
              <input type="text" class="form-control has-feedback-left" name="tur_nom" placeholder="Nombre" required="">
              <span class="fa fa-bold form-control-feedback left" aria-hidden="true"></span>
            </div>

            <div class="col-md-6 col-sm-6 form-group has-feedback">
              Hora Inicio
              <div class="form-group">
                <div class='input-group'>
                  <input type="time" class="form-control has-feedback-left" name="tur_ini" required="">
                  <span class="fa fa-clock-o form-control-feedback left" aria-hidden="true"></span>
                </div>  
              </div>  
            </div>

            <div class="col-md-6 col-sm-6 form-group has-feedback">
              Hora Término
              <div class="form-group">
                <div class='input-group'>
                  <input type="time" class="form-control has-feedback-left" name="tur_fin" required="">
                  <span class="fa fa-clock-o form-control-feedback left" aria-hidden="true"></span>
                </div>  
              </div>  
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