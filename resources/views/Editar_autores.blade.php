@extends('plantilla')

@section('contenido')

   

    <div class="container mt-5 col-md-6"> 

    <h1 class="display-2 text-center mb-5 fst-italic text-white"> Actualizar Autor</h1>
    
    @if($errors->any())

        @foreach($errors->all() as $error)

            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong> {{ $error }} </strong> 
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

        @endforeach
    @endif

        <div class="card text-center text-black mb-5 fw-bold">

            <div class="card-header text-center fw-italic">
                Autor
            </div>

            <div class="card-body">

                <form class="m-4" method="post" action="{{route('autores.update',$consultaId->id)}}">

                    @csrf
                    

                    <!--- Disfrazar de post para pasar la ruta --->
                    {!!method_field('PUT')!!}
                    
                    <div class="mb-3">
                        <label class="form-label text-white"> Nombre Completo: </label>
                        <input type="text" class="form-control" name="txtNombre" id="" value="{{$consultaId->Nombre}}" placeholder="Ingresa el nombre completo">
                        <p class="text-dark fst-italic fw-bold"> {{ $errors->first('txtNombre') }}</p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-white"> Fecha de Nacimiento: </label>
                        <input type="date" class="form-control" name="txtNacimiento" id="" value="{{$consultaId->Fecha_nacimiento}}" placeholder="Fecha de nacimiento">
                        <p class="text-dark fst-italic fw-bold"> {{ $errors->first('txtNacimiento') }}</p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-white"> No. Libros publicados: </label>
                        <input type="text" class="form-control" name="txtLibros" id="" value="{{$consultaId->No_librospub}}" placeholder="No. libros publicados">
                        <p class="text-dark fst-italic fw-bold"> {{ $errors->first('txtLibros') }}</p>
                    </div>
            <div class="card-footer">

                <button type="submit" class="btn btn-primary">Actualizar Autor</button>
            </form>

            </div>

        </div>

    </div>

@stop