@extends('layout')

@section('content')
<div class="container">
	<div class="py text-center"><h1>Изменение новости</h1></div>
<div class="row-center">
	


<form method="POST" action="/company/{{$comp->id}}">
	@csrf
	@method('PUT')
	
	<div ><label for="title">Наименование</label><input type="text" class = "form-control" name="name" id="name" value="{{$comp->name}}"></div>
	<hr>
	<button class="btn btn-primary btn-block" type="submit">Сохранить Компанию</button>
</form>


  </div>
  </div>
@endsection