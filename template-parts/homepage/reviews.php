<?php
$reviews_bg = get_theme_mod( 'hp_reviews_bg_image', get_template_directory_uri() . '/assets/images/gallery/outdoor-power-equipment-store-coffs-coast-3.jpg' );
$reviews_style = $reviews_bg ? ' style="--reviews-bg: url(' . esc_url( $reviews_bg ) . ')"' : '';
?>
<section class="reviews section-pad"<?php echo $reviews_style; ?>>
	<div class="container">

		<div class="section-header section-header--center">
			<h2 class="section-heading"><?php echo esc_html( get_theme_mod( 'hp_reviews_heading', 'What our customers say' ) ); ?></h2>
		</div>

		<div class="reviews__carousel" role="region" aria-label="Customer reviews">

			<div class="reviews__track">

				<article class="review-card">
					<div class="review-card__stars" aria-label="5 stars">★★★★★</div>
					<p class="review-card__text"><?php echo esc_html( get_theme_mod( 'hp_review_1_text', '"Great local shop with genuine expertise. The team helped me choose the right chainsaw for my property and didn\'t try to upsell me on something I didn\'t need. Will be back for servicing."' ) ); ?></p>
					<span class="review-card__author"><?php echo esc_html( get_theme_mod( 'hp_review_1_author', '— Google reviewer' ) ); ?></span>
				</article>

				<article class="review-card">
					<div class="review-card__stars" aria-label="5 stars">★★★★★</div>
					<p class="review-card__text"><?php echo esc_html( get_theme_mod( 'hp_review_2_text', '"Dropped my mower in for a service and it came back running better than when I bought it. Quick turnaround, fair price, and they explained exactly what they did. Couldn\'t ask for more."' ) ); ?></p>
					<span class="review-card__author"><?php echo esc_html( get_theme_mod( 'hp_review_2_author', '— Google reviewer' ) ); ?></span>
				</article>

				<article class="review-card">
					<div class="review-card__stars" aria-label="5 stars">★★★★★</div>
					<p class="review-card__text"><?php echo esc_html( get_theme_mod( 'hp_review_3_text', '"Bought a STIHL chainsaw here a few years ago and recently brought it in for a sharpen and service. Always reliable, always friendly. Highly recommend for anyone on the Coffs Coast."' ) ); ?></p>
					<span class="review-card__author"><?php echo esc_html( get_theme_mod( 'hp_review_3_author', '— Google reviewer' ) ); ?></span>
				</article>

				<article class="review-card">
					<div class="review-card__stars" aria-label="5 stars">★★★★★</div>
					<p class="review-card__text"><?php echo esc_html( get_theme_mod( 'hp_review_4_text', '"Finally found a mower shop that actually knows their stuff. Went in with a seized ride-on and left with it running perfectly. The mechanic walked me through what went wrong and how to prevent it next time. Genuine service."' ) ); ?></p>
					<span class="review-card__author"><?php echo esc_html( get_theme_mod( 'hp_review_4_author', '— Google reviewer' ) ); ?></span>
				</article>

				<article class="review-card">
					<div class="review-card__stars" aria-label="5 stars">★★★★★</div>
					<p class="review-card__text"><?php echo esc_html( get_theme_mod( 'hp_review_5_text', '"Stocked up on STIHL accessories and the team knew exactly what I needed before I\'d even finished explaining the job. Proper knowledge, not just salespeople. These guys are the real deal."' ) ); ?></p>
					<span class="review-card__author"><?php echo esc_html( get_theme_mod( 'hp_review_5_author', '— Google reviewer' ) ); ?></span>
				</article>

				<article class="review-card">
					<div class="review-card__stars" aria-label="5 stars">★★★★★</div>
					<p class="review-card__text"><?php echo esc_html( get_theme_mod( 'hp_review_6_text', '"I\'ve bought from big hardware chains before but the difference in service here is night and day. Competitive pricing and the after-sales support is second to none. Wouldn\'t go anywhere else."' ) ); ?></p>
					<span class="review-card__author"><?php echo esc_html( get_theme_mod( 'hp_review_6_author', '— Google reviewer' ) ); ?></span>
				</article>

				<article class="review-card">
					<div class="review-card__stars" aria-label="5 stars">★★★★★</div>
					<p class="review-card__text"><?php echo esc_html( get_theme_mod( 'hp_review_7_text', '"Took my brushcutter in after it kept flooding. Had it back the next day, running like new. These blokes clearly know small engines inside out. Wouldn\'t trust anyone else with my gear."' ) ); ?></p>
					<span class="review-card__author"><?php echo esc_html( get_theme_mod( 'hp_review_7_author', '— Google reviewer' ) ); ?></span>
				</article>

				<article class="review-card">
					<div class="review-card__stars" aria-label="5 stars">★★★★★</div>
					<p class="review-card__text"><?php echo esc_html( get_theme_mod( 'hp_review_8_text', '"Drove up from Grafton because a mate recommended them. Worth every kilometre. They had the part I needed in stock and even helped me fit it on the spot. Great bunch of people."' ) ); ?></p>
					<span class="review-card__author"><?php echo esc_html( get_theme_mod( 'hp_review_8_author', '— Google reviewer' ) ); ?></span>
				</article>

				<article class="review-card">
					<div class="review-card__stars" aria-label="5 stars">★★★★★</div>
					<p class="review-card__text"><?php echo esc_html( get_theme_mod( 'hp_review_9_text', '"Best place on the coast for outdoor power gear. Picked up a new ride-on and the handover was thorough — they showed me everything, answered all my questions, and followed up a week later to check in. Brilliant."' ) ); ?></p>
					<span class="review-card__author"><?php echo esc_html( get_theme_mod( 'hp_review_9_author', '— Google reviewer' ) ); ?></span>
				</article>

				<article class="review-card">
					<div class="review-card__stars" aria-label="5 stars">★★★★★</div>
					<p class="review-card__text"><?php echo esc_html( get_theme_mod( 'hp_review_10_text', '"Been coming here for years and the service never drops. Honest about what needs doing, never try to oversell, and the prices are fair. Exactly what you want from a local business."' ) ); ?></p>
					<span class="review-card__author"><?php echo esc_html( get_theme_mod( 'hp_review_10_author', '— Google reviewer' ) ); ?></span>
				</article>

			</div>

			<button class="reviews__btn reviews__btn--prev" aria-label="Previous review" disabled>
				<svg width="24" height="24" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M15 18l-6-6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
			</button>
			<button class="reviews__btn reviews__btn--next" aria-label="Next review">
				<svg width="24" height="24" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M9 18l6-6-6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
			</button>

		</div>

		<div class="reviews__dots" role="list" aria-label="Reviews navigation"></div>

	</div>
</section>
