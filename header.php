<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<a class="sr-only" href="#main-content">Skip to main content</a>

<header class="site-header" role="banner">
	<div class="container">
		<div class="site-header__inner">

			<a class="site-header__logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="<?php bloginfo( 'name' ); ?>: Home">
				<img
					src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logos/coffs-harbour-outdoor-power-equipment-logo.webp' ); ?>"
					alt="Coffs Harbour Outdoor Power Equipment"
					width="360"
					height="99"
					loading="eager"
				>
				<img
					src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logos/urunga-chainsaw-mower-logo.webp' ); ?>"
					alt="Urunga Chainsaw &amp; Mower"
					width="360"
					height="99"
					loading="eager"
				>
			</a>

			<nav class="primary-nav" role="navigation" aria-label="Primary navigation">
				<ul class="primary-nav__list" role="list">

					<li class="primary-nav__item">
						<a class="primary-nav__link has-children" href="#">Locations</a>
						<ul class="dropdown" aria-label="Locations submenu">
							<li><a href="<?php echo esc_url( home_url( '/urunga' ) ); ?>">Urunga</a></li>
							<li><a href="<?php echo esc_url( home_url( '/coffs-harbour' ) ); ?>">Coffs Harbour</a></li>
						</ul>
					</li>

					<li class="primary-nav__item">
						<a class="primary-nav__link has-children" href="#">Products</a>
						<ul class="dropdown" aria-label="Products submenu">
							<li><a href="<?php echo esc_url( home_url( '/chainsaws' ) ); ?>">Chainsaws</a></li>
							<li><a href="<?php echo esc_url( home_url( '/lawn-mowers' ) ); ?>">Lawn mowers</a></li>
							<li><a href="<?php echo esc_url( home_url( '/ride-on-mowers' ) ); ?>">Ride-on mowers</a></li>
							<li><a href="<?php echo esc_url( home_url( '/zero-turn-mowers' ) ); ?>">Zero-turn mowers</a></li>
							<li><a href="<?php echo esc_url( home_url( '/robot-mowers' ) ); ?>">Robot mowers</a></li>
							<li><a href="<?php echo esc_url( home_url( '/brushcutters' ) ); ?>">Brushcutters</a></li>
							<li><a href="<?php echo esc_url( home_url( '/generators' ) ); ?>">Generators</a></li>
							<li><a href="<?php echo esc_url( home_url( '/pressure-cleaners' ) ); ?>">Pressure cleaners</a></li>
							<li><a href="<?php echo esc_url( home_url( '/water-pumps' ) ); ?>">Water pumps</a></li>
								<li><a href="<?php echo esc_url( home_url( '/battery-electric' ) ); ?>">Battery &amp; electric</a></li>
						</ul>
					</li>

					<li class="primary-nav__item">
						<a class="primary-nav__link has-children" href="<?php echo esc_url( home_url( '/brands' ) ); ?>">Brands</a>
						<ul class="dropdown" aria-label="Brands submenu">
							<li><a href="<?php echo esc_url( home_url( '/brands#stihl' ) ); ?>">STIHL</a></li>
							<li><a href="<?php echo esc_url( home_url( '/brands#honda' ) ); ?>">Honda</a></li>
							<li><a href="<?php echo esc_url( home_url( '/brands#cox' ) ); ?>">COX</a></li>
							<li><a href="<?php echo esc_url( home_url( '/brands#ariens' ) ); ?>">Ariens</a></li>
							<li><a href="<?php echo esc_url( home_url( '/brands#gravely' ) ); ?>">Gravely</a></li>
							<li><a href="<?php echo esc_url( home_url( '/brands#kress' ) ); ?>">Kress</a></li>
							<li><a href="<?php echo esc_url( home_url( '/brands#greenfield' ) ); ?>">Greenfield</a></li>
							<li><a href="<?php echo esc_url( home_url( '/brands#spika' ) ); ?>">Spika</a></li>
							<li><a href="<?php echo esc_url( home_url( '/brands#rato' ) ); ?>">Rato</a></li>
						</ul>
					</li>

					<li class="primary-nav__item">
						<a class="primary-nav__link has-children" href="<?php echo esc_url( home_url( '/servicing' ) ); ?>">Servicing</a>
						<ul class="dropdown" aria-label="Servicing submenu">
							<li><a href="<?php echo esc_url( home_url( '/servicing' ) ); ?>#chainsaw-servicing">Chainsaw servicing</a></li>
							<li><a href="<?php echo esc_url( home_url( '/servicing' ) ); ?>#mower-servicing">Mower servicing</a></li>
							<li><a href="<?php echo esc_url( home_url( '/servicing' ) ); ?>#ride-on-servicing">Ride-on mower servicing</a></li>
							<li><a href="<?php echo esc_url( home_url( '/servicing' ) ); ?>#small-engine-repairs">Small engine repairs</a></li>
						</ul>
					</li>

					<li class="primary-nav__item">
						<a class="primary-nav__link" href="<?php echo esc_url( home_url( '/contact' ) ); ?>">Contact</a>
					</li>

					<li class="primary-nav__item">
						<a class="primary-nav__link" href="<?php echo esc_url( home_url( '/finance' ) ); ?>">Finance</a>
					</li>

				</ul>
			</nav>

			<div class="phone-dropdown">
				<button class="phone-dropdown__toggle" aria-expanded="false" aria-controls="phone-dropdown-menu">
					<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
					Call us
					<span class="phone-dropdown__caret" aria-hidden="true"></span>
				</button>
				<ul class="phone-dropdown__menu" id="phone-dropdown-menu" role="list">
					<li>
						<a href="<?php echo esc_attr( coffsope_phone_link('urunga') ); ?>">
							<strong>Urunga</strong>
							<span><?php echo esc_html( coffsope_phone('urunga') ); ?></span>
						</a>
					</li>
					<li>
						<a href="<?php echo esc_attr( coffsope_phone_link('coffs') ); ?>">
							<strong>Coffs Harbour</strong>
							<span><?php echo esc_html( coffsope_phone('coffs') ); ?></span>
						</a>
					</li>
				</ul>
			</div>

			<button
				class="nav-toggle"
				aria-expanded="false"
				aria-controls="mobile-nav"
				aria-label="Toggle navigation menu"
			>
				<span></span>
				<span></span>
				<span></span>
			</button>

		</div>
	</div>
