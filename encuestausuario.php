<?php
// session_start();
// if(!isset($_SESSION["nombre"])) {
// 	header("index.php");
// } else {
?>
<?php include("includes/header.php"); ?>
<div id="welcome">
    <img src="imagenes/sitp.jpg" style="max-width:15%;width:auto;height:auto;">
    <img src="imagenes/PASAJERO.jpg"  style="max-width:10%;width:30;height:30;">
	<h2>Bienvenido <?php echo $_SESSION["nombre"]?> <span> </span></h2>
	<?php include("menu.php"); ?>
	<p>Finalice sesion <a  href="index.php">¡ aqui!</a></p>

	<label >RUTA: </label>
<select class="form-control" id="canal"  name="canal"  autofocus required>
	<option selected value=""> Elige una opción </option>
	<option value="P500">P500</option>
	<option value="SE10">SE10</option>
	<option value="142">142</option>
	<option value="228">228</option>
	<option value="T11">T11</option>
	<option value="P49">P49</option>
	<option value="736">736</option>
</select>
<br />
<br />
	<label >Seleccione los días que usa el servicio de la ruta indicada: </label>
<select class="form-control" id="canal"  name="canal"  autofocus required>
	Lunes <input type="checkbox" name="diasem[]" value="Lunes" />
	Martes <input type="checkbox" name="diasem[]" value="Martes" />
  Miercoles <input type="checkbox" name="diasem[]" value="Miercoles" />
  Jueves <input type="checkbox" name="diasem[]" value="Jueves" />
  Viernes <input type="checkbox" name="diasem[]" value="Viernes" />
  Sabado <input type="checkbox" name="diasem[]" value="Sabado" />
  Domingo <input type="checkbox" name="diasem[]" value="Domingo" />
</select>
<br />
<br />
    <label >Logra usted identificar los paraderos donde puede tomar el servicio facilmente:  </label>
<select class="form-control" id="tienda"  name="tienda"   required>
	<option selected value=""> Elige una opción </option>
	<option value="SI">Si</option>
	<option value="NO">No</option>
	<option value="No sabe">No sabe</option>
</select>
<br />
<br />
    <label >Piense en cuanto tiempo tarda generalmente esperando el servicio:  </label>
<select class="form-control" id="tienda"  name="tienda"   required>
	<option selected value=""> Elige una opción </option>
	<option value="0-10 Min">0-10 Min</option>
	<option value="11-20 Min">11-20 Min</option>
	<option value="21-30 Min">21-30 Min</option>
  <option value="31-40 Min">31-40 Min</option>
  <option value="41 Min o mas">41 Min o mas</option>
</select>
<br />
<br />
    <label >Teniendo en cuenta las ultimas 5 veces que uso el servicio de manera regular, ¿Cuantas veces usted?:  </label>
<select class="form-control" id="tienda"  name="tienda"   required>
	<option selected value=""> Elige una opción </option>
	<option value="Se fue ocupando una silla">Se fue ocupando una silla:</option>
	<option value="Se fue de pie">Se fue de pie;</option>
	<option value="Se sento despues de ir de pie">Se sento despues de ir de pie</option>
</select>
<br />
<br />
    <label >4.3.	Ahora indiquenos en cuanto tiempo dura usted en su trayecto habitual en la ruta:  </label>
<select class="form-control" id="tienda"  name="tienda"   required>
	<option selected value=""> Elige una opción </option>
	<option value="0-30 Min">0-30 Min</option>
	<option value="31-50 Min">31-50 Min</option>
	<option value="51-60 Min">51-60 Min</option>
  <option value="61-80 Min">61-80 Min</option>
  <option value="81 Min o mas">81 Min o mas</option>
</select>
<br />
<br />
    <label >Logra usted identificar los paraderos donde puede tomar el servicio facilmente:  </label>
<select class="form-control" id="tienda"  name="tienda"   required>
	<option selected value=""> Elige una opción </option>
	<option value="SI">Si</option>
	<option value="NO">No</option>
	<option value="No sabe">No sabe</option>
</select>
<br />
<br />



</div>
<?php include("includes/footer.php");?>
