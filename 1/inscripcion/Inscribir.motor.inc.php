<?php
//session_start();

//$ci=$_GET["ci"];

$id=$_GET["id"];
$nombrecompleto=$_GET["nombrecompleto"];
$cel=$_GET["cel"];
$correo=$_GET["correo"];
$materia1=$_GET["materia1"];
$materia2=$_GET["materia2"];

$sql="update academic.alumno set ";
$sql.=" materia1='$materia1',materia2='$materia2'";
$sql.="where id=".$_SESSION["id"];
$resultado=mysqli_query($con, $sql);



$nombre=$_GET["usu"];
$flujo=$_GET["flujo"];
$proceso=$_GET["proceso"];
$procesosig='';
$numerotramite=$_GET["numerotramite"];
$fechainicio=$_GET["fechainicio"];
$horainicio=$_GET["horainicio"];
$fechafin=$_GET["fechafin"];
$horafin=$_GET["horafin"];
$proceso=$_GET["proceso"];

$sql = "insert into flujoprocesoseguimiento (flujo, proceso,numerotramite, usuario,fechafin,horafin) values ('$flujo', '$proceso','$numerotramite','$nombre','$fechafin','$horafin')";
$resultado=mysqli_query($con, $sql);


?>