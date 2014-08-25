<?php
/*
Template Name: temp motor rijles
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
<p>Rijschool Uniek biedt verschillende soorten betalingsmogelijkheden aan, zodat de betaling van je rij-opleiding nooit een probleem hoeft te zijn. Betaal je rij-opleiding in termijnen of in één keer per bank of contant bij de rij-instructeur.</p>


<div class="table-wrap">
	<div class="table-row u-gridRow">
		<div class="row-left u-gridCol9">
			<h6>Losse les:</h6>
			<p>(Een losse les heeft een duur van 60 minuten)</p>
		</div>
			
		<div class="row-right u-gridCol3">
			<p>€ 37,-</p>
		</div>
	</div>

	<div class="table-row u-gridRow">
		<div class="row-left u-gridCol9">
			<p>Voertuigbeheersing (AVB) praktijkexamen</p>
		</div>
			
		<div class="row-right u-gridCol3">
			<p>€ 120,-</p>
		</div>
	</div>

	<div class="table-row u-gridRow">
		<div class="row-left u-gridCol9">
			<p>Verkeersdeelneming (AVD) praktijkexamen</p>
		</div>
			
		<div class="row-right u-gridCol3">
			<p>€ 230,-</p>
		</div>
	</div>
</div>


<div class="pakket table-wrap">
	<div class="u-gridRow table-row">
		<div class="u-gridCol9 row-left">
			<p>Pakket 1: 10 lessen inclusief (AVB) en (AVD) Examen</p>
		</div>
		
		<div class="u-gridCol3 row-right">
			<p>€ 710,-</p>
		</div>
	</div>

	<div class="u-gridRow table-row">
		<div class="u-gridCol9 row-left">
			<p>Pakket 2: 20 lessen inclusief (AVB) en (AVD) Examen</p>
		</div>
		
		<div class="u-gridCol3 row-right">
			<p>€ 879,-</p>
		</div>
	</div>

	<div class="u-gridRow table-row">
		<div class="u-gridCol9 row-left">
			<p>Pakket 3: 25 lessen inclusief (AVB) en (AVD) Examen</p>
		</div>
		
		<div class="u-gridCol3 row-right">
			<p>€ 1225,-</p>
		</div>
	</div>

	<div class="u-gridRow no table-row">
		<div class="u-gridCol9 row-left">
			<p>Pakket 4: 30 lessen inclusief (AVB) en (AVD) Examen</p>
		</div>
		
		<div class="u-gridCol3 row-right">
			<p>€ 1390,-</p>
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
