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
        <table class="table table-striped-columns container-md md:table-auto w-50 bg-slate-800 rounded-md md-mx-5">

            <thead class="text-center">
                <tr>
                    <th class="text-white fs-5">Servicios</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="fw-light text-white">Aqui van los detalles de los servicios en la cita (Relacion de N:M)</td>
                </tr>
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