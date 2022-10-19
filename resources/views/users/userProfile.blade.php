<x-plantilla titulo="Editar Perfil">
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
</x-plantilla>