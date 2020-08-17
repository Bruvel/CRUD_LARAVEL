@extends('layouts.app')

@section('title', 'Editar usuario ' . $user->name)

@section('content')
<div class="container">
	<div class="justify-content-center">
		{!! Form::open(['route' => ['users.update', $user], 'method' => 'PUT']) !!}
		
			<div class="form-group col-md-4 row text-md-right">
				{!! Form::label('name', 'Nombre') !!}
				{!! Form::text('name', $user->name, ['class' => 'form-control', 'placeholder' => 'Nombre Completo', 'required']) !!}
			</div>

			<div class="form-group col-md-4 row text-md-right">
				{!! Form::label('email', 'Correo eléctronico') !!}
				{!! Form::email('email', $user->email, ['class' => 'form-control', 'placeholder' => 'example@example.com', 'required']) !!}
			</div>

			<div class="form-group col-md-4 row text-md-right">
				{!! Form::label('puesto', 'Puesto de trabajo') !!}
				{!! Form::text('puesto', $user->puesto, ['class' => 'form-control', 'placeholder' => 'Contador', 'required']) !!}
			</div>

			<div class="form-group col-md-4 row text-md-right">
				{!! Form::label('area', 'Área de trabajo') !!}
				{!! Form::text('area', $user->area, ['class' => 'form-control', 'placeholder' => 'Presupuestos', 'required']) !!}
			</div>

			<div class="form-group col-md-4 row text-md-right">
				{!! Form::submit('Editar', ['class' => 'btn btn-primary']) !!}
			</div>

		{!! Form::close() !!}
	</div>
</div>
@endsection