<?php 
session_start();
header('Content-Type: text/html;charset=utf-8');
include_once 'includes/bdd.php';
$con = crearConexion();
$con -> set_charset("utf-8");
$sql = 'INSERT INTO farmacias(nombre,direccion,telefono,foto,mapa) VALUES (?,?,?,?,?)';

?>
<!doctype html>
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
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
	<label>Nombre:</label>
	<input type="text" placeholder="nombre"/>
	<label>Dirección:</label>
	<input type="text" placeholder="dirección"/>
	<label>Teléfono:</label>
	<input type="text" placeholder="teléfono"/>
	<label>Foto:</label>
	<input type="text" placeholder="ruta"/>
	<label>Mapa:</label>
	<input type="text" placeholder="dirección"/>
	</form>
	
	<script src="./js/navbar.js" type="text/javascript" charset="utf-8"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>