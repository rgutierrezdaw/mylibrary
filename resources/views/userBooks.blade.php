@extends('layouts.app')

@section('content')
<div class="container">
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link nav-link-4" href="{{route('home')}}">Home</a>
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
            <h3>Tus libros:</h3>
            @if(isset($message))
            <p>{{$message}}</p>
            @endif
        </div>
        <br>
        <div class="row justify-content-center col-md-12">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Libro</th>
                        <th scope="col">Fecha de adquisición</th>
                        <th scope="col">Opciones</th>
                    </tr>
                </thead>
                <tbody>
            @if($books != null)
                @foreach ($books as $book )
                <tr>
                    <th>{{$book->title}}</th>
                    <th>{{$book->created_at}}</th>
                    <th><button type="submit" class="btn btn-outline-success"><a href = "{{route('dropBook', $book->id)}}">Eliminar</a></button></th>
                </tr>
                @endforeach
            @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
