<?php
/**
 * Template Name: Product Category
 *
 * Used for: /products/chainsaws, /products/lawn-mowers, etc.
 * Set the page H1 via the WordPress page editor.
 */
get_header();
$theme_img = get_template_directory_uri() . '/assets/images';

$category_mod_keys = [
	'chainsaws'          => 'cat_img_chainsaws',
	'lawn-mowers'        => 'cat_img_lawn_mowers',
	'ride-on-mowers'     => 'cat_img_ride_on_mowers',
	'zero-turn-mowers'   => 'cat_img_zero_turn_mowers',
	'robot-mowers'       => 'cat_img_robot_mowers',
	'brushcutters'       => 'cat_img_brushcutters',
	'generators'         => 'cat_img_generators',
	'pressure-cleaners'  => 'cat_img_pressure_cleaners',
	'water-pumps'        => 'cat_img_water_pumps',
	'garden-power-tools' => 'cat_img_garden_power_tools',
	'battery-electric'   => 'cat_img_battery_electric',
];

$category_image_defaults = [
	'chainsaws'          => $theme_img . '/products/chainsaws-coffs-coast.jpg',
	'lawn-mowers'        => $theme_img . '/products/lawn-mowers-coffs-coast.jpg',
	'ride-on-mowers'     => $theme_img . '/products/ride-on-mowers-coffs-coast.webp',
	'zero-turn-mowers'   => $theme_img . '/products/zero-turn-mowers-gravely-coffs-coast.jpg',
	'robot-mowers'       => $theme_img . '/products/robot-mowers-kress-coffs-coast.jpg',
	'brushcutters'       => $theme_img . '/products/brushcutters-stihl-coffs-coast.webp',
	'generators'         => $theme_img . '/products/generators-coffs-coast.jpg',
	'pressure-cleaners'  => $theme_img . '/products/pressure-cleaners-coffs-coast.jpg',
	'water-pumps'        => $theme_img . '/products/water-pump-coffs-coast-1.jpg',
	'garden-power-tools' => $theme_img . '/products/garden-power-tools-hedge-trimmer-coffs-coast.jpg',
	'battery-electric'   => $theme_img . '/products/battery-electric-outdoor-power-equipment-coffs-coast.jpg',
];

