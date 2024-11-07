<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Útiles escolares</title>
</head>
<body>
    <h1>Utiles escolares</h1>
    @session('funciona')
    <h5>{{$value}}</h5>
    @endsession

    <div>
        <form method="POST" action="/enviar">
        @csrf
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre">
            <small>{{$errors->first('nombre')}}</small>
    
            <label for="marca">Marca</label>
            <input type="text" name="marca">
            <small>{{$errors->first('marca')}}</small>
    
            <label for="cantidad">Cantidad</label>
            <input type="text" name="cantidad">
            <small>{{$errors->first('cantidad')}}</small>
    
            <button type="submit">Guardar útiles</button>
        </form>

    </div>
</body>
</html>