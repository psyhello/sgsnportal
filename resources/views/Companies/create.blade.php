@extends('layout')

@section('content')
<div class="container">
	<div class="py text-center"><h1>Создание новой Компании</h1></div>
<div class="row-center">
	


<form method="POST" action="/company">
	{{ csrf_field() }}
	<label for="name">Введите название Компании</label>
	<input type="text" name="name" id="name" class="form-control">

	<hr>
	<button class="btn btn-primary btn-block" type="submit">Создать Компанию</button>
</form>


  </div>
  </div>
@endsection