<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
session_start();
if($_SESSION['ok']=="ok")
{
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Registrar Usuario</title>
<link rel="stylesheet" type="text/css" href="css/view.css" media="all">
<script type="text/javascript" src="view.js"></script>
</head>

<body id="main_body" >
	<img id="top" src="css/top.png" alt="">
	<div id="form_container">
	
		<h1><a>Registrar Usuario</a></h1>
		<form id="form_1075005" class="appnitro"  method="post" action="registrar_personal2.php">
			<div class="form_description">
			<h2>Registrar Usuario</h2>
			<p></p>
			</div>

	<ul>
		<li id="li_2" >
		<label class="description" for="element_2">Nombre </label>
		<span>
			<input id="nombre" name= "nombre" class="element text" maxlength="255" size="20" value="" required />
			<label>Nombres</label>
		</span>
		<span>
			<input id="apellido" name= "apellido" class="element text" maxlength="255" size="20" value="" required />
			<label>Apellidos</label>
		</span> 
		</li>		
		<li id="li_3" >
		<label class="description" for="element_3">Cargo </label>
		<div>
			<input id="cargo" name="cargo" class="element text medium" type="text" maxlength="255" value="" required /> 
		</div> 
		</li>
		<li id="li_4" >
		<label class="description" for="element_4">Fecha </label>
		<div>
			<input id="fecha" name="fecha" class="element text medium" type="date" maxlength="255" value="" required /> 
		</div> 
		</li>		
		<li id="li_5" >
		<label class="description" for="element_5">Usuario </label>
		<div>
			<input id="usuario" name="usuario" class="element text medium" type="text" maxlength="255" value="" required /> 
		</div> 
		</li>	
		<li id="li_6" >
		<label class="description" for="element_6">Contraseña </label>
		<div>
			<input id="clave" name="clave" class="element text medium" type="password" maxlength="255" value="" required /> 
		</div> 
		</li>	
		<li id="li_7" >
		<label class="description" for="element_7">Tipo de usuario </label>
		<div>
		<select class="element select medium" id="tipousuario" name="tipousuario" required > 
		<option value="" selected="selected"></option>
		<option value="Administrador" >Administrador</option>
		<option value="Vendedor" >Vendedor</option>
		<option value="Asistente" >Asistente</option>
		</select>
		</div>
		</li> 

		<li class="buttons">
		<input type="hidden" name="form_id" value="1075005" />
		<input id="saveForm" class="button_text" type="submit" name="submit" value="Registrar" />
		</li>
	</ul>
		</form>	
		<div id="footer">
		</div>
	</div>
	<img id="bottom" src="css/bottom.png" alt="">
	</body>

<?php
}
else
{
	header("location: login.php");
}
?>
</html>