@extends('layouts.main')
 
@section('title', 'Reporte')

@section('start_css')
  @parent
   
  <link href="{{ asset('plugins/DataTablesv2/datatables.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/style-after.css') }}" rel="stylesheet" />


@endsection
 
@section('contenido')

<br><br><br><br>
  <!-- begin row -->
  <div id="about" class="content work" data-scrollview="true">
    <div class="container-fluid" data-animation="true" data-animation-type="fadeInDown">


        <div class="toolbar title_ip_breadcrumb fit-m-b-10">
          <ol class="breadcrumb">

            <li class="home"><a href="{{ url('/') }}"><i class="fa fa-home fa-lg"></i><span></span></a></li>
            <li class="active"><a href="#">Resultados de la B&uacute;squeda</a></li>

          </ol>
        </div><hr style="margin-top:-10px;">
    <div class="row">
      <div class="col-md-3" style="border: #D7DBDD 1px solid; padding: 1%">

        <form role="form" method="GET" action="#">
        <input type="hidden" name="parametro" >
        <div class="toolbar title_ip_breadcrumb fit-m-b-10">

              <ol class="breadcrumb">

                <li class="home">Filtros</li>
                <li class="active"><button type="submit" class="btn btn-primary m-l-20 pull-rigth">Aplicar Filtros</button></li>

              </ol>
            </div>
          <div class="form-group">
           

                <div>

                  <label for="sectorSelect">Provincia</label><a style="font-size: 12px;text-decoration:none" href="javascript:history.back(-1);" title="Ir la página anterior" class="pull-right">Quitar Filtro</a><br>
                  <select class="form-group form-control" id="sectorSelect" name="sectorSelect" >
                    <option value="0">Seleccionar </option>
                   
                        <option  value=""></option>
                  </select>
                </div>
                       

                <div>

                  <label for="estadoSelect">Canton</label><a style="font-size: 12px;text-decoration:none" href="javascript:history.back(-1);" title="Ir la página anterior" class="pull-right">Quitar Filtro</a><br>
                  <select class="form-group form-control" id="estadoSelect" name="estadoSelect">
                    <option value="0">Seleccionar</option>
                    
                  </select>
                </div>
                       

                <div>

                  <label for="ambitoSelect">Tipo de campaña</label><a style="font-size: 12px;text-decoration:none" href="javascript:history.back(-1);" title="Ir la página anterior" class="pull-right">Quitar Filtro</a><br>
                  <select class="form-group form-control" id="ambitoSelect" name="ambitoSelect">
                    <option value="0">Seleccionar</option>
                   
                  </select>
                </div>
                
          </div>
        </form>
      </div>
      <div class="col-md-9">

        <div class="col-md-12 pull-left">

                    <div class="panel-body text-center p-r-25">

                            <div class="form-group">

                                <form class="form-horizontal" role="form" method="GET" action="#">

                                    <div class="input-group custom-search-form">

                                        <input type="text" class="form-control_2" placeholder="Busca los proyectos en los que deseas ayudar con contribucion de bienes o servicio" name="parametro" required style="font-size: 16px" >
                                        <span class="input-group-btn">
                                            <button class="btn btn-buscar btn-lg" style="background: #348fe2; color: #fff; " type="submit" height="50px">
                                                <span class="glyphicon glyphicon-search"></span>
                                            </button>
                                        </span>

                                    </div>

                                </form>

                            </div>

                    </div>

          </div>

          

          <div class="col-md-12">
          <span class="title_ip_h1"> 15 Resultados de la B&uacute;squeda</span>

                <br><br>

          </div>

           
               
          <br><br>
        
          <div class="col-md-12">

           
              <table id="data-table" class="table nowrap" width="100%">
                <thead>
                  <th class="text-left f-s-18">Propuestas Encontradas</th>

                  <!-- revisar funcion laravel str_limit -->

                </thead>
                <tbody>   
                  <tr>
                      <td class="text-left p-t-15">
                        <ul class="result-list">
                            <li>
                              <a href="#" class="result-image" style="background-image: url(../assets/img/gallery/gallery-51.jpg)"></a>
                              <div class="result-info">
                                <h4 class="title"><a href="javascript:;">Ayuda a los albergados del Albergue San Juan de Dios</a></h4>
                                <p class="location">BY:  Daniel Naula</p>
                                <p class="desc">
                                  Nunc et ornare ligula. Aenean commodo lectus turpis, eu laoreet risus lobortis quis. Suspendisse vehicula mollis magna vel aliquet. Donec ac tempor neque, convallis euismod mauris. Integer dictum dictum ipsum quis viverra.
                                </p>
                                <div class="btn-row">
                                  <a href="javascript:;" class="boton">
                                    <i class="fa fa fa-heart"><span class="tooltiptext">Donaciones: 25</span></i>

                                  </a>
                                  <a href="javascript:;" class="boton">
                                    <i class="fa fa-fw fa-calendar"><span class="tooltiptext">Dias restantes: 2</span></i>
                                  </a>
                                </div>
                              </div>
                              <div class="result-price">
                                <small><i class="fa fa-map-marker"></i> Quito, Pichincha</small>
                                <a href="/detalle-campaña-bienes" class="btn btn-primary btn-block">Ver Campaña</a>
                              </div>
                            </li>
                      </ul>
                    </td>
                    
                  </tr>
                  <tr>
                      <td class="text-left p-t-15">
                        <ul class="result-list">
                            <li>
                              <a href="#" class="result-image" style="background-image: url(../assets/img/gallery/gallery-51.jpg)"></a>
                              <div class="result-info">
                                <h4 class="title"><a href="javascript:;">Ayuda a los albergados del Albergue San Juan de Dios</a></h4>
                                <p class="location">BY:  Daniel Naula</p>
                                <p class="desc">
                                  Nunc et ornare ligula. Aenean commodo lectus turpis, eu laoreet risus lobortis quis. Suspendisse vehicula mollis magna vel aliquet. Donec ac tempor neque, convallis euismod mauris. Integer dictum dictum ipsum quis viverra.
                                </p>
                                <div class="btn-row">
                                  <a href="javascript:;" class="boton">
                                    <i class="fa fa fa-heart"><span class="tooltiptext">Donaciones: 25</span></i>

                                  </a>
                                  <a href="javascript:;" class="boton">
                                    <i class="fa fa-fw fa-calendar"><span class="tooltiptext">Dias restantes: 2</span></i>
                                  </a>
                                </div>
                              </div>
                              <div class="result-price">
                                <small><i class="fa fa-map-marker"></i> Quito, Pichincha</small>
                                <a href="javascript:;" class="btn btn-primary btn-block">Ver Campaña</a>
                              </div>
                            </li>
                      </ul>
                    </td>
                    
                  </tr>
                  <tr>
                      <td class="text-left p-t-15">
                        <ul class="result-list"> 
                            <li>
                              <a href="#" class="result-image" style="background-image: url(../assets/img/gallery/gallery-51.jpg)"></a>
                              <div class="result-info">
                                <h4 class="title"><a href="javascript:;">Ayuda a los albergados del Albergue San Juan de Dios</a></h4>
                                <p class="location">BY:  Daniel Naula</p>
                                <p class="desc">
                                  Nunc et ornare ligula. Aenean commodo lectus turpis, eu laoreet risus lobortis quis. Suspendisse vehicula mollis magna vel aliquet. Donec ac tempor neque, convallis euismod mauris. Integer dictum dictum ipsum quis viverra.
                                </p>
                                <div class="btn-row">
                                  <a href="javascript:;" class="boton">
                                    <i class="fa fa fa-heart"><span class="tooltiptext">Donaciones: 25</span></i>

                                  </a>
                                  <a href="javascript:;" class="boton">
                                    <i class="fa fa-fw fa-calendar"><span class="tooltiptext">Dias restantes: 2</span></i>
                                  </a>
                                  
                                
                                </div>
                              </div>
                              <div class="result-price">
                                <small><i class="fa fa-map-marker"></i> Quito, Pichincha</small>
                                <a href="javascript:;" class="btn btn-primary btn-block">Ver Campaña</a>
                              </div>
                            </li>
                      </ul>
                    </td>
                    
                  </tr>
                  <tr>
                      <td class="text-left p-t-15">
                        <ul class="result-list">
                            <li>
                              <a href="#" class="result-image" style="background-image: url(../assets/img/gallery/gallery-51.jpg)"></a>
                              <div class="result-info">
                                <h4 class="title"><a href="javascript:;">Ayuda a los albergados del Albergue San Juan de Dios</a></h4>
                                <p class="location">BY:  Daniel Naula</p>
                                <p class="desc">
                                  Nunc et ornare ligula. Aenean commodo lectus turpis, eu laoreet risus lobortis quis. Suspendisse vehicula mollis magna vel aliquet. Donec ac tempor neque, convallis euismod mauris. Integer dictum dictum ipsum quis viverra.
                                </p>
                                <div class="btn-row">
                                  <a href="javascript:;" class="boton">
                                    <i class="fa fa fa-heart"><span class="tooltiptext">Donaciones: 25</span></i>

                                  </a>
                                  <a href="javascript:;" class="boton">
                                    <i class="fa fa-fw fa-calendar"><span class="tooltiptext">Dias restantes: 2</span></i>
                                  </a>
                                </div>
                              </div>
                              <div class="result-price">
                                <small><i class="fa fa-map-marker"></i> Quito, Pichincha</small>
                                <a href="javascript:;" class="btn btn-primary btn-block">Ver Campaña</a>
                              </div>
                            </li>
                      </ul>
                    </td>
                    
                  </tr>
                  <tr>
                      <td class="text-left p-t-15">
                        <ul class="result-list">
                            <li>
                              <a href="#" class="result-image" style="background-image: url(../assets/img/gallery/gallery-51.jpg)"></a>
                              <div class="result-info">
                                <h4 class="title"><a href="javascript:;">Ayuda a los albergados del Albergue San Juan de Dios</a></h4>
                                <p class="location">BY:  Daniel Naula</p>
                                <p class="desc">
                                  Nunc et ornare ligula. Aenean commodo lectus turpis, eu laoreet risus lobortis quis. Suspendisse vehicula mollis magna vel aliquet. Donec ac tempor neque, convallis euismod mauris. Integer dictum dictum ipsum quis viverra.
                                </p>
                                <div class="btn-row">
                                  <a href="javascript:;" class="boton">
                                    <i class="fa fa fa-heart"><span class="tooltiptext">Donaciones: 25</span></i>

                                  </a>
                                  <a href="javascript:;" class="boton">
                                    <i class="fa fa-fw fa-calendar"><span class="tooltiptext">Dias restantes: 2</span></i>
                                  </a>
                                </div>
                              </div>
                              <div class="result-price">
                                <small><i class="fa fa-map-marker"></i> Quito, Pichincha</small>
                                <a href="javascript:;" class="btn btn-primary btn-block">Ver Campaña</a>
                              </div>
                            </li>
                      </ul>
                    </td>
                    
                  </tr>
                   
                    
                  </tbody>
              </table>
          

            <!-- Fin Contenido -->
          </div>
          <!-- end col-8 tabla -->

      </div>

        </div>

    </div>

  </div>

@endsection

@section('end_js')
  @parent

  <!-- ================== BEGIN PAGE LEVEL JS ================== -->
  <script src="{{ asset('plugins/DataTablesv2/datatables.js') }}"></script>
   <script src="{{ asset('js/table-manage-responsive.demo.js') }}"></script>
  <!-- ================== END PAGE LEVEL JS ================== -->
  
  <script>

    $(document).ready(function() {
      
      TablaCCPTHomelistado.init();

    });

  </script>
   



@endsection
