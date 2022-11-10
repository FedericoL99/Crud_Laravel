<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    <a href="{{route('productos.create')}}">Crear productos</a>
    <a href="{{route('descargar-pdf')}}">Generar listado productos</a>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Precio</th>
                <th>Opcion</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($productos as $producto)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$producto->nombre}}</td>
                    <td>{{$producto->description}}</td>
                    <td>{{$producto->precio}}</td>
                    <td>
                        <a href="{{route('productos.edit',$producto->id)}}">
                            <button type="submit">Editar</button>
                        </a>
                        <form action="{{route('productos.destroy',$producto->id)}}" method="post">
                            @method('DELETE')
                            @csrf
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
</body>
</html>