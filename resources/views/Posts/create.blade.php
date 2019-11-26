@extends('layout')

@section('content')
<div class="container">
	<div class="py text-center"><h1>Создание новой новости</h1></div>
<div class="row-center">
	


<form method="POST" action="/news">
	{{ csrf_field() }}

	<div ><label for="title">Заголовок</label><input type="text" class = "form-control" name="title" id="title"></div>
	<div ><label for="description">Короткое описание новости</label><textarea class = "form-control"  name="description" id="description"></textarea></div>
	<div ><label for="text">Полный текст новости</label><textarea class = "form-control" name="text" id="text"></textarea></div>
	<hr>
	<button class="btn btn-primary btn-block" type="submit">Создать Новость</button>
</form>


  </div>
  </div>
@endsection