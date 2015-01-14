<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>

	<div class="content-home u-gridContainer">
			<div class="u-gridRow">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div class="content-left u-gridCol8">
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
	<div class="gallery">
		<div class="u-gridContainer gallerycontainer">
			<div class="u-gridRow">
				<div class="u-gridCol4">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/gallerytop1.png"/>
				</div>
				<div class="u-gridCol4">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/gallerytop2.png" />
				</div>
				<div class="u-gridCol4">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/gallerytop3.png"/>
				</div>
			</div>
			<div class="u-gridRow gallerysecondrow">
				<div class="u-gridCol3">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/gallerydown1.png"/>
				</div>
				<div class="u-gridCol3">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/gallerydown2.png" />
				</div>
				<div class="u-gridCol3">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/gallerydown3.png"/>
				</div>
				<div class="u-gridCol3">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/gallerydown4.png"/>
				</div>
			</div>
		</div>	
	</div>

<?php get_footer(); ?>
