@extends('default')

@section('header')
	@yield('header')
@stop

@section('content')
	
	<div class="row">
	<div class="jumbotron_admin">
	<div class="over container body-content">
  	<div class="col-lg-11">

	@yield('topics')

	</div>
	</div>
	</div>
	</div>
@stop