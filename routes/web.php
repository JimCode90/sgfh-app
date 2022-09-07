<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::middleware(["auth", "agente"])->group(function(){
    Route::get('/registrar-fuente', [\App\Http\Controllers\FuenteHumanaController::class, 'create'])->name('fuente-humana.create');
    Route::post('/registrar-fuente', [\App\Http\Controllers\FuenteHumanaController::class, 'store'])->name('fuente-humana.store');
    Route::get('/mis-fuentes', [\App\Http\Controllers\FuenteHumanaController::class, 'index'])->name('fuente-humana.index');
    Route::get('/fuente-humana/{fuente}', [\App\Http\Controllers\FuenteHumanaController::class, 'fuenteId'])->name('fuente-humana');
    Route::get('/buscar-fuente-humana', [\App\Http\Controllers\FuenteHumanaController::class, 'buscarFuente'])->name('fuente-humana.buscar-fuente');
    Route::post('/procesa-buscar-fuente-humana', [\App\Http\Controllers\FuenteHumanaController::class, 'procesaBuscarFuente'])->name('procesa-buscar-fuente-humana');
    Route::get('/reporte/{reporte}', [\App\Http\Controllers\ReporteController::class, 'show'])->name('reporte.show');
});


Route::middleware(["auth", "informante",])->group(function(){

Route::get('/registrar-reporte', [\App\Http\Controllers\ReporteController::class, 'create'])->name('reporte.create');
Route::post('/registrar-reporte', [\App\Http\Controllers\ReporteController::class, 'store'])->name('reporte.store');
Route::get('/reportes', [\App\Http\Controllers\ReporteController::class, 'index'])->name('reporte.index');

});

Route::middleware(["auth", "administrador",])->group(function(){

    Route::get('/auditoria', [\App\Http\Controllers\AuditoriaController::class, 'index'])->name('auditoria.index');


});
