<?php  
include("conexion.php"); 

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$cedula = $_POST["cedula"];
$usuario = $_POST["usuarios"];
$contrasena= MD5($_POST["password"]);

/*echo "<script>alert('$nombre')</script>";
echo "<script>alert('$apellido')</script>";
echo "<script>alert('$cedula')</script>";
echo "<script>alert('$usuario')</script>";
echo "<script>alert('$contrasena')</script>";*/

// Check connection
if (!$con) {
    die("Conexion fallida: " . mysqli_connect_error());
}

$sql = "Insert Into RegistroUsuarios (nombre,apellido,cedula,usuario,password) Values ('$nombre', '$apellido', $cedula, '$usuario', '$contrasena')";

if (mysqli_query($con, $sql)) {
    $last_id = mysqli_insert_id($con);
    echo "<script>alert('¡Usuario creado Correctamente!')</script>";  
	ob_start(); 
  	     header("refresh: 1; url = ../index.php"); 
   	     echo 'Espere un momento y será redireccionado...'; 
	ob_end_flush();  
   
} else {
    echo "<script>alert('Error al ingresar datos, Intentelo nuevamente!')</script>";
	ob_start(); 
  	     header("refresh: 2; url = ../index.php"); 
   	     echo 'Espere un momento y será redireccionado...'; 
	ob_end_flush();  
}

mysqli_close($con);

?>
