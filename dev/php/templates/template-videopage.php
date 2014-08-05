<?php
/*
Template Name: temp video page
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

<!-- -------------------------------------------------------- -->

<div class="video-wrapper">
	<div class="video-title">
		<p>Intro</p>
	</div>
	<div class="fitvid">
		<iframe width="560" height="315" src="//www.youtube.com/embed/7kMMhdQvzeY" frameborder="0" allowfullscreen></iframe>
	</div>
</div>

<div class="video-wrapper">
	<div class="video-title">
		<p>Praktijk Examen</p>
	</div>
	<div class="fitvid">
		<iframe width="560" height="315" src="//www.youtube.com/embed/A6GRqEI8TwM" frameborder="0" allowfullscreen></iframe>
	</div>
</div>

<div class="video-wrapper">
	<div class="video-title">
		<p>Theorie Examen</p>
	</div>
	<div class="fitvid">
		<iframe width="560" height="315" src="//www.youtube.com/embed/0IylUl0dQ30" frameborder="0" allowfullscreen></iframe>
	</div>
</div>
<!-- -------------------------------------------------------- -->
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
