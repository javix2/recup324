
<html>
<link rel="stylesheet" href="CSS/estilos.css">
<h4 class="form__titulo">Verificacion de Documentos </h4>
<div class="contenedor-inputs">
<div>
<input type="hidden" name="id" value=""/> <br>
<label>Nombre: </label>
<input type="text" name="nombrecompleto" value="<?php echo $nombrecompleto;?>"/> <br>
<label>Correo:</label>
<input type="text" name="correo" value="<?php echo $correo;?>"/> <br>

<label>Celular:</label>
<input type="text" name="celular" value="<?php echo $celular;?>"/> <br>


<table class="table table-striped" id="tabla" name="tabla" width="600" border="2" cellspacing="3" cellpadding="3" style="font-size: 12pt">
<tr>
  <td>CEDULA</td>
  <td>DEPOSITO</td>
  <td>FORMULARIO</td>
</tr>
<tr>
  <td><img src="<?php echo $img_ci;?>"></td>
  <td><img src="<?php echo $img_bole;?>"></td>
  <td><img src="<?php echo $img_form;?>"></td>
</tr>

</table>
<div>
<fieldset>
        <legend>Documentos Completos?</legend>
        <label>
            <input type="radio" name="op" value="SI"> SI
        </label>                                 
        <label>                                  
            <input type="radio" name="op" value="NO"> NO
        </label>
    </fieldset>
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