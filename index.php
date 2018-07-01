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
                    <input type="text" name="usuario" id="usuario" class="input form-control" value=""  size="18" required /></label>
                </p>
                <p>
                    <label for="user_pass">Contraseña<br />
                        <input type="password" name="password" id="password" class="input form-control" value="" size="18" required></label>
                    </p>
                    <p class="submit">
                        <input type="submit" name="login" class="btn btn-success btn-lg btn-block" value="Ingresar" />
                    </p>
                    <p class="regtext">¿No estas registrado?
                    <a href="registro.php" class="btn btn-primary btn-lg btn-block">Registrate Aquí</a></p>
                </form>
            </div>
        </div>
        <?php if (!empty($message)) {echo "<p class=\"error\">" . "". $message . "</p>";} ?>

