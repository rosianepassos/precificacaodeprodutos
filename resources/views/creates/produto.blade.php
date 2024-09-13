<!--formulario produtos--> 
<div class=" produto"> 
<form  class = "mt-3" method="POST" id= "formulario"  action="{{   route('aplicativo.create')  }}">
@csrf
    <label for="inputProduto" class="form-label fw-bold"> Entre com um produto ou serviço:</label>
    <input type="text" class="inputProd" placeholder="Ex: Bolo" name="nome_produto" id="produto"> <br> 
 <button class="btn btn-danger mt-5 mb-5 w-25" type = "submit">Entrar</button>
  </form> 
</div> 
