    <?php header ('Content-type: text/html; charset=utf-8');  ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" type="image/png" sizes="16x16" href="plugins/images/favicon.ico">
        <title>Comunidad Católica</title>
        <!-- Bootstrap Core CSS -->
        <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Menu CSS -->
        <link href="plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
        
        <!-- morris CSS -->
        <link href="plugins/bower_components/morrisjs/morris.css" rel="stylesheet">
        <!-- animation CSS -->
        <link href="css/animate.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="css/style.css" rel="stylesheet">
        <!-- color CSS -->
        
        <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    </head>

    <body>
        <!-- Preloader -->
        <div class="preloader">
            <div class="cssload-speeding-wheel"></div>
        </div>

        <div id="wrapper">
            <!-- Navigation -->
            <nav class="navbar navbar-default navbar-static-top m-b-0">
                <div class="navbar-header"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="fa fa-bars"></i></a>
                    <div class="top-left-part">
    					<a href="index.php">
    						Comunidad Católica
    					</a>
    				</div>
                    
                    <ul class="nav navbar-top-links navbar-right pull-right">
                        <li>
                            <!-- plugins/images/salir.png -->
                            <a href="salir.php" class="profile-pic"><i class="fa fa-sign-out fa-fw" aria-hidden="true"></i><b class="hidden-xs">Cerrar sesión</b></a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-header -->
                <!-- /.navbar-top-links -->
                <!-- /.navbar-static-side -->
            </nav>
            <!-- Left navbar-header -->
            <div class="navbar-default sidebar sticky-top" role="navigation">
                <div class="sidebar-nav navbar-collapse slimscrollsidebar">
                    <ul class="nav" id="side-menu">
                        <li style="padding: 10px 0 0;">
                            <a href="index.php" class="waves-effect"><i class="fa fa-clock-o fa-fw" aria-hidden="true"></i><span class="hide-menu">Inicio</span></a>
                        </li>
                        
                        <li>
                            <a href="usuarios.php" class="waves-effect"><i class="fa fa-group fa-fw" aria-hidden="true"></i><span class="hide-menu">Usuarios</span></a>
                        </li>
                        <li>
                            <a href="reservaciones.php" class="waves-effect"><i class="fa fa-calendar fa-fw" aria-hidden="true"></i><span class="hide-menu">Reservaciones</span></a>
                        </li>
                        <li>
                            <a href="eventos.php" class="waves-effect"><i class="fa fa-folder-open fa-fw" aria-hidden="true"></i><span class="hide-menu">Proximos eventos</span></a>
                        </li>
                    </ul>
                    
                </div>
            </div>
            <!-- Left navbar-header end -->
            <!-- Page Content -->
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row bg-title">
                        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                            <h4 class="page-title">Agregar un nuevo evento</h4> </div>
                        
                        <!-- /.col-lg-12 -->
                    </div>
                                    <!--row -->
                    <div class="row">
                        <div class="col-md-12">
                            
                            <form action="agregaEvento.php" method="POST" enctype="multipart/form-data">
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1">Nombre del evento</span>
                                    <input type="text" name="nombre" class="form-control" placeholder="Nombre" aria-describedby="basic-addon1" maxlength="30" required>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Descripción</label>
                                    <textarea class="form-control" rows="3" name="descripcion" required></textarea>
                                </div>
                                <div class="form-group">
                                    
                                    <label for="datepicker">Fecha<br></label>
                                    <input type="date" id="datepicker" name="fecha" required>    
                                </div>
                                <br>
                                <div class="custom-file">
                                    <label class="custom-file-label" for="customFile">Seleccionar imagen</label>
                                    <input type="file" class="custom-file-input" id="customFile" accept="image/*" name="imagen">
                                </div>
                                <br>
                                <input type="submit" name="enviar" value="Agregar">
                            </form>
                            <?php
                            
                            
                                if (isset($_POST['enviar'])) {
                                    $nombre = $_POST['nombre'];
                                    $descripcion = $_POST['descripcion'];
                                    $fecha = $_POST['fecha'];
                                    $link=mysqli_connect("localhost","root","");
                                    mysqli_select_db($link,"iglesia");
                                    
                                    $imagen = basename($_FILES["imagen"]["name"]);
                                    
                                    if ($imagen == ''){
                                        $insert = "INSERT INTO proximosEventos (nombreEvento,descripcion,fecha) VALUES ('$nombre','$descripcion','$fecha')";
                                        
                                        if (mysqli_query($link,$insert)) {
                                           echo '<script>alert("Informacion agregada correctamente");</script>';
                                            echo '<script>window.location="eventos.php";</script>';
                                        }else{
                                            echo "Error al agregar en proximos eventos";
                                        }

                                    }else{
                                        date_default_timezone_set('America/Mexico_City');
                                        $mydate = getdate();
                                        $today = date('Y-m-d-H-i-u');
                                        $target_dir = "img/";
                                        $target_file = $target_dir . $today . basename($_FILES["imagen"]["name"]);
                                        
                                        $uploadOk = 1;
                                        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                                        $imagen = $today . basename( $_FILES["imagen"]["name"]);
                                        // Check if image file is a actual image or fake image
                                        if(isset($_POST["submit"])) {
                                            $check = getimagesize($_FILES["imagen"]["tmp_name"]);
                                            if($check !== false) {
                                                echo "File is an image - " . $check["mime"] . ".";
                                                $uploadOk = 1;
                                            } else {
                                                echo "File is not an image.";
                                                $uploadOk = 0;
                                            }
                                        }
                                        // Allow certain file formats
                                        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
                                            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                                            $uploadOk = 0;
                                        }
                                        // Check if $uploadOk is set to 0 by an error
                                        if ($uploadOk == 0) {
                                            echo "Sorry, your file was not uploaded.";
                                            // if everything is ok, try to upload file
                                        } else {
                                            if (move_uploaded_file($_FILES["imagen"]["tmp_name"], $target_file)) {
                                                echo "El archivo se subio de manera correcta";
                                            } else {
                                                echo "Sorry, there was an error uploading your file.";
                                            }   
                                        }                                        
                                        if ($uploadOk == 1) {
                                            $insert = "INSERT INTO proximosEventos (nombreEvento,descripcion,fecha,imagen) VALUES ('$nombre','$descripcion','$fecha','$imagen')";
                                            if (mysqli_query($link,$insert)) {
                                                echo '<script>alert("Informacion agregada correctamente");</script>';
                                                echo '<script>window.location="eventos.php";</script>';
                                            }
                                        }
                                    }
                                }
                                ?>
                        </div>
                    </div>

                </div>
                        <!-- /.container-fluid -->
                <footer class="footer text-center"> 2017 &copy; Pixel Admin brought to you by wrappixel.com </footer>
            </div>
            <!-- /#page-wrapper -->
        </div>
        <!-- /#wrapper -->
        <!-- jQuery -->
        <script src="plugins/bower_components/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- Menu Plugin JavaScript -->
        <script src="plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
        <!--slimscroll JavaScript -->
        <script src="js/jquery.slimscroll.js"></script>
        <!--Wave Effects -->
        <script src="js/waves.js"></script>
        <!--Counter js -->
        <script src="plugins/bower_components/waypoints/lib/jquery.waypoints.js"></script>
        <script src="plugins/bower_components/counterup/jquery.counterup.min.js"></script>
        <!--Morris JavaScript -->
        <script src="plugins/bower_components/raphael/raphael-min.js"></script>
        <script src="plugins/bower_components/morrisjs/morris.js"></script>
        <!-- Custom Theme JavaScript -->
        <script src="js/custom.min.js"></script>
        <script src="js/dashboard1.js"></script>
        
    </body>

    </html>
