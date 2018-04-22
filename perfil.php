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
                        <a class="navbar-brand" href="#">Comunidad Católica</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav main-nav  clear navbar-right ">
                            <li><a class="navactive color_animation" href="index.html">INICIO</a></li>
                            <li class="dropdown show"><a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    SERVICIOS
  </a>
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

                            <li><a class="color_animation" href="horariosphpU.">HORARIOS</a></li>
                            <li><a class="color_animation" href="eventos.php">PROXIMOS EVENTOS</a></li>
                            <li><a class="color_animation" href="nosotrosU.php">NOSOTROS</a></li>
                            <li><a class="color_animation" href="contacto.php">CONTACTO</a></li>
							<li><a class="color_animation" href="perfil.php">MI PERFIL</a></li>
                            <li><a class="color_animation" href="salir.php">SALIR</a></li>
                            
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div>
            </div><!-- /.container-fluid -->
        </nav>
        <hr>
		<hr>
		
		<button class="tablink" onclick="openPage('Usuario', this, '#1b5e20')">Usuario</button>
		<button class="tablink" onclick="openPage('Informacion', this, '#33691e')" id="defaultOpen">Informacion</button>
		<button class="tablink" onclick="openPage('Eventos', this, '#2e7d32')">Eventos</button>
		<button class="tablink" onclick="openPage('Calendario', this, '#558b2f')">Calendario</button>

		<div id="Usuario" class="tabcontent">
			<div class="container">
				<img src="images/avatar.png" alt="Avatar" class="imageU">
				<h3 style = "text-align:center;">Usuario</h3>
			</div>
		</div>

		<div id="Informacion" class="tabcontent">
			<h3>Informacion</h3>
			<p>Informacion del Usuario</p> 
		</div>

		<div id="Eventos" class="tabcontent">
			<h3>Eventos</h3>
			<p>Eventos del Usuario</p>
		</div>

		<div id="Calendario" class="tabcontent">
			<h3>Calendario</h3>
			<p>Calendario para guia</p>
		</div>

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
