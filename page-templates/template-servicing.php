<?php
/**
 * Template Name: Servicing
 */
get_header();
?>

<?php $hero_image = get_theme_mod( 'serv_hero_image', get_template_directory_uri() . '/assets/images/servicing/outdoor-power-equipment-repair-coffs-coast-1.jpg' ); ?>
<div class="page-hero" style="background-image:url('<?php echo esc_url( $hero_image ); ?>');background-size:cover;background-position:center;position:relative;">
	<div style="position:absolute;inset:0;background:rgba(26,26,26,0.82);"></div>
	<div class="container" style="position:relative;z-index:2;">
		<h1><?php echo esc_html( get_theme_mod( 'serv_h1', 'Servicing & repairs' ) ); ?></h1>
		<p class="page-hero__intro"><?php echo esc_html( get_theme_mod( 'serv_intro_1', "When your equipment's not working, you need it sorted fast. Our workshop team handles everything from a quick tune-up to a full strip and repair, with honest advice on what's worth fixing and what isn't. We service most major brands, not just the ones we sell." ) ); ?></p>
		<p class="page-hero__intro" style="margin-top:0.75rem;"><?php echo esc_html( get_theme_mod( 'serv_intro_2', 'Available at both our Urunga and Sapphire Beach locations.' ) ); ?></p>
	</div>
</div>

<?php
$serv_base = get_template_directory_uri() . '/assets/images/servicing/';

$services = [
	[
		'id'       => 'chainsaw-servicing',
		'heading'  => get_theme_mod( 'serv_chainsaw_heading', 'Chainsaw servicing' ),
		'body1'    => get_theme_mod( 'serv_chainsaw_body1', 'Keep your saw cutting clean and safe. We carry out full chainsaw servicing including chain sharpening, bar inspection, air filter cleaning, spark plug replacement, fuel system checks and general tune-ups.' ),
		'body2'    => get_theme_mod( 'serv_chainsaw_body2', "Whether it's a STIHL, Husqvarna or another brand. If it's a chainsaw, we can service it." ),
		'image'    => get_theme_mod( 'serv_chainsaw_image', $serv_base . 'outdoor-power-equipment-repair-coffs-coast-2.jpg' ),
		'alt'      => 'Chainsaw servicing at our Coffs Coast workshop',
	],
	[
		'id'       => 'mower-servicing',
		'heading'  => get_theme_mod( 'serv_mower_heading', 'Mower servicing' ),
		'body1'    => get_theme_mod( 'serv_mower_body1', 'A well-serviced mower lasts longer and cuts better. We handle blade sharpening, oil and filter changes, spark plug replacement, belt inspections and carburettor cleaning for push mowers and self-propelled models.' ),
		'body2'    => get_theme_mod( 'serv_mower_body2', 'Hard to start? Not cutting evenly? Bring it in. Most mower services can be turned around quickly.' ),
		'image'    => get_theme_mod( 'serv_mower_image', get_template_directory_uri() . '/assets/images/products/lawn-mowers-coffs-coast.jpg' ),
		'alt'      => 'Mower servicing and blade sharpening',
	],
	[
		'id'       => 'ride-on-servicing',
		'heading'  => get_theme_mod( 'serv_rideon_heading', 'Ride-on mower servicing' ),
		'body1'    => get_theme_mod( 'serv_rideon_body1', 'Ride-on and zero-turn mowers take a hammering over the season. We offer full ride-on servicing including oil changes, blade sharpening, belt and drive inspections, battery checks and general mechanical repairs.' ),
		'body2'    => get_theme_mod( 'serv_rideon_body2', 'We work on most brands and models, including COX, Honda, Husqvarna and Ariens.' ),
		'image'    => get_theme_mod( 'serv_rideon_image', get_template_directory_uri() . '/assets/images/products/ride-on-mowers-coffs-coast.webp' ),
		'alt'      => 'Ride-on mower servicing and repairs',
	],
	[
		'id'       => 'small-engine-repairs',
		'heading'  => get_theme_mod( 'serv_small_heading', 'Small engine repairs' ),
		'body1'    => get_theme_mod( 'serv_small_body1', "Brushcutters, blowers, pressure cleaners, water pumps, generators. If it's got a small engine and it's not running right, we can help. We diagnose and repair fuel system issues, carburettor faults, ignition problems, worn seals and more." ),
		'body2'    => get_theme_mod( 'serv_small_body2', 'No booking required for a basic diagnostic. Just drop it in.' ),
		'image'    => get_theme_mod( 'serv_small_image', $serv_base . 'outdoor-power-equipment-repair-coffs-coast-1.jpg' ),
		'alt'      => 'Small engine diagnostics and repair',
	],
];

