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

        <style type="text/css">
            .caja {                   
                   border:1px solid #d9d9d9;
                   height:30px;
                   overflow: hidden;
                   width: 230px;
                   position:relative;
                   text-align: left;
            }

            select {
               background: transparent;
               border: none;
               font-size: 14px;
               height: 30px;
               padding: 5px;
               width: 250px;
            }
            select:focus{ outline: none;}

            .caja::after{
                content:"\025be";
                display:table-cell;
                padding-top:7px;
                text-align:center;
                width:30px;
                height:30px;
                background-color:#d9d9d9;
                position:absolute;
                top:0;
                right:0px;  
                pointer-events: none;
            }
        </style>

    </head>

    <body>
<!--NAVBAR DE USUARIO INICIO-->
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
         

        <!-- ============ SECCION DE AGREGAR EVENTO  ============= -->
        <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="separacion"></div>
                            <br><br>
                            <div align="left">
                                <h1>AGREGAR EVENTO</h1>    
                            </div>

                        <p></p>
                        <div class="inner contact">
                            <!-- Form Area -->
                            <div class="contact-form">
                                <!-- Form -->
                                <form id="evento" method="post" action="verificaEvento.php">
                                    <!-- Left Inputs -->
                                    <div class="col-md-6 " align="left">
                                        <!-- TIPO DE EVENTO -->
                                        <label>TIPO DE EVENTO:</label>
                                        <div class="caja" align="left">
                                                <select name="tipoEvento">
                                                    <optgroup>
                                                        <option value="2">Bautizo</option>
                                                        <option value="3">Comunión</option>
                                                        <option value="4">Confirmación</option>
                                                        <option value="5">Matrimonio</option>
                                                        <option value="6">Velatorio</option>
                                                    </optgroup>    
                                                </select>
                                        </div>
                                        <br>
                                       
                                        <!--=====FECHA======-->
                                        <label>FECHA DEL EVENTO:</label><br> <input type="date" name="fecha" value= "<?php echo date("Y-m-d");?>"/>
                                        <br><br>
                                        
                                        <!--======HORA======-->
                                        <label>HORA DEL EVENTO</label><br>
                                        
                                        <input type="time" name="hora" form="evento" required />
                                        <br><br>
                                    </div>
                                    

                                    <div class="relative fullwidth col-xs-12" align="center">
                                        <!-- Send Button -->
                                        <button type="submit" id="continuar" name="continuar" 
                                        value="Continuar" class="form-btn">Continuar</button> 
                                    </div><!-- End Bottom Submit -->
                                    <!-- Clear -->
                                    <div class="clear"></div>
                                </form>
                            </div><!-- End Contact Form Area -->
                        </div><!-- End Inner -->
                    </div>
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