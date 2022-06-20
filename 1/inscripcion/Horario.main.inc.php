<?php
session_start();
echo "".$_SESSION["id"]; 
echo "<br>";

$sql="select * from academic.alumno where id=".$_SESSION["id"];
$resultado=mysqli_query($con, $sql);
$fila=mysqli_fetch_array($resultado);

$nombrecompleto=$fila["nombrecompleto"];
$celular=$fila["celular"];
$correo=$fila["correo"];
$materia1=$fila["materia1"];
$materia2=$fila["materia2"];
?>