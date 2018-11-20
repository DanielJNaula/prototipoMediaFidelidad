@extends('layouts.main')
 
@section('title', 'Detalle campaña') 

@section('start_css')
  @parent
  
  <link href="{{ asset('plugins/DataTablesv2/datatables.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/style-after.css') }}" rel="stylesheet" />
  
  

  
@endsection
 


@section('contenido') 
<br><br><br><br>       
        <div class="row">
           <div class="container">
              <div class="col-md-12">
                 <div class="panel-body">
                  
                      <div class="row">
                        <div class="col-md-12">
                          <h3><span style="color: #348fe2"> <strong> Mis Comentarios</strong></span></h3>
                            <br>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-2">
                          
                        </div>
                        <!-- Inicio Tabla -->
                        <div class="col-md-8">
                        <table id="data-table1" class="table table-striped table-bordered" width="100%">
                                   
                                    <thead>
                                      <th>Comentario</th>
                                      <th>Acciones</th>
                                      
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>
                                            <p >
                                              <strong>Nombre Campaña:</strong> Ayuda a los ancianos del albergue San Juan de Dios <br>
                                              <strong>Comentario:</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et minus qui sunt autem temporibus dolorem veniam. <br>

                                              <strong>Calificacion:</strong> <span class="stars1 stars-50"></span> <br> 
                                              <strong>Recomienda Donar en la campaña:</strong> Si <br>
                                              <strong>Fecha:</strong> 00/00/0000  <strong>Hora:</strong>00:00
                                            </p>

                                        </td>
                                        <td class="text-center">
                                          <a href=""><i class="fa fa-2x fa-times-circle"></i></a>
                                        </td>
                                        
                                      </tr>
                                      <tr>
                                        <td>
                                            <p >
                                              <strong>Nombre Campaña:</strong> todo a los ancianos del albergue San Juan de Dios <br>
                                              <strong>Comentario:</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et minus qui sunt autem temporibus dolorem veniam. <br>

                                              <strong>Calificacion:</strong> <span class="stars1 stars-30"></span> <br> 
                                              <strong>Recomienda Donar en la campaña:</strong> Si <br>
                                              <strong>Fecha:</strong> 00/00/0000  <strong>Hora:</strong>00:00
                                            </p>

                                        </td>
                                        <td class="text-center">
                                          <a href=""><i class="fa fa-2x fa-times-circle"></i></a>
                                        </td>
                                        
                                      </tr>
                                      <tr>
                                        <td>
                                            <p >
                                              <strong>Nombre Campaña:</strong> colaboracion a los ancianos del albergue San Juan de Dios <br>
                                              <strong>Comentario:</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et minus qui sunt autem temporibus dolorem veniam. <br>

                                              <strong>Calificacion:</strong> <span class="stars1 stars-40"></span> <br> 
                                              <strong>Recomienda Donar en la campaña:</strong> Si <br>
                                              <strong>Fecha:</strong> 00/00/0000  <strong>Hora:</strong>00:00
                                            </p>

                                        </td>
                                        <td class="text-center">
                                          <a href=""><i class="fa fa-2x fa-times-circle"></i></a>
                                        </td>
                                        
                                      </tr>
                                      <tr>
                                        <td>
                                            <p >
                                              <strong>Nombre Campaña:</strong> cuidado a los ancianos del albergue San Juan de Dios <br>
                                              <strong>Comentario:</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et minus qui sunt autem temporibus dolorem veniam. <br>

                                              <strong>Calificacion:</strong> <span class="stars1 stars-35"></span> <br> 
                                              <strong>Recomienda Donar en la campaña:</strong> Si <br>
                                              <strong>Fecha:</strong> 00/00/0000  <strong>Hora:</strong>00:00
                                            </p>

                                        </td>
                                        <td class="text-center">
                                          <a href=""><i class="fa fa-2x fa-times-circle"></i></a>
                                        </td>
                                        
                                      </tr>
                                    </tbody>
                                  </table>

                            </div>                        
                        <!-- Final Tabla -->

                    </div>
                </div>
              </div>
           </div>
        </div>

       


@endsection


@section('end_js')
  @parent


  <!-- ================== BEGIN PAGE LEVEL JS ================== -->
  <script src="{{ asset('plugins/DataTablesv2/datatables.js') }}"></script>
   <script src="{{ asset('js/table-manage-responsive.demo.js') }}"></script>
  <!-- ================== END PAGE LEVEL JS ================== -->

@endsection

@section('init_scripts')

  <script>

      $(document).ready(function() {
          TablaComentarios.init();
          
      })

</script>




@endsection


