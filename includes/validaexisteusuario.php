<?php  
include("conexion.php"); 
session_start();
$usuario = $_POST["usuario"];
$contrasena = MD5($_POST["password"]);

$validausuario = mysqli_query ($con, "SELECT * FROM RegistroUsuarios WHERE usuario = '$usuario'") or die ('Error Al iniciar Sesión') ; 
$registros=mysqli_num_rows($validausuario);
    if($registros==1)
    {
         while($resultado = mysqli_fetch_array($validausuario)) 
        {
            $nombre = $resultado['nombre']." ".$resultado['apellido'];
            $id_doc = $resultado['cedula'];
    		$usuario = $resultado['usuario'];
    		$password = $resultado['password'];
        }
        if($password == $contrasena)
        {
             $_SESSION["nombre"] = $nombre;
            echo "<script>alert('USUARIO REGISTRADO'); window.location.assign('../CuentaCliente.php')</script>";
        }
        else
        {
             echo "<script>alert('USUARIO O CONTRASEÑA INCORRECTA');window.location.assign('../index.php')</script>";
        }
    }
    else
    {
        echo "<script>alert('USUARIO NO REGISTRADO, ¡POR FAVOR, REGISTRATE!'); window.location.assign('../registro.php') </script>";
    }
?>
