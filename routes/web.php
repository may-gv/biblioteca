<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorVistas;
use App\Http\Controllers\ControladorBD;
use App\Http\Controllers\ControladorAutorBD;

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

Route::get('/Registro', [controladorVistas::class, 'viewRegistro'])->name('apodoRegis');

Route::get('/Autores', [controladorVistas::class, 'viewAutores'])->name('apodoAut');

Route::get('/Libros', [controladorVistas::class, 'showLibros'])->name('apodoLib');

Route::get('/ver_autores', [controladorVistas::class, 'showAutores'])->name('apodova');

//Route::post('RegistrarAutor',[controladorVistas::class,'validarAutor'])->name('apodoAut');

//Route::post('RegistrarLibro',[controladorVistas::class,'validarFormulario'])->name('Registrar');

//RUTAS PARA CONTROLADOR RESOURCE  LIBROS

//CREATE
Route::get('registro/create',[ControladorBD::class,'create'])->name('registro.create');

//STORE
Route::post('registro',[ControladorBD::class,'store'])->name('registro.store');

//INDEX
Route::get('registro',[ControladorBD::class,'index'])->name('registro.index');

//EDIT
Route::get('registro/{id}/edit',[ControladorBD::class,'edit'])->name('registro.edit');

//UPDATE
Route::put('registro/{id}',[ControladorBD::class,'update'])->name('registro.update');

//SHOW
Route::get('registro/{id}/show',[ControladorBD::class,'show'])->name('registro.show');

//DESTROY
Route::delete('registro/{id}',[ControladorBD::class,'destroy'])->name('registro.destroy');


//RUTAS PARA CONTROLADOR RESOURCE  AUTORES

//CREATE
Route::get('autores/create',[ControladorAutorBD::class,'create'])->name('autores.create');

//STORE
Route::post('autores',[ControladorAutorBD::class,'store'])->name('autores.store');

//INDEX
Route::get('autores',[ControladorAutorBD::class,'index'])->name('autores.index');

//EDIT
Route::get('autores/{id}/edit',[ControladorAutorBD::class,'edit'])->name('autores.edit');

//UPDATE
Route::put('autores/{id}',[ControladorAutorBD::class,'update'])->name('autores.update');

//SHOW
Route::get('autores/{id}/show',[ControladorAutorBD::class,'show'])->name('autores.show');

//DESTROY
Route::delete('autores/{id}',[ControladorAutorBD::class,'destroy'])->name('autores.destroy');

