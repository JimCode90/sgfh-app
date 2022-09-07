@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header p-4">
                        <h2 class="w-100 text-center text-uppercase fw-bold">{{ __('Fuente Humana') }}</h2>
                    </div>

                    <div class="card-body">

                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="row">
                                <div class="form-group col-6 mt-2">
                                    <label for="dni">DNI</label>
                                    <input id="dni" type="number" class="form-control" name="dni"
                                           value="{{ $fuente->dni }}">
                                </div>
                                <div class="form-group col-6 mt-2">
                                    <label for="nro_celular">NRO CELULAR</label>
                                    <input id="nro_celular" type="tel" class="form-control" name="nro_celular"
                                           value="{{ $fuente->nro_celular }}">
                                </div>
                                <div class="form-group col-6 mt-2">
                                    <label for="nombres">NOMBRES Y APELLIDOS</label>
                                    <input id="nombres" type="text" class="form-control" name="nombres"
                                           value="{{ $fuente->nombres }}">
                                </div>
                                <div class="form-group col-6 mt-2">
                                    <label for="email">CORREO ELECTRÓNICO</label>
                                    <input id="email" type="email" class="form-control" name="email"
                                           value="{{ $fuente->email }}">
                                </div>
                                <div class="form-group col-6 mt-2">
                                    <label for="codigo">CODIGO DE INFORMANTE</label>
                                    <input id="codigo" type="text" class="form-control" name="codigo"
                                           value="{{ $fuente->codigo }}">
                                </div>
                                <div class="form-group col-6 mt-2">
                                    <label for="direccion">DIRECCIÓN</label>
                                    <input id="direccion" type="text" class="form-control" name="direccion"
                                           value="{{ $fuente->direccion }}">
                                </div>
                                <div class="form-group col-6 mt-2">
                                    <label for="area_criminal">AREA CRIMINAL</label>
                                    <input id="area_criminal" type="text" class="form-control" name="area_criminal"
                                           value="{{ $fuente->area_criminal }}">
                                </div>
                                <div class="form-group col-6 mt-2">
                                    <label for="ubigeo">DISTRITO-PROVINCIA-DEPARTAMENTO</label>
                                    <input id="ubigeo" type="text" class="form-control" name="ubigeo"
                                           value="{{ $fuente->ubigeo }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 mt-4">
                            <h3 class="text-center">Reportes asociados</h3>
                            <div class="mt-4">
                                <table class="table">
                                    <thead>
                                    <tr class="text-center">
                                        <th scope="col">#</th>
                                        <th scope="col">Código</th>
                                        <th scope="col">Acciones</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php
                                        $i = 1;
                                    @endphp
                                    @forelse($reportes as $reporte)
                                        <tr>
                                            <th class="text-center" scope="row">{{ $i++ }}</th>
                                            <td class="text-center">{{ $reporte->codigo }}</td>
                                            <td class="text-center">
                                                <button class="btn btn-outline-success" id="btn-abrir-reporte"
                                                        data-codigo-reporte="{{ $reporte->codigo }}">
                                                    <i class="fa-solid fa-eye"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr class="text-center">
                                            <td colspan="3">LA FUENTE HUMANA SELECCIONADO NO REGISTRO NINGÚN REPORTE
                                            </td>
                                        </tr>
                                    @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    @push("script_custom")
        <script>

            $(document).ready(function () {
                const APP_URL = "{{ config('app.url') }}"

                const btnAbrirReporte = $('#btn-abrir-reporte')

                btnAbrirReporte.on("click", function () {
                    const codigo = $(this).data("codigo-reporte")
                    Swal.fire({
                        title: 'Atención!!',
                        text: "Estas a punto de abrir el reporte seleccionado, recuerda que esta acción esta haciendo auditada!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Si, Abrir Reporte!',
                        cancelButtonText: 'Cancelar'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.open(`${APP_URL}/reporte/${codigo}`, '_blank')
                        }
                    })
                })
            });
        </script>
    @endpush
@endsection
