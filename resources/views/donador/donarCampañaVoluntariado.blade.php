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
                                    <span class="reward-title">Voluntario para cuidar ancianos</span>
                                    <span class="reward-descrip">

                                      <strong>Descripción:</strong><br>
                                     La persona que desea realizar este voluntariado debe contar con disposicion de 2 horas diarias de lunes a viernes durente 2 semanas . <br><br>

                                      <strong>Recompensa:</strong><br>
                                      Tu nombre aparecerá en la lista de agradecimiento que se pública en redes sociales y ademas obtendras una carta de agradecimiento por el director del albergue.
                                      
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
                                      <strong>Ningun Incentivo, solo realizar Voluntariado</strong>

                                  </span>
                                </span>
                              </span>
                            </label>
                            </li>
                          </ul>
                        </div> 
                                    <br>
                        <h3><span style="color: #348fe2"> <strong> Detalle de voluntariado</strong></span></h3><br>
                                    <div style="border: #D7DBDD 1px solid; padding: 1%">  
                                    
                                    <label class="control-label" for="apellidosDonador">Apellidos del voluntario* :</label>
                                    <input class="form-control" type="text" id="apellidosDonador" name="apellidosDonador" placeholder="Escriba los apellidos del voluntario" data-parsley-required="true" />

                                    <label class="control-label" for="nombresDonador">Nombres del voluntario* :</label>
                                    <input class="form-control" type="text" id="nombresDonador" name="nombresDonador" placeholder="Escriba los nombres del voluntario" data-parsley-required="true" />
                                    
                                    <label class="control-label " for="telefono">Telefono *:</label>
                                    <input class="form-control" type="text" id="telefono" name="telefono" data-parsley-type="number" data-parsley-required="true" placeholder="Escriba su número telefónico al cual se puede contactar para el voluntariado." />

                                    <label class="control-label " for="telefonoReferencia">Telefono de referencia*:</label>
                                    <input class="form-control" type="text" id="telefonoReferencia" name="telefonoReferencia" data-parsley-type="number" data-parsley-required="true" placeholder="Escriba un número telefónico al cual se puede contactar para el voluntariado." />
                
                                    <label class="control-label" for="email">Email * :</label>
                                    <input class="form-control" type="text" id="email" name="email" data-parsley-type="email" placeholder="Escriba su correo electrónico al cual se lo puede contactar" data-parsley-required="true" />
                                   

                                    


                                    
                                   </div>
                                  
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

       


@endsection 

@push('scripts')
 
  <script src="/assets/plugins/parsleyjs/dist/parsley.js"></script>
  <script src="/assets/plugins/highlight/highlight.min.js"></script>
  <script src="/assets/js/demo/render.highlight.js"></script>
  <script>
    $(document).ready(function() {
      Highlight.init();
    });
  </script>
@endpush


