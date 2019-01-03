@extends('layouts.mainUsuarioLogueado')
 
@section('title', 'Detalle campaña') 

@push('css')
  
  <link href="{{ asset('plugins/jasny-bootstrap/css/jasny-bootstrap.min.css') }}" rel="stylesheet" />
  
  <link href="{{ asset('plugins/bootstrap-wizard/css/bwizard.css') }}" rel="stylesheet" />
  
  <link href="{{ asset('plugins/parsley/src/parsley.css') }}" rel="stylesheet" />
  <link href="{{ asset('plugins/bootstrap-datepicker/css/datepicker.css') }}" rel="stylesheet" />
  
  
  
  
  
@endpush



@section('contenido') 
<br><br><br><br>       
        <div class="row">
           <div class="container">
              <div class="col-md-12">
                 <div class="panel-body">

                  <div class="row" >

                    <div class="col-md-12">
                     <!-- begin panel -->
                    
                        
                        <div class="panel-body">
                            <form action="/" method="POST" data-parsley-validate="true" name="form-wizard">
                <div id="wizard">
                  <ol>
                    <li>
                        Configurar tu campaña 
                        <small>Esta seccion es para describir tu campaña.</small>
                    </li>
                    <li>
                        Incentivos
                        <small>Esta sección es para animar a tus posibles donadores.</small>
                    </li>
                    <li>
                        Potenciar tu campaña
                        <small>Esta seccion es para links externos de tu campaña como facebook, youtube, etc.</small>
                    </li>
                    <li>
                        Registro Completo
                        <small>Indicaciones de unidos somos más.</small>
                    </li>
                  </ol>
                  <!-- begin wizard step-1 -->
                  <div class="wizard-step-1">
                                        <fieldset>
                                            <legend class="pull-left width-full">Configura tu campaña</legend>
                                            <!-- begin row -->
                                            <div class="row">
                                              <div class="col-md-1"></div>

                                              <div class="col-md-9"> 
                                                <!-- Inicio imagen -->
                                                <label>Imagen de presentacion de campaña</label>
                                                  <div class="form-group " style="padding-left: 15px">
                                                      <div class="fileinput fileinput-new" data-provides="fileinput">
                                                          <div class="fileinput-new img-thumbnail text-center">
                                                              <img src="holder.js/230x170"  id="myImage"  alt="not found"></div>
                                                          <div class="fileinput-preview fileinput-exists img-thumbnail"></div>
                                                          <div class="m-t-20 text-center">
                                                                      <span class="btn btn-success btn-file">
                                                                          <span class="fileinput-new">Selecciona imagen</span>
                                                                          <span class="fileinput-exists">Cambiar</span>
                                                                          <input type="file" name="..."></span>
                                                              <a href="#" class="btn btn-warning fileinput-exists"
                                                                 data-dismiss="fileinput">Eliminar</a>
                                                          </div>
                                                      </div>
                                                  
                                              </div>
                                                <!-- fin imagen -->

                                                <!-- inicio Titulo campaña -->
                                                  <div class="form-group block1">
                                                    <label>Título de campaña *:</label>
                                                    <input type="tituloCampaña" name="tituloCampaña" placeholder="Escriba el titulo de su campaña. Ejm: Ayuda a los adolecentes de la fundación Jovenes fuerte" class="form-control" data-parsley-group="wizard-step-1" required />
                                                  </div>
                                                <!-- fin titulo campaña -->
                                                <!--inicio descripcion corta de campaña -->
                                                  <div class="form-group">
                                                    <label>Descripción corta de campaña *:</label>
                                                    <textarea type="text" name="descripcionCortaCampaña" placeholder="Describa de manera muy resumida a su campaña" rows="4" class="form-control" data-parsley-group="wizard-step-1" required></textarea>
                                                  </div>
                                                <!-- fin descripcion corta de campaña -->

                                                <!-- inicio provincia campaña -->
                                                <div class="form-group">
                                                  <label>Provincia donde se encuentra tu campaña *:</label>
                                                  
                                                  <select name="provinciaCampaña"  class="form-control" data-parsley-group="wizard-step-1" required>
                                                    <option value="" disabled selected>seleccione una provincia</option>
                                                    <option value="1">Pichincha</option>
                                                    <option value="2">Esmeraldas</option>
                                                  </select>
                                                </div>                 
                                                <!-- final provincia campaña -->

                                                <!-- inicio canton campaña -->
                                                <div class="form-group">
                                                  <label>Canton donde se encuentra tu campaña *:</label>
                                                  
                                                  <select name="cantantoCampaña"  class="form-control" data-parsley-group="wizard-step-1" required>
                                                    <option value="" disabled selected>seleccione una provincia</option>
                                                    <option value="1">Quito</option>
                                                    <option value="2">Rumiñagui</option>
                                                  </select>
                                                </div>                 
                                                <!-- final canton campaña -->

                                                <!-- inicio tipo campaña -->
                                                <div class="form-group">
                                                  <label>Tipo Campaña *:</label> 
                                                  
                                                  
                                                    <div class="radio">
                                                      <label>
                                                        <input type="radio" name="radiorequired" value="1" id="radio-required" data-parsley-group="wizard-step-1" required  onclick="ocultarfechalimite();"/> Campaña permanente
                                                      </label>
                                                    </div>
                                                    <div class="radio">
                                                      <label>
                                                        <input type="radio" name="radiorequired" id="radio-required2" value="2" onclick="mostrarFechalimite();" /> Campaña parcial
                                                      </label>
                                                    </div>
                                                 
                                                </div>                
                                                <!-- final tipo campaña -->
                                                <!-- inicio tipo campaña -->
                                                <div id="fechalimiteCampaña" style="display: none;">
                                                <div class="form-group" >
                                                  <label>Seleccione *:</label> <br>
                                                  
                                                  <div class="input-group date" id="datepicker-disabled-past" data-date-format="dd-mm-yyyy" data-date-start-date="Date.default">
                                                      <input type="text" class="form-control" placeholder="Select Date" data-parsley-group="wizard-step-1" required />
                                                      <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                  </div>
                                                </div> 
                                                </div>                
                                                <!-- final tipo campaña -->

                                                <h3><strong>Donaciones que acepta tu campaña</strong></h3>
                                                
                                                <!-- inicio donaciones -->
                                                <div class="form-group">
                                                    <label>Describa las donaciones que acepta la campaña *:</label>
                                                    <textarea class="ckeditor" id="editor1" name="comentario" rows="6" data-parsley-group="wizard-step-1" required></textarea>
                                                  </div>
                                                  
                                                <!-- fin donaciones -->

                                                <h3><strong>Descripción de campaña</strong></h3>
                                                <h4><strong>Video o imagen de portada de la campaña</strong></h4>
                                                
                                                <!-- inicio url campaña -->
                                                  <div class="form-group">
                                                    <label>URL del video de la campaña *:</label>
                                                    <input type="tituloCampaña" name="tituloCampaña" placeholder="Escriba el titulo de su campaña. Ejm: Ayuda a los adolecentes de la fundación Jovenes fuerte" class="form-control" data-parsley-group="wizard-step-1" data-parsley-type="url" required />
                                                  </div>
                                                <!-- fin url campaña -->

                                                <!-- Inicio imagen -->
                                                <label>Imagen de portada de campaña</label>
                                                  <div class="form-group " style="padding-left: 15px">
                                                      <div class="fileinput fileinput-new" data-provides="fileinput">
                                                          <div class="fileinput-new img-thumbnail text-center">
                                                              <img src="holder.js/230x170"  id="myImage"  alt="not found"></div>
                                                          <div class="fileinput-preview fileinput-exists img-thumbnail"></div>
                                                          <div class="m-t-20 text-center">
                                                                      <span class="btn btn-success btn-file">
                                                                          <span class="fileinput-new">Selecciona imagen</span>
                                                                          <span class="fileinput-exists">Cambiar</span>
                                                                          <input type="file" name="..."></span>
                                                              <a href="#" class="btn btn-warning fileinput-exists"
                                                                 data-dismiss="fileinput">Eliminar</a>
                                                          </div>
                                                      </div>
                                                  
                                              </div>
                                                <!-- fin imagen -->

                                                <!-- inicio url campaña -->
                                                  <div class="form-group">
                                                    <label>Descripción de campaña *:</label>
                                                    <textarea class="ckeditor"  name="descripcionCampaña"  data-parsley-group="wizard-step-1" required></textarea>
                                                  </div>
                                                <!-- fin url campaña -->
                                              </div>
                                            </div>
                                            <!-- end row -->
                                            
                    </fieldset>
                  </div>
                  <!-- end wizard step-1 -->

                  <!-- begin wizard step-2 -->
                  <div class="wizard-step-2">

                    <fieldset>
                      <legend class="pull-left width-full">Contact Information</legend>
                                            <!-- begin row -->
                                            <div class="row">
                                               <!-- begin tabla incentivos -->
                                                <div class="col-md-2 pull-rigth">
                                    <label for=""><strong>Incentivos de campaña</strong></label> <br>
                                    <button id="adicional" name="adicional" type="button" class="btn btn-warning">Añadir nuevo incentivo</button>
                                </div>
                                                
                                                <table class="table "  id="tabla">
                                                     <tr class="fila-fija">
                                                        <td><input  class="form-control" id="tituloDonacion" name="tituloDonacion[]" placeholder="Título de la donación" data-parsley-group="wizard-step-2"/></td>
                                                        <td>
                                                        <textarea class="form-control"   id="descripcionDonacion" name="descripcionDonacion[]" placeholder="Descripcion de la donación"  rows="4" data-parsley-group="wizard-step-2" ></textarea>
                                                        </td>
                                                        <td>
                                                        <textarea class="form-control"  id="descripcionIncentivo" name="descripcionIncentivo[]" placeholder="Descripción de Incentivo" rows="4" data-parsley-group="wizard-step-2" ></textarea>
                                                        </td>
                                                        
                                                        
                                                        <td class="eliminar"><input  type="button" class="btn btn-info "  value="Borrar "/></td>
                                                    </tr>
                                                </table>
                                                 <br> 
                                                <!-- end tabla incentivos -->
                                               
                                            </div>
                                            <!-- end row -->
                    </fieldset>
                  </div>
                  <!-- end wizard step-2 -->
                  <!-- begin wizard step-3 -->
                  <div class="wizard-step-3">
                    <fieldset>
                      <legend class="pull-left width-full">Links externos de tu campaña</legend>
                                            <!-- begin row -->
                                            <div class="row">
                                              <div class="col-md-1"></div>
                                              <div class="col-md-9">
                                              <!-- inicio url fb -->
                                                  <div class="form-group">
                                                    <label>Facebook :</label>
                                                    <input type="linkFacebook" name="linkFacebook" placeholder="Ingrese el link de facebook de su campaña" class="form-control" data-parsley-group="wizard-step-3" data-parsley-type="url"  />
                                                  </div>
                                                <!-- fin url fb -->
                                               <!-- inicio url tw -->
                                                  <div class="form-group">
                                                    <label>Twitter :</label>
                                                    <input type="linkTwitter" name="linkTwitter" placeholder="Ingrese el link de twitter de su campaña" class="form-control" data-parsley-group="wizard-step-3" data-parsley-type="url"  />
                                                  </div>
                                                <!-- fin url tw -->
                                                <!-- inicio url youtube -->
                                                  <div class="form-group">
                                                    <label>Youtube :</label>
                                                    <input type="linkYoutube" name="linkYoutube" placeholder="Ingrese el link su canal de youtube de su campaña" class="form-control" data-parsley-group="wizard-step-3" data-parsley-type="url"  />
                                                  </div>
                                                <!-- fin url youtube -->
                                                <!-- inicio url pagina web -->
                                                  <div class="form-group">
                                                    <label>Pagina web :</label>
                                                    <input type="linkPaginaWeb" name="linkPaginaWeb" placeholder="Ingrese el link de la pagina web de su campaña" class="form-control" data-parsley-group="wizard-step-3" data-parsley-type="url"  />
                                                  </div>
                                                <!-- fin url pagina web -->
                                                </div>
                                            </div>
                                            <!-- end row -->
                                        </fieldset>
                  </div>
                  <!-- end wizard step-3 -->
                  <!-- begin wizard step-4 -->
                  <div>
                      <div class="jumbotron m-b-0 text-center">
                                            <h1>El registro de su campaña esta casi listo</h1>
                                            <p>Pronto se te enviara un correo de parte del administrador UNIDOS SOMOS MÁS para notificarte novedades en tu campaña o si tu campaña ya esta públicada gracias por formar parte de UNIDOS SOMOS MÁS. </p>
                                            <p><a class="btn btn-primary btn-lg" href="/visualizar-mis-campañas" role="button">Registrar campaña de bienes</a>
                                            
                                            </p>
                                        </div>
                  </div>
                  <!-- end wizard step-4 -->
                </div>
              </form>
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

