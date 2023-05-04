<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
    <div class="row">
        <div class=" col-md-7">
            @if ($errors->all())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $err)
                            <li>{{$err}}</li>
                        @endforeach
                    </ul>
                </div>
                
            @endif
            <form method="POST" action="{{ route('productos.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="codigo">Código:</label>
                    <input type="text" name="codigo">
                </div>
                <div class="form-group">
                    <label for="nombre">Nombre:</label>
                    <input type="text" name="nombre">
                </div>
                <div class="form-group">
                    <label for="descripcion">Descripción:</label>
                    <input name="descripcion" type="text">
                </div>
                <div class="form-group">
                    <label for="imagen">Imagen:</label>
                    <input type="file" name="imagen" id="imagen">
                </div>
                <div class="form-group">
                    <label for="categoria">Categoría:</label>
                    <select name="categoria" id="categoria">
                        @foreach ($categorias as $categoria)
                        <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="precio">Precio:</label>
                    <input type="number" name="precio">
                </div>
                <div class="form-group">
                    <label for="existencias">Existencias:</label>
                    <input type="number" name="existencias">
                </div>
                <input type="submit" class="btn btn-info" value="Guardar" name="Guardar">
                <a class="btn btn-danger" href="#">Cancelar</a>
            </form>
            
            
        </div>
    </div>
</body>
</html>