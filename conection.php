<?php
include_once ('includes/bdd.php');
header('Content-Type: text/html;charset-UTF-8');
$usernarme=$_POST['username'];
$password=$_POST['password'];
$con=crearConexion();
$con->set_charset("UTF-8");
$sql="call login_usuario(?,?,@valor_existe)";
$stmt = $con->prepare($sql);
$stmt->bind_param('ss', $usernarme, $password);
$stmt->execute();
$result2=$con->query("SELECT @valor_existe");
$row=$result2->fetch_assoc();
if ($row['@valor_existe']==0)
{
	echo "<script>alert ('Ingreso invalido al sistema!')</script>";
    echo "<script>window.location.assign('login.php')</script>";
}
	else
			{
				session_start();
				$_SESSION['time']=date('H:i:s');
				$_SESSION['username']=$usernarme;
				$_SESSION['logeado']=true;
				header("location:welcome.php");
			};
?>