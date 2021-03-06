<?php
    session_start();
    if (!isset($_SESSION['id_us'])) {
        header("Location:index.html");
    }
?>
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


  
        <!-- ============ NOSOTROS  ============= -->

        <section  id="guadalupe"  class="description_content">
            <div class="guadalupe background_content">
                <h1>NOSOTROS</h1>
            </div>
            <div class="text-content container"> 
                <div class="inner contact">
                    <!-- Form Area -->
                    <div class="contact-form">
                        <!-- Form -->
                        <form id="contact-us" method="post" action="reserve.php">
                            <!-- Left Inputs -->
                            <div class="container">
                                <div class="row">
								<!-- HISTORIA DE LA IGLESIA -->
									<h2>HISTORIA</h2>
									<br>
									<p align="justify">Este santuario se remonta a la época prehispánica, ya que en este sitio (El cerro del Tepeyac) 
													   se rendía culto a Cihuacóatl (mujer de la culebra) también llamada Tonantzin, la deidad azteca 
													   de la maternidad, cuya celebración se relacionaba con el solsticio de invierno. Los testimonios 
													   de los misioneros del siglo XVIII dan fe de esto.
													   En el siglo XVI las aguas de la laguna de México llegaban hasta la base del cerro del Tepeyac. 
													   Este lugar era conocido por los mexicas como Tepeyacac que quiere decir en la nariz de la montaña 
													   o cumbre. Desde la ciudad de Tlatelolco partía una calzada que conducía a los peregrinos hasta este 
													   santuario dedicado a Tonatzin (madre de los dioses) posiblemente en el sitio en el que hoy ocupa 
													   la capilla del cerrito.
													   Así en 1709 se comenzó con la construcción de la primera Basílica de Guadalupe que estuvo en funciones 
													   por varios años, pero su estructura fue afectada por la edificación del vecino convento de las Capuchinas.
													   Pero debido al hundimiento de sus cimientos esta antigua Basílica se volvió riesgosa por ende, una moderna 
													   estructura llamada la nueva Basílica fue construida en su cercanía.
									</p>
                                    <hr>
									<h2>ACTUALMENTE</h2>
									<br>
									<p align="justify">La construcción de la nueva Basílica de Guadalupe, estuvo a cargo del arquitecto Pedro Ramírez, José Luis Benlliure, 
													   Alejandro Schoenhofer, fray Gabriel Chávez de la Mora y Javier García Lascuráin Vázquez y dedicada por el Papa Paulo 
													   VI el 11 de octubre de 1976. Él 12 de octubre se consagró como la casa más moderna de Santa María de Guadalupe. 
													   Es en esta nueva basílica donde el Papa Juan Pablo II celebró varias misas en sus viajes a México entre ellas la de 
													   la canonización del indio Juan Diego. Así lo hizo Juan Diego.
													   La nueva Basílica de Santa María Guadalupe, finalizada, ocupa un área de 10 mil metros cuadrados y es el más grande 
													   recinto de la devoción católica en México. Fue construida a raíz de la necesidad de albergar a la imagen de la Virgen 
													   de Guadalupe y permitir el acceso de una mayor cantidad de peregrinos ya que la inestabilidad del antiguo templo lo 
													   había vuelto peligroso para su uso. De planta circular, esta obra fue construida con hormigón armado para la estructura 
													   de la cubierta, y con láminas de cobre para su recubrimiento, las que al estar oxidadas le otorgan el característico color verde.
													   <br>
													   <br>
													   En el interior de este templo caben 10,000 personas, ubicadas en la parte central y en las nueve capillas del piso superior, 
													   que en caso necesario, pueden prestarse para ceremonias distintas a la del altar mayor. Desde la capilla abierta del segundo 
													   piso, que se dirige hacia el atrio recordando a las que utilizaban los primeros frailes durante el siglo XVI, el número de 
													   asistentes se aumenta a un total de 50, 000. En el sótano de la Basílica están las criptas, con más de 15,000 nichos y 10 
													   capillas para recordar a los difuntos que ahí descansan. 
													   En 2009, la basílica fue señalada como el principal destino religioso a nivel mundial, de acuerdo con la Oficina Española de 
													   Turismo. Debido al crecimiento exponencial de los fieles, el 12 de octubre de 2011 se inauguró la plaza Mariana, diseñada para 
													   atender a las casi 3,000 peregrinaciones organizadas que se realizan anualmente.
									</p>
									<hr>
									<h2>SANTUARIO NACIONAL</h2>
									<br>
									<p align="justify">La Basílica de Santa María de Guadalupe fue reconocida como Santuario Nacional por la Conferencia del Episcopado Mexicano, 
													   el 17 de noviembre de 1983.
													   <br>
													   <br>
													   Los fines principales del Santuario y de sus actividades pastorales son:
													   <br>
													   a) Promover el culto público a la Virgen de Guadalupe, Reina de México y Patrona de América.
													   <br>
													   b) Atender pastoralmente a los peregrinos que cada día en mayor número visitan a Santa María de Guadalupe.
													   <br>
													   <br>
													   El Santuario, como lugar privilegiado de la pastoral popular, tiene el deber de ofrecer abundantemente a 
													   los fieles peregrinos los medios de salvación, especialmente:
													   <br>
													   <br>
														1) El acceso frecuente a la Palabra de Dios<br>
														2) La promoción de una intensa vida litúrgica, especialmente en las celebraciones de la Eucaristía y del 
														Sacramento de la Reconciliación.<br>
														3) Las formas privilegiadas de la devoción popular especialmente la mariana.<br>
														4) La caridad hacia los más pobres y necesitados.<br>
									</p>
									<hr>
									
									
									<!-------------------------------------->
									<section class="our-team" id="team">
										<div class="container">
											<div class="section-header">
												<h2 class="dark-text">Relación de Canónigos y Sacerdotes de la Basílica de Guadalupe</h2><br>
												<div class="col-lg-6 col-sm-6">
												<div class="cardnosotros">
													<img src="images/sacerdote1.jpg" width="310" height="300">
													<h2>Emmo. Sr. Cardenal Carlos Aguiar Retes</h2>
													<p class="title">• Custodio del Sagrado Original de Nuestra Señora de Guadalupe</p>
													<div style="margin: 24px 0;"> 
													<a id="twitter" href="#"><i class="fa fa-twitter"></i></a>    
													<a id="face" href="#"><i class="fa fa-facebook"></i></a> 
													</div>
													<p ><button>ARZOBISPO</button></p>
												</div>
												</div>
												
												<div class="col-lg-6 col-sm-6">
												<div class="cardnosotros">
													<img src="images/sacerdote2.jpg" width="310" height="300">
													<h2>Mons. Dr. Enrique Glennie Graue</h2>
													<p class="title">•Rector de la Basílica de Santa María de Guadalupe</p>
													<div style="margin: 24px 0;"> 
													<a id="twitter" href="#"><i class="fa fa-twitter"></i></a>    
													<a id="face" href="#"><i class="fa fa-facebook"></i></a> 
													</div>
													<p><button>VICARIO</button></p>
												</div>
												</div>
											</div>
										</div>
										
										<div class="section-header">
												<h2 class="dark-text"><br><br>Canónigos Efectivos</h2><br>
												<div class="col-lg-4 col-sm-4">
												<div class="cardnosotros">
													<img src="images/Canónigo1.jpg" width="310" height="300">
													<h2>M. I. Sr. Canónigo Lic. Pedro Tapia Rosete</h2>
													<p class="title">Vice-Rector</p>
													<div style="margin: 24px 0;"> 
													<a id="twitter" href="#"><i class="fa fa-twitter"></i></a>    
													<a id="face" href="#"><i class="fa fa-facebook"></i></a> 
													</div>
													<p ><button>CANONIGO</button></p>
												</div>
												</div>
												
												<div class="col-lg-4 col-sm-4">
												<div class="cardnosotros">
													<img src="images/Canónigo2.jpg" width="310" height="300">
													<h2>M. I. Sr. Canónigo Leonardo Tinoco Flores</h2>
													<p class="title">Canónigo Penitenciario</p>
													<div style="margin: 24px 0;"> 
													<a id="twitter" href="#"><i class="fa fa-twitter"></i></a>    
													<a id="face" href="#"><i class="fa fa-facebook"></i></a> 
													</div>
													<p><button>CANONIGO</button></p>
												</div>
												</div>
												<div class="col-lg-4 col-sm-4">
												<div class="cardnosotros">
													<img src="images/Canónigo3.jpg" width="310" height="300">
													<h2>M. I. Sr. Canónigo Lic. Juan Castillo Hernández</h2>
													<p class="title">Director de la Pastoral Profética</p>
													<div style="margin: 24px 0;"> 
													<a id="twitter" href="#"><i class="fa fa-twitter"></i></a>    
													<a id="face" href="#"><i class="fa fa-facebook"></i></a>
													</div>
													<p><button>CANONIGO</button></p>
												</div>
												</div>
											</div>
										<!-- End Inner -->
            </div>
        </section>
      
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
