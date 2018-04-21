<?php 
	session_start();
	//INDENTIFICACION DE USUARIO
	$usuario = $_SESSION['id_us'];


	error_reporting(E_ALL ^ E_NOTICE);
	
	//conexion BD
	$connection = new mysqli('localhost', 'root', '', 'iglesia');


	$tipoEvento = $_POST['tipoEvento'];
	$fecha = $_POST['fecha'];
	$hora = $_POST['hora'];
	$tiempo = $fecha." ".$hora.":00";
	
	//VERIFICA QUE EL EVENTO A RESERVAR ESTE DISPONIBLE EN CUANTO A FECHA Y HORA
	$consulta = "SELECT * FROM reservaciones WHERE fecha = '$tiempo' ";
	$resultado = $connection->query($consulta);

	$filas = $resultado->num_rows;
	//SI LA CONSULTA NO TRAE FILA, ENTONCES ESTA DISPONIBLE EL DIA Y LA HORA
	if($filas ==0){
		$insertar = "INSERT INTO reservaciones(id_usuario,id_evento,fecha) VALUES($usuario,$tipoEvento,'$tiempo')";
		$connection->query($insertar);
		echo '<script>alert("EVENTO GUARDADO");</script>';
		echo '<script>window.location="reservacionesU.php";</script>';
	}else{
		echo '<script>alert("FECHA NO DISPONIBLE");</script>';
		echo '<script>window.location="AgregarE.php";</script>';
	}

 ?>