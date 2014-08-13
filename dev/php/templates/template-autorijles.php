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
	<div class="table-row u-gridRow">
		<div class="row-left u-gridCol9">
			<h6>Losse les:</h6>                
			<p>(Een losse les heeft een duur van 60 minuten)</p>
		</div>
			
		<div class="row-right u-gridCol3">
			<p>€ 35,-</p>
		</div>
	</div>

	<div class="table-row extra-row u-gridRow">
		<div class="row-left u-gridCol9">
			<h6>Praktijk Examen B (CBR):</h6>
			<p>(Inclusief verhuur van auto tijdens praktijkexamen en eigen gezeondheidsverklaring)(EV)</p>
		</div>
		
		<div class="row-right u-gridCol3">
			<p>€ 230,-</p>
		</div>
	</div>

	<div class="table-row u-gridRow">
		<div class="row-left u-gridCol9">
			<h6>Herkansing Praktijk Examen B (CBR):</h6>
			<p>(Inclusief verhuur van auto tijdens praktijkexamen)</p>
		</div>

		<div class="row-right u-gridCol3">
			<p>€ 220,-</p>
		</div>
	</div>

	<div class="table-row extra-row3 u-gridRow">
		<div class="row-left u-gridCol9">
			<h6>Praktijk Examen B (BNOR):</h6>
			<p>(Inclusief verhuur van auto tijdens examen, deze examen vindt plaats bij het Bureau Nader Onderzoek Rijvaardigheid, dit is nodig na de 4e keer herkansing bij het CBR)</p>
		</div>
		
		<div class="row-right u-gridCol3">
			<p>€ 240,-</p>
		</div>
	</div>
	
	<div class="table-row extra-row3 u-gridRow">
		<div class="row-left u-gridCol9">
			<h6>Tussentijdse Toets:</h6>
			<p>(De toets is een rijtest die verloopt als een echte praktijkexamen. het is een goede gelegenheid om alvast te wennen aan het praktijk examen)</p>
		</div>
	
		<div class="row-right u-gridCol3">
			<p>€ 150,-</p>
		</div>
	</div>
</div><!-- Table-wrap -->



<div class="pakket">
	<div class="u-gridRow">
		<div class="u-gridCol8">
			<p>Pakket 1: 10 lessen inclusief Praktijk Examen</p>          
		</div>
		
		<div class="u-gridCol4">
			<p>€ 549,-</p>
		</div>
	</div>
	
	<div class="u-gridRow">
		<div class="u-gridCol8">
			<p>Pakket 2: 20 lessen inclusief Praktijk Examen</p>          
		</div>
		
		<div class="u-gridCol4">
			<p>€ 879,-</p>
		</div>
	</div>

	<div class="u-gridRow">
		<div class="u-gridCol8">
			<p>Pakket 3: 30 lessen inclusief Praktijk Examen</p>          
		</div>
		
		<div class="u-gridCol4">
			<p>€ 1220,-</p>
		</div>
	</div>

	<div class="u-gridRow">
		<div class="u-gridCol8">
			<p>Pakket 4: 35 lessen inclusief Praktijk Examen</p>          
		</div>
		
		<div class="u-gridCol4">
			<p>€ 1380,-</p>
		</div>
	</div>

	<div class="u-gridRow no">
		<div class="u-gridCol8">
			<p>Pakket 5: 40 lessen inclusief Praktijk Examen</p>          
		</div>
		
		<div class="u-gridCol4">
			<p>€ 1550,-</p>			
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
