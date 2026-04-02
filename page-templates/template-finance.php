<?php
/**
 * Template Name: Finance
 */
get_header();
?>

<div class="page-hero">
	<div class="container">
		<h1><?php echo esc_html( get_theme_mod( 'finance_h1', 'Finance calculator' ) ); ?></h1>
		<p class="page-hero__intro"><?php echo esc_html( get_theme_mod( 'finance_intro', "Thinking about spreading the cost of your next purchase? Use the calculator below to estimate repayments. Come in and talk to us in store to discuss what's available for your situation." ) ); ?></p>
	</div>
</div>

<section class="section-pad">
	<div class="container">
		<div class="finance-embed">
			<iframe src="https://app.finapps.net.au/calculator/iframe/north-coast-outdoor-power-equipment-pty-ltd" width="100%" height="1166" frameborder="0" scrolling="no" style="border:none;max-width:100%;overflow:hidden;" loading="lazy" title="Finance Calculator"></iframe>
		</div>
	</div>
</section>

<?php get_footer(); ?>
