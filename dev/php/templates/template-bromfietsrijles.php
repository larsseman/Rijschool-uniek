<?php
/*
Template Name: temp bromfiets rijles
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
<div class="pakket">
	<div class="u-gridRow">
		<div class="u-gridCol8">
			<p>5 lessen inclusief praktijkexamen</p>
		</div>
		
		<div class="u-gridCol4">
			<p>€ 350,-</p>
		</div>
	</div>

	<div class="u-gridRow">
		<div class="u-gridCol8">
			<p>Praktijkexamen herkansing</p>
		</div>
		
		<div class="u-gridCol4">
			<p>€ 210,-</p>
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
