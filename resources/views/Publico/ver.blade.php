<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>TextilExport</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
    <h1 class="page-header text-center">{{$producto->nombre}}</h1>
    <div class="card mb-3 mx-auto" style="max-width: 1000px;">
        <div class="row g-0">
            <div class="col-md-4">
                <img class="img-fluid rounded-start imagen" src="data:image/png;base64,{{ base64_encode($producto->imagen) }}" alt="" id="img">
            </div>
            <div class="col-md-8">
                <div class="card-body ">
                    <p class="text-justify">Descripcion: {{$producto->descripcion}}</p>
                    <p class="text-justify">Categoría: {{$producto->categoria}}</p>
                    <p class="text-justify">Precio: ${{$producto->precio}}</p>
                    <p class="text-justify">Existencias: {{$producto->existencias}}</p>
                    <a href="{{ url()->previous() }}" class="btn btn-dark">Regresar</a>
                </div>
            </div>
            
        </div>
    </div>
</div>
</body>
</html>