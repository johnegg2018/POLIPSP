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
		src="imagenes/controlador.png"
		style="max-width: 10%; width: 30; height: 30;">
	<h2>Bienvenido <?php echo $_SESSION["nombre"]?> <span> </span>
	</h2>
</div>
<div class="container">
	<p>
		<a href="index.php" class="btn btn-warning" role="button">Cerrar Sesión</a>
		<a href="./CuentaCliente.php" title="Regresar" class="btn btn-info" role="button">Regresar</a>
	</p>
	<h3>Encuesta Controlador</h3><br>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
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
		</select> <br /> <br /> <label>¿El tiempo de recorrido en general
			asignado para la ruta es el adecuado? </label> <select
			class="form-control" id="tiempo" name="tiempo" required>
			<option selected value="">Elige una opción</option>
			<option value="SI">Si</option>
			<option value="NO">No</option>
		</select> <br /> <br /> <label>¿El intervalo según la ocupación de la
			ruta es el indicado? </label> <select class="form-control"
			id="intervalo" name="intervalo" required>
			<option selected value="">Elige una opción</option>
			<option value="SI">Si</option>
			<option value="NO">No</option>
		</select> <br /> <br /> <label>¿Los operadores conocen la ruta y
			atienden todas las paradas?: </label> <select class="form-control"
			id="atencion_paradas" name="atencion_paradas" required>
			<option selected value="">Elige una opción</option>
			<option value="Todos">Todos</option>
			<option value="La mayor parte">La mayor parte</option>
			<option value="Solo unos pocos">Solo unos pocos</option>
			<option value="Ninguno">Ninguno</option>
		</select> <br /> <br /> <label>¿La ruta tiene saltos en los tiempos no
			programados que hacen cambiar la velocidad en la operación? </label>
		<select class="form-control" id="cambio_velocidad" name="cambio_velocidad" required>
			<option selected value="">Elige una opción</option>
			<option value="SI">Si</option>
			<option value="NO">No</option>
		</select> <br /> <br /> <label>¿Recibe usted quejas de los usuarios en
			el punto de inicio del servicio? </label> <select
			class="form-control" id="quejas" name="quejas" required>
			<option selected value="">Elige una opción</option>
			<option value="SI">Si</option>
			<option value="NO">No</option>
			<option value="Algunas veces">Algunas veces</option>
			<br>
		</select> <br> 
		<input class="btn btn-primary" type="submit" name="submit" value="Enviar">
		<a href="./CuentaCliente.php" title="Regresar" class="btn btn-info" role="button">Regresar</a>
		<br>
	</form>
</div>
<div class="container">
<?php
	
	include ("includes/footer.php");
}
?>
</div>