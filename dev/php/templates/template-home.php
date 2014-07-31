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

						<!-- --------------------------------------------------- -->
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
											<span>Persoonlijke aanpak</span>
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

							<div class="u-gridCol5">
								<!-- ------------------ -->
								<div class="call-me-wrap">
									<div class="call-me">
										<h3>Bel mij terug</h3>
										<p>Vul de onderstaande gegevens in,</p>
										<p>en wij bellen terug!</p>

										<div class="call-me-form">
											<?php the_content(); ?>
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
								
								
						<div class="content-home-box">
							<p>Op zoek naar een kwalitatief hoogwaardige en betaalbare rijschool in Leiden en omgeving, dan ben je bij Rijschool Uniek aan het juiste adres.</p>
							<p>Het is eindelijk zover je hebt de leeftijd bereikt dat je voor je rijbewijs mag gaan, iets waar je lang op hebt verheugd. Dan is het kiezen van een passende rijschool niet makkelijk.</p>

							<p>Maar wij van Rijschool Uniek Leiden bieden jou een kwalitatieve en betaalbare opleiding. Wij zijn van mening dat met de juiste begeleiding en geruststelling de slagingskansen extra groot zijn, wij doen er dan ook alles aan om jouw begeleiding af te stemmen op jou eigenschappen en niveau.</p>

							<p>Wij doen aan persoonlijke aanpak daarom is ieder… Uniek bij Rijschool Uniek!</p>

							<p>Ben je geïnteresseerd in een van onze rij-opleidingen, of heb je vragen aarzel dan niet en neem gerust contact met ons op, Of vul het aanmeldingsformulier in en wij nemen binnen 24 uur contact met u op.</p>
						</div>
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
