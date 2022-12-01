<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Request\ValidadorAutores;
use DB;
use Carbon\Carbon;
class ControladorAutorBD extends Controller
{
    
    public function index()
    {
        $ConsultaAutor= DB::table('tb_autores')->get();
        return view('ver_autores',compact('ConsultaAutor'));
    }

    
    public function create()
    {
        return view('autores');
    }

    
    public function store(Request $request)
    {
        DB::table('tb_autores')->insert([
            "Nombre"=> $request->input('txtNombre'),
            "Fecha_nacimiento"=> $request->input('txtNacimiento'),
            "No_librospub"=> $request->input('txtLibros'),
            
            "created_at"=> Carbon::now(),
            "updated_at"=> Carbon::now()
        ]);
        $Nom = $request->input('txtNombre');
        return redirect('autores')->with('Confirmacion','abc')->with('txtNombre', $Nom);
    }

   
    public function show($id)
    {
        $consultaId= DB::table('tb_autores')->where('id',$id)->first();
        return view('Eliminar_autores', compact('consultaId'));
    }

    
    public function edit($id)
    {
        $consultaId= DB::table('tb_autores')->where('id',$id)->first();
        return view('Editar_autores', compact('consultaId'));
    }

    
    public function update(Request $request, $id)
    {
        DB::table('tb_autores')->where('id',$id)->update([
            "Nombre"=> $request->input('txtNombre'),
            "Fecha_nacimiento"=> $request->input('txtNacimiento'),
            "No_librospub"=> $request->input('txtLibros'),
            "updated_at"=> Carbon::now()
        ]);
        return redirect('autores')->with('Actualizar','abc');
    }

   
    public function destroy($id)
    {
        DB::table('tb_autores')->where('id',$id)->delete();
        return redirect('autores')->with('Eliminado','abc');
    }
}