<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
</head>
<body>
    <h1>Listado de usuarios</h1>
    <a href="/user/create">Registrar usuario</a>
    <br>
    <br>
    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Email</th>
            <th>Teléfono</th>
        </tr>
        @foreach($users as $user)
            <tr>
                <!-- <td>
                    <a href="/user/{{ $user->id }}">{{ $user->id }}</a>
                </td> -->
                <td>
                    <a href="/user/{{ $user->id }}">{{ $user->name }}</a>
                </td>
                <td>{{ $user->last_name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->phone }}</td>
            </tr>
        @endforeach
    </table>

    <ul>
    </ul>


</body>
</html>