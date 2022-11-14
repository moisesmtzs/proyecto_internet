<x-plantilla nombrePagina="Cita" titulo="Detalle de cita">
    
    <div class="container mt-3">
        <a class="btn btn-outline-dark" href="{{ route('cita.index') }}">Regresar al Inicio</a>
        <div class="container-md md:table-auto w-50 bg-slate-600 rounded-md md-mx-5">
            <p class="text-center text-white fs-5 my-4">Detalle de la cita</p>
        </div>

        <table class="table table-striped-columns container-md md:table-auto w-75 bg-slate-800 rounded-md md-mx-5">

            <thead class="text-center">
                <tr>
                    <th class="text-white fs-5">Fecha de la cita</th>
                    <th class="text-white fs-5">Hora de la cita</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="fw-light text-white">{{ $cita->fecha }}</td>
                    <td class="fw-light text-white">{{ $cita->hora }}</td>
                </tr>
            </tbody>

        </table>
        <div class="container-md md:table-auto w-50 bg-slate-600 rounded-md md-mx-5">
            <p class="text-center text-white fs-5 my-4">Servicios</p>
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
                @if ($cita->servicios->isNotEmpty())
                    @foreach ($cita->servicios as $servicio)
                        <tr>
                            <td class="fw-light text-white">{{ $servicio->nombre }}</td>
                            <td class="fw-light text-white">${{ number_format($servicio->precio, 2) }}</td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td class="fw-light text-white">No hay servicios contratados para esta cita.</td>
                        <td class="fw-light text-white">No hay servicios contratados para esta cita.</td>
                    </tr>
                @endif
            </tbody>

        </table>
    
        <br>
        <a class="btn btn-dark fw-bold" href="/cita/{{ $cita->id }}/edit">Editar cita</a>
        <br>
        <br>
        @can('delete', $cita)
            <form action="/cita/{{$cita->id}}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Eliminar cita</button>
            </form>
        @endcan
    </div>

</x-plantilla>