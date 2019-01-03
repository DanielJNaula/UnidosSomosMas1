@extends('layouts.mainUsuarioLogueado')
 
@section('title', 'Detalle donación') 

@section('start_css')
  @parent
  <link href="plugins/nvd3/nv.d3.min.css" rel="stylesheet" />
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
                          
                          <li class="active"><a href="#">Detalle donación</a></li>
                          
                          <label class='text-success pull-right'>
                            <a href="/visualizar-mis-donaciones" class="btn btn-link fit-m-t-1"><i class="fa fa fa-arrow-left"></i> Atras</a>
                          </label>
                        </ol>
                      </div>
                    <br>
                  </div>
                      <div class="row">
                        <!-- inicio col 4 -->
                        <div class="col-md-3">
                            <!-- inicio informacion general -->
                                <div class="panel panel-inverse" data-sortable-id="ui-typography-8">
                                        <div class="panel-heading">
                                           
                                            <h4 class="panel-title">Información de campaña</h4>
                                        </div>
                                        <div class="panel-body">
                                         <h5 class="panel-title alert subtitulo-info-general fade in m-b-15"><strong>Nombre Campaña:</strong></h5>
                                         <p class="informacion-campaña">
                                          Ayuda a los albergados del Albergue San Juan de Dios
                                        </p>
                                        <h5 class="panel-title alert subtitulo-info-general fade in m-b-15"><strong>Código Campaña:</strong></h5>
                                        <p class="informacion-campaña">
                                          15
                                        </p>
                                        <h5 class="panel-title alert subtitulo-info-general fade in m-b-15"><strong>Tipo Campaña:</strong></h5>
                                         <p class="informacion-campaña">
                                          Donación de bienes
                                        </p> 
                                        </div>
                                        <!-- end panel -->      
                                </div>
                            <!-- final informacion general -->
                          </div>
                        <!-- final col 4 -->

                        <!-- inicio col 8 -->
                          <div class="col-md-9">
                            <!-- inicio informacion general -->
                                <div class="panel panel-inverse" data-sortable-id="ui-typography-8">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">Información de donación</h4>
                                        </div>
                                        <!-- inicio panel --> 
                                        <div class="panel-body">
                                            <p class="detalle-donacion">
                                              <strong>Titulo de donación:</strong>
                                              <strong class='text-success'>Vestimenta para los ancianos del albergue San Juan de Dios</strong><br>
                                              <strong>Teléfono del donador:</strong> 0999999999<br>
                                              <strong>Estado de donación:</strong> <span class="label label-warning f-s-14"> Por retirar</span><br>
                                              <strong>Recompensa:</strong> Si<br>
                                            </p>
                                            <p class="text-justify">
                                              <strong>Descripción de la donación de acuero a la Recompensa:</strong><br> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo veniam, repellendus, soluta laborum suscipit voluptas maiores cum incidunt natus aliquid dicta amet doloribus consectetur quas iusto magnam dolorem mollitia earum!
                                            </p>
                                            <p class="text-justify">
                                              <strong>Descripción de la Recompensa:</strong> <br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam quaerat atque odit, voluptatem maxime impedit animi numquam ratione sed ipsa nobis sapiente quos libero magnam similique harum eum! Praesentium, accusantium?
                                            </p>
                                            <p class="text-justify">
                                              <strong>Descripción de la donacion del donador:</strong> <br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur neque recusandae error, ipsam animi iusto eum magnam nihil consequuntur veniam laboriosam itaque nam dolorem voluptatem excepturi quia! Nostrum, animi minima.
                                            </p>
                                            <p class="text-justify">
                                              <strong>Horario de retiro de la donación:</strong> <br> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga, assumenda, numquam? Tempora aspernatur, itaque rerum id mollitia qui, labore neque laborum, nihil expedita unde animi ipsam amet dolores inventore esse.
                                            </p>
                                            <p class="text-justify">
                                              <strong>Dirección de retiro de la donación:</strong> Buenaventura calle L14 lote 15
                                            </p>
                                            {!! $map['html']!!}
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
  
  <script src="{{ asset('js/Graficas_unidos_somos_mas/unidos_somos_mas_inicio.js') }}"></script>
  <script src="{{ asset('plugins/nvd3/nvd3.min.js') }}"></script>


  <!-- ================== BEGIN PAGE LEVEL JS ================== -->
  <script src="{{ asset('plugins/DataTablesv2/datatables.js') }}"></script>
   <script src="{{ asset('js/table-manage-responsive.demo.js') }}"></script>
  <!-- ================== END PAGE LEVEL JS ================== -->
  {!! $map['js']!!}
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
<script>
  
</script>


@endsection


