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
  <table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">ID Заявки</th>
        <th scope="col">Тип заявки</th>
        <th scope="col">Статус</th>
        <th scope="col">Описание</th>
        <th scope="col">Пользователь</th>
        <th scope="col-md-2">Действие</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($issues as $issue)
      <tr>
        <th scope="row"> {{$issue->id}} </th>
        <td> {{$issue->type}} </td>
          @if ( $issue->state == 0)
          <td>В работе</td>
          @elseif ( $issue->state == 1)
          <td>Завершено</td>
          @endif
        <td>{{$issue->description}}</td>
        <td><a href="#"  onclick="userInfo({{$issue->user->id}})">{{$issue->user->name}}</a></td>
        <td><a class="btn btn-secondary" href="{{route('issues.show',$issue->id)}}" role="button">Подробнее »</a></td>

        <td>
          <form action="/issues/{{$issue->id}}/finish" method="POST">
          @csrf
          @method('PUT')
           @if ( $issue->state == 0)
          <button class="btn btn-primary btn-block" type="submit">Завершить »</button>
          @elseif ( $issue->state == 1)
          <button class="btn btn-primary btn-block" onclick="alert('Заявка уже завершена'); return false;">Завершить »</button>
          @endif
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
	
  </div>
  <div class="row">{{$issues->links()}}</div>
  </div>
  <script>        
    function userInfo(e) {
      event.preventDefaults();
          alert('{{$issue->user->name }}  ');
        }
  </script>
@endsection

