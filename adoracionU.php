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
        
        <!-- ============ Featured Dish  ============= -->

        <section id="featured" class="description_content">
            <div  class="featured background_content">
                <h1>Adoración al santismo</h1>
            </div>
            <div class="text-content container"> 
                <div class="col-md-6">
                    <p class="desc-text">Adorar a Dios es reconocer con respeto y sumisión absolutos la nada de la criatura que solo existe por Dios. Es alabarlo, exaltarlo y humillarse a sí mismo como hace María en el magníficat confesando con gratitud que El ha hecho grandes cosas y que su nombre es Santo.

Es el signo de nuestro amor al Señor, es una manera de tener la oportunidad de ver a Jesús Eucaristía, de ver la imagen que va a estar en vivo en presencia real en la casa de adoración perpetua.

El fin de la adoración al santísimo es dejarnos moldear por El ya que nosotros somos nada ante su Presencia. El es el alfarero y nosotros la arcilla en sus benditas manos. Nos moldea a su imagen y semejanza hasta imprimir en nosotros su rostro como si nos miráramos en un espejo.

Tenemos y debemos adorar al Señor porque Dios es Espíritu y los que lo adoran deben hacerlo en espíritu y verdad, (Juan 4,24). Jesús también necesita de nosotros ya que si no le abrimos el corazón  el no puede realizar su obra y no podemos colaborar para la Gloria de Dios.</p>
                </div>
                
            </div>
        </section>


        

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