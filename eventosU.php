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
         

        <div class="container-fluid">
         <div class="row">
            <div class="col-md-12">
              <div class="separacion"> 
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
              </div>
          </div>
         </div>
        </div>


        <script type="text/javascript" src="js/jquery-1.10.2.min.js"> </script>
        <script type="text/javascript" src="js/bootstrap.min.js" ></script>
        <script type="text/javascript" src="js/jquery-1.10.2.js"></script>     
        <script type="text/javascript" src="js/jquery.mixitup.min.js" ></script>
        <script type="text/javascript" src="js/main.js" ></script>

    </body>
</html>