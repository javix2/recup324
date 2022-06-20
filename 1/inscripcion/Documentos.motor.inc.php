<?php
//session_start();

$id=$_GET["id"];
$nombrecompleto=$_GET["nombrecompleto"];
$cel=$_GET["cel"];
$correo=$_GET["correo"];
$img_ci=$_GET["img_ci"];
$img_dep=$_GET["img_dep"];
$img_for=$_GET["img_for"];

$sql="update academic.alumno set ";
$sql.=" correo='$correo',ci_esc='$img_ci',celular='$cel', bole_esc='$img_dep',form_esc='$img_for' ";
$sql.="where id=".$_SESSION["id"];
$resultado=mysqli_query($con, $sql);



$nombre=$_GET["nombre"];
$flujo=$_GET["flujo"];
$proceso=$_GET["proceso"];
$procesosig='P4';
$numerotramite=$_GET["numerotramite"];
$fechainicio=$_GET["fechainicio"];
$horainicio=$_GET["horainicio"];
$fechafin=$_GET["fechafin"];
$horafin=$_GET["horafin"];
$proceso=$_GET["proceso"];

$sql = "insert into flujoprocesoseguimiento (flujo, proceso,numerotramite, usuario,fechafin,horafin) values ('$flujo', '$proceso','$numerotramite','$nombre','$fechafin','$horafin')";
$resultado=mysqli_query($con, $sql);
	

//	$sql = "insert into flujoprocesoseguimiento (flujo, proceso, numerotramite,fechainicio,usuario,horainicio,fechafin,horafin) VALUES ('$flujo', '$proceso', '$numerotramite','$fechainicio','$nombre','$horainicio','$fechafin','$horafin')";
//	$resultado=mysqli_query($con, $sql);
//}else{
//	$sql="update flujoprocesoseguimiento set ";
//	$sql.=" correo='$correo',ci_esc='$img_ci',celular='$cel', bole_esc='$img_dep',form_esc='$img_for' ";
//	$sql.="where id=".$_SESSION["id"];
//	$resultado=mysqli_query($con, $sql);
//}
$sql = "insert into flujoprocesoseguimiento (flujo, proceso,numerotramite, usuario,fechainicio,horainicio) values('$flujo', '$procesosig','$numerotramite','$nombrecompleto','$fechainicio','$horainicio')";
$resultado=mysqli_query($con, $sql);
?>