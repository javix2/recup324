<?php
include "conexion.inc.php";
session_start();


$_SESSION["id"]="usuario";

?>
<html>
<link rel="stylesheet" href="CSS/estilos.css">

<form action="bandeja.php" method="GET" class="form-register">

<h4 class="form__titulo">Usuario</h4>
 
<div class="contenedor-inputs">
	<div>
	<div>
	<label>Usuario:</label>
	<input type="text" name="usuario" value="" class=""/>
	</div>
	<div>
	<label>Contraseña:</label>
	<input type="password" name="pass" value="" class=""/>
	</div>
	</div>
</div>

</div>
<div class="contenedor-inputs2">
		<input type="submit" name="Cancelar" value="Cancelar" class="input-48"/>
		<input type="submit" name="Aceptar" value="Aceptar" class="input-48"/>
		</div>
</form>
</html>