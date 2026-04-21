<?php
$theme_img        = get_template_directory_uri() . '/assets/images/brands/';
$logo_stihl       = get_theme_mod( 'brand_logo_stihl',       $theme_img . 'stihl-logo.png' );
$logo_honda       = get_theme_mod( 'brand_logo_honda',       $theme_img . 'honda-power-equipment-logo.png' );
$logo_cox         = get_theme_mod( 'brand_logo_cox',         $theme_img . 'cox-logo.png' );
$logo_ariens      = get_theme_mod( 'brand_logo_ariens',      $theme_img . 'ariens-logo.avif' );
$logo_gravely     = get_theme_mod( 'brand_logo_gravely',     $theme_img . 'gravely-logo.webp' );
$logo_kress       = get_theme_mod( 'brand_logo_kress',       $theme_img . 'kress-logo.png' );
$logo_greenfield  = get_theme_mod( 'brand_logo_greenfield',  $theme_img . 'greenfield-logo.png' );
$logo_spika       = get_theme_mod( 'brand_logo_spika',       $theme_img . 'spika-logo.png' );
$logo_supaswift   = get_theme_mod( 'brand_logo_supaswift',   $theme_img . 'supaswift-logo.webp' );
$logo_wright      = get_theme_mod( 'brand_logo_wright',      $theme_img . 'wright-logo.png' );
$logo_tym         = get_theme_mod( 'brand_logo_tym',         $theme_img . 'tym-tractors-logo.png' );
?>

