@extends('layouts.mainUsuarioLogueado')
 
@section('title', 'Mis Donaciones') 

@push('css')
  
  <link href="{{ asset('css/style-responsive.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('plugins/DataTables/css/data-table.css') }}" rel="stylesheet" />
  

@endpush


@section('contenido') 
<br><br><br><br>       
        <div class="row">
           <div class="container">
              <div class="col-md-12">
                 <div class="panel-body">

                  <div class="row" >
                   

                    

                    <div class="col-md-12">
                      <h3><span style="color: #348fe2"> <strong> Mis Donaciones</strong></span></h3>
                    <br>
                      <!-- begin #content -->
    <div id="content" class="content">
      
     
      <!-- begin row -->
      <div class="row">
          
          <!-- begin col-10 -->
          <div class="col-md-12">
              <!-- begin panel -->
                   
                        
                        
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table id="data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Código</th>
                                            <th>Código campaña</th>
                                            <th>Nombre campaña</th>
                                            <th>Tipo campaña</th>
                                            <th>Donación</th>
                                            <th>Estado</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr >
                                            <td>1</td>
                                            <td>2</td>
                                            <td>Ayuda a los Ancianos del Alberge San Juan de Dios</td>
                                            <td>Donación</td>
                                            <td>Vestimenta para ancianos</td>
                                            <td>Retirado</td>
                                            <td class="text-center">
                                              <a href="/visualizar-mis-donaciones/calificar-campaña"><i class="fa fa-2x fa-star"></i></a>
                                              <a href="/visualizar-mis-donaciones/detalle-donacion"><i class="fa fa-2x fa-eye"></i></a>
                                            </td>
                                        </tr>
                                        <tr >
                                            <td>2</td>
                                            <td>9</td>
                                            <td>Trident corazon de Dios</td>
                                            <td>Voluntariado</td>
                                            <td>Voluntario</td>
                                            <td>Pendiente</td>
                                            <td class="text-center">
                                              <a href="/visualizar-mis-donaciones/calificar-campaña"><i class="fa fa-2x fa-star"></i></a>
                                              <a href="/visualizar-mis-donaciones/detalle-donacion"><i class="fa fa-2x fa-eye"></i></a>
                                            </td>
                                        </tr>
                                        <tr >
                                            <td>3</td>
                                            <td>2</td>
                                            <td> Cuidado para niños con discapacidad intelectual</td>
                                            <td>Voluntariado</td>
                                            <td>Voluntario</td>
                                            <td>Aceptado</td>
                                            <td class="text-center">
                                              <a href="/visualizar-mis-donaciones/calificar-campaña"><i class="fa fa-2x fa-star"></i></a>
                                              <a href="/visualizar-mis-donaciones/detalle-donacion"><i class="fa fa-2x fa-eye"></i></a>
                                            </td>
                                        </tr>
                                        <tr >
                                            <td>4</td>
                                            <td>2</td>
                                            <td>Donec mi quis volutpat ornare</td>
                                            <td>Donación</td>
                                            <td>Alimentos para los albergados</td>
                                            <td>Por retirado</td>
                                            <td class="text-center">
                                              <a href="/visualizar-mis-donaciones/calificar-campaña"><i class="fa fa-2x fa-star"></i></a>
                                              <a href="/visualizar-mis-donaciones/detalle-donacion"><i class="fa fa-2x fa-eye"></i></a>
                                            </td>
                                        </tr>
                                        <tr >
                                            <td>5</td>
                                            <td>2</td>
                                            <td>Ayuda a los Ancianos del Alberge San Juan de Dios</td>
                                            <td>Donación</td>
                                            <td>Vestimenta para ancianos</td>
                                            <td>Retirado</td>
                                            <td class="text-center">
                                              <a href="/visualizar-mis-donaciones/calificar-campaña"><i class="fa fa-2x fa-star"></i></a>
                                              <a href="/visualizar-mis-donaciones/detalle-donacion"><i class="fa fa-2x fa-eye"></i></a>
                                            </td>
                                        </tr>
                                        <tr >
                                            <td>6</td>
                                            <td>9</td>
                                            <td>Trident corazon de Dios</td>
                                            <td>Voluntariado</td>
                                            <td>Voluntario</td>
                                            <td>Pendiente</td>
                                            <td class="text-center">
                                              <a href="/visualizar-mis-donaciones/calificar-campaña"><i class="fa fa-2x fa-star"></i></a>
                                              <a href="/visualizar-mis-donaciones/detalle-donacion"><i class="fa fa-2x fa-eye"></i></a>
                                            </td>
                                        </tr>
                                        <tr >
                                            <td>7</td>
                                            <td>2</td>
                                            <td> Cuidado para niños con discapacidad intelectual</td>
                                            <td>Voluntariado</td>
                                            <td>Voluntario</td>
                                            <td>Aceptado</td>
                                            <td class="text-center">
                                              <a href="/visualizar-mis-donaciones/calificar-campaña"><i class="fa fa-2x fa-star"></i></a>
                                              <a href="/visualizar-mis-donaciones/detalle-donacion"><i class="fa fa-2x fa-eye"></i></a>
                                            </td>
                                        </tr>
                                        <tr >
                                            <td>8</td>
                                            <td>2</td>
                                            <td>Donec mi quis volutpat ornare</td>
                                            <td>Donación</td>
                                            <td>Alimentos para los albergados</td>
                                            <td>Por retirado</td>
                                            <td class="text-center">
                                              <a href="/visualizar-mis-donaciones/calificar-campaña"><i class="fa fa-2x fa-star"></i></a>
                                              <a href="/visualizar-mis-donaciones/detalle-donacion"><i class="fa fa-2x fa-eye"></i></a>
                                            </td>
                                        </tr>

                                        <tr >
                                            <td>9</td>
                                            <td>2</td>
                                            <td>Ayuda a los Ancianos del Alberge San Juan de Dios</td>
                                            <td>Donación</td>
                                            <td>Vestimenta para ancianos</td>
                                            <td>Retirado</td>
                                            <td class="text-center">
                                              <a href="/visualizar-mis-donaciones/calificar-campaña"><i class="fa fa-2x fa-star"></i></a>
                                              <a href="/visualizar-mis-donaciones/detalle-donacion"><i class="fa fa-2x fa-eye"></i></a>
                                            </td>
                                        </tr>
                                        <tr >
                                            <td>10</td>
                                            <td>9</td>
                                            <td>Trident corazon de Dios</td>
                                            <td>Voluntariado</td>
                                            <td>Voluntario</td>
                                            <td>Pendiente</td>
                                            <td>
                                              <a href="/visualizar-mis-donaciones/calificar-campaña"><i class="fa fa-2x fa-star"></i></a>
                                              <a href="/visualizar-mis-donaciones/detalle-donacion"><i class="fa fa-2x fa-eye"></i></a>
                                            </td>
                                        </tr>
                                        <tr >
                                            <td>11</td>
                                            <td>2</td>
                                            <td> Cuidado para niños con discapacidad intelectual</td>
                                            <td>Voluntariado</td>
                                            <td>Voluntario</td>
                                            <td>Aceptado</td>
                                            <td class="text-center">
                                              <a href="/visualizar-mis-donaciones/calificar-campaña"><i class="fa fa-2x fa-star"></i></a>
                                              <a href="/visualizar-mis-donaciones/detalle-donacion"><i class="fa fa-2x fa-eye"></i></a>
                                            </td>
                                        </tr>
                                        <tr >
                                            <td>12</td>
                                            <td>2</td>
                                            <td>Donec mi quis volutpat ornare</td>
                                            <td>Donación</td>
                                            <td>Alimentos para los albergados</td>
                                            <td>Por retirado</td>
                                            <td class="text-center">
                                              <a href="/visualizar-mis-donaciones/calificar-campaña"><i class="fa fa-2x fa-star"></i></a>
                                              <a href="/visualizar-mis-donaciones/detalle-donacion"><i class="fa fa-2x fa-eye"></i></a>
                                            </td>
                                        </tr>
                                       
                                       
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    
                    <!-- end panel -->
                </div>
                <!-- end col-12 -->
            </div>
            <!-- end row -->
    </div>
    <!-- end #content -->
                  
                    </div>
                  </div>
                      
                      
                  </div>
                </div>
              </div>
           </div>
        </div>

       


@endsection 

@push('scripts')


  <!-- ================== BEGIN PAGE LEVEL JS ================== -->


  
  
 
  <script src="{{ asset('plugins/DataTables/js/jquery.dataTables.js') }}"></script>
  <script src="{{ asset('plugins/DataTables/js/dataTables.colVis.js') }}"></script>
  <script src="{{ asset('js/table-manage-colvis.demo.min.js') }}"></script>
  
  
  
  <!-- ================== END PAGE LEVEL JS ================== -->
<script>
  
    $(document).ready(function() {
     
      TableManageColVis.init();
    });
  </script>
@endpush


