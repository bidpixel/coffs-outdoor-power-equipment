<?php
function coffs_product_img( $file ) {
	return get_template_directory_uri() . '/assets/images/products/' . $file;
}
?>
<section id="products" class="products section-pad">
	<div class="container">

		<div class="section-header">
			<span class="section-label"><?php echo esc_html( get_theme_mod( 'hp_products_label', 'What we stock' ) ); ?></span>
			<h2 class="section-heading"><?php echo esc_html( get_theme_mod( 'hp_products_heading', "Whatever the job, we've got the gear." ) ); ?></h2>
			<p class="section-intro"><?php echo esc_html( get_theme_mod( 'hp_products_intro', 'Browse our range of quality outdoor power equipment. From chainsaws and ride-on mowers to generators and pressure cleaners. If you need it for your property, we stock it.' ) ); ?></p>
		</div>

		<div class="products__grid">

			<a class="product-card" href="<?php echo esc_url( home_url( '/chainsaws' ) ); ?>">
				<img class="product-card__img" src="<?php echo esc_url( coffs_product_img( 'chainsaws-coffs-coast.jpg' ) ); ?>" alt="" width="600" height="400" loading="lazy" decoding="async">
				<span class="product-card__label">Chainsaws</span>
			</a>

			<a class="product-card" href="<?php echo esc_url( home_url( '/lawn-mowers' ) ); ?>">
				<img class="product-card__img" src="<?php echo esc_url( coffs_product_img( 'lawn-mowers-coffs-coast.jpg' ) ); ?>" alt="" width="600" height="400" loading="lazy" decoding="async">
				<span class="product-card__label">Lawn mowers</span>
			</a>

			<a class="product-card" href="<?php echo esc_url( home_url( '/ride-on-mowers' ) ); ?>">
				<img class="product-card__img" src="<?php echo esc_url( coffs_product_img( 'ride-on-mowers-coffs-coast.webp' ) ); ?>" alt="" width="600" height="400" loading="lazy" decoding="async">
				<span class="product-card__label">Ride-on mowers</span>
			</a>

			<a class="product-card" href="<?php echo esc_url( home_url( '/zero-turn-mowers' ) ); ?>">
				<img class="product-card__img" src="<?php echo esc_url( coffs_product_img( 'zero-turn-mowers-gravely-coffs-coast.jpg' ) ); ?>" alt="" width="600" height="400" loading="lazy" decoding="async">
				<span class="product-card__label">Zero turn mowers</span>
			</a>

			<a class="product-card" href="<?php echo esc_url( home_url( '/robot-mowers' ) ); ?>">
				<img class="product-card__img" src="<?php echo esc_url( coffs_product_img( 'robot-mowers-kress-coffs-coast.jpg' ) ); ?>" alt="" width="600" height="400" loading="lazy" decoding="async">
				<span class="product-card__label">Robot mowers</span>
			</a>

			<a class="product-card" href="<?php echo esc_url( home_url( '/brushcutters' ) ); ?>">
				<img class="product-card__img" src="<?php echo esc_url( coffs_product_img( 'brushcutters-stihl-coffs-coast.webp' ) ); ?>" alt="" width="600" height="400" loading="lazy" decoding="async">
				<span class="product-card__label">Brushcutters</span>
			</a>

			<a class="product-card" href="<?php echo esc_url( home_url( '/generators' ) ); ?>">
				<img class="product-card__img" src="<?php echo esc_url( coffs_product_img( 'generators-coffs-coast.jpg' ) ); ?>" alt="" width="600" height="400" loading="lazy" decoding="async">
				<span class="product-card__label">Generators</span>
			</a>

			<a class="product-card" href="<?php echo esc_url( home_url( '/pressure-cleaners' ) ); ?>">
				<img class="product-card__img" src="<?php echo esc_url( coffs_product_img( 'pressure-cleaners-coffs-coast.jpg' ) ); ?>" alt="" width="600" height="400" loading="lazy" decoding="async">
				<span class="product-card__label">Pressure cleaners</span>
			</a>

			<a class="product-card" href="<?php echo esc_url( home_url( '/garden-power-tools' ) ); ?>">
				<img class="product-card__img" src="<?php echo esc_url( coffs_product_img( 'garden-power-tools-hedge-trimmer-coffs-coast.jpg' ) ); ?>" alt="" width="600" height="400" loading="lazy" decoding="async">
				<span class="product-card__label">Garden power tools</span>
			</a>

			<a class="product-card" href="<?php echo esc_url( home_url( '/battery-electric' ) ); ?>">
				<img class="product-card__img" src="<?php echo esc_url( coffs_product_img( 'battery-electric-outdoor-power-equipment-coffs-coast.jpg' ) ); ?>" alt="" width="600" height="400" loading="lazy" decoding="async">
				<span class="product-card__label">Battery &amp; electric</span>
			</a>

		</div>
	</div>
</section>
