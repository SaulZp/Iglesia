<?php 
	session_start();
	//CONEXION A BASE DE DATOS
	$conexion = new mysqli('localhost', 'root', '', 'iglesia');
	
	//VERIFICACION DE CONEXION
	/*if ($conexion->connect_errno) {
		echo 'NO SE HA PODIDO CONECTAR LA BASE DE DATOS';
		}else{
			echo 'SE HA CONECTADO LA BASE DE DATOS';
		}
	*/
	
	
	//Notificar todos los errores menos los Notice para los formularios
	error_reporting(E_ALL ^ E_NOTICE);

	//CAPTURA DE DATOS DEL FORMULARIO
	$nombre = $_POST['nombre'];
	$usuario = $_POST['usuario'];
	$correo = $_POST['correo'];
	$password = $_POST['password'];
	$direccion = $_POST['direccion'];
	$telefono = $_POST['telefono'];

	//CIFRADO DE PASSWORD
	$cifradoPassword = md5($password);

	//CONSULTA
	$consulta = "SELECT * FROM usuarios where username = '$usuario' OR direccion='$direccion'";
	$resultado = $conexion->query($consulta);
	if(!$resultado){
		echo 'Hemos experimentado un fallo en la consulta';
	}
	
	//COMPROBACION DE USERNAME EXISTENTE
	if($resultado->num_rows ==0){
		//SI NO EXISTE INTRODUCE EL NUEVO USUARIO EN LA BASE DE DATOS E INICIA SU SESION
		$solicitud = "INSERT INTO usuarios (nombre,username,correo,password,direccion,telefono) VALUES('$nombre','$usuario','$correo','$cifradoPassword','$direccion',$telefono)";
		$conexion->query($solicitud);

		//VARIABLE PARA INICIAR SESION 
		$_SESSION["username"] = $usuario;

		//******PARA QUE SE REDIRECCIONE A OTRA PAGINA.*****
		//echo '<script>window.location=".html";</script>';
	}
	else{
		echo '<script>alert("El usuario ya existe, intente con otro nuevamente");</script>';
		echo '<script>window.location="registro.php";</script>';
	}

 ?>