@push('scripts')
  
  <script src="{{ asset('plugins/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
  <script src="{{ asset('plugins/parsley/dist/parsley.js') }}"></script>
  <script src="{{ asset('plugins/bootstrap-wizard/js/bwizard.min.js') }}"></script>
  <script src="{{ asset('js/form-wizards-validation.demo.js') }}"></script>
  <script src="{{ asset('js/activarFechalimiteCampaña/activarfechaLimite.js') }}"></script>
  <script src="{{ asset('js/jasny-bootstrap.js') }}"></script>
  <script src="{{ asset('js/form-plugins.demo.min.js') }}"></script>
  <script src="{{ asset('plugins/holderjs/js/holder.js') }}"></script>
  <script src="{{asset ('plugins/ckeditor/ckeditor.js')}}"></script>

  <script>
            
            $(function(){
                // Clona la fila oculta que tiene los campos base, y la agrega al final de la tabla
                $("#adicional").on('click', function(){
                    $("#tabla tbody tr:eq(0)").clone().removeClass('fila-fija').appendTo("#tabla");
                });
             
                // Evento que selecciona la fila y la elimina 
                $(document).on("click",".eliminar",function(){
                    var parent = $(this).parents().get(0);
                    $(parent).remove();
                });
            });
    </script> 
  
  <script>
    $(document).ready(function() {
      
      FormWizardValidation.init();
      
      FormPlugins.init();

      
    });
  </script>
  
@endpush


