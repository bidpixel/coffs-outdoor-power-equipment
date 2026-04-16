<?php

defined( 'ABSPATH' ) || exit;

define( 'COFFSOPE_VERSION', '1.0.0' );
define( 'COFFSOPE_DIR', get_template_directory() );
define( 'COFFSOPE_URI', get_template_directory_uri() );

function coffsope_setup() {
	load_theme_textdomain( 'coffsope', COFFSOPE_DIR . '/languages' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', [ 'search-form', 'comment-form', 'gallery', 'caption', 'style', 'script' ] );
	add_theme_support( 'customize-selective-refresh-widgets' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'editor-styles' );

	register_nav_menus( [
		'primary' => __( 'Primary Navigation', 'coffsope' ),
		'footer'  => __( 'Footer Navigation', 'coffsope' ),
	] );
}
add_action( 'after_setup_theme', 'coffsope_setup' );

function coffsope_enqueue_assets() {
	wp_enqueue_style(
		'coffsope-main',
		COFFSOPE_URI . '/assets/css/main.css',
		[],
		COFFSOPE_VERSION
	);

	wp_enqueue_script(
		'coffsope-main',
		COFFSOPE_URI . '/assets/js/main.js',
		[],
		COFFSOPE_VERSION,
		true
	);

	wp_localize_script( 'coffsope-main', 'coffsopeData', [
		'ajaxUrl' => admin_url( 'admin-ajax.php' ),
		'nonce'   => wp_create_nonce( 'coffsope_nonce' ),
	] );
}
add_action( 'wp_enqueue_scripts', 'coffsope_enqueue_assets' );

function coffsope_contact_form_handler() {
	check_ajax_referer( 'coffsope_nonce', 'nonce' );

	$name    = sanitize_text_field( $_POST['name'] ?? '' );
	$phone   = sanitize_text_field( $_POST['phone'] ?? '' );
	$email   = sanitize_email( $_POST['email'] ?? '' );
	$message = sanitize_textarea_field( $_POST['message'] ?? '' );
	$store   = sanitize_text_field( $_POST['store'] ?? '' );

	if ( empty( $name ) || empty( $email ) || empty( $message ) ) {
		wp_send_json_error( [ 'message' => 'Please fill in all required fields.' ] );
	}

	if ( ! is_email( $email ) ) {
		wp_send_json_error( [ 'message' => 'Please enter a valid email address.' ] );
	}

	$webhook = get_theme_mod( 'coffsope_make_webhook', '' );

	if ( empty( $webhook ) ) {
		wp_send_json_error( [ 'message' => 'Sorry, your message could not be sent. Please call us directly.' ] );
	}

	$response = wp_remote_post( $webhook, [
		'headers' => [ 'Content-Type' => 'application/json' ],
		'body'    => wp_json_encode( [
			'name'    => $name,
			'phone'   => $phone,
			'email'   => $email,
			'store'   => $store,
			'message' => $message,
		] ),
		'timeout' => 10,
	] );

	if ( is_wp_error( $response ) || wp_remote_retrieve_response_code( $response ) >= 400 ) {
		wp_send_json_error( [ 'message' => 'Sorry, your message could not be sent. Please call us directly.' ] );
	}

	wp_send_json_success( [ 'message' => "Thanks for getting in touch. We'll get back to you shortly." ] );
}
add_action( 'wp_ajax_coffsope_contact', 'coffsope_contact_form_handler' );
add_action( 'wp_ajax_nopriv_coffsope_contact', 'coffsope_contact_form_handler' );

function coffsope_async_fonts() {
	$font_url = 'https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@700;900&family=Barlow:wght@400;600&display=swap';
	echo '<link rel="preload" as="style" href="' . esc_url( $font_url ) . '" onload="this.onload=null;this.rel=\'stylesheet\'">' . "\n";
	echo '<noscript><link rel="stylesheet" href="' . esc_url( $font_url ) . '"></noscript>' . "\n";
}
add_action( 'wp_head', 'coffsope_async_fonts', 1 );

function coffsope_add_preconnect( $hints, $relation_type ) {
	if ( 'preconnect' === $relation_type ) {
		$hints[] = [ 'href' => 'https://fonts.googleapis.com' ];
		$hints[] = [ 'href' => 'https://fonts.gstatic.com', 'crossorigin' => 'anonymous' ];
	}
	return $hints;
}
add_filter( 'wp_resource_hints', 'coffsope_add_preconnect', 10, 2 );

function coffsope_body_classes( $classes ) {
	if ( is_front_page() ) {
		$classes[] = 'is-front-page';
	}
	return $classes;
}
add_filter( 'body_class', 'coffsope_body_classes' );

// ---------------------------------------------------------------------------
// Customizer — all panels, sections, settings and controls
// ---------------------------------------------------------------------------

function coffsope_customize_register( $wp_customize ) {

	$u = get_template_directory_uri() . '/assets/images';

	// Inline helpers to reduce boilerplate ---------------------------------
	$t = function ( $id, $sec, $label, $default, $type = 'text' ) use ( $wp_customize ) {
		$wp_customize->add_setting( $id, [
			'default'           => $default,
			'sanitize_callback' => 'wp_kses_post',
		] );
		$wp_customize->add_control( $id, [
			'label'   => $label,
			'section' => $sec,
			'type'    => $type,
		] );
	};

	$img = function ( $id, $sec, $label, $default = '' ) use ( $wp_customize ) {
		$wp_customize->add_setting( $id, [
			'default'           => $default,
			'sanitize_callback' => 'esc_url_raw',
		] );
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, $id, [
			'label'   => $label,
			'section' => $sec,
		] ) );
	};

	$url = function ( $id, $sec, $label, $default = '' ) use ( $wp_customize ) {
		$wp_customize->add_setting( $id, [
			'default'           => $default,
			'sanitize_callback' => 'esc_url_raw',
		] );
		$wp_customize->add_control( $id, [
			'label'   => $label,
			'section' => $sec,
			'type'    => 'url',
		] );
	};

	// =========================================================================
	// PANEL: Site Settings
	// =========================================================================
	$wp_customize->add_panel( 'coffsope_panel', [
		'title'    => 'Site Settings',
		'priority' => 30,
	] );

	$wp_customize->add_section( 'coffsope_urunga', [
		'title' => 'Urunga Store',
		'panel' => 'coffsope_panel',
	] );
	$t( 'coffsope_urunga_phone', 'coffsope_urunga', 'Phone number', '(02) 6655 6411' );

	$wp_customize->add_section( 'coffsope_coffs', [
		'title' => 'Coffs Harbour Store',
		'panel' => 'coffsope_panel',
	] );
	$t( 'coffsope_coffs_phone', 'coffsope_coffs', 'Phone number', '(02) 5671 0914' );
	$wp_customize->add_setting( 'coffsope_coffs_email', [
		'default'           => 'sales@coffsope.com.au',
		'sanitize_callback' => 'sanitize_email',
	] );
	$wp_customize->add_control( 'coffsope_coffs_email', [
		'label'   => 'Email address',
		'section' => 'coffsope_coffs',
		'type'    => 'email',
	] );

	$wp_customize->add_section( 'coffsope_integrations', [
		'title' => 'Integrations',
		'panel' => 'coffsope_panel',
	] );
	$wp_customize->add_setting( 'coffsope_make_webhook', [
		'default'           => '',
		'sanitize_callback' => 'esc_url_raw',
	] );
	$wp_customize->add_control( 'coffsope_make_webhook', [
		'label'       => 'Make webhook URL',
		'description' => 'Paste your Make webhook URL here. Stored in the database — never in theme files.',
		'section'     => 'coffsope_integrations',
		'type'        => 'url',
	] );

	$wp_customize->add_section( 'coffsope_social', [
		'title' => 'Social Media',
		'panel' => 'coffsope_panel',
	] );
	$url( 'coffsope_facebook_urunga', 'coffsope_social', 'Facebook — Urunga Chainsaw & Mower', 'https://www.facebook.com/profile.php?id=100076225634075' );
	$url( 'coffsope_facebook_coffs',  'coffsope_social', 'Facebook — Coffs Harbour OPE', 'https://www.facebook.com/coffsharbouroutdoorpowerequipment' );

	// =========================================================================
	// PANEL: Homepage
	// =========================================================================
	$wp_customize->add_panel( 'coffsope_hp_panel', [
		'title'    => 'Homepage',
		'priority' => 31,
	] );

	// Hero
	$wp_customize->add_section( 'coffsope_hp_hero', [ 'title' => 'Hero', 'panel' => 'coffsope_hp_panel' ] );
	$img( 'hp_hero_image',       'coffsope_hp_hero', 'Background image', $u . '/hero/outdoor-power-equipment-store-hero.jpg' );
	$t(   'hp_hero_headline',    'coffsope_hp_hero', 'Headline', "The Coffs Coast's home for outdoor power equipment." );
	$t(   'hp_hero_subheadline', 'coffsope_hp_hero', 'Subheadline', 'Two locations, 45 years of expertise, and the brands you trust: STIHL, Honda, COX and more.', 'textarea' );
	$t(   'hp_hero_cta1',        'coffsope_hp_hero', 'Button 1 label', 'View our products' );
	$t(   'hp_hero_cta2',        'coffsope_hp_hero', 'Button 2 label', 'Find a store' );

	// Trust bar
	$wp_customize->add_section( 'coffsope_hp_trust', [ 'title' => 'Trust Bar', 'panel' => 'coffsope_hp_panel' ] );
	$t( 'hp_trust_1', 'coffsope_hp_trust', 'Item 1', '45+ years experience' );
	$t( 'hp_trust_2', 'coffsope_hp_trust', 'Item 2', 'Authorised STIHL & Honda dealer' );
	$t( 'hp_trust_3', 'coffsope_hp_trust', 'Item 3', 'Two Coffs Coast locations' );
	$t( 'hp_trust_4', 'coffsope_hp_trust', 'Item 4', 'On-site workshop & repairs' );

	// Stores section
	$wp_customize->add_section( 'coffsope_hp_stores', [ 'title' => 'Stores Section', 'panel' => 'coffsope_hp_panel' ] );
	$t( 'hp_stores_heading', 'coffsope_hp_stores', 'Heading', 'Two stores. One team. One standard.' );

	// Products section
	$wp_customize->add_section( 'coffsope_hp_products', [ 'title' => 'Products Section', 'panel' => 'coffsope_hp_panel' ] );
	$t( 'hp_products_label',   'coffsope_hp_products', 'Section label', 'What we stock' );
	$t( 'hp_products_heading', 'coffsope_hp_products', 'Heading', "Whatever the job, we've got the gear." );
	$t( 'hp_products_intro',   'coffsope_hp_products', 'Intro text', 'Browse our range of quality outdoor power equipment. From chainsaws and ride-on mowers to generators and pressure cleaners. If you need it for your property, we stock it.', 'textarea' );

	// Brands section
	$wp_customize->add_section( 'coffsope_hp_brands', [ 'title' => 'Brands Section', 'panel' => 'coffsope_hp_panel' ] );
	$t( 'hp_brands_label',   'coffsope_hp_brands', 'Section label', 'Our brands' );
	$t( 'hp_brands_heading', 'coffsope_hp_brands', 'Heading', 'Brands worth trusting.' );
	$t( 'hp_brands_intro',   'coffsope_hp_brands', 'Intro text', 'As an authorised dealer for STIHL and Honda, we can offer genuine advice, genuine parts and genuine backup when you need it. We also stock COX, Ariens, Gravely, Kress, Greenfield, Supaswift and Wright. Quality equipment for every budget and job size.', 'textarea' );

	// Servicing preview
	$wp_customize->add_section( 'coffsope_hp_servicing', [ 'title' => 'Servicing Section', 'panel' => 'coffsope_hp_panel' ] );
	$img( 'hp_servicing_image',   'coffsope_hp_servicing', 'Image', $u . '/servicing/outdoor-power-equipment-repair-coffs-coast-1.jpg' );
	$t(   'hp_servicing_label',   'coffsope_hp_servicing', 'Section label', 'Repairs & maintenance' );
	$t(   'hp_servicing_heading', 'coffsope_hp_servicing', 'Heading', 'Keep your gear running, season after season.' );
	$t(   'hp_servicing_body1',   'coffsope_hp_servicing', 'Paragraph 1', 'Our on-site workshop handles everything from routine servicing to fault diagnosis and full repairs. We work on mowers, chainsaws, brushcutters, generators, pumps and more. Most makes and models welcome.', 'textarea' );
	$t(   'hp_servicing_body2',   'coffsope_hp_servicing', 'Paragraph 2', "No booking required for basic diagnostics. Just drop it in and we'll take a look.", 'textarea' );
	$t(   'hp_servicing_cta',     'coffsope_hp_servicing', 'Button label', 'Learn about our servicing' );

	// About preview

	// Reviews
	$wp_customize->add_section( 'coffsope_hp_reviews', [ 'title' => 'Reviews Section', 'panel' => 'coffsope_hp_panel' ] );
	$img( 'hp_reviews_bg_image', 'coffsope_hp_reviews', 'Background image', $u . '/gallery/outdoor-power-equipment-store-coffs-coast-3.jpg' );
	$t( 'hp_reviews_heading',  'coffsope_hp_reviews', 'Heading', 'What our customers say' );
	$t( 'hp_review_1_text',    'coffsope_hp_reviews', 'Review 1 — text', '"Great local shop with genuine expertise. The team helped me choose the right chainsaw for my property and didn\'t try to upsell me on something I didn\'t need. Will be back for servicing."', 'textarea' );
	$t( 'hp_review_1_author',  'coffsope_hp_reviews', 'Review 1 — name', 'Google reviewer' );
	$t( 'hp_review_2_text',    'coffsope_hp_reviews', 'Review 2 — text', '"Dropped my mower in for a service and it came back running better than when I bought it. Quick turnaround, fair price, and they explained exactly what they did. Couldn\'t ask for more."', 'textarea' );
	$t( 'hp_review_2_author',  'coffsope_hp_reviews', 'Review 2 — name', 'Google reviewer' );
	$t( 'hp_review_3_text',    'coffsope_hp_reviews', 'Review 3 — text', '"Bought a STIHL chainsaw here a few years ago and recently brought it in for a sharpen and service. Always reliable, always friendly. Highly recommend for anyone on the Coffs Coast."', 'textarea' );
	$t( 'hp_review_3_author',  'coffsope_hp_reviews', 'Review 3 — name', 'Google reviewer' );
	$t( 'hp_review_4_text',    'coffsope_hp_reviews', 'Review 4 — text', '"Finally found a mower shop that actually knows their stuff. Went in with a seized ride-on and left with it running perfectly. The mechanic walked me through what went wrong and how to prevent it next time. Genuine service."', 'textarea' );
	$t( 'hp_review_4_author',  'coffsope_hp_reviews', 'Review 4 — name', 'Google reviewer' );
	$t( 'hp_review_5_text',    'coffsope_hp_reviews', 'Review 5 — text', '"Stocked up on STIHL accessories and the team knew exactly what I needed before I\'d even finished explaining the job. Proper knowledge, not just salespeople. These guys are the real deal."', 'textarea' );
	$t( 'hp_review_5_author',  'coffsope_hp_reviews', 'Review 5 — name', 'Google reviewer' );
	$t( 'hp_review_6_text',    'coffsope_hp_reviews', 'Review 6 — text', '"I\'ve bought from big hardware chains before but the difference in service here is night and day. Competitive pricing and the after-sales support is second to none. Wouldn\'t go anywhere else."', 'textarea' );
	$t( 'hp_review_6_author',  'coffsope_hp_reviews', 'Review 6 — name', 'Google reviewer' );
	$t( 'hp_review_7_text',    'coffsope_hp_reviews', 'Review 7 — text', '"Took my brushcutter in after it kept flooding. Had it back the next day, running like new. These blokes clearly know small engines inside out. Wouldn\'t trust anyone else with my gear."', 'textarea' );
	$t( 'hp_review_7_author',  'coffsope_hp_reviews', 'Review 7 — name', 'Google reviewer' );
	$t( 'hp_review_8_text',    'coffsope_hp_reviews', 'Review 8 — text', '"Drove up from Grafton because a mate recommended them. Worth every kilometre. They had the part I needed in stock and even helped me fit it on the spot. Great bunch of people."', 'textarea' );
	$t( 'hp_review_8_author',  'coffsope_hp_reviews', 'Review 8 — name', 'Google reviewer' );
	$t( 'hp_review_9_text',    'coffsope_hp_reviews', 'Review 9 — text', '"Best place on the coast for outdoor power gear. Picked up a new ride-on and the handover was thorough. They showed me everything, answered all my questions, and followed up a week later to check in. Brilliant."', 'textarea' );
	$t( 'hp_review_9_author',  'coffsope_hp_reviews', 'Review 9 — name', 'Google reviewer' );
	$t( 'hp_review_10_text',   'coffsope_hp_reviews', 'Review 10 — text', '"Been coming here for years and the service never drops. Honest about what needs doing, never try to oversell, and the prices are fair. Exactly what you want from a local business."', 'textarea' );
	$t( 'hp_review_10_author', 'coffsope_hp_reviews', 'Review 10 — name', 'Google reviewer' );

	// Footer CTA
	$wp_customize->add_section( 'coffsope_hp_footer_cta', [ 'title' => 'Footer CTA', 'panel' => 'coffsope_hp_panel' ] );
	$t( 'hp_footer_cta_heading', 'coffsope_hp_footer_cta', 'Heading', 'Ready to talk gear?' );
	$t( 'hp_footer_cta_body',    'coffsope_hp_footer_cta', 'Body text', "Visit us in Urunga or Sapphire Beach, give us a call, or send us a message. We're happy to help you find the right equipment for the job.", 'textarea' );
	$t( 'hp_footer_cta_cta1',    'coffsope_hp_footer_cta', 'Button 1 label', 'Contact us' );

	// =========================================================================
	// PANEL: Location Pages
	// =========================================================================
	$wp_customize->add_panel( 'coffsope_loc_panel', [
		'title'    => 'Location Pages',
		'priority' => 32,
	] );

	// Urunga location
	$wp_customize->add_section( 'coffsope_loc_urunga', [ 'title' => 'Urunga Location Page', 'panel' => 'coffsope_loc_panel' ] );
	$img( 'loc_urunga_hero_image',       'coffsope_loc_urunga', 'Hero background image', $u . '/gallery/outdoor-power-equipment-store-coffs-coast-5.jpg' );
	$img( 'loc_urunga_store_image',      'coffsope_loc_urunga', 'Store front image',      $u . '/stores/urunga-chainsaw-mower-store-front.jpg' );
	$t(   'loc_urunga_h1',               'coffsope_loc_urunga', 'Page heading (H1)', 'Urunga Chainsaw & Mower' );
	$t(   'loc_urunga_intro',            'coffsope_loc_urunga', 'Intro paragraph', "We've been part of the Urunga community for over 45 years. Whether you're after a new chainsaw, a ride-on mower for your acreage, or just need your brushcutter serviced, our team is here to help, with honest advice and no pressure.", 'textarea' );
	$t(   'loc_urunga_stock_heading',    'coffsope_loc_urunga', 'Stock — heading', 'What we stock' );
	$t(   'loc_urunga_stock_body',       'coffsope_loc_urunga', 'Stock — body', "We carry a full range of outdoor power equipment from the brands that work: STIHL, Honda, COX, Kress, Greenfield and more. Whether it's for the home garden or a working rural property, we'll help you find the right tool for the job.", 'textarea' );
	$t(   'loc_urunga_workshop_heading', 'coffsope_loc_urunga', 'Workshop — heading', 'Workshop & repairs' );
	$t(   'loc_urunga_workshop_body',    'coffsope_loc_urunga', 'Workshop — body', 'Our Urunga store has a fully equipped workshop on site. We service and repair most makes and models: mowers, chainsaws, brushcutters, generators and pumps. No booking needed for a basic drop-in diagnostic.', 'textarea' );
	$t(   'loc_urunga_also_serving',     'coffsope_loc_urunga', 'Also serving', 'Bellingen, Nambucca Heads, Macksville, Sawtell and surrounding Mid North Coast communities.' );

	// Coffs Harbour location
	$wp_customize->add_section( 'coffsope_loc_coffs', [ 'title' => 'Coffs Harbour Location Page', 'panel' => 'coffsope_loc_panel' ] );
	$img( 'loc_coffs_hero_image',       'coffsope_loc_coffs', 'Hero background image', $u . '/gallery/stihl-authorised-dealer-coffs-coast-2.jpg' );
	$img( 'loc_coffs_store_image',      'coffsope_loc_coffs', 'Store front image',      $u . '/stores/coffs-harbour-outdoor-power-equipment-store-front.jpg' );
	$t(   'loc_coffs_h1',               'coffsope_loc_coffs', 'Page heading (H1)', 'Coffs Harbour Outdoor Power Equipment' );
	$t(   'loc_coffs_intro',            'coffsope_loc_coffs', 'Intro paragraph', "Located at Sapphire Beach, our Coffs Harbour store brings the same expertise and product range you'd expect from over 45 years in the industry. We're your local authorised STIHL and Honda dealer, and we also stock COX, Kress, Greenfield and more.", 'textarea' );
	$t(   'loc_coffs_stock_heading',    'coffsope_loc_coffs', 'Stock — heading', 'What we stock' );
	$t(   'loc_coffs_stock_body',       'coffsope_loc_coffs', 'Stock — body', 'From push mowers and brushcutters to chainsaws and generators. We carry the full range. As an authorised STIHL and Honda dealer, we can also assist with genuine parts and warranty support.', 'textarea' );
	$t(   'loc_coffs_workshop_heading', 'coffsope_loc_coffs', 'Workshop — heading', 'Workshop & repairs' );
	$t(   'loc_coffs_workshop_body',    'coffsope_loc_coffs', 'Workshop — body', 'Our on-site workshop handles servicing and repairs for most major brands. Drop in for a diagnostic. No booking required.', 'textarea' );
	$t(   'loc_coffs_also_serving',     'coffsope_loc_coffs', 'Also serving', 'Woolgoolga, Moonee Beach, Korora, Boambee and surrounding Coffs Harbour communities.' );

	// =========================================================================
	// PANEL: Inner Pages
	// =========================================================================
	$wp_customize->add_panel( 'coffsope_pages_panel', [
		'title'    => 'Inner Pages',
		'priority' => 33,
	] );

	// Servicing page
	$wp_customize->add_section( 'coffsope_serv', [ 'title' => 'Servicing Page', 'panel' => 'coffsope_pages_panel' ] );
	$img( 'serv_hero_image',    'coffsope_serv', 'Hero background image', $u . '/servicing/outdoor-power-equipment-repair-coffs-coast-1.jpg' );
	$t( 'serv_h1',              'coffsope_serv', 'Page heading (H1)', 'Servicing & repairs' );
	$t( 'serv_intro_1',         'coffsope_serv', 'Intro — paragraph 1', "When your equipment's not working, you need it sorted fast. Our workshop team handles everything from a quick tune-up to a full strip and repair, with honest advice on what's worth fixing and what isn't. We service most major brands, not just the ones we sell.", 'textarea' );
	$t( 'serv_intro_2',         'coffsope_serv', 'Intro — paragraph 2', 'Available at both our Urunga and Sapphire Beach locations.' );
	$t( 'serv_chainsaw_heading','coffsope_serv', 'Chainsaw — heading', 'Chainsaw servicing' );
	$t( 'serv_chainsaw_body1',  'coffsope_serv', 'Chainsaw — paragraph 1', 'Keep your saw cutting clean and safe. We carry out full chainsaw servicing including chain sharpening, bar inspection, air filter cleaning, spark plug replacement, fuel system checks and general tune-ups.', 'textarea' );
	$t( 'serv_chainsaw_body2',  'coffsope_serv', 'Chainsaw — paragraph 2', "Whether it's a STIHL, Husqvarna or another brand. If it's a chainsaw, we can service it." );
	$img( 'serv_chainsaw_image','coffsope_serv', 'Chainsaw — image', $u . '/servicing/outdoor-power-equipment-repair-coffs-coast-2.jpg' );
	$t( 'serv_mower_heading',   'coffsope_serv', 'Mower — heading', 'Mower servicing' );
	$t( 'serv_mower_body1',     'coffsope_serv', 'Mower — paragraph 1', 'A well-serviced mower lasts longer and cuts better. We handle blade sharpening, oil and filter changes, spark plug replacement, belt inspections and carburettor cleaning for push mowers and self-propelled models.', 'textarea' );
	$t( 'serv_mower_body2',     'coffsope_serv', 'Mower — paragraph 2', 'Hard to start? Not cutting evenly? Bring it in. Most mower services can be turned around quickly.' );
	$img( 'serv_mower_image',   'coffsope_serv', 'Mower — image', $u . '/products/lawn-mowers-coffs-coast.jpg' );
	$t( 'serv_rideon_heading',  'coffsope_serv', 'Ride-on — heading', 'Ride-on mower servicing' );
	$t( 'serv_rideon_body1',    'coffsope_serv', 'Ride-on — paragraph 1', 'Ride-on and zero-turn mowers take a hammering over the season. We offer full ride-on servicing including oil changes, blade sharpening, belt and drive inspections, battery checks and general mechanical repairs.', 'textarea' );
	$t( 'serv_rideon_body2',    'coffsope_serv', 'Ride-on — paragraph 2', 'We work on most brands and models, including COX, Honda, Husqvarna and Ariens.' );
	$img( 'serv_rideon_image',  'coffsope_serv', 'Ride-on — image', $u . '/products/ride-on-mowers-coffs-coast.webp' );
	$t( 'serv_small_heading',   'coffsope_serv', 'Small engines — heading', 'Small engine repairs' );
	$t( 'serv_small_body1',     'coffsope_serv', 'Small engines — paragraph 1', "Brushcutters, blowers, pressure cleaners, water pumps, generators. If it's got a small engine and it's not running right, we can help. We diagnose and repair fuel system issues, carburettor faults, ignition problems, worn seals and more.", 'textarea' );
	$t( 'serv_small_body2',     'coffsope_serv', 'Small engines — paragraph 2', 'No booking required for a basic diagnostic. Just drop it in.' );
	$img( 'serv_small_image',   'coffsope_serv', 'Small engines — image', $u . '/servicing/outdoor-power-equipment-repair-coffs-coast-1.jpg' );
	$t( 'serv_footer_heading',  'coffsope_serv', 'Footer CTA — heading', "Not sure if it's worth repairing?" );
	$t( 'serv_footer_body',     'coffsope_serv', 'Footer CTA — body', "Bring it in and we'll take a look. We'll give you an honest assessment before any work is done." );

	// Contact page
	$wp_customize->add_section( 'coffsope_contact', [ 'title' => 'Contact Page', 'panel' => 'coffsope_pages_panel' ] );
	$img( 'contact_hero_image', 'coffsope_contact', 'Hero background image', $u . '/gallery/outdoor-power-equipment-store-coffs-coast-3.jpg' );
	$t( 'contact_h1',    'coffsope_contact', 'Page heading (H1)', 'Get in touch' );
	$t( 'contact_intro', 'coffsope_contact', 'Intro paragraph', "Whether you've got a question about a product, need a service booked in, or just want some advice on what to buy. We're happy to help. Give us a call, send a message, or come in and see us.", 'textarea' );

	// Finance page
	$wp_customize->add_section( 'coffsope_finance', [ 'title' => 'Finance Page', 'panel' => 'coffsope_pages_panel' ] );
	$img( 'finance_hero_image', 'coffsope_finance', 'Hero background image', $u . '/hero/outdoor-power-equipment-store-hero.jpg' );
	$t( 'finance_h1',    'coffsope_finance', 'Page heading (H1)', 'Finance calculator' );
	$t( 'finance_intro', 'coffsope_finance', 'Intro paragraph', "Thinking about spreading the cost of your next purchase? Use the calculator below to estimate repayments. Come in and talk to us in store to discuss what's available for your situation.", 'textarea' );

	// =========================================================================
	// PANEL: Products & Brands
	// =========================================================================
	$wp_customize->add_panel( 'coffsope_prod_panel', [
		'title'    => 'Products & Brands',
		'priority' => 34,
	] );

	// Product category images
	$wp_customize->add_section( 'coffsope_cat_images', [ 'title' => 'Product Category Images', 'panel' => 'coffsope_prod_panel' ] );
	$img( 'cat_img_chainsaws',         'coffsope_cat_images', 'Chainsaws',         $u . '/products/chainsaws-coffs-coast.jpg' );
	$img( 'cat_img_lawn_mowers',       'coffsope_cat_images', 'Lawn mowers',       $u . '/products/lawn-mowers-coffs-coast.jpg' );
	$img( 'cat_img_ride_on_mowers',    'coffsope_cat_images', 'Ride-on mowers',    $u . '/products/ride-on-mowers-coffs-coast.webp' );
	$img( 'cat_img_zero_turn_mowers',  'coffsope_cat_images', 'Zero turn mowers',  $u . '/products/zero-turn-mowers-gravely-coffs-coast.jpg' );
	$img( 'cat_img_robot_mowers',      'coffsope_cat_images', 'Robot mowers',      $u . '/products/robot-mowers-kress-coffs-coast.jpg' );
	$img( 'cat_img_brushcutters',      'coffsope_cat_images', 'Brushcutters',      $u . '/products/brushcutters-stihl-coffs-coast.webp' );
	$img( 'cat_img_generators',        'coffsope_cat_images', 'Generators',        $u . '/products/generators-coffs-coast.jpg' );
	$img( 'cat_img_pressure_cleaners', 'coffsope_cat_images', 'Pressure cleaners', $u . '/products/pressure-cleaners-coffs-coast.jpg' );
	$img( 'cat_img_water_pumps',         'coffsope_cat_images', 'Water pumps',         $u . '/products/water-pump-coffs-coast-1.jpg' );
	$img( 'cat_img_garden_power_tools',  'coffsope_cat_images', 'Garden power tools',  $u . '/products/garden-power-tools-hedge-trimmer-coffs-coast.jpg' );
	$img( 'cat_img_battery_electric',    'coffsope_cat_images', 'Battery & electric',  $u . '/products/battery-electric-outdoor-power-equipment-coffs-coast.jpg' );

	// Brand logos
	$wp_customize->add_section( 'coffsope_brand_logos', [ 'title' => 'Brand Logos', 'panel' => 'coffsope_prod_panel' ] );
	$img( 'brand_logo_stihl',      'coffsope_brand_logos', 'STIHL logo',      $u . '/brands/stihl-logo.png' );
	$img( 'brand_logo_honda',      'coffsope_brand_logos', 'Honda logo',      $u . '/brands/honda-power-equipment-logo.png' );
	$img( 'brand_logo_cox',        'coffsope_brand_logos', 'COX logo',        $u . '/brands/cox-logo.png' );
	$img( 'brand_logo_ariens',     'coffsope_brand_logos', 'Ariens logo',     $u . '/brands/ariens-logo.avif' );
	$img( 'brand_logo_gravely',    'coffsope_brand_logos', 'Gravely logo',    $u . '/brands/gravely-logo.webp' );
	$img( 'brand_logo_kress',      'coffsope_brand_logos', 'Kress logo',      $u . '/brands/kress-logo.png' );
	$img( 'brand_logo_greenfield', 'coffsope_brand_logos', 'Greenfield logo', $u . '/brands/greenfield-logo.png' );
	$img( 'brand_logo_spika',      'coffsope_brand_logos', 'Spika logo',      $u . '/brands/spika-logo.png' );
	$img( 'brand_logo_supaswift',  'coffsope_brand_logos', 'Supaswift logo',  $u . '/brands/supaswift-logo.webp' );
	$img( 'brand_logo_wright',     'coffsope_brand_logos', 'Wright logo',     $u . '/brands/wright-logo.png' );
}
add_action( 'customize_register', 'coffsope_customize_register' );

// ---------------------------------------------------------------------------
// Customizer helper functions
// ---------------------------------------------------------------------------

function coffsope_phone( $store ) {
	$defaults = [
		'urunga' => '(02) 6655 6411',
		'coffs'  => '(02) 5671 0914',
	];
	return get_theme_mod( "coffsope_{$store}_phone", $defaults[ $store ] ?? '' );
}

function coffsope_phone_link( $store ) {
	return 'tel:' . preg_replace( '/[^0-9]/', '', coffsope_phone( $store ) );
}

function coffsope_email() {
	return get_theme_mod( 'coffsope_coffs_email', 'sales@coffsope.com.au' );
}

function coffsope_facebook( $store ) {
	$defaults = [
		'urunga' => 'https://www.facebook.com/profile.php?id=100076225634075',
		'coffs'  => 'https://www.facebook.com/coffsharbouroutdoorpowerequipment',
	];
	return get_theme_mod( "coffsope_facebook_{$store}", $defaults[ $store ] ?? '' );
}
