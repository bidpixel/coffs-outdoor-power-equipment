<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

	<div class="page-hero">
		<div class="container">
			<h1><?php the_title(); ?></h1>
		</div>
	</div>

	<section class="section-pad">
		<div class="container">
			<div class="entry__content">
				<?php the_content(); ?>
			</div>
		</div>
	</section>

<?php endwhile; ?>

<?php get_footer(); ?>
