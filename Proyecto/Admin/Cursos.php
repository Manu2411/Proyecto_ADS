<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Cursos Siramá</title>
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.12.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- Third party plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../css/style_curso.css" rel="stylesheet" />
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
            // Instanciando el script de conexión
            include("../php/Conexion.php");
        ?>



        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="Principal.php">FUNDACIÓN SIRAMÁ</a><button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="Principal.php">Principal</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="cursos.php">Cursos</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="Beneficiarias.php">Beneficiarias</a></li>
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
                        <?php echo imprimirtitulo1(2); ?>
                        <hr class="divider my-4" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <?php echo imprimirdescripcion1(2); ?>
                    </div>
                </div>
            </div>
        </header>
        <br>
        <!-- Portfolio section-->
        <section id="portfolio">
            <div class="container-fluid p-0">
                <div class="row no-gutters">
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="/ADS/Proyecto_ADS/Proyecto/img/Cursos/<?php echo imprimirImg(1); ?>">
                            <img class="img-fluid" src="/ADS/Proyecto_ADS/Proyecto/img/Cursos/<?php echo imprimirImg(1); ?>" alt="Foto_Curso1" /> <!-- Colocar imagenes de tamaño de 650x350 -->
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50"><?php echo imprimirNombre(1); ?></div>
                                <div class="project-name"><?php echo imprimirDescrip(1); ?></div>
                                <div class="project-name">Horario: <?php echo imprimirHorario(1); ?></div>
                                <div class="project-name">$<?php echo imprimirPrecio(1); ?></div>
                            </div></a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="/ADS/Proyecto_ADS/Proyecto/img/Cursos/<?php echo imprimirImg(2); ?>">
                            <img class="img-fluid" src="/ADS/Proyecto_ADS/Proyecto/img/Cursos/<?php echo imprimirImg(2); ?>" alt="Foto_Curso2" /> <!-- Colocar imagenes de tamaño de 650x350 -->
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50"><?php echo imprimirNombre(2); ?></div>
                                <div class="project-name"><?php echo imprimirDescrip(2); ?></div>
                                <div class="project-name">Horario: <?php echo imprimirHorario(2); ?></div>
                                <div class="project-name">$<?php echo imprimirPrecio(2); ?></div>
                            </div></a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="/ADS/Proyecto_ADS/Proyecto/img/Cursos/<?php echo imprimirImg(3); ?>">
                            <img class="img-fluid" src="/ADS/Proyecto_ADS/Proyecto/img/Cursos/<?php echo imprimirImg(3); ?>" alt="Foto_Curso3" /> <!-- Colocar imagenes de tamaño de 650x350 -->
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50"><?php echo imprimirNombre(3); ?></div>
                                <div class="project-name"><?php echo imprimirDescrip(3); ?></div>
                                <div class="project-name">Horario: <?php echo imprimirHorario(3); ?></div>
                                <div class="project-name">$<?php echo imprimirPrecio(3); ?></div>
                            </div></a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="/ADS/Proyecto_ADS/Proyecto/img/Cursos/<?php echo imprimirImg(4); ?>">
                            <img class="img-fluid" src="/ADS/Proyecto_ADS/Proyecto/img/Cursos/<?php echo imprimirImg(4); ?>" alt="Foto_Curso4" /> <!-- Colocar imagenes de tamaño de 650x350 -->
                            <div class="portfolio-box-caption">
                            <div class="project-category text-white-50"><?php echo imprimirNombre(4); ?></div>
                            <div class="project-name"><?php echo imprimirDescrip(4); ?></div>
                                <div class="project-name">Horario: <?php echo imprimirHorario(4); ?></div>
                                <div class="project-name">$<?php echo imprimirPrecio(4); ?></div>
                            </div></a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="/ADS/Proyecto_ADS/Proyecto/img/Cursos/<?php echo imprimirImg(5); ?>">
                            <img class="img-fluid" src="/ADS/Proyecto_ADS/Proyecto/img/Cursos/<?php echo imprimirImg(5); ?>" alt="Foto_Curso5" /> <!-- Colocar imagenes de tamaño de 650x350 -->
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50"><?php echo imprimirNombre(5); ?></div>
                                <div class="project-name"><?php echo imprimirDescrip(5); ?></div>
                                <div class="project-name">Horario: <?php echo imprimirHorario(5); ?></div>
                                <div class="project-name">$<?php echo imprimirPrecio(5); ?></div>
                            </div></a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="/ADS/Proyecto_ADS/Proyecto/img/Cursos/<?php echo imprimirImg(6); ?>">
                            <img class="img-fluid" src="/ADS/Proyecto_ADS/Proyecto/img/Cursos/<?php echo imprimirImg(6); ?>" alt="Foto_Curso6" /> <!-- Colocar imagenes de tamaño de 650x350 -->
                            <div class="portfolio-box-caption p-3">
                                <div class="project-category text-white-50"><?php imprimirNombre(6); ?></div>
                                <div class="project-name"><?php echo imprimirDescrip(6); ?></div>
                                <div class="project-name">Horario: <?php echo imprimirHorario(6); ?></div>
                                <div class="project-name">$<?php echo imprimirPrecio(6); ?></div>
                            </div></a>
                    </div>
                </div>
            </div>
        </section>

        <br>
        <br>

        <div class="container text-center">
            <a class="btn btn-info btn-xl" href="CRUD_admin/Cursos/Opciones_Cursos.php">Gestión de Cursos</a>
        </div>
        
        <br>
        <br>
        <!-- Call to action section-->
        <section class="page-section bg-dark text-white">
            <div class="container text-center">
                <h2 class="mb-4">Puedes descargar el formulario de inscripción!</h2>
                <a class="btn btn-light btn-xl" href="#">Descargar Ahora!</a>
            </div>
        </section>
        <br>
        <!-- Contact section-->
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
                        <a  href="mailto:info@fundacionsirama.org"><i class="fas fa-envelope fa-3x mb-3 text-white" id="links"></i></a><!-- Make sure to change the email address in BOTH the anchor text and the link target below!-->
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

    </body>
</html>
