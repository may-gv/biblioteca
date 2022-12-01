<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

    <title>BIBLIOTECA</title>
</head>

<body  background="{{asset('img/libro.jpg')}}">
<div>
    <nav class="navbar navbar-expand-lg bg-black">
        <div class="container-fluid">
          <a class="navbar-brand text-white" href="#">BIBLIOTECA MJ</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active text-white" aria-current="page" href="/principal">Principal</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href={{route('registro.create')}}>Registro Libros</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href={{route('registro.index')}}>Ver Libros</a>
              </li> 
              <li class="nav-item">
                <a class="nav-link text-white" href={{route('autores.create')}}>Registro Autores</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href={{route('autores.index')}}>Ver Autores</a>
              </li>  
            </ul>
          </div>
        </div>
      </nav></div>
      @yield('contenido')
      
    
      <!--PIE DE PAGINA--->
      <!--style="background-color: #f12368ea"--->
      <footer class="main-footer mt-5">
      <div class="alert alert-secondary text-center fw-bold fst-italic" role="alert" > 
        BIBLIOTECA MJ CopyRight ©  {{ date('D/M/Y') }}
      </div>
  </footer>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</body>
</html>


