@extends('layout')

@section('content')
<div class="container">
	<div class="py text-center"><h1>Изменение новости</h1></div>
<div class="row-center">
	


<form method="POST" action="/news/{{$post->id}}">
	@csrf
	@method('PUT')
	
	<div ><label for="title">Заголовок</label><input type="text" class = "form-control" name="title" id="title" value="{{$post->title}}"></div>
	<div ><label for="description">Короткое описание новости</label><textarea class = "form-control"  name="description" id="description" >{{$post->description}}</textarea></div>
	<div ><label for="text">Полный текст новости</label><textarea class = "form-control" name="text" id="text" >{{$post->text}}</textarea></div>
	<hr>
	<button class="btn btn-primary btn-block" type="submit">Сохранить Новость</button>
</form>
</br>
<form method="POST" action="/news/{{$post->id}}">
	@csrf
	@method('DELETE')
	<button class="btn btn-primary btn-block" type="submit">Удалить новость</button>
</form>


  </div>
  </div>
@endsection