@if(count($proceso) >= 1)
<div class="col-md-12 col-sm-12" id="proceso">
  <div class="x_panel">
    <div class="x_title">
      <h2>Pesajes del Producto <small></small></h2>
      <!--
      <ul class="nav navbar-right panel_toolbox">
        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
      </ul>
      style="background-color:rgba(38, 185, 154, 0.88); font:120% Courier New; font-weight:600; color:black;"
      -->
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      <ul class="list-unstyled msg_list">
       @foreach($proceso as $peso)
        <li style="@if($peso->pesa_proc >=2) background-color:#dc3545; font:120% Courier New; font-weight:600; color:black;@endif">
          <a>
            <span>
              <span>{{$peso->producto->prod_cod}}</span>
              <span>{{$peso->producto->prod_des}}</span>
              <span>
                <strong style="margin-left: 225px;">
                    {{$peso->pesa_peso}} Kgs
                  @if($peso->pesa_est_peso == 'B')
                    <i class="fa fa-arrow-circle-o-down"></i> 
                  @elseif($peso->pesa_est_peso == 'S') 
                    <i class="fa fa-arrow-circle-o-up"></i>
                  @elseif($peso->pesa_est_peso == '')   
                    <i class="fa fa-check"></i>
                  @endif  
                </strong> 
              </span>
            </span>
          </a>
        </li>
       @endforeach
      </ul>
    </div>
  </div>
</div>
@endif