// Content sections: up to 3 per category, each paired with a category image
$category_sections = [
	'chainsaws' => [
		[
			'heading' => 'The right saw for every job',
			'body'    => 'Whether you\'re pruning branches in the backyard, managing a bush block or doing professional arborist work on the Coffs Coast, there\'s a chainsaw for every application. As authorised STIHL dealers, we stock the full STIHL chainsaw range — petrol and battery-electric — from compact lightweight saws for home use right through to heavy-duty professional models used by arborists and land managers across the Mid North Coast.',
		],
		[
			'heading' => 'Petrol and battery — we stock both',
			'body'    => 'We carry Honda and Kress battery chainsaws alongside the full STIHL range, for those who prefer a quieter, lower-maintenance option without compromising on cutting power. Kress in particular has made serious inroads in the battery chainsaw space, with performance that gives petrol a real run for its money. Whether you\'re after a lightweight cordless saw for occasional pruning or a professional-grade petrol saw for regular heavy use, we have you covered.',
		],
		[
			'heading' => 'Expert advice, in store',
			'body'    => 'Not sure what bar length, power source or model is right for your situation? Come in to our Urunga or Coffs Harbour store — our team knows the range inside and out and can walk you through the options without the sales pressure. We also handle chainsaw servicing, chain sharpening and genuine parts, so we\'re here for the long run, not just the purchase.',
		],
	],
	'lawn-mowers' => [
		[
			'heading' => 'Quality mowers for year-round growth',
			'body'    => 'On the Coffs Coast, the grass doesn\'t stop growing — the subtropical climate and regular rain means your lawn needs year-round attention. A quality mower makes all the difference. We stock a full range of push and self-propelled lawn mowers to suit everything from a compact suburban block to a larger residential property, with options to suit every budget and terrain type.',
		],
		[
			'heading' => 'Brands built for Australian conditions',
			'body'    => 'Honda mowers are a favourite for their reliability and ease of starting — backed by Honda\'s reputation for engines that run. COX is built for Australian conditions and offers solid, no-nonsense performance across a wide range of block types. Supaswift rounds out our range with practical, well-priced options for homeowners who want a reliable cut without overcomplicating things.',
		],
		[
			'heading' => 'We match you to the right model',
			'body'    => 'Come in to our Urunga or Coffs Harbour store and we\'ll match you to the right mower for your lawn size, terrain and budget. We take the time to understand how you\'re using it — not just hand you a box. We also handle mower servicing, blade sharpening and genuine parts so your mower keeps performing season after season.',
		],
	],
	'ride-on-mowers' => [
		[
			'heading' => 'Built for large blocks and acreage',
			'body'    => 'If you\'re managing a large block, acreage or rural property across the Mid North Coast, a ride-on mower is the practical choice. We stock a range of ride-on models from COX, Greenfield and Stiga — built to handle the slopes, the grass types and the conditions you\'ll find in this part of New South Wales.',
		],
		[
			'heading' => 'Brands that handle the terrain',
			'body'    => 'COX is an Australian brand engineered for local conditions, with a solid reputation on rural properties up and down the east coast. Greenfield is known for its high-quality cut and reliable performance across a range of terrain. Stiga\'s garden tractor range brings European build quality to Australian acreage, with models that are comfortable to operate over longer mowing sessions.',
		],
		[
			'heading' => 'We help you find the right fit',
			'body'    => 'Not sure which model suits your property size and slope? Come in and talk to us — we\'ve helped plenty of locals find the right ride-on for everything from a half-acre suburban block to a multi-hectare rural property. We can also service and repair most ride-on makes and models, so we\'re a long-term resource, not just a one-off sale.',
		],
	],
	'zero-turn-mowers' => [
		[
			'heading' => 'Faster, more precise mowing',
			'body'    => 'Zero-turn mowers are the go-to for anyone who wants to get large areas mowed quickly without compromising on finish quality. The zero-degree turning radius means you can navigate around trees, garden beds and obstacles cleanly — cutting mowing time significantly compared to a standard ride-on and reducing the need for follow-up trimming.',
		],
		[
			'heading' => 'From residential to commercial grade',
			'body'    => 'We stock COX, Ariens and Gravely zero-turns on the Coffs Coast — covering residential models for larger suburban and semi-rural blocks right through to commercial-grade machines suited to serious property management, grounds maintenance and professional mowing. Ariens and Gravely are well-regarded in the industry for their durability and performance under heavy daily use.',
		],
		[
			'heading' => 'Zero-turn vs ride-on — we\'ll help you decide',
			'body'    => 'Not sure whether a zero-turn is the right call over a standard ride-on for your property? Come in and we\'ll walk you through the differences — terrain, block layout, budget and how often you\'re mowing all factor in. Our team has helped plenty of Mid North Coast property owners make the right call.',
		],
	],
	'robot-mowers' => [
		[
			'heading' => 'Set it and let it run',
			'body'    => 'Robotic mowers are no longer a novelty — they\'re a genuinely practical solution for homeowners and property managers who want a consistently maintained lawn without the time commitment. Set a schedule, and the mower handles the rest: trimming little and often to keep your lawn looking its best year-round, with no effort on your part.',
		],
		[
			'heading' => 'STIHL and Kress robotic mowers',
			'body'    => 'We stock STIHL and Kress robotic mowers on the Coffs Coast, with models to suit a range of lawn sizes and shapes. STIHL\'s iMOW range is backed by the same quality and dealer support you expect from the brand. Kress offers RTK GPS navigation for precise, boundary-wire-free operation — a standout feature for more complex or larger properties.',
		],
		[
			'heading' => 'Setup and ongoing support',
			'body'    => 'Come in to our Urunga or Coffs Harbour store to see the range and find out which model suits your lawn size, budget and setup. We assist with the initial installation and are here for ongoing support, servicing and genuine parts. Robotic mowers are low maintenance by design — but knowing your dealer has you covered makes a real difference.',
		],
	],
	'brushcutters' => [
		[
			'heading' => 'Where a mower can\'t reach',
			'body'    => 'A brushcutter is the tool that gets the work done where a mower can\'t — along fence lines, around posts, through thick grass and overgrowth, or on rough terrain. If you\'re managing a rural property, a large block or commercial grounds on the Coffs Coast, a quality brushcutter is an essential part of your toolkit.',
		],
		[
			'heading' => 'Petrol and battery options',
			'body'    => 'We stock STIHL and Kress brushcutters in petrol and battery-electric options — straight-shaft and curved, including multi-tool compatible models that let you swap attachments for hedge trimming, cultivating and more. STIHL\'s FS range is one of the most trusted in the industry, while Kress battery brushcutters offer impressive run time and power for those who prefer to go cordless.',
		],
		[
			'heading' => 'Advice for your workload',
			'body'    => 'Come in to our Urunga or Coffs Harbour store for advice on the right model for your workload — whether you\'re a homeowner doing occasional clearing or a tradie who needs a tool that earns its keep every week. We can talk you through shaft type, harness options and power source, and we handle servicing and genuine parts for everything we stock.',
		],
	],
	'generators' => [
		[
			'heading' => 'Reliable power when you need it most',
			'body'    => 'Whether it\'s backup power for your home during a storm, a reliable source of power for a worksite, or portable power for a rural property — the right generator makes life a lot easier. On the Coffs Coast and Mid North Coast, where severe weather events and power outages are a genuine consideration, having a generator you can rely on is worth investing in properly.',
		],
		[
			'heading' => 'Honda, COX and Rato — generators for every need',
			'body'    => 'We stock Honda, COX and Rato generators across a range of outputs and configurations. Honda generators are among the most trusted in the world — known for their quiet inverter technology, fuel efficiency and clean power output safe for sensitive electronics. COX offers solid, no-nonsense performance for worksites and rural properties. Rato rounds out the range with practical, well-priced generators well suited to home backup and general farm use on the Mid North Coast.',
		],
		[
			'heading' => 'Getting the spec right',
			'body'    => 'Not sure what output (kVA) or run time you need? Come in and we\'ll help you work it out — because getting the spec right matters. Too small and it won\'t run your essential equipment; too large and you\'re carrying extra weight and burning excess fuel unnecessarily. Our team can walk you through the options based on exactly what you need to power.',
		],
	],
	'pressure-cleaners' => [
		[
			'heading' => 'Built for the Coffs Coast climate',
			'body'    => 'The Coffs Coast climate is great for living — but the humidity, salt air and regular rain also mean mould, algae and grime build up fast on driveways, decks, fences, equipment and vehicles. A quality pressure cleaner makes short work of it all, and makes a noticeable difference to the condition and appearance of your property.',
		],
		[
			'heading' => 'From domestic to commercial grade',
			'body'    => 'We stock STIHL pressure cleaners on the Coffs Coast, from entry-level domestic models through to heavy-duty commercial units built for serious regular use. STIHL\'s range covers electric and petrol-powered options with models suited to home cleaning right up to farming, construction and industrial applications. We also stock genuine STIHL accessories — surface cleaners, extension lances, brushes and more.',
		],
		[
			'heading' => 'Advice, parts and servicing',
			'body'    => 'Come in to our Urunga or Coffs Harbour store for advice on the right pressure cleaner for your application. We\'ll help you choose between electric and petrol, and work out the right pressure and flow rate for the surfaces and frequency you have in mind. We also handle parts and servicing when you need it.',
		],
	],
	'water-pumps' => [
		[
			'heading' => 'Essential for rural properties',
			'body'    => 'For anyone managing a rural property, hobby farm or large block on the Coffs Coast, a reliable water pump is essential. Whether you need to transfer water between tanks, irrigate a paddock, pump out after heavy rain, or set up a fire-fighting system for bushfire preparedness — the right pump for the job makes a real practical difference.',
		],
		[
			'heading' => 'Honda, COX and Rato — quality pump options',
			'body'    => 'We stock Honda, COX and Rato water pumps across a range of applications. Honda has built a well-deserved reputation for reliability and low maintenance, with centrifugal, trash and fire-fighting pumps to suit most property needs. COX offers solid Australian-proven performance for general water transfer and drainage. Rato rounds out the range with practical, competitively priced pumps well suited to rural and farm use across the Mid North Coast.',
		],
		[
			'heading' => 'Get the sizing right',
			'body'    => 'Talk to us about the right pump for your setup — flow rate, head height, suction lift and inlet size all affect which model is the right fit. Getting the sizing right makes a significant difference to how well the pump performs for your job, and our team can walk you through the specs to make sure you get exactly what you need. Visit us in Urunga or Coffs Harbour.',
		],
	],
	'garden-power-tools' => [
		[
			'heading' => 'Beyond the mower',
			'body'    => 'Keeping a property looking good takes more than just a mower. Hedge trimmers, blowers, pole saws, tillers and edgers are the tools that take your garden from tidy to properly finished — and having the right equipment for each job makes the work faster, easier and a lot less physically demanding, especially in the Coffs Coast heat.',
		],
		[
			'heading' => 'STIHL, Honda and Kress',
			'body'    => 'We stock STIHL and Honda garden power tools covering the full range of outdoor maintenance tasks for homeowners and professional grounds teams alike. The STIHL KombiSystem multi-tool platform is a popular choice — one powerhead with a range of interchangeable attachments including hedge trimmer, pole saw, cultivator and blower. For those who prefer cordless, the Kress battery range delivers serious performance across all the main garden tools.',
		],
		[
			'heading' => 'Build the right setup for your property',
			'body'    => 'Come in to our Urunga or Coffs Harbour store and we\'ll help you work out which tools suit your property, your budget and how regularly you\'re using them. We can advise on whether a multi-tool system or individual tools makes more sense for your situation, and we handle servicing and genuine parts for everything we sell.',
		],
	],
	'battery-electric' => [
		[
			'heading' => 'Battery tools that match petrol',
			'body'    => 'Battery-powered outdoor power equipment has made massive leaps in recent years. Today\'s battery tools genuinely compete with petrol on performance — and for most homeowners, and increasingly for professionals too, they\'re the smarter choice. No fuel mixing, no carburettor issues, significantly less noise, less maintenance, and you can charge them from a standard power point.',
		],
		[
			'heading' => 'STIHL and Kress battery systems',
			'body'    => 'We stock the STIHL and Kress battery ranges on the Coffs Coast — two of the strongest battery platforms available. STIHL\'s AP and AK systems cover everything from lightweight home tools to professional-grade battery chainsaws, brushcutters, blowers and more, with interchangeable batteries across the range. Kress has built a strong reputation for high-capacity battery tools and is particularly well regarded for their RTK robotic mowers and battery brushcutters.',
		],
		[
			'heading' => 'Making the switch to battery',
			'body'    => 'If you\'re thinking about making the switch to battery, or want to add battery tools alongside your existing petrol gear, come in and talk to us. We can help you work out which system suits the jobs you\'re doing, how many batteries you\'ll need, and which tools to prioritise first. We handle servicing and genuine parts for the battery ranges we stock.',
		],
	],
];

