<?php

namespace App\Http\Controllers;

use App\Http\Resources\RestauranteResource;
use App\Models\Plato;
use App\Models\Restaurante;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class RestauranteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request){
            $user = User::find(Auth::id());
            $query = trim($request->get('search'));
            if ($user->role->role == "admin") {
                $restaurantes = Restaurante::where('nombre', 'LIKE', '%'.$query.'%')->orderBy('id', 'asc')->paginate(5);
            } else {
                $restaurantes = Restaurante::where('user_id', '=', Auth::id())->where('nombre', 'LIKE', '%'.$query.'%')->orderBy('id', 'asc')->paginate(10);
            }
            return view("intranet.restaurantes", ["restaurantes" => $restaurantes, "user" => $user]);
        }
    }

    public function indexPlatos(Request $request, $id){
        if($request){
            $query = trim($request->get('search'));
            $platos = Plato::where('nombre', 'LIKE', '%'.$query.'%')->where('restaurante_id', '=', $id)->orderBy('id', 'asc')->paginate(5);

            return view("intranet.platos", ["platos" => $platos, "restaurante_id" => $id]);
        }
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
        $validated = $request->validate([
            'telefono' => 'required|numeric',
            'latitud' => 'required|numeric',
            'longitud' => 'required|numeric',
            // 'foto' => 'required|file|image|mimes:jpg,png',
        ]);
        $entrada = $request->all();

        $nombre = $entrada['nombre'] . "-" . $request->file('foto')->getClientOriginalName();
        $request->foto->storeAs('/img/restaurantes', $nombre);

        $restaurante = new Restaurante;
        $restaurante->nombre = $request->nombre;
        $restaurante->direccion = $request->direccion;
        $restaurante->ciudad = $request->ciudad;
        $restaurante->telefono = $request->telefono;
        $restaurante->latitud = $request->latitud;
        $restaurante->longitud = $request->longitud;
        $restaurante->user_id = Auth::id();
        $restaurante->foto = $nombre;
        $restaurante->save();

        // $rest = Restaurante::orderBy('id', 'DESC')->nombre($request->nombre);


        return redirect()->action([RestauranteController::class, 'index']);
    }

    public function storePlato(Request $request)
    {
        $entrada = $request->all();

        $nombre = $entrada['restaurante_id'] . "-" . $request->file('foto')->getClientOriginalName();
        $request->foto->storeAs('/img/platos', $nombre);

        $plato = new Plato;
        $plato->nombre = $entrada['nombre'];
        $plato->descripcion = $entrada['descripcion'];
        $plato->foto = $nombre;
        $plato->precio = $entrada['precio'];
        $plato->categoria = $entrada['categoria'];
        $plato->restaurante_id = $entrada['restaurante_id'];
        $plato->save();

        return redirect()->action([RestauranteController::class, 'index']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $restaurante = Restaurante::find($id);
        // return view('intranet.restaurantes',['restaurante' => $restaurante]);
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

    public function updatePlato(Request $request, $id)
    {
        DB::table('platos')
              ->where('id', $id)
              ->update([
                'descripcion' => $request->descripcion,
                'precio' => $request->precio,
                ]);

        return redirect()->action([RestauranteController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('restaurantes')->where('id', '=', $id)->delete();
        return redirect()->action(
            [RestauranteController::class, 'index']
        );
    }

    public function destroyPlato($id)
    {
        DB::table('platos')->where('id', '=', $id)->delete();
        return redirect()->action(
            [RestauranteController::class, 'index']
        );
    }
}
