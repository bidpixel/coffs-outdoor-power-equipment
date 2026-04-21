<?php
$theme_img = get_template_directory_uri() . '/assets/images';
?>
<section class="payment-options section-pad--sm">
	<div class="container">

		<div class="section-header section-header--center">
			<span class="section-label">Payment options</span>
			<h2 class="section-heading">Buy now or finance it.</h2>
			<p class="section-intro">Spread the cost with asset finance or split it into four with Afterpay. Use our <a class="payment-options__inline-link" href="<?php echo esc_url( home_url( '/finance' ) ); ?>">finance calculator</a> to estimate repayments before you come in.</p>
		</div>

		<div class="payment-options__items">

			<div class="payment-options__item">
				<div class="payment-options__logo-wrap">
					<img
						class="payment-options__logo"
						src="<?php echo esc_url( $theme_img . '/finapps-asset-finance-logo.png' ); ?>"
						alt="Finapps Asset Finance"
						loading="lazy"
					>
				</div>
				<h3>Asset finance</h3>
				<p>Finance your next purchase through Finapps Asset Finance. Competitive rates, straightforward process. A smart option for larger equipment.</p>
				<a class="btn btn--primary" href="<?php echo esc_url( home_url( '/finance' ) ); ?>">Finance calculator &rarr;</a>
			</div>

			<div class="payment-options__divider" aria-hidden="true"></div>

			<div class="payment-options__item">
				<div class="payment-options__logo-wrap">
					<img
						class="payment-options__logo payment-options__logo--invert"
						src="<?php echo esc_url( $theme_img . '/afterpay-logo.png' ); ?>"
						alt="Afterpay"
						loading="lazy"
					>
				</div>
				<h3>Buy now, pay later</h3>
				<p>Split your purchase into four fortnightly payments with Afterpay. No interest, no waiting. Available in store on eligible purchases.</p>
				<a class="btn btn--primary" href="<?php echo esc_url( home_url( '/contact' ) ); ?>">Ask in store &rarr;</a>
			</div>

		</div>

	</div>
</section>
