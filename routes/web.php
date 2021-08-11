<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;

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
Route::get('/', HomeController::class);

/* segunda ruta */
Route::get('cursos' , [CursoController::class, 'index']);

/* tercera ruta */
Route::get('cursos/create', [CursoController::class, 'create']);

/* cuarta ruta: mandando una variable por la url llamada curso ala ruta cursos*/
Route::get('cursos/{curso}' , [CursoController::class, 'show']);



/* /*quinta ruta:podemos pasar mas de una variable a una url 
Route::get('cursos/{curso}/{categoria}', function ($curso,$categoria) {
    return"Bienvenido al curso $curso, de la categoria $categoria";
}); */

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
