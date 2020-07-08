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
        <p>{{$issue->description}} </p>
        @foreach($file as $val)

        @if(pathinfo($val, PATHINFO_EXTENSION) == 'jpeg')
        <img src="{{asset('/storage/'.basename($val))}}" alt="" class="img-fluid">
        @elseif(pathinfo($val, PATHINFO_EXTENSION) == 'jpg')
        <img src="{{asset('/storage/'.basename($val))}}" alt="" class="img-fluid">
        @elseif(pathinfo($val, PATHINFO_EXTENSION) == 'png')
        <img src="{{asset('/storage/'.basename($val))}}" alt="" class="img-fluid">
        @else
        <a href="{{asset('/storage/'.basename($val))}}">{{basename($val)}}</a>;
        @endif
        @endforeach

      </div>
  </div>
  @if (Auth::id() == $issue->user_id)
  <div class="row"><a class="btn btn-primary btn-lg" href="/issues/{{$issue->id}}/edit" role="button">Изменить Заявку</a></div>
  @endif
  </div>
@endsection