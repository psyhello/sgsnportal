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
	@foreach ($issues as $issue)
      <div class="col-md-4">
        <h2>{{$issue->id}}</h2>
        <p>{{$issue->description}} </p>
        <p><a class="btn btn-secondary" href="{{route('issues.show',$issue->id)}}" role="button">Подробнее »</a></p>
      </div>
      @endforeach
  </div>
  <div class="row">{{$issues->links()}}</div>
  </div>
@endsection