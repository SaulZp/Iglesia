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
                           <a class="navbar-brand" href="index.html">Comunidad Católica</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav main-nav  clear navbar-right ">
                            <li><a class="navactive color_animation" href="index.html">INICIO</a></li>
                            <li class="dropdown show"><a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">SERVICIOS</a><ul>
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
                            <li><a class="color_animation" href="eventos.php">PROXIMOS EVENTOS</a></li>
                            <li><a class="color_animation" href="nosotros.html">NOSOTROS</a></li>
                            <li><a class="color_animation" href="contacto.php">CONTACTO</a></li>
                            
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Entrar</b> <span class="caret"></span></a>
                                <ul id="login-dp" class="dropdown-menu">
                                  <li>
                                    <div class="row">

                                      <div class="col-md-12">
                                            <form class="form" role="form" method="post" action="validarLog.php" accept-charset="UTF-8" id="login-nav">
                                              <div class="form-group">
                                                <h3 class="white">Iniciar sesión</h3>
                                                  <label class="sr-only" for="email">Correo electrónico</label>
                                                  <input type="email" name="correo" class="form-control" id="email" placeholder="Correo electrónico" required>
                                                </div>
                                                <div class="form-group">
                                                  <label class="sr-only" for="password">Password</label>
                                                  <input type="password"  name="contra" class="form-control" id="password" placeholder="Constraseña" required>
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
        <!-- END NAVBAR -->

         
              <br><br>  
            <?php
            $link=mysqli_connect("localhost","root","");
                        mysqli_select_db($link,"iglesia");
                        $query = "SELECT *FROM proximosEventos";
                        $result = mysqli_query($link,$query);

                        if ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
                            mysqli_data_seek($result, 0);
                            while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
                              ?>
        <div class="container-fluid" style="margin: 3em; border: 1px solid #000000; border-radius: 10px;">
         <div class="row">
            <div class="col-md-12" style="padding: 1em;">
              
                              <?php
                              $nom = $row['nombreEvento'];
                              $descripcion = $row['descripcion'];
                              $imagen = $row['imagen'];
                              $fecha = $row['fecha'];
                              if (isset($imagen)) {
                                ?>
                              <h1 class="text-center" style="padding-bottom: 1px;"><?php echo "$nom"; ?></h1>
                              <h3><?php echo "$descripcion"; ?></h3>
                              <h5>Fecha: <?php echo "Fecha: $fecha"; ?></h5>

                              <img src="<?php echo('admin/img/'.$imagen) ?>">
                              <?php
                              }else{
                                ?>
                              <h1 class="text-center"><?php echo "$nom"; ?></h1>
                              <p><?php echo "$descripcion"; ?></p>
                              <p> <?php echo "Fecha: $fecha"; ?> </p>
                              <?php
                              }
                              
                              ?>
                            
                          </div>
                        </div>
                      </div>
                              <?php
                            }
                        }else{
                          ?>
                          <div class="container-fluid">
         <div class="row">
            <div class="col-md-12">
              <div class="separacion">
                          <h2 class="text-center">No hay eventos, visitanos pronto para ver los proximos eventos</h2>
                        </div>
                      </div>
                    </div>
                  </div>
                          <?php
                        }

          ?>  
              

        <script type="text/javascript" src="js/jquery-1.10.2.min.js"> </script>
        <script type="text/javascript" src="js/bootstrap.min.js" ></script>
        <script type="text/javascript" src="js/jquery-1.10.2.js"></script>     
        <script type="text/javascript" src="js/jquery.mixitup.min.js" ></script>
        <script type="text/javascript" src="js/main.js" ></script>

    </body>
</html>