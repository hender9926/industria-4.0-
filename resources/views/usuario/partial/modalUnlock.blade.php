<div class="modal" id="unlockUsu" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Desbloquear Usuario</h4>
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
        </button>
      </div>
      <br />
      <div class="modal-body">
         <p style="font-size: 20px;" align="center">¿Desea aprobar Acceso al Sistema de <strong><span style="font-size: 20px;" id="nom"></span> / Rut N° <span style="font-size: 20px;" id="rut"></span></strong>?</p> 
           <p style="font-size: 15px;" align="center"> </p>          
      </div>
      <div class="modal-footer">
        <form id="formAccess" method="POST" action="" role="form">
          {{ csrf_field() }}        
          <input type="hidden" id="id" name="id"> 
          <input type="hidden" id="est" name="usu_est"> 
          <button type="button" class="btn btn-default pull-rigth" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-info pull-rigth">Desbloquear</button>
        </form>
      </div>
    </div>
  </div>
</div>