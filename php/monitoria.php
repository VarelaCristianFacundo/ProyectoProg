<?php session_start(); ?>
<html>
	<head>
		<title>Monitoria</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	</head>
	<body>
	<?php include "/navbarLogueado.php"; ?>
<div class="container">
<div class="row">
<div class="col-md-6">
		<h2>Monitoria</h2>
		<img src="../grafics/Monitoria.jpg">
	<form role="form" name="Salir" action="../login.php" method="post">
	<button type="submit" class="btn btn-default">Log Out</button>
	</form>
</div>
</div>
</div>
		<script src="js/valida_login.js"></script>
	</body>
</html>
