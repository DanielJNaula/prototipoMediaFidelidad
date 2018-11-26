@extends('layouts.mainUsuarioLogueado')
 
@section('title', 'Mis Campañas') 

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
                      <h3><span style="color: #348fe2"> <strong> Mis Campañas</strong></span></h3>
                    <br>
                    <div class="panel-body pull-right">
                          <a type="button" href="/mis-campañas/crear-campaña-donacion-bienes"  class="btn btn-success m-r-5 m-b-5">Nueva campaña Donación</a>
                          <a type="button" href="/mis-campañas/crear-campaña-voluntariado" class="btn btn-primary m-r-5 m-b-5">Nueva campaña Voluntariado</a>        
                    </div>
                    </div>
                  </div>
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
                                            <th width="1%">Id</th>
                                            <th>Imagen campaña</th>
                                            <th>Nombre campaña</th>
                                            <th>Fecha límite de campaña</th>
                                            <th>Tipo Campaña</th>
                                            <th>Descripción</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr >
                                            <td width="1%" class="f-s-600 text-inverse">1</td>
                                            <td class="text-center">
                                              <img class="imagen-campaña" src="{{ asset('imagenes/imagenes_campañas/campañas_donaciones/donaciones_manos.jpg') }}" alt="">
                                            </td>
                                            <td>Ayuda a los Ancianos del Alberge San Juan de Dios</td>
                                            <td>20/12/2018</td>
                                            <td>Donación</td>
                                            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut hic animi magnam deserunt in perferendis accusamus obcaecati.</td>
                                            <td class="text-center">
                                              <a href="#"><i class="fa fa-2x fa-edit"></i></a>
                                              <a href="/mis-campañas/visualizar-campaña"><i class="fa fa-2x fa-eye"></i></a>
                                              <a href="#modal-alert"  data-toggle="modal"><i class="fa fa-2x fa-times-circle"></i></a>
                                              <a href="/mis-campañas/visualizar-donadores"><i class="fa fa-2x fa-heart"></i></a>
                                            </td>
                                        </tr>
                                        <tr >
                                            <td>2</td>
                                            <td class="text-center">
                                              <img class="imagen-campaña" src="{{ asset('imagenes/imagenes_campañas/campañas_donaciones/solidaridad.jpg') }}" alt="">
                                            </td>
                                            <td>Trident corazon de Dios</td>
                                            <td>20/01/2019</td>
                                            <td>Voluntariado</td>
                                            <td>Animi magnam deserunt in perferendis accusamus obcaecati.</td>
                                            <td class="text-center">
                                              <a href="#"><i class="fa fa-2x fa-edit"></i></a>
                                              <a href="/mis-campañas/visualizar-campaña-voluntariado"><i class="fa fa-2x fa-eye"></i></a>
                                              <a href="#modal-alert"  data-toggle="modal"><i class="fa fa-2x fa-times-circle"></i></a>
                                              <a href="/mis-campañas/visualizar-donadores"><i class="fa fa-2x fa-heart"></i></a>
                                            </td>
                                        </tr>
                                        <tr >
                                            <td>3</td>
                                            <td class="text-center">
                                              <img class="imagen-campaña" src="{{ asset('imagenes/imagenes_campañas/campañas_donaciones/Solidaridad_QR.jpg') }}" alt="">
                                            </td>
                                            <td> Cuidado para niños con discapacidad intelectual</td>
                                            <td>20/02/2019</td>
                                            <td>Donación</td>
                                            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo pariatur tempore, similique! Commodi ratione aliquam accusamus at consectetur!</td>
                                            <td class="text-center celda-acciones">
                                              <a href="#"><i class="fa fa-2x fa-edit"></i></a>
                                              <a href="/mis-campañas/visualizar-campaña"><i class="fa fa-2x fa-eye"></i></a>
                                              <a href="#modal-alert"  data-toggle="modal"><i class="fa fa-2x fa-times-circle"></i></a>
                                              <a href="/mis-campañas/visualizar-donadores"><i class="fa fa-2x fa-heart"></i></a>
                                            </td>
                                        </tr>
                                        <tr >
                                            <td>4</td>
                                            <td class="text-center">
                                              <img class="imagen-campaña" src="{{ asset('imagenes/imagenes_campañas/campañas_donaciones/principal-solidaria.jpg') }}" alt="">
                                            </td>
                                            <td>Donec mi quis volutpat ornare</td>
                                            <td>09/03/2019</td>
                                            <td>Voluntariado</td>
                                            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores, magnam distinctio provident eveniet cum labore alias numquam facere aut.</td>
                                            <td class="text-center">
                                              <a href="#"><i class="fa fa-2x fa-edit"></i></a>
                                              <a href="/mis-campañas/visualizar-campaña-voluntariado"><i class="fa fa-2x fa-eye"></i></a>
                                              <a href="#modal-alert"  data-toggle="modal"><i class="fa fa-2x fa-times-circle"></i></a>
                                              <a href="/mis-campañas/visualizar-donadores"><i class="fa fa-2x fa-heart"></i></a>
                                            </td>
                                        </tr>
                                        <tr >
                                            <td>5</td>
                                            <td class="text-center">
                                              <img class="imagen-campaña" src="{{ asset('imagenes/imagenes_campañas/campañas_voluntariado/voluntariado1.jpg') }}" alt="">
                                            </td>
                                            <td>Ayuda a los Ancianos del Alberge San Juan de Dios</td>
                                            <td>11/04/2019</td>
                                            <td>Donación</td>
                                            <td>Consectetur adipisicing elit. Nisi veniam numquam velit excepturi iusto.</td>
                                            <td class="text-center">
                                              <a href="#"><i class="fa fa-2x fa-edit"></i></a>
                                              <a href="/mis-campañas/visualizar-campaña"><i class="fa fa-2x fa-eye"></i></a>
                                              <a href="#modal-alert"  data-toggle="modal"><i class="fa fa-2x fa-times-circle"></i></a>
                                              <a href="/mis-campañas/visualizar-donadores"><i class="fa fa-2x fa-heart"></i></a>
                                            </td>
                                        </tr>
                                        <tr >
                                            <td>6</td>
                                            <td class="text-center">
                                              <img class="imagen-campaña" src="{{ asset('imagenes/imagenes_campañas/campañas_voluntariado/voluntariado2.jpg') }}" alt="">
                                            </td>
                                            <td>Trident corazon de Dios</td>
                                            <td>29/12/2018</td>
                                            <td>Voluntariado</td>
                                            <td>Dolor sit amet, consectetur adipisicing elit. Enim aut, sint deleniti, eligendi animi sit esse!</td>
                                            <td class="text-center">
                                              <a href="#"><i class="fa fa-2x fa-edit"></i></a>
                                              <a href="/mis-campañas/visualizar-campaña-voluntariado"><i class="fa fa-2x fa-eye"></i></a>
                                              <a href="#modal-alert"  data-toggle="modal"><i class="fa fa-2x fa-times-circle"></i></a>
                                              <a href="/mis-campañas/visualizar-donadores"><i class="fa fa-2x fa-heart"></i></a>
                                            </td>
                                        </tr>
                                        <tr >
                                            <td>7</td>
                                            <td class="text-center">
                                              <img class="imagen-campaña" src="{{ asset('imagenes/imagenes_campañas/campañas_voluntariado/voluntariado3.jpg') }}" alt="">
                                            </td>
                                            <td> Cuidado para niños con discapacidad intelectual</td>
                                            <td>14/01/2019</td>
                                            <td>Donación</td>
                                            <td>Sit amet, consectetur adipisicing elit. Modi necessitatibus sunt dolorem qui quis ratione debitis est expedita reiciendis similique.</td>
                                            <td class="text-center">
                                              <a href="#"><i class="fa fa-2x fa-edit"></i></a>
                                              <a href="/mis-campañas/visualizar-campaña"><i class="fa fa-2x fa-eye"></i></a>
                                              <a href="#modal-alert"  data-toggle="modal"><i class="fa fa-2x fa-times-circle"></i></a>
                                              <a href="/mis-campañas/visualizar-donadores"><i class="fa fa-2x fa-heart"></i></a>
                                            </td>
                                        </tr>
                                        <tr >
                                            <td>8</td>
                                            <td class="text-center">
                                              <img class="imagen-campaña" src="{{ asset('imagenes/imagenes_campañas/campañas_voluntariado/voluntariado4.jpg') }}" alt="">
                                            </td>
                                            <td>Donec mi quis volutpat ornare</td>
                                            <td>17/02/2018</td>
                                            <td>Voluntariado</td>
                                            <td>Psum dolor sit amet, consectetur adipisicing elit. Aspernatur ducimus veniam magnam beatae quae, nemo adipisci corporis doloremque nihil.</td>
                                            <td class="text-center">
                                              <a href="#"><i class="fa fa-2x fa-edit"></i></a>
                                              <a href="/mis-campañas/visualizar-campaña-voluntariado"><i class="fa fa-2x fa-eye"></i></a>
                                              <a href="#modal-alert"  data-toggle="modal"><i class="fa fa-2x fa-times-circle"></i></a>
                                              <a href="/mis-campañas/visualizar-donadores"><i class="fa fa-2x fa-heart"></i></a>
                                            </td>
                                        </tr>
                                       
                                    </tbody>
                                </table>
                                <!-- #modal-alert -->
                                        <div class="modal fade" id="modal-alert">
                                          <div class="modal-dialog">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h4 class="modal-title">Eliminar campaña</h4>
                                              </div>
                                              <div class="modal-body">
                                                <div class="alert alert-danger m-b-0">
                                                  <h4><i class="fa fa-info-circle"></i> Usted desea eliminar la siguiente campaña </h4>
                                                  <p >
                                                    <strong>Nombre Campaña:</strong> colaboracion a los ancianos del albergue San Juan de Dios <br>
                                                    <strong>codigo:</strong>1 <br>
                                                    <strong>imagen:</strong><br><img class="imagen-campaña" src="{{ asset('imagenes/imagenes_campañas/campañas_voluntariado/voluntariado4.jpg') }}" alt=""> <br>

                                                    <strong>Tipo campaña:</strong> Donacion de Bienes <br> 
                                                    <strong>Descripcion corta:</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis provident numquam, quo nemo ipsa error facere inventore itaque dolorem quos odio alias possimus atque delectus asperiores, impedit, culpa ipsum neque. <br>
                                                    
                                                  </p>
                                                </div>
                                              </div>
                                              <div class="modal-footer">
                                                <a href="javascript:;" class="btn btn-sm btn-white" data-dismiss="modal">Cerrar</a>
                                                <a href="javascript:;" class="btn btn-sm btn-danger" data-dismiss="modal">Eliminar campaña</a>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                    <!-- fin #modal-alert -->
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


