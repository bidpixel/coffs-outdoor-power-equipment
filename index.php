<?php get_header(); ?>

<main class="site-main">
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<article <?php post_class( 'entry' ); ?>>
				<div class="container">
					<h1 class="entry__title"><?php the_title(); ?></h1>
					<div class="entry__content"><?php the_content(); ?></div>
				</div>
			</article>
		<?php endwhile; ?>
	<?php else : ?>
		<div class="container">
			<h1>Nothing found</h1>
		</div>
	<?php endif; ?>
</main>

<?php get_footer(); ?>
