<?php 
// Title: Manteca al dente
// Author: Ey Pacha

require('languages/function.php');
    
$langs = ['en','es','fr']; // Add here a new language

// Default language
$lang = 'en';

// Check if language is set in URL
if ( isset($_GET['lang']) ){
	if ( file_exists('languages/language_' . $_GET['lang'] . '.php') ){
		$lang = $_GET['lang'];
	}
} else {
	$idioma = substr(locale_accept_from_http($_SERVER['HTTP_ACCEPT_LANGUAGE']),0,2);
	if ( file_exists('languages/language_' . $idioma . '.php') ){
		$lang = $idioma;
	} 
}

?>
<!DOCTYPE html>
<html lang="<?= $lang ?>">
<head>
	<title>Manteca al dente</title>
	<!-- Favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png"/>
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png"/>
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png"/>
	<link rel="manifest" href="/site.webmanifest/">
	<!-- Metatags -->
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta name="theme-color" content="#4c7aae"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta name="theme-color"/>
	<meta name="description" content="Circus and theater for all public in which they inhabit the three ingredients that always accompany the character, something of innocence, a pinch of mischief and a lot of love."/>
    <meta name="author" content="Manteca al dente"/>
    <meta name="title" content="Manteca al dente"/>
	<!-- Open Graph -->
	<meta property="og:locale" content="en_EN"/>
	<meta property="og:type" content="website"/>
	<meta property="og:title" content="Manteca al dente"/>
	<meta property="og:description" content="Circus and theater for all public in which they inhabit the three ingredients that always accompany the character, something of innocence, a pinch of mischief and a lot of love."/>
	<meta property="og:url" content="https://mantecaaldente.com"/>
	<meta property="og:site_name" content="Manteca al dente"/>
	<meta property="og:image" content="https://mantecaaldente.com/preview.jpg"/>
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet"/>
	<!-- Template Main CSS File -->
	<link href="private/css/style.min.css" rel="stylesheet"/>
