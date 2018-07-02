<?php
include("includes/header.php");
session_start ();
if (! isset ( $_SESSION ["nombre"] )) {
	header ('Location: index.php');
} else {
	require_once 'includes/conexion.php';
	if (isset ( $_POST['EnviarEncuestaUsuario'] ) AND $_POST['EnviarEncuestaUsuario'] == 'Enviar') {
		$idUsuario = $_SESSION['idUsuario'];
		$ruta = (isset ( $_POST ['ruta'] )) ? $_POST ['ruta'] : "Undefined";
		$diasem = (isset ( $_POST ['diasem'] )) ? $_POST ['diasem'] : "Undefined";
		$identificaPar = (isset ( $_POST ['identificaPar'] )) ? $_POST ['identificaPar'] : "Undefined";
		$tiempoEspera = (isset ( $_POST ['tiempoEspera'] )) ? $_POST ['tiempoEspera'] : "Undefined";
		$estadoViaje = (isset ( $_POST ['estadoViaje'] )) ? $_POST ['estadoViaje'] : "Undefined";
		$tiempoTrayecto = (isset ( $_POST ['tiempoTrayecto'] )) ? $_POST ['tiempoTrayecto'] : "Undefined";
		$calificacionServ = (isset ( $_POST ['calificacionServ'] )) ? $_POST ['calificacionServ'] : "Undefined";
		
		//Como los días de uso de servicio son un Array hacemos el paso a String antes de realizar el INSERT
		$diasFinal = '';
		foreach ($diasem as $k => $v){
			$diasFinal .= $v;
			$diasFinal .= ',';
		}
		//Constuimos sentencia SQL para INSERT en la base de datos.
		$sql = "INSERT INTO encuesta_pasajero (
					id_Respuesta, 
					id_Usuario, 
					Ruta, 
					Dias_uso_Servicio, 
					Identificacion_Paraderos, 
					Tiempo_espera_Servicio,
					Cuantas_veces_usted, 
					Tiempo_duracion_trayecto, 
					Como_Califica_Servicio) 
				VALUES (
					null, 
					$idUsuario,
					'$ruta',
					'$diasFinal',
					'$identificaPar',
					'$tiempoEspera',
					'$estadoViaje',
					'$tiempoTrayecto',
					'$calificacionServ'
					)";
		$rs = mysqli_query ($con, $sql) or die ('Error gestionando los datos...') ;
		if ($rs){
			echo '<br><br><div class="container"><div class="center-block"><h3>Datos registrados correctamente...</h3>';
			echo '<a href="./EncuestaUsuario.php" title="Regresar" class="btn btn-info" role="button">Regresar</a></div></div><br><br>';
		}
	}
}