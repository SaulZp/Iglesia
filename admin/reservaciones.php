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
    <script type="text/javascript">
        $(document).ready(function() {
    $('a[data-confirm]').click(function(ev) {
        var href = $(this).attr('href');
        if (!$('#dataConfirmModal').length) {
            $('body').append('<div id="dataConfirmModal" class="modal" role="dialog" aria-labelledby="dataConfirmLabel" aria-hidden="true"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button><h3 id="dataConfirmLabel">Please Confirm</h3></div><div class="modal-body"></div><div class="modal-footer"><button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button><a class="btn btn-primary" id="dataConfirmOK">OK</a></div></div>');
        } 
        $('#dataConfirmModal').find('.modal-body').text($(this).attr('data-confirm'));
        $('#dataConfirmOK').attr('href', href);
        $('#dataConfirmModal').modal({show:true});
        return false;
    });
});
    </script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
    <style type="text/css">
        table#tb1{
            width: 100%; 
            background-color: #f1f1c1;
        }
    </style>
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
                        <h4 class="page-title">RESERVACIONES</h4> </div>
                    
                    <!-- /.col-lg-12 -->
                </div>

                <!--row -->
                <div class="row">
                    <div class="col-md-12" ">
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th>TIPO EVENTO</th>
                                    <th>FECHA</th>
                                </tr>
                            <!--CONEXION DE LA BASE DE DATOS-->
                            <?php

                        $link=mysqli_connect("localhost","root","");
                        mysqli_select_db($link,"iglesia");
                        $query = "SELECT *FROM reservaciones";
                        $result = mysqli_query($link,$query);

                        if ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
                            mysqli_data_seek($result, 0);
                            while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
                                $id_reservacion = $row['id_reserva'];
                                $id_evento = $row['id_evento'];
                                $fecha = $row['fecha'];
                                if($id_evento == "2"){
                                    $nombre_evento = "Bautizo";
                                }else if($id_evento == "3"){
                                    $nombre_evento = "Comunión";
                                }else if($id_evento == "4"){
                                    $nombre_evento = "Confirmación";
                                }else if($id_evento == "5"){
                                    $nombre_evento = "Matrimonio";
                                }else if($id_evento == "5"){
                                    $nombre_evento = "Velatorio";
                                }
                            ?>
                                <tr>
                                    <td><?php echo "$nombre_evento"; ?></td>
                                    <td><?php echo "$fecha"; ?></td>
                                    <td></td>

                                        <td><a href="eliminarEvento.php?id_reservacion=<?php echo "$id_reservacion"?>" class="waves-effect" onclick="return confirm('¿Esta seguro que desea eliminar?');"><i class="fa fa-times fa-fw" aria-hidden="true"></i><span class="hide-menu">Eliminar</span></a></td>

                                </tr>
                        <?php 
                            }
                        }else{
                            echo "Aun no existen eventos reservados";
                        }
                        ?>    
                        </table>
                        </div>
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
<script type="text/javascript">
    
</script>
</html>