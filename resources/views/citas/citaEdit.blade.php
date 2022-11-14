<x-plantilla nombrePagina="Editar cita" titulo="Editar Cita">
    <div class="mt-3 container">
        <a class="btn btn-outline-dark" href="/cita/{{ $cita->id }}">Volver</a>

        @if( $errors->any() )
            <div class="container mt-3 alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li class="container text-center text-sm-center fs-5 fw-semibold">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="/cita/{{ $cita->id }}" method="post">
            @csrf
            @method('PUT')
            <input type="hidden" name="id" value="{{ $cita['id'] }}">
            <div class="mt-3 row">
                <div class="col">
                    <label class="fs-4 fw-bold" for="fecha">Fecha: </label>
                    <input class="form-control" type="date" name="fecha" id="" value="{{ $cita['fecha'] }}">
                </div>
                <div class="col">
                    <label class="fs-4 fw-bold" for="hora">Hora: </label>
                    <input class="form-control" type="time" name="hora" id="" value="{{ $cita['hora'] }}">
                </div>
            </div>
            
            <div class="container my-3">
                <label class="mb-2 fs-4 fw-semibold" for="servicio">Servicios contratados</label>
                <ul class="list-group">
                    @foreach ($cita->servicios as $servicio)
                        <li class="mx-2 list-group-item list-group-item-dark fw-semibold w-50" value="{{ $servicio->id }}">
                            <input class="form-check-input me-1" type="checkbox" value="{{ $servicio->id }}" id="servicioCheckBox">
                            <label class="form-check-label" for="servicioCheckBox">{{ $servicio->nombre }}</label>
                        </li>
                    @endforeach
                </ul>
                <label class="my-3 fs-4 fw-semibold" for="servicio">Agregar servicio</label>
                <select class="w-50 form-select" name="servicios_id[]" multiple>
                    @foreach ($servicios as $servicio)
                        <option class="fw-semibold" value="{{ $servicio->id }}">{{ $servicio->nombre }}</option>
                    @endforeach
                </select>
            </div>

            <input class="btn btn-success" type="submit" value="Guardar cambios">
        </form>
    </div>
</x-plantilla>