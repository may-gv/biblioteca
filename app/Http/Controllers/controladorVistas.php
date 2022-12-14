<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpPaeser\Node\Stmt\Retutrn_;
use App\Http\Requests\validarLibro;
use App\Http\Requests\validadorAutores;



class controladorVistas extends Controller
{
    public function validarFormulario(validarLibro $req){

        $nom= $req-> input('txtTitulo');

        return redirect('registro')->with('Confirmacion','Datos enviados')->with('variable',$nom);
    }
    public function validarAutor(validadorAutores $req){

        return redirect('autores')->with('Enviado','Datos enviados');
    }

    

    public function viewPrincipal(){
        return view('principal');
    }

    public function viewRegistro(){
        return view('registro');
    }
    public function viewAutores(){
     return view('autores');
    }
  

    public function showLibros(){
        return view('libros');
    }

    public function showAutores(){
        return view('ver_autores');
    }
}

