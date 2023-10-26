<!DOCTYPE html>
<html lang="pt-br">

<head>
	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-ZLL9VHGE0W"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag() { dataLayer.push(arguments); }
		gtag('js', new Date());

		gtag('config', 'G-ZLL9VHGE0W');
	</script>
	<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4571058039731830"
     crossorigin="anonymous"></script>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Lucas Rodrigues Vacari">
	<meta name="description" content="<?php echo $this->getDescription(); ?>">
	<meta name="keywords" content="<?php echo $this->getKeywords(); ?>">
	<!-- Page Title -->
	<title>
		<?php echo $this->getTitle(); ?>
	</title>
	<!-- Favicon -->
	<link rel="icon" href="<?php echo DIRIMG . 'icon.png' ?>">
	<!-- Google Fonts css-->
	<link href="https://fonts.googleapis.com/css?family=Berkshire+Swash%7CRoboto:300,400,400i,500,500i,700,700i,900"
		rel="stylesheet">
	<!-- Bootstrap css -->
	<link href="<?php echo DIRCSS . 'bootstrap.min.css' ?>" rel="stylesheet" media="screen">
	<!-- Font Awesome icon css-->
	<link href="<?php echo DIRCSS . 'font-awesome.min.css' ?>" rel="stylesheet" media="screen">
	<link href="<?php echo DIRCSS . 'flaticon.css' ?>" rel="stylesheet" media="screen">
	<!-- Swiper's CSS -->
	<link rel="stylesheet" href="<?php echo DIRCSS . 'swiper.min.css' ?>">
	<!-- Animated css -->
	<link href="<?php echo DIRCSS . 'animate.css' ?>" rel="stylesheet">
	<!-- Magnific Popup CSS -->
	<link href="<?php echo DIRCSS . 'magnific-popup.css' ?>" rel="stylesheet">
	<!-- Animation Headline CSS -->
	<link href="<?php echo DIRCSS . 'animation-headline.css' ?>" rel="stylesheet">
	<!-- Slick nav css -->
	<link rel="stylesheet" href="<?php echo DIRCSS . 'slicknav.css' ?>">
	<!-- Main custom css -->
	<link href="<?php echo DIRCSS . 'custom.css' ?>" rel="stylesheet" media="screen">

	<!-- Head -->
	<?php echo $this->addHead(); ?>
</head>

<body data-spy="scroll" data-target="#main-navbar" data-offset="75">

	<style>
		img[alt="www.000webhost.com"]{
			display: none !important;
		}
	</style>

	<!-- Preloader starts -->
	<div class="preloader">
		<div class="loader">
			<div class="diamond"></div>
			<div class="diamond"></div>
			<div class="diamond"></div>
		</div>
	</div>
	<!-- Preloader Ends -->

	<!-- Header Section Start -->
	<header class="header">

		<?php echo $this->addHeader(); ?>

	</header>
	<!-- Header Section End -->

	<?php echo $this->addMain(); ?>

	<!-- Footer Section starts -->
	<footer class="main-footer">

		<?php echo $this->addFooter(); ?>

		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<!-- Footer Logo start -->
					<div class="footer-logo">
						<h1><span>Lucas</span> Vacari</h1>
					</div>
					<!-- Footer Logo end -->

					<!-- Footer About start -->
					<div class="footer-about">
						<p>Sou um profissional dedicado e entusiasmado com desenvolvimento de sistemas, com formação
							técnica e cursando Análise e Desenvolvimento de Sistemas na UNIP. Foco em resultados,
							trabalho em equipe e estou sempre em busca de novos desafios para crescer profissionalmente.
						</p>
						<p>Eu estou à disposição para quaisquer esclarecimento sobre minhas experiências, formações
							acadêmicas, certificados, cursos, idiomas e competências acima.</p>
					</div>
					<!-- Footer About end -->

					<!-- Footer Social Link start -->
					<div class="footer-social">
						<a target="_blank" href="https://github.com/BrookSK"><i class="fa fa-github"></i></a>
						<a target="_blank" href="https://www.linkedin.com/in/lucas-vacari/"><i
								class="fa fa-linkedin"></i></a>
						<a target="_blank"
							href="https://api.whatsapp.com/send?phone=5517991190528&text=Ol%C3%A1,%20vim%20pelo%20seu%20site%20de%20portfolio%20e%20gostaria%20de%20mais%20informa%C3%A7%C3%B5es%20sobre%20....."><i
								class="fa fa-whatsapp"></i></a>
					</div>
					<!-- Footer Social Link end -->

					<!-- Footer Copyright start -->
					<div class="footer-copyright">
						<p>Copyright &copy; <a href="<?php echo DIRPAGE ?>">Lucas Rodrigues Vacari</a>. Todos os direitos
							reservados.</p>
					</div>
					<!-- Footer Copyright end -->
				</div>
			</div>
		</div>
	</footer>
	<!-- Footer Section Ends -->

	<!-- Jquery Library File -->
	<script src="<?php echo DIRJS . 'jquery-1.12.4.min.js' ?>"></script>
	<!-- Bootstrap js file -->
	<script src="<?php echo DIRJS . 'bootstrap.min.js' ?>"></script>
	<!-- Wow js file -->
	<script src="<?php echo DIRJS . 'wow.js' ?>"></script>
	<!-- Swiper Carousel js file -->
	<script src="<?php echo DIRJS . 'swiper.min.js' ?>"></script>
	<!-- Counterup js file -->
	<script src="<?php echo DIRJS . 'waypoints.min.js' ?>"></script>
	<script src="<?php echo DIRJS . 'jquery.counterup.min.js' ?>"></script>
	<!-- Isotop js file -->
	<script src="<?php echo DIRJS . 'isotope.min.js' ?>"></script>
	<!-- Magnific Popup core JS file -->
	<script src="<?php echo DIRJS . 'jquery.magnific-popup.min.js' ?>"></script>
	<!-- Slick Nav js file -->
	<script src="<?php echo DIRJS . 'jquery.slicknav.js' ?>"></script>
	<!-- SmoothScroll -->
	<script src="<?php echo DIRJS . 'SmoothScroll.js' ?>"></script>
	<!-- Animated Headline js file -->
	<script src="<?php echo DIRJS . 'animation-headline.js' ?>"></script>
	<!-- Main Custom js file -->
	<script src="<?php echo DIRJS . 'function.js' ?>"></script>
</body>

</html>