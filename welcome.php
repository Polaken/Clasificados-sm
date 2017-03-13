<?php
session_start(); 
if ($_SESSION['logeado']) {?> 
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
  	<title>Clasificados-SM</title>
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Pagina en la que todos podran encontrar un servicio" content="Compra, Ventas, Canjes, Etc.">
    <meta name="Andres Plehm" content="Clasificados">
    <link rel="icon" href="images\escudo_sm.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
  	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  	<link href="https://fonts.googleapis.com/css?family=Rambla:400i,700i" rel="stylesheet">
</head>
<body>
<div class="container">
<h1 class="jumbotron text-center">¡Bienvenido Admin!</h1>
	<div class="row">
	<div class="btn-group-justified">
		<a href="" class="btn btn-success">Indumentaria</a>
		<a href="" class="btn btn-success">Gastronomía</a>
		<a href="" class="btn btn-success">Remiserias</a>
		<a href="" class="btn btn-success">Centro de paseos</a>
		<a href="" class="btn btn-success">Eventos</a>
		<a href="" class="btn btn-success">Empleos</a>
		<a href="ingresos/ingfarma.php" class="btn btn-success">Farmacias</a>
		<a href="" class="btn btn-success">Educación</a>
	</div>
	</div>
  <div class="container center-block">
    <form action="upload.php" method="post" enctype="multipart/form-data">
    <h4 class="text-center">Selecciona imagen para subir:</h4>
    <hr>
    <input type="file" name="fileToUpload" id="fileToUpload" class="btn btn-info btn-lg">
    <br>
    <input type="submit" value="Upload Image" name="submit" class="btn btn-info btn-lg">
</form>
  </div>
</div>
<div class="navbar navbar-inverse navbar-fixed-bottom">
    <div class="container">
      <p class="navbar-text pull-left">&copy Todos los derechos reservados
           <a href="https://plehma.github.io/Cv_PlehmA/" target="_blank" >Andrés Plehm.</a>
      </p>
      <a href="logout.php" title="" class="btn btn-danger pull-right" style="margin-top: 5px;">Logout</a>
    </div>
    </div>
	<?php require('includes/scripts.php'); ?>
</body>
</html>

<?php }
else{
	echo "<script>alert ('¡Por favor inicie sesión si desea continuar!')</script>";
    echo "<script>window.location.assign('login.php')</script>";
	} ?>