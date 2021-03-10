<?php

namespace App\Http\Controllers;

use App\Http\Resources\RestauranteResource;
use App\Models\Pedido;
use App\Models\Plato;
use App\Models\Restaurante;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ApiController extends Controller
{
    /**
     * METODOS PARA API
     * ***************************************************************
     */


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function ver(){
        $restaurantes = Restaurante::all();

        return json_encode(array(
            'status' => 200,
            'response' => $restaurantes
        ));
    }

    public function info($id){
        $restaurantes = Restaurante::all();
        $platos = Plato::all()->where('restaurante_id', '=', $id);

        return json_encode(array(
            'status' => 200,
            'restaurantes' => $restaurantes,
            'platos' => $platos
        ));
    }

    public function porCategoria($categoria){
        $platos = Plato::all()->where('categoria', '=', $categoria);

        return json_encode(array(
            'status' => 200,
            'platos' => $platos
        ));
    }

    public function plato($id){
        $platos = Plato::where('id', '=', $id);

        return json_encode(array(
            'status' => 200,
            'platos' => $platos
        ));
    }

    public function cliente($dni){
        $user = User::all()->where('dni', '=', $dni);

        return json_encode(array(
            'status' => 200,
            'usuario' => $user
        ));
    }

    public function pedidos($dni){
        $cliente = User::where('dni', '=', $dni)->first()->id;
        $pedido = Pedido::all()->where('user_id', '=', $cliente);

        return json_encode(array(
            'status' => 200,
            'usuario' => $pedido
        ));
    }

    public function pedidoId($dni, $id){
        $cliente = User::where('dni', '=', $dni)->first()->id;
        $pedido = Pedido::all()->where('user_id', '=', $cliente)->where('id', '=', $id);

        return json_encode(array(
            'status' => 200,
            'usuario' => $pedido
        ));
    }

    public function addRest(Request $request)
    {
        $restaurante = new Restaurante;
        $restaurante->nombre = $request->nombre;
        $restaurante->direccion = $request->direccion;
        $restaurante->ciudad = $request->ciudad;
        $restaurante->telefono = $request->telefono;
        $restaurante->longitud = $request->longitud;
        $restaurante->latitud = $request->latitud;
        $restaurante->user_id = Auth::id();
        $restaurante->foto = null;
        $restaurante->save();

        return response(['restaurante' => new RestauranteResource($restaurante),
                             'message' => 'Created successfully'], 201);

    }

    public function addPlato(Request $request, $id)
    {
        $restaurante = new Restaurante;
        $restaurante->nombre = $request->nombre;
        $restaurante->descripcion = $request->descripcion;
        $restaurante->foto = null;
        $restaurante->categoria = $request->categoria;
        $restaurante->restaurante_id = $id;
        $restaurante->save();

        return response(['restaurante' => new RestauranteResource($restaurante),
                             'message' => 'Created successfully'], 201);

    }

    public function delRest($id)
    {
        DB::table('restaurantes')->where('id', '=', $id)->delete();

        return response(['message' => 'Deleted successfully'], 201);
    }

    public function delPlato($id, $id2)
    {
        DB::table('platos')->where('id', '=', $id2)->delete();

        return response(['message' => 'Deleted successfully'], 201);
    }

}
