<?php
/**
 * Template Name: Location — Urunga
 */
get_header();

$hero_image   = get_theme_mod( 'loc_urunga_hero_image', get_template_directory_uri() . '/assets/images/hero/coffs-coast-outdoor-power-equipment.jpg' );
$store_image  = get_theme_mod( 'loc_urunga_store_image', get_template_directory_uri() . '/assets/images/stores/urunga-chainsaw-mower-store-front.jpg' );
?>

<div class="page-hero" style="background-image:url('<?php echo esc_url( $hero_image ); ?>');background-size:cover;background-position:center;position:relative;">
	<div style="position:absolute;inset:0;background:rgba(26,26,26,0.82);"></div>
	<div class="container" style="position:relative;z-index:2;">
		<h1><?php echo esc_html( get_theme_mod( 'loc_urunga_h1', 'Urunga Chainsaw & Mower' ) ); ?></h1>
		<p class="page-hero__intro"><?php echo esc_html( get_theme_mod( 'loc_urunga_intro', "We've been part of the Urunga community for over 45 years. Whether you're after a new chainsaw, a ride-on mower for your acreage, or just need your brushcutter serviced, our team is here to help, with honest advice and no pressure." ) ); ?></p>
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
								<dd class="info-row__value">Lot 1/2 Marina Crescent<br>Urunga NSW 2455</dd>
							</div>
							<div class="info-row">
								<dt class="info-row__label">Phone</dt>
								<dd class="info-row__value"><a href="<?php echo esc_attr( coffsope_phone_link('urunga') ); ?>" style="color:var(--color-orange);"><?php echo esc_html( coffsope_phone('urunga') ); ?></a></dd>
							</div>
							<div class="info-row">
								<dt class="info-row__label">Email</dt>
								<dd class="info-row__value"><a href="mailto:enquiries@urungachainsawandmower.com.au" style="color:var(--color-orange);">enquiries@urungachainsawandmower.com.au</a></dd>
							</div>
							<div class="info-row">
								<dt class="info-row__label">Mon–Fri</dt>
								<dd class="info-row__value">8:30am–5:00pm</dd>
							</div>
							<div class="info-row">
								<dt class="info-row__label">Saturday</dt>
								<dd class="info-row__value">Closed</dd>
							</div>
							<div class="info-row">
								<dt class="info-row__label">Sunday</dt>
								<dd class="info-row__value">Closed</dd>
							</div>
						</dl>
						<div class="map-embed" style="margin-bottom:1.25rem;">
							<iframe
								src="https://maps.google.com/maps?q=Urunga+Chainsaw+%26+Mower&output=embed"
								width="100%"
								height="100%"
								style="border:0;"
								allowfullscreen
								loading="lazy"
								referrerpolicy="no-referrer-when-downgrade"
								title="Urunga Chainsaw &amp; Mower, Lot 1/2 Marina Crescent, Urunga NSW 2455"
							></iframe>
						</div>
						<div class="location-cta">
							<a class="btn btn--primary" href="https://maps.app.goo.gl/HjYxUSK3DPKGZTcf7" target="_blank" rel="noopener noreferrer">Get directions</a>
							<a class="btn btn--outline" href="<?php echo esc_attr( coffsope_phone_link('urunga') ); ?>">Call us</a>
							<a class="store-social-link" href="<?php echo esc_url( coffsope_facebook('urunga') ); ?>" target="_blank" rel="noopener noreferrer" aria-label="Facebook: Urunga Chainsaw &amp; Mower">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"/></svg>
							</a>
						</div>
					</div>
				</div>
			</aside>

			<div>
				<div class="location-store-image">
					<img src="<?php echo esc_url( $store_image ); ?>" alt="Urunga Chainsaw & Mower store front" loading="lazy">
				</div>

				<div class="location-content-section">
					<h2><?php echo esc_html( get_theme_mod( 'loc_urunga_stock_heading', 'What we stock' ) ); ?></h2>
					<p><?php echo esc_html( get_theme_mod( 'loc_urunga_stock_body', "We carry a full range of outdoor power equipment from the brands that work: STIHL, Honda, COX, Kress, Greenfield and more. Whether it's for the home garden or a working rural property, we'll help you find the right tool for the job." ) ); ?></p>
				</div>

				<div class="location-content-section">
					<h2><?php echo esc_html( get_theme_mod( 'loc_urunga_workshop_heading', 'Workshop & repairs' ) ); ?></h2>
					<p><?php echo esc_html( get_theme_mod( 'loc_urunga_workshop_body', 'Our Urunga store has a fully equipped workshop on site. We service and repair most makes and models: mowers, chainsaws, brushcutters, generators and pumps. No booking needed for a basic drop-in diagnostic.' ) ); ?></p>
					<a class="btn btn--outline" href="<?php echo esc_url( home_url( '/servicing' ) ); ?>" style="margin-top:1rem;display:inline-flex;">Learn about servicing</a>
				</div>

				<div class="location-content-section">
					<p class="also-serving"><strong style="color:var(--color-white);">Also serving:</strong> <?php echo esc_html( get_theme_mod( 'loc_urunga_also_serving', 'Bellingen, Nambucca Heads, Macksville, Sawtell and surrounding Mid North Coast communities.' ) ); ?></p>
				</div>

				<div class="location-content-section" style="border-top:2px solid var(--color-orange);padding-top:1.5rem;margin-top:0.5rem;">
					<p style="margin-bottom:0.75rem;font-weight:600;color:var(--color-orange);">Looking for our Coffs Harbour store?</p>
					<a class="btn btn--primary" href="<?php echo esc_url( home_url( '/coffs-harbour' ) ); ?>">View Coffs Harbour store</a>
				</div>
			</div>

		</div>
	</div>
</div>

<?php get_template_part( 'template-parts/homepage/footer-cta' ); ?>

<?php get_footer(); ?>
