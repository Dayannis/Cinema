@extends('layouts.admin')
 	@section('content')
 		@include('alerts.request')
 		  	{!!Form::open(['route'=>'pelicula.store', 'method'=>'POST','files' => true])!!}
 		  	<div id="msj-success" class="alert alert-success alert-dismissible" role="alert" style="display:none">
			<strong>Película Agregada Correctamente.</strong>
			</div>
 			 @include('pelicula.forms.pelicula')
 			{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
 			{!!Form::close()!!}
	@endsection 