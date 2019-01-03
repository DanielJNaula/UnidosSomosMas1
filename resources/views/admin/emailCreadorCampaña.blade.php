@extends('layouts.mainAdmin')
 
@section('title', 'Detalle donación') 

@section('start_css')
  @parent
  <link href="{{ asset('plugins/jquery-tag-it/css/jquery.tagit.css') }}" rel="stylesheet">
  <link href="{{ asset('plugins/bootstrap-wysihtml5/src/bootstrap-wysihtml5.css') }}" rel="stylesheet">
  
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
                          
                          <li class="active"><a href="#">Correo electrónico Unidos Somos Más</a></li>
                          
                          <label class='text-success pull-right'>
                            <a href="javascript:history.back(1)" class="btn btn-link fit-m-t-1"><i class="fa fa fa-arrow-left"></i> Atras</a>
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
                                           
                                            <h4 class="panel-title">Información de usuario</h4>
                                        </div>
                                        <div class="panel-body">
                                         <h5 class="panel-title alert subtitulo-info-general fade in m-b-15"><strong>Nombres:</strong></h5>
                                         <p class="informacion-campaña">
                                          Daniel Jesús
                                        </p>
                                        <h5 class="panel-title alert subtitulo-info-general fade in m-b-15"><strong>Apellidos:</strong></h5>
                                        <p class="informacion-campaña">
                                          Naula Guiñan
                                        </p>
                                        <h5 class="panel-title alert subtitulo-info-general fade in m-b-15"><strong>Codigo:</strong></h5>
                                         <p class="informacion-campaña">
                                          3
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
                                            <h4 class="panel-title">Correo electrónico</h4>
                                        </div>
                                        <!-- inicio panel --> 
                                        <div class="panel-body">
                                            <!-- begin wrapper -->
                    <div class="wrapper">
                        <div class="p-30 bg-white">
                            <!-- begin email form -->
                            <form action="/" method="POST" name="email_to_form">
                                <!-- begin email to -->
                                <label class="control-label">Para:</label>
                                <div class="m-b-15">
                                    <ul id="email-to" class="inverse">
                                        <li>jesus1494@hotmail.es</li>
                                        
                                    </ul>
                                </div>
                                <!-- end email to -->
                                <!-- begin email subject -->
                                <label class="control-label">Asunto:</label>
                                <div class="m-b-15">
                                    <input type="text" placeholder="Agregar Asunto" class="form-control" />
                                </div>
                                <!-- end email subject -->
                                <!-- begin email content -->
                                <label class="control-label">Contenido:</label>
                                <div class="m-b-15">
                                    <textarea class="textarea form-control" id="wysihtml5" placeholder="Ingrese contenido del mensaje ..." rows="12"></textarea>
                                </div>
                                <!-- end email content -->
                                <button type="submit" class="btn btn-primary p-l-40 p-r-40">Enviar</button>
                            </form>
                            <!-- end email form -->
                        </div>
                    </div>
                <!-- end wrapper --> 
                                           
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

        <script src="{{ asset('plugins/jquery-tag-it/js/tag-it.min.js') }}"></script>
        <script src="{{ asset('plugins/bootstrap-wysihtml5/lib/js/wysihtml5-0.3.0.js') }}"></script>
        <script src="{{ asset('plugins/bootstrap-wysihtml5/src/bootstrap-wysihtml5.js') }}"></script>
        <script src="{{ asset('js/email-compose.demo.min.js') }}"></script>

@endsection

@section('init_scripts')

  <script>
    $(document).ready(function() {
      EmailCompose.init();
    });
  </script>



@endsection


