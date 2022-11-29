<x-plantilla nombrePagina="Agregar servicio" titulo="Nuevo servicio">

    <div class="mt-3 container">
        <a class="m-auto mb-3 p-auto btn btn-outline-dark" href="{{ route('servicio.index') }}">Regresar</a>
        
        @if ($errors->any())
            <div class="container mt-3 alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li class="text-center text-sm-center fs-5 fw-semibold">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="/servicio" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row w-50">
                <div class="col">
                    <label class="fs-6 fw-bold" for="nombre">Nombre del servicio: </label>
                    <input class="form-control" type="text" name="nombre" value="{{ old('nombre') }}">
                </div>
                <div class="col">
                    <label class="fs-6 fw-bold" for="precio">Precio del servicio: </label>
                    <input class="form-control" type="number" name="precio" value="{{ old('nombre') }}">
                </div>
            </div>
            <button class="mt-4 px-3 btn btn-dark" type="submit">Agregar</button>
        </form>

    </div>


</x-plantilla>