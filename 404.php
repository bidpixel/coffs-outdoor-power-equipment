<?php get_header(); ?>

<section class="error-404 section-pad">
	<div class="container">
		<p class="error-404__code" aria-hidden="true">404</p>
		<h1>Page not found</h1>
		<p>Sorry, we couldn't find what you were looking for. Head back to the homepage or get in touch with us directly.</p>
		<div style="display:flex;flex-wrap:wrap;gap:1rem;">
			<a class="btn btn--primary" href="<?php echo esc_url( home_url( '/' ) ); ?>">Back to home</a>
			<a class="btn btn--outline" href="<?php echo esc_url( home_url( '/contact' ) ); ?>">Contact us</a>
		</div>
	</div>
</section>

<?php get_footer(); ?>
