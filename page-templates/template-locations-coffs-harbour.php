<?php
/**
 * Template Name: Location — Coffs Harbour
 */
get_header();

$hero_image   = get_theme_mod( 'loc_coffs_hero_image', get_template_directory_uri() . '/assets/images/hero/coffs-coast-outdoor-power-equipment.jpg' );
$store_image  = get_theme_mod( 'loc_coffs_store_image', get_template_directory_uri() . '/assets/images/stores/coffs-harbour-outdoor-power-equipment-store-front.jpg' );
?>

<div class="page-hero" style="background-image:url('<?php echo esc_url( $hero_image ); ?>');background-size:cover;background-position:center;position:relative;">
	<div style="position:absolute;inset:0;background:rgba(26,26,26,0.82);"></div>
	<div class="container" style="position:relative;z-index:2;">
		<h1><?php echo esc_html( get_theme_mod( 'loc_coffs_h1', 'Coffs Harbour Outdoor Power Equipment' ) ); ?></h1>
		<p class="page-hero__intro"><?php echo esc_html( get_theme_mod( 'loc_coffs_intro', "Located at Sapphire Beach, our Coffs Harbour store brings the same expertise and product range you'd expect from over 30 years in the industry. We're your local authorised STIHL and Honda dealer, and we also stock COX, Kress, Greenfield, Stiga and more." ) ); ?></p>
	</div>
</div>

<div class="location-body section-pad">
	<div class="container">
		<div class="location-grid">

			<aside>
				<div class="location-info-card">
					<div class="location-info-card__header">
						<h2>Store details</h2>
					</div>
					<div class="location-info-card__body">
						<dl>
							<div class="info-row">
								<dt class="info-row__label">Address</dt>
								<dd class="info-row__value">16 Wakelands Road<br>Sapphire Beach NSW 2450</dd>
							</div>
							<div class="info-row">
								<dt class="info-row__label">Phone</dt>
								<dd class="info-row__value"><a href="<?php echo esc_attr( coffsope_phone_link('coffs') ); ?>" style="color:var(--color-orange);"><?php echo esc_html( coffsope_phone('coffs') ); ?></a></dd>
							</div>
							<div class="info-row">
								<dt class="info-row__label">Email</dt>
								<dd class="info-row__value"><a href="mailto:<?php echo esc_attr( coffsope_email() ); ?>" style="color:var(--color-orange);"><?php echo esc_html( coffsope_email() ); ?></a></dd>
							</div>
							<div class="info-row">
								<dt class="info-row__label">Monday</dt>
								<dd class="info-row__value">Closed</dd>
							</div>
							<div class="info-row">
								<dt class="info-row__label">Tue–Fri</dt>
								<dd class="info-row__value">8:30am–4:30pm</dd>
							</div>
							<div class="info-row">
								<dt class="info-row__label">Saturday</dt>
								<dd class="info-row__value">9:00am–12:00pm</dd>
							</div>
							<div class="info-row">
								<dt class="info-row__label">Sunday</dt>
								<dd class="info-row__value">Closed</dd>
							</div>
						</dl>
						<div class="map-embed" style="margin-bottom:1.25rem;">
							<iframe
								src="https://maps.google.com/maps?q=16+Wakelands+Road+Sapphire+Beach+NSW+2450&output=embed"
								width="100%"
								height="100%"
								style="border:0;"
								allowfullscreen
								loading="lazy"
								referrerpolicy="no-referrer-when-downgrade"
								title="Coffs Harbour Outdoor Power Equipment, 16 Wakelands Road, Sapphire Beach NSW 2450"
							></iframe>
						</div>
						<div class="location-cta">
							<a class="btn btn--primary" href="https://maps.app.goo.gl/2i7si1rnu49NJaXr9" target="_blank" rel="noopener noreferrer">Get directions</a>
							<a class="btn btn--outline" href="<?php echo esc_attr( coffsope_phone_link('coffs') ); ?>">Call us</a>
							<a class="store-social-link" href="<?php echo esc_url( coffsope_facebook('coffs') ); ?>" target="_blank" rel="noopener noreferrer" aria-label="Facebook: Coffs Harbour Outdoor Power Equipment">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"/></svg>
							</a>
						</div>
					</div>
				</div>
			</aside>

			<div>
				<div class="location-store-image">
					<img src="<?php echo esc_url( $store_image ); ?>" alt="Coffs Harbour Outdoor Power Equipment store front" loading="lazy">
				</div>

				<div class="location-content-section">
					<h2><?php echo esc_html( get_theme_mod( 'loc_coffs_stock_heading', 'What we stock' ) ); ?></h2>
					<p><?php echo esc_html( get_theme_mod( 'loc_coffs_stock_body', 'From push mowers and brushcutters to chainsaws and generators. We carry the full range. As an authorised STIHL and Honda dealer, we can also assist with genuine parts and warranty support.' ) ); ?></p>
				</div>

				<div class="location-content-section">
					<h2><?php echo esc_html( get_theme_mod( 'loc_coffs_workshop_heading', 'Workshop & repairs' ) ); ?></h2>
					<p><?php echo esc_html( get_theme_mod( 'loc_coffs_workshop_body', 'Our on-site workshop handles servicing and repairs for most major brands. Drop in for a diagnostic. No booking required.' ) ); ?></p>
					<a class="btn btn--outline" href="<?php echo esc_url( home_url( '/servicing' ) ); ?>" style="margin-top:1rem;display:inline-flex;">Learn about servicing</a>
				</div>

				<div class="location-content-section">
					<p class="also-serving"><strong style="color:var(--color-white);">Also serving:</strong> <?php echo esc_html( get_theme_mod( 'loc_coffs_also_serving', 'Woolgoolga, Moonee Beach, Korora, Boambee and surrounding Coffs Harbour communities.' ) ); ?></p>
				</div>

			</div>

		</div>
	</div>
</div>

<?php get_template_part( 'template-parts/homepage/footer-cta' ); ?>

<?php get_footer(); ?>
