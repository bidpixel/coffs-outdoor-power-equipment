<?php
/**
 * Template Name: Finance
 */
get_header();
?>

<?php $hero_image = get_theme_mod( 'finance_hero_image', get_template_directory_uri() . '/assets/images/hero/outdoor-power-equipment-store-hero.jpg' ); ?>
<div class="page-hero" style="background-image:url('<?php echo esc_url( $hero_image ); ?>');background-size:cover;background-position:center;position:relative;">
	<div style="position:absolute;inset:0;background:rgba(26,26,26,0.82);"></div>
	<div class="container" style="position:relative;z-index:2;">
		<h1><?php echo esc_html( get_theme_mod( 'finance_h1', 'Finance calculator' ) ); ?></h1>
		<p class="page-hero__intro"><?php echo esc_html( get_theme_mod( 'finance_intro', "Thinking about spreading the cost of your next purchase? Use the calculator below to estimate repayments. Come in and talk to us in store to discuss what's available for your situation." ) ); ?></p>
	</div>
</div>

<?php $theme_img = get_template_directory_uri() . '/assets/images'; ?>
<section class="finance-intro">
	<div class="container">
		<div class="finance-intro__grid">

			<div class="finance-intro__option">
				<div class="finance-intro__logo-wrap">
					<img src="<?php echo esc_url( $theme_img . '/finapps-asset-finance-logo.png' ); ?>" alt="Finapps Asset Finance" class="finance-intro__logo" loading="eager">
				</div>
				<h2>Asset finance</h2>
				<p>Finance your next outdoor power equipment purchase through Finapps Asset Finance. Spread the cost over time with competitive rates and a straightforward approval process. Use the calculator below to estimate repayments, then come in and talk to us in store.</p>
				<ul class="finance-intro__list">
					<li>Flexible repayment terms</li>
					<li>Competitive interest rates</li>
					<li>Fast approval process</li>
					<li>Available on most equipment purchases</li>
				</ul>
			</div>

			<div class="finance-intro__divider" aria-hidden="true"></div>

			<div class="finance-intro__option">
				<div class="finance-intro__logo-wrap">
					<img src="<?php echo esc_url( $theme_img . '/afterpay-logo.png' ); ?>" alt="Afterpay" class="finance-intro__logo finance-intro__logo--afterpay" loading="eager">
				</div>
				<h2>Buy now, pay later</h2>
				<p>Split your purchase into four equal fortnightly payments with Afterpay — no interest, no waiting. Available in store on eligible purchases. Simply ask one of our team members at the time of purchase.</p>
				<ul class="finance-intro__list">
					<li>Four fortnightly payments</li>
					<li>No interest charged</li>
					<li>Instant approval in store</li>
					<li>Available on eligible purchases</li>
				</ul>
			</div>

		</div>
	</div>
</section>

<section class="section-pad finance-calculator">
	<div class="container">
		<div class="section-header section-header--center" style="margin-bottom:2rem;">
			<span class="section-label">Finapps Asset Finance</span>
			<h2 class="section-heading" style="color:var(--color-black);">Finance calculator</h2>
			<p style="color:var(--color-charcoal);max-width:55ch;margin-inline:auto;">Enter the purchase amount and preferred term to estimate your repayments. Come in and see us to get the process started.</p>
		</div>
		<div class="finance-embed">
			<iframe src="https://app.finapps.net.au/calculator/iframe/north-coast-outdoor-power-equipment-pty-ltd" width="100%" height="1166" frameborder="0" scrolling="no" style="border:none;max-width:100%;overflow:hidden;" loading="lazy" title="Finance Calculator"></iframe>
		</div>
	</div>
</section>

<?php get_footer(); ?>
