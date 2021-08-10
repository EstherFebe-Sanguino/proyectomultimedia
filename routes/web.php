<?php

use Illuminate\Support\Facades\Route;

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
/* primera ruta la principal */
Route::get('/', function () {
   /* return view('welcome');*/
   return "Bienvenido a la pagina principal";
});

/* segunda ruta */
Route::get('cursos' , function () {
    return "Bienvenido a la pagina cursos";
});

/* tercera ruta */
Route::get('cursos/create', function () {
    return "En esta pagina podras crear un curso";
});

/* cuarta ruta: mandando una variable por la url llamada curso ala ruta cursos*/
Route::get('cursos/{curso}' , function ($curso) {
    return "Bienvenido al curso: $curso";
});

/*quinta ruta:podemos pasar mas de una variable a una url */
Route::get('cursos/{curso}/{categoria}', function ($curso,$categoria) {
    return"Bienvenido al curso $curso, de la categoria $categoria";
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
