<section id="stores" class="stores section-pad">
	<div class="container">

		<div class="section-header">
			<span class="section-label">Our locations</span>
			<h2 class="section-heading"><?php echo esc_html( get_theme_mod( 'hp_stores_heading', 'Two stores. One team. One standard.' ) ); ?></h2>
		</div>

		<div class="stores__grid">

			<article class="store-card">
				<div class="store-card__image">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/stores/urunga-chainsaw-mower-store-front.jpg' ); ?>" alt="Urunga Chainsaw and Mower store" loading="lazy">
				</div>
				<div class="store-card__body">
					<div class="store-card__logo">
						<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logos/urunga-chainsaw-mower-logo.webp' ); ?>" alt="Urunga Chainsaw and Mower logo">
					</div>
					<div class="store-card__meta">
						<h3 class="store-card__name">Urunga Chainsaw &amp; Mower</h3>
						<span class="store-card__location">Urunga NSW</span>
					</div>
					<a class="btn btn--primary store-card__cta" href="<?php echo esc_url( home_url( '/locations/urunga' ) ); ?>">View store</a>
				</div>
			</article>

			<article class="store-card">
				<div class="store-card__image">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/stores/coffs-harbour-outdoor-power-equipment-store-front.jpg' ); ?>" alt="Coffs Harbour Outdoor Power Equipment store" loading="lazy">
				</div>
				<div class="store-card__body">
					<div class="store-card__logo">
						<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logos/coffs-harbour-outdoor-power-equipment-logo.webp' ); ?>" alt="Coffs Harbour Outdoor Power Equipment logo">
					</div>
					<div class="store-card__meta">
						<h3 class="store-card__name">Coffs Harbour Outdoor Power Equipment</h3>
						<span class="store-card__location">Sapphire Beach NSW</span>
					</div>
					<a class="btn btn--primary store-card__cta" href="<?php echo esc_url( home_url( '/locations/coffs-harbour' ) ); ?>">View store</a>
				</div>
			</article>

		</div>
	</div>
</section>
