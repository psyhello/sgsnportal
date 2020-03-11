@extends('layout')

@section('content')
<div class="container">
	<div class="py text-center"><h1>Создание новой Заявки</h1></div>
<div class="row-center">
	


<form method="POST" action="/issues">
	{{ csrf_field() }}
	<div ><label for="description">Описание заявки</label><textarea class = "form-control"  name="description" id="description"></textarea></div>

	<hr>
	<button class="btn btn-primary btn-block" type="submit">Создать Заявку</button>
</form>


  </div>
  </div>
@endsection