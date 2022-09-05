@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header p-4">
                        <h2 class="w-100 text-center text-uppercase fw-bold">{{ __('Registro de Fuente Humana') }}</h2>
                        <div class="text-center">
                            <a href="{{ route('reporte.index') }}" class="btn btn-outline-info">Ir a bandeja</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <form action="{{ route('reporte.store') }}" class="row" method="post">
                            @csrf
                            <div class="col-lg-5 col-md-5 col-sm-12">
                                <div class="text-center">
                                    <h1>
                                        <i class="fa-solid fa-user"></i>
                                    </h1>
                                </div>
                                <div class="form-group text-center">
                                    <label for="imagen">Adjuntar Imagen (Máximo 1)</label>
                                    <input type="file" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-7 col-sm-12">
                                <div class="row">
                                    <div class="form-group col-12 mt-2">
                                        <label for="asunto">ASUNTO</label>
                                        <input id="asunto" type="text" class="form-control" name="asunto">
                                    </div>
                                    <div class="form-group col-12 mt-2">
                                        <label for="detalle">DETALLE</label>
                                        <textarea name="detalle" id="detalle" cols="30" rows="10" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group col-12 mt-2">
                                        <button type="submit" class="btn btn-outline-success w-100">Registrar</button>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
