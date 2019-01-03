@extends('layouts.mainUsuarioLogueado')
 
@section('title', 'Mi perfil') 

@section('start_css')
  @parent
  
  <link href="{{ asset('plugins/jasny-bootstrap/css/jasny-bootstrap.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('plugins/parsley/src/parsley.css') }}" rel="stylesheet" />
  
  

  
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
                          
                          <li class="active"><a href="#">Editar mi Perfil</a></li>
                        </ol>
                      </div>
                    <br>
                  </div>
                      <div class="row">
                        <form class="form-horizontal form-bordered" data-parsley-validate="true" name="demo-form">
                        <!-- inicio col 1 -->
                        <div class="col-md-1" >
                            

                          </div>
                        <!-- final col 1 -->
                        <!-- inicio col 3 -->
                        <div class="col-md-6" >
                              <div class="visible-sm visible-xs">
                                <!-- inicio Imagen -->
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
                                                  
                                              </div><br>
                            <!-- fin imagen -->
                              </div>
                              <label class="control-label" for="tituloDonacion">Apellidos :</label>       
                              <input class="form-control" type="text" id="apellidosUsuarios" name="apellidosUsuarios" placeholder="Escriba sus apellidos" data-parsley-required="true" />

                              <label class="control-label" for="tituloDonacion">Nombres :</label>       
                              <input class="form-control" type="text" id="nombreUsuarios" name="nombreUsuarios" placeholder="Escriba sus nombres" data-parsley-required="true" />

                              <label class="control-label" for="tituloDonacion">Correo electrónico :</label>       
                              <input class="form-control" type="text" id="emailUsuario" name="emailUsuario" placeholder="Escriba su correo electronico" data-parsley-type="email"  />

                              <label class="control-label" for="tituloDonacion">Dirección :</label>       
                              <input class="form-control" type="text" id="direccionUsuario" name="direccionUsuario" placeholder="Escriba su dirección" data-parsley-required="true" />
                              
                              <label class="control-label" for="informacioPersonalUsuario">Información personal :</label>
                              <textarea class="form-control" id="informacioPersonalUsuario" name="informacioPersonalUsuario" rows="4"  data-parsley-required="true" placeholder="Describa su información personal"></textarea>

                              <label class="control-label" for="interesUsuario">Interes :</label>
                              <textarea class="form-control" id="interesUsuario" name="interesUsuario" rows="4"  data-parsley-required="true" placeholder="Describa el interes que encuentra  en la campañas de ayuda social"></textarea>

                              <label class="control-label" for="habilidadesUsuario">Habilidades :</label>
                              <textarea class="form-control" id="habilidadesUsuario" name="habilidadesUsuario" rows="4"  data-parsley-required="true" placeholder="Describa sus habilidades para relacionarlo con campañas de ayuda social"></textarea>


                              <br><br>
                              <div align="center"><button type="submit" class="btn btn-primary">Guardar Cambios</button></div>
                          </div>
                        <!-- final col 3 -->

                        <!-- inicio col 8 -->
                          <div class="col-md-3 hidden-sm hidden-xs">
                            <!-- inicio Imagen -->
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
                              
                          
                          </div>

                          
                        <!-- final col 8 -->

                        </form>
                          
                        </div>
                      </div>
                      
                </div>
              </div>
           </div>
        

   <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade show" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>    


@endsection


@section('end_js')
  @parent
  
  
  <script src="{{ asset('plugins/parsley/dist/parsley.js') }}"></script>
  <script src="{{ asset('js/jasny-bootstrap.js') }}"></script>
  <script src="{{ asset('plugins/holderjs/js/holder.js') }}"></script>
  <script src="{{ asset('plugins/parsleyjs/dist/parsley.js') }}"></script>
  <script src="{{ asset('plugins/highlight/highlight.min.js') }}"></script>
  <script src="{{ asset('js/demo/render.highlight.js') }}"></script>
  


@endsection

@section('init_scripts')

  <script>

      $(document).ready(function() {
          
          Gallery.init();
      })

</script>




@endsection


