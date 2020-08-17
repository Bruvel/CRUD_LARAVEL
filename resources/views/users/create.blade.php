@extends('layouts.app')

@section('title', 'Crear usuario')

@section('content')
<div class="container">
	<div class="justify-content-center">
		{!! Form::open(['route' => 'users.store', 'method' => 'POST']) !!}
		
			<div class="form-group col-md-4 row text-md-right">
				{!! Form::label('name', 'Nombre') !!}
				{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre Completo', 'required']) !!}
			</div>

			<div class="form-group col-md-4 row text-md-right">
				{!! Form::label('email', 'Correo eléctronico') !!}
				{!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'example@example.com', 'required']) !!}
			</div>

			<div class="form-group col-md-4 row text-md-right">
				{!! Form::label('puesto', 'Puesto de trabajo') !!}
				{!! Form::text('puesto', null, ['class' => 'form-control', 'placeholder' => 'Contador', 'required']) !!}
			</div>

			<div class="form-group col-md-4 row text-md-right">
				{!! Form::label('area', 'Área de trabajo') !!}
				{!! Form::text('area', null, ['class' => 'form-control', 'placeholder' => 'Presupuestos', 'required']) !!}
			</div>

			<div class="form-group col-md-4 row text-md-right">
				{!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
			</div>

		{!! Form::close() !!}
	</div>
</div>
@endsection