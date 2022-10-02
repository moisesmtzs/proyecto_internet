<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Usuario</title>
</head>
<body>

    <h1>Registrarse</h1>
    <a href="/user">Volver</a>
    <br>
    <br>
    <form action="/user" method="post">
        @csrf

        <label for="name">Nombre: </label>
        <input type="text" name="name" id="">
        <br>

        <label for="last_name">Apellido: </label>
        <input type="text" name="last_name" id="">
        <br>
        
        <label for="email">Email: </label>
        <input type="email" name="email" id="">
        <br>
        
        <label for="phone">Teléfono: </label>
        <input type="text" name="phone" id="">
        <br>
        
        <input type="submit" value="Enviar">
        
    </form>
    
</body>
</html>