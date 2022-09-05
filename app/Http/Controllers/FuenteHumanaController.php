<?php

namespace App\Http\Controllers;

use App\Models\FuenteHumana;
use App\Models\Reporte;
use App\Models\User;
use Illuminate\Http\Request;

class FuenteHumanaController extends Controller
{

    public function index()
    {
        $fuentes = FuenteHumana::where("user_create", auth()->user()->id)->get();
        return view('fuente-huamana.index', compact('fuentes'));
    }

    public function create(){
        return view('fuente-huamana.create');
    }

    public function store(Request $request)
    {

        $user = User::create([
            "nombres" => $request->nombres,
            "apellidos" => $request->apellidos,
            "dni" => $request->dni,
            'id_tipo_perfil' => 2,
            "email" => $request->email,
            'password' => bcrypt($request->dni),
        ]);

        FuenteHumana::create([
            "user_id" => $user->id,
            "dni" => $request->dni,
            "nro_celular" => $request->nro_celular,
            "nombres" => $request->nombres,
            "apellidos" => $request->apellidos,
            "email" => $request->email,
            "codigo" => $request->codigo,
            "direccion" => $request->direccion,
            "area_criminal" => $request->area_criminal,
            "ubigeo" => $request->ubigeo,
            "user_create" => auth()->user()->id
        ]);



        return redirect()->back()->with("flash_message", "Registro exitoso")
            ->with('flash_type', 'alert-success');


    }

    public function fuenteId(FuenteHumana $fuente)
    {
        $reportes = Reporte::where("user_create", $fuente->user_id)->get();
        return view('fuente-huamana.fuente-humana', compact("fuente", "reportes"));
    }

    public function buscarFuente()
    {
        return view('fuente-huamana.search');
    }

    public function procesaBuscarFuente(Request $request)
    {
        $fuentes = FuenteHumana::where('codigo', 'like', '%' . $request->codigo . '%')
            ->where('area_criminal', 'like', '%' . $request->area . '%')
            ->where('ubigeo', 'like', '%' . $request->ubigeo . '%')
            ->where("user_create", auth()->user()->id)
            ->get();
        return view('fuente-huamana.resultados-busqueda', compact("fuentes"));
    }
}
