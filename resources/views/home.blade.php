@extends('layouts.app')
@push("styles_custom")
    <style>
        .btn-box{
            background-color: #0c4128;
            padding: .8rem;
            border-radius: 20px;
            width: 50%;
        }
        .icon-custom{
            color: white;
        }
    </style>
@endpush
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header p-4">
                    <div class="row">
                        <div class="col-lg-2">
                            @if(auth()->user()->id_tipo_perfil == 1)
                                <img width="70" src="{{asset('img/pnp.png')}}" alt="">
                            @endif

                        </div>
                        <div class="col-lg-8">
                            <h2 class="w-100 text-center text-uppercase fw-bold">{{ __('¿Que acción desea hacer?') }}</h2>
                        </div>
                        <div class="col-lg-2">
                            @if(auth()->user()->id_tipo_perfil == 1)
                                <img width="70" src="{{asset('img/pnp.png')}}" alt="">
                            @endif
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="row">
                        @if(auth()->user()->id_tipo_perfil == 1)
                            <div class="col-4 text-center">
                                <h5 class="text-uppercase">Registrar Fuente</h5>
                                <button class="btn-box">
                                    <a href="{{ route('fuente-humana.create') }}" class="h1 ">
                                        <i class="fa-solid fa-circle-plus icon-custom"></i>
                                    </a>
                                </button>
                            </div>
                            <div class="col-4  text-center">
                                <h5 class="text-uppercase">Busqueda Fuente</h5>
                                <button class="btn-box">
                                    <a href="{{ route('fuente-humana.buscar-fuente') }}" class="h1">
                                        <i class="fa-solid fa-magnifying-glass-plus icon-custom"></i>
                                    </a>
                                </button>

                            </div>
                            <div class="col-4  text-center">
                                <h5 class="text-uppercase">Fuentes asignadas</h5>
                                <button class="btn-box">
                                    <a href="{{ route('fuente-humana.index') }}" class="h1">
                                        <i class="fa-solid fa-list-ol icon-custom"></i>
                                    </a>
                                </button>

                            </div>
                        @else
                            <div class="col-6 text-center">
                                <h5 class="text-uppercase">Registrar Reporte</h5>
                                <button class="btn-box">
                                    <a href="{{ route('reporte.create') }}" class="h1 ">
                                        <i class="fa-solid fa-circle-plus icon-custom"></i>
                                    </a>
                                </button>
                            </div>

                            <div class="col-6 text-center">
                                <h5 class="text-uppercase">Mis Reportes</h5>
                                <button class="btn-box">
                                    <a href="{{ route('reporte.index') }}" class="h1 ">
                                        <i class="fa-solid fa-circle-plus icon-custom"></i>
                                    </a>
                                </button>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
