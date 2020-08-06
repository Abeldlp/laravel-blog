@extends('layouts.app')


@section('content')
  
    <div class="jumbotron text-center">
        <div class="container">
          <h1 class="display-3">Hello, {{$title}}</h1>
          <p>Easy template to start with</p>
          <p ><a class="btn btn-primary btn-lg" href="/login" role="button">Login &raquo;</a> <a class="btn btn-secondary btn-lg" href="/register" role="button">Register &raquo;</a></p>
          <p></p>
        </div>
      </div>
@endsection