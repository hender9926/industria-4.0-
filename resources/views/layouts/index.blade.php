@extends('layouts.main')

@section('content')


    <div role="main">
        <div class="col-lg-12 ">
            <h2>Hender Morales <br> Welcome to Production System Tracking </h2>
            <hr>
        </div>
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif


        <div class="row">
              <div class="animated flipInY col-lg-3 col-md-3">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-caret-square-o-right"></i></div>
                  <div class="count">50</div>
                  <h3>Trutro Marinado</h3>
                  <p>Peso promedio.</p>
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-comments-o"></i></div>
                  <div class="count">10</div>
                  <h3>Pesajes</h3>
                  <p>Pesados por Hora.</p>
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-angle-double-up"></i></div>
                  <div class="count">90</div>
                  <h3>Sobrepesos (kg)</h3>
                  <p>En producción.</p>
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-check-square-o"></i></div>
                  <div class="count">20000</div>
                  <h3>Kg por Hr</h3>
                  <p>Rendimiento.</p>
                </div>
              </div>
        </div>
        
        <div class="row">
          <div class="col-md-4 col-sm-6 ">
            <div class="x_panel fixed_height_320">
              <div class="x_title">
                <h2>Línea I <small>Producción</small></h2>
                <ul class="nav navbar-right panel_toolbox">
                  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                  </li>
                  <li><a class="close-link"><i class="fa fa-close"></i></a>
                  </li>
                </ul>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <h4>Código</h4>
                <div class="widget_summary">
                  <div class="w_left w_25">
                    <span>021-54</span>
                  </div>
                  <div class="w_center w_55">
                    <div class="progress">
                      <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 66%;">
                        <span class="sr-only">60% Complete</span>
                      </div>
                    </div>
                  </div>
                  <div class="w_right w_20">
                    <span>123 P.</span>
                  </div>
                  <div class="clearfix"></div>
                </div>

                <div class="widget_summary">
                  <div class="w_left w_25">
                    <span>021-45</span>
                  </div>
                  <div class="w_center w_55">
                    <div class="progress">
                      <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 45%;">
                        <span class="sr-only">60% Complete</span>
                      </div>
                    </div>
                  </div>
                  <div class="w_right w_20">
                    <span>53 P.</span>
                  </div>
                  <div class="clearfix"></div>
                </div>
                <div class="widget_summary">
                  <div class="w_left w_25">
                    <span>021-65</span>
                  </div>
                  <div class="w_center w_55">
                    <div class="progress">
                      <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 25%;">
                        <span class="sr-only">60% Complete</span>
                      </div>
                    </div>
                  </div>
                  <div class="w_right w_20">
                    <span>23 P.</span>
                  </div>
                  <div class="clearfix"></div>
                </div>
                <div class="widget_summary">
                  <div class="w_left w_25">
                    <span>021-76</span>
                  </div>
                  <div class="w_center w_55">
                    <div class="progress">
                      <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 5%;">
                        <span class="sr-only">60% Complete</span>
                      </div>
                    </div>
                  </div>
                  <div class="w_right w_20">
                    <span>3 P.</span>
                  </div>
                  <div class="clearfix"></div>
                </div>
                <div class="widget_summary">
                  <div class="w_left w_25">
                    <span>021-09</span>
                  </div>
                  <div class="w_center w_55">
                    <div class="progress">
                      <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 2%;">
                        <span class="sr-only">60% Complete</span>
                      </div>
                    </div>
                  </div>
                  <div class="w_right w_20">
                    <span>1 P</span>
                  </div>
                  <div class="clearfix"></div>
                </div>

              </div>
            </div>
          </div>

          <div class="col-md-4 col-sm-6 ">
            <div class="x_panel tile fixed_height_320">
              <div class="x_title">
                <h2> Linea I <small>Meta Producción</small></h2>
                <ul class="nav navbar-right panel_toolbox">
                  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                  </li>
                  <li><a class="close-link"><i class="fa fa-close"></i></a>
                  </li>
                </ul>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
              <table class="" style="width:100%">
                <tr>
                  <th style="width:37%;">
                    <p>Top 5</p>
                  </th>
                  <th>
                    <div class="col-lg-7 col-md-7 col-sm-7 ">
                      <p class="">Producto</p>
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-5 ">
                      <p class="">Progreso</p>
                    </div>
                  </th>
                </tr>
                <tr>
                    <td>
                        <canvas class="canvasDoughnut" height="140" width="140" style="margin: 15px 10px 10px 0"></canvas>
                      </td>
                  <td>
                    <table class="tile_info">
                      <tr>
                        <td>
                          <p><i class="fa fa-square blue"></i>021-65 </p>
                        </td>
                        <td>30%</td>
                      </tr>
                      <tr>
                        <td>
                          <p><i class="fa fa-square green"></i>021-65 </p>
                        </td>
                        <td>10%</td>
                      </tr>
                      <tr>
                        <td>
                          <p><i class="fa fa-square purple"></i>021-65 </p>
                        </td>
                        <td>20%</td>
                      </tr>
                      <tr>
                        <td>
                          <p><i class="fa fa-square aero"></i>021-65 </p>
                        </td>
                        <td>15%</td>
                      </tr>
                      <tr>
                        <td>
                          <p><i class="fa fa-square red"></i>021-65 </p>
                        </td>
                        <td>30%</td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-sm-12 ">
            <div>
              <div class="x_title">
                <h2> Incidencias Reportadas <small>Usuarios</small> </h2> 
                <ul class="nav navbar-right panel_toolbox">
                  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a> </li>
                  <li><a class="close-link"><i class="fa fa-close"></i></a>
                  </li>
                </ul>
                <div class="clearfix"></div>
              </div>
              <ul class="list-unstyled top_profiles scroll-view">
                <li class="media event">
                  <a class="pull-left border-aero profile_thumb">
                    <i class="fa fa-user aero"></i>
                  </a>
                  <div class="media-body">
                    <a class="title" href="#">Ms. Mary Jane</a>
                    <p><strong>10/12/2019 10:00AM </strong> Parada por Falla </p>
                    <p> <small></small>
                    </p>
                  </div>
                </li>
                <li class="media event">
                  <a class="pull-left border-green profile_thumb">
                    <i class="fa fa-user green"></i>
                  </a>
                  <div class="media-body">
                    <a class="title" href="#">Ms. Mary Jane</a>
                    <p><strong> 10/08/2020 09:00AM </strong> Falla de conexón del Equipo </p>
                    <p> <small> </small>
                    </p>
                  </div>
                </li>
                <li class="media event">
                  <a class="pull-left border-blue profile_thumb">
                    <i class="fa fa-user blue"></i>
                  </a>
                  <div class="media-body">
                    <a class="title" href="#">Ms. Mary Jane</a>
                    <p><strong> 20/08/2020 10:00AM </strong> Rechazos masivos </p>
                    <p> <small></small>
                    </p>
                  </div>
                </li>
                <li class="media event">
                  <a class="pull-left border-aero profile_thumb">
                    <i class="fa fa-user aero"></i>
                  </a>
                  <div class="media-body">
                    <a class="title" href="#">Ms. Mary Jane</a>
                    <p><strong> 21/08/2020 10:00AM </strong> Error en la receta</p>
                    <p> <small></small>
                    </p>
                  </div>
                </li>
              </ul>
            </div>
          </div>

          <div class="col-md-12 col-sm-12 ">
            <div class="dashboard_graph">

              <div class="row x_title">
                <div class="col-md-6">
                  <h3>Red de Producción <small>Gráfico por Productos</small></h3>
                </div>
                <div class="col-md-6">
                  <div id="reportrange" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                    <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                    <span>December 30, 2014 - January 28, 2015</span> <b class="caret"></b>
                  </div>
                </div>
              </div>

              <div class="col-md-9 col-sm-9 ">
                <div id="chart_plot_01" class="demo-placeholder"></div>
              </div>
              <div class="col-md-3 col-sm-3  bg-white">
                <div class="x_title">
                  <h2>Top 3 de Producción</h2>
                  <div class="clearfix"></div>
                </div>

                <div class="col-md-12 col-sm-12 ">
                  <div>
                    <p>Carne de Cerdo</p>
                    <div class="">
                      <div class="progress progress_sm" style="width: 76%;">
                        <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="80"></div>
                      </div>
                    </div>
                  </div>
                  <div>
                    <p>Pechuga de Pollo</p>
                    <div class="">
                      <div class="progress progress_sm" style="width: 76%;">
                        <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="60"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-12 col-sm-12 ">
                  <div>
                    <p>Costillar</p>
                    <div class="">
                      <div class="progress progress_sm" style="width: 76%;">
                        <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="40"></div>
                      </div>
                    </div>
                  </div>
                </div>

              </div>

              <div class="clearfix"></div>
            </div>
          </div>
        </div>
          <br />
    </div>    
@endsection
