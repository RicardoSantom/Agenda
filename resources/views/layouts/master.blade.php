<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>@yield('title', 'Aplicación Agenda')</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/cover/">

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('app.css') }}" rel="stylesheet">
    <!-- Enlace al archivo CSS de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style data-styled="active" data-styled-version="5.3.10"></style><style>.extraClassAspect { -webkit-transform:scaleX(1.33)!important; }	.extraClassCrop { -webkit-transform:scale(1.33)!important; }</style></head>
@yield('body')
<body class="text-center">
<div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
    @yield('header')
    <header class="masthead mb-auto">
        <div class="inner">
            <h3 class="masthead-brand">Agenda</h3>
            <nav class="nav nav-masthead justify-content-center">
                <a class="nav-link active" href="#">Inicio</a>
                <a class="nav-link" href="#">Añadir cliente</a>
                <a class="nav-link" href="#">Consultar cliente</a>
                <a class="nav-link" href="#">Borrar cliente</a>
                <a class="nav-link" href="#">Editar cliente</a>
                <a class="nav-link" href="#">Listar cliente</a>
            </nav>
        </div>
    </header>
    @yield('content')
    <main role="main" class="inner cover">
        <h1 class="cover-heading">Cover your page.</h1>
        <p class="lead">Cover is a one-page template for building simple and beautiful home pages. Download, edit the text, and add your own fullscreen background photo to make it your own.</p>
        <p class="lead">
            <a href="#" class="btn btn-lg btn-secondary">Learn more</a>
        </p>
    </main>
    @yield('footer')
    <footer class="mastfoot mt-auto">
        <div class="inner">
            <p>Apliación agenda por <a href="https://www.linkedin.com/feed/">Ricardo Santiago Tomé</a> para <a href="https://www.proconsi.com/">Proconsi, S.L©</a></p>
        </div>
    </footer>
</div>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<container id="my-app-container"><div style="position: absolute; top: 0px; z-index: 2147483647;"><div id="squareDiv" style="display: none;"></div><div></div></div></container></body></html>
