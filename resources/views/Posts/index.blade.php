@extends('layout')

@section('content')
<div class="container">
<div class="row">
	@foreach ($posts as $post)
      <div class="col-md-4">
        <h2>{{$post->title}}</h2>
        <p>{{$post->description}} </p>
        <p><a class="btn btn-secondary" href="news/{{$post->id}}" role="button">Подробнее »</a></p>
      </div>
      @endforeach
      {{$posts->links()}}
  </div>
  </div>
@endsection