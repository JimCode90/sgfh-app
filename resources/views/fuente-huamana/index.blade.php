@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header p-4">
                        <h2 class="w-100 text-center text-uppercase fw-bold">{{ __('Ud. gestiona las siguientes fuentes') }}</h2>
                    </div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Código</th>
                                <th scope="col"></th>
                            </tr>
                            </thead>
                            <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @forelse($fuentes as $fuente)
                            <tr>
                                <th scope="row">{{ $i++  }}</th>
                                <td>{{ $fuente->codigo }}</td>
                                <td>
                                    <a href="{{ route('fuente-humana', ["fuente" => $fuente->id]) }}" class="btn btn-outline-info">
                                        <i class="fa-solid fa-right-to-bracket"></i>
                                    </a>
                                </td>
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
