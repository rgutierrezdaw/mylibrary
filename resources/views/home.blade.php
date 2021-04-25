@extends('layouts.app')

@section('content')
<div class="container">
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link nav-link-4" href="{{route('mybooks', Auth::id())}}">Tus libros</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="column justify-content-around">

        <div class="col-md-12 row justify-content-around">
                <div class="row  col-md-5">
                    <h2>Bienvenid@ a Library</h2>
                </div>
                <div>
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                </div>
            <div class="col-md-3">{{ __('You are logged in!') }}</div>
        </div>
        <br><br>
        <div class="row justify-content-around">
            <h3>Lista de títulos disponibles:</h3>
            @if(isset($message))
            <p>{{$message}}</p>
            @endif
        </div>
        <br>
        <div class="row justify-content-center col-md-12">
            @if($books != null)
            <table class="table table-dark">
                <thead>
                  <tr>
                    <th scope="col">Titulo</th>
                    <th scope="col">Autor</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Año</th>
                    <th scope="col">Precio</th>
                    <th scope="col">AÑADE A TU LISTA!</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($books as $book )
                        <tr>
                            <td>{{$book->title}}</td>
                            <td>{{$book->author}}</td>
                            <td>{{substr($book->description,0, 40)}}...<a>Ver más</a></td>
                            <td>{{$book->year}}</td>
                            <td>{{$book->price}}</td>
                            <td><button type="submit" class="btn btn-outline-success"><a href = "{{route('add',$book->id )}}"  >Añadir</a></button></td>

                        </tr>
                    @endforeach
                </tbody>
              </table>
            @endif
        </div>
    </div>
</div>
@endsection
