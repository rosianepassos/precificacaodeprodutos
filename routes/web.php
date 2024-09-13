<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\CustoController;


/*Route::get('/', function () {
    return view('welcome');

    });*/
 //Home e input produto 
 Route::get('/', [HomeController::class, 'index'])->name('aplicativo.index');
 //Create e mostra produto em um input 
 Route::post('/create', [HomeController::class, 'create'])->name('aplicativo.create');
 //Pagina com os resultados 
 Route::get('/show', [ProdutoController::class, 'indexShow'])->name('aplicativo.show'); 
 //Ver produto e resultados 
 Route::post('/show', [ProdutoController::class, 'show'])->name('aplicativo.show');                                                






