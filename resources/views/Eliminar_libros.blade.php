
@extends('plantilla')

@section('contenido')


<h1 class="display-1 mt-4 mb-4  text-center"> </h1>



        <div class="container col-md-6" >

        <h1 class="display- text-center text-white"> Confirma!</h1>

        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>¿SEGURO QUE VAS A ELIMINAR EL LIBRO?</strong> 
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>

        <form class="m-4" method="post" action="{{route('registro.destroy',$consultaId->idLibro)}}">
            @csrf

            @method('delete')

            <div class="card text-center">
                
                <div class="card-header">
                </div>
                <div class="card-body">
                <h5 class="card-title">{{$consultaId->titulo}}</h5>
                
                
                </div>
                <div class="card-footer text-muted">
                    <button type="submit" class="btn btn-primary">Si, eliminalo</button>
                    <a href="{{route('registro.index',$consultaId->idLibro)}}" class="btn btn-success">No, regresame</a>
                </div>
            </div>
        </form>
            <br>

        </div>


@stop