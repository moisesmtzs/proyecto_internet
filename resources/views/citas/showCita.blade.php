<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil de Usuario</title>
</head>
<body>
    
    <h1>Detalles de la Cita</h1>
    <a href="/cita">Lista de citas</a>

    <h2>{{ $cita->fecha }}</h2>
    <h2>{{ $cita->hora }}</h2>
    
    <a href="/cita/{{$cita->id}}/edit">Editar cita</a>
    <br>
    <br>
    <form action="/cita/{{$cita->id}}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit">Eliminar cita</button>
    </form>

</body>
</html>