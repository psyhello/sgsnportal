@extends('layout')

@section('content')
<div class="container">
<div class="row">
      <div class="col-md-4">
        <h2>{{$comp_id->name}}</h2>

      </div>
  </div>
  <div class="row"><a class="btn btn-primary btn-lg" href="/company/{{$comp_id->id}}/edit" role="button">Изменить Компанию</a></div>
  </div>
@endsection