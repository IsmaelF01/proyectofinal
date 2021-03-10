<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use Illuminate\Http\Request;
use Cart;
use App\Models\Plato;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function cart($id)
    {
        // return view("/fooding/restaurante/$id/checkout");
        return view("fooding.checkout", ["id" => $id]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add(Request $request, $id)
    {
        $producto = Plato::find($request->producto_id);

        Cart::add(
            $producto->id,
            $producto->nombre,
            $producto->precio,
            1,
            array("urlfoto" => $producto->foto)
        );

        return redirect("/fooding/restaurante/$id/");
    }

    public function removeitem(Request $request, $id)
    {
        Cart::remove(['id' => $request->id,]);

        return redirect("/fooding/restaurante/$id");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $productos = $request->all();

        // print_r($productos);
        // Esta esta chapuza porque el request me pasa tambien el token y no se porque
        //Hoy a dia 10 he aprendido a quitar el tokken con un error que le paso a diego pero ya no voy a cambiar esto <3
        for ($i = 0; $i < count($productos)/2-1; $i++) {
            $pedido = new Pedido();
            $plato = Plato::find($productos[$i]);
            $pedido->user_id = Auth::id();
            $pedido->restaurante_id = $plato->restaurante_id;
            $pedido->repartidor_id = null;
            $pedido->estado = "Recibido";
            $pedido->save();
            $pedido->platos()->attach($pedido->id, ['cantidad' => $productos["cant".$i], 'plato_id' => $plato->id]);
        }

        return redirect("/fooding/restaurante/$id");
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
