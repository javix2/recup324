<?php
include "conexion.inc.php";
$flujo=$_GET["flujo"];
$proceso=$_GET["proceso"];
$sql="select * from flujoproceso ";
$sql.="where Flujo='$flujo' and proceso='$proceso'";
$resultado=mysqli_query($con, $sql);
$fila=mysqli_fetch_array($resultado);
$pantalla=$fila['Pantalla'];
$pantalla.=".inc.php";
$pantallalogica=$fila['Pantalla'];
$pantallalogica.=".main.inc.php";
$procesoanterior=$proceso;
$proceso=$fila['ProcesoSiguiente'];
include $pantallalogica;
?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet"  href="CSS/estilos.css"/>

<head>
	<meta charset="UTF-8">
    <title>principal</title>
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
	<link rel="stylesheet" href="CSS/estilos.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet"> 
</head>
<body>
	<h2><center>INSCRIPCION DE CURSOS DE TEMPORADA 2022 CARRERA INFORMATICA</center></h2>
	
	<form action="motor.php" method="GET" class="form-register">
		
		<!--iframe src="pantalla.php"></iframe-->
		<input type="hidden" name="flujo" value="<?php echo $flujo;?>"/>
		<input type="hidden" name="proceso" value="<?php echo $proceso;?>"/>
		<input type="hidden" name="procesoanterior" value="<?php echo $procesoanterior;?>"/>
		<?php
		//echo $pantalla;
		include $pantalla;
		?>
		
		
		<div class="contenedor-inputs2">
		<input type="submit" name="Anterior" value="Anterior" class="input-48"/>
		<input type="submit" name="Siguiente" value="Siguiente" class="input-48"/>
		</div>
	</form>
</body>
</html>