// SEO subheadings for hero
$category_subheadings = [
	'chainsaws'          => 'The best range of chainsaws on the Coffs Coast — petrol, battery and arborist saws in stock.',
	'lawn-mowers'        => 'Quality lawn mowers for every block size on the Mid North Coast — push, self-propelled and battery.',
	'ride-on-mowers'     => 'Ride-on mowers for acreage and rural properties across the Mid North Coast — in stock, expert advice.',
	'zero-turn-mowers'   => 'Zero-turn mowers for large properties on the Coffs Coast — residential to commercial grade.',
	'robot-mowers'       => 'Robotic lawn mowers on the Coffs Coast — hands-free mowing from STIHL and Kress.',
	'brushcutters'       => 'Petrol and battery brushcutters on the Coffs Coast — for home blocks to rural properties.',
	'generators'         => 'Reliable generators for home, worksite and rural use on the Mid North Coast — Honda and COX in stock.',
	'pressure-cleaners'  => 'STIHL pressure cleaners on the Coffs Coast — domestic to commercial grade, in stock now.',
	'water-pumps'        => 'Honda water pumps for irrigation, drainage and fire-fighting on the Mid North Coast.',
	'garden-power-tools' => 'STIHL, Honda and Kress garden power tools — hedge trimmers, blowers, pole saws and more.',
	'battery-electric'   => 'Battery outdoor power equipment on the Coffs Coast — STIHL and Kress systems in stock.',
];

