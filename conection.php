<?php
include_once ('includes/bdd.php');
header('Content-Type: text/html;charset-UTF-8');
$username=$_POST['username'];
$pass=$_POST['password'];
$con=crearConexion();
$con->set_charset("UTF-8");
$sql="call login_usuario(?,?,@valor_existe)";
$stmt = $con->prepare($sql);
$stmt->bind_param('ss', $username, $pass);
$stmt->execute();
$result2=$con->query("SELECT @valor_existe");
$row=$result2->fetch_assoc();
if ($row['@valor_existe']==0)
{
	echo "<script>alert ('¡Ingreso invalido al sistema!')</script>";
    echo "<script>window.location.assign('login.php')</script>";
}
	else
			{
				session_start(['cookie_lifetime' => 1,]);
				$_SESSION['time']=date('H:i:s');
				$_SESSION['username']=$username;
				$_SESSION['logeado']=true;
				header("location:welcome.php");
			};   
?>