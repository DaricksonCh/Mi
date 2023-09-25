@extends('layouts.app-master')

@section('content')

  @auth
  @foreach ($posts as $post)
    <div class="container">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card mb-4">
            <div class="card-header">
              <h3>{{auth()->user()->name}}</h3>
              Nombre del Usuario
            </div>
            <div class="card-body">
              <h5 class="card-title">{{$post->title}}</h5>
              <p class="card-text">{{$post->content}}</p>
              <img src="{{asset('storage').'/'.$post->photo}}" alt="" class="img-fluid img-thumbnail" width="500px">
            </div>
            <!-- Aquí puedes agregar botones como "Me gusta" o "Comentar" si lo deseas -->
          </div>
        </div>
      </div>
    </div>
  @endforeach
  
  @endauth
  @guest
    <p>Para ver el contenido <a href="/login">iniciar sesion </a></p>
  @endguest
@endsection
