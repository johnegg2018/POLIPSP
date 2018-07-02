<?php
session_start ();
if (! isset ( $_SESSION ["nombre"] )) {
	header ('Location: index.php');
} else {
	?>
<?php include("includes/header.php"); ?>
<div class="container">
<div id="welcome">
	<img src="imagenes/sitp.jpg"
		style="max-width: 15%; width: auto; height: auto;"> <img
		src="imagenes/pasajero.png"
		style="max-width: 10%; width: 30; height: 30;">
	<h5>Bienvenido <?php echo $_SESSION["nombre"]?> <span> </span>
	</h5>
</div>
</div>
<div class="container">
	<p>
		<a href="index.php" class="btn btn-warning" role="button">Cerrar Sesión</a>
		<a href="./CuentaCliente.php" title="Regresar" class="btn btn-info" role="button">Regresar</a>
	</p>
	<h3>Encuesta Usuario</h3><br>
	<form method="post" action="<?php echo htmlspecialchars('guardarEncuestaUsuario.php');?>">
		<label>RUTA: </label> <select class="form-control" id="ruta"
			name="ruta" autofocus required>
			<option selected value="">Elige una opci&oacute;n</option>
			<option value="P500">P500</option>
			<option value="SE10">SE10</option>
			<option value="142">142</option>
			<option value="228">228</option>
			<option value="T11">T11</option>
			<option value="P49">P49</option>
			<option value="736">736</option>
			<option value="C15">C15</option>
			<option value="TC11">TC11</option>
			<option value="T163">T163</option>
			<option value="552">552</option>
			<option value="C31">C31</option>
			<option value="T91">T91</option>
			<option value="330">330</option>
			<option value="210">210</option>
		</select> <br /> <br /> <label>Seleccione los d&iacute;s que usa el
			servicio de la ruta indicada: </label><br>
			<input type="checkbox" name="diasem[]" value="Lunes" /> Lunes<br>
			<input type="checkbox" name="diasem[]" value="Martes" /> Martes<br>
			<input type="checkbox" name="diasem[]" value="Miercoles" /> Miercoles<br>
			<input type="checkbox" name="diasem[]" value="Jueves" /> Jueves<br>
			<input type="checkbox" name="diasem[]" value="Viernes" /> Viernes<br>
			<input type="checkbox" name="diasem[]" value="Sabado" /> Sabado<br>
			<input type="checkbox" name="diasem[]" value="Domingo" /> Domingo<br>
		<br /> <br /> <label>Logra usted identificar los paraderos
			donde puede tomar el servicio facilmente: </label> <select
			class="form-control" id="identificaPar" name="identificaPar" required>
			<option selected value="">Elige una opci&oacute;n</option>
			<option value="SI">Si</option>
			<option value="NO">No</option>
			<option value="No sabe">No sabe</option>
		</select> <br /> <br /> <label>Piense en cuanto tiempo tarda
			generalmente esperando el servicio: </label> <select
			class="form-control" id="tiempoEspera" name="tiempoEspera" required>
			<option selected value="">Elige una opci&oacute;n</option>
			<option value="0-10 Min">0-10 Min</option>
			<option value="11-20 Min">11-20 Min</option>
			<option value="21-30 Min">21-30 Min</option>
			<option value="31-40 Min">31-40 Min</option>
			<option value="41 Min o mas">41 Min o mas</option>
		</select> <br /> <br /> <label>Teniendo en cuenta las ultimas 5 veces
			que uso el servicio de manera regular, Â¿Cuantas veces usted?: </label>
		<select class="form-control" id="estadoViaje" name="estadoViaje" required>
			<option selected value="">Elige una opci&oacute;n</option>
			<option value="Se fue ocupando una silla">Se fue ocupando una silla</option>
			<option value="Se fue de pie">Se fue de pie</option>
			<option value="Se sento despues de ir de pie">Se sento despues de ir
				de pie</option>
		</select> <br /> <br /> <label>4.3. Ahora indiquenos en cuanto tiempo
			dura usted en su trayecto habitual en la ruta: </label> <select
			class="form-control" id="tiempoTrayecto" name="tiempoTrayecto" required>
			<option selected value="">Elige una opci&oacute;n</option>
			<option value="0-30 Min">0-30 Min</option>
			<option value="31-50 Min">31-50 Min</option>
			<option value="51-60 Min">51-60 Min</option>
			<option value="61-80 Min">61-80 Min</option>
			<option value="81 Min o mas">81 Min o mas</option>
		</select> <br /> <br /> <label>En un rango del 1 al 10. ¿cómo califica el servicio?: </label> <select
			class="form-control" id="calificacionServ" name="calificacionServ" required>
			<option selected value="">Elige una opci&oacute;n</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
			<option value="7">7</option>
			<option value="8">8</option>
			<option value="9">9</option>
			<option value="10">10</option>
		</select> <br> <input class="btn btn-primary" type="submit"
			name="EnviarEncuestaUsuario" value="Enviar"> <br> <br>
	</form>
</div>
<div class="container">
<?php
	
	include ("includes/footer.php");
}
?>
</div>