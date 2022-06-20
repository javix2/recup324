<?php
include "conexion.inc.php";
session_start();

$_SESSION["id"]; 
echo "".$_SESSION["id"]; 


$_SESSION["cod_usuario"]=$_GET["usuario"];
$usuario = $_SESSION["cod_usuario"];

echo "Alumno: ".($usuario);
	$sql="select * from FlujoProcesoSeguimiento ";
	$sql.="where Usuario='".$_SESSION["cod_usuario"]."' ";
	$sql.="and HoraFin is null ";
	$resultado=mysqli_query($con, $sql);


?>
<html>
<link rel="stylesheet" href="CSS/estilos.css">
<form action="" method="POST">

<table class="table table-striped" id="tabla" name="tabla" width="600" border="2" cellspacing="3" cellpadding="3" style="font-size: 12pt">
<tr>
  <td>Nro Tramite</td>
  <td>Usuario</td>
  <td>Flujo</td>
  <td>Proceso</td>
  <td>Operacion</td>
</tr>
<?php 
while ($fila=mysqli_fetch_array($resultado))
{
  echo "<tr>";
  echo "<td>".$fila["NumeroTramite"]."</td>";
  echo "<td>".$fila["Usuario"]."</td>";
  echo "<td>".$fila["Flujo"]."</td>";
  echo "<td>".$fila["Proceso"]."</td>";
  echo "<td><a href='principal.php?flujo=".$fila["Flujo"]."&proceso=".$fila["Proceso"]."&alu=".$fila["Usuario"]."&usu=".$usuario."'>Editar</a></td>";
  echo "</tr>";
}
?>
</table>
<form>
</html>