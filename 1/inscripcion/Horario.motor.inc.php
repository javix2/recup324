<?php
//session_start();


$id=$_GET["id"];
$nombrecompleto = $_GET["nombrecompleto"];
//echo "".$id;
$flujo=$_GET["flujo"];
$proceso=$_GET["proceso"];
$procesosig='';

$fechainicio=$_GET["fechainicio"];
$horainicio=$_GET["horainicio"];
$fechafin=$_GET["fechafin"];
$horafin=$_GET["horafin"];
$proceso=$_GET["proceso"];
$nul=null;
$sql="update flujoprocesoseguimiento set ";
$sql.=" flujo='$flujo',proceso='$proceso', fechafin='$fechafin',horafin='$horafin' ";
$sql.="where usuario='$nombrecompleto'";
$resultado=mysqli_query($con, $sql);


?>