<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{$nombrePagina}}</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <h1 class="navbar-brand text-2xl font-bold leading-7 text-white sm:truncate sm:text-3xl sm:tracking-tight dark:text-white mb-50">{{ $titulo }}</h1>
                <div class="navbar-collapse" id="navbarNavDarkDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Menú</a>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a class="dropdown-item" href="/cita">Inicio</a></li>
                                <li><a class="dropdown-item" href="/user/profile">Perfil</a></li>
                                <li><a class="dropdown-item" href="{{ route('dashboard') }}">Dashboard</a></li>
                                {{-- @if ($user->admin)
                                    <li><a class="dropdown-item" href="{{ route('servicio.index') }}">Ver servicios</a></li>
                                @endif --}}
                                <form method="POST" action="{{ route('logout') }}" x-data>
                                    @csrf
                                    <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();" role="button">Log Out</a></li>
                                </form>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        {{ $slot }}

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        @livewireScripts

    </body>
</html>