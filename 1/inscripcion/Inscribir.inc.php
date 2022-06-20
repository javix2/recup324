
<html>
<link rel="stylesheet" href="CSS/estilos.css">
<h4 class="form__titulo">Materias a Inscribir </h4>
<div class="contenedor-inputs">
<div>
<input type="hidden" name="id" value=""/> <br>
<label>Usuario: </label>
<input type="text" name="nombrecompleto" value="<?php echo $nombrecompleto;?>"/> <br>
<label>Correo:</label>
<input type="text" name="correo" value="<?php echo $correo;?>"/> <br>
<div>
<P><img src="materias.jpg" width="350"></p>
</div>
<div class="contenedor-inputs">
	<div>
	
		<div>
		<label>Materia 1:</label>
		<input type="text" name="materia1" value="" class=""/>
		</div>
		
		<div>
		<label>Materia 2:</label>
		<input type="text" name="materia2" value="" class=""/>
		</div>
	</div>
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