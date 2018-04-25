<?php
$id_reservacion = $_GET['id_reservacion'];
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"iglesia");
$query = "DELETE FROM reservaciones WHERE id_reserva = $id_reservacion";
if (mysqli_query($link,$query)) {
	echo '<script>alert("Evento eliminado correctamente");</script>';
	echo '<script>window.location="reservaciones.php";</script>';
}
?>