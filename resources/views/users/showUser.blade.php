<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil de Usuario</title>
</head>
<body>
    
    <h1>Detalles del Usuario</h1>
    <a href="/user">Lista de usuarios</a>

    <h2>{{ $user->name }}</h2>
    <h2>{{ $user->last_name }}</h2>
    <h2>{{ $user->email }}</h2>
    <h2>{{ $user->phone }}</h2>
    
    <a href="/user/{{$user->id}}/edit">Editar usuario</a>
    <br>
    <br>
    <form action="/user/{{$user->id}}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit">Eliminar usuario</button>
    </form>
    <!--<form action="/user/{{$user->id}}/edit" method="get">
        @csrf
        <button type="submit">Editar usuario</button>
    </form>-->

</body>
</html>