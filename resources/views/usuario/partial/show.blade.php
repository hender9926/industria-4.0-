<div class="modal" id="showUser" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <div class="row">
          <div class="col-md-4 col-md-4" align="center" style="padding-bottom: 0px;">
            <div class="row">
              <img class="profile-pic" id="foto" src="" style="width:150px; height:150px; display: block; margin-left: 15px; margin-right: auto; border-radius:50%;">
           <!--   <img class="profile-pic" src="{{URL::asset('/images/avatar/default.jpg')}}" style="width:150px; height:150px; display: block;  margin-right: auto; border-radius:50%;"> -->
            </div>
            <div class="row" align="center">
              <form id="formDelete" action="" method="POST" role="form">
                {{ csrf_field() }}        
                <input type="hidden" name="_method" value="DELETE">
                <button type="submit" class="btn btn-link">
                  <i class="fa fa-trash"></i> <small>Eliminar Usuario</small>     
                </button>                   
              </form> 
            </div>   
          </div>
          <div class="col-md-8 col-md-8" align="center">
            <h3 align="center" style="margin-top: 50px;" id="nom"> </h3>   
          </div>             
        </div>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-12 col-sm-12  profile_left">               
            <ul class="list-unstyled user_data">
              <li>
                <i class="fa fa-credit-card"> <strong id="rut"></strong></i>
              </li>
              <li>
                <i class="fa fa-briefcase user-profile-icon"> <strong id="car"></strong></i> 
              </li>
              <li>
                <i class="fa fa-envelope user-profile-icon"> <strong id="mail"></strong></i>
              </li>
              <li>
                <i class="fa  fa-mobile-phone user-profile-icon"> <strong id="tlf"></strong></i>
              </li>
            </ul>
          </div>
        </div>
      </div>         
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>