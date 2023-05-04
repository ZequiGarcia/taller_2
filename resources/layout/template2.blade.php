<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <h1>Titulo de la pagina</h1>
    </header>
    <nav>
        <ul>
            <li><a href="/editoriales">Ver editoriales</a></li>
            <li><a href="/editoriales/create">Crear editorial</a></li>
            <li><a href="/editoriales/details/1">Ver detalle</a></li>
        </ul>
    </nav>
    <section>
        @yield('content')
    </section>
    <footer>
        <p>Este es el footer de la pagina</p>
    </footer>
</body>
</html>