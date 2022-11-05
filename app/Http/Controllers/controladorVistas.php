<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpPaeser\Node\Stmt\Retutrn_;
use App\Http\Requests\validarLibro;


class controladorVistas extends Controller
{
    public function validarFormulario(validarLibro $req){

        $nom= $req-> input('txtTitulo');

        return redirect('registro')->with('Confirmacion','Datos enviados')->with('variable',$nom);
    }

    public function viewPrincipal(){
        return view('principal');
    }

    public function viewRegistro(){
        return view('registro');
    }
  
}

