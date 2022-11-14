<x-plantilla nombrePagina="Citas" titulo="Listado de Citas">

    <div class="mt-3 container-md md:table-auto table w-50 bg-slate-800 rounded-md">
        <div class="container px-10 table-header-group content-center">
            <div class="table-row m-20">
                <div class="table-cell text-white text-center fs-4 fw-bold">Fecha</div>
                <div class="table-cell text-white text-center fs-4 fw-bold">Hora</div>
            </div>
        </div>
        @foreach($citas as $cita)
            <div class="table-header-group">
                <div class="table-row text-start">
                    <div class="table-cell">
                        <a class="btn btn-light text-dark" href="/cita/{{ $cita->id }}">{{ $cita->fecha }}</a>
                    </div>
                    <div class="table-cell text-white">{{ $cita->hora }}</div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="container">
        <a type="button" class="btn btn-dark" href="/cita/create">Agendar cita</a>
    </div>
    @if ($user->admin)
        <div class="container mt-3">
            <a type="button" class="btn btn-dark" href="/servicio">Ver servicios</a>
        </div>
    @endif
    <div class="container mt-3">
        <a type="button" class="btn btn-dark" href="/api/getCitas">Ver citas en formato JSON</a>
    </div>

</x-plantilla>