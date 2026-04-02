<?php
/**
 * Template Name: Brand Page
 *
 * Used for: /brands/stihl, /brands/honda, etc.
 */
get_header();
$theme_img = get_template_directory_uri() . '/assets/images';

$brand_logo_defaults = [
	'stihl'      => $theme_img . '/brands/stihl-logo.png',
	'honda'      => $theme_img . '/brands/honda-power-equipment-logo.png',
	'cox'        => $theme_img . '/brands/cox-logo.png',
	'ariens'     => $theme_img . '/brands/ariens-logo.avif',
	'gravely'    => $theme_img . '/brands/gravely-logo.webp',
	'kress'      => $theme_img . '/brands/kress-logo.png',
	'greenfield' => $theme_img . '/brands/greenfield-logo.png',
	'spika'      => $theme_img . '/brands/spika-logo.png',
	'stiga'      => $theme_img . '/brands/stiga-logo.png',
	'supaswift'  => $theme_img . '/brands/supaswift-logo.webp',
	'rato'       => $theme_img . '/brands/rato-logo.png',
];

$brand_logo_mod_keys = [
	'stihl'      => 'brand_logo_stihl',
	'honda'      => 'brand_logo_honda',
	'cox'        => 'brand_logo_cox',
	'ariens'     => 'brand_logo_ariens',
	'gravely'    => 'brand_logo_gravely',
	'kress'      => 'brand_logo_kress',
	'greenfield' => 'brand_logo_greenfield',
	'spika'      => 'brand_logo_spika',
	'stiga'      => 'brand_logo_stiga',
	'supaswift'  => 'brand_logo_supaswift',
	'rato'       => 'brand_logo_rato',
];

$brand_logos = [];
foreach ( $brand_logo_defaults as $brand => $default ) {
	$mod_key             = $brand_logo_mod_keys[ $brand ] ?? '';
	$brand_logos[$brand] = $mod_key ? get_theme_mod( $mod_key, $default ) : $default;
}

$brand_categories = [
	'stihl'      => [ 'Chainsaws', 'Brushcutters', 'Hedge trimmers', 'Blowers', 'Pole saws', 'Arborist saws', 'Pressure cleaners', 'Battery-powered range', 'Multi-systems (KombiSystem)', 'Cut-off machines', 'Accessories' ],
	'honda'      => [ 'Mowers', 'Generators', 'Water pumps', 'Hedge trimmers', 'Brushcutters', 'Tillers', 'Accessories' ],
	'cox'        => [ 'Ride-on mowers', 'Zero-turn mowers', 'Push mowers', 'Generators' ],
	'ariens'     => [ 'Zero-turn mowers', 'Ride-on mowers', 'Walk-behind mowers' ],
	'gravely'    => [ 'Zero-turn mowers', 'Ride-on mowers', 'Walk-behind mowers' ],
	'kress'      => [ 'Battery chainsaws', 'Battery mowers', 'Battery brushcutters', 'Battery blowers', 'Battery hedge trimmers', 'Robotic mowers' ],
	'greenfield' => [ 'Ride-on mowers', 'Zero-turn mowers' ],
	'spika'      => [ 'Gun safes', 'Firearm accessories', 'Camo clothing', 'Hunting knives', 'Hunting packs', 'Field gear' ],
	'stiga'      => [ 'Ride-on mowers', 'Robotic mowers', 'Walk-behind mowers', 'Battery-powered range', 'Accessories' ],
	'supaswift'  => [ 'Push mowers' ],
	'rato'       => [ 'Generators', 'Water pumps', 'Accessories' ],
];

$slug       = get_post_field( 'post_name', get_queried_object_id() );
$logo_url   = $brand_logos[ $slug ] ?? null;
$categories = $brand_categories[ $slug ] ?? [];
?>

<div class="page-hero">
	<div class="container">
		<div class="brand-page-header">
			<?php if ( $logo_url ) : ?>
				<div class="brand-page-logo">
					<img
						src="<?php echo esc_url( $logo_url ); ?>"
						alt="<?php the_title(); ?>"
						height="60"
						width="160"
						style="object-fit:contain;"
						loading="eager"
					>
				</div>
			<?php endif; ?>
			<div>
				<?php while ( have_posts() ) : the_post(); ?>
					<h1><?php the_title(); ?></h1>
				<?php endwhile; ?>
			</div>
		</div>
	</div>
</div>

<section class="section-pad">
	<div class="container">

		<div style="max-width:720px;margin-bottom:3rem;">
			<?php the_content(); ?>
		</div>

		<?php if ( ! empty( $categories ) ) : ?>
			<h2 style="font-size:1.375rem;margin-bottom:1rem;">What we stock</h2>
			<div class="brand-categories">
				<?php foreach ( $categories as $cat ) : ?>
					<span class="brand-category-tag"><?php echo esc_html( $cat ); ?></span>
				<?php endforeach; ?>
			</div>
		<?php endif; ?>

		<div style="margin-top:3rem;padding-top:3rem;border-top:1px solid var(--color-charcoal);">
			<div style="display:flex;flex-wrap:wrap;gap:1rem;">
				
				<a class="btn btn--outline" href="<?php echo esc_url( home_url( '/contact' ) ); ?>">Talk to us</a>
			</div>
		</div>

	</div>
</section>

<?php get_template_part( 'template-parts/homepage/footer-cta' ); ?>

<?php get_footer(); ?>
