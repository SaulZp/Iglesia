<?php 
	session_start();
	//CONEXION A BASE DE DATOS
	$conexion = @mysql_connect('localhost','root','')or die('No se pudo conectar'.mysql_error());
	
	//SELECCION DE BASE DE DATOS.
	mysql_select_db("iglesia",$conexion) or die ('No se pudo conectar'.mysql_error());

	
	//Notificar todos los errores menos los Notice para los formularios
	error_reporting(E_ALL ^ E_NOTICE);

	//CAPTURA DE DATOS DEL FORMULARIO
	$nombre = $_POST['nombre'];
	$usuario = $_POST['usuario'];
	$correo = $_POST['correo'];
	$password = $_POST['password'];
	$direccion = $_POST['direccion'];
	$telefono = $_POST['telefono'];

	//CONSULTA
	$consulta = "SELECT * FROM usuarios where username = '$usuario'";
	$resultado = mysql_query($consulta);

	//COMPROBACION DE USERNAME EXISTENTE
	if(mysql_num_rows($resultado)==0){
		//SI NO EXISTE INTRODUCE EL NUEVO USUARIO EN LA BASE DE DATOS E INICIA SU SESION
		$solicitud = "INSERT INTO usuarios (nombre,username,correo,password,direccion,telefono) VALUES('$nombre','$usuario','$correo','$password','$direccion',$telefono)";
		mysql_query($solicitud);

		//VARIABLE PARA INICIAR SESION 
		$_SESSION["username"] = $usuario;

		//******PARA QUE SE REDIRECCIONE A OTRA PAGINA.*****
		//echo '<script>window.location=".html";</script>';
	}
	else{
		echo '<script>alert("El usuario ya existe, intente con otro nuevamente");</script>';
		echo '<script>window.location="registro.html";</script>';
	}

 ?>