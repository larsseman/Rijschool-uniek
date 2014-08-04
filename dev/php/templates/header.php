<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
  <head prefix="og: http://ogp.me/ns/website#"><!-- Prefix is used to declare facebook opengraph namespace for websites -->
    <!-- Charset -->
    <meta charset="<?php bloginfo( 'charset' ); ?>" />

    <!-- IE: render in highest mode available -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Title -->
    <title><?php wp_title( '|', true, 'right' ); ?></title>

    <!-- Mobile devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Automate reverse linking (pingbacks) -->
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <!-- Favicons -->
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.ico">
    <link rel="apple-touch-icon-precomposed" href="<?php echo get_stylesheet_directory_uri(); ?>/img/app-icon-rijschool-uniek.png">

	<!-- Font -->
	<link href='http://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet' type='text/css'>

    <!-- build:remove:expanded -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/production.min.css">
    <!-- /build -->
    <!-- build:remove:compressed -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/production.css">
    <!-- /build -->

    <!-- build:remove:compressed -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.min.js"></script>
    <!-- /build -->

    <!-- Wordpress head function -->
    <?php wp_head(); ?>
    <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

  </head>
  <body <?php body_class(); ?> >
	<div class="Side-social">
		<a target="_blank" href="https://www.facebook.com/RijschoolUniek">
			<img class="pad-bot-social" src="<?php echo get_stylesheet_directory_uri(); ?>/img/svg/facebook.svg">
		</a>

		<a target="_blank" href="https://twitter.com/rijschoolluniek">
			<img class="pad-bot-social" src="<?php echo get_stylesheet_directory_uri(); ?>/img/svg/twitter.svg">
		</a>

		<a target="_blank" href="https://www.youtube.com/channel/UCJAIKK_GUOKLKrALPtHiXoA?feature=watch">
			<img class="pad-bot-social" src="<?php echo get_stylesheet_directory_uri(); ?>/img/svg/youtube.svg">
		</a>
		
		<a target="_blank" href="https://plus.google.com/102465697407262894190/about">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/svg/google+.svg">
		</a>
	</div>
	
	<div class="Top-Nav">
		<div class="u-gridContainer">

			<a href="/home/">
				<div class="Logo"></div>
			</a>
			
			<div class="Top-contact">
				<a href="tel:0718080149">
					<div class="Top-tel">
						<div class="Top-img">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/svg/telefoon.svg">
						</div>
						
						<span>071 - 80 80 149</span>
					</div>
				</a>

				<a href="tel:0648038209">
					<div class="Top-mob">
						<div class="Top-img">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/svg/mobiel.svg">
						</div>
						
						<span>06 - 480 38 209</span>
					</div>
				</a>
			</div><!-- Top-contact -->


			<div class="Top-contact two">
				<a href="tel:0718080149">
					<div class="Top-tel">
						<div class="Top-img">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/svg/telefoon.svg">
						</div>
					</div>
				</a>

				<a href="tel:0648038209">
					<div class="Top-mob">
						<div class="Top-img">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/svg/mobiel.svg">
						</div>
					</div>
				</a>
			</div><!-- Top-contact -->
			
		</div><!-- u-grid -->
	</div><!-- Top-nav -->
	
	
	
	

    <!-- Main navigation -->
	<div class="Nav-wrap u-gridContainer">

		<div class="Nav-toggle">
			<a class="Navigation-menuToggle" id="js-navCollapse">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Nav-toggle-icon.png">
			</a>
		</div>

	    <?php include 'includes/navigation.php'; ?>
	    
		<div class="Mob-contact-ico">
			<a class="Button Button--transparent u-textInverted u-noLine tel2svg" href="tel:0718080149"> 
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/svg/telefoon.svg">
			</a>

			<a class="Button Button--transparent u-textInverted u-noLine telsvg" href="tel:0648038209">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/svg/mobiel.svg">
			</a>
				
			<a class="Button Button--transparent u-textInverted u-noLine mailsvg" href="mailto:info@rijschool-uniek.nl">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/mail.png">
			</a>
		</div><!-- header-contact-->


	</div>


<div class="Fullbody-wrapper u-gridContainer">

	<div class="Header">
		<div class="Slider-img">
			<img src="<?php echo get_stylesheet_directory_uri();?>/img/slider_image.jpg">
		</div>
		
		<div class="Slide-one-text">
			<p>Meld je nu aan en ontvang een</p>
			<span>gratis proefles!</span>
		</div>

		<div class="Slide-two-text">
			<a href="/aanmelden/">
				<p>Meld je nu aan en ontvang een <span>gratis proefles!</span></p>
			</a>
		</div>
	</div>
	
<?php if(is_front_page() || is_page_template('template-landingspagina.php')) { ?>
	<div class="Page-title">
		<h2>Welkom bij Rijschool Leiden Uniek</h2>
		<p>Welkom bij de rijschool van Leiden en omgeving al geruime tijd een toonaangevende rijschool in Leiden en omgeving!</p>
	</div>
	
<?php } ?>