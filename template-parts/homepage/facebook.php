<?php
$page_url = 'https://www.facebook.com/coffsharbouroutdoorpowerequipment';
$posts    = coffsope_facebook_posts( 5 );
?>
<section class="facebook-feed section-pad">
	<div class="container">

		<div class="section-header section-header--center">
			<span class="section-label">Latest from the team</span>
			<h2 class="section-heading">What's happening in store.</h2>
			<p class="section-intro">New stock arrivals, jobs through the workshop, and the odd bit of advice. Follow us on Facebook.</p>
		</div>

		<?php if ( ! empty( $posts ) ) : ?>
			<div class="facebook-feed__row">
				<?php foreach ( $posts as $post ) :
					$message = $post['message'] ?? ( $post['story'] ?? '' );
					$image   = $post['full_picture'] ?? '';
					$link    = $post['permalink_url'] ?? $page_url;
					$time    = isset( $post['created_time'] ) ? strtotime( $post['created_time'] ) : false;

					if ( ! $message && ! $image ) {
						continue;
					}

					$excerpt = $message ? wp_trim_words( $message, 28, '…' ) : '';
				?>
					<a class="fb-post" href="<?php echo esc_url( $link ); ?>" target="_blank" rel="noopener">
						<?php if ( $image ) : ?>
							<div class="fb-post__image">
								<img src="<?php echo esc_url( $image ); ?>" alt="" loading="lazy">
							</div>
						<?php endif; ?>
						<div class="fb-post__body">
							<?php if ( $time ) : ?>
								<time class="fb-post__date" datetime="<?php echo esc_attr( gmdate( 'c', $time ) ); ?>"><?php echo esc_html( date_i18n( 'j M Y', $time ) ); ?></time>
							<?php endif; ?>
							<?php if ( $excerpt ) : ?>
								<p class="fb-post__text"><?php echo esc_html( $excerpt ); ?></p>
							<?php endif; ?>
							<span class="fb-post__more">View on Facebook
								<svg width="16" height="16" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M7 17L17 7M9 7h8v8" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
							</span>
						</div>
					</a>
				<?php endforeach; ?>
			</div>
		<?php endif; ?>

		<div class="facebook-feed__cta">
			<a class="btn btn--primary" href="<?php echo esc_url( $page_url ); ?>" target="_blank" rel="noopener">
				<svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M22 12a10 10 0 1 0-11.56 9.88v-6.99H7.9V12h2.54V9.8c0-2.5 1.49-3.89 3.77-3.89 1.09 0 2.24.2 2.24.2v2.46h-1.26c-1.24 0-1.63.77-1.63 1.56V12h2.77l-.44 2.89h-2.33v6.99A10 10 0 0 0 22 12z"/></svg>
				Visit our Facebook page
			</a>
		</div>

	</div>
</section>
