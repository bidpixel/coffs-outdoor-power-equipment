<?php
/**
 * Template Name: Brands Page
 *
 * Single page listing all stocked brands with anchor navigation.
 * Link to individual brands from anywhere using /brands#stihl etc.
 */
get_header();

$theme_img = get_template_directory_uri() . '/assets/images';

$brands = [
	'stihl' => [
		'name'       => 'STIHL',
		'logo'       => get_theme_mod( 'brand_logo_stihl', $theme_img . '/brands/stihl-logo.png' ),
		'image'      => $theme_img . '/products/garden-power-tools-hedge-trimmer-coffs-coast.jpg',
		'blurb'      => "Germany's number one selling chainsaw brand and a world leader in outdoor power equipment. As an authorised STIHL dealer, we stock the complete range and back every purchase with expert advice, genuine parts, and full warranty support.",
		'categories' => [ 'Chainsaws', 'Brushcutters', 'Hedge trimmers', 'Blowers', 'Pole saws', 'Arborist saws', 'Pressure cleaners', 'Battery-powered range', 'KombiSystem (multi-tools)', 'Cut-off machines', 'Accessories' ],
		'url'        => 'https://www.stihl.com.au/en',
	],
	'honda' => [
		'name'       => 'Honda',
		'logo'       => get_theme_mod( 'brand_logo_honda', $theme_img . '/brands/honda-power-equipment-logo.png' ),
		'image'      => $theme_img . '/products/honda-eu22i-generator-key-features.jpg',
		'blurb'      => "Legendary Honda reliability in every product. As an authorised Honda Power Equipment dealer, we stock a broad range of mowers, generators, water pumps, and more — backed by the Honda name and our in-house service team.",
		'categories' => [ 'Mowers', 'Generators', 'Water pumps', 'Hedge trimmers', 'Brushcutters', 'Tillers', 'Accessories' ],
		'url'        => 'https://powerequipment.honda.com.au/',
	],
	'cox' => [
		'name'       => 'COX',
		'logo'       => get_theme_mod( 'brand_logo_cox', $theme_img . '/brands/cox-logo.png' ),
		'image'      => $theme_img . '/products/cox-46-lawn-mower.webp',
		'blurb'      => "Proudly Australian, COX has been engineering quality mowers for over 70 years. Built to handle everything from suburban lawns to large rural blocks, COX machines are tough, practical, and made for Australian conditions.",
		'categories' => [ 'Ride-on mowers', 'Zero-turn mowers', 'Push mowers', 'Generators' ],
		'url'        => 'https://coxmowers.com.au/',
	],
	'ariens' => [
		'name'       => 'Ariens',
		'logo'       => get_theme_mod( 'brand_logo_ariens', $theme_img . '/brands/ariens-logo.avif' ),
		'image'      => $theme_img . '/products/zero-turn-mower-lifestyle-1.jpg',
		'blurb'      => "Built tough in Wisconsin, USA. Ariens zero-turns and ride-ons are engineered for demanding terrain and large properties, with a strong reputation for commercial-grade build quality and a precision cut finish.",
		'categories' => [ 'Zero-turn mowers', 'Ride-on mowers', 'Walk-behind mowers' ],
		'url'        => 'https://ariens.com.au/',
	],
	'gravely' => [
		'name'       => 'Gravely',
		'logo'       => get_theme_mod( 'brand_logo_gravely', $theme_img . '/brands/gravely-logo.webp' ),
		'image'      => $theme_img . '/products/zero-turn-mowers-gravely-coffs-coast.jpg',
		'blurb'      => "Professional-grade mowing equipment trusted by commercial operators worldwide. Gravely zero-turns and walk-behinds are engineered for maximum productivity, long service life, and a quality result on every run.",
		'categories' => [ 'Zero-turn mowers', 'Ride-on mowers', 'Walk-behind mowers' ],
		'url'        => 'https://gravely.com.au/',
	],
	'kress' => [
		'name'       => 'Kress',
		'logo'       => get_theme_mod( 'brand_logo_kress', $theme_img . '/brands/kress-logo.png' ),
		'image'      => $theme_img . '/products/kress-kr173e-robot-mower.webp',
		'blurb'      => "German-engineered cordless outdoor tools running on the Kress 60V CyberSystem. One battery platform powers the full range — including robotic mowers — making Kress a smart, future-proof investment for your property.",
		'categories' => [ 'Battery chainsaws', 'Battery mowers', 'Battery brushcutters', 'Battery blowers', 'Battery hedge trimmers', 'Robotic mowers' ],
		'url'        => 'https://www.kress.com/en-au/',
	],
	'greenfield' => [
		'name'       => 'Greenfield',
		'logo'       => get_theme_mod( 'brand_logo_greenfield', $theme_img . '/brands/greenfield-logo.png' ),
		'image'      => $theme_img . '/products/ride-on-mower-product.jpg',
		'blurb'      => "Designed and engineered in Australia for Australian conditions. Greenfield ride-ons and zero-turns deliver a quality cut across challenging terrain, backed by a strong local parts and service network.",
		'categories' => [ 'Ride-on mowers', 'Zero-turn mowers' ],
		'url'        => 'https://greenfield.com.au/',
	],
	'stiga' => [
		'name'       => 'STIGA',
		'logo'       => get_theme_mod( 'brand_logo_stiga', $theme_img . '/brands/stiga-logo.png' ),
		'image'      => $theme_img . '/products/stiga-tornado-ride-on-mower.jpg',
		'blurb'      => "Swedish outdoor power equipment combining smart technology with Scandinavian build quality. STIGA's range spans ride-ons, robotic mowers, and battery-powered tools — designed for a quieter, smarter outdoor experience.",
		'categories' => [ 'Ride-on mowers', 'Robotic mowers', 'Walk-behind mowers', 'Battery-powered range', 'Accessories' ],
		'url'        => 'https://stigamower.com.au/',
	],
	'spika' => [
		'name'       => 'Spika',
		'logo'       => get_theme_mod( 'brand_logo_spika', $theme_img . '/brands/spika-logo.png' ),
		'image'      => '',
		'blurb'      => "Quality hunting and shooting accessories for the serious outdoorsman. Spika covers everything from gun safes and firearm accessories to camo clothing, hunting knives, packs, and field gear.",
		'categories' => [ 'Gun safes', 'Firearm accessories', 'Camo clothing', 'Hunting knives', 'Hunting packs', 'Field gear' ],
		'url'        => 'https://spika.com.au/',
	],
	'supaswift' => [
		'name'       => 'Supaswift',
		'logo'       => get_theme_mod( 'brand_logo_supaswift', $theme_img . '/brands/supaswift-logo.webp' ),
		'image'      => $theme_img . '/products/lawn-mowers-coffs-coast.jpg',
		'blurb'      => "Quality push mowers built for Australian lawns. Supaswift delivers reliable, no-fuss performance at a competitive price point.",
		'categories' => [ 'Push mowers' ],
		'url'        => 'https://supaswift.com.au/',
	],
	'rato' => [
		'name'       => 'RATO',
		'logo'       => get_theme_mod( 'brand_logo_rato', $theme_img . '/brands/rato-logo.png' ),
		'image'      => $theme_img . '/products/generators-coffs-coast.jpg',
		'blurb'      => "Reliable and affordable generators and water pumps built for everyday use. RATO products offer solid performance for backup power, trade, and irrigation applications without the premium price tag.",
		'categories' => [ 'Generators', 'Water pumps', 'Accessories' ],
		'url'        => 'https://ratopowerproducts.com.au/',
	],
];
?>

