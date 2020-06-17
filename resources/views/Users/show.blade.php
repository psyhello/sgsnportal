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
      <div class="col-md-4">
        <h2>{{$user->name}}</h2>
        <p>{{$user->email}} </p>
      </div>
  </div>
  <div class="row"><a class="btn btn-primary btn-lg" href="/users/{{$user->id}}/edit" role="button">Изменить пользователя</a></div>
  

  </div>
@endsection