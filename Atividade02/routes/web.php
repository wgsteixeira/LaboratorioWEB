<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContatosController;
use App\Http\Controllers\CursosController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoManagerController;
use App\Http\Controllers\ListaController;


Route::get('/',[HomeController::class,'index'])->name('site.home');

Route::get('/cursos', [CursosController::class, 'index'])->name('site.cursos');

Route::get('/contatos', [ContatosController::class, 'index'])->name('site.contatos');
Route::post('/contatos', [ContatosController::class, 'store'])->name('site.contatos');

Route::resource('/cursosmanager', CursoManagerController::class);

Route::get('/lista', [ListaController::class, 'index'])->name('site.lista');