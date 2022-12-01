@extends('plantilla')

@section('contenido')



<div class="container mt-4 col-md-7 " style="background: rgba(51, 47, 50, 0.795)"> 
    <div class="card mb-5 fw-bold fst-italic " style="background: rgba(70, 63, 67, 0.822)"> 

    <div class="card-header text-center text-white fs-3">
        REGISTRAR AUTOR
    </div>
    @if($errors->any())

    @foreach($errors->all() as $error)


    @endforeach
@endif
        <div class="card-body">

            <form class="m-4" method="post" action="{{route('autores.store')}}" >
                @csrf
                <div class="mb-3">
                    <label class="form-label text-white"> Nombre Completo: </label>
                    <input type="text" class="form-control" name="txtNombre" id="" value="{{old('txtNombre')}}" placeholder="Ingresa el nombre completo">
                    <p class="text-dark fst-italic fw-bold"> {{ $errors->first('txtNombre') }}</p>
                </div>
                <div class="mb-3">
                    <label class="form-label text-white"> Fecha de Nacimiento: </label>
                    <input type="date" class="form-control" name="txtNacimiento" id="" value="{{old('txtNacimiento')}}" placeholder="Fecha de nacimiento">
                    <p class="text-dark fst-italic fw-bold"> {{ $errors->first('txtNacimiento') }}</p>
                </div>
                <div class="mb-3">
                    <label class="form-label text-white"> No. Libros publicados: </label>
                    <input type="text" class="form-control" name="txtLibros" id="" value="{{old('txtLibros')}}" placeholder="No. libros publicados">
                    <p class="text-dark fst-italic fw-bold"> {{ $errors->first('txtLibros') }}</p>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-secondary" name="guardarAutor">GUARDAR AUTOR</button>

                </div>
                
                </div>
            </div>
    
        </div>
    </div>
</div>


@stop