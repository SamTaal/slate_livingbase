<?php
/*
Template Name: No sidebar
*/
?>

<?php get_header(); ?>

	<div>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="Content u-gridContainer content-home Content--app" id="post-<?php the_ID(); ?>">
			<div class="u-gridContainer">
				<h2><?php the_title(); ?></h2>
				<article class="Content-article" id="post-<?php the_ID(); ?>">
					<?php the_content(); ?>

				</article>
			</div>
		</div>
	<?php endwhile; endif; ?>
	</div>

<?php get_footer(); ?>


