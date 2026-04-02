<?php
$hero_video = get_template_directory_uri() . '/assets/video/coffs-coast-outdoor-power-equipment-hero.mp4';
$hero_image = get_theme_mod( 'hp_hero_image', get_template_directory_uri() . '/assets/images/hero/outdoor-power-equipment-store-hero.jpg' );
?>

<section class="hero">
	<div class="hero__bg" aria-hidden="true">
		<video
			class="hero__video"
			autoplay
			muted
			loop
			playsinline
			preload="auto"
			poster="<?php echo esc_url( $hero_image ); ?>"
		>
			<source src="<?php echo esc_url( $hero_video ); ?>" type="video/mp4">
		</video>
	</div>

	<div class="container section-pad">
		<div class="hero__content">
			<h1 class="hero__headline">
				<?php echo esc_html( get_theme_mod( 'hp_hero_headline', "The Coffs Coast's home for outdoor power equipment." ) ); ?>
			</h1>
			<p class="hero__subheadline">
				<?php echo esc_html( get_theme_mod( 'hp_hero_subheadline', 'Two locations, 30 years of expertise, and the brands you trust — STIHL, Honda, COX and more.' ) ); ?>
			</p>
			<div class="hero__ctas">
				<a class="btn btn--primary" href="#products"><?php echo esc_html( get_theme_mod( 'hp_hero_cta1', 'View our products' ) ); ?></a>
				<a class="btn btn--outline" href="#stores"><?php echo esc_html( get_theme_mod( 'hp_hero_cta2', 'Find a store' ) ); ?></a>
			</div>
		</div>
	</div>
</section>
