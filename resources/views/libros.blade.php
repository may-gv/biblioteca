@extends('plantilla')

@section('contenido')

@if(session()->has('Actualizar'))
{!!"<script>  Swal.fire(
  'Correcto!',
  'Tu libro se ha actualizado!',
  'success'
) </script> "!!}
@endif

@if(session()->has('Eliminado'))
{!!"<script>  Swal.fire(
  'Correcto!',
  'Tu libro se ha Eliminado!',
  'success'
) </script> "!!}
@endif

<div class="container mt-4 col-md-7 " style="background: rgba(51, 47, 50, 0.795)"> 
    <div class="card mb-5 fw-bold fst-italic " style="background: rgba(70, 63, 67, 0.822)"> 

            <div class="card-header text-white text-center fs-2">
                 Libros Registrados
            </div>
    
            <div class="card-body">
                <table class="table text-white ">
                    <thead>
                        <tr>
                            <th scope="col">#id:</th>
                            <th scope="col">Autor:</th>
                            <th scope="col">ISBN:</th>
                            <th scope="col">Titulo:</th>
                            <th scope="col">Páginas:</th>
                            <th scope="col">Editorial:</th>
                            <th scope="col">Correo:</th>
                            <th scope="col"></th>
                            <th scope="col"></th>

                        </tr>
                    </thead>
                    <tbody>
                            @forelse ($ConsultaLibros as $con)
                        <tr>
                            <th scope="row">{{$con->idLibro}}</th>
                            <td>{{$con->id_Autor}}</td>
                            <td>{{$con->isbn}}</td>
                            <td>{{$con->titulo}}</td>
                            <td>{{$con->numeropag}}</td>
                            <td>{{$con->editorial}}</td>
                            <td>{{$con->email}}</td>
                            <td>
                                <a href="{{route('registro.edit',$con->idLibro)}}" class="btn btn-primary">Actualizar</a>
                            </td>
                            <td>
                                <a href="{{route('registro.show',$con->idLibro)}}" class="btn btn-success">Eliminar</a>
                            </td>
                        </tr>
                     @empty
                        <p>No hay registros</p>
                        @endforelse
                    </tbody>
                    
                </table>
            </div>
    </div>
</div>
    
@stop