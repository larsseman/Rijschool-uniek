<?php
/*
Template Name: temp auto rijles
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
	<div class="table-row">
		<div class="row-left">
			<h6>Losse les:</h6>                
			<p>(Een losse les heeft een duur van 60 minuten)</p>
		</div>
			
		<div class="row-right">
			<p>€ 35,-</p>
		</div>
	</div>

	<div class="table-row extra-row">
		<div class="row-left">
			<h6>Praktijk Examen B (CBR):</h6>
			<p>(Inclusief verhuur van auto tijdens praktijkexamen en eigen gezeondheidsverklaring)(EV)</p>
		</div>
		
		<div class="row-right">
			<p>€ 230,-</p>
		</div>
	</div>

	<div class="table-row">
		<div class="row-left">
			<h6>Herkansing Praktijk Examen B (CBR):</h6>
			<p>(Inclusief verhuur van auto tijdens praktijkexamen)</p>
		</div>

		<div class="row-right">
			<p>€ 220,-</p>
		</div>
	</div>

	<div class="table-row extra-row3">
		<div class="row-left">
			<h6>Praktijk Examen B (BNOR):</h6>
			<p>(Inclusief verhuur van auto tijdens examen, deze examen vindt plaats bij het Bureau Nader Onderzoek Rijvaardigheid, dit is nodig na de 4e keer herkansing bij het CBR)</p>
		</div>
		
		<div class="row-right">
			<p>€ 240,-</p>
		</div>
	</div>
	
	<div class="table-row extra-row3">
		<div class="row-left">
			<h6>Tussentijdse Toets:</h6>
			<p>(De toets is een rijtest die verloopt als een echte praktijkexamen. het is een goede gelegenheid om alvast te wennen aan het praktijk examen)</p>
		</div>
	
		<div class="row-right">
			<p>€ 150,-</p>
		</div>
	</div>
</div>

<div class="ul-pakket">
	<ul>
		<li>Pakket 1: 10 lessen inclusief Praktijk Examen          <span>€ 549,-</span></li>
		<li>Pakket 2: 20 lessen inclusief Praktijk Examen          <span>€ 879,-</span></li>
		<li>Pakket 3: 30 lessen inclusief Praktijk Examen          <span>€ 1220,-</span></li>
		<li>Pakket 4: 35 lessen inclusief Praktijk Examen          <span>€ 1380,-</span></li>
		<li>Pakket 5: 40 lessen inclusief Praktijk Examen          <span>€ 1550,-</span></li>
	</ul>
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
