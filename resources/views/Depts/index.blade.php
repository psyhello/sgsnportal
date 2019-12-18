@extends('layout')

@section('content')
<div class="container">
<div class="row">
	@foreach ($Depts as $dept)
      <div class="col-md-4">
        <h2>{{$dept->name}}</h2>
      </div>
      @endforeach
  </div>
  <div class="row">{{$Depts->links()}}</div>
  </div>
@endsection