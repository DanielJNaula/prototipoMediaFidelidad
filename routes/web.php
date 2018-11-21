<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/ 

/*Route::get('/', function () {
    return view('welcome');
});*/
 
Route::get('/','PaginasController@inicio');

Route::get('/resutados-busqueda','PaginasController@resultadosBusqueda');

Route::get('/detalle-campaña-bienes','PaginasController@detalleCampañaBienes');

Route::get('/detalle-campaña-voluntariado','PaginasController@detalleCampañaVoluntariado');

Route::get('/detalle-campaña-bienes/donar','PaginasController@visualizarFomularioDonarCampañaBienes');

Route::get('/detalle-campaña-voluntariado/donar','PaginasController@visualizarFomularioVoluntariadoCampaña');

Route::get('/recomendaciones-campañas-bienes-voluntariado','PaginasController@recomendacionesCampañas');

Route::get('/visualizar-mis-donaciones','PaginasController@visualizarMisDonaciones');

Route::get('/visualizar-mis-comentarios','PaginasController@visualizarMisComentarios');

Route::get('/visualizar-mis-campañas','PaginasController@visualizarMisCampañas');

Route::get('/visualizar-mis-donaciones/detalle-donacion','PaginasController@visualizarDetalleDonacion');

Route::get('/visualizar-mis-donaciones/calificar-campaña','PaginasController@calificarCampaña');

Route::get('/mis-campañas/visualizar-donadores','PaginasController@vizualizarDonadoresCampaña');
//Route::get('/detalleCampaña','PaginasController@detalleCampaña');

Route::get('/2', function () {
	return view('cn-pages.ui-buttons');
	//return redirect('pages.dashboard-v2');
});


