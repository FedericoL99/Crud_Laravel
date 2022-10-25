<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar</title>
</head>
<body>
    <form action="{{route('productos.update',$productos->id)}}" method="POST">
        @method('PUT')
        @csrf
        <label>Nombre</label>
        <input id="nombre" name="nombre" type="text" value="{{$productos->id}}"><br>
        <label>Descripcion</label>
        <input id="description" name="description" type="text" value="{{$productos->description}}"><br>
        <label>Precio</label>
        <input name="precio" type="precio" value="{{$productos->precio}}"><br>
        <input type="submit" name="Enviar" value="Editar">
    </form>
</body>
</html>