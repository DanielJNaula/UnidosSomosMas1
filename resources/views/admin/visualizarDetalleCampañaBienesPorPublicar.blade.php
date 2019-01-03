@extends('layouts.mainAdmin')
 
@section('title', 'Campaña') 

@section('start_css')
  @parent
  
  <link href="{{ asset('plugins/nvd3/nv.d3.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('plugins/DataTablesv2/datatables.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/style-after.css') }}" rel="stylesheet" />

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
                          
                          <li class="active"><a href="#">Detalle campaña bienes</a></li>
                          
                          <label class='text-success pull-right'>
                            <a href="javascript:history.back(1)" class="btn btn-link fit-m-t-1"><i class="fa fa fa-arrow-left"></i> Atras</a>
                          </label>
                        </ol>
                      </div>
                    <br>
                  </div>
                  <div class="row" style="text-align: center; color: #348fe2;">
                    <strong><h3>Ayuda a los albergados del Albergue San Juan de Dios</h3> </strong><br>
                  </div>
                      <div class="row">
                        <div class="col-md-8">
                          <div class="video-container" >
                            <!-- PRA PONER LOS VIDEOS UNICAMENTE SE PONER LOS CARACTERES DESPUES DEL v= -->
                            <iframe  src="https://www.youtube-nocookie.com/embed/0oW_TNA53yM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                          </div> 
                        </div>
                        <div class="col-md-4">
                           <!-- begin panel -->
                              <div class="panel panel-inverse" data-sortable-id="ui-typography-8">
                                        <div class="panel-heading">
                                           
                                            <h4 class="panel-title">Informacion General</h4>
                                        </div>
                                        <div class="panel-body">
                                          Contribuciones: 
                                            <ol>
                                              <li>Alimentos</li>
                                              <li>Vestimenta</li>
                                              <li>Utiles escolares</li>
                                              <li>Dinero</li>
                                            </ol>
                                          <p>
                                            Ubicacion: Quito, Pichincha <br>
                                            Autor: Daniel Naula
                                          </p>
                                             
                                        </div>
                                        <!-- end panel -->
                                        <div class="row celda-informacion"  >
                                          <!-- begin col-3 -->
                                            <div class="col-md-6 col-sm-6 col-xs-6" >
                                              <div class="widget widget-stats bg-green" >
                                                <div class="stats-icon"><i class="fa fa-heart"></i></div>
                                                <div class="stats-info">
                                                  <h4>Donaciones</h4>
                                                  <p>0</p>  
                                                </div>
                                              </div>
                                            </div>
                                            <!-- end col-3 -->
                                            <!-- begin col-3 -->
                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                              <div class="widget widget-stats bg-purple">
                                                <div class="stats-icon"><i class="fa fa-calendar"></i></div>
                                                <div class="stats-info">
                                                  <h4>Dias restantes</h4>
                                                  <p>30</p> 
                                                </div>
                                              </div>
                                            </div>
                                            <!-- end col-3 -->    
                                        </div>
                                        <div class="row celda-informacion" style="text-align: center;">
                                           <div class="col-md-2">
                                             
                                           </div>
                                              
                                        </div>
                            </div>
                          <!-- inicio collapsible -->
                             <div id="accordion" class="panel-group visible-sm visible-xs" >
            
                                <div class="panel panel-inverse overflow-hidden">
                                  <div class="panel-heading">
                                    <h3 class="panel-title">
                                      <a class="accordion-toggle accordion-toggle-styled collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                          <i class="fa fa-plus-circle pull-right"></i> 
                                        Incentivos
                                      </a>
                                    </h3>
                                  </div>
                                  <div id="collapseTwo" class="panel-collapse collapse">
                                    <div class="panel-body">
                                      <div class="recompensa" >
                                          <span class="titulo-recompensa">Contribuir sin recompensa</span>
                                          <p>
                                            Realiza una contribución solidaria sin monto minimo de aportación
                                          </p>
                                          
                                      </div>
                                      <div class="recompensa" >
                                          <span class="titulo-recompensa">Vestimenta para ancianos</span>
                                          <p>
                                            <b>Donación: </b> <br>Donaciones de 10 o más perndas de vestir para adultos de 30 a 60 años (pantalon, camisa, saco, entre otros mas).
                                          </p>
                                          <p>
                                            <b> Recompensa: </b> <br> Tu nombre aparecera en la lista de agradecimientos que se publica en redes sociales.
                                          </p>
                                          
                                      </div>
                                      <div class="recompensa" >
                                          <span class="titulo-recompensa">Dinero para los cursos de capacitación</span>
                                          <p>
                                            <b>Donación: </b> <br>Donaciones de 50 a 100 dolares.
                                          </p>
                                          <p>
                                            <b> Recompensa: </b> <br> Tu nombre aparecera en la lista de agradecimientos que se publica en redes sociales. <br><br>Te entregaremos una carta de agradecimiento personalizada al momento de retirar la donacion.
                                          </p>
                                          
                                      </div>
                                      <div class="recompensa" >
                                          <span class="titulo-recompensa">Alimentación</span>
                                          <p>
                                            <b>Donación: </b> <br>Donaciones de 20 productos alimenticios.
                                          </p>
                                          <p>
                                            <b> Recompensa: </b> <br> Tu nombre aparecera en la lista de agradecimientos que se publica en redes sociales. <br><br>Te entregaremos una carta de agradecimiento personalizada al momento de retirar la donacion.
                                          </p>
                                          
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                
                              </div>
                          <!-- fin collapsible -->
                          
                            
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-8" >
                          
                          
                          
                              <ul class="nav nav-pills  ">
                                <li class="active"><a href="#nav-pills-tab-1" data-toggle="tab">Campaña</a></li>
                                <li><a href="#nav-pills-tab-2" data-toggle="tab">Donadores</a></li>
                                <li><a href="#nav-pills-tab-3" data-toggle="tab">Estadisticas</a></li>
                                <li><a href="#nav-pills-tab-4" data-toggle="tab">Comentarios</a></li>
                              </ul>
                              <div class="tab-content">
                                <div class="tab-pane fade active in" id="nav-pills-tab-1">
                                    <h3 class="m-t-10">Detalle campaña</h3>
                                  <p class="descripcion-campaña">
                                    <b>El OBJETIVO de Festival Madambé</b><br>
                                    ¨Festival Madambé Sonoridades del mundo¨ tiene como objetivo tejer redes entre diferentes tradiciones de música del mundo con el Ecuador. De tal forma que se puedan producir encuentros musicales y culturales, no solamente generando creaciones sonoras, sino también un intercambio de saberes y una mutua valorización de nuestras raíces, así como de nuestras similitudes culturales, históricas y rituales. <br><br>

                                    <b>¿Por qué necesitamos tu apoyo?</b><br>
                                    Necesitamos de tu apoyo para poder llegar a culminar con éxito este proyecto, todo aporte es importante, con tu colaboración podremos ver nacer un proyecto único en el mundo, que va ha rebasar fronteras, pues no solo será un concierto en vivo sino también una grabación entre estos increíbles músicos, y una película de toda este gran encuentro y experiencia. <br><br>

                                    Este año 2018 tenemos un primer encuentro organizado con el esfuerzo de varios colectivos para lograr un acercamiento entre Ecuador y África occidental. Cosmoaudición (producción sonora) Yelen (grupo de música afro fusión) ; Equilibrio Records (estudio de grabación), Artefacto Sonoro (residencia artística), Khipu Estudio (productora audiovisual), Yama: Grupo cultural, Centro cultural Yarina, los cuales están trabajando conjuntamente para llevar adelante este festival y encuentro.<br><br> 

                                    <b>¿Qué es Madambé?</b><br>
                                    “Madambé” es un encuentro de músicos que hoy en día mantienen la esencia viva de sus tradiciones. La historia de un milenario viaje, el viaje desde el origen humano, desde el África subsahariana hasta el centro del mundo. Y el retorno, el viaje desde el centro del mundo para encontrar a través de la música y la danza, la esencia del sentir humano. Un diálogo de los ancestros soñando el futuro a través de las tradiciones vivas. Un encuentro necesario para preservar la memoria, para compartir saberes y abrir caminos de integración entre los pueblos que siguen resistiendo y construyendo. <br><br>

                                    <b>¿Cuándo se realizará el Festival?</b><br>
                                    El Festival se realizará en el Teatro Capitol el viernes 20 de julio del 2018. En este evento contaremos con la participación de músicos representativos de difrentes ritmos nacionales, desde la Bomba, la música andina, hasta la música popular contemporanea. En este concierto se estrenará un repertorio conjunto entre músicos ecuatorianos y el multi-instrumentista Ahmed Fofana Mamadou (Costa de Marfil) y Orlando Yepez (Colombia), ganador del Grammy Latino con la agrupación Los Gaiteros de San Jacinto, quienes son grandes representantes de la música popular viva, desde sus diferentes latitudes. <br><br>

                                    <b>Los artistas</b><br>
                                    El Festival plantea una experiencia musical única en donde por primera vez podremos escuchar la fusión entres estos grandes artistas extrajeros y una variedad de músicos nacionales de la talla de:

                                    Ana Cachimuel, Lingberg Valencia, Ali Lema, Ati Cachimuel, Alex Alvear, Ilyari, David West, Diego David Zurita, Karina Klavijo, Natalia Luzuriaga, Santiago Mendez, Linda Pichamba, Mauricio Proaño, Carlos Erramosupe (Arg), y mas...
                                  </p>
                                </div>
                                <div class="tab-pane fade" id="nav-pills-tab-2">
                                    <h3 class="m-t-10">Nav Pills Tab 2</h3>

                                  <table id="data-table" class="table nowrap" width="100%">
                                    <thead>
                                      <th>Donante</th>
                                      <th>Fecha Donación</th>
                                      <th>Donación</th>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>Daniel Naula</td>
                                        <td>19/01/2018</td>
                                        <td>Alimentos</td>
                                      </tr>
                                      <tr>
                                        <td>Maria Belen Guaman</td>
                                        <td>31/01/2018</td>
                                        <td>Vestimenta</td>
                                      </tr>
                                      <tr>
                                        <td>Ines Guiñan</td>
                                        <td>05/02/2018</td>
                                        <td>Alimentos</td>
                                      </tr>
                                      <tr>
                                        <td>Alexander Naula</td>
                                        <td>14/02/2018</td>
                                        <td>Dinero</td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div>
                                <div class="tab-pane fade" id="nav-pills-tab-3">
                                    <h3 class="m-t-10">Nav Pills Tab 3</h3>
                                     
                                      <div  id="nv-stacked-area-chart" class="unidos-somos-mas-nv-chart height-lg">
                                        <svg ></svg>
                                      </div>
                                </div>
                                
                                <div class="tab-pane fade" id="nav-pills-tab-4">
                                    <h3 class="m-t-10">Calificación de la campaña:</h3>
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
                                              <b>Recomienda Donar en la Campaña: </b> Si

                                            </p>
                                        </td>
                                        <td><fieldset class="stars-fieldset"><span class="stars stars-20"> <span hidden="">20</span></span></fieldset></td>
                                        
                                      </tr>
                                      <tr>
                                        <td>
                                          <p>
                                              <b>Maria Belen Guaman</b><br>
                                              <b>Comentario:</b> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat ducimus, aliquam illo ea mollitia. <br>
                                              <b>Recomienda Donar en la Campaña: </b> No

                                          </p>
                                        </td>
                                        <td><fieldset class="stars-fieldset"><span class="stars stars-40"><span hidden="">40</span></span></fieldset></td>
                                        
                                      </tr>
                                      <tr>
                                        <td>
                                          <p>
                                              <b>Ines Guiñan</b><br>
                                              <b>Comentario:</b> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat ducimus, aliquam illo ea mollitia. <br>
                                              <b>Recomienda Donar en la Campaña: </b> Si

                                          </p>
                                        </td>
                                        <td><fieldset class="stars-fieldset"><span class="stars stars-30"> <span hidden="">30</span></span></fieldset></td>
                                        
                                      </tr>
                                      <tr>
                                        <td>
                                          <p>
                                              <b>Alexander Naula</b><br>
                                              <b>Comentario:</b> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat ducimus, aliquam illo ea mollitia. <br>
                                              <b>Recomienda Donar en la Campaña: </b> Si

                                          </p>
    
                                        </td>
                                        <td><fieldset class="stars-fieldset"><span class="stars stars-45"><span hidden="">45</span></span></fieldset></td>
                                        
                                      </tr>
                                    </tbody>
                                  </table>

                                </div>
                              </div> 

                                          
            </div>
            <div class="col-md-4 hidden-sm hidden-xs" >

                    
                <!-- begin panel -->
                    <div class="panel panel-inverse" data-sortable-id="ui-typography-6">
                        <div class="panel-heading">
                            
                            <h4 class="panel-title">Incentivos</h4>
                        </div>
                        <div class="panel-body">
                            <div class="recompensa" >
                                <span class="titulo-recompensa">Contribuir sin recompensa</span>
                                <p>
                                  Realiza una contribución solidaria sin monto minimo de aportación
                                </p>
                                
                            </div>
                            <div class="recompensa" >
                                <span class="titulo-recompensa">Vestimenta para ancianos</span>
                                <p>
                                  <b>Donación: </b> <br>Donaciones de 10 o más perndas de vestir para adultos de 30 a 60 años (pantalon, camisa, saco, entre otros mas).
                                </p>
                                <p>
                                  <b> Recompensa: </b> <br> Tu nombre aparecera en la lista de agradecimientos que se publica en redes sociales.
                                </p>
                                
                            </div>
                            <div class="recompensa" >
                                <span class="titulo-recompensa">Dinero para los cursos de capacitación</span>
                                <p>
                                  <b>Donación: </b> <br>Donaciones de 50 a 100 dolares.
                                </p>
                                <p>
                                  <b> Recompensa: </b> <br> Tu nombre aparecera en la lista de agradecimientos que se publica en redes sociales. <br><br>Te entregaremos una carta de agradecimiento personalizada al momento de retirar la donacion.
                                </p>
                                
                            </div>
                            <div class="recompensa" >
                                <span class="titulo-recompensa">Alimentación</span>
                                <p>
                                  <b>Donación: </b> <br>Donaciones de 20 productos alimenticios.
                                </p>
                                <p>
                                  <b> Recompensa: </b> <br> Tu nombre aparecera en la lista de agradecimientos que se publica en redes sociales. <br><br>Te entregaremos una carta de agradecimiento personalizada al momento de retirar la donacion.
                                </p>
                                
                            </div>
                        </div>
                    </div>
                    <!-- end panel -->

            </div>

        </div>
                </div>
              </div>
           </div>
        </div>

       <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade show" data-click="scroll-top"><i class="fa fa-angle-up"></i></a> 


@endsection


@section('end_js')
  @parent
  
  <script src="{{ asset('js/Graficas_unidos_somos_mas/unidos_somos_mas_inicio.js') }}"></script>
  <script src="{{ asset('plugins/nvd3/nvd3.min.js') }}"></script>


  <!-- ================== BEGIN PAGE LEVEL JS ================== -->
  <script src="{{ asset('plugins/DataTablesv2/datatables.js') }}"></script>
   <script src="{{ asset('js/table-manage-responsive.demo.js') }}"></script>
  <!-- ================== END PAGE LEVEL JS ================== -->

@endsection

@section('init_scripts')

  <script>

      $(document).ready(function() {
          TablaCCPTHomelistado.init();
          TablaComentarios.init();
          
          ChartNvd3.init();

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
<script>
$(document).ready(function(){
    $(".nav-pills a").click(function(){
        $(this).tab('show');
    }); 
    $('.nav-pills a').on('shown.bs.tab', function(){
        //alert('La nueva pestaña ahora se muestra completamente.');
        window.dispatchEvent(new Event('resize'));
    });

    
});
</script>



@endsection


