<?php
	$opcion=$_POST['Opciones'];
	
	switch ($opcion){
		
		case "1":
			header("Location:AgregarE.php");
			break;
		case "2":
			header("Location:ModificarE.php");
			break;
		case "3":
			header("Location:EliminarE.php");
			break;
		
	}



?>