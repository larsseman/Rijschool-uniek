<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>

	<div class="u-gridContainer white-content">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article class="Content Content--home" id="post-<?php the_ID(); ?>">
			<div class="Content-entry">
				<div class="u-gridRow">

					<div class="u-gridCol9">
						<div class="u-gridRow">
							<div class="u-gridCol7">

								<div class="u-gridRow Home-pad-left">
									<div class="u-gridCol4">
										<div class="Home-three-img">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/svg/auto.svg">
											<p>Autorijles</p>
										</div>
									</div>

									<div class="u-gridCol4">
										<div class="Home-three-img">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/svg/motor.svg">
											<p>Motorrijles</p>
										</div>
									</div>

									<div class="u-gridCol4">
										<div class="Home-three-img">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/svg/bromfiets.svg">
											<p>Bromfietsrijles</p>
										</div>
									</div>

									<div class="u-gridCol12">
										<div class="hr-style">
											<hr>
										</div>
									</div>
									
									<div class="u-gridCol6 points-rows">
										<h2>Onze kracht</h2>

										<div class="pointRow">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/svg/vinkje.svg">
											<span>Persoonlijke aanpak</span>
										</div>

										<div class="pointRow">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/svg/vinkje.svg">
											<p>Persoonlijke aanpak</p>
										</div>

										<div class="pointRow">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/svg/vinkje.svg">
											<p>Persoonlijke aanpak</p>
										</div>

									</div>
									
									
									
								</div><!-- u-gridRow -->
								
							</div><!-- u-gridCol7 -->

							<div class="u-gridCol5">
								<div class="call-me-wrap">
									<div class="call-me">
										<h3>Bel mij terug</h3>
										<p>Vul de onderstaande gegevens in,</p>
										<p>en wij bellen terug!</p>

										<div class="call-me-form">
											<div class="placehold-div">
												temp-placeholder
											</div>
										</div>

									</div>
								</div>
							</div><!-- u-gridCol5 -->
							
						</div><!-- u-gridRow -->
 					  <!-- ----------------- -->
						<?php the_content(); ?>
					  <!-- ----------------- -->
					</div><!-- Col8 -->

					<div class="u-gridCol3">
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
