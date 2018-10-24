@extends('layouts.main')

@section('title', 'Homepage')



@section('start_css')
  @parent
  <link href="plugins/nvd3/nv.d3.min.css" rel="stylesheet" />


@endsection

@section('start_js')
  @parent
@endsection

@section('contenido')

        <!-- begin #about -->
        <div id="about" class="img-responsive background-home content work row-m-t-3 p-t-40" data-scrollview="true">

            <!-- begin container -->
            <div class="container p-t-25" data-animation="true" data-animation-type="fadeInDown">

                <div class="col-md-12 p-t-25 home_main_web_title_image">
                    <div class="panel-body">
                        <div class="col-12 text-center text-white"><h3>NADA LIBERA NUESTRA GRANDEZA COMO EL DESEO DE AYUDAR Y DE SERVIR</h3>
                            <p style="margin-top: 10px" class="text-white text-center">¿Deseas ayudar a los mas necesitados, pero no cuentas con dinero? Tranquilo existen múltiples alternativas para ayudar, como donaciones en bienes o voluntariado.</p>
                        </div>

                    <br>
                    </div>
                </div>

                        <div class="panel-body text-center home_main_web_title">

                                  <div class="row">
                                      <div class="col-xs-8 col-xs-offset-2">
                                          <form method="GET" action="#" id="searchForm" class="search-home input-group">
                                              
                                              <input id="buscar_general" type="text" class="form-control" name="parametro" placeholder="Busca los proyectos en los que deseas ayudar con contribucion de bienes o servicio">
                                              <span class="input-group-btn">
                                                  <button id="btn_buscar" class="btn btn-default" type="submit">
                                                     <text class="hidden-xs">Buscar</text><i class="fa fa-2x fa-search visible-xs"></i>
                                                  </button>
                                              </span> 
                                          </form><!-- end form -->
                                      </div><!-- end col-xs-8 -->
                                  </div><!-- end row -->

                          <p style="margin-top: 10px" class="text-white">Ejemplo: Voluntariado, donación.</p>
                        </div>

            </div>
        </div>

        <!-- begin #team -->
        <div id="team" class="content team" data-scrollview="true">

            <div class="container" data-animation="true" data-animation-type="fadeInDown">
                <div class="row">
                    <div class="col-12 text-center home_iconos_title"><h2><span style="color: #348fe2">Proyectos Destacados</span></h2></div>
                    

                </div>

                
            </div>
        </div>       
        
        <div class="row">
          <div class="container">
            <div class="col-md-12">
              <h2>  <span style="color: #348fe2"><strong> Donaciones de bienes</strong></span></h2><hr />
              <div class="col-md-4">
                <div class="card">
                  <div class="card-header">
                      <img src="{{ asset('imagenes/imagenes_campañas/campañas_donaciones/donaciones_manos.jpg') }}" alt="" style="width:100%">
                    <div class="menu">
                        <ul>
                          <li class="fa fa-2x fa-facebook"> </li>
                          <li class="fa fa-2x fa-twitter"> </li>
                          <li class="fa fa-2x fa-youtube"> </li>
                        </ul>
                        <span> <i class="fa fa-2x fa-ellipsis-v"></i></span>    
                    </div>                    
                  </div>              
                  <div class="card-body">
                    <h4 class="tituloCampana"><b>Ayuda para los ancianos del Albergue San Juan de Dios</b></h4>
                    <h5><i class="fa fa-user" ></i>  Daniel Naula</h5>
                    <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores temporibus fuga error voluptates ratione, sed eos sequi vitae.</p>
                    <h5><i class="fa fa-map-marker"></i> Pichincha, Quito</h5>
                    <div class="left-seccion text-center">
                      <div class="item">
                        <strong>
                          <span class="palabra ">DONACIONES</span><br>
                          <span class="numero ">25</span>
                        </strong>
                      </div>
                    </div>
                    <div class="rigth-seccion text-center">
                      <div class="item">
                        <strong>
                          <span class="palabra ">DIAS RESTANTES</span><br>
                          <span class="numero ">25</span>
                        </strong>
                      </div>
                    </div>
                    <br><br>
                  </div>
                  <div class="card-footer">      
                    <a href="javascript:;" class="btn btn-info btn-block"><i class="fa fa fa-heart"></i> Detalle Campaña</a>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card">
                  <div class="card-header">
                      <img src="{{ asset('imagenes/imagenes_campañas/campañas_donaciones/solidaridad.jpg') }}" alt="" style="width:100%">
                    <div class="menu">
                        <ul>
                          <li class="fa fa-2x fa-facebook"> </li>
                          <li class="fa fa-2x fa-twitter"> </li>
                          <li class="fa fa-2x fa-youtube"> </li>
                        </ul>
                        <span> <i class="fa fa-2x fa-ellipsis-v"></i></span>    
                    </div>                    
                  </div>              
                  <div class="card-body">
                    <h4 class="tituloCampana"><b>Ayuda para los ancianos del Albergue San Juan de Dios</b></h4>
                    <h5><i class="fa fa-user" ></i>  Daniel Naula</h5>
                    <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores temporibus fuga error voluptates ratione, sed eos sequi vitae.</p>
                    <h5><i class="fa fa-map-marker"></i> Pichincha, Quito</h5>
                    <div class="left-seccion text-center">
                      <div class="item">
                        <strong>
                          <span class="palabra ">DONACIONES</span><br>
                          <span class="numero ">25</span>
                        </strong>
                      </div>
                    </div>
                    <div class="rigth-seccion text-center">
                      <div class="item">
                        <strong>
                          <span class="palabra ">DIAS RESTANTES</span><br>
                          <span class="numero ">25</span>
                        </strong>
                      </div>
                    </div>
                    <br><br>
                  </div>
                  <div class="card-footer">      
                    <a href="javascript:;" class="btn btn-info btn-block"><i class="fa fa fa-heart"></i> Detalle Campaña</a>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card">
                  <div class="card-header">
                      <img src="{{ asset('imagenes/imagenes_campañas/campañas_donaciones/Solidaridad_QR.jpg') }}" alt="" style="width:100%">
                    <div class="menu">
                        <ul>
                          <li class="fa fa-2x fa-facebook"> </li>
                          <li class="fa fa-2x fa-twitter"> </li>
                          <li class="fa fa-2x fa-youtube"> </li>
                        </ul>
                        <span> <i class="fa fa-2x fa-ellipsis-v"></i></span>    
                    </div>                    
                  </div>              
                  <div class="card-body">
                    <h4 class="tituloCampana"><b>Ayuda para los ancianos del Albergue San Juan de Dios</b></h4>
                    <h5><i class="fa fa-user" ></i>  Daniel Naula</h5>
                    <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores temporibus fuga error voluptates ratione, sed eos sequi vitae.</p>
                    <h5><i class="fa fa-map-marker"></i> Pichincha, Quito</h5>
                    <div class="left-seccion text-center">
                      <div class="item">
                        <strong>
                          <span class="palabra ">DONACIONES</span><br>
                          <span class="numero ">25</span>
                        </strong>
                      </div>
                    </div>
                    <div class="rigth-seccion text-center">
                      <div class="item">
                        <strong>
                          <span class="palabra ">DIAS RESTANTES</span><br>
                          <span class="numero ">25</span>
                        </strong>
                      </div>
                    </div>
                    <br><br>
                  </div>
                  <div class="card-footer">      
                    <a href="javascript:;" class="btn btn-info btn-block"><i class="fa fa fa-heart"></i> Detalle Campaña</a>
                  </div>
                </div>
              </div>

            </div>
            
          </div>
        </div>


        
        <div class="row">
           <div class="container">
              <div class="col-md-12">
                 <div class="panel-body">
                      <div class="row">
                          <h2>Visualizaciones</h2><hr />
                          <p class="site-page-content-paragraph">Proyectos Caritativos</p>
                          <div class="col-lg-3">
                            <select id="select-tipo-cifra-pib-zona1" onchange="handleStackedAreaChart();" class="form-control">
                              <option value="" disabled>Seleccione Tipo de Cifra</option>
                              @foreach($tiposCifrasNacionalesPIBZonas1 as $tiposCifrasNacionalesPIBZonas1)
                                <option value="{{$tiposCifrasNacionalesPIBZonas1->id}}">{{$tiposCifrasNacionalesPIBZonas1->nombre_tipo_cifra_nacional}}</option>
                              @endforeach
                          </select>
                          </div>
                      </div>
                          <br><br>
                      <div id="nv-stacked-area-chart" class="mipro-nv-chart height-lg">
                        <svg></svg>
                      </div>
                      <h4><a href="#">Más visualizaciones</a></h4>
                </div>
              </div>
           </div>
        </div>

       


@endsection

@section('end_js')
  @parent

  <script src="{{ asset('js/Graficas_Cn_mipro/Cifras_Nacionales_Mipro-inicio.js') }}"></script>
  <script src="{{ asset('plugins/nvd3/nvd3.min.js') }}"></script>

  <script src="{{ asset('js/apps.min.js')}}"></script>
  <script src="{{ asset('js/ui-modal-notification.demo.js') }}"></script>

@endsection

@section('init_scripts')

  <script>

      $(document).ready(function() {

          Notification.init();
          ChartNvd3.init();

          // Fix nvd3 issue repeated tooltip on some charts
          $("div.mipro-nv-chart")
          .mouseleave(function() {
            var tooltips_elements = d3.selectAll('[id^=nvtooltip]');
            tooltips_elements.each(function (i, v) {
              $(this).hide();
              if (v == 1) $(this).prev().remove();
            });
          })
          .mouseenter(function() {
            var tooltips_elements = d3.selectAll('[id^=nvtooltip]');
            tooltips_elements.each(function (i, v) { $(this).show(); });
          });
          // End Fix nvd3 issue repeated tooltip on some charts

      })

</script>

@endsection
