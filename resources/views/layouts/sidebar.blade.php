<div class="col-md-3 left_col">
  <div class="left_col scroll-view">
    <div class="navbar nav_title" style="border: 0;">
      <a href="{{route('home')}}" class="site_title"><i class="#" aria-hidden="true"></i><span> STP</span></a>
    </div>
    <div class="clearfix"></div>
    <br/>

    <!-- sidebar menu -->
    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
      <div class="menu_section">
        <ul class="nav side-menu">
          <li><a><i class="fa fa-table"></i> Tablas <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a>Productos<span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                  <li><a href="{{route('productos.index')}}">Productos</a></li>
                  <li><a href="#">Categorías</a></li>
                  <li><a href="#">Familia</a></li>
                  <li><a href="#">SubFamilia</a></li>
                </ul>
              </li>
              <li><a>Empresa<span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                  <li><a href="#">Plantas</a></li>
                  <li><a href="#">Sectores</a></li>
                  <li><a href="#">Líneas</a></li>
                </ul>
              </li>
              <li><a href="{{route('turnos.index')}}">Turnos</a></li>
            </ul>
          </li>

          <li><a><i class="fa fa-bar-chart-o"></i> Gestión <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="{{route('pesajes.index')}}">Pesaje</a></li>
              <li><a href="{{route('notificaciones.index')}}">Notificaciones</a></li>
            </ul>
          </li>

          <li><a><i class="fa fa-cog"></i> Configuración <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="{{route('usuarios.index')}}">Usuarios</a></li>
            </ul>
          </li>

          <li>
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
              <i class="fa fa-sign-out"></i> Salir 
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>                 
          </li>
        </ul>
      </div>
    </div>
    <!-- /sidebar menu -->
    <!-- /menu footer buttons -->
    <div class="sidebar-footer hidden-small"></div>
    <!-- /menu footer buttons -->
  </div>
</div>