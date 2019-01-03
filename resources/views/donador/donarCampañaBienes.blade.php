@extends('layouts.mainUsuarioLogueado')
 
@section('title', 'Detalle campaña') 

@push('css')
  <link href="/assets/plugins/parsleyjs/src/parsley.css" rel="stylesheet" />
@endpush


@section('contenido') 
<br><br><br><br>       
        <div class="row">
           <div class="container">
              <div class="col-md-12">
                 <div class="panel-body">

                  <div class="row" >
                    <div style="text-align: center; color: #348fe2;">
                      <strong><h3>Ayuda a los albergados del Albergue San Juan de Dios</h3> </strong>
                      <strong><h4>Ubicación: Quito, Ecuador</h4> </strong>
                      <strong><h4>Autor: Daniel Naula</h4> </strong>
                    </div>
                    <br><br>

                    <div class="col-md-2">
                      
                    </div>

                    <div class="col-md-8">
                      
                         <!-- begin panel -->
                        
                            <form class="form-horizontal form-bordered" data-parsley-validate="true" name="demo-form">
                                  <div class="reward-list">
                          
                          <h3><span style="color: #348fe2"> <strong> Selecciona tu incentivo</strong></span></h3>
                          <ul>
                            <li class="reward">
                              <label>
                                <input name="is_shipp_711" id="is_shipp_711" type="hidden" value="1">
                                <input name="perks" type="radio" class="radioClass sr-only" value="711">
                                <span class="reward-media">
                                  <span class="indicator"><i class="fa fa-2x fa-check-square-o"></i></span>
                                  <span class="reward-body">
                                    <span class="reward-title">Vestimenta para Ancianos</span>
                                    <span class="reward-descrip">

                                      <strong>Descripción:</strong><br>
                                      Donaciones de 10 o más prendas de vestir para adultos de 30 a 80 años (pantalon, camisa ó camiseta, saco). <br><br>

                                      <strong>Recompensa:</strong><br>
                                      Tu nombre aparecerá en la lista de agradecimiento que se pública en redes sociales.
                                      
                                    </span>
                                    
                                  </span>
                                </span>
                              </label>
                            </li>
                          <li class="reward">
                            <label>
                              <input name="is_shipp_784" id="is_shipp_784" type="hidden" value="1">
                              <input name="perks" type="radio" class="radioClass sr-only" value="784" ">
                              <span class="reward-media">
                                <span class="indicator"><i class="fa fa-2x fa-check-square-o"></i></span>
                                
                                <span class="reward-body">
                                  <span class="reward-title">Dinero para los cursos de capacitacion</span>
                                  <span class="reward-descrip">
                                      <strong>Descripción:</strong><br>
                                      Donaciones entre 50 a 100 dolares <br> <br>

                                      <strong>Recompensa:</strong><br>
                                      Tu nombre aparecerá en la lista de agradecimiento que se pública en redes sociales. <br> 
                                      Te entregaremos una carta de agradecimiento personalizada al momento de retirar la donacion.

                                  </span>
                                  
                                </span>
                              </span>
                            </label>
                          </li>
                          <li class="reward">
                            <label>
                              <input name="is_shipp_784" id="is_shipp_784" type="hidden" value="1">
                              <input name="perks" type="radio" class="radioClass sr-only" value="784" ">
                              <span class="reward-media">
                                <span class="indicator"><i class="fa fa-2x fa-check-square-o"></i></span>
                                
                                <span class="reward-body">
                                  <span class="reward-title">Alimientación</span>
                                  <span class="reward-descrip">
                                      <strong>Descripción:</strong><br>
                                      Donaciones de 16 productos alimenticios <br> <br>

                                      <strong>Recompensa:</strong><br>
                                      Tu nombre aparecerá en la lista de agradecimiento que se pública en redes sociales. <br> 
                                      Te entregaremos una carta de agradecimiento personalizada al momento de retirar la donación.

                                  </span>
                                  
                                </span>
                              </span>
                            </label>
                          </li>
                          <li class="reward">
                            <label>
                              <input name="perks" type="radio" class="radioClass sr-only" value="0"  checked="checked/">
                              <span class="reward-media">
                                <span class="indicator"><i class="fa fa-2x fa-check-square-o"></i></span>
                                <span class="reward-amount"></span>
                                <span class="reward-body">
                                  <span class="reward-title" ">Contribuir sin recompensa</span>
                                  <span class="reward-descrip">
                                      <strong>Ningun Incentivo, solo Donación</strong>

                                  </span>
                                </span>
                              </span>
                            </label>
                            </li>
                          </ul>
                        </div> 
                                    <br>

                        
                        <h3><span style="color: #348fe2"> <strong> Detalle de donación</strong></span></h3><br>
                                    <div style="border: #D7DBDD 1px solid; padding: 1%">  
                                    
                                    <label class="control-label" for="tituloDonacion">Titulo de donación * :</label>
                                    <input class="form-control" type="text" id="tituloDonacion" name="tituloDonacion" placeholder="Escriba un título a la donacion. Ejemplo: Vestimenta para ancianos" data-parsley-required="true" />
                                    
                                    <label class="control-label " for="message">Telefono :</label>
                                    <input class="form-control" type="text" id="data-phone" data-parsley-type="number" data-parsley-required="true" placeholder="Escriba un número telefónico al cual se puede contactar para el retiro de la donación." />
                
                                    <label class="control-label" for="descripcionDonacion">Descripción de donación :</label>
                                    <textarea class="form-control" id="descripcionDonacion" name="descripcionDonacion" rows="4" data-parsley-required="true"   placeholder="Describa la donación que desea contribuir"></textarea>

                                    <label class="control-label" for="horarioRetiroDonacion">Descripción de los días y el horario del retiro de la donación :</label>
                                    <textarea class="form-control" id="horarioRetiroDonacion" name="horarioRetiroDonacion" rows="4"  data-parsley-required="true" placeholder="Describa los dias y el horario en el que se pueda realizar el retiro de la donacion"></textarea>
                                  
                                     <label class="control-label" for="direccionDonacion">Direccion del retiro de la donación * :</label>
                                    <input class="form-control" type="text" id="direccionDonacion" name="direccionDonacion" placeholder="Escriba la direccción del retiro de la donación." data-parsley-required="true" />
                                   

                                    


                                     
                                   </div>
                                  {!! $map['html']!!}
                                  <div id="directionsDiv"></div>
                                  <br><br>
                                    
                                    <div style="text-align: center;">
                                      <button type="submit" class="btn btn-primary">Donar a la campaña</button>
                                    </div>
                                  
                            </form>
                        
                   
                    <!-- end panel -->
                    </div>
                  </div>
                      
                      
                  </div>
                </div>
              </div>
           </div>
        </div>

       <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade show" data-click="scroll-top"><i class="fa fa-angle-up"></i></a> 


@endsection 

@push('scripts')
  {!! $map['js']!!}
  <script src="/assets/plugins/parsleyjs/dist/parsley.js"></script>
  <script src="/assets/plugins/highlight/highlight.min.js"></script>
  <script src="/assets/js/demo/render.highlight.js"></script>
  <script>
    $(document).ready(function() {
      Highlight.init();
    });
  </script>
@endpush


