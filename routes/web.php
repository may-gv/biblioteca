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

Route::get('/registro', function () {
    return view('registro');
});*/
Route::get('/principal', [controladorVistas::class, 'viewPrincipal'])->name('apodoPrin');

Route::get('/registro', [controladorVistas::class, 'viewRegistro'])->name('apodoRegis');

Route::post('RegistrarLibro',[controladorVistas::class,'validarFormulario'])->name('Registrar');

