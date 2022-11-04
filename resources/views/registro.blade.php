@extends('plantilla')

@section('contenido')
@if(session()->has('Confirmacion'))
       {!!"<script>  Swal.fire(
         'Todo Correcto!',
         'Libro “xxxxxx” Guardado!',
         'success'
       ) </script> "!!}
    @endif

<div class="container mt-4 col-md-7 " style="background: rgba(51, 47, 50, 0.795)"> 
    <div class="card mb-5 fw-bold fst-italic " style="background: rgba(70, 63, 67, 0.822)"> 

    <div class="card-header text-center text-white fs-3">
        REGISTRAR LIBRO
    </div>
    @if($errors->any())

    @foreach($errors->all() as $error)


    @endforeach
@endif
        <div class="card-body">

            <form class="m-4" method="post" action="RegistrarLibro" >
                @csrf
                <div class="mb-3">
                    <label class="form-label text-white"> ISBN: </label>
                    <input type="text" class="form-control" name="txtIsbn" id="" value="{{old('txtIsbn')}}" placeholder="Ingresa el ISBN">
                    <p class="text-dark fst-italic fw-bold"> {{ $errors->first('txtIsbn') }}</p>
                </div>
                <div class="mb-3">
                    <label class="form-label text-white"> Titulo de Libro: </label>
                    <input type="text" class="form-control" name="txtTitulo" id="" value="{{old('txtTitulo')}}" placeholder="Titulo del libro">
                    <p class="text-dark fst-italic fw-bold"> {{ $errors->first('txtTitulo') }}</p>
                </div>
                <div class="mb-3">
                    <label class="form-label text-white"> Autor: </label>
                    <input type="text" class="form-control" name="txtAutor" id="" value="{{old('txtAutor')}}" placeholder="Autor del libro">
                    <p class="text-dark fst-italic fw-bold"> {{ $errors->first('txtAutor') }}</p>
                </div>
                <div class="mb-3">
                    <label class="form-label text-white"> Numero de Páginas: </label>
                    <input type="number" class="form-control" name="txtPaginas" id="" value="{{old('txtPaginas')}}" placeholder="Num. de Páginas">
                    <p class="text-dark fst-italic fw-bold"> {{ $errors->first('txtPaginas') }}</p>
                </div>
                <div class="mb-3">
                    <label class="form-label text-white"> Editorial : </label>
                    <input type="text" class="form-control" name="txtEditorial" id="" value="{{old('txtEditorial')}}" placeholder="Editorial">
                    <p class="text-dark fst-italic fw-bold"> {{ $errors->first('txtEditorial') }}</p>
                </div>
                <div class="mb-3">
                    <label class="form-label text-white"> Email de Editorial: </label>
                    <input type="email" class="form-control" name="txtEmail" id="" value="" placeholder="Ingresa el email de la editorial">
                    <p class="text-dark fst-italic fw-bold"> {{ $errors->first('txtEmail') }}</p>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-secondary">GUARDAR REGISTRO</button>

                </div>
                
                </div>
            </div>
    
        </div>
    </div>
</div>


@stop