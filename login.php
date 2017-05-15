<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Ingreso</title>
<link rel="stylesheet" type="text/css" href="css/view.css" media="all">
<script type="text/javascript" src="view.js"></script>

</head>
<body id="main_body" >
	
	<img id="top" src="css/top.png" alt="">
	<div id="form_container">
	
		<h1><a>Ingreso </a></h1>
		<form id="form_1075005" class="appnitro"  method="post" action="login.php">
					<div class="form_description">
			<h2>Ingreso </h2>
			<p></p>
		</div>						
			<ul >
			
					<li id="li_1" >
		<label class="description" for="element_1">Usuario </label>
		<div>
			<input id="usuario" name="usuario" class="element text medium" type="text" maxlength="255" value="" required /> 
		</div> 
		</li>		
		<li id="li_3" >
		<label class="description" for="element_3">Contraseña </label>
		<div>
			<input id="clave" name="clave" class="element text medium" type="password" maxlength="255" value="" required /> 
		</div> 
		</li>		
		</div> 
		</li>
			
					<li class="buttons">
			    <input type="hidden" name="form_id" value="1075005" />
			    
				<input id="saveForm" class="button_text" type="submit" name="submit" value="Login" />
		</li>
			</ul>
		</form>	
		<div id="footer">
			
		</div>
	</div>
	<img id="bottom" src="css/bottom.png" alt="">
	</body>
	
<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['usuario']) || empty($_POST['clave'])) {
$error = "Username or Password is invalid";
}
else
{
// Define $username and $password
$username=$_POST['usuario'];
$password=$_POST['clave'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
include("conexion.php");
$con=conectarse();
// To protect MySQL injection for Security purpose
$username = stripslashes($username);
$password = stripslashes($password);
$username = $con->real_escape_string($username);
$password = $con->real_escape_string($password);


// SQL query to fetch information of registerd users and finds user match.
$query = $con->query("select * from usuario where clave='$password' AND usuario='$username'");
$rows = $query->num_rows;
if ($rows == 1) {
$r=$query->fetch_array();
$nom = $r['nombre'];
$ape = $r['apellido'];
$rol = $r['tipousuario'];	
$_SESSION['ok']="ok";
$_SESSION['ccusuario']=$username;
$_SESSION['nomusuario']=$nom; // Initializing Session
$_SESSION['apeusuario']=$ape;
$_SESSION['rol']=$rol;
$query->free();
header("location: almacen.php"); // Redirecting To Other Page
} else {
$error = "Username or Password is invalid";
header("location: login.php"); 
}

}
}
?>

</html>