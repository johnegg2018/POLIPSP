<?php
	$servername = "localhost";
	$username = "aingen_IDJ";
	$password = "Xvffry++636/aqw";
	$dbname = "aingen_PSP";
	// Create connection
	$con = new mysqli($servername, $username, $password, $dbname);
	$con->query("SET NAMES 'utf8'");
		/* verificar la conexion */
		if (mysqli_connect_errno()) {
		   echo " Conexion fallida";
		    echo "Conexion fallida: %s\n", mysqli_connect_error();
		    exit();
		  }
		else{
		  //echo "¡Conexion a la base de datos establecida!";
		}
?>
