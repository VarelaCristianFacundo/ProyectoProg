<?php session_start(); ?>
<html>
	<head>
		<title>Reportes</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	</head>
	<body>
	<?php include "/navbarLogueado.php"; ?>
	
<div class="container">
<div class="row">
<div class="col-md-6">
		<h2>Reportes</h2>

	<form role="form" name="Salir" action="../login.php" method="post">
	<button type="submit" class="btn btn-default">Log Out</button>
	</form>
</div>
</div>
</div>
		<script src="js/valida_login.js"></script>
	</body>
</html>