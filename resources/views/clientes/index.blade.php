@extends('layouts.master')

@section('title', 'Clientes')

@section('content')

<div class="box box-default">
	<div class="box-header">
		<h1 class="box-title">Listado de Clientes</h1>
	</div>
	<div class="box-body">
		<a href="/cliente/create" class="btn btn-success"><i class="fa fa-file-o"></i> Crear Nuevo Cliente</a>
		<hr>
		<div class="col-md-12 table-responsive">
			<table class="table" id="data-table">
				<thead>
					<tr>
						<th>Rut</th>
						<th>Nombre</th>
						<th>Apellido</th>
						<th>Correo</th>
						<th>Acciones</th>
					</tr>
				</thead>
				<tbody>
				@foreach($items as $item)
					<tr>
						<td>{{ $item->rut }}</td>
						<td>{{ $item->nombre }}</td>
						<td>{{ $item->apellido }}</td>
						<td>{{ $item->correo }}</td>
						<td>
							<a href="{{ route('cliente.show', [$item->id]) }}" class="btn btn-info btn-xs"><span class="glyphicon glyphicon-search"></span></a>
							<a href="{{ route('cliente.edit', [$item->id]) }}" class="btn btn-success btn-xs"><span class="glyphicon glyphicon-edit"></span></a>
							{!! Form::open(['route' => ['clientes.destroy', $item->id], 'method' => 'DELETE', 'style' => 'display:inline']) !!} <button type="submit" class="btn btn-danger btn-xs" onclick=" r = confirm('¿Está seguro que desea eliminar a esta persona?'); if(r == false) event.preventDefault(); "><span class="glyphicon glyphicon-trash"></span></button> {!! Form::close() !!}
						</td>
					</tr>
				@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>

@endsection
