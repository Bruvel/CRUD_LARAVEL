@extends('layouts.app')

@section('title', 'Crear usuario')

@section('content')
<div class="container">
	<a href="{{ route('users.create') }}" class="btn btn-info">Nuevo usuario</a>
	<hr>
	<div class="justify-content-center">
		<table class="table">
			<thead>
				<th>ID</th>
				<th>Nombre</th>
				<th>Correo electronico</th>
				<th>Puesto</th>
				<th>Area</th>
				<th>Acción</th>
			</thead>
			<th>
				@foreach($user as $u)
					<tr>
						<td>{{ $u->id }}</td>
						<td>{{ $u->name }}</td>
						<td>{{ $u->email }}</td>
						<td>{{ $u->puesto }}</td>
						<td>{{ $u->area }}</td>
						<td>
							<a href="{{ route('users.destroy', $u->id) }}" class="btn btn-danger">Eliminar</a>
							<a href="{{ route('users.edit', $u->id) }}" class="btn btn-warning">Editar</a>
						</td>
					</tr>
				@endforeach
			</th>
		</table>
		{!! $user->render() !!}
	</div>
</div>
@endsection