// What types / variations we stock per category
$category_variations = [
	'chainsaws'          => [ 'Petrol chainsaws', 'Battery-electric chainsaws', 'Arborist saws', 'Top-handle saws', 'Farm & ranch saws', 'Cut-off machines' ],
	'lawn-mowers'        => [ 'Self-propelled mowers', 'Push mowers', 'Battery mowers', 'Commercial walk-behinds' ],
	'ride-on-mowers'     => [ 'Garden tractors', 'Rear-engine ride-ons', 'Zero-turn mowers', 'Robotic mowers' ],
	'zero-turn-mowers'   => [ 'Residential zero-turns', 'Commercial zero-turns', 'Compact zero-turns' ],
	'robot-mowers'       => [ 'Entry-level robotic mowers', 'Mid-range robotic mowers', 'Commercial robotic mowers' ],
	'brushcutters'       => [ 'Petrol brushcutters', 'Battery brushcutters', 'Straight-shaft', 'Curved-shaft', 'Multi-tool systems' ],
	'generators'         => [ 'Portable inverter generators', 'Open-frame generators', 'Construction generators', 'Standby generators' ],
	'pressure-cleaners'  => [ 'Electric pressure cleaners', 'Petrol pressure cleaners', 'Hot water units', 'Commercial grade' ],
	'water-pumps'        => [ 'Centrifugal pumps', 'Trash pumps', 'Fire-fighting pumps', 'Transfer pumps' ],
	'garden-power-tools' => [ 'Hedge trimmers', 'Blowers & vacs', 'Pole saws', 'Tillers & cultivators', 'Edgers', 'Multi-tool systems' ],
	'battery-electric'   => [ 'Battery chainsaws', 'Battery mowers', 'Battery brushcutters', 'Battery blowers', 'Battery hedge trimmers', 'Robotic mowers' ],
];

