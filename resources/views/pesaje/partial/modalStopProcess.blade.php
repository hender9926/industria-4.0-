<div class="modal" id="stopProceso" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Detener Pesaje de <span id="nom"></span></h4>
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
        </button>
      </div>
      <br />
      <div class="modal-body">
         <p style="font-size: 20px;" align="center">¿Desea Detener el Pesaje de <strong><span style="font-size: 20px;" id="cod"></span> / <span style="font-size: 20px;" id="des"></span></strong> en el Sistema?</p> 
           <p style="font-size: 15px;" align="center"> </p>          
      </div>
      <div class="modal-footer">
        <form id="formDetener" method="POST" action="" role="form">
          {{ csrf_field() }}        
          <input type="hidden" name="_method" value="PUT">
          <input type="hidden" name="prod" id="code" value="">
          <button type="button" class="btn btn-default pull-rigth" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-danger pull-rigth">Deneter</button>
        </form>
      </div>
    </div>
  </div>
</div>