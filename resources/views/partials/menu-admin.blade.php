<div class="col-4 text-center mb-3">
    <h5 class="text-uppercase">Registrar Fuente</h5>
    <button class="btn-box">
        <a href="{{ route('fuente-humana.create') }}" class="h1 ">
            <i class="fa-solid fa-circle-plus icon-custom"></i>
        </a>
    </button>
</div>
<div class="col-4 text-center mb-3">
    <h5 class="text-uppercase">Busqueda Fuente</h5>
    <button class="btn-box">
        <a href="{{ route('fuente-humana.buscar-fuente') }}" class="h1">
            <i class="fa-solid fa-magnifying-glass-plus icon-custom"></i>
        </a>
    </button>

</div>
<div class="col-4 text-center mb-3">
    <h5 class="text-uppercase">Fuentes asignadas</h5>
    <button class="btn-box">
        <a href="{{ route('fuente-humana.index') }}" class="h1">
            <i class="fa-solid fa-list-ol icon-custom"></i>
        </a>
    </button>

</div>

<div class="col-4 text-center mb-3">
    <h5 class="text-uppercase">Registrar Reporte</h5>
    <button class="btn-box">
        <a href="{{ route('reporte.create') }}" class="h1 ">
            <i class="fa-solid fa-circle-plus icon-custom"></i>
        </a>
    </button>
</div>

<div class="col-4 text-center mb-3">
    <h5 class="text-uppercase">Mis Reportes</h5>
    <button class="btn-box">
        <a href="{{ route('reporte.index') }}" class="h1 ">
            <i class="fa-solid fa-list-ol icon-custom"></i>
        </a>
    </button>
</div>

<div class="col-4 text-center mb-3">
    <h5 class="text-uppercase">Auditoria</h5>
    <button class="btn-box">
        <a href="{{ route('auditoria.index') }}" class="h1 ">
            <i class="fa-solid fa-eye icon-custom"></i>
        </a>
    </button>
</div>
