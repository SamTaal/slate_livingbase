<?php
/*
Template Name: Landingspage
*/
?>

<?php get_header(); ?>

	<div class="content-home u-gridContainer">
			<div class="u-gridRow">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div class="content-left u-gridCol8" style="height: auto;">
					<h2><?php the_title(); ?></h2>
					<p>
						<?php the_content(); ?>
					</p>
				</div>
				<?php endwhile; endif; ?>
				<div class="content-right u-gridCol4">
					<h2>Geïnteresseerd?</h2>
					<p>
						<a href="/contact/">Neem contact met ons op!</a>
					</p>
				</div>			
			</div>
			<div class="cb"></div>
	</div>

<?php get_footer(); ?>
