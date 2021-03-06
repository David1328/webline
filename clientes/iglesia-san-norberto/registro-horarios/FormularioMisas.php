<?php include("timephp/time.php"); ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Webline - San Norberto</title>
    <link href="../../../css/bootstrap.min.css" rel="stylesheet">
    <link href="../../../css/animate.min.css" rel="stylesheet">
    <link href="../../../css/font-awesome.min.css" rel="stylesheet">
    <link href="../../../css/lightbox.css" rel="stylesheet">
    <link href="../../../css/main.css" rel="stylesheet">
    <link id="../../../css-preset" href="../../../css/presets/preset1.css" rel="stylesheet">
    <link href="../../../css/responsive.css" rel="stylesheet">

    <!--<link href="../../css/login.css" rel="stylesheet">-->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

    <!--[if lt IE 9]>
            <script src="js/html5shiv.js"></script>
            <script src="js/respond.min.js"></script>
          <![endif]-->

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" href="../../../images/weblineico.png">
</head>
<!--/head-->

<body>

    <div class="main-nav">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Navegacion</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="../../../index.php">
                    <h1><img class="img-responsive" src="../../../images/weblinenav.png" alt="logo"></h1>
                </a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="scroll active"><a href="../../../index.php#home">Inicio</a></li>
                    <li class="scroll"><a href="#">Reservas Misas</a></li>
                    <li class="scroll"><a href="registros-san-norberto/Registro.php">Registro San Norberto</a></li>
                    <li class="scroll"><a href="../../../index.php#portfolio">Portafolio</a></li>
                    <li class="scroll"><a href="../../index.php#contact">Contactanos</a></li>
                </ul>
            </div>
        </div>
    </div>

    <section class="container-login">
        <div class="head">
            <h1 class="tittle">Bienvenido a la Parroquia San Norberto</h1>
            <img src="../../../clientes/img/horarios.jpeg">
        </div>

        <div class="space">
            <form action="Horarios.php" method="POST">
                <div class="container-datos">
                    <div class="containerone">
                        <div class="item">
                            <h3>Nombre</h3>
                            <input placeholder="Nombre" type="text" name="nombre" required minlength="3" pattern="[A-Za-zÁ-ý\u00f1\u00d1 ]+"">
                        </div>
                        <div class=" item">
                            <h3>Apellido</h3>
                            <input placeholder="Apellido" type="text" name="apellido" required minlength="3" pattern="[A-Za-zÁ-ý\u00f1\u00d1 ]+">
                        </div>
                        <div class="item">
                            <h3>Cedula</h3>
                            <input placeholder="Cedula" required minlength="6" required maxlength="11" min="999999" type="text" name="cedula" pattern="[0-9]+">
                        </div>
                        <div class="item">
                            <h3>Teléfono </h3>
                            <input placeholder="Telefono" type="text" name="telefono" required minlength="7" required maxlength="10" pattern="[0-9]+">
                        </div>
                        <div class="item">
                            <h3>Fecha a reservar</h3>
                            <input type="date" name="fecha" min="<?php printf($date) ?>" max=<?php printf($datef) ?> required>

                        </div>
                    </div>

                    <div class="horarios">

                        <div class="hora">
                            <div class="htittle">
                                <h3>Seleccione una hora</h3>
                            </div>
                            <table class="table table-responsive">
                                <td class="item">
                                    <input type="radio" name="hora" value="7:30" required><span>7:30am</span>
                                </td>
                                <td class="item">
                                    <input type="radio" name="hora" value="8:00" required><span>8:00am</span>
                                </td>
                                <td class="item">
                                    <input type="radio" name="hora" value="9:30" required><span>9:30am</span>
                                </td>
                            </table>
                            <table class="table table-responsive">
                                <td class="item">
                                    <input type="radio" name="hora" value="12:30" required><span>12:30pm</span>
                                </td>
                                <td class="item">
                                    <input type="radio" name="hora" value="16:30" required><span>4:30pm</span>
                                </td>
                                <td class="item">
                                    <input type="radio" name="hora" value="18:30" required><span>6:30pm</span>
                                </td>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="boton">
                    <input class="btn" type="submit" name="enviarHorario">
                </div>
            </form>
        </div>
    </section>
    <!--/#login-->


    <footer id="footer">
        <div class="footer-top wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="container text-center">
                <div class="footer-logo">
                    <a href="index.html"><img class="img-responsive" src="../../../images/185.png" alt=""></a>
                </div>
                <div class="social-icons">
                    <ul>
                        <li><a class="envelope" href="#"><i class="fa fa-envelope"></i></a></li>
                        <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a class="tumblr" href="#"><i class="fa fa-tumblr-square"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <p>&copy; 2020 Webline.</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="pull-right">www.creadorwebline.com</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script type="text/javascript" src="../../../js/jquery.js"></script>
    <script type="text/javascript" src="../../../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script type="text/javascript" src="../../../js/jquery.inview.min.js"></script>
    <script type="text/javascript" src="../../../js/wow.min.js"></script>
    <script type="text/javascript" src="../../../js/mousescroll.js"></script>
    <script type="text/javascript" src="../../../js/smoothscroll.js"></script>
    <script type="text/javascript" src="../../../js/jquery.countTo.js"></script>
    <script type="text/javascript" src="../../../js/lightbox.min.js"></script>
    <script type="text/javascript" src="../../../js/main.js"></script>
</body>

</html>