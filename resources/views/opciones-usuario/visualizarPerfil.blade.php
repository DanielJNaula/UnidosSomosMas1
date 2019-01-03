@extends('layouts.mainUsuarioLogueado')
 
@section('title', 'Mi perfil') 

@section('start_css')
  @parent
  
  <link href="{{ asset('plugins/DataTablesv2/datatables.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/style-after.css') }}" rel="stylesheet" />
  <link href="plugins/isotope/isotope.css" rel="stylesheet" />
  <link href="cn-assets/plugins/lightbox2/css/lightbox.css" rel="stylesheet" />
  
  

  
@endsection
 


@section('contenido') 
<br><br><br><br>       
        <div class="row">
           <div class="container">
              <div class="col-md-12">
                 <div class="panel-body">
                  <div class="row" style=" color: #348fe2;">
                    
                      <div class="toolbar title_ip_breadcrumb fit-m-b-10">
                        <ol class="breadcrumb">
                          
                          <li class="active"><a href="#">Mi Perfil</a></li>
                        </ol>
                      </div>
                    <br>
                  </div>
                      <div class="row">
                        <!-- inicio col 4 -->
                        <div class="col-md-3" >
                            <!-- inicio foto perfil -->

                                         <h5 class="panel-title alert subtitulo-info-general fade in m-b-15"><strong>Foto de Perfil:</strong></h5>
                                         
                                        
                                            <!-- begin image -->
                                            <div  class="fotografiaMiperfil" style="  background-image: url(imagenes/imagenes_usuarios/daniel_naula.jpg); ">
                                              <a href="{{ asset('imagenes/imagenes_usuarios/daniel_naula.jpg') }}" data-lightbox="gallery-group-1">
                                                  <img  style="opacity: 0; width: 100%; height: 240px;" src="{{ asset('imagenes/imagenes_usuarios/daniel_naula.jpg') }}" alt="" />
                                              </a>

                                            </div>               
                                        
                            <!-- final foto perfil -->

                          </div>
                        <!-- final col 4 -->

                        <!-- inicio col 8 -->
                          <div class="col-md-9">
                            <!-- inicio informacion general -->
                                <div class="panel panel-inverse" data-sortable-id="ui-typography-8">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">Información de usuario</h4>
                                        </div>
                                        <!-- inicio panel --> 
                                        <div class="panel-body">
                                            <p class="detalle-donacion">
                                              <strong>Apellidos:</strong>
                                              <strong class='text-success'>Naula Guiñan</strong><br>
                                              <strong>Nombres:</strong>
                                              <strong class='text-success'>Daniel Jesús</strong><br>
                                              <strong>Correo electrónico:</strong> jesus1494@hotmail.es<br>
                                              <strong>Dirección:</strong> Chillogallo-Buenaventura<br>
                                             
                                            </p>
                                            <p class="text-justify">
                                              <strong>Información personal:</strong><br> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo veniam, repellendus, soluta laborum suscipit voluptas maiores cum incidunt natus aliquid dicta amet doloribus consectetur quas iusto magnam dolorem mollitia earum!
                                            </p>
                                            <p class="text-justify">
                                              <strong>Interes:</strong> <br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam quaerat atque odit, voluptatem maxime impedit animi numquam ratione sed ipsa nobis sapiente quos libero magnam similique harum eum! Praesentium, accusantium?
                                            </p>
                                            <p class="text-justify">
                                              <strong>Habilidades:</strong> <br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur neque recusandae error, ipsam animi iusto eum magnam nihil consequuntur veniam laboriosam itaque nam dolorem voluptatem excepturi quia! Nostrum, animi minima.
                                            </p>
                                           <br>
                                            <h4 class="m-t-10"><strong>Calificación general de usuario:</strong></h4>
                                    <fieldset class="stars-fieldset"><span class="stars stars-35"></span></fieldset> <br><br>

                                  <table id="data-table1" class="table nowrap" width="100%">
                                    <thead>
                                      <th>Comentario</th>
                                      <th>Calificación</th>
                                      
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>
                                            <p>
                                              <b>Daniel Naula</b><br>
                                              <b>Comentario:</b> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat ducimus, aliquam illo ea mollitia. <br>
                                              <b>Nombre Campaña: </b> Ayuda a los albergados de San Juan de Dios

                                            </p>
                                        </td>
                                        <td><fieldset class="stars-fieldset"><span class="stars stars-20"> <span hidden="">20</span></span></fieldset></td>
                                        
                                      </tr>
                                      <tr>
                                        <td>
                                          <p>
                                              <b>Maria Belen Guaman</b><br>
                                              <b>Comentario:</b> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat ducimus, aliquam illo ea mollitia. <br>
                                              <b>Nombre Campaña: </b> Ayuda a los albergados de San Juan de Dios

                                          </p>
                                        </td>
                                        <td><fieldset class="stars-fieldset"><span class="stars stars-40"><span hidden="">40</span></span></fieldset></td>
                                        
                                      </tr>
                                      <tr>
                                        <td>
                                          <p>
                                              <b>Ines Guiñan</b><br>
                                              <b>Comentario:</b> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat ducimus, aliquam illo ea mollitia. <br>
                                              <b>Nombre Campaña: </b> Ayuda a los albergados de San Juan de Dios

                                          </p>
                                        </td>
                                        <td><fieldset class="stars-fieldset"><span class="stars stars-30"> <span hidden="">30</span></span></fieldset></td>
                                        
                                      </tr>
                                      <tr>
                                        <td>
                                          <p>
                                              <b>Alexander Naula</b><br>
                                              <b>Comentario:</b> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat ducimus, aliquam illo ea mollitia. <br>
                                              <b>Nombre Campaña: </b> Ayuda a los albergados de San Juan de Dios

                                          </p>
    
                                        </td>
                                        <td><fieldset class="stars-fieldset"><span class="stars stars-40"><span hidden="">45</span></span></fieldset></td>
                                        
                                      </tr>
                                    </tbody>
                                  </table>
                                            
                                        </div>
                                        <!-- fin panel -->      
                                </div>
                            <!-- final informacion general -->
                          
                          </div>
                        <!-- final col 8 -->
                        
                          
                        </div>
                      </div>
                      
                </div>
              </div>
           </div>
        

   <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade show" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>    


@endsection


@section('end_js')
  @parent
  


  <!-- ================== BEGIN PAGE LEVEL JS ================== -->
  <script src="{{ asset('plugins/DataTablesv2/datatables.js') }}"></script>
   <script src="{{ asset('js/table-manage-responsive.demo.js') }}"></script>
  <!-- ================== END PAGE LEVEL JS ================== -->
  <script src="/cn-assets/plugins/isotope/jquery.isotope.min.js"></script>
  <script src="/cn-assets/plugins/lightbox2/js/lightbox.min.js"></script>
  <script src="/cn-assets/js/demo/gallery.demo.js"></script>
@endsection

@section('init_scripts')

  <script>

      $(document).ready(function() {
          TablaCCPTHomelistado.init();
          TablaComentarios.init();
          Gallery.init();
      })

</script>




@endsection


