@include('layouts.header')
<body>
<!--Formulário de preenchimento--> 
<div class = "container-fluid w-50 text-center calculos"> 
<div class = "container formulario border border-rounded rounded-4 mt-4 mb-5 ps-5 pt-3"> 
<h2 class="mt-4 mb-1"> Realizar cálculos </h2> 

<form  class = "mt-3" method="POST" id= "formulario"  action="{{ route('aplicativo.show') }}">
 
@csrf
<!--Produto--> 
<label for="inputCustoDir" class="form-label">Produto:</label>
<input type="text" name= "nome_produto" placeholder=" nome_produto" value="{{ $nome_produto }} ">
<br> 

<!--Custos--> 
@include('creates.custos')


<div class = "position-relative"> 
<div class = "btnCalcular position-absolute start-50 translate-middle "> 
<!--Calcular--> 
<button type="submit" id="btnCalc" form="formulario" class=" btn_calcular  fw-semibold"> Calcular </button> 
<!--<button type="submit" id="btnSubmit" form="formulario" class=" btn_calcular  fw-semibold"> Calcular </button> -->
</div> 
</div> 

</form> 
</div> 
</div> 
@include('layouts.footer')

</body>

</html>