@extends('layout')

@section('content')
<div class="container">
<div class="row">
	@foreach ($companies as $company)
      <div class="col-md-4">
        <h2>{{$company->name}}</h2>
      </div>
      @endforeach
  </div>
  <div class="row">{{$companies->links()}}</div>
  </div>
@endsection