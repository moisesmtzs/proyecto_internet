<x-plantilla titulo="Detalles de la cita">
    
    <div class="container mt-3">
        <a class="btn btn-primary" href="/cita">Volver a la lista de citas</a>

        <table class="table table-striped-columns container-md md:table-auto w-50 bg-slate-800 rounded-md my-5 md-mx-5">

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
            <p class="text-center text-white fs-5">Servicios</p>
        </div>
        <table class="table table-striped-columns container-md md:table-auto w-50 bg-slate-800 rounded-md md-mx-5">

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
        <a class="btn btn-info fw-bold" href="/cita/{{ $cita->id }}/edit">Editar cita</a>
        <br>
        <br>
        <form action="/cita/{{$cita->id}}" method="post">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" type="submit">Eliminar cita</button>
        </form>
    </div>

</x-plantilla>