@extends('layouts.app')
@push("styles_custom")
    <style>
        .btn-box {
            background-color: #0c4128;
            padding: .8rem;
            border-radius: 20px;
            width: 50%;
        }

        .icon-custom {
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
                                @if(auth()->user()->id_tipo_perfil == 1 || auth()->user()->id_tipo_perfil == 2)
                                    <img width="70" src="{{asset('img/pnp.png')}}" alt="">
                                @endif

                            </div>
                            <div class="col-lg-8">
                                <h2 class="w-100 text-center text-uppercase fw-bold">{{ __('¿Que acción desea hacer?') }}</h2>
                            </div>
                            <div class="col-lg-2">
                                @if(auth()->user()->id_tipo_perfil == 1 || auth()->user()->id_tipo_perfil == 2)
                                    <img width="70" src="{{asset('img/pnp.png')}}" alt="">
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            @if(auth()->user()->id_tipo_perfil == 1 )
                                @include("partials.menu-admin")
                            @elseif(auth()->user()->id_tipo_perfil == 2)
                                @include("partials.menu-agente")
                            @elseif(auth()->user()->id_tipo_perfil == 3)
                                @include("partials.menu-informante")
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
