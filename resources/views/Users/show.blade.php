@extends('layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header text-center">Информация обо мне</div>
                <div class="card-body">

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    You are logged in!</br>

                    <div class="container">                   
                      <div class="text-right">Foto</div>
                        <label for="name">Вас зовут</label></br> 
                        <input type="text" name="name" disabled value="{{Auth::User()->name}}">
                    </div>
                    <div class="container">
                        <label for="email">Ваша почта</label></br>  
                        <input type="text" name="email" disabled value="{{Auth::User()->email}}">
                    </div>

                    <div class="container">
                        <label for="issues">Ваши заявки</label></br>  
                    
                    
                    <div class="row">
                      <table class="table table-hover">
                        <thead>
                          <tr>
                            <th scope="col">ID Заявки</th>
                            <th scope="col">Тип заявки</th>
                            <th scope="col">Статус</th>
                            <th scope="col">Описание</th>
                            <th scope="col">Ответственный инженер</th>
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
                            <td>{{$issue->assigned_to}}</td>
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
                      </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
