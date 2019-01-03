@extends('layouts.mainUsuarioLogueado')
 
@section('title', 'Donadores campaña') 

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

                    <div class="col-md-12 text-center">
                      <h3><span style="color: #348fe2"> <strong>Ayuda a los albergados de San Juan Dios</strong></span></h3>
                      <h4><span style="color: #348fe2"> <strong>Donación de bienes</strong></span></h4>
                    <br>
                    
                  </div>

                  </div>
                  <!-- inicio fila donadores -->
                  
                  <div class="row">
                    <div class="col-md-1">
                      
                    </div>
                    <div class="col-md-9">
                      <ul class="nav nav-tabs nav-tabs-inverse nav-justified nav-justified-mobile" data-sortable-id="index-2">

                          <li class="active">
                            <a href="#donacionesRetiradas" data-toggle="tab">
                              <i class="fa fa-sticky-note-o m-r-5"></i>
                              <span >Donaciones retiradas</span>
                               <span class="hidden-xs">(4)</span> 
                            </a>
                          </li>
                          <li class="">
                            <a href="#donacionesPorRetirar" data-toggle="tab">
                              <i class="fa fa-sticky-note m-r-5"></i>
                              <span >Donaciones por retirar</span>
                              <span class="hidden-xs">(13)</span>
                            </a>
                          </li>
                          
                        </ul>
                        <!-- inicio Tabs -->
                        
                        <div class="tab-content" data-sortable-id="index-3">
                          <!--Inicio Donaciones Retiradas-->
                            
                            <div class="tab-pane fade active in" id="donacionesRetiradas">
                              <div style="text-align: right;">
                                
                                <a href="#" class="btn btn-info  m-r-5 m-b-5"><i class="fa fa fa-file-pdf-o"></i> Reporte donaciones retiradas</a>
                              </div><br>
                                
                              
                              <div class="table-responsive">
                                <table id="data-table" class="table table-striped table-bordered">
                                  <thead>
                                    <tr>
                                            <th width="1%">Id</th>
                                            <th>Donador</th>
                                            <th>Titulo donación</th>
                                            <th>Fecha de registro</th>
                                            <th>Acciones</th>

                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                            <td width="1%" class="f-s-600 text-inverse">1</td>
                                            <td>Maria Belén Guamán</td>
                                            <td>Amet, consectetur adipisicing elit. Aut hic animi magnam deserunt in perferendis accusamus obcaecati.</td>
                                            <td>01/12/2018</td>
                                            <td class="text-center">
                                              
                                              <a href="/mis-campañas/visualizar-donaciones/visualizar-detalle-donacion"><i class="fa fa-2x fa-eye"></i></a>
                                              <a href="/mis-campañas/visualizar-donaciones/calificar-donador"><i class="fa fa-2x fa-star"></i></a>
                                            </td>
                                            
                                    </tr>
                                    <tr>
                                            <td width="1%" class="f-s-600 text-inverse">2</td>
                                            <td>Maria Ines Guiñan</td>
                                            <td>Consectetur adipisicing elit. Aut hic animi magnam deserunt in perferendis accusamus obcaecati.</td>
                                            <td>25/11/2018</td>
                                            <td class="text-center">
                                              
                                              <a href="/mis-campañas/visualizar-donaciones/visualizar-detalle-donacion"><i class="fa fa-2x fa-eye"></i></a>
                                              <a href="/mis-campañas/visualizar-donaciones/calificar-donador"><i class="fa fa-2x fa-star"></i></a>
                                            </td>
                                            
                                    </tr>
                                    <tr>
                                            <td width="1%" class="f-s-600 text-inverse">3</td>
                                            <td>David Fabricio Corona</td>
                                            <td>Hic animi magnam deserunt in perferendis accusamus obcaecati.</td>
                                            <td>02/11/2018</td>
                                            <td class="text-center">
                                              
                                              <a href="/mis-campañas/visualizar-donaciones/visualizar-detalle-donacion"><i class="fa fa-2x fa-eye"></i></a>
                                              <a href="/mis-campañas/visualizar-donaciones/calificar-donador"><i class="fa fa-2x fa-star"></i></a>
                                            </td>
                                            
                                    </tr>
                                    <tr>
                                            <td width="1%" class="f-s-600 text-inverse">4</td>
                                            <td>Juan Dominguez</td>
                                            <td>Dolor sit amet, consectetur adipisicing elit. Aut hic animi magnam deserunt in perferendis accusamus obcaecati.</td>
                                            <td>24/11/2018</td>
                                            <td class="text-center">
                                              
                                              <a href="/mis-campañas/visualizar-donaciones/visualizar-detalle-donacion"><i class="fa fa-2x fa-eye"></i></a>
                                              <a href="/mis-campañas/visualizar-donaciones/calificar-donador"><i class="fa fa-2x fa-star"></i></a>
                                            </td>
                                            
                                    </tr>
                                    
                                  </tbody>
                                </table>
                              </div>
                            </div>
                            <!--FIN Donaciones Retiradas-->
                            <!--Inicio Donaciones por retirar-->
                              <div class="tab-pane fade" id="donacionesPorRetirar">
                                
                                  <div class="table-responsive">
                                    <div style="text-align: right;">
                                
                                <a href="/mis-campañas/visualizar-donaciones/visualizar-detalle-donacion" class="btn btn-success  m-r-5 m-b-5"><i class="fa fa fa-file-pdf-o"></i> Reporte donaciones por retirar</a>
                              </div><br>
                                  <table id="data-table1" class="table table-striped table-bordered">
                                  <thead>
                                    <tr>
                                            <th width="1%">Id</th>
                                            <th>Donador</th>
                                            <th>Titulo donación</th>
                                            <th>Fecha de registro</th>
                                            <th>Acciones</th>

                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                            <td width="1%" class="f-s-600 text-inverse">24</td>
                                            <td>Marta Carolina Paez</td>
                                            <td>Amet, consectetur adipisicing elit. Aut hic animi magnam deserunt in perferendis accusamus obcaecati.</td>
                                            <td>2018/11/27</td>
                                            <td class="text-center">
                                              <a href="/mis-campañas/visualizar-donaciones/editar-estado-donacion"><i class="fa fa-2x fa-edit"></i></a>
                                              <a href="/mis-campañas/visualizar-donaciones/visualizar-detalle-donacion"><i class="fa fa-2x fa-eye"></i></a>
                                              <a href="/mis-campañas/visualizar-donaciones/calificar-donador"><i class="fa fa-2x fa-star"></i></a>
                                            </td>
                                            
                                    </tr>
                                    <tr>
                                            <td width="1%" class="f-s-600 text-inverse">20</td>
                                            <td>Lizeth Diana Manobanda</td>
                                            <td>Consectetur adipisicing elit. Aut hic animi magnam deserunt in perferendis accusamus obcaecati.</td>
                                            <td>2018/11/29</td>
                                            <td class="text-center">
                                              <a href="/mis-campañas/visualizar-donaciones/editar-estado-donacion"><i class="fa fa-2x fa-edit"></i></a>
                                              <a href="/mis-campañas/visualizar-donaciones/visualizar-detalle-donacion"><i class="fa fa-2x fa-eye"></i></a>
                                              <a href="/mis-campañas/visualizar-donaciones/calificar-donador"><i class="fa fa-2x fa-star"></i></a>
                                            </td>
                                            
                                    </tr>
                                    <tr>
                                            <td width="1%" class="f-s-600 text-inverse">50</td>
                                            <td>Armando Jesús Tapia</td>
                                            <td>Hic animi magnam deserunt in perferendis accusamus obcaecati.</td>
                                            <td>2018/11/16</td>
                                            <td class="text-center">
                                              <a href="/mis-campañas/visualizar-donaciones/editar-estado-donacion"><i class="fa fa-2x fa-edit"></i></a>
                                              <a href="/mis-campañas/visualizar-donaciones/visualizar-detalle-donacion"><i class="fa fa-2x fa-eye"></i></a>
                                              <a href="/mis-campañas/visualizar-donaciones/calificar-donador"><i class="fa fa-2x fa-star"></i></a>
                                            </td>
                                            
                                    </tr>
                                    <tr>
                                            <td width="1%" class="f-s-600 text-inverse">60</td>
                                            <td>Adrian Edison Toaquiza</td>
                                            <td>Dolor sit amet, consectetur adipisicing elit. Aut hic animi magnam deserunt in perferendis accusamus obcaecati.</td>
                                            <td>2018/11/14</td>
                                            <td class="text-center">
                                              <a href="/mis-campañas/visualizar-donaciones/editar-estado-donacion"><i class="fa fa-2x fa-edit"></i></a>
                                              <a href="/mis-campañas/visualizar-donaciones/visualizar-detalle-donacion"><i class="fa fa-2x fa-eye"></i></a>
                                              <a href="/mis-campañas/visualizar-donaciones/calificar-donador"><i class="fa fa-2x fa-star"></i></a>
                                            </td>
                                            
                                    </tr>
                                    <tr>
                                            <td width="1%" class="f-s-600 text-inverse">24</td>
                                            <td>Marta Carolina Paez</td>
                                            <td>Amet, consectetur adipisicing elit. Aut hic animi magnam deserunt in perferendis accusamus obcaecati.</td>
                                            <td>2018/11/27</td>
                                            <td class="text-center">
                                              <a href="/mis-campañas/visualizar-donaciones/editar-estado-donacion"><i class="fa fa-2x fa-edit"></i></a>
                                              <a href="/mis-campañas/visualizar-donaciones/visualizar-detalle-donacion"><i class="fa fa-2x fa-eye"></i></a>
                                              <a href="/mis-campañas/visualizar-donaciones/calificar-donador"><i class="fa fa-2x fa-star"></i></a>
                                            </td>
                                            
                                    </tr>
                                    <tr>
                                            <td width="1%" class="f-s-600 text-inverse">20</td>
                                            <td>Lizeth Diana Manobanda</td>
                                            <td>Consectetur adipisicing elit. Aut hic animi magnam deserunt in perferendis accusamus obcaecati.</td>
                                            <td>2018/11/29</td>
                                            <td class="text-center">
                                              <a href="/mis-campañas/visualizar-donaciones/editar-estado-donacion"><i class="fa fa-2x fa-edit"></i></a>
                                              <a href="/mis-campañas/visualizar-donaciones/visualizar-detalle-donacion"><i class="fa fa-2x fa-eye"></i></a>
                                              <a href="/mis-campañas/visualizar-donaciones/calificar-donador"><i class="fa fa-2x fa-star"></i></a>
                                            </td>
                                            
                                    </tr>
                                    <tr>
                                            <td width="1%" class="f-s-600 text-inverse">50</td>
                                            <td>Armando Jesús Tapia</td>
                                            <td>Hic animi magnam deserunt in perferendis accusamus obcaecati.</td>
                                            <td>2018/11/16</td>
                                            <td class="text-center">
                                              <a href="/mis-campañas/visualizar-donaciones/editar-estado-donacion"><i class="fa fa-2x fa-edit"></i></a>
                                              <a href="/mis-campañas/visualizar-donaciones/visualizar-detalle-donacion"><i class="fa fa-2x fa-eye"></i></a>
                                              <a href="/mis-campañas/visualizar-donaciones/calificar-donador"><i class="fa fa-2x fa-star"></i></a>
                                            </td>
                                            
                                    </tr>
                                    <tr>
                                            <td width="1%" class="f-s-600 text-inverse">60</td>
                                            <td>Adrian Edison Toaquiza</td>
                                            <td>Dolor sit amet, consectetur adipisicing elit. Aut hic animi magnam deserunt in perferendis accusamus obcaecati.</td>
                                            <td>2018/11/14</td>
                                            <td class="text-center">
                                              <a href="/mis-campañas/visualizar-donaciones/editar-estado-donacion"><i class="fa fa-2x fa-edit"></i></a>
                                              <a href="/mis-campañas/visualizar-donaciones/visualizar-detalle-donacion"><i class="fa fa-2x fa-eye"></i></a>
                                              <a href="/mis-campañas/visualizar-donaciones/calificar-donador"><i class="fa fa-2x fa-star"></i></a>
                                            </td>
                                            
                                    </tr>
                                    <tr>
                                            <td width="1%" class="f-s-600 text-inverse">60</td>
                                            <td>Adrian Edison Toaquiza</td>
                                            <td>Dolor sit amet, consectetur adipisicing elit. Aut hic animi magnam deserunt in perferendis accusamus obcaecati.</td>
                                            <td>2018/11/14</td>
                                            <td class="text-center">
                                              <a href="/mis-campañas/visualizar-donaciones/editar-estado-donacion"><i class="fa fa-2x fa-edit"></i></a>
                                              <a href="/mis-campañas/visualizar-donaciones/visualizar-detalle-donacion"><i class="fa fa-2x fa-eye"></i></a>
                                              <a href="/mis-campañas/visualizar-donaciones/calificar-donador"><i class="fa fa-2x fa-star"></i></a>
                                            </td>
                                            
                                    </tr>
                                    <tr>
                                            <td width="1%" class="f-s-600 text-inverse">24</td>
                                            <td>Marta Carolina Paez</td>
                                            <td>Amet, consectetur adipisicing elit. Aut hic animi magnam deserunt in perferendis accusamus obcaecati.</td>
                                            <td>2018/11/27</td>
                                            <td class="text-center">
                                              <a href="/mis-campañas/visualizar-donaciones/editar-estado-donacion"><i class="fa fa-2x fa-edit"></i></a>
                                              <a href="/mis-campañas/visualizar-donaciones/visualizar-detalle-donacion"><i class="fa fa-2x fa-eye"></i></a>
                                              <a href="/mis-campañas/visualizar-donaciones/calificar-donador"><i class="fa fa-2x fa-star"></i></a>
                                            </td>
                                            
                                    </tr>
                                    <tr>
                                            <td width="1%" class="f-s-600 text-inverse">20</td>
                                            <td>Lizeth Diana Manobanda</td>
                                            <td >Consectetur adipisicing elit. Aut hic animi magnam deserunt in perferendis accusamus obcaecati.</td>
                                            <td>2018/11/29</td>
                                            <td class="text-center celda-acciones">
                                              <a href="/mis-campañas/visualizar-donaciones/editar-estado-donacion"><i class="fa fa-2x fa-edit"></i></a>
                                              <a href="/mis-campañas/visualizar-donaciones/visualizar-detalle-donacion"><i class="fa fa-2x fa-eye"></i></a>
                                              <a href="/mis-campañas/visualizar-donaciones/calificar-donador"><i class="fa fa-2x fa-star"></i></a>
                                            </td>
                                            
                                    </tr>
                                    <tr>
                                            <td width="1%" class="f-s-600 text-inverse">50</td>
                                            <td>Armando Jesús Tapia</td>
                                            <td>Hic animi magnam deserunt in perferendis accusamus obcaecati.</td>
                                            <td>2018/11/16</td>
                                            <td class="text-center">
                                              <a href="/mis-campañas/visualizar-donaciones/editar-estado-donacion"><i class="fa fa-2x fa-edit"></i></a>
                                              <a href="/mis-campañas/visualizar-donaciones/visualizar-detalle-donacion"><i class="fa fa-2x fa-eye"></i></a>
                                              <a href="/mis-campañas/visualizar-donaciones/calificar-donador"><i class="fa fa-2x fa-star"></i></a>
                                            </td>
                                            
                                    </tr>
                                    <tr>
                                            <td width="1%" class="f-s-600 text-inverse">60</td>
                                            <td>Adrian Edison Toaquiza</td>
                                            <td>Dolor sit amet, consectetur adipisicing elit. Aut hic animi magnam deserunt in perferendis accusamus obcaecati.</td>
                                            <td>2018/11/14</td>
                                            <td class="text-center">
                                              <a href="/mis-campañas/visualizar-donaciones/editar-estado-donacion"><i class="fa fa-2x fa-edit"></i></a>
                                              <a href="/mis-campañas/visualizar-donaciones/visualizar-detalle-donacion"><i class="fa fa-2x fa-eye"></i></a>
                                              <a href="/mis-campañas/visualizar-donaciones/calificar-donador"><i class="fa fa-2x fa-star"></i></a>
                                            </td>
                                            
                                    </tr>
                                  </tbody>
                                </table>
                                </div>
                                
                              </div>
                              <!--FIN donaciones por retirar-->

                        </div>
                        <!-- final Tabs -->
                        
                    </div>
                  </div>
                   <!-- final fila donadores -->
                </div>
              </div>
           </div>
           
        </div>

       <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade show" data-click="scroll-top"><i class="fa fa-angle-up"></i></a> 


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
      TableDonacionesPorRetirar.init();
    });
  </script>
@endpush


