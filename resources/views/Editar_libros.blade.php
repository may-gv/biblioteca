@extends('plantilla')

@section('contenido')

   

    <div class="container mt-5 col-md-6"> 

    <h1 class="display-2 text-center mb-5 fst-italic text-white"> Actualizar Libro</h1>
    
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
                Libro
            </div>

            <div class="card-body">

                <form class="m-4" method="post" action="{{route('registro.update',$consultaId->idLibro)}}">

                    @csrf
                    

                    <!--- Disfrazar de post para pasar la ruta --->
                    {!!method_field('PUT')!!}
                    
                    <div class="mb-3">
                        <label class="form-label text-white"> ISBN: </label>
                        <input type="text" class="form-control" name="txtIsbn" id="" value="{{$consultaId->isbn}}" placeholder="Ingresa el ISBN">
                        <p class="text-dark fst-italic fw-bold"> {{ $errors->first('txtIsbn') }}</p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-white"> Titulo de Libro: </label>
                        <input type="text" class="form-control" name="txtTitulo" id="" value="{{$consultaId->titulo}}" placeholder="Titulo del libro">
                        <p class="text-dark fst-italic fw-bold"> {{ $errors->first('txtTitulo') }}</p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-white fw-semibold"> Autor: </label>
                        <select name="txtAutor" id="unos" class="form-control" style="background: #d3cbe4;" >
                            
                            <option selected disabled="disabled" value="" style="background: #d3cbe4">Selecciona Autor:</option>
                                @foreach ($ConsultaAutores as $autor)
                                <option value="{{$autor->id}}">{{$autor->Nombre}}</option>
                                @endforeach
                        </select>
                        
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-white"> Numero de Páginas: </label>
                        <input type="number" class="form-control" name="txtPaginas" id="" value="{{$consultaId->numeropag}}" placeholder="Num. de Páginas">
                        <p class="text-dark fst-italic fw-bold"> {{ $errors->first('txtPaginas') }}</p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-white"> Editorial : </label>
                        <input type="text" class="form-control" name="txtEditorial" id="" value="{{$consultaId->editorial}}" placeholder="Editorial">
                        <p class="text-dark fst-italic fw-bold"> {{ $errors->first('txtEditorial') }}</p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-white"> Email de Editorial: </label>
                        <input type="email" class="form-control" name="txtEmail" id="" value="{{$consultaId->email}}" placeholder="Ingresa el email de la editorial">
                        <p class="text-dark fst-italic fw-bold"> {{ $errors->first('txtEmail') }}</p>
                    </div>
            <div class="card-footer">

                <button type="submit" class="btn btn-primary">Actualizar Libro</button>
            </form>

            </div>

        </div>

    </div>

@stop