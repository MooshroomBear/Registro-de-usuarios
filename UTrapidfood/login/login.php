<?php 
session_start();
if (isset($_SESSION["usuario"])) {
	header("Location: ../index.html");
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>UTrapidfood  -  Login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"> 
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
	<script src="js/script.js"></script>
</head>
<body background="1.jpg">
	<div class="container">
		<div class="card mb-3 w-50 mx-auto mt-5">
			<div class="card-header h2 text-center text-light" style="background:rgba(60,179,113)">LOGIN Admin</div>
			<div class="card-body">
				<form id="sendLogin">
					<div class="row">
						<label class="col-12" for="usuario"><H3 align="center"> Usuario </H3></label>
					</div>
					<div class="row">
						<input type="text" class="form-control" name="usuario" id="usuario" placeholder="Usuario ">
					</div>
					<div class="row">
						<label class="col-12 mt-3" for="passwd"><H3 align="center"> Contraseña </H3></label>
					</div>
					
					<div class="row">
						<input type="password" class="form-control" name="passwd" id="passwd" placeholder="Contraseña">
					</div>
					<div class="mt-2 font-weight-bold" id="loginMessage" style="color:rgba(128,128,0,128);display:none;"></div>
					<div class="row">
						<input type="submit" name="login" value="Iniciar sesión" class="font-weight-bold btn text-light col-6 mx-auto mt-3" style="background:rgba(60,179,113)">
					</div>
				</form>
					
			</div>
			</div>
		</div>
	</body>
	</html>