// Which brands we stock per category (matched to brand page slugs)
$category_brands = [
	'chainsaws'          => [ 'stihl', 'honda', 'kress' ],
	'lawn-mowers'        => [ 'honda', 'cox', 'stihl', 'supaswift' ],
	'ride-on-mowers'     => [ 'cox', 'greenfield', 'stiga' ],
	'zero-turn-mowers'   => [ 'cox', 'ariens', 'gravely' ],
	'robot-mowers'       => [ 'stihl', 'kress' ],
	'brushcutters'       => [ 'stihl', 'kress' ],
	'generators'         => [ 'honda', 'cox', 'rato' ],
	'pressure-cleaners'  => [ 'stihl', 'honda' ],
	'water-pumps'        => [ 'honda', 'cox', 'rato' ],
	'garden-power-tools' => [ 'stihl', 'honda', 'kress' ],
	'battery-electric'   => [ 'stihl', 'kress' ],
];

// Override object-position for specific section images per category
$section_image_positions = [
	'pressure-cleaners' => [
		2 => 'center bottom',
	],
];

// Brand display names and logo paths
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

$brand_display_names = [
	'stihl'      => 'STIHL',
	'honda'      => 'Honda',
	'cox'        => 'COX',
	'ariens'     => 'Ariens',
	'gravely'    => 'Gravely',
	'kress'      => 'Kress',
	'greenfield' => 'Greenfield',
	'spika'      => 'Spika',
	'stiga'      => 'Stiga',
	'supaswift'  => 'Supaswift',
	'rato'       => 'Rato',
];

$slug        = get_post_field( 'post_name', get_queried_object_id() );
$sections    = $category_sections[ $slug ] ?? [];
$variations  = $category_variations[ $slug ] ?? [];
$brand_slugs = $category_brands[ $slug ] ?? [];
$subheading  = $category_subheadings[ $slug ] ?? '';