</head>
<body>
	<!-- ======= Header ======= -->
	<header id="header" class="fixed-top d-flex align-items-center">
		<div class="container d-flex align-items-center justify-content-between">
		<div class="logo">
			<a href="#hero" class="scrollto">
				<img src="images/webp/logo.webp" alt="" class="img-fluid">
			</a>
		</div>
		<nav id="navbar" class="navbar">
			<ul>
				<div class="wrapper">
					<li><a class="nav-link scrollto" href="#shows"><?= __('shows',$lang) ?></a></li>
					<li><a class="nav-link scrollto" href="#about"><?= __('biography',$lang) ?></a></li>
					<li class="d-xl-none"><a class="nav-link scrollto" href="#media"><?= __('photos',$lang) ?></a></li>
					<li class="d-xl-none"><a class="nav-link scrollto" href="#videos"><?= __('videos',$lang) ?></a></li>
					<li class="dropdown drop-media d-none d-xl-block"><a href="javascript:return"><span><?= __('media',$lang) ?></span> <small class="ml-1"><i class="fa fa-chevron-down"></i></small></a>
						<ul>
							<li><a class="nav-link scrollto" href="#media"><?= __('photos',$lang) ?></a></li>
							<li><a class="nav-link scrollto" href="#videos"><?= __('videos',$lang) ?></a></li>
						</ul>
					</li>
					<li><a class="nav-link scrollto " href="#festivals"><?= __('festivals',$lang) ?></a></li>
					<li><a class="nav-link scrollto" href="#contact"><?= __('contact',$lang) ?></a></li>
					<li class="dropdown drop-lang"><a href="#" data-target="lang"><span><?= $lang ?></span> <small class="ml-1"><i class="fa fa-chevron-down"></i></small></a>
						<ul>
							<?php foreach ($langs as $l) { 
								if ($l != $lang) { ?><li><a href="?lang=<?= $l ?>"><?= $l ?></a></li><?php }
							} ?>
						</ul>
					</li>
				</div>
			</ul>
			<div class="mobile-nav-toggle">
				<i class="fas fa-bars" id="menuBars"></i>
				<i class="fas fa-times d-none" id="menuClose"></i>
			</div>
		</nav><!-- .navbar -->
		
		</div>
	</header>
	<!-- End Header -->
	<!-- ======= Hero Section ======= -->
	<section id="hero" class="d-flex bg-gradient align-items-end pb-0">
		<div class="mantecahero" data-aos="fade-up" data-aos-delay="150">
			<img src="images/webp/manteca.webp" class="img-fluid" alt="Manteca al dente">
		</div>
		<div class="logohero" data-aos="fade-down" data-aos-delay="350">
			<img src="images/webp/logo.webp" class="img-fluid animated" alt="Manteca al dente">
		</div>
	</section>
	<!-- End Hero -->
	<main id="main">
		<div class="triangle"></div>
		<!-- ======= Shows Section ======= -->
		<section id="shows" class="shows">
			<div class="container">
				<div class="section-title" data-aos="fade-down">
					<h2><?= __('shows',$lang) ?></h2>
				</div>
				<div class="galumphing row content d-lg-none" style="line-height: 1em">
					<div class="col-12 text-center" data-aos="fade-up">
						<h3 class="is-blue mb-3"><?= __('galumphing',$lang) ?></h3>
					</div>
				</div>
				<div class="galumphing row content mb-3 mb-sm-5">
					<div class="col-lg-2 d-none d-lg-flex justify-content-end align-items-end" data-aos="fade-right" data-aos-delay="300">
						<i class="fas fa-share fa-6x"></i>
					</div>
					<div class="col-lg-8" data-aos="fade-down" data-aos-delay="150">
					<div class="rope-frame">
							<div class="rope left"></div>
							<div class="rope top"></div>
							<div class="rope right"></div>
							<div class="rope bottom"></div>
							<div class="rope top-left"></div>
							<div class="rope top-right"></div>
							<div class="rope bottom-left"></div>
							<div class="rope bottom-right"></div>
							<img src="images/webp/galumphingImg.webp" class="img-fluid" alt="">
						</div>
					</div>
				</div>
				<div class="galumphing row content mb-5">
					<div class="col-lg-5 offset-lg-1" data-aos="fade-right" data-aos-delay="150">
						<h3 class="is-blue mb-4 d-none d-lg-block"><?= __('galumphing',$lang) ?></h3>
						<p><i class="fas fa-quote-left fa-2x fa-pull-left"></i> <?= __('galumphing-line-1',$lang) ?></p>
						<p class="mb-0 mb-sm-3"><?= __('galumphing-line-2',$lang) ?></p>
						</p>
					</div>
					<div class="col-lg-4 pt-sm-4 pb-4 pt-lg-0" data-aos="fade-left" data-aos-delay="300">
						<div class="card">
							<div class="card-body">
								<h5 class="mb-4"><?= __('tech-details',$lang) ?></h5>
								<ul class="fa-ul">
									<li class="mb-2"><i class="fa-li fa fa-clock"></i><strong><?= __('duration',$lang) ?>:</strong> 40 <?= __('minutes',$lang) ?></li>
									<li class="mb-2"><i class="fa-li fa fa-truck-loading fa-flip-horizontal"></i><strong><?= __('mounting',$lang) ?>:</strong> 20 <?= __('minutes',$lang) ?></li>
									<li class="mb-2"><i class="fa-li fa fa-truck-loading"></i><strong><?= __('unmounting',$lang) ?>:</strong> 20 <?= __('minutes',$lang) ?></li>
									<li class="mb-2"><i class="fa-li fa fa-border-style"></i><strong><?= __('space',$lang) ?>:</strong> <?= __('galumphing-space-line-1',$lang) ?></li>
									<li class="mb-2"><i class="fa-li fa fa-tint"></i><strong><?= __('galumphing-space-line-2',$lang) ?></strong> <?= __('galumphing-space-line-3',$lang) ?></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="bienvenidos row content d-lg-none" style="line-height: 1em">
					<div class="col-12 text-center" data-aos="fade-up">
						<h3 class="is-blue mb-3 d-none d-lg-block"><?= __('welcomeaboard',$lang) ?></h3>
					</div>
				</div>
				<div class="bienvenidos row content mb-3 mb-sm-5 pt-lg-5">
					<div class="col-lg-8 offset-lg-1" data-aos="fade-down" data-aos-delay="150">
					<div class="rope-frame">
							<div class="rope left"></div>
							<div class="rope top"></div>
							<div class="rope right"></div>
							<div class="rope bottom"></div>
							<div class="rope top-left"></div>
							<div class="rope top-right"></div>
							<div class="rope bottom-left"></div>
							<div class="rope bottom-right"></div>
							<img src="images/webp/bienvenidosAlTrenImg.webp" class="img-fluid" alt="">
						</div>
					</div>
					<div class="col-lg-2 d-none d-lg-flex justify-content-start align-items-end" data-aos="fade-left" data-aos-delay="300">
						<i class="fas fa-share fa-flip-horizontal fa-6x"></i>
					</div>
				</div>
				<div class="bienvenidos row content">
					<div class="col-lg-5 order-sm-2" data-aos="fade-left" data-aos-delay="600">
						<h3 class="is-blue mb-4"><?= __('welcomeaboard',$lang) ?></h3>
						<p class="mb-0 mb-sm-3"><i class="fas fa-quote-left fa-2x fa-pull-left"></i> <?= __('welcomeaboard-line-1',$lang) ?></p>
					</div>
					<div class="col-lg-4 order-sm-1 offset-lg-1 pb-4 pt-4 pt-lg-0" data-aos="fade-right" data-aos-delay="450">
						<div class="card">
							<div class="card-body">
								<h5 class="mb-4"><?= __('tech-details',$lang) ?></h5>
								<ul class="fa-ul">
									<li class="mb-2"><i class="fa-li fa fa-clock"></i><strong><?= __('duration',$lang) ?>:</strong> 40 <?= __('minutes',$lang) ?></li>
									<li class="mb-2"><i class="fa-li fa fa-truck-loading fa-flip-horizontal"></i><strong><?= __('mounting',$lang) ?>:</strong> 20 <?= __('minutes',$lang) ?></li>
									<li class="mb-2"><i class="fa-li fa fa-truck-loading"></i><strong><?= __('unmounting',$lang) ?>:</strong> 20 <?= __('minutes',$lang) ?></li>
									<li class="mb-2"><i class="fa-li fa fa-border-style"></i><strong><?= __('space',$lang) ?>:</strong> <?= __('welcomeaboard-space-line-1',$lang) ?></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End About Us Section -->
		<!-- ======= About Us Section ======= -->
		<section id="about" class="about bg-gradient">
			<div class="container mb-5">
				<div class="section-title" data-aos="fade-up">
					<h2 class="is-white"><?= __('biography',$lang) ?></h2>
				</div>
				<div class="row content">
					<div class="col-lg-3 offset-sm-3" data-aos="fade-up" data-aos-delay="150">
						<div class="rounded">
							<img src="images/webp/nicolas.webp" class="img-fluid rounded" alt="">
						</div>	
					</div>
					<div class="col-lg-4 pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="300">
						<p><?= __('biography-line-1',$lang) ?></p>
						<p><?= __('biography-line-2',$lang) ?></p>
						<p><?= __('biography-line-3',$lang) ?></p>
						<p><?= __('biography-line-4',$lang) ?></p>
					</div>
				</div>
			</div>	
		</section>
		<!-- End About Us Section -->
		<!-- ======= Media Section ======= -->
		<div class="triangle"></div>
		<section id="media" class="portfolio">
			<div class="container">
				<div class="section-title" data-aos="fade-up">
					<h2><?= __('media',$lang) ?></h2>
				</div>
				<div id="gallery" style="display:none;">
					<?php for($i = 0 ; $i < 34 ; $i++){ ?>
						<img alt="" src="images/webp/<?= ($i+1) ?>.webp" data-image="images/webp/<?= ($i+1) ?>.webp"/>
					<?php } ?>
				</div>
			</div>
			<div class="container mt-5">
				<div id="videos" class="section-title" data-aos="fade-up">
					<h2><?= __('videos',$lang) ?></h2>
				</div>
				<div class="row content flex-column align-items-center justify-content-center">
					<div class="text-center">
						<h3 class="is-blue mb-2 mb-lg-4"><?= __('galumphing',$lang) ?></h3>
					</div>
				</div>
				<div class="galumphing row content mb-5">
					<div class="col-lg-8 offset-lg-2" data-aos="fade-down" data-aos-delay="150">
						<div class="rounded">
							<div class="embed-responsive embed-responsive-16by9">
								<iframe class="embed-responsive-item" src="https://player.vimeo.com/video/880880610?color=ffffff&title=0&byline=0&portrait=0&rel=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
							</div>
						</div>
					</div>
				</div>
				<div class="row content flex-column align-items-center justify-content-center">
					<div class="text-center">
						<h3 class="is-blue mb-2 mb-lg-4"><?= __('welcomeaboard',$lang) ?></h3>
					</div>
				</div>
				<div class="bienvenidos row content mb-3 mb-sm-5">
					<div class="col-lg-8 offset-lg-2" data-aos="fade-down" data-aos-delay="150">
						<div class="rounded">
							<div class="embed-responsive embed-responsive-16by9">
								<iframe class="embed-responsive-item" src="https://player.vimeo.com/video/652231094?color=ffffff&title=0&byline=0&portrait=0&rel=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section><!-- End Media Section -->
		<!-- ======= Festivals Section ======= -->
		<section id="festivals" class="about bg-gradient">
			<div class="container">
				<div class="section-title" data-aos="fade-up">
					<h2 class="is-white"><?= __('festivals',$lang) ?></h2>
				</div>
				<div class="row content flex-column align-items-center justify-content-center">
					<div class="grabber">
						<img src="images/webp/mano.webp" class="mano-d" alt="">
						<img src="images/webp/manteca-2.webp" class="mantequita" data-aos="slide-up" data-aos-delay="1000" alt="">
						<img src="images/webp/mano.webp" class="mano-i" alt="">
					</div>
					<div class="mb-5">
						<div class="card">
							<div class="card-body text-center">
                                <h3 class="mt-4">2025</h3>
								<p><strong>San Carlo Buskers Festival</strong> - <?= __('sanvincenzo',$lang) ?></p>
								<p><strong>Magie al Borgo</strong> - <?= __('bergamo',$lang) ?></p>
								<p><strong>BolliCCCine</strong> - <?= __('bologna',$lang) ?></p>
								<p><strong>Urbaka Festival</strong> - <?= __('limoges',$lang) ?></p>
								<p><strong>Turda International Theatre Festival</strong> - <?= __('turda',$lang) ?></p>
								<p><strong>Meilenstein Festival</strong> - <?= __('berlin',$lang) ?></p>
								<p><strong>Flaniermeile Velden am Wörthersee</strong> - <?= __('velden',$lang) ?></p>
                                <p><strong>Bascherdeis Festival</strong> - <?= __('piacenza',$lang) ?></p>
                                <p><strong>EID celebrations, Mercato Mall</strong> - <?= __('dubai',$lang) ?></p>
                                <p><strong>Puppets Occupy Street Festival</strong> - <?= __('craiova',$lang) ?></p>
                                <p><strong>WonderPuck Festival</strong> - <?= __('clujnapoca',$lang) ?></p>
                                <p><strong>Festival Internazionale Artisti di Strada Fvg</strong> - <?= __('farradisonzo',$lang) ?></p>
                                <h3 class="mt-4">2024</h3>
								<p><strong>Cirkulum</strong> - <?= __('ostrava',$lang) ?></p>
                                <p><strong>Artisti di Strada Monteforte d'Alpone</strong> - <?= __('montefortealpone',$lang) ?></p>
                                <p><strong>Festival Saint Paul</strong> - <?= __('sarreguemines',$lang) ?></p>
                                <p><strong>48ème de Rue</strong> - <?= __('mende',$lang) ?></p>
								<p><strong>Grömitzer Künstlermeile</strong> - <?= __('gromitz',$lang) ?></p>
                                <p><strong>La Strada Augsburg</strong> - <?= __('augsburg',$lang) ?></p>
                                <p><strong>Strassenkünstlerfestival Scharbeutz</strong> - <?= __('scharbeutz',$lang) ?></p>
                                <p><strong>Kultur auf der Strasse</strong> - <?= __('neuulm',$lang) ?></p>
								<p><strong>Theaterspektakel</strong> - <?= __('zurich',$lang) ?></p>
                                <p><strong>Clown & Clown Festival</strong> - <?= __('montesangiusto',$lang) ?></p>
                                <p><strong>Abano Street Circus</strong> - <?= __('abanoterme',$lang) ?></p>
								<h3 class="mt-4">2023</h3>
								<p><strong>Ulica Festival</strong> - <?= __('cracovia',$lang) ?></p>
                                <p><strong>Sztuka Ulicy</strong> - <?= __('varsovia',$lang) ?></p>
                                <p><strong>Teatrów Otwórz okno na kulturę</strong> - <?= __('konin',$lang) ?></p>
                                <p><strong>Bez Kurtyny</strong> - <?= __('elk',$lang) ?></p>
								<p><strong>Chalon Dans la Rue</strong> - <?= __('chalon',$lang) ?></p>
                                <p><strong>Il Paese dei Balocchi</strong> - <?= __('fano',$lang) ?></p>
								<p><strong>Theaterspektakel</strong> - <?= __('zurich',$lang) ?></p>
                                <p><strong>Brouwselss oop straat</strong> - <?= __('eke',$lang) ?></p>
                                <p><strong>Fira Tárrega</strong> - <?= __('tarrega',$lang) ?></p>
								<p><strong>EIMYC Salta</strong> - <?= __('salta',$lang) ?></p>
								<p><strong>EIMYC Jujuy</strong> - <?= __('jujuy',$lang) ?></p>
                                <h3 class="mt-4">2022</h3>
								<p><strong>Onderstroom Festival</strong> - <?= __('vlissingen',$lang) ?></p>
                                <p><strong>Berlin Lacht</strong> - <?= __('berlin',$lang) ?></p>
                                <p><strong>Gentse Feesten</strong> - <?= __('gent',$lang) ?></p>
                                <p><strong>Festival D´Aurillac</strong> - <?= __('aurillac',$lang) ?></p>
                                <p><strong>Theaterspektakel</strong> - <?= __('zurich',$lang) ?></p>
                                <p><strong>ZugFäscht</strong> - <?= __('zug',$lang) ?></p>
                                <p><strong>Fira Tárrega</strong> - <?= __('tarrega',$lang) ?></p>
                                <p><strong>Festival de Arte Callejero</strong> - <?= __('coronda',$lang) ?></p>
								<h3 class="mt-4">2021</h3>
								<p><strong>FestiCUAC</strong> - <?= __('buenosaires',$lang) ?></p>
								<p><strong>Argentina Florece Teatral</strong> - <?= __('buenosaires',$lang) ?></p>
								<h3 class="mt-4">2019</h3>
								<p><strong>Festival D'Avignon</strong> - <?= __('avignon',$lang) ?></p>
								<p><strong>Chalon Dans la Rue</strong> - <?= __('chalon',$lang) ?></p>
								<p><strong>SMIAF</strong> - <?= __('sanmarino',$lang) ?></p>
								<p><strong>Biograd International Music Festival</strong> - <?= __('biograd',$lang) ?></p>
								<p><strong>Theaterspektakel</strong> - <?= __('zurich',$lang) ?></p>
								<p><strong>Festival D´Aurillac</strong> - <?= __('aurillac',$lang) ?></p>
								<p><strong>Fira Tárrega</strong> - <?= __('tarrega',$lang) ?></p>
								<h3 class="mt-4">2018</h3>
								<p><strong>Festival D'Avignon</strong> - <?= __('avignon',$lang) ?></p>
								<p><strong>Chalon Dans la Rue</strong> - <?= __('chalon',$lang) ?></p>
								<p><strong>Kulturufer</strong> - <?= __('friedrichshafen',$lang) ?></p>
								<p><strong>Theaterspektakel</strong> - <?= __('zurich',$lang) ?></p>
								<p><strong>Fira Tárrega</strong> - <?= __('tarrega',$lang) ?></p>
								<h3 class="mt-4">2017</h3>
								<p><strong>1er Festival Internacional de Circo Social</strong> - <?= __('catamarca',$lang) ?></p>
								<p><strong>9no Octubre Callejero</strong> - <?= __('moreno',$lang) ?></p>
								<h3 class="mt-4">2016</h3>
								<p><strong>1er Festival de Circo Lacustre</strong> - <?= __('villarica',$lang) ?></p>
								<h3 class="mt-4">2015</h3>
								<p><strong>Semana Mundial del Arte Callejero</strong> - <?= __('buenosaires',$lang) ?></p>
								<p><strong>FLIA</strong> - <?= __('buenosaires',$lang) ?></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End About Us Section -->
		<div class="triangle"></div>
		<!-- ======= Contact Section ======= -->
		<section id="contact" class="contact pb-0">
			<div class="container mt-2">
				<div class="section-title" data-aos="fade-up">
					<h2> <?= __('contact',$lang) ?></h2>
				</div>
				<div class="section-body">
					<div class="row justify-content-center">
							<div class="rounded" data-aos="zoom-in">
								<div class="card bg-gradient">
									<div class="card-body">
										<form id="contact_form">
											<div class="form-group">
												<input type="text" name="name" class="form-control" id="form_name" placeholder="<?= __('yourname',$lang) ?>" required>
											</div>
											<div class="form-group">
												<input type="email" class="form-control" name="email" id="form_email" placeholder="<?= __('youremail',$lang) ?>" required>
											</div>
											<div class="form-group">
												<textarea class="form-control" name="message" id="form_message" rows="5" placeholder="<?= __('yourmessage',$lang) ?>" required></textarea>
											</div>
											<div class="text-center"><input type="button" id="submit_button" data-send="<?= __('send',$lang) ?>" data-sending="<?= __('sending',$lang) ?>" value="<?= __('send',$lang) ?>"></div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div id="form_info" class="text-center mt-1" data-success="<?= __('sent',$lang) ?>" data-error="<?= __('error',$lang) ?>" data-required="<?= __('required',$lang) ?>" data-invalid="<?= __('invalid-mail',$lang) ?>"></div>
				</div>
				<div class="row justify-content-center my-5">
					<div class="card" data-aos="zoom-in">
						<div class="card-body">
							<a href="https://instagram.com/mantecaldente" target="_blank" class="mx-2">
								<i class="fab fa-instagram fa-2x"></i>
							</a>
							<a href="https://facebook.com/mantecaldente" class="mx-2">
								<i class="fab fa-facebook fa-2x"></i>
							</a>
							<a href="https://vimeo.com/mantecaldente" class="mx-2">
								<i class="fab fa-vimeo fa-2x"></i>
							</a>
							<a href="https://youtube.com/channel/UCa01J-VG2_24O8OWlXb3T-w?sub_confirmation=1" class="mx-2">
								<i class="fab fa-youtube fa-2x"></i>
							</a>
						</div> 
					</div>
				</div>
				<img src="images/webp/manteca-globo.webp" class="manteca-globo aos-init" data-aos="fade-left">
			</div>
		</section>
		<!-- End Contact Section -->
	</main>
	<!-- End #main -->
	<!-- ======= Footer ======= -->
	<footer id="footer" class="p-2">
		<div class="container">
		<div class="row d-flex align-items-center">
			<div class="col-12 text-center">
				<div class="credits">
					&copy; 2022 <strong> <?= __('manteca',$lang) ?></strong>. <?= __('copyright',$lang) ?>. <strong><?= __('dev',$lang) ?></strong> <a href="https://dev.eypacha.com/">EyPacha!</a>
				</div>
			</div>
		</div>
		</div>
	</footer>
	<!-- End Footer -->
	<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="fas fa-arrow-up"></i></a>
	<!-- Librerias compiladas : codigo de terceros -->
	<script src="private/js/scripts.min.js"></script>
	<!-- Script compilado: script propio -->
	<script src="private/js/main.min.js"></script>
</body>
</html>