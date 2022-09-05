@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header p-4">
                        <h2 class="w-100 text-center text-uppercase fw-bold">{{ __('Buscar Fuente Humana') }}</h2>
                    </div>

                    <div class="card-body">

                        <form method="post" action="{{ route('procesa-buscar-fuente-humana') }}">
                            @csrf
                            <div class="form-group mt-2">
                                <label for="codigo">CODIGO</label>
                                <input class="form-control" type="text" name="codigo" id="codigo">
                            </div>
                            <div class="form-group mt-2">
                                <label for="area">AREA CRIMINAL</label>
                                <input class="form-control" type="text" name="area" id="area">
                            </div>
                            <div class="form-group mt-2">
                                <label for="ubigeo">UBIGEO</label>
                                <input class="form-control" type="text" name="ubigeo" id="ubigeo">
                            </div>
                            <div class="form-group mt-2">
                                <button class="btn btn-outline-success w-100">Buscar</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
