@extends('plantilla')

@section('contenido')

@if(session()->has('Actualizar'))
{!!"<script>  Swal.fire(
  'Correcto!',
  'Tu recuerdo se ha actualizado!',
  'success'
) </script> "!!}
@endif

@if(session()->has('Eliminado'))
{!!"<script>  Swal.fire(
  'Correcto!',
  'Tu recuerdo se ha Eliminado!',
  'success'
) </script> "!!}
@endif

<div class="container mt-4 col-md-7 " style="background: rgba(51, 47, 50, 0.795)"> 
    <div class="card mb-5 fw-bold fst-italic " style="background: rgba(70, 63, 67, 0.822)"> 

            <div class="card-header text-white text-center fs-2">
                 Autores Registrados
            </div>
    
            <div class="card-body">
                <table class="table text-white ">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Fecha de nacimiento</th>
                            <th scope="col">No. libros publicados:</th>
                            <th scope="col">Acciones:</th>

                        </tr>
                    </thead>
                    <tbody>
                            @forelse ($ConsultaAutor as $row)
                        <tr>
                            <th scope="row">{{$row->id}}</th>
                            <td>{{$row->Nombre}}</td>
                            <td>{{$row->Fecha_nacimiento}}</td>
                            <td>{{$row->No_librospub}}</td>
                            <td>
                                <a href="{{route('autores.edit',$row->id)}}" class="btn btn-primary">Actualizar</a>
                                <a href="{{route('autores.show',$row->id)}}" class="btn btn-success">Eliminar</a>
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