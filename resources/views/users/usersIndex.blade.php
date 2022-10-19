<x-plantilla titulo="Listado de usuarios">
    <br>
    <br>
    <div class="container-md md:table-auto table w-full bg-slate-800 rounded-md">
        <table class="container table">
            <tr class="text-center text-white">
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
    </div>
    <div class="container">
        <a type="button" class="btn btn-primary" href="/user/create">Registrar usuario</a>
    </div>

</x-plantilla>