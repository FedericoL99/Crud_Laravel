<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('productos.store')}}" method="POST">
        @csrf
        <label>Nombre</label>
        <input id="nombre" name="nombre" type="text"><br>
        <label>Descripcion</label>
        <input id="description" name="description" type="text"><br>
        <label>Precio</label>
        <input name="precio" type="precio"><br>
        <input type="submit" name="Enviar">
    </form>
</body>
</html>