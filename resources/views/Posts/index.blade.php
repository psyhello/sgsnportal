@extends('layout')

@section('content')
      <div class="jumbotron">
        <div class="container">
          <h1 class="display-3">{{$lastpost->title}}</h1>
          <p>{{$lastpost->description}}</p>
          <p><a class="btn btn-primary btn-lg" href="/news/{{$lastpost->id}}" role="button">Подробнее »</a></p>
        </div>
      </div>
<div class="container">
<div class="row">
	@foreach ($posts as $post)
      <div class="col-md-4">
        <h2>{{$post->title}}</h2>
        <p>{{$post->description}} </p>
        <p><a class="btn btn-secondary" href="news/{{$post->id}}" role="button">Подробнее »</a></p>
      </div>
      @endforeach
  </div>
  <div class="row">{{$posts->links()}}</div>
  </div>
@endsection