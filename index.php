<?php
session_start();
session_unset();
?>

<?php
include("includes/header.php");
?>
<div class="container mlogin">
            <div id="login">
    <img src="imagenes/sitp.jpg" width="310 px" height="auto" >
<form name="loginform" id="loginform" action="includes/validaexisteusuario.php" method="POST">
    <p>
        <label for="user_login">Nombre De Usuario<br />
        <input type="text" name="usuario" id="usuario" class="input" value=""  size="10" required /></label>
    </p>
    <p>
        <label for="user_pass">Contraseña<br />
        <input type="password" name="password" id="password" class="input" value="" size="8" required></label>
    </p>
        <p class="submit">
        <input type="submit" name="login" class="button" value="Ingrese" />
    </p>
        <p class="regtext">¿No estas registrado? <a href="registro.php" >Registrate Aquí</a></p>
</form>
    </div>
    </div>
<?php if (!empty($message)) {echo "<p class=\"error\">" . "". $message . "</p>";} ?>

