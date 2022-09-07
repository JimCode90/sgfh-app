@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header p-4">
                        <h2 class="w-100 text-center text-uppercase fw-bold">{{ __('Reporte de Auditoria') }}</h2>
                        <div class="text-center">
                            <a href="{{ route('home') }}" class="btn btn-outline-info">Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Reporte</th>
                                <th scope="col">Fecha de Apertura</th>
                                <th scope="col">Usuario</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @forelse($auditorias as $auditoria)
                                <tr>
                                    <th scope="row">{{ $i++  }}</th>
                                    <td>{{ $auditoria->reporte->codigo }}</td>
                                    <td>{{ $auditoria->date_open->diffForHumans(null, false, false, 3) }}</td>
                                    <td>{{ $auditoria->usuario->nombres }} {{ $auditoria->usuario->apellidos }}</td>
                                </tr>
                            @empty
                                <tr class="text-center">
                                    <td colspan="3">SIN REGISTROS</td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
