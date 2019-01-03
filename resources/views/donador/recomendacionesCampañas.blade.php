@extends('layouts.mainUsuarioLogueado')

@section('title', 'Recomendaciones')



@section('start_css')
  @parent
  <link href="plugins/isotope/isotope.css" rel="stylesheet" />
  <link href="cn-assets/plugins/lightbox2/css/lightbox.css" rel="stylesheet" />

@endsection

@section('start_js')
  @parent
@endsection

@section('contenido')

        <!-- begin #about -->
        <div id="about" class="img-responsive background-home content work row-m-t-3 p-t-40" data-scrollview="true">

        </div>

        <!-- begin #team -->
        <div id="team" class="content team" data-scrollview="true">

            <div class="container" data-animation="true" data-animation-type="fadeInDown">
                <div class="row">
                    <div class="col-12 text-center home_iconos_title"><h2><span style="color: #348fe2">Recomendaciones de Campañas</span></h2></div>
                    

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
     
       


@endsection

@section('end_js')
  @parent

  

  <script src="{{ asset('js/apps.min.js')}}"></script>
  <script src="{{ asset('js/ui-modal-notification.demo.js') }}"></script>

  <script src="/cn-assets/plugins/isotope/jquery.isotope.min.js"></script>
  <script src="/cn-assets/plugins/lightbox2/js/lightbox.min.js"></script>
  <script src="/cn-assets/js/demo/gallery.demo.js"></script>

@endsection

@section('init_scripts')

  <script>
    $(document).ready(function() {
      Gallery.init();
    });
  </script>



@endsection
