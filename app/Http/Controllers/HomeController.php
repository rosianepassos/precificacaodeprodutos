<?php

namespace App\Http\Controllers;
use  Illuminate\Http\Request;


 class HomeController extends Controller { 

    public function index()
    {
        // Carregar a VIEW - Retorna Home
        return view('aplicativo.index');
    }
       
    public function create()
    {
        // Carregar a VIEW - Retorna create 
        $nome_produto=$_POST['nome_produto'];
        return view ('aplicativo.create', ['nome_produto'=>$nome_produto]);
    }

  




}