</header>

<nav class="mobile-nav" id="mobile-nav" aria-label="Mobile navigation">
	<ul class="mobile-nav__list">

		<li>
			<button class="mobile-nav__link mobile-nav__toggle" aria-expanded="false">Locations</button>
			<div class="mobile-nav__sub">
				<a href="<?php echo esc_url( home_url( '/urunga' ) ); ?>">Urunga</a>
				<a href="<?php echo esc_url( home_url( '/coffs-harbour' ) ); ?>">Coffs Harbour</a>
			</div>
		</li>

		<li>
			<button class="mobile-nav__link mobile-nav__toggle" aria-expanded="false">Products</button>
			<div class="mobile-nav__sub">
				<a href="<?php echo esc_url( home_url( '/chainsaws' ) ); ?>">Chainsaws</a>
				<a href="<?php echo esc_url( home_url( '/lawn-mowers' ) ); ?>">Lawn mowers</a>
				<a href="<?php echo esc_url( home_url( '/ride-on-mowers' ) ); ?>">Ride-on mowers</a>
				<a href="<?php echo esc_url( home_url( '/zero-turn-mowers' ) ); ?>">Zero-turn mowers</a>
				<a href="<?php echo esc_url( home_url( '/robot-mowers' ) ); ?>">Robot mowers</a>
				<a href="<?php echo esc_url( home_url( '/brushcutters' ) ); ?>">Brushcutters</a>
				<a href="<?php echo esc_url( home_url( '/generators' ) ); ?>">Generators</a>
				<a href="<?php echo esc_url( home_url( '/pressure-cleaners' ) ); ?>">Pressure cleaners</a>
				<a href="<?php echo esc_url( home_url( '/water-pumps' ) ); ?>">Water pumps</a>
				<a href="<?php echo esc_url( home_url( '/battery-electric' ) ); ?>">Battery &amp; electric</a>
			</div>
		</li>

		<li>
			<button class="mobile-nav__link mobile-nav__toggle" aria-expanded="false">Brands</button>
			<div class="mobile-nav__sub">
				<a href="<?php echo esc_url( home_url( '/brands#stihl' ) ); ?>">STIHL</a>
				<a href="<?php echo esc_url( home_url( '/brands#honda' ) ); ?>">Honda</a>
				<a href="<?php echo esc_url( home_url( '/brands#cox' ) ); ?>">COX</a>
				<a href="<?php echo esc_url( home_url( '/brands#ariens' ) ); ?>">Ariens</a>
				<a href="<?php echo esc_url( home_url( '/brands#gravely' ) ); ?>">Gravely</a>
				<a href="<?php echo esc_url( home_url( '/brands#kress' ) ); ?>">Kress</a>
				<a href="<?php echo esc_url( home_url( '/brands#greenfield' ) ); ?>">Greenfield</a>
				<a href="<?php echo esc_url( home_url( '/brands#spika' ) ); ?>">Spika</a>
				<a href="<?php echo esc_url( home_url( '/brands#rato' ) ); ?>">Rato</a>
			</div>
		</li>

		<li>
			<button class="mobile-nav__link mobile-nav__toggle" aria-expanded="false">Servicing</button>
			<div class="mobile-nav__sub">
				<a href="<?php echo esc_url( home_url( '/servicing' ) ); ?>#chainsaw-servicing">Chainsaw servicing</a>
				<a href="<?php echo esc_url( home_url( '/servicing' ) ); ?>#mower-servicing">Mower servicing</a>
				<a href="<?php echo esc_url( home_url( '/servicing' ) ); ?>#ride-on-servicing">Ride-on mower servicing</a>
				<a href="<?php echo esc_url( home_url( '/servicing' ) ); ?>#small-engine-repairs">Small engine repairs</a>
			</div>
		</li>

