
<html>
<link rel="stylesheet" href="CSS/estilos.css">
<h4 class="form__titulo">Materias Inscritas Temporada 2022 </h4>
<div class="contenedor-inputs">
<div>
<input type="hidden" name="id" value=""/> <br>
<label>Usuario: </label>
<input type="text" name="nombrecompleto" value="<?php echo $nombrecompleto;?>"/> <br>
<label>Correo:</label>
<input type="text" name="correo" value="<?php echo $correo;?>"/> <br>
<div>
<table class="table table-striped" id="tabla" name="tabla" width="800" border="2" cellspacing="3" cellpadding="3" style="font-size: 12pt">
<tr>
	<td>MATERIA-1 </td>
	<td>MATERIA-2 </td>
</tr>
<tr>
	<td><?php echo $materia1;?></td>
    <td><?php echo $materia2;?></td>
</tr>

</table>
</div>

</div>
</div>
<div class="contenedor-inputs3">

<div>
<input type="datetime" name="fechainicio"  value="<?php echo date("Y-m-d");
?>" class="input-45"><br>
<input type="time" name="horainicio"  value="<?php echo date("H:i:s");
?>" class="input-45"><br>
</div>
<div>

<input type="datetime" name="fechafin"  value="<?php echo date("Y-m-d");
?>" class="input-45"/><br>
<input type="time" name="horafin"  value="<?php echo date("H:i:s");
?>" class="input-45"/><br>
</div>
</div>
</html>