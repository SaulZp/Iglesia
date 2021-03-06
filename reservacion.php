<?
header ('Content-type: text/html; charset=utf-8');
php session_start(); ?>

<!DOCTYPE html>
<html>

    <head>
        
        <title>Comunidad Católica</title>
        <meta name="tipo_contenido"  content="text/html;" http-equiv="content-type" charset="utf-8">
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
                           <a class="navbar-brand" href="index.html">Comunidad Católica</a>
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
                                         <a class="dropdown-item" href="adoracion.html">ADORACION AL SANTISMO</a>
                                        <a class="dropdown-item" href="bautismo.html">SACRAMENTO DEL BAUTISMO</a>
                                        <a class="dropdown-item" href="matrimonio.html">SACRAMENTO DEL MATRIMONIO</a>
                                        <a class="dropdown-item" href="velatorio.html">VELATORIO</a>
                                        <a class="dropdown-item" href="pastoral.html">PASTORAL DE ENFERMOS</a>
                                        
                                        <a class="dropdown-item" href="confesiones.html">CONFESIONES</a>
                                        <a class="dropdown-item" href="cursos.html">CURSOS BIBLICOS</a>
                                        <a class="dropdown-item" href="quince.html">MISA DE XV A&Ntilde;OS</a>
                                        <a class="dropdown-item" href="retiros.html">RETIROS VOCACIONALES</a>
                                        <a class="dropdown-item" href="dispensarios.html">DISPENSARIOS</a>
                                    </div>
                                </ul>
                            </li>

                            <li><a class="color_animation" href="horarios.html">HORARIOS</a></li>
                            <li><a class="color_animation" href="eventos.html">PROXIMOS EVENTOS</a></li>
                            <li><a class="color_animation" href="nosotros.html">NOSOTROS</a></li>
                            <li><a class="color_animation" href="contacto.php">CONTACTO</a></li>
                            
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Entrar</b> <span class="caret"></span></a>
                                <ul id="login-dp" class="dropdown-menu">
                                  <li>
                                    <div class="row">

                                      <div class="col-md-12">

                                         <form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
                                              <div class="form-group">
                                                <h3 class="white">Iniciar sesión</h3>
                                                  <label class="sr-only" for="email">Correo electrónico</label>
                                                  <input type="email" class="form-control" id="email" placeholder="Correo electrónico" required>
                                                </div>
                                                <div class="form-group">
                                                  <label class="sr-only" for="password">Password</label>
                                                  <input type="password" class="form-control" id="password" placeholder="Constraseña" required>
                                                  <div class="help-block text-right"><a href="restablecer.php">¿Olvidaste tu contraseña?</a></div>
                                              </div>
                                            <div class="form-group">
                                                    <button type="submit" class="btn btn-primary btn-block">Iniciar sesión</button>
                                                </div>
                                            </form>
                                       </div>
                                   <div class="bottom text-center">
                                     <a href="registro.php"><b>Registrarse</b></a>
                                   </div>
                                  </div>
                                   </li>
                                </ul>
                             </li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div>
            </div><!-- /.container-fluid -->
        </nav>
         
        
        <!-- ============ Featured Dish  ============= -->

        <section id="reservacion" class="description_content">
            <div  class="reservacion background_content">
                <h1>Haga su reservación</h1>
            </div>
            <div class="text-content container"> 
                <div class="col-md-6">
                    <?php
                        $link=mysqli_connect("localhost","root","");
                        mysqli_select_db($link,"iglesia");
                    ?>
                <div class="form">
                    <FORM ACTION="reservacion.php" METHOD="POST">
                        <select name="evento" class="input-group-sm">
                            <?php
                                $result=mysqli_query($link,"SELECT *FROM evento");
                                while ($row = mysqli_fetch_array($result)) {
                                    $nombre = utf8_encode($row['nombreEvento']);
                                    $id = $row['id_evento'];
                            ?>      
                                <option value=<?php echo "$id" ?>><?php echo"$nombre" ?></option>
                            <?php
                                }
                            ?>
                            <option ></option>
                        </select>
                        <input  type="submit" name="enviar">
                    </FORM>
                </div>
                    <form class="form" action="reservacion.php" method="POST" >
                        <?php
                        
                            $evento = $_REQUEST['evento'];
                            echo "$evento";    
                        
                        
                        if (isset($_REQUEST['enviar'])) {
                            if ($_POST['enviar']) {
                                
                            }
                        }
                        ?>
                    </form>
                    
                </div>
                
            </div>
        </section>
        <br><br><br><br>

        

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