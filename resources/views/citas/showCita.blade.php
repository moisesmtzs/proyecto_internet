<x-plantilla titulo="Detalles de la cita">
    
    <div class="container mt-3">
        <a class="btn btn-primary" href="/cita">Volver a la lista de citas</a>

        <div class="container my-5 md-mx-5">
            <h4 class="text-dark">Fecha de la cita: {{ $cita->fecha }}</h4>
            <h4 class="text-dark">Hora de la cita: {{ $cita->hora }}</h4>
        </div>
        
        <br>
        <a class="btn btn-info" href="/cita/{{ $cita->id }}/edit">Editar cita</a>
        <br>
        <br>
        <form action="/cita/{{$cita->id}}" method="post">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" type="submit">Eliminar cita</button>
        </form>
    </div>

</x-plantilla>