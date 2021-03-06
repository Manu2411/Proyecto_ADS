<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Principal</title>
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.12.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- Third party plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="../css/style_SM.css">

        <!-- Icono de la fundación -->
			<link rel = "icon" href = "../img/Icono/Logo.ico" />
    </head>
    <body id="page-top">
        <?php
			session_start();

			if (!isset($_SESSION["usuario"])) {
				header("location:../Acceso_Admin.php");
			}
        ?>
        
        <?php
            include("../php/Conexion.php");

        ?>

        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="Principal.php">FUNDACIÓN SIRAMÁ</a><button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="Principal.php" title="Página Principal">Principal</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="Cursos.php" title="Cursos">Cursos</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="Beneficiarias.php" title="Beneficiarias">Beneficiarias</a></li>
                        <li class = "nav-item dropdown">
                        <a class="nav-link js-scroll-trigger dropdown-toggle" data-toggle="dropdown">Administrador
                        <span class="caret"></span></a>
                            <ul class = "dropdown-menu" id = "style_block">
                                <li class="nav-item">
                                    <a class="nav-item" id = "style_link"  href="CRUD_admin/Usuarios/Opciones_Usu.php" title="Nuevo Usuario"> <i id = "icono" class="fas fa-2x fa-user-plus"></i> Nuevo Usuario</a>
                                </li>
                                <br>
                                <li class="nav-item">
                                    <a class="nav-item" id = "style_link"  href="../php/CierreSesion.php" title="Cerrar Sesión"> <i id = "icono" class="fas fa-2x fa-sign-out-alt"></i> Cerrar Sesión</a>
                                </li>
                                <hr>
                                <li class="nav-item">
                                    <p class="nav-item" id = "style_parra"> <i class="fas fa-2x fa-user"></i> <?php echo "Usuario: " . $_SESSION["usuario"];?></p>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        
        <!-- Masthead-->
        <!-- Prefacio del Sitio, con imagen -->
        <header class="masthead">
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-10 align-self-end">
                        <?php echo imprimirtitulo1(1); ?>
                        <hr class="divider my-4" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <?php echo imprimirdescripcion1(1); ?>
                        <br>
                        <a class="btn btn-info  btn-xl js-scroll-trigger" href="CRUD_admin/Enunciados/Opciones_Enunciados.php">Gestión de Enunciados</a>
                    </div>
                </div>
            </div>
        </header>
        <!-- Services section-->
        <section class="page-section" id="services">
            <div class="container">
                <h2 class="text-center mt-0">Noticias Recientes</h2>
                <hr class="divider my-4" />
                <div class="row">
                    <div class="col-lg-4 col-md-6 text-center">
                        <div class="mt-5">
                            <!-- <i class="fas fa-4x fa-money-bill-alt text-primary mb-4"></i> -->
                            <?php echo imprimirTitu_Noti1(1); ?>
                            <br>
                            <?php echo imprimirDes_Noti1(1); ?>
                            <br>
                            <br>    
                            <button type="button" class="btn btn-primary btn-xl js-scroll-trigger" data-toggle='modal' data-target='#noticia1'>Ver Noticia</button>
                           
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 text-center">
                        <div class="mt-5">
                            <!-- <i class="fas fa-4x fa-book-open text-primary mb-4"></i> -->
                            <?php echo imprimirTitu_Noti1(2); ?>
                            <br>
                            <?php echo imprimirDes_Noti1(2); ?>
                            <br>
                            <br>    
                            <button type="button" class="btn btn-primary btn-xl js-scroll-trigger" data-toggle='modal' data-target='#noticia2'>Ver Noticia</button>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 text-center">
                        <div class="mt-5">
                            <!-- <i class="fas fa-4x fa-balance-scale text-primary mb-4"></i> -->
                            <?php echo imprimirTitu_Noti1(3); ?>
                            <br>
                            <?php echo imprimirDes_Noti1(3); ?>
                            <br>
                            <br>    
                            <button type="button" class="btn btn-primary btn-xl js-scroll-trigger" data-toggle='modal' data-target='#noticia3'>Ver Noticia</button>
                            
                        </div>
                    </div>
                </div>

                <br>
                <br>
                <div class="container text-center">
                    <a class="btn btn-info  btn-xl js-scroll-trigger" href="CRUD_admin/Noticias/Opciones_Noticias.php">Gestión de Noticias</a>
                </div>
            </div>

        </section>

        <section class="page-section bg-primary" id="contact">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="text-white mt-0">CONTÁCTANOS!</h2>
                        <hr class="divider my-4" />
                        <p class="text-white mb-4">Ponte en comunicación con nosotros para mayor información sobre los cursos, voluntariado o cualquier otra cosa que quieras saber.</p>
                    </div>
                </div>
                <br>
                <br>
                <div class="row">
                    <div class="col-lg-4 ml-auto text-center">
                        <a ><i class="fas fa-phone fa-3x mb-3 text-white" id="links"></i></a>
                        <div class="text-white-50 mb-4">(+503) 2516-8518</div>
                    </div>
                    <div class="col-lg-4 mr-auto text-center">
                        <a  href="https://www.facebook.com/fundacionsirama.org/?epa=SEARCH_BOX" target="_ablank"><i class="fab fa-facebook-f fa-3x mb-3 text-white" id="links"></i></a>
                        <div class="text-white-50 mb-4">Fundación Siramá</div>
                    </div>
                    <br>
                    <div class="col-lg-4 mr-auto text-center">
                        <a  href="mailto:info@fundacionsirama.org"><i class="fas fa-envelope fa-3x mb-3 text-white" id="links"></i></a>
                        <div class="text-white-50 mb-4">info@fundacionsirama.org</div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
        <!-- Core theme JS-->
        <script src="../js/scripts.js"></script>

        <!-- Modales para ver noticias -->

        <!--Modal 1-->
            <div class="modal fade" id="noticia1" tabindex="-1" role="dialog" aria-labelledby="solicitarLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <?php echo imprimirTi_Noti1(1); ?>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <?php echo imprimirCon_Noti1(1); ?>
                            </div>
                        </div>      
                    </div>
              </div>
            </div>
        <!--Termina Modal 1-->

        <!--Modal 2-->
            <div class="modal fade" id="noticia2" tabindex="-1" role="dialog" aria-labelledby="solicitarLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <?php echo imprimirTi_Noti1(2); ?>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <?php echo imprimirCon_Noti1(2); ?>
                            </div>
                        </div>     
                 </div>
              </div>
            </div>
        <!--Termina Modal 2-->

        <!--Modal 3-->
            <div class="modal fade" id="noticia3" tabindex="-1" role="dialog" aria-labelledby="solicitarLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <?php echo imprimirTi_Noti1(3); ?>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <?php echo imprimirCon_Noti1(3); ?>
                            </div>
                        </div>    
                    </div>
              </div>
            </div>
        <!--Termina Modal 3-->
        <!-- Terminan los modales para ver noticias --> 
    </body>
</html>