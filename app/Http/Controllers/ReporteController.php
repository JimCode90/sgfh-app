<?php

namespace App\Http\Controllers;

use App\Models\Auditoria;
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
        $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $codigo = substr(str_shuffle($permitted_chars), 0, 16);
        Reporte::create([
            "codigo" => $codigo,
            "asunto" => $request->asunto,
            "detalle" => $request->detalle,
            "user_create" => auth()->user()->id,
        ]);

        return redirect()->back()->with("flash_message", "Registro exitoso")
            ->with('flash_type', 'alert-success');
    }

    public function show(Request $request)
    {
        $reporte = Reporte::where("codigo", $request->reporte)->first();
        Auditoria::create([
            "reporte_id" => $reporte->id,
            "date_open" => now(),
            "user_open" => auth()->user()->id,
        ]);
        return view('fuente-huamana.reporte-show', compact("reporte"));
    }
}
