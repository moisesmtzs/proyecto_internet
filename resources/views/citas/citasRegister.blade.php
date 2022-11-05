<x-plantilla titulo="Agendar cita">

    <div class="mt-3 container">
        <a class="m-auto p-auto btn btn-primary" href="/cita">Regresar</a>
        <br>
        <br>

        @if( $errors->any() )
            <div class="container mt-3 alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li class="text-center text-sm-center fs-5 fw-semibold">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="/cita" method="post">
            @csrf
            <div class="row">
                <div class="col">
                    <label for="fecha">Fecha: </label>
                    <input class="form-control" type="date" name="fecha" value="{{ old('fecha')}}" id="">

                </div>
                <div class="col">
                    <label for="hora">Hora: </label>
                    <input class="form-control" type="time" name="hora" value="{{ old('hora')}}" id="">

                </div>
                <div>
                    <button class="mt-4 px-3 btn btn-primary" type="submit">Enviar</button>
                </div>
            </div>
        </form>

    </div>
    
</x-plantilla>