<x-plantilla titulo="Editar Cita">
    <div class="mt-3 container">
        <a class="btn btn-primary" href="/cita/{{ $cita->id }}">Volver</a>
    
        <form action="/cita/{{ $cita->id }}" method="post">
            @csrf
            @method('PUT')
            <input type="hidden" name="id" value="{{$cita['id']}}">
            <div class="px-80">
                <label for="fecha">Fecha: </label>
                <input class="form-control" type="date" name="fecha" id="" value="{{ $cita['fecha'] }}">
            </div>
            <br>
    
            <label for="hora">Hora: </label>
            <input class="form-control" type="time" name="hora" id="" value="{{ $cita['hora'] }}">
            <br>
    
            <input class="btn btn-primary" type="submit" value="Guardar cambios">
        </form>
    </div>
</x-plantilla>