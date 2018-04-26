<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <title>Comunidad Católica</title>
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css" media="screen" type="text/css">
        <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Playball' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="css/cssnosotros.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/style-portfolio.css">
        <link rel="stylesheet" href="css/picto-foundry-food.css" />
        <link rel="stylesheet" href="css/jquery-ui.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link rel="icon" href="favicon.ico" type="image/x-icon">
    </head>

    <body>
		<?PHP session_start(); ?>
        <!-- NAVBAR -->
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
                            <li><a class="navactive color_animation" href="indexU.php">INICIO</a></li>
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
        <hr>
		<hr>

		<div id="Usuario" class="tabcontent">
			<div class="container">
				<center>
				<img src="images/avatar.png" alt="Avatar" style="width:150px">
				</center>
				<?php	
					$nom=$_SESSION['id_us'];
						
					$link=mysqli_connect("localhost","root","");
					mysqli_select_db($link,"iglesia");
					$result=mysqli_query($link,"select nombre,username,correo,direccion,telefono from usuario where id_usuario='$nom'");
					
					$row=mysqli_fetch_array($result);
					mysqli_data_seek($result,0);
					
					
					
					$nomb=$row['nombre'];
					$user=$row['username'];
					$correo=$row['correo'];
					$dir=$row['direccion'];
					$tel=$row['telefono'];
                    
					echo "<h3 align=\"center\">Nombre: $nomb</h3>";
					echo "<h3 align=\"center\">Usuario: $user</h3>";
					echo "<h3 align=\"center\">Correo: $correo</h3>";
					echo "<h3 align=\"center\">Direccion: $dir</h3>";
					echo "<h3 align=\"center\">Telefono: $tel</h3>";
					
					
					
				?>	
			</div>
		</div>

		<div id="Informacion" class="tabcontent">
			<h3 align="center">Mis Eventos</h3>
			<?php
				$nom=$_SESSION['id_us'];
						
				$link=mysqli_connect("localhost","root","");
				mysqli_select_db($link,"iglesia");
				$result=mysqli_query($link,"select id_reserva,id_evento,fecha from reservaciones where id_usuario='$nom'");
				echo "<TABLE BORDER=1 style='margin: 0 auto;'><TR><TD><B>    ID Reservacion    </B></TD><TD><B>    ID Evento    </B></TD><TD><B>    Nombre de Evento    </B></TD><TD><B>    Fecha    </B></TD></TR>";
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
							echo "<tr><td>    $res    </td><td>    $idE    </td><td>    $no    </td><td>    $fecha    </td></tr><br>";
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

		<div id="Eventos" class="tabcontent">
			<h3>Eventos</h3>
		</div>
		<button class="tablink" onclick="openPage('Usuario', this, '#1b5e20')" id="defaultOpen">USUARIO</button>
		<button class="tablink" onclick="openPage('Informacion', this, '#33691e')">MIS EVENTOS</button>
		<script>
		function openPage(pageName,elmnt,color) {
			var i, tabcontent, tablinks;
			tabcontent = document.getElementsByClassName("tabcontent");
			for (i = 0; i < tabcontent.length; i++) {
				tabcontent[i].style.display = "none";
			}
			tablinks = document.getElementsByClassName("tablink");
			for (i = 0; i < tablinks.length; i++) {
				tablinks[i].style.backgroundColor = "";
			}
			document.getElementById(pageName).style.display = "block";
			elmnt.style.backgroundColor = color;

		}
		// Get the element with id="defaultOpen" and click on it
		document.getElementById("defaultOpen").click();
		</script>
        



  


        
      
        <!-- ============ Sección Pie de Página ============= -->

        <footer class="sub_footer">
            <div class="container">
                <div class="col-md-4"><p class="sub-footer-text text-center"> <a>Comunidad Católica</a></p></div>
            </div>
        </footer>


        <script type="text/javascript" src="js/jquery-1.10.2.min.js"> </script>
        <script type="text/javascript" src="js/bootstrap.min.js" ></script>
        <script type="text/javascript" src="js/jquery-1.10.2.js"></script>     
        <script type="text/javascript" src="js/jquery.mixitup.min.js" ></script>
        <script type="text/javascript" src="js/main.js" ></script>

    </body>
</html>
