<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorVistas;

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
    return view('welcome');
});
*/
/*
Route::get('/principal', function () {
    return view('principal');
});
*/
/*Route::get('/autores', function () {
    return view('autores');
});*/
Route::get('/principal', [controladorVistas::class, 'viewPrincipal'])->name('apodoPrin');

Route::get('/registro', [controladorVistas::class, 'viewRegistro'])->name('apodoRegis');

Route::get('/autores', [controladorVistas::class, 'viewAutores'])->name('apodoAut');

Route::post('RegistrarAutor',[controladorVistas::class,'validarAutor'])->name('apodoAut');

Route::post('RegistrarLibro',[controladorVistas::class,'validarFormulario'])->name('Registrar');

