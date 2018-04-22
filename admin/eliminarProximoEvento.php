<?php
$id_evento = $_GET['id_evento'];
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"iglesia");
$query = "DELETE FROM proximosEventos WHERE id_proximoEvento = $id_evento";
if (mysqli_query($link,$query)) {
	echo '<script>alert("Evento eliminado correctamente");</script>';
	echo '<script>window.location="eventos.php";</script>';
}
?>