// Static per-category image lists (3 section images each, hero = index 0)
$category_image_files = [
	'chainsaws'          => [ 'chainsaws-coffs-coast.jpg', 'stihl-chainsaw-coffs-coast-1.jpg', 'stihl-chainsaw-coffs-coast-2.jpg' ],
	'lawn-mowers'        => [ 'lawn-mowers-coffs-coast.jpg', 'lawn-mower-coffs-coast-1.jpg', 'cox-46-lawn-mower.webp' ],
	'ride-on-mowers'     => [ 'ride-on-mowers-coffs-coast.webp', 'ride-on-mower-lifestyle.jpg', 'stiga-tornado-ride-on-mower.jpg' ],
	'zero-turn-mowers'   => [ 'ariens-zero-turn-mower-banner.webp', 'zero-turn-mower-lifestyle-1.jpg', 'zero-turn-mowers-gravely-coffs-coast.jpg' ],
	'robot-mowers'       => [ 'robot-mowers-kress-coffs-coast.jpg', 'kress-kr173e-robot-mower.webp', 'robot-mower-product-1.jpg' ],
	'brushcutters'       => [ 'brushcutters-stihl-coffs-coast.webp', 'brushcutter-coffs-coast-1.jpg', 'stihl-fsa86-battery-brushcutter.webp' ],
	'generators'         => [ 'generators-coffs-coast.jpg', 'honda-eu22i-generator-key-features.jpg', 'honda-generator-coffs-coast-1.jpg' ],
	'pressure-cleaners'  => [ 'pressure-cleaners-coffs-coast.jpg', 'pressure-cleaner-coffs-coast-1.jpg', 'stihl-re100-pressure-cleaner.jpg' ],
	'water-pumps'        => [ 'water-pump-coffs-coast-1.jpg', 'honda-water-pump-general-purpose.jpg', 'water-pump-coffs-coast-2.jpg' ],
	'garden-power-tools' => [ 'garden-power-tools-hedge-trimmer-coffs-coast.jpg', 'garden-power-tool-1.jpg', 'garden-power-tools-coffs-coast-2.jpg' ],
	'battery-electric'   => [ 'battery-electric-outdoor-power-equipment-coffs-coast.jpg', 'battery-powered-outdoor-equipment-2.jpg', 'battery-electric-equipment-1.jpg' ],
];
$section_images = array_map(
	function( $f ) use ( $theme_img ) { return $theme_img . '/products/' . $f; },
	$category_image_files[ $slug ] ?? []
);

// Hero image: customizer override → first category image
$mod_key  = $category_mod_keys[ $slug ] ?? '';
$fallback = $section_images[0] ?? $theme_img . '/gallery/outdoor-power-equipment-store-coffs-coast-8.jpg';
$hero_img = $mod_key ? get_theme_mod( $mod_key, $fallback ) : $fallback;
?>

<div class="page-hero" style="background-image:url('<?php echo esc_url( $hero_img ); ?>');background-size:cover;background-position:center;position:relative;min-height:340px;border-bottom:none;">
	<div style="position:absolute;inset:0;background:rgba(26,26,26,0.82);"></div>
	<div class="container" style="position:relative;z-index:2;">
		<?php while ( have_posts() ) : the_post(); ?>
			<h1><?php the_title(); ?></h1>
			<?php if ( $subheading ) : ?>
				<p class="page-hero__intro"><?php echo esc_html( $subheading ); ?></p>
			<?php endif; ?>
			<?php if ( get_the_content() ) : ?>
				<div class="page-hero__intro"><?php the_content(); ?></div>
			<?php endif; ?>
		<?php endwhile; ?>
	</div>
</div>

<?php foreach ( $sections as $i => $section ) :
	$img = $section_images[ $i ] ?? null;
	$reverse = ( $i % 2 !== 0 ) ? ' cat-section__inner--reverse' : '';
	$alt     = ( $i % 2 !== 0 ) ? ' cat-section--alt' : '';
?>
<section class="cat-section<?php echo esc_attr( $alt ); ?>">
	<div class="container">
		<div class="cat-section__inner<?php echo esc_attr( $reverse ); ?>">
			<?php if ( $img ) :
				$obj_pos = $section_image_positions[ $slug ][ $i ] ?? 'center';
			?>
				<div class="cat-section__image">
					<img
						src="<?php echo esc_url( $img ); ?>"
						alt="<?php echo esc_attr( $section['heading'] ); ?>"
						loading="<?php echo $i === 0 ? 'eager' : 'lazy'; ?>"
						style="object-position:<?php echo esc_attr( $obj_pos ); ?>;"
					>
				</div>
			<?php endif; ?>
			<div class="cat-section__text">
				<h2><?php echo esc_html( $section['heading'] ); ?></h2>
				<p><?php echo esc_html( $section['body'] ); ?></p>
			</div>
		</div>
	</div>
