
<div class="modal" id="Delete" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Eliminar Usuario</h4>
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
        </button>
      </div>
      <br />
      <div class="modal-body">
         <p style="font-size: 20px;" align="center">¿Desea Eliminar a <strong><span style="font-size: 20px;" id="nom"></span> / Rut N° <span style="font-size: 20px;" id="rut"></span></strong> del Sistema?</p> 
           <p style="font-size: 15px;" align="center"> </p>          
      </div>
      <div class="modal-footer">
        <form id="formDelete" method="POST" action="" role="form">
          {{ csrf_field() }}        
           <input type="hidden" name="_method" value="DELETE">
          <input type="hidden" id="id" name="prod_id"> 
          <button type="button" class="btn btn-default pull-rigth" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-danger pull-rigth">Eliminar</button>
        </form>
      </div>
    </div>
  </div>
</div>