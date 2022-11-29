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

//Route::post('RegistrarAutor',[controladorVistas::class,'validarAutor'])->name('apodoAut');

//Route::post('RegistrarLibro',[controladorVistas::class,'validarFormulario'])->name('Registrar');

//RUTAS PARA CONTROLADOR RESOURCE  LIBROS

//CREATE
Route::get('registro/create',[controladorBD::class,'create'])->name('registro.create');

//STORE
Route::post('registro',[controladorBD::class,'store'])->name('registro.store');

//INDEX
Route::get('registro',[controladorBD::class,'index'])->name('registro.index');

//EDIT
Route::get('registro/{id}/edit',[controladorBD::class,'edit'])->name('registro.edit');

//UPDATE
Route::put('registro/{id}',[controladorBD::class,'update'])->name('registro.update');

//SHOW
Route::get('registro/{id}/show',[controladorBD::class,'show'])->name('registro.show');

//DESTROY
Route::delete('registro/{id}',[controladorBD::class,'destroy'])->name('registro.destroy');


//RUTAS PARA CONTROLADOR RESOURCE  AUTORES

//CREATE
Route::get('autores/create',[controladorBD::class,'create'])->name('autores.create');

//STORE
Route::post('autores',[controladorBD::class,'store'])->name('autores.store');

//INDEX
Route::get('autores',[controladorBD::class,'index'])->name('autores.index');

//EDIT
Route::get('autores/{id}/edit',[controladorBD::class,'edit'])->name('autores.edit');

//UPDATE
Route::put('autores/{id}',[controladorBD::class,'update'])->name('autores.update');

//SHOW
Route::get('autores/{id}/show',[controladorBD::class,'show'])->name('autores.show');

//DESTROY
Route::delete('autores/{id}',[controladorBD::class,'destroy'])->name('autores.destroy');

