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
		Finalice sesion <a href="index.php">¡ aqui!</a>
	</p>
	<form method="post"
		action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<label>RUTA: </label> <select class="input form-control" id="canal" name="canal" autofocus required>
			<option selected value="">Elige una opción</option>
			<option value="P500">P500</option>
			<option value="SE10">SE10</option>
			<option value="142">142</option>
			<option value="228">228</option>
			<option value="T11">T11</option>
			<option value="P49">P49</option>
			<option value="736">736</option>
		</select> <br /> <br /> <label>CANTIDAD DE PASAJEROS: </label> <select
			class="form-control" id="canal" name="canal" autofocus required>
			<option selected value="">Elige una opción</option>
			<option value="ANUNCIO FACEBOOK">ANUNCIO FACEBOOK</option>
			<option value="PERFIL FACEBOOK">PERFIL FACEBOOK</option>
			<option value="SITIO WEB">SITIO WEB</option>
			<option value="TELÉFONO">TELÉFONO</option>
			<option value="EVENTO">EVENTO</option>
			<option value="ADWORDS">ADWORDS</option>
		</select> <br /> <br /> <label>TIEMPO DE RECORRIDO ASIGNADO: </label>
		<select class="form-control" id="tienda" name="tienda" required>
			<option selected value="">Elige una opción</option>
			<option value="Suficiente">Suficientee</option>
			<option value="...">...</option>
			<option value="...">...</option>
			<option value="...">...</option>
			<option value="....">....</option>
			<option value=".....">.......</option>
		</select> <br> <input class="btn btn-primary" type="submit"
			name="submit" value="Enviar"> <br>
	</form>
	<br>
</div>
<?php
	
	include ("includes/footer.php");
}
?>
</div>