<section class="brands section-pad">
	<div class="container">

		<div class="section-header section-header--center">
			<span class="section-label"><?php echo esc_html( get_theme_mod( 'hp_brands_label', 'Our brands' ) ); ?></span>
			<h2 class="section-heading"><?php echo esc_html( get_theme_mod( 'hp_brands_heading', 'Brands worth trusting.' ) ); ?></h2>
			<p class="section-intro"><?php echo esc_html( get_theme_mod( 'hp_brands_intro', 'As an authorised dealer for STIHL and Honda, we can offer genuine advice, genuine parts and genuine backup when you need it. We also stock COX, Ariens, Gravely, Kress, Greenfield, Supaswift and Wright. Quality equipment for every budget and job size.' ) ); ?></p>
		</div>

		<div class="brands__grid">

			<a class="brand-logo" href="<?php echo esc_url( home_url( '/brands#stihl' ) ); ?>" aria-label="STIHL: view products">
				<?php if ( $logo_stihl ) : ?>
					<img src="<?php echo esc_url( $logo_stihl ); ?>" alt="STIHL" loading="lazy">
				<?php else : ?>
					<span style="font-family:var(--font-heading);font-size:1.5rem;font-weight:700;color:var(--color-white);letter-spacing:0.05em;">STIHL</span>
				<?php endif; ?>
			</a>

			<a class="brand-logo" href="<?php echo esc_url( home_url( '/brands#honda' ) ); ?>" aria-label="Honda: view products">
				<?php if ( $logo_honda ) : ?>
					<img src="<?php echo esc_url( $logo_honda ); ?>" alt="Honda" loading="lazy">
				<?php else : ?>
					<span style="font-family:var(--font-heading);font-size:1.5rem;font-weight:700;color:var(--color-white);letter-spacing:0.05em;">HONDA</span>
				<?php endif; ?>
			</a>

			<a class="brand-logo" href="<?php echo esc_url( home_url( '/brands#cox' ) ); ?>" aria-label="COX: view products">
				<?php if ( $logo_cox ) : ?>
					<img src="<?php echo esc_url( $logo_cox ); ?>" alt="COX" loading="lazy">
				<?php else : ?>
					<span style="font-family:var(--font-heading);font-size:1.5rem;font-weight:700;color:var(--color-white);letter-spacing:0.05em;">COX</span>
				<?php endif; ?>
			</a>

			<a class="brand-logo" href="<?php echo esc_url( home_url( '/brands#ariens' ) ); ?>" aria-label="Ariens: view products">
				<?php if ( $logo_ariens ) : ?>
					<img src="<?php echo esc_url( $logo_ariens ); ?>" alt="Ariens" loading="lazy">
				<?php else : ?>
					<span style="font-family:var(--font-heading);font-size:1.5rem;font-weight:700;color:var(--color-white);letter-spacing:0.05em;">ARIENS</span>
				<?php endif; ?>
			</a>

			<a class="brand-logo" href="<?php echo esc_url( home_url( '/brands#gravely' ) ); ?>" aria-label="Gravely: view products">
				<?php if ( $logo_gravely ) : ?>
					<img src="<?php echo esc_url( $logo_gravely ); ?>" alt="Gravely" loading="lazy">
				<?php else : ?>
					<span style="font-family:var(--font-heading);font-size:1.5rem;font-weight:700;color:var(--color-white);letter-spacing:0.05em;">GRAVELY</span>
				<?php endif; ?>
			</a>

			<a class="brand-logo" href="<?php echo esc_url( home_url( '/brands#kress' ) ); ?>" aria-label="Kress: view products">
				<?php if ( $logo_kress ) : ?>
					<img src="<?php echo esc_url( $logo_kress ); ?>" alt="Kress" loading="lazy">
				<?php else : ?>
					<span style="font-family:var(--font-heading);font-size:1.5rem;font-weight:700;color:var(--color-white);letter-spacing:0.05em;">KRESS</span>
				<?php endif; ?>
			</a>

			<a class="brand-logo" href="<?php echo esc_url( home_url( '/brands#greenfield' ) ); ?>" aria-label="Greenfield: view products">
				<?php if ( $logo_greenfield ) : ?>
					<img src="<?php echo esc_url( $logo_greenfield ); ?>" alt="Greenfield" loading="lazy">
				<?php else : ?>
					<span style="font-family:var(--font-heading);font-size:1.5rem;font-weight:700;color:var(--color-white);letter-spacing:0.05em;">GREENFIELD</span>
				<?php endif; ?>
			</a>

			<a class="brand-logo" href="<?php echo esc_url( home_url( '/brands#spika' ) ); ?>" aria-label="Spika: view products">
				<?php if ( $logo_spika ) : ?>
					<img src="<?php echo esc_url( $logo_spika ); ?>" alt="Spika" loading="lazy">
				<?php else : ?>
					<span style="font-family:var(--font-heading);font-size:1.5rem;font-weight:700;color:var(--color-white);letter-spacing:0.05em;">SPIKA</span>
				<?php endif; ?>
			</a>

			<a class="brand-logo" href="<?php echo esc_url( home_url( '/brands#supaswift' ) ); ?>" aria-label="Supaswift: view products">
				<?php if ( $logo_supaswift ) : ?>
					<img src="<?php echo esc_url( $logo_supaswift ); ?>" alt="Supaswift" loading="lazy">
				<?php else : ?>
					<span style="font-family:var(--font-heading);font-size:1.5rem;font-weight:700;color:var(--color-white);letter-spacing:0.05em;">SUPASWIFT</span>
				<?php endif; ?>
			</a>

			<a class="brand-logo" href="<?php echo esc_url( home_url( '/brands#wright' ) ); ?>" aria-label="Wright: view products">
				<?php if ( $logo_wright ) : ?>
					<img src="<?php echo esc_url( $logo_wright ); ?>" alt="Wright" loading="lazy">
				<?php else : ?>
					<span style="font-family:var(--font-heading);font-size:1.5rem;font-weight:700;color:var(--color-white);letter-spacing:0.05em;">WRIGHT</span>
				<?php endif; ?>
			</a>

			<a class="brand-logo" href="<?php echo esc_url( home_url( '/brands#tym' ) ); ?>" aria-label="TYM Tractors: view products">
				<?php if ( $logo_tym ) : ?>
					<img src="<?php echo esc_url( $logo_tym ); ?>" alt="TYM Tractors" loading="lazy">
				<?php else : ?>
					<span style="font-family:var(--font-heading);font-size:1.5rem;font-weight:700;color:var(--color-white);letter-spacing:0.05em;">TYM</span>
				<?php endif; ?>
			</a>

		</div>
	</div>
</section>
