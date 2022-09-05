<?php

namespace App\Http\Controllers;

use App\Models\Reporte;
use Illuminate\Http\Request;

class ReporteController extends Controller
{
    public function index()
    {
        $reportes = Reporte::where("user_create", auth()->user()->id)->get();
        return view('reportes.index', compact("reportes"));
    }
    public function create()
    {
        return view('reportes.create');
    }

    public function store(Request $request)
    {
        Reporte::create([
            "asunto" => $request->asunto,
            "detalle" => $request->detalle,
            "user_create" => auth()->user()->id,
        ]);

        return redirect()->back()->with("flash_message", "Registro exitoso")
            ->with('flash_type', 'alert-success');
    }
}
