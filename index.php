<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once 'head.php'; ?>

</head>

<body>
    <!-- LOADER -->
    <div id="preloader">
        <div class="loader">
			<div class="loader__bar"></div>
			<div class="loader__bar"></div>
			<div class="loader__bar"></div>
			<div class="loader__bar"></div>
			<div class="loader__bar"></div>
			<div class="loader__ball"></div>
		</div>
    </div><!-- end loader -->
    <!-- END LOADER -->

    <!-- start section top-bar -->
    <?php require_once 'top-bar.php'; ?>   
    <!-- End section top-bar -->
     
    <header class="header header_style_01">
        <nav class="megamenu navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                        aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><img src="images/logos/logo.png" alt="image"></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a class="active" href="index.php">Accueil</a></li>
                        <li><a href="about-us.php">A propos</a></li>
                        <li><a href="services.php">Services</a></li>
                        <li><a href="portfolio.php">Portfolio</a></li>
                        <li><a href="features.php">Fonctionnalités</a></li>
                        <!--li><a href="testimonials.php">Testimonials</a></li-->
                        <!--li><a href="pricing.php">Pricing</a></li-->
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="slider-area">
        <div class="slider-wrapper owl-carousel">

            <div class="slider-item home-one-slider-otem slider-item-four slider-bg-one">
                <div class="container">
                    <div class="row">
                        <div class="slider-content-area">
                            <div class="bubble-container">
                                <!-- Bulles d'eau -->
                                <div class="bubble"></div>
                                <div class="bubble"></div>
                                <div class="bubble"></div>
                                <div class="bubble"></div>
                            </div>
                            <div class="slide-text">
                                <h1 class="homepage-three-title">MetaSucces: <span>Là où Votre Vision </span> S'anime
                                    sur le Web.</h1>
                                <h2>Des designs captivants aux fonctionnalités avancées qui vont bien au-delà d'un
                                    simple site web.  Obtenez des résultats exceptionnels qui incarnent l'essence
                                    unique de votre marque.</h2>
                                <div class="slider-content-btn">
                                    <a class="button btn btn-light btn-radius btn-brd"
                                        href="mailto:contact@metasucces.com">Démarrer Mon Projet</a>
                                    <a class="button btn btn-light btn-radius btn-brd"
                                        href="tel:+229 43 26 60 68">Obtenir un Devis Gratuit</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-item text-center home-one-slider-otem slider-item-four slider-bg-two">
                <div class="container">
                    <div class="row">
                        <div class="slider-content-area">
                            <div class="bubble-container">
                                <!-- Bulles d'eau -->
                                <div class="bubble"></div>
                                <div class="bubble"></div>
                                <div class="bubble"></div>
                                <div class="bubble"></div>
                            </div>
                            <div class="slide-text">
                                <h1 class="homepage-three-title">Conception Intuitive avec <span>Résultats
                                    </span>Exceptionnels</h1>
                                <h2>MetaSucces vous propose des designs uniques et des fonctionnalités interactives.
                                    Notre approche intuitive garantit des résultats exceptionnels qui capturent
                                    parfaitement l'essence de votre marque. </h2>
                                <div class="slider-content-btn">
                                    <a class="button btn btn-light btn-radius btn-brd"
                                        href="mailto:contact@metasucces.com">Démarrer Mon Projet</a>
                                    <a class="button btn btn-light btn-radius btn-brd"
                                        href="tel:+229 43 26 60 68">Obtenir un Devis Gratuit</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-item home-one-slider-otem slider-item-four slider-bg-three">
                <div class="container">
                    <div class="row">
                        <div class="slider-content-area">
                            <div class="bubble-container">
                                <!-- Bulles d'eau -->
                                <div class="bubble"></div>
                                <div class="bubble"></div>
                                <div class="bubble"></div>
                                <div class="bubble"></div>
                            </div>
                            <div class="slide-text">
                                <h1 class="homepage-three-title">Des Solutions Web <span>Sur-Mesure,</span> à Votre
                                    Rythme Financier</h1>
                                <h2>Chez MetaSucces, nous vous offrons des solutions web personnalisées qui évoluent
                                    avec vos besoins. Profitez de nos options de paiement flexible, mensuel ou par
                                    tranches, tout en bénéficiant d'une qualité exceptionnelle.</h2>
                                <div class="slider-content-btn">
                                    <a class="button btn btn-light btn-radius btn-brd"
                                        href="mailto:contact@metasucces.com">Démarrer Mon Projet</a>
                                    <a class="button btn btn-light btn-radius btn-brd"
                                        href="tel:+229 43 26 60 68">Obtenir un Devis Gratuit</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- start section about -->
    <?php require_once 'about-repeat.php'; ?>   
    <!-- End section about -->

    <div class="parallax section parallax-off" data-stellar-background-ratio="0.9"
        style="background-image:url('uploads/parallax_04.jpg');">
        <div class="container">
            <div class="row text-center stat-wrap">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <span data-scroll class="global-radius icon_wrap effect-1"><i class="flaticon-briefcase"></i></span>
                    <p class="stat_count">200</p>
                    <h3>Projets complexes</h3>
                </div><!-- end col -->

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <span data-scroll class="global-radius icon_wrap effect-1"><i class="flaticon-happy"></i></span>
                    <p class="stat_count">190</p>
                    <h3>Des clients satisfaits</h3>
                </div><!-- end col -->

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <span data-scroll class="global-radius icon_wrap effect-1"><i class="flaticon-idea"></i></span>
                    <p class="stat_count">103</p>
                    <h3>Services clients</h3>
                </div><!-- end col -->

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <span data-scroll class="global-radius icon_wrap effect-1"><i
                            class="flaticon-customer-service"></i></span>
                    <p class="stat_count">300</p>
                    <h3>Questions répondues</h3>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

    <!-- start section feature -->
    <?php require_once 'service-repeat.php'; ?>   
    <!-- End section feature -->


    <div class="parallax section noover" data-stellar-background-ratio="0.7"
        style="background-image:url('uploads/parallax_05.png');">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-6">
                    <div class="customwidget text-left">
                        <h1>De beaux sites web</h1>
                        <p>Des sites web sur mesure qui s'adaptent fluidement à tous les appareils, offrant une
                            expérience utilisateur homogène et captivante, quel que soit le support utilisé</p>
                        <ul class="list-inline">
                            <li><i class="fa fa-check"></i> Design Adaptatif </li>
                            <li><i class="fa fa-check"></i> Navigation Intuitive</li>
                            <li><i class="fa fa-check"></i> Optimisation de la Vitesse</li>
                            <li><i class="fa fa-check"></i> Contenu Dynamique</li>
                        </ul><!-- end list -->
                        <a href="#services" data-scroll class="btn btn-light btn-radius btn-brd">En savoir plus</a>
                    </div>
                </div><!-- end col -->
                <div class="col-md-6">
                    <div class="text-center image-center hidden-sm hidden-xs">
                        <img src="images/screen.png" alt="" class="img-responsive wow fadeInUp">
                    </div>
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

    <!-- start section feature -->
    <?php require_once 'feature-repeat.php'; ?>   
    <!-- End section feature -->

    <!-- start section footer -->
    <?php require_once 'footer.php'; ?>
    <!-- End section footer -->

</body>
</html>