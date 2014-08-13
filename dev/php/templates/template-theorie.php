<?php
/*
Template Name: temp theorie
*/
?>

<?php get_header(); ?>

	<div class="u-gridContainer white-content">

		<div class="u-gridRow">
			<div class="Content-entry">
				<div class="u-gridCol8 Coll-8">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<article class="Content Content--rightsidebar" id="post-<?php the_ID(); ?>">

							<div class="pagetitle">
								<h2><?php the_title(); ?></h2>
							</div>
<!-- ------------------------------------------------ -->				
<p>Voordat u het praktijkexamen mag doen moet u eerst het theoriecertificaat behalen. Het theorie examen word afgelegd bij het CBR.</p>
<p>De norm om te slagen is: minimaal 13 van de 25 vragen goed over gevaarherkenning en 35 van de 40 vragen goed over verkeersregels en verkeersinzicht.</p>

<div class="table-wrap">
	<div class="table-row u-gridRow">
		<div class="row-left u-gridCol9">
			<h6>Theorie examen (klassikaal)</h6>
			<p>(Vind plaats bij het CBR)</p>
		</div>
			
		<div class="row-right u-gridCol3">
			<p>€ 40,-</p>
		</div>
	</div>

	<div class="table-row u-gridRow">
		<div class="row-left u-gridCol9">
			<h6>Theorie examen (individueel)</h6>
			<p>(Vind plaats bij het CBR)</p>
		</div>
			
		<div class="row-right u-gridCol3">
			<p>€ 80,-</p>
		</div>
	</div>

	<div class="table-row u-gridRow">
		<div class="row-left u-gridCol9">
			<h6>Theorie boek personenauto B:</h6>
		</div>
			
		<div class="row-right u-gridCol3">
			<p>€ 35,-</p>
		</div>
	</div>

	<div class="table-row u-gridRow">
		<div class="row-left u-gridCol9">
			<h6>Theorie boek personenauto B:</h6>
			<p>(Inclusief CD-rom)</p>
		</div>
			
		<div class="row-right u-gridCol3">
			<p>€ 50,-</p>
		</div>
	</div>
</div>


<!-- ------------------------------------------------ -->				
					
							<?php the_content(); ?>
							<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
						</article>
					<?php endwhile; endif; ?>
				</div> <!--Coll-8 -->
					
				<div class="u-gridCol4">
					<div class="Sidebar">
						<div class="Sidebar-inner">
							<?php get_sidebar(); ?>
						</div>
					</div>
				</div>
			</div>
		</div><!-- u-gridRow -->
	</div><!-- u-gridContainer -->

<?php get_footer(); ?>
