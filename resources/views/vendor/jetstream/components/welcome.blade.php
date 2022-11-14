<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Dashboard</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
        <div>
            <x-jet-application-logo class="block h-12 w-auto" />
        </div>
    
        <div class="mt-8 text-2xl fw-bold">Página de Inicio</div>
        <a type="button" class="mt-3 flex items-center text-sm font-semibold text-indigo-700" href="/cita">Navegar a crud de citas</a>
    </div>
    
</body>
</html>
