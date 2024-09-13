
<!--cabeçalho--> 
@yield('nav')
<body class="font-sans antialiased dark:bg-black dark:text-white/50">


 <!--Conteúdos--> 

    <!--Titulos h1 e h2--> 
    <div class = "container text-center">
    @yield('titulos')
</div> 

<div class = "container-fluid"> 
        <!--Conteúdo da página--> 
@yield('conteudo')
</div> 

<div class = "container-fluid  text-center w-50  text-center mt-5 mb-5"> 

<div class = "containerr border border-rounded rounded-4  mt-3 mb-2 ps-3 pt-4  pb-1"> 
    <!--Produto--> 
@yield('produto')

</div>
</div> 
<br> 

<!--div footer--> 
<!--Rodapé--> 
@yield('footer')
<!--fim div footer--> 

    </body>
</html>
