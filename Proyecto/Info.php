<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Acerca de</title>
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.12.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- Third party plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/style_info.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="css/style_SM.css">

        <!-- Icono de la fundación -->
        <link rel = "icon" href = "img/Icono/Logo.ico" />
    </head>
    <body id="page-top">

        <?php
            //Haciendo referencia al script de conexion
            include("php/Conexion.php");
        ?>

        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="index.php">FUNDACIÓN SIRAMÁ</a><button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php">Principal</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="cursos.php">Cursos</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="Beneficiarias.php">Beneficiarias</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="info.php">Acerca de</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" target="_ablank" href="https://secure.squarespace.com/checkout/donate?donatePageId=59b7ab502d83c3863db865cd">DONAR</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-10 align-self-end">
                        <?php echo imprimirtitulo1(4); ?>
                        <hr class="divider my-4" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <?php echo imprimirdescripcion1(4); ?>
                        <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Conocer más</a>
                    </div>
                </div>
            </div>
        </header>
        <!-- About section-->
        <section class="page-section bg-primary" id="about">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h2 class="text-white mt-0">MISIÓN</h2>
                        <hr class="divider light my-4" />
                        <p class="text-white-50 mb-4">Formamos integralmente a la mujer y la acompañamos en su desarrollo profesional para el autoempleo o la inserción laboral.</p>
                    </div>
                    <div class="col-lg-6 text-center">
                        <h2 class="text-white mt-0">VISIÓN</h2>
                        <hr class="divider light my-4" />
                        <p class="text-white-50 mb-4">Ser una Institución líder que impulsa y desarrolla estrategias para contribuir a la formación y desarrollo integral de la mujer.</p>
                        <!-- <a class="btn btn-light btn-xl js-scroll-trigger" href="#services">Get Started!</a> -->
                    </div>
                    <div class="col-lg-8 text-center">
                        <a class="btn btn-light btn-xl js-scroll-trigger" href="#services">Saber más</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services section-->
        <section class="page-section" id="services">
            <div class="container">
                <h2 class="text-center mt-0">LUCHAMOS POR LOS OBJETIVOS DE DESARROLLO SOSTENIBLE</h2>
                <hr class="divider my-4" />
                <div class="row">
                    <div class="col-lg-4 col-md-6 text-center">
                        <div class="mt-5">
                            <i class="fas fa-4x fa-money-bill-alt text-primary mb-4"></i>
                            <h3 class="h4 mb-2">POBREZA</h3>
                            <p class="text-muted mb-0">Fortalecemos económicamente a la mujer salvadoreña para que pueda mejorar su calidad de vida y la de su familia</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 text-center">
                        <div class="mt-5">
                            <i class="fas fa-4x fa-book-open text-primary mb-4"></i>
                            <h3 class="h4 mb-2">EDUCACIÓN DE CALIDAD</h3>
                            <p class="text-muted mb-0">Brindamos educación integral técnica de calidad para mujeres de escasos recursos.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 text-center">
                        <div class="mt-5">
                            <i class="fas fa-4x fa-balance-scale text-primary mb-4"></i>
                            <h3 class="h4 mb-2">IGUALDAD DE GÉNERO</h3>
                            <p class="text-muted mb-0">Empoderamos a la mujer mediante la educación y la motivamos a ser un miembro activo en sus comunidades.</p>
                        </div>
                    </div>
                </div>
                <!-- Segunda linea de Obejtivos -->
                <div class="row">
                    <div class="col-lg-4 col-md-6 text-center">
                        <div class="mt-5">
                            <i class="fas fa-4x fa-check-square text-primary mb-4"></i>
                            <h3 class="h4 mb-2">PRODUCCIÓN Y CONSUMO RESPONSABLES</h3>
                            <p class="text-muted mb-0">Creamos responsabilidad en el cuido del medio ambiente a través del reciclaje y orden.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 text-center">
                        <div class="mt-5">
                            <i class="fas fa-4x fa-city text-primary mb-4"></i>
                            <h3 class="h4 mb-2">PAZ, JUSTICIA E INSTITUCIONES SÓLIDAS</h3>
                            <p class="text-muted mb-0">Generamos núcleos de paz en las familias con los criterios correctos de jsuticia y paz.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 text-center">
                        <div class="mt-5">
                            <i class="fas fa-4x fa-female text-primary mb-4"></i>
                            <h3 class="h4 mb-2">REDUCCIÓN DE LAS DESIGUALDADES</h3>
                            <p class="text-muted mb-0">Aumentamos el ingreso promedio familiar para disminuir el porcentaje de familias en pobreza extrema o relativa.</p>
                        </div>
                    </div>
                </div>
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
        
        <!-- Footer-->
        <footer class="py-5" id="foot">
            <div class="container"><div class="small text-center text-white">FUNDACIÓN SIRAMÁ© 2020</div>
            <br>
            <div class="small text-center text-white">DESARROLLADA POR:</div></div>
            <br>
            <div class="container"><div class="small text-center text-white">Adilson Ayala, Alex Mata, Irma Hernández, Manuel Hurtado, Victoria Sura</div></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
