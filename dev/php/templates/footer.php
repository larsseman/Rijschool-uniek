	<div class="Footer">
<!--
		<div class="Footer-social">
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
-->

		<div class="u-gridContainer">
			<?php if ( is_active_sidebar( 'footer-widgets' ) ) : ?>
			<div class="Footer-inner u-gridRow">
				<?php dynamic_sidebar( 'footer-widgets' ); ?>
			</div>
			<?php endif; ?>
		</div>
	</div>
</div><!-- Fullbody-wrapper -->


	<div class="Socket">
		<div class="u-gridContainer">
			<!-- Copyright info -->
			<p>&copy; <?php bloginfo('name'); ?> <?php echo date("Y"); ?> - Website & SEO door 
					<a class="LG-link" href="http://www.lokaalgevonden.nl" target="_blank">Lokaal<span>Gevonden</span></a>
			</p>
		</div>
	</div>

  <!-- Load jquery from google CDN if possible, with fallback to cdnjs -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.0/jquery.min.js"><\/script>')</script>

  <!-- build:remove:expanded -->
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/production.min.js"></script>
  <!-- /build -->
  <!-- build:remove:compressed -->
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/landingpage-select.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/nav-collapse.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/nav-dropdown.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/prepend-svg.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/google-maps.js"></script>
  <script src="http://localhost:35729/livereload.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/html-inspector/0.8.0/html-inspector.js"></script>
  <script>HTMLInspector.inspect();</script>
  <!-- /build -->

  <!-- Check if javascript for threaded comments should be loaded -->
  <?php include 'includes/comment-check.php'; ?>

	<!-- Wordpress footer -->
	<?php wp_footer(); ?>
	</body>
</html>
