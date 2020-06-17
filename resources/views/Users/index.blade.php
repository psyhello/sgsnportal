@extends('layout')

@section('content')
  <script>
   function deleteUser(f) {
    if (confirm("Вы уверены, что хотите удалить Этого пользователя?\nЭта операция не восстановима.")) 
       f.submit();
   }
  </script>
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
        <th scope="row"> Id пользователя </th>
        <th scope="col">Имя пользователя</th>
        <th scope="col">Почта</th>
        <th scope="col">Действие</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($users as $user)
      <tr>
        <th scope="row"> {{$user->id}} </th>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>

        <td><a class="btn btn-secondary" href="/users/{{$user->id}}" role="button">Подробнее »</a></td>

        @if ( Auth::check() == 1)
        <td>
          <form action="/users/{{$user->id}}" method="POST" onsubmit="deleteUser(this);return false;">
          @csrf
          @method('DELETE')
           
          <button class="btn btn-primary btn-block" type="submit" >Удалить пользователя »</button>
          @endif
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  
  </div>
  <div class="row">{{$users->links()}}</div>
  </div>
@endsection