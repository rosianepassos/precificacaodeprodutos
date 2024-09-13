<!--estende - atribui esse arquivo ao diretorio layouts e arquivo app. Herda de app. --> 
<!-- Tudo aqui será renderizado no template--> 
@extends('layouts.home')
<!--Barra de navegação-->
<!--Titulo do header--> 
@section('title')
Add Preço
@endsection
@section('nav')
@include('layouts.header')
@endsection
<!--Titulos da página--> 
@section('titulos')
<div class ="mt-5"> 
<h2> Add Preço</h2> 
<h1> Calcula precificação de produtos e serviços </h1> 
</div> 
@endsection 

<!--Conteúdo--> 
@section('conteudo')
<!--Conteudo com informações--> 
@endsection 

@section('produto')
<!--Produto--> 
@include('creates.produto')
@endsection


<!--rodapé--> 
@section('footer')
@include('layouts.footer')
@endsection
