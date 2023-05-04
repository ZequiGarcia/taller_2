<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</head>
<body class="container">
    <div class="container">
        <h1 class="page-header text-center">TextilExport</h1>
        <div class="row">
            @foreach ($productos as  $producto)
            
        <div class="col-sm-6 col-md-4 text-center" >
            <div class="card" style="margin-top:20px;" id="targeta">
                <img class="card-img-top"  src="data:image/png;base64,{{ base64_encode($producto->imagen) }}" alt="no sirve" id="img" width="100px" height="300px" >
                <div class="card-body">
                    <h2 class="card-title">{{$producto->nombre}}</h2>
                    <p class="card-text">Precio: ${{$producto->precio}}</p>
                    <p class="card-text">Categoria: {{$producto->categoria}}</p>
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <a href="{{route('publico.show', $producto->codigo)}}" class="btn btn-dark" >Ver Producto</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        </div>
    </div>
    </div>
</body>
</html>