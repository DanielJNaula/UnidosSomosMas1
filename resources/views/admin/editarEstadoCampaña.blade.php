@extends('layouts.mainAdmin')
 
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
                          
                          <li class="active"><a href="">Actualizar estado de campaña</a></li>
                          
                          <label class='text-success pull-right'>
                            <a href="javascript:window.history.back();" class="btn btn-link fit-m-t-1"><i class="fa fa fa-arrow-left"></i> Atras</a>
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
                                            <h4 class="panel-title">Actualizar estado de campaña</h4>
                                        </div>
                                        <!-- inicio panel --> 
                                        <div class="panel-body">
                                            <!-- inicio informacion general de donacion -->
                                              
                                              <div class="form-group row">

                                                  <label for="apellidos" class="col-md-4 col-form-label text-right">Titulo campaña:</label>

                                                  <div class="col-md-6">
                                                      <strong class='text-success'>Ayuda a los albergados del albergue San Juan de Dios</strong>
                                                  </div>
                                              </div>
                                              <div class="form-group row">

                                                  <label for="apellidos" class="col-md-4 col-form-label text-right">Tipo campaña:</label>

                                                  <div class="col-md-6">
                                                      <strong class='text-success'>Donación de bienes</strong>
                                                  </div>
                                              </div>
                                              <div class="form-group row">

                                                  <label for="apellidos" class="col-md-4 col-form-label text-right">Creador campaña:</label>

                                                  <div class="col-md-6">
                                                      <strong class='text-success'>Daniel Naula</strong>
                                                  </div>
                                              </div>
                                              <div class="form-group row">

                                                  <label for="apellidos" class="col-md-4 col-form-label text-right">Fecha limite de campaña</label>

                                                  <div class="col-md-6">
                                                      <strong class='text-success'>30/11/2018</strong>
                                                  </div>
                                              </div>
                                              
                                            <!-- fin informacion general de donacion -->
                                            
                                            
                                          <!-- inicio form -->
                                         
                                           <form class="form-horizontal form-bordered" data-parsley-validate="true" name="demo-form">

                                             <label class="control-label" for="tituloDonacion">Estado de campaña * :</label><br><br>
                                             
                                             
                                             <select name="estadoCampaña"  class="form-control" data-parsley-group="wizard-step-1" required>
                                                    <option value="" disabled >seleccione estado de campaña</option>
                                                    <option value="1" selected>Por publicar</option>
                                                    <option value="2" >Publicado</option>
                                              </select> 
                          
                                             
               
                                              <br><br>
                                    
                                              <div style="text-align: center;">
                                                <a type="submit" href="#" class="btn btn-primary">Actualizar estado campaña</a>
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


