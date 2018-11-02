@extends('layouts.main')
 
@section('title', 'Reporte')

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
                        <div class="col-md-8">
                          <div class="video-container" >
                            <iframe  src="https://www.youtube-nocookie.com/embed/ErU7mcIYPwA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                          </div>
                            
                          
                        </div>
                        <div class="col-md-4">
                          
                        </div>
                      </div>
                      <div class="row">
        <div class="col-md-8" ">
          <!-- PRA PONER LOS VIDEOS UNICAMENTE SE PONER LOS CARACTERES DESPUES DEL v= -->
          
          
              <ul class="nav nav-pills">
                <li class="active"><a href="#nav-pills-tab-1" data-toggle="tab">Campaña</a></li>
                <li><a href="#nav-pills-tab-2" data-toggle="tab">Donadores</a></li>
                <li><a href="#nav-pills-tab-3" data-toggle="tab">Estadisticas</a></li>
                <li><a href="#nav-pills-tab-4" data-toggle="tab">Comentarios</a></li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane fade active in" id="nav-pills-tab-1">
                    <h3 class="m-t-10">Nav Pills Tab 1</h3>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Integer ac dui eu felis hendrerit lobortis. Phasellus elementum, nibh eget adipiscing porttitor, 
                    est diam sagittis orci, a ornare nisi quam elementum tortor. 
                    Proin interdum ante porta est convallis dapibus dictum in nibh. 
                    Aenean quis massa congue metus mollis fermentum eget et tellus. 
                    Aenean tincidunt, mauris ut dignissim lacinia, nisi urna consectetur sapien, 
                    nec eleifend orci eros id lectus.
                  </p>
                </div>
                <div class="tab-pane fade" id="nav-pills-tab-2">
                    <h3 class="m-t-10">Nav Pills Tab 2</h3>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Integer ac dui eu felis hendrerit lobortis. Phasellus elementum, nibh eget adipiscing porttitor, 
                    est diam sagittis orci, a ornare nisi quam elementum tortor. 
                    Proin interdum ante porta est convallis dapibus dictum in nibh. 
                    Aenean quis massa congue metus mollis fermentum eget et tellus. 
                    Aenean tincidunt, mauris ut dignissim lacinia, nisi urna consectetur sapien, 
                    nec eleifend orci eros id lectus.
                  </p>
                </div>
                <div class="tab-pane fade" id="nav-pills-tab-3">
                    <h3 class="m-t-10">Nav Pills Tab 3</h3>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Integer ac dui eu felis hendrerit lobortis. Phasellus elementum, nibh eget adipiscing porttitor, 
                    est diam sagittis orci, a ornare nisi quam elementum tortor. 
                    Proin interdum ante porta est convallis dapibus dictum in nibh. 
                    Aenean quis massa congue metus mollis fermentum eget et tellus. 
                    Aenean tincidunt, mauris ut dignissim lacinia, nisi urna consectetur sapien, 
                    nec eleifend orci eros id lectus.
                  </p>
                </div>
                <div class="tab-pane fade" id="nav-pills-tab-4">
                    <h3 class="m-t-10">Nav Pills Tab 4</h3>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Integer ac dui eu felis hendrerit lobortis. Phasellus elementum, nibh eget adipiscing porttitor, 
                    est diam sagittis orci, a ornare nisi quam elementum tortor. 
                    Proin interdum ante porta est convallis dapibus dictum in nibh. 
                    Aenean quis massa congue metus mollis fermentum eget et tellus. 
                    Aenean tincidunt, mauris ut dignissim lacinia, nisi urna consectetur sapien, 
                    nec eleifend orci eros id lectus.
                  </p>
                </div>
              </div> 
      </div>
      <div class="col-md-4" style="border: #D7DBDD 1px solid; padding: 1%">

              

                         

              
      </div>

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

  <script>

    $(document).ready(function() {
      
      TablaCCPTHomelistado.init();
    });

  </script>
   



@endsection
