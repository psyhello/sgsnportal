@extends('layout')

@section('content')
<div class="container">
	<div class="py text-center"><h1>Создание нового Отдела</h1></div>
<div class="row-center">
	


<form method="POST" action="/depts">
	{{ csrf_field() }}
	<label for="name">Введите название Отдела</label>
	<input type="text" name="name" id="name" class="form-control">
		@if (count($parent) != NULL)
		<label for="parent">Выберете Родительский Отдел</label>
		<select name="parent" id="parent" class="form-control" required>
			<option value=""></option>
			@foreach ($parent as $parent)
			<option value="{{$parent->id}}">{{$parent->name}}</option>
			@endforeach


		</select>
		@endif
	<hr>
	<button class="btn btn-primary btn-block" type="submit">Создать Отдел</button>
</form>


  </div>
  </div>
@endsection