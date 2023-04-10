<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('estilo.css')}}">
	<title>DETALLE CLIENTE</title>
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand" href="{{ route('equipos')}}"><img src="{{asset('img/logo.jpeg')}}" height="70"></a>
        <div class="ml-auto">
            <a href="{{ route('usuarios')}}" class="btn btn-link">USUARIOS</a>
            <a href="{{ route('equipos')}}" class="btn btn-link">EQUIPOS</a>
            <a href="{{ route('requerimientos')}}" class="btn btn-link">REQUERIMIENTOS</a>
            <a href="{{ route('curriculums')}}" class="btn btn-link">CURRICULUM</a>
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
                <table class="table table-sm">
                    <tr>
                        <th>NOMBRES</th>
                        <td> {{$client->names}}</td>
                    </tr>
                    <tr>
                        <th>APELLIDOS</th>
                        <td>{{$client->last_names}}</td>
                    </tr>
                    <tr>
                        <th>CORREO</th>
                        <td>{{$client->email}}</td>
                    </tr>
                    <tr>
                        <th>NUMERO DE DOCUMENTO</th>
                        <td>{{$client->num_doc}}</td>
                    </tr>
                    <tr>
                        <th>NUMERO DE TELEFONO</th>
                        <td>{{$client->num_phone}}</td>
                    </tr>
                    <tr>
                        <th>DIRECCION</th>
                        <td>{{$client->address}}</td>
                    </tr>
                    <tr>
                        <th>EMPRESA</th>
                        <td>{{$client->company}}</td>
                    </tr>
                </table>
                <a href="{{route('clientes')}}" class="btn btn-info">VOLVER AL INICIO</a>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