<li><a class="mobile-nav__link" href="<?php echo esc_url( home_url( '/contact' ) ); ?>">Contact</a></li>
		<li><a class="mobile-nav__link" href="<?php echo esc_url( home_url( '/finance' ) ); ?>">Finance</a></li>

	</ul>

	<div class="mobile-nav__phones">
		<a class="mobile-nav__phone" href="<?php echo esc_attr( coffsope_phone_link('urunga') ); ?>">
			<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
			Call Urunga: <?php echo esc_html( coffsope_phone('urunga') ); ?>
		</a>
		<a class="mobile-nav__phone" href="<?php echo esc_attr( coffsope_phone_link('coffs') ); ?>">
			<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
			Call Coffs Harbour: <?php echo esc_html( coffsope_phone('coffs') ); ?>
		</a>
	</div>
</nav>

<!-- Floating call button (mobile only) -->
<div class="floating-call" id="floating-call">
	<button class="floating-call__btn" aria-expanded="false" aria-label="Call us">
		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
	</button>
	<div class="floating-call__menu">
		<a class="floating-call__link" href="<?php echo esc_attr( coffsope_phone_link('urunga') ); ?>">
			<strong>Urunga</strong>
			<span><?php echo esc_html( coffsope_phone('urunga') ); ?></span>
		</a>
		<a class="floating-call__link" href="<?php echo esc_attr( coffsope_phone_link('coffs') ); ?>">
			<strong>Coffs Harbour</strong>
			<span><?php echo esc_html( coffsope_phone('coffs') ); ?></span>
		</a>
	</div>
</div>

<main id="main-content">
