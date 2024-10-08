<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once 'head.php'; ?>

</head>
<body>
    
	<!-- start section top-bar -->
    <?php require_once 'top-bar.php'; ?>   
    <!-- End section top-bar -->

    <header class="header header_style_01">
        <nav class="megamenu navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><img src="images/logos/logo.png" alt="image"></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.php">Accueil</a></li>
                        <li><a href="about-us.php">A Propos</a></li>
                        <li><a href="services.php">Services</a></li>
                        <li><a class="active" href="portfolio.php">Portfolio</a></li>
                        <li><a href="features.php">Fonctionnalités</a></li>
                        <!--li><a href="testimonials.php">Testimonials</a></li-->
                        <!--li><a href="pricing.php">Pricing</a></li-->
						<li><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

   	<div class="banner-area banner-bg-1">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="banner">
						<h2>Notre Portfolio</h2>
						<ul class="page-title-link">
							<li><a href="#">Accueil</a></li>
							<li><a href="#">Portfolio</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

    <div id="portfolio" class="section wb">
        <div class="container">
            <div class="section-title text-center">
                <h3>Notre Portfolio</h3>
                <p class="lead">Découvrez l'univers MetaSucces à travers notre portfolio captivant. Chaque projet est une histoire de créativité et d'innovation, une vitrine de notre expertise qui vous inspire à imaginer l'infini potentiel de votre présence en ligne.</p>
            </div><!-- end title -->
        </div><!-- end container -->

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <nav class="portfolio-filter text-center">
                        <ul>
                            <li><a class="btn btn-dark btn-radius btn-brd active" href="#" data-filter="*"><span class="oi hidden-xs" data-glyph="grid-three-up"></span> Tout</a></li>
                            <li><a class="btn btn-dark btn-radius btn-brd" data-toggle="tooltip" data-placement="top" title="5" href="#" data-filter=".cat1">Design</a></li>
                            <li><a class="btn btn-dark btn-radius btn-brd" href="#" data-toggle="tooltip" data-placement="top" title="12" data-filter=".cat2">SITE WEB</a></li>
                            <li><a class="btn btn-dark btn-radius btn-brd" href="#" data-toggle="tooltip" data-placement="top" title="21" data-filter=".cat3">CMS</a></li>
                            <li><a class="btn btn-dark btn-radius btn-brd" href="#" data-toggle="tooltip" data-placement="top" title="11" data-filter=".cat4">MOBILE</a></li>
                        </ul>
                    </nav>
                </div>
            </div>

            <hr class="invis">

            <div id="da-thumbs" class="da-thumbs portfolio">
                <div class="post-media pitem item-w1 item-h1 cat1">
                    <a href="uploads/design2.jpg" data-rel="prettyPhoto[gal]">
                        <img src="uploads/design2.jpg" alt="" class="img-responsive">
                        <div>
                            <h3>Génération d'image 3D<small>Web Design</small></h3>
                            <i class="flaticon-unlink"></i>
                        </div>
                    </a>
                </div>
                <div class="post-media pitem item-w1 item-h1 cat2">
                    <a href="uploads/site1.jpg" data-rel="prettyPhoto[gal]">
                        <img src="uploads/site1.jpg" alt="" class="img-responsive">
                        <div>
                            <h3>Marketing Digital site <small>Site web</small></h3>
                            <i class="flaticon-unlink"></i>
                        </div>
                    </a>
                </div>
                <div class="post-media pitem item-w1 item-h1 cat1">
                    <a href="uploads/design6.png" data-rel="prettyPhoto[gal]">
                        <img src="uploads/design6.png" alt="" class="img-responsive">
                        <div>
                            <h3>Market Air max App <small>Web Design</small></h3>
                            <i class="flaticon-unlink"></i>
                        </div>
                    </a>
                </div>
                <div class="post-media pitem item-w1 item-h1 cat4">
                    <a href="uploads/mobile4.jpg" data-rel="prettyPhoto[gal]">
                        <img src="uploads/mobile4.jpg" alt="" class="img-responsive">
                        <div>
                            <h3>Ntc App<small>Application</small></h3>
                            <i class="flaticon-unlink"></i>
                        </div>
                    </a>
                </div>
                <div class="post-media pitem item-w1 item-h1 cat3">
                    <a href="uploads/siteweb.png" data-rel="prettyPhoto[gal]">
                        <img src="uploads/siteweb.png" alt="" class="img-responsive">
                        <div>
                            <h3>Site E-commerce Jordan <small>Site Wordpress</small></h3>
                            <i class="flaticon-unlink"></i>
                        </div>
                    </a>
                </div>
                <div class="post-media pitem item-w1 item-h1 cat2">
                    <a href="uploads/siteweb2.jpg" data-rel="prettyPhoto[gal]">
                        <img src="uploads/siteweb2.jpg" alt="" class="img-responsive">
                        <div>
                            <h3>Digital Bank <small>Site Web</small></h3>
                            <i class="flaticon-unlink"></i>
                        </div>
                    </a>
                </div>
                <div class="post-media pitem item-w1 item-h1 cat1">
                    <a href="uploads/design.png" data-rel="prettyPhoto[gal]">
                        <img src="uploads/design.png" alt="" class="img-responsive">
                        <div> <h3>Styluxe Ai <small>Web design</small></h3>
                            <i class="flaticon-unlink"></i>
                        </div>
                    </a>
                </div>
                <div class="post-media pitem item-w1 item-h1 cat4">
                    <a href="uploads/mobile6.png" data-rel="prettyPhoto[gal]">
                        <img src="uploads/mobile6.png" alt="" class="img-responsive">
                        <div>
                            <h3>Air Jordan App <small>Application </small></h3>
                            <i class="flaticon-unlink"></i>
                        </div>
                    </a>
                </div>
                <div class="post-media pitem item-w1 item-h1 cat3">
                    <a href="uploads/siteweb4.png" data-rel="prettyPhoto[gal]">
                        <img src="uploads/siteweb4.png" alt="" class="img-responsive">
                        <div>
                            <h3>Site E-commerce BR.F <small>Site Wordpress</small></h3>
                            <i class="flaticon-unlink"></i>
                        </div>
                    </a>
                </div>

                <div class="post-media pitem item-w1 item-h1 cat2">
                    <a href="uploads/landingpage4.png" data-rel="prettyPhoto[gal]">
                        <img src="uploads/landingpage4.png" alt="" class="img-responsive">
                        <div>
                            <h3>IA Performance <small>Site Web</small></h3>
                            <i class="flaticon-unlink"></i>
                        </div>
                    </a>
                </div>
            </div><!-- end portfolio -->
        </div><!-- end container -->
    </div><!-- end section -->
	
	<!-- start section service -->
    <?php require_once 'service-repeat.php'; ?>   
    <!-- End section service -->

    <!-- start section footer -->
    <?php require_once 'footer.php'; ?>
    <!-- End section footer -->

</body>
</html>