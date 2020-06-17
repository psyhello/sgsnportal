@extends('layout')

@section('content')
      <div class="jumbotron">
        <div class="container">
          <h1 class="display-3">{{$post->title}}</h1>
          <p>{{$post->description}}</p>
          <p><a class="btn btn-primary btn-lg" href="/news/{{$post->id}}" role="button">Подробнее »</a></p>
        </div>
      </div>

@if (Auth::check())
Привет, 
{{Auth::User()->name}}
@else
Пожалуйста залогиньтесь.

@endif
@endsection