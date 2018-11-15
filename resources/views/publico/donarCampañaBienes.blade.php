@extends('layouts.main')
 
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
                      <strong><h3>Ayuda a los albergados del Albergue San Juan de Dios</h3> </strong><br>  
                    </div>
                    

                    <div class="col-md-2">
                      
                    </div>

                    <div class="col-md-8">
                      
                         <!-- begin panel -->
                        
                            <form class="form-horizontal form-bordered" data-parsley-validate="true" name="demo-form">
                                  <div class="reward-list">
                          <ul>
                            <li class="reward">
                              <label>
                                <input name="is_shipp_711" id="is_shipp_711" type="hidden" value="1">
                                <input name="perks" type="radio" class="radioClass sr-only" value="711">
                                <span class="reward-media">
                                  <span class="indicator"><i class="fa fa-2x fa-check-square-o"></i></span>
                                  <span class="reward-body">
                                    <span class="reward-title">SCI - FI 0</span>
                                    <span class="reward-descrip">$10 Sticker de 8x8 cm Confederación Galáctica.<br>
                                      <br>
                                    </span>
                                    <span class="reward-note">
                                      <span class="reward-claimed"><strong>1</strong> reclamados</span>
                                      <span class="delivery-date">Entrega estimada : 20/01/2019</span>
                                    </span>
                                  </span>
                                </span>
                              </label>
                            </li>
                          <li class="reward">
                            <label>
                              <input name="is_shipp_784" id="is_shipp_784" type="hidden" value="1">
                              <input name="perks" type="radio" class="radioClass sr-only" value="784" onclick="valdiateperks()">
                              <span class="reward-media">
                                <span class="indicator"><i class="fa fa-2x fa-check-square-o"></i></span>
                                
                                <span class="reward-body">
                                  <span class="reward-title">SCI - FI 1</span>
                                  <span class="reward-descrip">$20 Postal imágenes (VERSIONES ÚNICAS) + POSTER mediano con firma de un miembro de los trece guerreros, actor.</span>
                                  <span class="reward-note">
                                    <span class="reward-claimed"><strong>0</strong> reclamados</span>
                                    <span class="delivery-date">Entrega estimada : 20/01/2019</span>
                                  </span>
                                </span>
                              </span>
                            </label>
                          </li>
                          <li class="reward">
                            <label>
                              <input name="perks" type="radio" class="radioClass sr-only" value="0" onclick="valdiateperks()" checked="checked/">
                              <span class="reward-media">
                                <span class="indicator"><i class="fa fa-2x fa-check-square-o"></i></span>
                                <span class="reward-amount"></span>
                                <span class="reward-body">
                                  <span class="reward-title" ">Ningun Incentivo, solo una donación !</span>
                                </span>
                              </span>
                            </label>
                            </li>
                          </ul>
                        </div> 
                                    <br><br>
                                    <div style="border: #D7DBDD 1px solid; padding: 1%">  
                                    <label class="control-label" for="fullname">Full Name * :</label>
                                   
                                      <input class="form-control" type="text" id="fullname" name="fullname" placeholder="Required" data-parsley-required="true" />
                                    
                                  
                                  
                                    <label class="control-label " for="email">Email * :</label>
                                    <input class="form-control" type="text" id="email" name="email" data-parsley-type="email" placeholder="Email" data-parsley-required="true" />
                                   
                                  
                                  
                                    <label class="control-label " for="website">Website :</label>
                                    <input class="form-control" type="url" id="website" name="website" data-parsley-type="url" placeholder="url" />
                                    
                                 
                                    <label class="control-label" for="message">Message (20 chars min, 200 max) :</label>
                                    <textarea class="form-control" id="message" name="message" rows="4" data-parsley-range="[20,200]" placeholder="Range from 20 - 200"></textarea>
                                    
                                 
                                  
                                    <label class="control-label " for="message">Digits :</label>
                                    <input class="form-control" type="text" id="digits" name="digits" data-parsley-type="digits" placeholder="Digits" />
                                    
                                  
                                  
                                    <label class="control-label " for="message">Number :</label>
                                    <input class="form-control" type="text" id="number" name="number" data-parsley-type="number" placeholder="Number" />
                                    


                                    <label class="control-label " for="message">Phone :</label>
                                    <input class="form-control" type="text" id="data-phone" data-parsley-type="number" placeholder="(XXX) XXXX XXX" />
                                   </div>
                                  
                                  <br><br>
                                    
                                    <div style="text-align: center;">
                                      <button type="submit" class="btn btn-primary">Submit</button>
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


