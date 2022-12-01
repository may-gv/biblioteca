<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Request\validarLibro;
use DB;
use Carbon\Carbon;

class ControladorBD extends Controller
{
 
    public function index()
    {
        $ConsultaLibros= DB::table('tb_libros')->get();
        return view('libros',compact('ConsultaLibros'));
    }

    public function create()
    {
        $ConsultaAutores = DB::table('tb_autores')->get();
        return view('registro',compact('ConsultaAutores'));
    }

    
    public function store(Request $request)
    {
        DB::table('tb_libros')->insert([
            "isbn" => $request->input('txtIsbn'),
            "titulo" => $request->input('txtTitulo'),
            "id_Autor"=> $request->input('txtAutor'),
            "numeropag" => $request->input('txtPaginas'),
            "editorial" => $request->input('txtEditorial'),
            "email" => $request->input('txtEmail'),
            
            "created_at"=> Carbon::now(),
            "updated_at"=> Carbon::now()
        ]);
        return redirect('registro')->with('Confirmacion','abc');
    }

    public function show($id)
    {
        $consultaId= DB::table('tb_libros')->where('idLibro',$id)->first();
        return view('Eliminar_libros', compact('consultaId'));
    }


    public function edit($id)
    {
        $consultaId= DB::table('tb_libros')->where('idLibro',$id)->first();
        $ConsultaAutores = DB::table('tb_autores')->get();
        return view('Editar_libros', compact('consultaId','ConsultaAutores'));
    }

    public function update(Request $request, $id)
    {
        DB::table('tb_libros')->where('idLibro',$id)->update([
            "isbn" => $request->input('txtIsbn'),
            "titulo" => $request->input('txtTitulo'),
            "id_Autor"=> $request->input('txtAutor'),
            "numeropag" => $request->input('txtPaginas'),
            "editorial" => $request->input('txtEditorial'),
            "email" => $request->input('txtEmail'),
            "updated_at"=> Carbon::now()
        ]);
        $ConsultaAutores = DB::table('tb_autores')->get();
        return redirect('registro')->with('Actualizar','abc',compact('ConsultaAutores'));
    }

    public function destroy($id)
    {
        DB::table('tb_libros')->where('idLibro',$id)->delete();
        return redirect('registro')->with('Eliminado','abc');
    }
}
