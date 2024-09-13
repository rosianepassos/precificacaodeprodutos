<!DOCTYPE html>
<!--Layout padrão--> 
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>@yield('title') </title>
        <!--Importa bootstrap--> 
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">-->
    @vite('resources/js/app.js')
        <!-- Fonts -->

        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    </head>

    <div class = "container-fluid mt-0 w-100"> 
<header>
<nav class="navbar navbar-expand-lg rounded-bottom rounded-1 ">
  <div class="container-fluid">
    <a class="navbar-brand text-light" href="#">Bem-Vindos!!!</a>
    
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active text-light" aria-current="page" href="{{ route('aplicativo.index') }}">Inicio</a>
        </li>
        <!--<li class="nav-item">
          <a class="nav-link" aria-current="page" href="#">Imprimir</a>
        </li> --> 
        <li class="nav-item">
          <a class="nav-link" href="#">Sair</a>
        </li>
      </ul>
  
  </div>
</nav>
</header>
</div> 