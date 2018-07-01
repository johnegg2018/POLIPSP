<?php
session_start ();
if (! isset ( $_SESSION ["nombre"] )) {
	header ( "index.php" );
} else {
	?>
<?php include("includes/header.php"); ?>
<div id="welcome">
	<img src="imagenes/sitp.jpg"
		style="max-width: 15%; width: auto; height: auto;"> <img
		src="imagenes/CONDUCTOR.jpg" style="max-width: 8%; width: 30; height: 30;">
	<h2>Bienvenido <?php echo $_SESSION["nombre"]?> <span> </span></h2>
<div class="container">
	<p>
		<a href="index.php" class="btn btn-warning" role="button">Cerrar Sesión</a>
		<a href="./CuentaCliente.php" title="Regresar" class="btn btn-info" role="button">Regresar</a>
	</p>
	<form method="post"
		action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<label>RUTA: </label> <select class="form-control" id="canal" name="canal" autofocus required>
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
			class="form-control" id="canal" name="canal" autofocus required>
			<option selected value="">Elige una opción</option>
			<option value="0">0 - 25</option>
			<option value="1">26 - 45</option>
			<option value="2">46 - 80</option>
			<option value="3">81 - 100</option>
			<option value="4">101 - 150</option>
			<option value="5">151 - 200</option>
			<option value="5">200 - 250</option>
		</select> <br /> <br /> <label>TIEMPO DE RECORRIDO ASIGNADO: </label>
		<select class="form-control" id="tienda" name="tienda" required>
			<option selected value="">Elige una opción</option>
			<option value="0">Suficiente</option>
			<option value="1">Insuficiente</option>
			<option value="2">Mayor al necesario</option>
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