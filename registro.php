<?php include("includes/header.php"); ?>
<div class="container mregister">
			<div id="login">
	<img src="imagenes/sitp.jpg" width="280" height="150">
<form name="registerform" id="registerform" action="includes/creausuarios.php" method="post">
	<p>
		<label for="nombre">NOMBRE<br />
		<input type="text" name="nombre" id="nombre" class="input" size="32" value="" required /></label>
	</p>
	<p>
		<label for="apellido">APELLIDO<br />
		<input type="text" name="apellido" id="apellido" class="input" size="32" value=""  required/></label>
	</p>
	<p>
		<label for="cedula">N° IDENTIFICACION<br />
		<input type="text" name="cedula" id="cedula" class="input" size="32" value="" required /></label>
	</p>
	
	<p>
		<label for="user">USUARIO<br />
		<input type="text" name="usuarios" id="usuarios" class="input" value="" size="20" required/></label>
	</p>
	
	<p>
		<label for="user_pass">CONTRASEÑA<br />
		<input type="password" name="password" id="password" class="input" value="" size="32" required/></label>
	</p>	
        <p class="regtext"><a href="index.php" >Regresar</a>!</p>
		<p class="submit">
		<input type="submit" name="register" id="crearusuario" class="button" value="Crear usuario" />
	    </p>
</form>
	</div>
</div>
