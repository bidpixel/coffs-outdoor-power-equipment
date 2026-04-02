<section class="footer-cta">
	<div class="container">
		<h2><?php echo esc_html( get_theme_mod( 'hp_footer_cta_heading', 'Ready to talk gear?' ) ); ?></h2>
		<p><?php echo esc_html( get_theme_mod( 'hp_footer_cta_body', "Visit us in Urunga or Sapphire Beach, give us a call, or send us a message. We're happy to help you find the right equipment for the job." ) ); ?></p>
		<div class="footer-cta__ctas">
			<a class="btn btn--outline" href="<?php echo esc_url( home_url( '/contact' ) ); ?>"><?php echo esc_html( get_theme_mod( 'hp_footer_cta_cta1', 'Contact us' ) ); ?></a>
			<a class="btn btn--outline" href="<?php echo esc_attr( coffsope_phone_link('urunga') ); ?>">Call <?php echo esc_html( coffsope_phone('urunga') ); ?></a>
		</div>
	</div>
</section>
