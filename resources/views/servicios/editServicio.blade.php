<x-plantilla nombrePagina="Actualizar servicio" titulo="Editar servicio">
    <div class="mt-3 container">
        <a class="my-3 btn btn-outline-dark" href="/servicio/{{ $servicio->id }}">Volver</a>
        @if( $errors->any() )
            <div class="container mt-3 alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li class="container text-center text-sm-center fs-5 fw-semibold">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="/servicio/{{ $servicio->id }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <input type="hidden" name="id" value="{{ $servicio['id'] }}">
            <div class="row w-50">
                <div class="col">
                    <label class="fs-6 fw-bold" for="nombre">Nombre del servicio: </label>
                    <input class="form-control" type="text" name="nombre" value="{{ $servicio['nombre'] }}">
                </div>
                <div class="col">
                    <label class="fs-6 fw-bold" for="precio">Precio del servicio: </label>
                    <input class="form-control" type="number" name="precio" value="{{ $servicio['precio'] }}">
                </div>
            </div>
            <br>
            <div class="text-center container-md w-75 rounded-md md-mx-5 md-my-3">
                @foreach ($servicio->archivos as $archivo)
                    {{-- <a href="{{ route('downloadFile'), $archivo }}" class="text-center text-white fs-5 my-4">{{ $archivo->nombre_original }}</a> --}}
                    <img id="img" src="{{ \Storage::url($archivo->ubicacion) }}" class="img-fluid rounded mx-auto d-block w-25"/>
                    {{-- <input class="my-2 btn btn-dark" type="submit" href="" value="Eliminar archivo"> --}}
                @endforeach
            </div>
            <input class="form-control w-25" type="file" name="archivo" id="">
            <input class="my-2 btn btn-success" type="submit" value="Guardar cambios">
        </form>

    </div>

</x-plantilla>