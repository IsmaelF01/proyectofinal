<?php

namespace App\Http\Controllers;

use App\Models\LineasPedidos;
use App\Models\Pedido;
use App\Models\Plato;
use App\Models\Restaurante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RepartidorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $query = trim($request->get('search'));
        $pedidos = Pedido::where("estado", '!=', "recibido")->where('estado', 'LIKE', '%'.$query.'%')->orderBy('id', 'asc')->paginate(5);

        return view('intranet.repartidores', ['pedidos' => $pedidos]);
    }

    public function porRest($id, Request $request)
    {
        $query = trim($request->get('search'));
        $pedidos = Pedido::where("restaurante_id", '=', $id)->where('estado', 'LIKE', '%'.$query.'%')->orderBy('id', 'asc')->paginate(5);

        return view('intranet.pedidos', ['pedidos' => $pedidos, 'restaurante_id' => $id]);
    }

    public function verPlatos($id)
    {
        $pedido = Pedido::find($id);
        $platos = $pedido->platos;
        return view('intranet.platospedido', ['platos'=>$platos, 'pedido'=>$pedido, ]);
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
    public function cambiaEstado($id, $id_pedido)
    {
        DB::table('pedidos')
              ->where('id', $id_pedido)
              ->update([
                'estado' => "Finalizado",
                ]);

        return redirect("/intranet/restaurante/{$id}/pedido");
    }

    public function update(Request $request, $id)
    {
        DB::table('pedidos')
              ->where('id', $id)
              ->update([
                'estado' => $request->estado,
                ]);

        return redirect()->action([RepartidorController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('pedidos')->where('id', '=', $id)->delete();
        return redirect()->action([RepartidorController::class, 'index']);
    }

    public function destroyPedido($id)
    {
        DB::table('pedidos')->where('id', '=', $id)->delete();
        return redirect()->action([RepartidorController::class, 'porRest']);
    }
}
