<?php

namespace App\Http\Controllers;
use  Illuminate\Http\Request;
use App\Models\Produto;

//https://imasters.com.br/php/como-fazer-um-crud-no-laravel-do-zero-parte-2

class ProdutoController extends Controller {

public function indexShow(){

      return view ('aplicativo.show'); 
}

public function show(){
// Retorna resultados - view show
//  $totalCost = $product->costs->sum('amount');
 $nome_produto=$_POST['nome_produto'];
 $custo_direto = $_POST['custo_direto'];
 $custo_indireto = $_POST['custo_indireto'];
 $taxas=$_POST['taxas']; 
 $lucro=$_POST['lucro'];



 return view ('aplicativo.show', ['nome_produto'=>$nome_produto, 'custo_direto'=> $custo_direto, 
 'custo_indireto'=> $custo_indireto, 'taxas'=> $taxas,  'lucro'=> $lucro]);
}



}








   
















