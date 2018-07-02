<?php
session_start ();
if (! isset ( $_SESSION ["nombre"] )) {
	header ('Location: index.php');
} else {
	?>
<?php include("includes/header.php"); ?>
<div id="welcome">
	<img src="imagenes/sitp.jpg"
		style="max-width: 15%; width: auto; height: auto;"> <img
		src="imagenes/CONDUCTOR.jpg" style="max-width: 8%; width: 30; height: 30;">
	<h5>Bienvenido <?php echo $_SESSION["nombre"]?> <span> </span></h5>
<div class="container">
	<p>
		<a href="index.php" class="btn btn-warning" role="button">Cerrar Sesi&oacute;n</a>
		<a href="./CuentaCliente.php" title="Regresar" class="btn btn-info" role="button">Regresar</a>
	</p>
	<hr>
	<h3>Encuesta Conductor</h3><br>
	<form method="post"	action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<label>RUTA: </label> <select class="form-control" id="canal" name="ruta" autofocus required>
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
		</select> <br /> <br /> <label>CANTIDAD DE PASAJEROS: </label> <select
			class="form-control" id="canal" name="pasajeros" autofocus required>
			<option selected value="">Elige una opci&oacute;n</option>
			<option value="0 - 25">0 - 25</option>
			<option value="26 - 45">26 - 45</option>
			<option value="46 - 80">46 - 80</option>
			<option value="81 - 100">81 - 100</option>
			<option value="101 - 150">101 - 150</option>
			<option value="151 - 200">151 - 200</option>
			<option value="200 - 250">200 - 250</option>
		</select> <br /> <br /> <label>TIEMPO DE RECORRIDO ASIGNADO: </label>
		<select class="form-control" id="tienda" name="tiempo" required>
			<option selected value="">Elige una opción</option>
			<option value="Suficiente">Suficiente</option>
			<option value="Insuficiente">Insuficiente</option>
			<option value="Mayor al necesario">Mayor al necesario</option>
		</select> <br> 
		<input class="btn btn-primary" type="submit"name="submit" value="Enviar">
		<a href="./CuentaCliente.php" title="Regresar" class="btn btn-info" role="button">Regresar</a>
		<br>
	</form>
	<br>
</div>
<?php
	
	include ("includes/footer.php");
}
?>
</div>