<div class="page-hero page-hero--image" style="--hero-bg: url('<?php echo esc_url( $theme_img . '/products/chainsaws-coffs-coast.jpg' ); ?>')">
	<div class="container">
		<?php while ( have_posts() ) : the_post(); ?>
			<h1><?php the_title(); ?></h1>
			<?php if ( get_the_content() ) : ?>
				<p class="page-hero__intro"><?php the_content(); ?></p>
			<?php else : ?>
				<p class="page-hero__intro">Coffs Harbour's authorised dealer for STIHL and Honda, stocking a full range of outdoor power equipment from the world's most trusted brands. From chainsaws and ride-on mowers to generators, robotic mowers, and battery-powered tools — we carry, service, and back everything we sell.</p>
			<?php endif; ?>
		<?php endwhile; ?>
	</div>
</div>

<nav class="brands-jump-nav" aria-label="Jump to brand">
	<div class="brands-jump-nav__inner">
		<?php foreach ( $brands as $slug => $brand ) : ?>
			<a class="brands-jump-nav__link" href="#<?php echo esc_attr( $slug ); ?>">
				<?php echo esc_html( $brand['name'] ); ?>
			</a>
		<?php endforeach; ?>
	</div>
</nav>

<div class="brands-all">

	<?php foreach ( $brands as $slug => $brand ) : ?>

		<section id="<?php echo esc_attr( $slug ); ?>" class="brand-section"<?php if ( ! empty( $brand['image'] ) ) : ?> style="--brand-img: url('<?php echo esc_url( $brand['image'] ); ?>')"<?php endif; ?>>
			<div class="container">
				<div class="brand-section__grid">

					<div class="brand-section__logo-wrap">
						<?php if ( $brand['logo'] ) : ?>
							<img
								src="<?php echo esc_url( $brand['logo'] ); ?>"
								alt="<?php echo esc_attr( $brand['name'] ); ?>"
								loading="lazy"
							>
						<?php else : ?>
							<span class="brand-section__logo-fallback"><?php echo esc_html( $brand['name'] ); ?></span>
						<?php endif; ?>
					</div>

					<div class="brand-section__content">
						<h2><?php echo esc_html( $brand['name'] ); ?></h2>
						<p><?php echo esc_html( $brand['blurb'] ); ?></p>

						<?php if ( ! empty( $brand['categories'] ) ) : ?>
							<p class="brand-section__stock-label">What we stock</p>
							<div class="brand-categories">
								<?php foreach ( $brand['categories'] as $cat ) : ?>
									<span class="brand-category-tag"><?php echo esc_html( $cat ); ?></span>
								<?php endforeach; ?>
							</div>
						<?php endif; ?>

						<?php if ( ! empty( $brand['url'] ) ) : ?>
							<a
								class="brand-section__website-link"
								href="<?php echo esc_url( $brand['url'] ); ?>"
								target="_blank"
								rel="noopener noreferrer"
							>Visit <?php echo esc_html( $brand['name'] ); ?> website &rarr;</a>
						<?php endif; ?>
					</div>

				</div>
			</div>
		</section>

	<?php endforeach; ?>

</div>

<?php get_template_part( 'template-parts/homepage/footer-cta' ); ?>
<?php get_footer(); ?>
