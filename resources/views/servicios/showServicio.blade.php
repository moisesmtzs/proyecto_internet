<x-plantilla nombrePagina="Ver servicio" titulo="Detalles del servicio">
    <div class="mt-3 container">
        <a class="btn btn-outline-dark" href="{{ route('servicio.index') }}">Regresar a listado de servicios</a>
        <div class="container-md md:table-auto w-50 bg-slate-600 rounded-md md-mx-5">
            <p class="text-center text-white fs-5 my-4">Detalle del servicio</p>
        </div>

        <table class="table table-striped-columns container-md md:table-auto w-75 bg-slate-800 rounded-md md-mx-5">

            <thead class="text-center">
                <tr>
                </tr>
                <tr>
                    <th class="fw-semibold text-white">Nombre del servicio</td>
                    <th class="fw-semibold text-white">Precio del servicio</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="fw-light text-white">{{ $servicio->nombre }}</td>
                    <td class="fw-light text-white">${{ number_format($servicio->precio, 2) }}</td>
                </tr>
            </tbody>

        </table>
        <a class="my-3 btn btn-dark fw-bold" href="/servicio/{{ $servicio->id }}/edit">Editar servicio</a>
        <form action="/servicio/{{$servicio->id}}" method="post">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" type="submit">Eliminar servicio</button>
        </form>

    </div>
</x-plantilla>