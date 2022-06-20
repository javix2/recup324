<html>
<link rel="stylesheet" href="CSS/estilos.css">
<h4 class="form__titulo">Documentos</h4>
<div class="contenedor-inputs">
<div>
<input type="hidden" name="id" value=""/> <br>

<label>Nombre: </label>
<input type="text" name="nombrecompleto" value="<?php echo $nombrecompleto;?>"/> <br>
<!--<label>Cedula identidad</label>
<input type="text" name="ci" value=""/> <br>
<label>Frente</label>
<input type="text" name="frente" value=""/> <br-->

<label>Correo:</label>
<input type="text" name="correo" ><br>
<label>N°Celular:</label>
<input type="text" name="cel" ><br>
<label>Fotocopia CI: </label>
<input type="file" value="subir desde.." name="img_ci"><br>
<label>Deposito:</label>
<input type="file" value="subir desde.." name="img_dep"><br>
<label>Formulario:</label>
<input type="file" value="subir desde.." name="img_for"><br>


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