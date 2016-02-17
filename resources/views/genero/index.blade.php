@extends('layouts.admin')
@section('content')
@include('genero.modal')
		<table class = "table">
		<thead>
			<th>Nombre</th>
			<th>Operaciones</th>
		</thead>
		<tbody id ="datos"></tbody>
	</table>
@endsection

@section('scripts')
    {!!Html::script('js/script2.js')!!}
@endsection