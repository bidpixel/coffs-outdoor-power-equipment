<?php
$serv_image = get_theme_mod( 'hp_servicing_image', get_template_directory_uri() . '/assets/images/servicing/outdoor-power-equipment-repair-coffs-coast-1.jpg' );
?>

<section class="servicing-preview section-pad">
	<div class="container">
		<div class="servicing-preview__inner">

			<div class="servicing-preview__image">
				<img
					src="<?php echo esc_url( $serv_image ); ?>"
					alt="Workshop technician servicing outdoor power equipment"
					width="800"
					height="600"
					loading="lazy"
				>
			</div>

			<div class="servicing-preview__content">
				<span class="section-label"><?php echo esc_html( get_theme_mod( 'hp_servicing_label', 'Repairs & maintenance' ) ); ?></span>
				<h2 class="section-heading"><?php echo esc_html( get_theme_mod( 'hp_servicing_heading', 'Keep your gear running, season after season.' ) ); ?></h2>
				<p><?php echo esc_html( get_theme_mod( 'hp_servicing_body1', 'Our on-site workshop handles everything from routine servicing to fault diagnosis and full repairs. We work on mowers, chainsaws, brushcutters, generators, pumps and more. Most makes and models welcome.' ) ); ?></p>
				<p><?php echo esc_html( get_theme_mod( 'hp_servicing_body2', "No booking required for basic diagnostics. Just drop it in and we'll take a look." ) ); ?></p>
				<a class="btn btn--primary" href="<?php echo esc_url( home_url( '/servicing' ) ); ?>"><?php echo esc_html( get_theme_mod( 'hp_servicing_cta', 'Learn about our servicing' ) ); ?></a>
			</div>

		</div>
	</div>
</section>
