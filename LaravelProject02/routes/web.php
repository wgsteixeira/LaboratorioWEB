<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContatosController;
use App\Http\Controllers\CursosController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoManagerController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('site.home');
})->name('site.home');

Route::get('/cursos', function () {
    return view('site.cursos');
})->name('site.cursos');

Route::get('/contatos', function () {
    return view('site.contatos');
})->name('site.contatos');

*/

/*Route::get('/',[HomeController::class,'index'])->name('site.home');

Route::get('/cursos', [CursosController::class, 'index'])->name('site.cursos');

Route::get('/contatos', [ContatosController::class, 'index'])->name('site.contatos');
*/

Route::get('/',[HomeController::class,'index'])->name('site.home');

Route::get('/cursos', [CursosController::class, 'index'])->name('site.cursos');

Route::get('/contatos', [ContatosController::class, 'index'])->name('site.contatos');
Route::post('/contatos', [ContatosController::class, 'store'])->name('site.contatos');

Route::resource('/cursosmanager', CursoManagerController::class);