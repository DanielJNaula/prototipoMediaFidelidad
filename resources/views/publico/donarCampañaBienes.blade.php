@extends('layouts.main')
 
@section('title', 'Detalle campaña') 

@section('start_css')
  @parent
  

  
  

  
@endsection
 


@section('contenido') 
<br><br><br><br>       
        <div class="row">
           <div class="container">
              <div class="col-md-12">
                 <div class="panel-body">
                  <div class="row" style="text-align: center; color: #348fe2;">
                    <strong><h3>Ayuda a los albergados del Albergue San Juan de Dios</h3> </strong><br>

                    <div class="col-md-2">
                      
                    </div>
                    <div class="col-md-8">
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
                              <input name="is_shipp_785" id="is_shipp_785" type="hidden" value="1">
                              <input name="perks" type="radio" class="radioClass sr-only" value="785" onclick="valdiateperks()">
                              <span class="reward-media">
                                <span class="indicator"><i class="fa fa-2x fa-check-square-o"></i></span>
                                
                                <span class="reward-body" >
                                  <span class="reward-title">SCI - FI 2</span>
                                  <span class="reward-descrip">$30 Postal + POSTER mediano con firma de un miembro de los trece guerreros, actor. + Sticker<br>
                                  ADICIONAL: clase de artes marciales.<br>
                                  ACADEMIA DE ARTES MARCIALES DANNY MAN (Danny Mantilla). </span>
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
                    </div>
                  </div>
                      
                      
                  </div>
                </div>
              </div>
           </div>
        </div>

       


@endsection




