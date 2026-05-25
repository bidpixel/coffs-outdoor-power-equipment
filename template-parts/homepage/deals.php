<?php
if ( ! get_theme_mod( 'hp_deals_enabled', true ) ) {
	return;
}

$deals_bg    = get_theme_mod( 'hp_deals_bg_image', get_template_directory_uri() . '/assets/images/gallery/outdoor-power-equipment-store-coffs-coast-3.jpg' );
$deals_style = $deals_bg ? ' style="--deals-bg: url(' . esc_url( $deals_bg ) . ')"' : '';

$coffs_deal_defaults = [
	1 => [
		'image' => get_template_directory_uri() . '/assets/images/products/stihl-chainsaw-coffs-coast-1.jpg',
		'title' => 'STIHL MS 180 chainsaw',
		'blurb' => 'Save on the chainsaw that does the hard yards. In store now.',
	],
	2 => [
		'image' => get_template_directory_uri() . '/assets/images/products/honda-hru216-self-propelled-mower-coffs-coast.jpg',
		'title' => 'Honda HRU216 mower',
		'blurb' => 'The Aussie-favourite self-propelled mower. Genuine Honda quality.',
	],
	3 => [
		'image' => get_template_directory_uri() . '/assets/images/products/ride-on-mower-lifestyle.jpg',
		'title' => 'COX ride-on package',
		'blurb' => "Ride-on plus a workshop service voucher. While they're available.",
	],
	4 => [
		'image' => get_template_directory_uri() . '/assets/images/products/kress-kr173e-robot-mower.webp',
		'title' => 'Kress robot mower',
		'blurb' => 'Set and forget. Battery-powered, GPS-guided, install included.',
	],
];
?>
<section class="deals section-pad"<?php echo $deals_style; ?>>
	<div class="container">

		<div class="section-header section-header--center">
			<span class="section-label"><?php echo esc_html( get_theme_mod( 'hp_deals_label', 'Hot right now' ) ); ?></span>
			<h2 class="section-heading"><?php echo esc_html( get_theme_mod( 'hp_deals_heading', 'Current deals.' ) ); ?></h2>
			<p class="section-intro"><?php echo esc_html( get_theme_mod( 'hp_deals_intro', 'Limited-time offers on the gear our customers ask for most. Come in store or call to grab one before they go.' ) ); ?></p>
		</div>

		<div class="deals__carousel" role="region" aria-label="Current deals">

			<div class="deals__track">

				<?php for ( $i = 1; $i <= 4; $i++ ) :
					if ( ! get_theme_mod( "hp_deal_{$i}_enabled", true ) ) {
						continue;
					}

					$image = get_theme_mod( "hp_deal_{$i}_image", $coffs_deal_defaults[ $i ]['image'] );
					$title = get_theme_mod( "hp_deal_{$i}_title", $coffs_deal_defaults[ $i ]['title'] );
					$blurb = get_theme_mod( "hp_deal_{$i}_blurb", $coffs_deal_defaults[ $i ]['blurb'] );
					$link  = get_theme_mod( "hp_deal_{$i}_link", '' );

					if ( ! $title && ! $blurb && ! $image ) {
						continue;
					}

					$tag       = $link ? 'a' : 'article';
					$link_attr = $link ? ' href="' . esc_url( $link ) . '"' : '';
				?>

					<<?php echo $tag; ?> class="deal-card deal-card--<?php echo (int) $i; ?>"<?php echo $link_attr; ?>>
						<span class="deal-card__badge">Deal <?php echo (int) $i; ?></span>

						<?php if ( $image ) : ?>
							<div class="deal-card__image">
								<img src="<?php echo esc_url( $image ); ?>" alt="<?php echo esc_attr( $title ); ?>" loading="lazy">
							</div>
						<?php endif; ?>

						<div class="deal-card__body">
							<?php if ( $title ) : ?>
								<h3 class="deal-card__title"><?php echo esc_html( $title ); ?></h3>
							<?php endif; ?>
							<?php if ( $blurb ) : ?>
								<p class="deal-card__blurb"><?php echo esc_html( $blurb ); ?></p>
							<?php endif; ?>
							<?php if ( $link ) : ?>
								<span class="deal-card__cta">See the deal
									<svg width="16" height="16" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
								</span>
							<?php endif; ?>
						</div>
					</<?php echo $tag; ?>>

				<?php endfor; ?>

			</div>

			<button class="deals__btn deals__btn--prev" aria-label="Previous deal" disabled>
				<svg width="24" height="24" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M15 18l-6-6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
			</button>
			<button class="deals__btn deals__btn--next" aria-label="Next deal">
				<svg width="24" height="24" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M9 18l6-6-6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
			</button>

		</div>

		<div class="deals__dots" role="list" aria-label="Deals navigation"></div>

		<div class="deals__cta">
			<h3 class="deals__cta-heading"><?php echo esc_html( get_theme_mod( 'hp_deals_cta_heading', 'Call now to secure your deal' ) ); ?></h3>
			<div class="deals__cta-buttons">
				<a class="btn btn--primary deals__cta-btn" href="<?php echo esc_url( coffsope_phone_link( 'urunga' ) ); ?>">
					<svg width="20" height="20" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.13.96.37 1.9.72 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.91.35 1.85.59 2.81.72A2 2 0 0 1 22 16.92z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
					<span>
						<span class="deals__cta-store">Urunga</span>
						<span class="deals__cta-num"><?php echo esc_html( coffsope_phone( 'urunga' ) ); ?></span>
					</span>
				</a>
				<a class="btn btn--primary deals__cta-btn" href="<?php echo esc_url( coffsope_phone_link( 'coffs' ) ); ?>">
					<svg width="20" height="20" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.13.96.37 1.9.72 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.91.35 1.85.59 2.81.72A2 2 0 0 1 22 16.92z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
					<span>
						<span class="deals__cta-store">Coffs Harbour</span>
						<span class="deals__cta-num"><?php echo esc_html( coffsope_phone( 'coffs' ) ); ?></span>
					</span>
				</a>
			</div>
		</div>

	</div>
</section>