</section>
<?php endforeach; ?>

<?php if ( ! empty( $variations ) ) : ?>
<section class="cat-section">
	<div class="container" style="text-align:center;">
		<h2 style="font-size:1.375rem;margin-bottom:0.5rem;">What we stock</h2>
		<p style="color:var(--color-silver);margin-bottom:1.25rem;max-width:60ch;margin-inline:auto;">We carry a full range of models across all the major types — from entry-level to professional grade.</p>
		<div class="brand-categories" style="justify-content:center;">
			<?php foreach ( $variations as $variation ) : ?>
				<span class="brand-category-tag"><?php echo esc_html( $variation ); ?></span>
			<?php endforeach; ?>
		</div>
	</div>
</section>
<?php endif; ?>

<?php if ( ! empty( $brand_slugs ) ) : ?>
<section class="brands section-pad--sm" style="border-bottom:1px solid #d4d0ca;">
	<div class="container" style="text-align:center;">
		<h2 style="font-size:1.375rem;margin-bottom:0.5rem;color:var(--color-black);">Brands we stock</h2>
		<p style="color:var(--color-charcoal);margin-bottom:2rem;max-width:60ch;margin-inline:auto;">Authorised dealers for the brands we sell — genuine advice, genuine parts, genuine backup.</p>
		<div class="brands__grid" style="justify-content:center;">
			<?php foreach ( $brand_slugs as $brand ) :
				$logo_mod = $brand_logo_mod_keys[ $brand ] ?? '';
				$logo_url = $logo_mod ? get_theme_mod( $logo_mod, $brand_logo_defaults[ $brand ] ?? '' ) : ( $brand_logo_defaults[ $brand ] ?? '' );
				$name     = $brand_display_names[ $brand ] ?? ucfirst( $brand );
			?>
				<a class="brand-logo" href="<?php echo esc_url( home_url( '/brands#' . $brand ) ); ?>" aria-label="<?php echo esc_attr( $name ); ?> — view brand">
					<?php if ( $logo_url ) : ?>
						<img src="<?php echo esc_url( $logo_url ); ?>" alt="<?php echo esc_attr( $name ); ?>" loading="lazy">
					<?php else : ?>
						<span style="font-family:var(--font-heading);font-size:1.25rem;font-weight:700;color:var(--color-black);"><?php echo esc_html( $name ); ?></span>
					<?php endif; ?>
				</a>
			<?php endforeach; ?>
		</div>
	</div>
</section>
<?php endif; ?>

<?php $cta_bg = ! empty( $section_images ) ? end( $section_images ) : $theme_img . '/stores/urunga-chainsaw-mower-store-front.jpg'; ?>
<section style="position:relative;padding-block:clamp(4rem,8vw,6rem);background-image:url('<?php echo esc_url( $cta_bg ); ?>');background-size:cover;background-position:center;">
	<div style="position:absolute;inset:0;background:rgba(26,26,26,0.80);"></div>
	<div class="container" style="position:relative;z-index:2;text-align:center;">
		<h2 style="font-size:clamp(1.5rem,3vw,2rem);margin-bottom:1rem;">Talk to us about <?php the_title(); ?></h2>
		<p style="color:var(--color-silver);margin-bottom:1.5rem;max-width:55ch;margin-inline:auto;">Not sure what model is right for your needs? Call us — we know the range inside and out and can help you find the right fit for your job and budget.</p>
		<div style="display:flex;flex-wrap:wrap;gap:1rem;justify-content:center;">
			<a class="btn btn--primary" href="<?php echo esc_attr( coffsope_phone_link( 'urunga' ) ); ?>">Call Urunga &mdash; <?php echo esc_html( coffsope_phone( 'urunga' ) ); ?></a>
			<a class="btn btn--outline" href="<?php echo esc_attr( coffsope_phone_link( 'coffs' ) ); ?>">Call Coffs Harbour &mdash; <?php echo esc_html( coffsope_phone( 'coffs' ) ); ?></a>
		</div>
	</div>
</section>

<?php get_footer(); ?>
