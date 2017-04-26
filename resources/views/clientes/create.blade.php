@extends('layouts.master')

@section('title', 'Cliente')

@section('content')

<div class="box box-default">
	<div class="box-header">
		<h1 class="box-title">Crear Nuevo Cliente</h1>
	</div>
	<div class="box-body">
		{!! Form::open(['url' => '/clientes', 'class' => 'form-horizontal','files' => true]) !!}

		@include('clientes._form')

		{!! Form::close() !!}
	</div>
</div>

@endsection