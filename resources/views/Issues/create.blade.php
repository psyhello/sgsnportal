@extends('layout')

@section('content')
<div class="container">
	<div class="py text-center"><h1>Создание новой Заявки</h1></div>
<div class="row-center">
	<div class="container">
			<div class="py text-center">Выберите отдел</div>
			<button class="btn btn-outline-primary" onclick="showDiv(it)">Управление информационных технологий</button>
			<button class="btn btn-outline-primary" onclick="showDiv(archive)">Архив</button>
			<button class="btn btn-outline-primary" onclick="showDiv(org)">Организационный отдел</button>
			<button class="btn btn-outline-primary" onclick="showDiv(jur)">Юридическое управление</button>
		</div>	

		<div class="container d-none form-opener" id="it">
				<form method="POST" action="/issues" enctype="multipart/form-data" >
					{{ csrf_field() }}
					<div><label for="type">Выберите тип проблемы</label></br>
						<select name="type" id="type" onchange="chooseType(it)">
						<option value="1" >
							Общие заявки
						</option>
						<option value="2">
							Работа в информационных системах
						</option>
						<option value="3">
							Расходные материалы для перифирии
						</option>
						
					</select>

						
					</select>
					</div>
					<div ><label for="description">Описание заявки</label><textarea class = "form-control"  name="description" id="description"></textarea></div>
					<div ><label for="image">Скриншот</label><input type="file" name="image"></div>
					
					<input type="hidden" name="user_id" id="user_id" value="{{Auth::id()}}">
					<hr>
					<button class="btn btn-primary btn-block" type="submit">Создать Заявку</button>
				</form>
		</div>

		<div class="container d-none " id="archive">
			<form method="POST" action="/issues">
				
			Тут форма для архива
			</form>
		</div>

		<div class="container d-none form-opener" id="org">
			<form method="POST" action="/issues">
				
Тут форма для орготдела
			</form>
		</div>

		<div class="container d-none form-opener" id="jur">
			<form method="POST" action="/issues">
				
Тут форма для юристов
			</form>
		</div>

		<div class="container d-none">

		</div>



  </div>
  </div>
@endsection