<?php 
session_start();
if(!isset($_SESSION["nombre"])) {
	header("index.php");
} else {
?>
<?php include("includes/header.php"); ?>
<div id="welcome">	
    <img src="imagenes/sitp.jpg" style="max-width:15%;width:auto;height:auto;">
	<h2>Bienvenido <?php echo $_SESSION["nombre"]?> <span> </span></h2>
	<a href="index.php" class="btn btn-warning" role="button">Cerrar Sesión</a><br><br>
	<?php include("menu.php"); ?>
	<img src="imagenes/SITPP.jpg" style="max-width:200%;width:863px;height:350px;">
	<br><br><br><br>
</div>
<?php include("includes/footer.php");
    }
?>