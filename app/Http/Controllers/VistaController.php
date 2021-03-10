<?php

namespace App\Http\Controllers;

use App\Models\Restaurante;
use App\Models\Plato;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VistaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request){
            $query = trim($request->get('search'));
            $restaurantes = Restaurante::where('nombre', 'LIKE', '%'.$query.'%')->orderBy('id', 'asc')->get();;
            return view("fooding.restaurantes", ["restaurantes" => $restaurantes]);
        }
    }

    public function indexPlatos($id)
    {
        $restaurantes = Restaurante::all();
        $platos = Plato::all();
        $cantidad = Plato::all()->count($platos);
        return view("fooding.platos", ["restaurantes" => $restaurantes, "platos" => $platos, "restaurante_id" => $id, "cantidad" => $cantidad]);
    }

    public function indexPlatosCateg($id, $categoria)
    {
        $restaurantes = Restaurante::all();
        $platos = Plato::all()->where('categoria', '=', $categoria);
        $cantidad = Plato::all()->count(Plato::all());
        return view("fooding.platos", ["restaurantes" => $restaurantes, "platos" => $platos, "restaurante_id" => $id, "cantidad" => $cantidad]);
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
        $restaurantes = Restaurante::where('id', '=', $id)->get();
        return view("fooding.acercade", ['restaurantes' => $restaurantes]);
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
