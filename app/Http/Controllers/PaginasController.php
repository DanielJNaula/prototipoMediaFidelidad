<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Illuminate\Support\Collection as Collection;
use App\CnCifrasNacionales;
use App\CnTipoCifraNacional;

class PaginasController extends Controller
{
    
    public function resultadosBusqueda(){
        return view('usuario_sin_inicio_secion.resultadosBusquedaCampaña');
    }
    public function inicio(){

        $tiposCifrasNacionalesPIBZonas1= CnTipoCifraNacional::select('id','nombre_tipo_cifra_nacional')
                                                     ->take(4)
                                                     ->get();
      return view('inicio')->with(["tiposCifrasNacionalesPIBZonas1"=>$tiposCifrasNacionalesPIBZonas1]);

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
