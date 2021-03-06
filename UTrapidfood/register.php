<!DOCTYPE html>
<html>
<head>
	<title>Registrarse - UT Receso</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"> 
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
	<script src="js/script.js"></script>
</head>
<body>
	<div class="container">
		<div class="card mb-3 w-50 mx-auto mt-5">
			<div class="card-header h2 text-center text-light" style="background:rgba(139,0,255,255)">REGISTRO</div>
			<div class="card-body">
				<form id="sendRegister">
					<div class="row">
						<label class="col-12" for="usuario">Usuario</label>
					</div>
					<div class="row">
						<input type="text" class="form-control" name="usuario" id="usuario" placeholder="Usuario">
					</div>
					<div class="mt-2 font-weight-bold" id="usermsg" style="color:rgba(255,0,0,255);display:none;"></div>
					<div class="row">
						<label class="col-12 mt-3" for="correo">Correo electrónico</label>
					</div>
					<div class="row">
						<input type="text" class="form-control" name="correo" id="correo" placeholder="Correo electrónico">
					</div>
					<div class="mt-2 font-weight-bold" id="emailmsg" style="color:rgba(255,0,0,255);display:none;"></div>
					<div class="row">
						<label class="col-12 mt-3" for="passwd">Contraseña</label>
					</div>
					<div class="row">
						<input type="password" class="form-control" name="passwd" id="passwd" placeholder="Contraseña">
					</div>
					<div class="mt-2 font-weight-bold" id="passmsg" style="color:rgba(255,0,0,255);display:none;"></div>
					<div class="row">
						<label class="col-12 mt-3" for="reppasswd">Repetir Contraseña</label>
					</div>
					<div class="row">
						<input type="password" class="form-control" name="reppasswd" id="reppasswd" placeholder="Repetir Contraseña">
					</div>
					<div class="mt-2 font-weight-bold" id="passrepmsg" style="color:rgba(255,0,0,255);display:none;"></div>
					<div class="row">
						<input type="submit" name="register" id="register" value="Registrarse" class="font-weight-bold btn text-light col-6 mx-auto mt-3" style="background:rgba(139,0,255,255)">
					</div>

				</form>
			</div>
		</div>
	</body>
	</html>