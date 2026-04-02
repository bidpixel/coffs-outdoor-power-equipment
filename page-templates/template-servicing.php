<?php
/**
 * Template Name: Servicing
 */
get_header();
?>

<div class="page-hero">
	<div class="container">
		<h1><?php echo esc_html( get_theme_mod( 'serv_h1', 'Servicing & repairs' ) ); ?></h1>
		<p class="page-hero__intro"><?php echo esc_html( get_theme_mod( 'serv_intro_1', "When your equipment's not working, you need it sorted fast. Our workshop team handles everything from a quick tune-up to a full strip and repair — with honest advice on what's worth fixing and what isn't. We service most major brands, not just the ones we sell." ) ); ?></p>
		<p class="page-hero__intro" style="margin-top:0.75rem;"><?php echo esc_html( get_theme_mod( 'serv_intro_2', 'Available at both our Urunga and Sapphire Beach locations.' ) ); ?></p>
	</div>
</div>

<section class="section-pad">
	<div class="container">

		<div class="service-types">

			<div class="service-type-card" id="chainsaw-servicing">
				<h3><?php echo esc_html( get_theme_mod( 'serv_chainsaw_heading', 'Chainsaw servicing' ) ); ?></h3>
				<p><?php echo esc_html( get_theme_mod( 'serv_chainsaw_body1', 'Keep your saw cutting clean and safe. We carry out full chainsaw servicing including chain sharpening, bar inspection, air filter cleaning, spark plug replacement, fuel system checks and general tune-ups.' ) ); ?></p>
				<p style="margin-top:0.75rem;"><?php echo esc_html( get_theme_mod( 'serv_chainsaw_body2', "Whether it's a STIHL, Husqvarna or another brand — if it's a chainsaw, we can service it." ) ); ?></p>
			</div>

			<div class="service-type-card" id="mower-servicing">
				<h3><?php echo esc_html( get_theme_mod( 'serv_mower_heading', 'Mower servicing' ) ); ?></h3>
				<p><?php echo esc_html( get_theme_mod( 'serv_mower_body1', 'A well-serviced mower lasts longer and cuts better. We handle blade sharpening, oil and filter changes, spark plug replacement, belt inspections and carburettor cleaning for push mowers and self-propelled models.' ) ); ?></p>
				<p style="margin-top:0.75rem;"><?php echo esc_html( get_theme_mod( 'serv_mower_body2', 'Hard to start? Not cutting evenly? Bring it in — most mower services can be turned around quickly.' ) ); ?></p>
			</div>

			<div class="service-type-card" id="ride-on-servicing">
				<h3><?php echo esc_html( get_theme_mod( 'serv_rideon_heading', 'Ride-on mower servicing' ) ); ?></h3>
				<p><?php echo esc_html( get_theme_mod( 'serv_rideon_body1', 'Ride-on and zero-turn mowers take a hammering over the season. We offer full ride-on servicing including oil changes, blade sharpening, belt and drive inspections, battery checks and general mechanical repairs.' ) ); ?></p>
				<p style="margin-top:0.75rem;"><?php echo esc_html( get_theme_mod( 'serv_rideon_body2', 'We work on most brands and models — including COX, Honda, Husqvarna and Ariens.' ) ); ?></p>
			</div>

			<div class="service-type-card" id="small-engine-repairs">
				<h3><?php echo esc_html( get_theme_mod( 'serv_small_heading', 'Small engine repairs' ) ); ?></h3>
				<p><?php echo esc_html( get_theme_mod( 'serv_small_body1', "Brushcutters, blowers, pressure cleaners, water pumps, generators — if it's got a small engine and it's not running right, we can help. We diagnose and repair fuel system issues, carburettor faults, ignition problems, worn seals and more." ) ); ?></p>
				<p style="margin-top:0.75rem;"><?php echo esc_html( get_theme_mod( 'serv_small_body2', 'No booking required for a basic diagnostic. Just drop it in.' ) ); ?></p>
			</div>

		</div>

	</div>
</section>

<div class="photo-grid photo-grid--3 photo-grid--flush" aria-label="Workshop photos">
	<div class="photo-grid__item">
		<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/servicing/outdoor-power-equipment-repair-coffs-coast-1.jpg' ); ?>" alt="Workshop servicing" loading="lazy">
	</div>
	<div class="photo-grid__item">
		<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/servicing/outdoor-power-equipment-repair-coffs-coast-2.jpg' ); ?>" alt="Equipment repair" loading="lazy">
	</div>
	<div class="photo-grid__item">
		<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/servicing/outdoor-power-equipment-workshop-coffs-coast.webp' ); ?>" alt="Service workshop" loading="lazy">
	</div>
</div>

<section class="workshop-locations section-pad--sm">
	<div class="container">
		<h2 style="margin-bottom:2rem;">Workshop locations</h2>
		<div class="stores__grid">

			<article class="store-card">
				<div class="store-card__body">
					<h3 class="store-card__name">Urunga Chainsaw &amp; Mower</h3>
					<dl class="store-card__details">
						<div class="store-card__detail">
							<dt class="store-card__detail-label">Address</dt>
							<dd>1 Marina Crescent, Urunga NSW 2455</dd>
						</div>
						<div class="store-card__detail">
							<dt class="store-card__detail-label">Phone</dt>
							<dd><a href="<?php echo esc_attr( coffsope_phone_link('urunga') ); ?>" style="color:var(--color-orange);"><?php echo esc_html( coffsope_phone('urunga') ); ?></a></dd>
						</div>
						<div class="store-card__detail">
							<dt class="store-card__detail-label">Hours</dt>
							<dd>Mon–Fri 8:30am–5:00pm</dd>
						</div>
					</dl>
					<a class="btn btn--primary" href="https://maps.app.goo.gl/HjYxUSK3DPKGZTcf7" target="_blank" rel="noopener noreferrer">Get directions</a>
				</div>
			</article>

			<article class="store-card">
				<div class="store-card__body">
					<h3 class="store-card__name">Coffs Harbour Outdoor Power Equipment</h3>
					<dl class="store-card__details">
						<div class="store-card__detail">
							<dt class="store-card__detail-label">Address</dt>
							<dd>16 Wakelands Road, Sapphire Beach NSW 2450</dd>
						</div>
						<div class="store-card__detail">
							<dt class="store-card__detail-label">Phone</dt>
							<dd><a href="<?php echo esc_attr( coffsope_phone_link('coffs') ); ?>" style="color:var(--color-orange);"><?php echo esc_html( coffsope_phone('coffs') ); ?></a></dd>
						</div>
						<div class="store-card__detail">
							<dt class="store-card__detail-label">Hours</dt>
							<dd>Tue–Fri 8:30am–4:30pm<br>Sat 9:00am–12:00pm</dd>
						</div>
					</dl>
					<a class="btn btn--primary" href="https://maps.app.goo.gl/2i7si1rnu49NJaXr9" target="_blank" rel="noopener noreferrer">Get directions</a>
				</div>
			</article>

		</div>
	</div>
</section>

<section class="footer-cta">
	<div class="container">
		<h2><?php echo esc_html( get_theme_mod( 'serv_footer_heading', "Not sure if it's worth repairing?" ) ); ?></h2>
		<p><?php echo esc_html( get_theme_mod( 'serv_footer_body', "Bring it in and we'll take a look. We'll give you an honest assessment before any work is done." ) ); ?></p>
		<div class="footer-cta__ctas">
			<a class="btn btn--outline" href="<?php echo esc_url( home_url( '/contact' ) ); ?>">Contact us</a>
		</div>
	</div>
</section>

<?php get_footer(); ?>
