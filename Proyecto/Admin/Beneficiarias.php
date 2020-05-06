<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Beneficiarias</title>
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.12.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- Third party plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../css/style_bene.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="../css/style_SM.css">

        <!-- Icono de la fundación -->
			<link rel = "icon" href = "../img/Icono/Logo.ico" />
    </head>
    <body id="page-top">

        <?php
			session_start();

			if (!isset($_SESSION["usuario"])) {
				header("location:../Acceso_Admin.html");
			}
        ?>

        <?php 
            //Instanciando el script de conexión
            include("../php/Conexion.php");
        ?>

        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="Principal.php">FUNDACIÓN SIRAMÁ</a><button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="Principal.php">Principal</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="Cursos.php">Cursos</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="Beneficiarias.php">Beneficiarias</a></li>
                        <li class = "nav-item dropdown">
                        <a class="nav-link js-scroll-trigger dropdown-toggle" data-toggle="dropdown">Administrador
                        <span class="caret"></span></a>
                            <ul class = "dropdown-menu" id = "style_block">
                                <li class="nav-item">
                                    <a class="nav-item" id = "style_link"  href="#" title="Nuevo Usuario"> <i class="fas fa-2x fa-user-plus"></i> Usuario Nuevo</a>
                                </li>
                                <br>
                                <li class="nav-item">
                                    <a class="nav-item" id = "style_link"  href="../php/CierreSesion.php" title="Cerrar Sesión"> <i class="fas fa-2x fa-sign-out-alt"></i> Cerrar Sesión</a>
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
        <header class="masthead">
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-10 align-self-end">
                        <h1 class="text-uppercase text-white font-weight-bold">Ayudando a la formación integral de las mujeres salvadoreñas</h1>
                        <hr class="divider my-4" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-white-75 font-weight-light mb-5">Desde de nuestros inicios hemos brindado a las mujeres salvadoreñas nuestro apoyo para que puedan obtener una formación integral y así ser una persona de bien en la sociedad.</p>
                    </div>
                </div>
            </div>
        </header>
        <!-- About section-->
        <section class="page-section bg-primary" id="about">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="text-white mt-0">BENEFICIARIAS</h2>
                        <hr class="divider light my-4" />
                        <p class="text-white-50 mb-4">Anualmente buscamos beneficiar a 1,000 mujeres provenientes de diferentes zonas del departamento de San Salvador; el cual es fuertemente golpeado por la violencia de las pandillas en El Salvador. Las mujeres viven en entornos de violencia día a día, en el año 2017, cerró con un promedio de 11 homicidios al día. En El Salvador hubo 3,954 asesinatos durante el pasado año. Es una realidad difícil que solo puede enfrentarse con apoyo de instituciones de carácter social como nuestra Fundación.</p>
                        <a class="btn btn-light btn-xl js-scroll-trigger" href="#information">Leer más...</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- information section-->
        <section class="page-section" id="information">
            <div class="container">
                <h2 class="text-center mt-0">Datos interesantes de la fundación.</h2>
                <hr class="divider my-4" />
                <div class="row">
                    <div class="col-lg-4 col-md-6 text-center">
                        <div class="mt-5">
                            <i class="fas fa-4x fa-folder-open text-primary mb-4"></i>
                            <h3 class="h4 mb-2">50</h3>
                            <p class="text-muted mb-0">Proyectos de cooperación internacional.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 text-center">
                        <div class="mt-5">
                            <i class="fas fa-4x fa-female text-primary mb-4"></i>
                            <h3 class="h4 mb-2">45,000</h3>
                            <p class="text-muted mb-0">Mujeres beneficiadas desde 1970.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 text-center">
                        <div class="mt-5">
                            <i class="fas fa-4x fa-users text-primary mb-4"></i>
                            <h3 class="h4 mb-2">225,000</h3>
                            <p class="text-muted mb-0">Beneficiarios indirectos en nuestra historia.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio section-->
        <section id="portfolio"> <!-- Todas las imagenes deben de ser de igual tamaño para que no se distorsionen las medidas de los divs -->
            <div class="container-fluid p-0">
                <div class="row no-gutters">
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="/Proyecto_ADS/Proyecto/img/Beneficiarias/<?php echo imprimirPhoto(1); ?>"
                            ><img class="img-fluid" src="/Proyecto_ADS/Proyecto/img/Beneficiarias/<?php echo imprimirPhoto(1); ?>" alt="" />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50"><?php echo imprimirBeneName(1); ?></div>
                                <div class="project-name"><?php echo imprimirOpinion(1); ?></div>
                            </div></a
                        >
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="/Proyecto_ADS/Proyecto/img/Beneficiarias/<?php echo imprimirPhoto(2); ?>"
                            ><img class="img-fluid" src="/Proyecto_ADS/Proyecto/img/Beneficiarias/<?php echo imprimirPhoto(2); ?>" alt="" />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50"><?php echo imprimirBeneName(2); ?></div>
                                <div class="project-name"><?php echo imprimirOpinion(2); ?></div>
                            </div></a
                        >
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="/Proyecto_ADS/Proyecto/img/Beneficiarias/<?php echo imprimirPhoto(3); ?>"
                            ><img class="img-fluid" src="/Proyecto_ADS/Proyecto/img/Beneficiarias/<?php echo imprimirPhoto(3); ?>" alt="" />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50"><?php echo imprimirBeneName(3); ?></div>
                                <div class="project-name"><?php echo imprimirOpinion(3); ?></div>
                            </div></a
                        >
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="/Proyecto_ADS/Proyecto/img/Beneficiarias/<?php echo imprimirPhoto(4); ?>"
                            ><img class="img-fluid" src="/Proyecto_ADS/Proyecto/img/Beneficiarias/<?php echo imprimirPhoto(4); ?>" alt="" />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50"><?php echo imprimirBeneName(4); ?></div>
                                <div class="project-name"><?php echo imprimirOpinion(4); ?></div>
                            </div></a
                        >
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="/Proyecto_ADS/Proyecto/img/Beneficiarias/<?php echo imprimirPhoto(5); ?>"
                            ><img class="img-fluid" src="/Proyecto_ADS/Proyecto/img/Beneficiarias/<?php echo imprimirPhoto(5); ?>" alt="" />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50"><?php echo imprimirBeneName(5); ?></div>
                                <div class="project-name"><?php echo imprimirOpinion(5); ?></div>
                            </div></a
                        >
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="/Proyecto_ADS/Proyecto/img/Beneficiarias/<?php echo imprimirPhoto(6); ?>"
                            ><img class="img-fluid" src="/Proyecto_ADS/Proyecto/img/Beneficiarias/<?php echo imprimirPhoto(6); ?>" alt="" />
                            <div class="portfolio-box-caption p-3">
                                <div class="project-category text-white-50"><?php echo imprimirBeneName(6); ?></div>
                                <div class="project-name"><?php echo imprimirOpinion(6); ?></div>
                            </div></a
                        >
                    </div>
                </div>
            </div>
        </section>

        <br>
        <br>

        <div class="container text-center">
            <a class="btn btn-info btn-xl" href="CRUD_admin/Beneficiarias/Opciones_Bene.php">Opciones de Beneficiarias</a>
        </div>

        <br>
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
