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


//Paso numero 1 se hace la ruta **********************
//Paso numero 2 se va al controlador(en el primer caso PageController)
//Ruta raiz cuando se entra a la paguina mostrara la vista welcome

Route::get('/',[App\Http\Controllers\PageController::class,'posts']);
Route::get('blog/{post}',[App\Http\Controllers\PageController::class,'post'])->name('post');

//ruta por default
/*Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
