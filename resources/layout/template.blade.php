<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('css/alertify.core.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css/alertify.default.css')}}" rel="stylesheet" type="text/css"/>
    <script src="{{asset('js/jquery-1.12.0.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/alertify.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/jquery.dataTables.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/dataTables.bootstrap.min.js')}}" type="text/javascript"></script>
</head>
<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" 
                    data-toggle="collapse" data-target="#navbar" 
                    aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Desplegar navegacion</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
              <a class="navbar-brand" href="#">Ejemplo MVC</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Inicio</a></li> 
                <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" 
                   role="button" aria-haspopup="true" 
                   aria-expanded="false">Libros<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="/Libros/create">Registrar libro</a></li>
                  <li><a href="/Libros">Ver lista de libros</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" 
                   role="button" aria-haspopup="true" 
                   aria-expanded="false">Autores <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="{{route('autores.create')}}">Registrar autor</a></li>
                  <li><a href="#">Ver lista de autores</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" 
                   role="button" aria-haspopup="true" 
                   aria-expanded="false">Generos<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Registrar genero</a></li>
                  <li><a href="#">Ver lista de generos</a></li>
                </ul>
              </li>       
                <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" 
                   role="button" aria-haspopup="true" 
                   aria-expanded="false">Editoriales<span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="/Editoriales/create">Registrar editorial</a></li>
                  <li><a href="/Editoriales">Ver lista de editoriales</a></li>
                </ul>
              </li>

            </ul>
            <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">() <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="/Usuarios/logout">Cerrar sesion</a></li>
                  
                </ul>
              </li>
            </ul>
  
            
          </div>
        </div>
      </nav>

<div class="container">
            <div class="row">
                <h3>@yield('title')</h3>
            </div>
            <div class="row">
                @yield('content')
            </div>                    
        </div> 
<body>
    </html>