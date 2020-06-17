@extends('layout')

@section('content')
<div class="container">
	<div class="py text-center"><h1>Изменение Заявки</h1></div>
<div class="row-center">
	


<form method="POST" action="/issues/{{$issue->id}}">
	@csrf
	@method('PUT')
	
	<div class="text-center">Заявка №{{$issue->id}}</div>
	<div ><label for="description">Описание Заявки</label><textarea class = "form-control"  name="description" id="description" >{{$issue->description}}</textarea></div>
	<input type="hidden" name="user_id" id="user_id" value="{{$issue->user->id}}">
	<hr>
	<button class="btn btn-primary btn-block" type="submit">Сохранить Новость</button>
</form>


  </div>
  </div>
@endsection