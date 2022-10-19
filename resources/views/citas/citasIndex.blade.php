<x-plantilla titulo="Listado de Citas">

    <br>
    <div class="container-md md:table-auto table w-full bg-slate-800 rounded-md">
        <div class="container px-10 table-header-group content-center">
            <div class="table-row m-20">
                <div class="table-cell text-left text-white text-center">Fecha</div>
                <div class="table-cell text-left text-white text-center">Hora</div>
            </div>
        </div>
        @foreach($citas as $cita)
        <div class="table-header-group">
            <!-- <td>
                    <a href="/cita/{{ $cita->id }}">{{ $cita->id }}</a>
                </td> -->
            <div class="table-row">
                <div class="table-cell text-left text-white">
                    <a href="/cita/{{ $cita->id }}">{{ $cita->fecha }}</a>
                </div>
                <div class="table-cell text-left text-white">{{ $cita->hora }}</div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="container">
        <a type="button" class="btn btn-primary" href="/cita/create">Agendar cita</a>
    </div>

</x-plantilla>