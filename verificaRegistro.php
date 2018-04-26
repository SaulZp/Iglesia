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
	$consulta = "SELECT * FROM usuario where username = '$usuario'";
	$consulta2 = "SELECT * FROM usuario where correo = '$correo'";

	$resultado = $conexion->query($consulta);
	$resultado2 = $conexion->query($consulta2);

	if(!$resultado){
		echo 'Hemos experimentado un fallo en la consulta';
	}
	
	//COMPROBACION DE USERNAME EXISTENTE
	if($resultado->num_rows ==0){
		//SI NO EXISTE INTRODUCE EL NUEVO USUARIO EN LA BASE DE DATOS E INICIA SU SESION
		if($resultado2->num_rows ==0){
				$solicitud = "INSERT INTO usuario (nombre,username,correo,password,direccion,telefono) VALUES('$nombre','$usuario','$correo','$cifradoPassword','$direccion',$telefono)";
				$conexion->query($solicitud);
				///VARIABLE PARA QUE INICIE SESION
				$_SESSION["username"] = $usuario;
				echo '<script>alert("El usuario se agrego con exito");</script>';
				echo '<script>window.location="indexU.php";</script>';
			}else{
				echo '<script>alert("Correo registrado, intente con otro");</script>';
				echo '<script>window.location="registro.php";</script>';
			}

	}else{
		echo '<script>alert("El usuario ya existe, intente con otro nuevamente");</script>';
		echo '<script>window.location="registro.php";</script>';
	}

 ?>