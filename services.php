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
                        <li><a class="active" href="services.php">Services</a></li>
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

   	<div class="banner-area banner-bg-1">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="banner">
						<h2>Nos services</h2>
						<ul class="page-title-link">
							<li><a href="#">Accueil</a></li>
							<li><a href="#">Services</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

    <div id="about" class="section wb">
        <div class="container">
           <div class="row text-center">
				<div class="col-md-3 col-sm-6">
					<div class="about-item">
						<div class="about-icon">
							<span class="icon icon-display"></span>
						</div>
						<div class="about-text">
							<h3> <a href="#">Optimisation Mobile </a></h3>
							<p>Assurez une expérience exceptionnelle sur tous les appareils. Nous optimisons votre site pour une navigation fluide sur mobile, garantissant un engagement continu de votre audience, quel que soit le dispositif utilisé. </p>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="about-item">
						<div class="about-icon">
							<span class="icon icon-database"></span>
						</div>
						<div class="about-text">
							<h3> <a href="#">Sécurité Avancée des Données  </a></h3>
							<p>Protégez vos informations sensibles. Nous mettons en place des protocoles de sécurité, des pare-feu et des audits réguliers pour assurer la confidentialité et l'intégrité de vos données. </p>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="about-item">
						<div class="about-icon">
							<span class="icon icon-magic-wand"></span>
						</div>
						<div class="about-text">
							<h3> <a href="#">Intégration de Chat en Ligne </a></h3>
							<p>Engagez directement votre audience. Nous intégrons des solutions de chat en ligne pour une communication instantanée, renforçant l'interaction avec vos visiteurs et améliorant la satisfaction client. </p>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="about-item">
						<div class="about-icon">
							<span class="icon icon-cloud"></span>
						</div>
						<div class="about-text">
							<h3> <a href="#">Mises à Jour et Maintenance Proactive </a></h3>
							<p>Restez à jour sans tracas. Notre service de maintenance proactif assure des mises à jour régulières, garantissant la compatibilité, la sécurité et la performance continues de votre site web. </p>
						</div>
					</div>
				</div>
			</div>
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