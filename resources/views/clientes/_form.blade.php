<div class="form-group">
	<label class="control-label col-md-1">Nombre</label>
	<div class="col-md-5">
		{!! Form::text('nombre', null, ['placeholder' => 'Nombre', 'class' => 'form-control']) !!}
	</div>
	<label class="control-label col-md-1">Apellido</label>
	<div class="col-md-5">
		{!! Form::text('apellido', null, ['placeholder' => 'Apellido', 'class' => 'form-control']) !!}
	</div>
</div>

<div class="form-group">
	<label class="control-label col-md-1">RUT</label>
	<div class="col-md-5">
        {!! Form::text('rut', null, ['id' => 'rut', 'placeholder' => "RUT", 'class' => "form-control", "maxlength" => 12]) !!}
	</div>
	<label class="control-label col-md-1">Teléfono</label>
	<div class="col-md-5">
		{!! Form::number('telefono', null, ['placeholder' => 'Teléfono', 'class' => 'form-control']) !!}
	</div>
</div>
<div class="form-group">
	<label class="control-label col-md-1">Correo</label>
	<div class="col-md-5">
		{!! Form::email('correo', null, ['placeholder' => 'Correo', 'class' => 'form-control']) !!}
	</div>
	<label class="control-label col-md-1">Cargo</label>
	<div class="col-md-5">
		<select class="form-control" name="cargo" id="cargos">
			@if(isset($item))
				<option value="{{$item->cargo}}" selected="selected">{{ $item->cargo }}</option>
			@endif
		</select>
	</div>

</div>

<div class="form-group">
	<label class="control-label col-md-1">Currículum</label>
	<div class="col-md-5">
		{!! Form::file('cv', null, ['class' => 'form-control','accept'=>'.pdf,.doc,.docx']) !!}
	</div>
	<label class="control-label col-md-1">Tipo</label>
	<div class="col-md-5">
		<select class="form-control" name="tipo" id="tipo">
			<option value=""></option>
			<option value="Estudiante">Estudiante</option>
			<option value="Postgrado">Postgrado</option>
			<option value="Investigador">Investigador</option>	
		</select>
	</div>
	
</div>

<div class="form-group">
	<div class="col-md-12">
		<button type="submit" class="btn btn-success">Guardar</button>
		<a href="/cliente" class="btn btn-danger pull-right">Cancelar</a>
	</div>
</div>

<script type="text/javascript">
	$("#rut").Rut({
		format_on: 'keyup',
		on_error: function(){
			$("#rut").val('');
			$("#rut").attr('placeholder','RUT Inválido. Reintente.')
			$("#rut").parent().removeClass('has-success').addClass('has-error');
		},
		on_success: function(){
			$("#rut").parent().removeClass('has-error').addClass('has-success');
		}
	});
</script>