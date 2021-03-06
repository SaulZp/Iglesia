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
                            <li><a class="navactive color_animation" href="#top">INICIO</a></li>
                            <li class="dropdown show"><a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">SERVICIOS</a>
                                <ul>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
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
         
        <!-- ============ Sección de contacto  ============= -->
        <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="separacion"></div>
                        <br><br>
                        <h1>Registrate</h1>
                        <p></p>
                        <div class="inner contact">
                            <!-- Form Area -->
                            <div class="contact-form">
                                <!-- Form -->
                                <form id="contact-us" method="post" action="verificaRegistro.php">
                                    <!-- Left Inputs -->
                                    <div class="col-md-6 ">
                                        <!-- Nombre -->
                                        <input type="text" name="nombre" id="nombre" required="required" class="form" placeholder="Nombre" maxlength="50" required max="50"/>
                                        <!-- Email -->
                                        <input type="text" name="usuario" id="usuario" required="required" class="form" placeholder="Usuario" maxlength="15" />
                                        <!-- Asunto -->
                                        <input type="email" name="correo" id="correo" required="required" class="form" placeholder="Email" maxlength="30"/>
                                        <!-- Password-->
                                        <input type="password" name="password" id="password" required="required" class="form" placeholder="Password" maxlength="30" />
                                        <!-- Direccion-->
                                        <input type="text" name="direccion" id="direccion" required="required" class="form" placeholder="Direccion" maxlength="100" size="30"/>
                                        <!-- Telefono-->
                                        <input type="tel" name="telefono" id="telefono" required="required" class="form" placeholder="Telefono" />
                                    </div>
                                    <!-- End Left Inputs -->
                                    
                                    <!-- Bottom Submit -->
                                    <div class="relative fullwidth col-xs-12">
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