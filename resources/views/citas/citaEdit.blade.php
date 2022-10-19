<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar cita</title>
</head>
<body>
    <h1>Editar Cita</h1>
    <br>
    <a href="/cita/{{ $cita->id }}">Volver</a>

    <form action="/cita/{{ $cita->id }}" method="post">
        @csrf
        @method('PUT')
        <input type="hidden" name="id" value="{{$cita['id']}}">

        <label for="fecha">Fecha: </label>
        <input type="text" name="fecha" id="" value="{{$cita['fecha']}}">
        <br>

        <label for="hora">Hora: </label>
        <input type="text" name="hora" id="" value="{{$cita['hora']}}">
        <br>

        <input type="submit" value="Guardar cambios">
    </form>
</body>
</html>