<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Fundación Siramá - Mujer Artesana de Paz</title>
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.12.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- Third party plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="css/style_SM.css">

        <!-- Agregadas por ultimo, por el momento no sirva de nada -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </head>
    <body id="page-top">

            <!-- Codigo PHP -->
            <?php
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
                    </div>
                </div>
            </div>
        </header>
        <!-- About section-->
        <section class="page-section bg-primary" id="about">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h4 class="text-white-50 mt-0">"La mujer está llamada a llevar a la familia, a la sociedad civil, a la Iglesia, algo característico, que le es propio y que sólo ella puede dar: su delicada ternura, su generosidad incansable, su amor por lo concreto, su agudeza de ingenio, su capacidad de intuición, su piedad profunda y sencilla, su tenacidad…"</h4>
                        <hr class="divider light my-4" />
                        <h6 class="text-white mt-0">-San José María de Escrivá</h6>
                    </div>
                </div>
            </div>
        </section>
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
                            <button type="button" class="btn btn-primary btn-xl js-scroll-trigger" data-toggle='modal' data-target='#noticia1'>Leer más</button>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 text-center">
                        <div class="mt-5">
                            <!-- <i class="fas fa-4x fa-book-open text-primary mb-4"></i> -->
                            <?php echo imprimirTitu_Noti1(2); ?>
                            <br> 
                            <?php echo imprimirDes_Noti1(2); ?>
                            <br>       
                            <button type="button" class="btn btn-primary btn-xl js-scroll-trigger" data-toggle='modal' data-target='#noticia2'>Leer más</button>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 text-center">
                        <div class="mt-5">
                            <!-- <i class="fas fa-4x fa-balance-scale text-primary mb-4"></i> -->
                            <?php echo imprimirTitu_Noti1(3); ?>
                            <br> 
                            <?php echo imprimirDes_Noti1(3); ?>
                            <br>       
                            <button type="button" class="btn btn-primary btn-xl js-scroll-trigger" data-toggle='modal' data-target='#noticia3'>Leer más</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Title section-->
        <section class="page-section bg-primary" id="services">
            <div class="container">
                <h2 class="text-center mt-0 text-white">UBICACIONES DE LA FUNDACIÓN</h2>
                <hr class="divider light my-4" />
            </div>
        </section>
        <!-- Location section-->
        <section id="portfolio">
            <div class="container-fluid p-0">
                <div class="row no-gutters">
                    <div class="col-lg-6 col-sm-6">
                        <a class="portfolio-box" href="img/Mapa_PI.png"
                            ><img class="img-fluid" src="img/Mapa_PI.png" alt="Imagen Ubicación Parque Infantil" />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Ubicación #1</div>
                                <div class="project-name">Parque Infantil, S.S</div>
                            </div></a
                        >
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <a class="portfolio-box" href="img/Mapa_P.png"
                            ><img class="img-fluid" src="img/Mapa_P.png" alt="Imagen Ubicación Bosques Prusia" />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Ubicación #2</div>
                                <div class="project-name">Bosques de Prusia, Soyapango</div>
                            </div></a
                        >
                    </div>
                </div>
            </div>
        </section>
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

        <!-- Modales para seccion de noticias -->

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
    </body>
</html>