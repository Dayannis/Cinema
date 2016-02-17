@extends('layouts.admin')
@section('content')
{!!Form::open(array('route' => 'genero.store', 'id' => 'formularioGenero'))!!}
	<div id="msj-success" class="alert alert-success alert-dismissible" role="alert" style="display:none">
		<strong>Genero Agregado Correctamente.</strong>
	</div>
	<div id="msj-success2" class="alert alert-success alert-dismissible" role="alert" style="display:none">
	<strong>Genero Eliminado Correctamente.</strong>
	</div>
	<input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
	@include('genero.form.genero')
	{!!link_to('#', $title='Registrar', $attributes = ['id'=>'registro','class'=>'btn btn-primary'], $secure = null)!!}
{!!Form::close()!!}
@endsection
@section('scripts')
    {!!Html::script('js/script.js')!!}
@endsection