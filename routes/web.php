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

Route::get('/resutadosBusqueda','PaginasController@resultadosBusqueda');

Route::get('/2', function () {
	return view('cn-pages.extra-search-result');
	//return redirect('pages.dashboard-v2');
});
Route::get('/dashboard/v1', function () {
    return view('pages/dashboard-v1');
});
Route::get('/email/inbox', function () {
    return view('pages/email-inbox');
});
Route::get('/ui/modal-notification', function () {
    return view('pages/ui-modal-notification');
});
Route::get('/ui/ionicons', function () {
    return view('pages/ui-ionicons');
});

