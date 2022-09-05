@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header p-4">
                        <h2 class="w-100 text-center text-uppercase fw-bold">{{ __('Registro de Fuente Humana') }}</h2>
                        <div class="text-center">
                            <a href="{{ route('fuente-humana.index') }}" class="btn btn-outline-info">Ir a bandeja</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <form action="" class="row" method="post">
                            @csrf
                            <div class="col-lg-3 col-md-3 col-sm-12">
                                <div class="text-center">
                                    <h1>
                                        <i class="fa-solid fa-user"></i>
                                    </h1>
                                </div>
                                <div class="form-group text-center">
                                    <label for="imagen">Registrar Imagen</label>
                                    <input type="file" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-9 col-sm-12">
                                <div class="row">
                                    <div class="form-group col-6 mt-2">
                                        <label for="dni">DNI</label>
                                        <input id="dni" type="number" class="form-control" name="dni">
                                    </div>
                                    <div class="form-group col-6 mt-2">
                                        <label for="nro_celular">NRO CELULAR</label>
                                        <input id="nro_celular" type="tel" class="form-control" name="nro_celular">
                                    </div>
                                    <div class="form-group col-6 mt-2">
                                        <label for="nombres">NOMBRES</label>
                                        <input id="nombres" type="text" class="form-control" name="nombres">
                                    </div>
                                    <div class="form-group col-6 mt-2">
                                        <label for="apellidos">APELLIDOS</label>
                                        <input id="apellidos" type="text" class="form-control" name="apellidos">
                                    </div>
                                    <div class="form-group col-6 mt-2">
                                        <label for="email">CORREO ELECTRÓNICO</label>
                                        <input id="email" type="email" class="form-control" name="email">
                                    </div>
                                    <div class="form-group col-6 mt-2">
                                        <label for="codigo">CODIGO DE INFORMANTE</label>
                                        <input id="codigo" type="text" class="form-control" name="codigo">
                                    </div>
                                    <div class="form-group col-6 mt-2">
                                        <label for="direccion">DIRECCIÓN</label>
                                        <input id="direccion" type="text" class="form-control" name="direccion">
                                    </div>
                                    <div class="form-group col-6 mt-2">
                                        <label for="area_criminal">AREA CRIMINAL</label>
                                        <input id="area_criminal" type="text" class="form-control" name="area_criminal">
                                    </div>
                                    <div class="form-group col-6 mt-2">
                                        <label for="ubigeo">DISTRITO-PROVINCIA-DEPARTAMENTO</label>
                                        <input id="ubigeo" type="text" class="form-control" name="ubigeo">
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
