@extends('layouts.mainUsuarioLogueado')

@section('title', 'Homepage')


@section('start_css')
  @parent
  <link href="{{ asset('plugins/nvd3/nv.d3.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('plugins/isotope/isotope.css') }}" rel="stylesheet" />
  <link href="{{ asset('cn-assets/plugins/lightbox2/css/lightbox.css') }}" rel="stylesheet" />
  

@endsection


@section('contenido')

        <!-- begin #about -->
        <div id="about" class="img-responsive background-home content work row-m-t-3 p-t-40" data-scrollview="true">

            <!-- begin container -->
            <div class="container p-t-25" data-animation="true" data-animation-type="fadeInDown">

                <div class="col-md-12 p-t-25 home_main_web_title_image">
                    <div class="panel-body">
                        <div class="col-12 text-center text-white"><h3>NADA LIBERA NUESTRA GRANDEZA COMO EL DESEO DE AYUDAR Y DE SERVIR</h3>
                            <p style="margin-top: 10px" class="text-white text-center">¿Deseas ayudar a los mas necesitados, pero no cuentas con dinero? Tranquilo existen múltiples alternativas para ayudar, como donaciones en bienes o voluntariado.</p>
                        </div>

                    <br>
                    </div>
                </div>
                

                        <div class="panel-body text-center home_main_web_title">

                                  <div class="row">
                                      <div class="col-xs-8 col-xs-offset-2">
                                          <form method="GET" action="resutados-busqueda" id="searchForm" class="search-home input-group">
                                              
                                              <input id="buscar_general" type="text" class="form-control" name="parametro" placeholder="Busca los proyectos en los que deseas ayudar con contribucion de bienes o servicio">
                                              <span class="input-group-btn">
                                                  <button id="btn_buscar" class="btn btn-default" type="submit">
                                                     <text class="hidden-xs">Buscar</text><i class="fa fa-2x fa-search visible-xs"></i>
                                                  </button>
                                              </span> 
                                          </form><!-- end form -->
                                      </div><!-- end col-xs-8 -->
                                  </div><!-- end row -->

                          <p style="margin-top: 10px" class="text-white">Ejemplo: Voluntariado, donación.</p>
                        </div>

            </div>
        </div>

        <!-- begin #team -->
        <div id="team" class="content team" data-scrollview="true">

            <div class="container" data-animation="true" data-animation-type="fadeInDown">
                <div class="row">
                    <div class="col-12 text-center home_iconos_title"><h2><span style="color: #348fe2">Proyectos Destacados</span></h2></div>
                    

                </div>

                
            </div>
        </div>       
        <!-- Inicio docaciones bienes -->
        
        <div class="row">
          <div class="container">
            <div class="col-md-12">
              <div class="panel-body">
                
                                    
                      <!-- begin page-header -->
                      <h2><span style="color: #348fe2"> <strong> Donaciones de bienes</strong></span></h2>
                      <!-- end page-header -->
                      
                      
                      <!-- begin #gallery -->
                      <div id="gallery" class="gallery">
                        <!-- begin image -->
                        <div class="image gallery-group-1">
                          <div class="image-inner">
                            <a href="{{ asset('imagenes/imagenes_campañas/campañas_donaciones/donaciones_manos.jpg') }}" data-lightbox="gallery-group-1">
                              <img src="{{ asset('imagenes/imagenes_campañas/campañas_donaciones/donaciones_manos.jpg') }}" alt="" />
                            </a>
                            <div class="redes-sociales-camp">
                              <ul>
                                <li class="fa fa-2x fa-facebook"> </li>
                                <li class="fa fa-2x fa-twitter"> </li>
                                <li class="fa fa-2x fa-youtube"> </li>
                              </ul>
                              <span> <i class="fa fa-2x fa-ellipsis-v"></i></span>  
                            </div>
                          </div>
                          <div class="image-info" >
                              
                              <h5 class="title "> <strong>Ayuda a los albergados del Albergue San Juan de Dios</strong></h5>  
                            
                            
                            
                              <small>by <i class="fa fa-user"></i></small> <a href="javascript:;">Sean Ngu</a>
                            
                            
                            <div class="desc ">
                              Nunc velit urna, aliquam at interdum sit amet, lacinia sit amet ligula. Quisque et erat eros. Aenean auctor metus in tortor placerat, non luctus justo blandit.
                            </div>
                          </div>
                          <div class="image-footer" >
                              <h5><i class="fa fa-map-marker"></i> Pichincha, Quito</h5> 
                              <ul class="donaciones">
                                <li >20 <br><span>Donaciones</span></li>
                                
                                <li >12 <br> <span>Dias restantes</span></li>
                              </ul>
                          </div>
                          <a href="/detalle-campaña-bienes" class="btn btn-info btn-block"><i class="fa fa fa-heart"></i> Detalle Campaña</a>

                        </div>
                        <!-- end image -->
                        <!-- begin image -->
                        <div class="image gallery-group-1">
                          <div class="image-inner">
                            <a href="{{ asset('imagenes/imagenes_campañas/campañas_donaciones/solidaridad.jpg') }}" data-lightbox="gallery-group-1">
                              <img src="{{ asset('imagenes/imagenes_campañas/campañas_donaciones/solidaridad.jpg') }}" alt="" />
                            </a>
                            <div class="redes-sociales-camp">
                              <ul>
                                <li class="fa fa-2x fa-facebook"> </li>
                                <li class="fa fa-2x fa-twitter"> </li>
                                <li class="fa fa-2x fa-youtube"> </li>
                              </ul>
                              <span> <i class="fa fa-2x fa-ellipsis-v"></i></span>  
                            </div>
                          </div>
                          <div class="image-info">
                            <h5 class="title"> <strong>Donec mi quis volutpat ornare</strong></h5>
                            
                            <small>by <i class="fa fa-user"></i></small> <a href="javascript:;">Richard Leong</a>
                            
                            <div class="desc ">
                              Interdum et malesuada fames ac ante ipsum primis in faucibus. Ut et augue luctus libero dignissim sodales, sapien consequat lacinia fringilla.
                            </div>
                          </div>
                          <div class="image-footer" >
                              <h5><i class="fa fa-map-marker"></i> Pichincha, Quito</h5> 
                              <ul class="donaciones">
                                <li >20 <br><span>Donaciones</span></li>
                                
                                <li >12 <br> <span>Dias restantes</span></li>
                              </ul>
                          </div>
                          <a href="/detalle-campaña-bienes" class="btn btn-info btn-block"><i class="fa fa fa-heart"></i> Detalle Campaña</a>
                        </div>
                        <!-- end image -->
                        <!-- begin image -->
                        <div class="image gallery-group-1">
                          <div class="image-inner">
                            <a href="{{ asset('imagenes/imagenes_campañas/campañas_donaciones/Solidaridad_QR.jpg') }}" data-lightbox="gallery-group-1">
                              <img src="{{ asset('imagenes/imagenes_campañas/campañas_donaciones/Solidaridad_QR.jpg') }}" alt="" />
                            </a>
                            <div class="redes-sociales-camp">
                              <ul>
                                <li class="fa fa-2x fa-facebook"> </li>
                                <li class="fa fa-2x fa-twitter"> </li>
                                <li class="fa fa-2x fa-youtube"> </li>
                              </ul>
                              <span> <i class="fa fa-2x fa-ellipsis-v"></i></span>  
                            </div>
                          </div>
                          <div class="image-info">
                            <h5 class="title "> <strong>Etiam lobortis egestas nisl</strong> </h5>
                            
                              <small>by <i class="fa fa-user"></i></small> <a href="javascript:;">Lelouch Wong</a>
                            
                            
                            <div class="desc ">
                              Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Vivamus eget ultricies arcu.
                            </div>
                          </div>
                          <div class="image-footer" >
                              <h5><i class="fa fa-map-marker"></i> Pichincha, Quito</h5> 
                              <ul class="donaciones">
                                <li >20 <br><span>Donaciones</span></li>
                                
                                <li >12 <br> <span>Dias restantes</span></li>
                              </ul>
                          </div>
                          <a href="/detalle-campaña-bienes" class="btn btn-info btn-block"><i class="fa fa fa-heart"></i> Detalle Campaña</a>
                        </div>
                        <!-- end image -->
                        <!-- begin image -->
                        <div class="image gallery-group-1">
                          <div class="image-inner">
                            <a href="{{ asset('imagenes/imagenes_campañas/campañas_donaciones/principal-solidaria.jpg') }}" data-lightbox="gallery-group-1">
                              <img src="{{ asset('imagenes/imagenes_campañas/campañas_donaciones/principal-solidaria.jpg') }}" alt="" />
                            </a>
                            <div class="redes-sociales-camp">
                              <ul>
                                <li class="fa fa-2x fa-facebook"> </li>
                                <li class="fa fa-2x fa-twitter"> </li>
                                <li class="fa fa-2x fa-youtube"> </li>
                              </ul>
                              <span> <i class="fa fa-2x fa-ellipsis-v"></i></span>  
                            </div>
                          </div>
                          <div class="image-info">
                            <h5 class="title "> <strong>Donec mi quis volutpat ornare</strong> </h5>
                            
                              <small>by <i class="fa fa-user"></i></small> <a href="javascript:;">Richard Leong</a>
                           
                            <div class="desc ">
                              Interdum et malesuada fames ac ante ipsum primis in faucibus. Ut et augue luctus libero dignissim sodales, sapien consequat lacinia fringilla.
                            </div>
                          </div>
                          <div class="image-footer" >
                              <h5><i class="fa fa-map-marker"></i> Pichincha, Quito</h5> 
                              <ul class="donaciones">
                                <li >20 <br><span>Donaciones</span></li>
                                
                                <li >12 <br> <span>Dias restantes</span></li>
                              </ul>
                          </div>
                          <a href="/detalle-campaña-bienes" class="btn btn-info btn-block"><i class="fa fa fa-heart"></i> Detalle Campaña</a>
                        </div>
                        <!-- end image -->
                        
                        
                        
                       
                        
                        
                      </div>
                    <!-- end #gallery -->


              </div>
              
            </div>
          </div>
        </div>
       <!-- Fin Donaciones de Bienes -->
        <!-- Inicio docaciones bienes -->
        
        <div class="row">
          <div class="container">
            <div class="col-md-12">
              <div class="panel-body">
                
                                    
                      <!-- begin page-header -->
                      <h2><span style="color: #348fe2"> <strong> Voluntariado</strong></span></h2>
                      <!-- end page-header -->
                      
                      
                      <!-- begin #gallery -->
                      <div id="gallery1" class="gallery">
                        <!-- begin image -->
                        <div class="image gallery-group-1">
                          <div class="image-inner">
                            <a href="{{ asset('imagenes/imagenes_campañas/campañas_voluntariado/voluntariado1.jpg') }}" data-lightbox="gallery-group-1">
                              <img src="{{ asset('imagenes/imagenes_campañas/campañas_voluntariado/voluntariado1.jpg') }}" alt="" />
                            </a>
                            <div class="redes-sociales-camp">
                              <ul>
                                <li class="fa fa-2x fa-facebook"> </li>
                                <li class="fa fa-2x fa-twitter"> </li>
                                <li class="fa fa-2x fa-youtube"> </li>
                              </ul>
                              <span> <i class="fa fa-2x fa-ellipsis-v"></i></span>  
                            </div>
                          </div>
                          <div class="image-info" >
                              
                              <h5 class="title "> <strong>Ayuda a los albergados del Albergue San Juan de Dios</strong></h5>  
                            
                            
                            
                              <small>by <i class="fa fa-user"></i></small> <a href="javascript:;">Sean Ngu</a>
                            
                            
                            <div class="desc ">
                              Nunc velit urna, aliquam at interdum sit amet, lacinia sit amet ligula. Quisque et erat eros. Aenean auctor metus in tortor placerat, non luctus justo blandit.
                            </div>
                          </div>
                          <div class="image-footer" >
                              <h5><i class="fa fa-map-marker"></i> Pichincha, Quito</h5> 
                              <ul class="voluntariado">
                                <li >20 <br><span>Voluntarios</span></li>
                                <li>5 <br> <span>Vacantes</span></li>
                                <li >12 <br> <span>Dias restantes</span></li>
                              </ul>
                          </div>
                          <a href="/detalle-campaña-voluntariado" class="btn btn-info btn-block"><i class="fa fa fa-users"></i> Detalle Campaña</a>

                        </div>
                        <!-- end image -->
                         <!-- begin image -->
                        <div class="image gallery-group-2">
                          <div class="image-inner">
                            <a href="{{ asset('imagenes/imagenes_campañas/campañas_voluntariado/voluntariado2.jpg') }}" data-lightbox="gallery-group-2">
                              <img src="{{ asset('imagenes/imagenes_campañas/campañas_voluntariado/voluntariado2.jpg') }}" alt="" />
                            </a>
                            <div class="redes-sociales-camp">
                              <ul>
                                <li class="fa fa-2x fa-facebook"> </li>
                                <li class="fa fa-2x fa-twitter"> </li>
                                <li class="fa fa-2x fa-youtube"> </li>
                              </ul>
                              <span> <i class="fa fa-2x fa-ellipsis-v"></i></span>  
                            </div>
                          </div>
                          <div class="image-info">
                            <h5 class="title"> <strong>Donec mi quis volutpat ornare</strong></h5>
                            
                            <small>by <i class="fa fa-user"></i></small> <a href="javascript:;">Richard Leong</a>
                            
                            <div class="desc ">
                              Interdum et malesuada fames ac ante ipsum primis in faucibus. Ut et augue luctus libero dignissim sodales, sapien consequat lacinia fringilla.
                            </div>
                          </div>
                          <div class="image-footer" >
                              <h5><i class="fa fa-map-marker"></i> Pichincha, Quito</h5> 
                              <ul class="voluntariado">
                                <li >20 <br><span>Voluntarios</span></li>
                                <li>5 <br> <span>Vacantes</span></li>
                                <li >12 <br> <span>Dias restantes</span></li>
                              </ul>
                          </div>
                          <a href="javascript:;" class="btn btn-info btn-block"><i class="fa fa fa-users"></i> Detalle Campaña</a>
                        </div>
                        <!-- end image -->
                        <!-- begin image -->
                        <div class="image gallery-group-1">
                          <div class="image-inner">
                            <a href="{{ asset('imagenes/imagenes_campañas/campañas_voluntariado/voluntariado3.jpg') }}" data-lightbox="gallery-group-1">
                              <img src="{{ asset('imagenes/imagenes_campañas/campañas_voluntariado/voluntariado3.jpg') }}" alt="" />
                            </a>
                            <div class="redes-sociales-camp">
                              <ul>
                                <li class="fa fa-2x fa-facebook"> </li>
                                <li class="fa fa-2x fa-twitter"> </li>
                                <li class="fa fa-2x fa-youtube"> </li>
                              </ul>
                              <span> <i class="fa fa-2x fa-ellipsis-v"></i></span>  
                            </div>
                          </div>
                          <div class="image-info">
                            <h5 class="title "> <strong>Etiam lobortis egestas nisl</strong> </h5>
                            
                              <small>by <i class="fa fa-user"></i></small> <a href="javascript:;">Lelouch Wong</a>
                            
                            
                            <div class="desc ">
                              Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Vivamus eget ultricies arcu.
                            </div>
                          </div>
                          <div class="image-footer" >
                              <h5><i class="fa fa-map-marker"></i> Pichincha, Quito</h5> 
                              <ul class="voluntariado">
                                <li >20 <br><span>Voluntarios</span></li>
                                <li>5 <br> <span>Vacantes</span></li>
                                <li >12 <br> <span>Dias restantes</span></li>
                              </ul>
                          </div>
                          <a href="javascript:;" class="btn btn-info btn-block"><i class="fa fa fa-users"></i> Detalle Campaña</a>
                        </div>
                        <!-- end image -->
                        <!-- begin image -->
                        <div class="image gallery-group-1">
                          <div class="image-inner">
                            <a href="{{ asset('imagenes/imagenes_campañas/campañas_voluntariado/voluntariado4.jpg') }}" data-lightbox="gallery-group-1">
                              <img src="{{ asset('imagenes/imagenes_campañas/campañas_voluntariado/voluntariado4.jpg') }}" alt="" />
                            </a>
                            <div class="redes-sociales-camp">
                              <ul>
                                <li class="fa fa-2x fa-facebook"> </li>
                                <li class="fa fa-2x fa-twitter"> </li>
                                <li class="fa fa-2x fa-youtube"> </li>
                              </ul>
                              <span> <i class="fa fa-2x fa-ellipsis-v"></i></span>  
                            </div>
                          </div>
                          <div class="image-info">
                            <h5 class="title "> <strong>Donec mi quis volutpat ornare</strong> </h5>
                            
                              <small>by <i class="fa fa-user"></i></small> <a href="javascript:;">Richard Leong</a>
                           
                            <div class="desc ">
                              Interdum et malesuada fames ac ante ipsum primis in faucibus. Ut et augue luctus libero dignissim sodales, sapien consequat lacinia fringilla.
                            </div>
                          </div>
                          <div class="image-footer" >
                              <h5><i class="fa fa-map-marker"></i> Pichincha, Quito</h5> 
                              <ul class="voluntariado">
                                <li >20 <br><span>Voluntarios</span></li>
                                <li>5 <br> <span>Vacantes</span></li>
                                <li >12 <br> <span>Dias restantes</span></li>
                              </ul>
                          </div>
                          <a href="javascript:;" class="btn btn-info btn-block"><i class="fa fa fa-users"></i> Detalle Campaña</a>
                        </div>
                        <!-- end image -->
                        
                        
                        
                       
                        
                        
                      </div>
                    <!-- end #gallery -->


              </div>
              
            </div>
          </div>
        </div>
       <!-- Fin Donaciones de Bienes -->
        
        <div class="row">
           <div class="container">
              <div class="col-md-12">
                 <div class="panel-body">
                      
                        <h2>Visualizaciones</h2><hr />
                          <p class="site-page-content-paragraph">Proyectos Caritativos</p> 
                          <br><br>
                      <div id="nv-stacked-area-chart" class="unidos-somos-mas-nv-chart height-lg">
                        <svg></svg>
                      </div>
                      <h4><a href="#">Más visualizaciones</a></h4>
                </div>
              </div>
           </div>
        </div>

       


