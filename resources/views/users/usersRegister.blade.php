<x-plantilla titulo="Registrarse">

    <div class="mt-3 container">
        <a class="m-auto p-auto btn btn-primary" href="/user">Volver</a>
        <br>
        <br>
        <form class="container" action="/user" method="post">
            @csrf
            <div class="row">
                <div class="col">
                    <label for="name">Nombre: </label>
                    <input class="form-control" type="text" name="name" id=""/>
                </div>
                <div class="col">
                    <label for="last_name">Apellido: </label>
                    <input class="form-control" type="text" name="last_name" id=""/>
                </div>
                <div class=col">
                    <label for="email">Email: </label>
                    <input class="form-control" type="email" name="email" id=""/>
                </div>
                <div class="col">
                    <label for="phone">Teléfono: </label>
                    <input class="form-control" type="text" name="phone" id=""/>
                </div>
            </div>
            
            <button class="mt-4 px-3 btn btn-primary" type="submit">Enviar</button>
            
        </form>

    </div>

    
</x-plantilla>