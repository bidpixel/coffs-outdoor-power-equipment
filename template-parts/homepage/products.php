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

			<a class="product-card" href="<?php echo esc_url( home_url( '/chainsaws' ) ); ?>" style="background-image: url('<?php echo esc_url( coffs_product_img( 'chainsaws-coffs-coast.jpg' ) ); ?>')">
				<span class="product-card__label">Chainsaws</span>
			</a>

			<a class="product-card" href="<?php echo esc_url( home_url( '/lawn-mowers' ) ); ?>" style="background-image: url('<?php echo esc_url( coffs_product_img( 'lawn-mowers-coffs-coast.jpg' ) ); ?>')">
				<span class="product-card__label">Lawn mowers</span>
			</a>

			<a class="product-card" href="<?php echo esc_url( home_url( '/ride-on-mowers' ) ); ?>" style="background-image: url('<?php echo esc_url( coffs_product_img( 'ride-on-mowers-coffs-coast.webp' ) ); ?>')">
				<span class="product-card__label">Ride-on mowers</span>
			</a>

			<a class="product-card" href="<?php echo esc_url( home_url( '/zero-turn-mowers' ) ); ?>" style="background-image: url('<?php echo esc_url( coffs_product_img( 'zero-turn-mowers-coffs-coast.webp' ) ); ?>')">
				<span class="product-card__label">Zero turn mowers</span>
			</a>

			<a class="product-card" href="<?php echo esc_url( home_url( '/robot-mowers' ) ); ?>" style="background-image: url('<?php echo esc_url( coffs_product_img( 'robot-mowers-kress-coffs-coast.jpg' ) ); ?>')">
				<span class="product-card__label">Robot mowers</span>
			</a>

			<a class="product-card" href="<?php echo esc_url( home_url( '/brushcutters' ) ); ?>" style="background-image: url('<?php echo esc_url( coffs_product_img( 'brushcutters-stihl-coffs-coast.webp' ) ); ?>')">
				<span class="product-card__label">Brushcutters</span>
			</a>

			<a class="product-card" href="<?php echo esc_url( home_url( '/generators' ) ); ?>" style="background-image: url('<?php echo esc_url( coffs_product_img( 'generators-coffs-coast.jpg' ) ); ?>')">
				<span class="product-card__label">Generators</span>
			</a>

			<a class="product-card" href="<?php echo esc_url( home_url( '/pressure-cleaners' ) ); ?>" style="background-image: url('<?php echo esc_url( coffs_product_img( 'pressure-cleaners-coffs-coast.jpg' ) ); ?>')">
				<span class="product-card__label">Pressure cleaners</span>
			</a>

			<a class="product-card" href="<?php echo esc_url( home_url( '/garden-power-tools' ) ); ?>" style="background-image: url('<?php echo esc_url( coffs_product_img( 'garden-power-tools-hedge-trimmer-coffs-coast.jpg' ) ); ?>')">
				<span class="product-card__label">Garden power tools</span>
			</a>

			<a class="product-card" href="<?php echo esc_url( home_url( '/battery-electric' ) ); ?>" style="background-image: url('<?php echo esc_url( coffs_product_img( 'battery-electric-outdoor-power-equipment-coffs-coast.jpg' ) ); ?>')">
				<span class="product-card__label">Battery &amp; electric</span>
			</a>

		</div>
	</div>
</section>