foreach ( $services as $i => $svc ) :
	$is_alt     = $i % 2 !== 0;
	$alt_class  = $is_alt ? ' cat-section--alt' : '';
	$rev_class  = $is_alt ? ' cat-section__inner--reverse' : '';
?>
<section class="cat-section<?php echo $alt_class; ?>" id="<?php echo esc_attr( $svc['id'] ); ?>">
	<div class="container">
		<div class="cat-section__inner<?php echo $rev_class; ?>">
			<div class="cat-section__image">
				<img
					src="<?php echo esc_url( $svc['image'] ); ?>"
					alt="<?php echo esc_attr( $svc['alt'] ); ?>"
					width="800" height="600"
					loading="lazy"
				>
			</div>
			<div class="cat-section__text">
				<h2><?php echo esc_html( $svc['heading'] ); ?></h2>
				<p><?php echo esc_html( $svc['body1'] ); ?></p>
				<p style="margin-top:0.75rem;"><?php echo esc_html( $svc['body2'] ); ?></p>
			</div>
		</div>
	</div>
</section>
<?php endforeach; ?>

<section class="workshop-locations section-pad--sm">
	<div class="container">
		<h2 style="margin-bottom:2rem;">Workshop locations</h2>
		<div class="contact-stores">

			<article class="contact-store-card">
				<div class="contact-store-card__image">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/stores/urunga-chainsaw-mower-store-front.jpg' ); ?>" alt="Urunga Chainsaw and Mower store" loading="lazy">
				</div>
				<div class="contact-store-card__body">
					<div class="contact-store-card__logo">
						<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logos/urunga-chainsaw-mower-logo.webp' ); ?>" alt="Urunga Chainsaw and Mower logo">
					</div>
					<div class="contact-store-card__info">
						<h3>Urunga Chainsaw &amp; Mower</h3>
						<p>1 Marina Crescent, Urunga NSW 2455</p>
						<p>Phone: <a href="<?php echo esc_attr( coffsope_phone_link('urunga') ); ?>"><?php echo esc_html( coffsope_phone('urunga') ); ?></a></p>
						<p>Mon–Fri 8:30am–5:00pm</p>
						<div class="contact-store-card__actions">
							<a class="btn btn--primary contact-store-card__btn" href="<?php echo esc_attr( coffsope_phone_link('urunga') ); ?>">Call now</a>
							<a class="btn btn--outline contact-store-card__btn" href="https://maps.app.goo.gl/HjYxUSK3DPKGZTcf7" target="_blank" rel="noopener noreferrer">Get directions</a>
						</div>
					</div>
				</div>
			</article>

			<article class="contact-store-card">
				<div class="contact-store-card__image">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/stores/coffs-harbour-outdoor-power-equipment-store-front.jpg' ); ?>" alt="Coffs Harbour Outdoor Power Equipment store" loading="lazy">
				</div>
				<div class="contact-store-card__body">
					<div class="contact-store-card__logo">
						<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logos/coffs-harbour-outdoor-power-equipment-logo.webp' ); ?>" alt="Coffs Harbour Outdoor Power Equipment logo">
					</div>
					<div class="contact-store-card__info">
						<h3>Coffs Harbour Outdoor Power Equipment</h3>
						<p>16 Wakelands Road, Sapphire Beach NSW 2450</p>
						<p>Phone: <a href="<?php echo esc_attr( coffsope_phone_link('coffs') ); ?>"><?php echo esc_html( coffsope_phone('coffs') ); ?></a></p>
						<p>Tue–Fri 8:30am–4:30pm &nbsp;|&nbsp; Sat 9:00am–12:00pm</p>
						<div class="contact-store-card__actions">
							<a class="btn btn--primary contact-store-card__btn" href="<?php echo esc_attr( coffsope_phone_link('coffs') ); ?>">Call now</a>
							<a class="btn btn--outline contact-store-card__btn" href="https://maps.app.goo.gl/2i7si1rnu49NJaXr9" target="_blank" rel="noopener noreferrer">Get directions</a>
						</div>
					</div>
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
			<a class="btn btn--outline" href="<?php echo esc_attr( coffsope_phone_link('urunga') ); ?>">Call Urunga: <?php echo esc_html( coffsope_phone('urunga') ); ?></a>
			<a class="btn btn--outline" href="<?php echo esc_attr( coffsope_phone_link('coffs') ); ?>">Call Coffs Harbour: <?php echo esc_html( coffsope_phone('coffs') ); ?></a>
		</div>
	</div>
</section>

<?php get_footer(); ?>
