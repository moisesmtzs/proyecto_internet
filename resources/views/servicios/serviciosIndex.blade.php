<x-plantilla nombrePagina="Listado de servicios" titulo="Servicios">

    @if (session('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif

    <div class="mt-3 container-md md:table-auto table w-50 bg-slate-800 rounded-md">
        <div class="container px-10 table-header-group content-center">
            <div class="table-row m-20">
                <div class="table-cell text-center text-white fs-5 fw-bold">Nombre del servicio</div>
                <div class="table-cell text-center text-white fs-5 fw-bold">Precio del servicio</div>
            </div>
        </div>
        @foreach($servicios as $servicio)
            <div class="table-header-group">
                <div class="table-row text-start">
                    <div class="table-cell">
                        <a class="btn btn-light text-dark" href="/servicio/{{ $servicio->id }}">{{ $servicio->nombre }}</a>
                    </div>
                    <div class="table-cell text-white">${{ number_format($servicio->precio, 2) }}</div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="container mt-3">
        <a type="button" class="btn btn-dark" href="/servicio/create">Agregar servicio</a>
    </div>

</x-plantilla>