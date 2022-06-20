<?php
session_start();
$_SESSION["id"]=$_GET["id"];

//session_start();
//$_SESSION["id"]=$_GET["id"];
////echo $_SESSION["nombre"];
//$nombre=$_GET["nombre"];
//$flujo=$_GET["flujo"];
//$proceso=$_GET["proceso"];
//$numerotramite=$_GET["numerotramite"];
//$fechainicio=$_GET["fechainicio"];
//$horainicio=$_GET["horainicio"];
//$fechafin=$_GET["fechafin"];
//$horafin=$_GET["horafin"];
//
//$sql = "INSERT INTO flujoprocesoseguimiento (flujo, proceso, numerotramite,fechainicio,usuario,horainicio,fechafin,horafin) VALUES ('$flujo', '$proceso', '$numerotramite','$fechainicio','$nombre','$horainicio','$fechafin','$horafin')";
//$resultado=mysqli_query($con, $sql);
?>