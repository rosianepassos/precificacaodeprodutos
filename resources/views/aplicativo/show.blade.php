@include('layouts.header')
<body>
<div class = "container-fluid w-100 pt-4"> 
    <h3 class="text-center">Resultado <h3> 

<div class = "container  mt-4 text-center bg-success text-white pt-2 pb-2"> 
<!--Produto----> 
{{ $nome_produto }}
</div>

<div class = "codPhp container mb-2 mt-3">  
<?php 
   $pv = $_POST; 
   $despesas= $_POST; 
   $despesas = $custo_direto + $custo_indireto; 
   echo("<h5>"."Despesas total:"."</h5>"."<p>".number_format( $despesas,2,'.')."</p>");
   $pv= $despesas /( 1-($taxas)-$lucro);
   echo("<h5>"."O preço de venda para obter sua margem de lucro pretendida deve ser:"."</h5>". "<p>"."R$". number_format($pv,2,'.')."</p>"); 
?> 
</div> 


<br><br> <br> <br> <br>

<!--<div class = "container text-center"> 
    <button type=" submit" class = "btn btn-danger  mt-3 mb-5 ms-5"> Imprimir </button> 
</div> -->

<br><br><br><br>
</div> 
@include('layouts.footer')
</body>
</html>