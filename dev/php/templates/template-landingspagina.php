<?php
/*
Template Name: Landingspagina
*/
?>

<?php get_header(); ?>

	<div class="u-gridContainer white-content">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article class="Content Content--home" id="post-<?php the_ID(); ?>">
			<div class="Content-entry">
				<div class="u-gridRow">

					<div class="u-gridCol8 Coll-Full-mob">
						<div class="u-gridRow">
							<div class="u-gridCol7 home-full-mid">

						<!-- --------------------------------------------------- -->
								<div class="u-gridRow Home-pad-left">
									<div class="u-gridCol4">
										<div class="Home-three-img">
											<a href="/autorijlessen/">
												<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/svg/auto.svg">
												<p>Autorijles</p>
											</a>
										</div>
									</div>

									<div class="u-gridCol4">
										<div class="Home-three-img">
											<a href="/motorrijlessen/">
												<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/svg/motor.svg">
												<p>Motorrijles</p>
											</a>
										</div>
									</div>

									<div class="u-gridCol4">
										<div class="Home-three-img">
											<a href="/bromfietsrijlessen/">
												<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/svg/bromfiets.svg">
												<p>Bromfietsrijles</p>
											</a>
										</div>
									</div>
						<!-- --------------------------------------------------- -->
									<div class="u-gridCol12">
										<div class="hr-style">
											<hr>
										</div>
									</div>
						<!-- --------------------------------------------------- -->
									<div class="u-gridCol12 points-rows">
										<h2>Onze kracht</h2>
									</div>
						<!-- --------------------------------------------------- -->
									<div class="u-gridCol6 points-rows">
										<div class="pointRow">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/svg/vinkje.svg">
											<span>Persoonlijk</span>
										</div>

										<div class="pointRow">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/svg/vinkje.svg">
											<span>Kwaliteit</span>
										</div>

										<div class="pointRow">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/svg/vinkje.svg">
											<span>Eerlijkheid</span>
										</div>
									</div>


									
									<div class="u-gridCol6 points-rows">
										<div class="pointRow">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/svg/vinkje.svg">
											<span>Geduld</span>
										</div>
										
										<div class="pointRow">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/svg/vinkje.svg">
											<span>Hoog slagings-</span> <span class="margin-left-span-home">percentage</span>
										</div>
									</div>
						<!-- --------------------------------------------------- -->										
								</div><!-- u-gridRow -->
												
							</div><!-- u-gridCol7 -->

							<div class="u-gridCol5 home-full-mid">
								<!-- ------------------ -->
								<div class="call-me-wrap">
									<div class="call-me">
										<h3>Bel mij terug</h3>
										<p>Vul de onderstaande gegevens in,</p>
										<p>en wij bellen terug!</p>

										<div class="call-me-form">
											<?php echo do_shortcode('[gravityform id="2" name="Belmij" title="false" description="false"]'); ?>
										</div> <!-- call-me-form -->

									</div><!-- call-me -->
								</div><!-- call-me-wrap -->
								<!-- ------------------ -->
							</div><!-- u-gridCol5 -->
							
						</div><!-- u-gridRow -->
						
						
						<div class="u-gridRow">
							<div class="u-gridCol12">
								<div class="hr-style">
									<hr>
								</div>
							</div>				
						</div><!-- u-gridRow -->
								
						<?php the_content() ?>			
					</div><!-- Col8 -->

					<div class="u-gridCol4">
						<div class="Sidebar">
							<?php get_sidebar(); ?>
						</div>
					</div><!-- Col4 -->

				</div><!-- Row -->
			</div><!-- Content-entry -->
		</article>
	<?php endwhile; endif; ?>
	</div>

<?php get_footer(); ?>
