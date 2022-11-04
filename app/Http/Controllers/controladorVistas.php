<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\validarLibro;

class controladorVistas extends Controller
{
    public function validarFormulario(validarLibro $req){
        return redirect('registro')->with('Confirmacion','Datos enviados');
    }
    public function viewPrincipal(){
        return view('principal');
    }

    public function viewRegistro(){
        return view('registro');
    }
}
