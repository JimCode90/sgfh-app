@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header p-4">
                        <h2 class="w-100 text-center text-uppercase fw-bold">{{ __('Reporte : ') }} - {{ $reporte->codigo }}</h2>
                    </div>

                    <div class="card-body">
                        <div class="form-group">
                            <label for="asunto">Asunto</label>
                            <input readonly type="text" class="form-control" value="{{ $reporte->asunto }}">
                        </div>
                        <div class="form-group mt-3">
                            <label for="asunto">Detalle</label>
                            <textarea readonly class="form-control" cols="30" rows="10">{{ $reporte->detalle }}</textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
