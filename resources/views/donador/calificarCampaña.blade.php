@extends('layouts.mainUsuarioLogueado')
 
@section('title', 'Calificar campaña') 

@section('start_css')
  @parent
  <link href="/assets/plugins/parsleyjs/src/parsley.css" rel="stylesheet" />
  <link href="{{ asset('plugins/starability/css/starability-all.css') }}" rel="stylesheet" />
  <link href="{{ asset('plugins/bootstraprating/css/star-rating.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/ratings.css') }}" rel="stylesheet" />
  
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
                          
                          <li class="active"><a href="#">Calificar campaña</a></li>
                          
                          <label class='text-success pull-right'>
                            <a href="/visualizar-mis-donaciones" class="btn btn-link fit-m-t-1"><i class="fa fa fa-arrow-left"></i> Atras</a>
                          </label>
                        </ol>
                      </div>
                    <br>
                  </div>
                      <div class="row">
                       
                          <div class="col-md-2">
                            
                          </div>
                        <!-- inicio col 8 -->
                          <div class="col-md-8">
                            <!-- inicio informacion general -->
                                <div class="panel panel-inverse" data-sortable-id="ui-typography-8">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">Información general de campaña</h4>
                                        </div>
                                        <!-- inicio panel --> 
                                        <div class="panel-body">
                                            <p class="detalle-campaña">
                                              <strong>Titulo de campaña:</strong>
                                              <strong class='text-success'> Ayuda a los albergados del Albergue San Juan de Dios</strong><br>
                                              <strong>Tipo campaña:</strong> Donación de bienes<br>
                                              <strong>Codigo campaña:</strong>  54<br>
                                              <strong>Creador de campaña:</strong> Daniel Jesus Naula Guiñan<br>
                                            </p>
                                            <p class="text-justify" style="line-height: 25px;font-size: 15px;">
                                              <strong>Descripción corta de la campaña:</strong><br> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo veniam, repellendus, soluta laborum suscipit voluptas maiores cum incidunt natus aliquid dicta amet doloribus consectetur quas iusto magnam dolorem mollitia earum!
                                            </p>
                                          <!-- inicio form -->
                                         
                                           <form class="form-horizontal form-bordered" data-parsley-validate="true" name="demo-form">

                                             <label class="control-label" for="tituloDonacion">Calificacion a la campaña * :</label><br><br>
                                             
                                             <div class="starability-growRotate">
                                                <input type="radio" id="growing-rotating-rate5" name="rating" value="5" />
                                                <label for="growing-rotating-rate5" title="Amazing" aria-label="Amazing, 5 stars">5 stars</label>
                                                <input type="radio" id="growing-rotating-rate4" name="rating" value="4" />
                                                <label for="growing-rotating-rate4" title="Very good" aria-label="Very good, 4 stars">4 stars</label>
                                                <input type="radio" id="growing-rotating-rate3" name="rating" value="3" />
                                                <label for="growing-rotating-rate3" title="Average" aria-label="Average, 3 stars">3 stars</label>
                                                <input type="radio" id="growing-rotating-rate2" name="rating" value="2" />
                                                <label for="growing-rotating-rate2" title="Not good" aria-label="Not good, 2 stars">2 stars</label>
                                                <input type="radio" id="growing-rotating-rate1" name="rating" value="1" />
                                                <label for="growing-rotating-rate1" title="Terrible" aria-label="Terrible, 1 star">1 star</label>
                                            </div>
                                              
                          
                                              <label class="control-label" for="descripcionDonacion">Comentario de calificación *:</label>
                                              <textarea class="form-control" id="descripcionDonacion" name="descripcionDonacion" rows="4" data-parsley-required="true"   placeholder="Describa la donación que desea contribuir"></textarea>

                                              
                                              <label class="control-label ">Recomendaria donar en esta campaña *:</label>
                                              
                                                <div class="radio">
                                                  <label>
                                                    <input type="radio" name="radiorequired" value="foo" id="radio-required" data-parsley-required="true" /> Si
                                                  </label>
                                                </div>
                                                <div class="radio">
                                                  <label>
                                                    <input type="radio" name="radiorequired" id="radio-required2" value="bar" /> No
                                                  </label>
                                                </div>
                                              
               
                                              <br><br>
                                    
                                              <div style="text-align: center;">
                                                <button type="submit" class="btn btn-primary">Donar a la campaña</button>
                                              </div>
                                           </form>
                                           <!-- fin form -->
                                           
                                            
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
  <script src="/assets/plugins/parsleyjs/dist/parsley.js"></script>
  <script src="/assets/plugins/highlight/highlight.min.js"></script>
  <script src="/assets/js/demo/render.highlight.js"></script>
  <script src="{{ asset('plugins/bootstraprating/js/star-rating.min.js') }}"></script>

  <!-- ================== END PAGE LEVEL JS ================== -->
  
@endsection

@section('init_scripts')

<script>
    $(document).ready(function() {
      Highlight.init();
      
    });
  </script>


@endsection


