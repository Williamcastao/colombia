<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/estilo.css')}}">
	<title>CURRICULUMS</title>
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand" href="{{ route('equipos')}}"><img src="{{asset('img/logo.jpeg')}}" height="70"></a>
		<div class="ml-auto">
            <a href="{{ route('usuarios')}}" class="btn btn-link">USUARIOS</a>
            <a href="{{ route('clientes')}}" class="btn btn-link">CLIENTES</a>
            <a href="{{ route('equipos')}}" class="btn btn-link">EQUIPOS</a>
            <a href="{{ route('requerimientos')}}" class="btn btn-link">REQUERIMIENTOS</a>
            <a href="{{ route('tickete')}}" class="btn btn-link">TICKETS</a>
            <a href="{{ route('estado')}}" class="btn btn-link">ESTADOS</a>
        </div>
		<div class="ml-auto">
			<button class="btn btn-outline-primary" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Ver perfil</button>
			<div class="dropdown-menu dropdown-menu-right">
				<a class="dropdown-item" href="#">Mi perfil</a>
				<a class="dropdown-item" href="#">Cambiar contraseña</a>
				<a class="dropdown-item" href="#">Cerrar sesión</a>
			</div>
		</div>
	</nav>

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<a href="{{ route('curriculums.crear')}}" class="btn btn-primary mt-5">CREAR NUEVO EQUIPO</a>
				<div class="table-responsive mt-5">
					<table class="table">
						<thead>
							<tr>
								<th>ID</th>
								<th>DESCRIPCION DE MANTENIMIENTO</th>
								<th>FECHA DE MANTENIMIENTO</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($curriculums as $curriculum)
								<tr>
									<td>{{ $curriculum->id }}</td>
									<td>{{ $curriculum->description_of_maintenance }}</td>
									<td>{{ $curriculum->maintenance_date }}</td>
									<td>
										<form action="{{route('curriculums.delete',$curriculum->id)}}" method="POST">
											@method('DELETE')
											@csrf
											<a href="{{route('curriculums.show', $curriculum->id)}}" class="btn btn-sm btn-info">Detalles</a>
											<a href="{{route('curriculums.edit', $curriculum->id)}}" class="btn btn-sm btn-warning">Editar</a>
											<button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
										</form>
									</td>
								</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>

	<!-- Agregamos los scripts de Bootstrap -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>
