@extends('plantilla')

@section('contenido')


<div class="container mt-4 col-md-7 " style="background: rgba(51, 47, 50, 0.795)"> 
    <div class="card text-center mb-5 fw-bold fst-italic " style="background: rgba(70, 63, 67, 0.822)"> 

    <div class="card-header text-white fs-3">
        NOTICIA LITERARIA
    </div>
    
    <div class="card" style="">
        <img src="{{asset('img/noticia.jpg')}}" class="card-img-top img-fluid" alt="...">
        <div class="card-body">
          <h2 class="card-title">Veinte mil leguas de viaje submarino</h2>
          <h4> El mítico comienzo de la obra de Julio Verne.</h4>
          <p class="card-text">¿Hablamos de imaginación en la literatura? Hablamos de Julio Verne. Jules Verne, a quien los lectores en español han bautizado —y traducido— como Julio Verne, practicó todos los géneros pero destacó en la narrativa: en este género combinó las aventuras con la fantasía, ejerció como pionero —en cierto modo— de la ciencia ficción, y dejó muchas historias de esas que marcan las primeras lecturas.</p>
          <a href="/registro" class="btn btn-primary">REGISTRAR LIBRO</a>
        </div>
      </div>
    </div>
  </div>
@endsection