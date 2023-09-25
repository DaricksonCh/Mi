@extends('layouts.app-master')


@section('content')
  <div class="container">
    <form action="{{ url('/post') }}" method="POST" enctype="multipart/form-data">
      @csrf
      @include('post.form',['modo'=>'Crear'])
    </form>
  </div>
@endsection