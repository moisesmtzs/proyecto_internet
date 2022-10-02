<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar perfil</title>
</head>
<body>
    <h1>Editar Perfil</h1>
    <br>
    <a href="/user/{{ $user->id }}">Volver</a>

    <form action="/user/{{ $user->id }}" method="post">
        @csrf
        @method('PUT')
        <input type="hidden" name="id" value="{{$user['id']}}">

        <label for="name">Nombre: </label>
        <input type="text" name="name" id="" value="{{$user['name']}}">
        <br>

        <label for="last_name">Apellido: </label>
        <input type="text" name="last_name" id="" value="{{$user['last_name']}}">
        <br>

        <label for="email">Email: </label>
        <input type="email" name="email" id="" value="{{$user['email']}}">
        <br>

        <label for="phone">Teléfono: </label>
        <input type="text" name="phone" id="" value="{{$user['phone']}}">
        <br>

        <input type="submit" value="Guardar cambios">
    </form>
</body>
</html>