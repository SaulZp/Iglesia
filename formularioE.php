<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <title>Comunidad Católica</title>
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css" media="screen" type="text/css">
        <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Playball' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/style-portfolio.css">
        <link rel="stylesheet" href="css/picto-foundry-food.css" />
        <link rel="stylesheet" href="css/jquery-ui.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link rel="icon" href="favicon.ico" type="image/x-icon">
        
        <style>
				.text-reservacion{
  padding: 3em;
  margin-top: 1px;
  
  background-color: #636363;
  color: black;
  font-family: 'Raleway', sans-serif;
}

.text-reservacion2{
  padding: 3em;
  margin-top: 1px;
  
  background-color: white;
  color: black;
  font-family: 'Raleway', sans-serif;
}


h1 {
    font-size: 37px;
    font-weight: 900;
    width:auto;
    letter-spacing: 0.040em;
    border: 0;
	font-family: 'Raleway', sans-serif;
}
		</style>
    </head>

    <body>
	<?PHP session_start(); ?>
         <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="row">
                <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                           <a class="navbar-brand" href="indexU.php">Comunidad Católica</a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav main-nav  clear navbar-right ">
                            <li><a class="navactive color_animation" href="#top">INICIO</a></li>
                            <li class="dropdown show"><a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">SERVICIOS</a>
                                <ul>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="adoracionU.php">ADORACION AL SANTISMO</a>
                                        <a class="dropdown-item" href="bautismoU.php">SACRAMENTO DEL BAUTISMO</a>
                                        <a class="dropdown-item" href="matrimonioU.php">SACRAMENTO DEL MATRIMONIO</a>
                                        <a class="dropdown-item" href="velatorioU.php">VELATORIO</a>
                                        <a class="dropdown-item" href="pastoralU.php">PASTORAL DE ENFERMOS</a>
                                        
                                        <a class="dropdown-item" href="confesionesU.php">CONFESIONES</a>
                                        <a class="dropdown-item" href="cursosU.php">CURSOS BIBLICOS</a>
                                        <a class="dropdown-item" href="quinceU.php">MISA DE XV A&Ntilde;OS</a>
                                        <a class="dropdown-item" href="retirosU.php">RETIROS VOCACIONALES</a>
                                        <a class="dropdown-item" href="dispensariosU.php">DISPENSARIOS</a>
                                    </div>
                                </ul>
                            </li>

                            <li><a class="color_animation" href="horariosU.php">HORARIOS</a></li>
                            <li><a class="color_animation" href="eventosU.php">PROXIMOS EVENTOS</a></li>
                            <li><a class="color_animation" href="nosotrosU.php">NOSOTROS</a></li>
                            <li><a class="color_animation" href="contactoU.php">CONTACTO</a></li>
                            <li><a class="color_animation" href="reservacionesU.php">RESERVACIONES</a></li>
                            <li><a class="color_animation" href="perfil.php">MI PERFIL</a></li>
                            <li><a class="color_animation" href="salir.php">SALIR</a></li>
                            
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div>
            </div><!-- /.container-fluid -->
        </nav>
        <!-- END NAVBAR USUARIO -->

        <div class="container-fluid text-reservacion">
        	<br>
            <br>
        </div>

		 <div class="container-fluid text-reservacion2">
       
			 <div class="col-md-6 col-md-offset-3 text-center">
            	<h1  style="color:#000; font-weight:lighter;"> Modificar Evento <br><br></h1>
          		<?php
					
						
						$idE2=$_POST['cajat'];
						
						$usP=$_SESSION['id_us'];
						
						
						$fecha = $_POST['fecha'];
						$hora = $_POST['hora'];
						$tiempo = $fecha." ".$hora.":00";
						$link=mysqli_connect("localhost","root","");
						mysqli_select_db($link,"iglesia");
						$result=mysqli_query($link,"select fecha from reservaciones where (id_usuario='$usP') and (id_reserva='$idE2')");
						
						
						if($row=mysqli_fetch_array($result)){
								
								
								$result2=mysqli_query($link,"SELECT * FROM reservaciones WHERE fecha = '$tiempo'");
								
								if(!$row2=mysqli_fetch_array($result2)){
									mysqli_query($link,"update reservaciones set fecha='$tiempo' where (id_usuario='$usP') and (id_reserva='$idE2')");
									
										echo "<h2 style='color:red;'>Evento actualizado</h2>";
									
									
								}else{
									echo "<h2 style='color:red;'>Hora no disponible, intento de nuevo</h2>";
									echo "<a href='ModificarE.php'>Regresar</a>";
								}
								
							
							
						}else{
							echo "<h2 style='color:red;'>No existe ese evento en su lista</h2>";
							echo "<a href='ModificarE.php'>Regresar</a>";
						}
					
				
				?>
				<br>
				<h2 style="color:#000; font-weight:lighter;"> Mis eventos</h2>
          		<?php
						$nom=$_SESSION['id_us'];
						
						$link=mysqli_connect("localhost","root","");
						mysqli_select_db($link,"iglesia");
						$result=mysqli_query($link,"select id_reserva,id_evento,fecha from reservaciones where id_usuario='$nom'");
						echo "<TABLE BORDER=1 style='margin: 0 auto;'><TR><TD><B>ID_Reservacion</B></TD><TD><B>ID_Evento</B></TD><TD><B>Nombre de Evento</B></TD><TD><B>Fecha</B></TD></TR>";
						if($row=mysqli_fetch_array($result)){
							mysqli_data_seek($result,0);
							$cont=0;
							while($row=mysqli_fetch_array($result)){
								
								$idE=$row['id_evento'];
								$res=$row['id_reserva'];
								$fecha=$row['fecha'];
								$result2=mysqli_query($link,"select nombreEvento from evento where id_evento='$idE'");
								while($row2=mysqli_fetch_array($result2)){
									$no=$row2['nombreEvento'];
									echo "<tr><td>$res</td><td>$idE</td><td>$no</td><td>$fecha</td></tr><br>";
									$cont++;
									break;
								}
								
							}
							echo"</table>";
						}else{
							echo "Usted no tiene evento todavia";
						}
						
						
				?>
              
                
            	
            </div>

         </div>
        <!-- ============ Sección Pie de Página ============= -->

        <footer class="sub_footer">
            <div class="container">
                <div class="col-md-4"><p class="sub-footer-text text-center">Theme by <a href="https://themewagon.com/">ThemeWagon</a></p></div>
            </div>
        </footer>


        <script type="text/javascript" src="js/jquery-1.10.2.min.js"> </script>
        <script type="text/javascript" src="js/bootstrap.min.js" ></script>
        <script type="text/javascript" src="js/jquery-1.10.2.js"></script>     
        <script type="text/javascript" src="js/jquery.mixitup.min.js" ></script>
        <script type="text/javascript" src="js/main.js" ></script>

    </body>
</html>