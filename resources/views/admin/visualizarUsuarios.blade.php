@extends('layouts.mainAdmin')
 
@section('title', 'Usuarios') 

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
                      <h2><span style="color: #348fe2"> <strong>Usuarios Unidos Somos Más</strong></span></h2>
                    <br>
                    
                    </div>
                  </div>
                      <!-- begin #content -->
    <div id="content" class="content">
      
     
      <!-- begin row -->
      <div class="row">

        <div class="col-md-2"></div>
          
          <!-- begin col-10 -->
          <div class="col-md-8">
              <!-- begin panel -->
                   
                        
                        
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table id="data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th width="1%">Id</th>
                                            <th>Usuario</th>
                                            <th>Calificación usuario</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr >
                                            <td class="text-center" width="1%" class="f-s-600 text-inverse">1</td>
                                            <td>Daniel Naula</td>
                                            <td><fieldset class="stars-fieldset"><span class="stars stars-30"> <span hidden="">30</span></span></fieldset></td>
                                            <td class="text-center ">
                                              <a href="/admin/visualizar-perfil-usuario"><i class="fa fa-2x fa-eye"></i></a>
                                              <a href="/admin/email-usuario"><i class="fa fa-2x fa-envelope"></i></a>
                                            </td>
                                        </tr>
                                        <tr >
                                            <td class="text-center">2</td>
                                            <td>Belen Guamán</td>
                                            <td><fieldset class="stars-fieldset"><span class="stars stars-30"> <span hidden="">30</span></span></fieldset></td>
                                            <td class="text-center ">
                                              <a href="/admin/visualizar-perfil-usuario"><i class="fa fa-2x fa-eye"></i></a>
                                              <a href="/admin/email-usuario"><i class="fa fa-2x fa-envelope"></i></a>
                                            </td>
                                        </tr>
                                        <tr >
                                            <td class="text-center">3</td>
                                            <td>Jose Toabanda</td>
                                            <td><fieldset class="stars-fieldset"><span class="stars stars-45"> <span hidden="">45</span></span></fieldset></td>
                                            <td class="text-center ">
                                              <a href="/admin/visualizar-perfil-usuario"><i class="fa fa-2x fa-eye"></i></a>
                                              <a href="/admin/email-usuario"><i class="fa fa-2x fa-envelope"></i></a>
                                            </td>
                                        </tr>
                                        <tr >
                                            <td class="text-center">4</td>
                                            <td>Luis Carrillo</td>
                                            <td><fieldset class="stars-fieldset"><span class="stars stars-35"> <span hidden="">35</span></span></fieldset></td>
                                            <td class="text-center ">
                                              <a href="/admin/visualizar-perfil-usuario"><i class="fa fa-2x fa-eye"></i></a>
                                              <a href="#"><i class="fa fa-2x fa-envelope"></i></a>
                                            </td>
                                        </tr>
                                        <tr >
                                            <td class="text-center">5</td>
                                            <td>Franklin Morocho</td>
                                            <td><fieldset class="stars-fieldset"><span class="stars stars-35"> <span hidden="">35</span></span></fieldset></td>
                                            <td class="text-center ">
                                              <a href="/admin/visualizar-perfil-usuario"><i class="fa fa-2x fa-eye"></i></a>
                                              <a href="/admin/email-usuario"><i class="fa fa-2x fa-envelope"></i></a>
                                            </td>
                                        </tr>
                                        <tr >
                                            <td class="text-center">6</td>
                                            <td>Moises Herrera</td>
                                            <td><fieldset class="stars-fieldset"><span class="stars stars-40"> <span hidden="">40</span></span></fieldset></td>
                                            <td class="text-center ">
                                              <a href="/admin/visualizar-perfil-usuario"><i class="fa fa-2x fa-eye"></i></a>
                                              <a href="/admin/email-usuario"><i class="fa fa-2x fa-envelope"></i></a>
                                            </td>
                                        </tr>
                                        <tr >
                                            <td class="text-center">7</td>
                                            <td>Simón Páez</td>
                                            <td><fieldset class="stars-fieldset"><span class="stars stars-20"> <span hidden="">20</span></span></fieldset></td>
                                            <td class="text-center ">
                                              <a href="/admin/visualizar-perfil-usuario"><i class="fa fa-2x fa-eye"></i></a>
                                              <a href="/admin/email-usuario"><i class="fa fa-2x fa-envelope"></i></a>
                                            </td>
                                        </tr>
                                        <tr >
                                            <td class="text-center">8</td>
                                            <td>Edison Naula</td>
                                            <td><fieldset class="stars-fieldset"><span class="stars stars-35"> <span hidden="">35</span></span></fieldset></td>
                                            <td class="text-center ">
                                              <a href="/admin/visualizar-perfil-usuario"><i class="fa fa-2x fa-eye"></i></a>
                                              <a href="/admin/email-usuario"><i class="fa fa-2x fa-envelope"></i></a>
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
                  
                    
                      
                     <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade show" data-click="scroll-top"><i class="fa fa-angle-up"></i></a> 
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
  <script src="{{ asset('js/ui-modal-notification.demo.min.js') }}"></script>
  
  
  <!-- ================== END PAGE LEVEL JS ================== -->
<script>
  
    $(document).ready(function() {
     
      TableManageColVis.init();
    });
  </script>
  <script>
    $(document).ready(function() {
      
      Notification.init();
    });
  </script>
@endpush