@endsection

@section('end_js')
  @parent

  <script src="{{ asset('js/Graficas_unidos_somos_mas/unidos_somos_mas_inicio.js') }}"></script>
  <script src="{{ asset('plugins/nvd3/nvd3.min.js') }}"></script>

  <script src="{{ asset('js/apps.min.js')}}"></script>
  <script src="{{ asset('js/ui-modal-notification.demo.js') }}"></script>

  <script src="{{ asset('cn-assets/plugins/isotope/jquery.isotope.min.js') }}"></script>
  <script src="{{ asset('cn-assets/plugins/lightbox2/js/lightbox.min.js') }}"></script>
  <script src="{{ asset('cn-assets/js/demo/gallery.demo.js') }}"></script>

@endsection

@section('init_scripts')

 

  <script>

      $(document).ready(function() {

          Notification.init();
          ChartNvd3.init();
          Gallery.init();
          // Fix nvd3 issue repeated tooltip on some charts
          $("div.unidos-somos-mas-nv-chart")
          .mouseleave(function() {
            var tooltips_elements = d3.selectAll('[id^=nvtooltip]');
            tooltips_elements.each(function (i, v) {
              $(this).hide();
              if (v == 1) $(this).prev().remove();
            });
          })
          .mouseenter(function() {
            var tooltips_elements = d3.selectAll('[id^=nvtooltip]');
            tooltips_elements.each(function (i, v) { $(this).show(); });
          });
          // End Fix nvd3 issue repeated tooltip on some charts

      })

</script>

@endsection
