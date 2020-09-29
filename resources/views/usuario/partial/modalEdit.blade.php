<style>
.file-upload {
    display: none;
}
.p-image {
  position: absolute;
  top: 130px;
  right: 189px;
  color: #666666;
  transition: all .3s cubic-bezier(.175, .885, .32, 1.275);
}
.p-image:hover {
  transition: all .3s cubic-bezier(.175, .885, .32, 1.275);
}  

.upload-button {
  font-size: 1.2em;
}

.upload-button:hover {
  transition: all .3s cubic-bezier(.175, .885, .32, 1.275);
  color: #999;
}
</style>


<div class="modal" id="editUsu" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="modalAdd_submit" method="get" accept-charset="utf-8">   
        {{csrf_field()}}
      <div class="modal-header">
        <div class="row">
           <div class="small-12 medium-2 large-2 columns">
             <div class="#">
                <img class="profile-pic" src="{{URL::asset('/images/avatar/default.jpg')}}" style="width:150px; height:150px; display: block; margin-left: 160px; margin-right: auto; border-radius:50%;">
             </div>
             <div class="p-image">
               <i class="fa fa-camera upload-button"></i>
                <input class="file-upload" type="file" name="usu_photo" accept="image/*"/>
             </div>
          </div>
        </div>    
      </div>
      <br />
      <div class="modal-body">
          <div class="form-group row">
            <div class="col-md-9 col-sm-9 form-group has-feedback">
              <input type="text" class="form-control has-feedback-left" id="rut" value="" name="usu_rut" placeholder="Rut" maxlength="8">
              <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
            </div>

            <div class="col-md-3 col-sm-3 form-group has-feedback">
              <input type="text" class="form-control has-feedback-left" id="dig" value="" name="usu_dig" placeholder="Díg." maxlength="1">
              <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
            </div>
          </div>

          <div class="form-group row">
            <div class="col-md-6 col-sm-6 form-group has-feedback">
              <input type="text" class="form-control has-feedback-left" name="usu_name" value="{{old('usu_name')}}" minlength="4" maxlength="30" placeholder="Nombre">
              <span class="fa fa-bold form-control-feedback left" aria-hidden="true"></span>
            </div>

            <div class="col-md-6 col-sm-6 form-group has-feedback">
              <input type="text" class="form-control has-feedback-left" name="usu_ape" value="{{old('usu_ape')}}" minlength="4" maxlength="30" placeholder="Apellido">
              <span class="fa fa-bold form-control-feedback left" aria-hidden="true"></span>
            </div>              
          </div>

          <div class="form-group row">
            <div class="col-md-6 col-sm-6 form-group has-feedback">
              <input type="mail" class="form-control has-feedback-left" name="email" value="{{old('email')}}" minlength="4" maxlength="30" placeholder="E-mail">
              <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
            </div>

            <div class="col-md-6 col-sm-6 form-group has-feedback">
              <input type="password" class="form-control has-feedback-left" name="usu_pass" minlength="4" maxlength="8" placeholder="Contraseña">
              <span class="fa fa-credit-card form-control-feedback left" aria-hidden="true"></span>
            </div>              
          </div>

          <div class="form-group row">
            <div class="col-md-6 col-sm-6 form-group has-feedback">
              <select class="form-control" name="usu_fk_car" required>
                <option value="">Seleccione Cargo</option>
                <option value="">Director</option>
                <option value="">Operario</option>
                <option value="">Administrador</option>
              </select>
            </div>           
          </div>            
      </div>         
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" id="edit" class="btn btn-primary">Editar</button>
      </div>
    </form>  
    </div>
  </div>
</div>

