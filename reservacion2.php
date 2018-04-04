<!DOCTYPE html>
<html>
<head>
	<title>reservacion</title>
</head>
<body>
	
	<?php
        $link=mysqli_connect("localhost","root","");
		mysqli_select_db($link,"iglesia");
	?>
	
	<FORM ACTION="reservacion2.php" METHOD="POST">
		Selecciona un servicio
		<select name="evento" class="input-group-sm">
		<?php
			$result=mysqli_query($link,"SELECT *FROM evento");
			?>
			<option value=""></option>
			<?php
			while ($row = mysqli_fetch_array($result)) {
				$nombre = utf8_encode($row['nombreEvento']);
                $id = $row['id_evento'];
        ?>      
				<option value=<?php echo "$id" ?>><?php echo"$nombre" ?></option>
				<?php
			}
               	?>
				
		</select>
		<input  type="submit" name="enviar">
    </FORM>
    <?php
       	if ($_REQUEST['evento'] == 1){
       		?>
       		<form class="form" action="succesfull.php" method="POST" >
				<h3>Bautizo</h3>
				Nombre del bautizado: <input type="text" name="nombre"><br>
				Fecha del evento: <input type="date" name="fecha"><br>
				Hora del evento: <input type="time" name="hora"><br>

				<h4>Padrinos</h4>
				<input type="text" name="padrino1">
				<input type="text" name="padrino2" >*Opcional
			</form>
		<?php
       	}
       	
         	
	?>
	

</body>
</html>