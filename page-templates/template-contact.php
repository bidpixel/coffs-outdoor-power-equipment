<?php
/**
 * Template Name: Contact
 */
get_header();
?>

<?php $hero_image = get_theme_mod( 'contact_hero_image', get_template_directory_uri() . '/assets/images/gallery/outdoor-power-equipment-store-coffs-coast-3.jpg' ); ?>
<div class="page-hero" style="background-image:url('<?php echo esc_url( $hero_image ); ?>');background-size:cover;background-position:center;position:relative;">
	<div style="position:absolute;inset:0;background:rgba(26,26,26,0.82);"></div>
	<div class="container" style="position:relative;z-index:2;">
		<h1><?php echo esc_html( get_theme_mod( 'contact_h1', 'Get in touch' ) ); ?></h1>
		<p class="page-hero__intro"><?php echo esc_html( get_theme_mod( 'contact_intro', "Whether you've got a question about a product, need a service booked in, or just want some advice on what to buy. We're happy to help. Give us a call, send a message, or come in and see us." ) ); ?></p>
	</div>
</div>

<section class="section-pad">
	<div class="container">

		<!-- Store cards -->
		<div class="contact-stores">

			<article class="contact-store-card">
				<div class="contact-store-card__image">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/stores/urunga-chainsaw-mower-store-front.jpg' ); ?>" alt="Urunga Chainsaw and Mower store" loading="lazy">
				</div>
				<div class="contact-store-card__body">
					<div class="contact-store-card__logo">
						<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logos/urunga-chainsaw-mower-logo.webp' ); ?>" alt="Urunga Chainsaw and Mower logo">
					</div>
					<div class="contact-store-card__info">
						<h3>Urunga Chainsaw &amp; Mower</h3>
						<p>Lot 1/2 Marina Crescent, Urunga NSW 2455</p>
						<p>Phone: <a href="<?php echo esc_attr( coffsope_phone_link('urunga') ); ?>"><?php echo esc_html( coffsope_phone('urunga') ); ?></a></p>
						<p>Email: <a href="mailto:enquiries@urungachainsawandmower.com.au">enquiries@urungachainsawandmower.com.au</a></p>
						<p>Mon–Fri 8:30am–5:00pm &nbsp;|&nbsp; Sat–Sun Closed</p>
						<div class="contact-store-card__actions">
							<a class="btn btn--primary contact-store-card__btn" href="<?php echo esc_attr( coffsope_phone_link('urunga') ); ?>">Call now</a>
							<a class="btn btn--outline contact-store-card__btn" href="https://maps.app.goo.gl/HjYxUSK3DPKGZTcf7" target="_blank" rel="noopener noreferrer">Get directions</a>
							<a class="store-social-link" href="<?php echo esc_url( coffsope_facebook('urunga') ); ?>" target="_blank" rel="noopener noreferrer" aria-label="Facebook: Urunga Chainsaw &amp; Mower">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"/></svg>
							</a>
						</div>
					</div>
				</div>
			</article>

			<article class="contact-store-card">
				<div class="contact-store-card__image">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/stores/coffs-harbour-outdoor-power-equipment-store-front.jpg' ); ?>" alt="Coffs Harbour Outdoor Power Equipment store" loading="lazy">
				</div>
				<div class="contact-store-card__body">
					<div class="contact-store-card__logo">
						<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logos/coffs-harbour-outdoor-power-equipment-logo.webp' ); ?>" alt="Coffs Harbour Outdoor Power Equipment logo">
					</div>
					<div class="contact-store-card__info">
						<h3>Coffs Harbour Outdoor Power Equipment</h3>
						<p>16 Wakelands Road, Sapphire Beach NSW 2450</p>
						<p>Phone: <a href="<?php echo esc_attr( coffsope_phone_link('coffs') ); ?>"><?php echo esc_html( coffsope_phone('coffs') ); ?></a></p>
						<p>Email: <a href="mailto:<?php echo esc_attr( coffsope_email() ); ?>"><?php echo esc_html( coffsope_email() ); ?></a></p>
						<p>Tue–Fri 8:30am–4:30pm &nbsp;|&nbsp; Sat 9:00am–12:00pm &nbsp;|&nbsp; Mon &amp; Sun Closed</p>
						<div class="contact-store-card__actions">
							<a class="btn btn--primary contact-store-card__btn" href="<?php echo esc_attr( coffsope_phone_link('coffs') ); ?>">Call now</a>
							<a class="btn btn--outline contact-store-card__btn" href="https://maps.app.goo.gl/2i7si1rnu49NJaXr9" target="_blank" rel="noopener noreferrer">Get directions</a>
							<a class="store-social-link" href="<?php echo esc_url( coffsope_facebook('coffs') ); ?>" target="_blank" rel="noopener noreferrer" aria-label="Facebook: Coffs Harbour Outdoor Power Equipment">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"/></svg>
							</a>
						</div>
					</div>
				</div>
			</article>

		</div>

		<!-- Contact form -->
		<div class="contact-form-wrap">
			<h2 style="font-size:1.75rem;margin-bottom:1.5rem;">Send us a message</h2>
			<form class="contact-form js-contact-form" novalidate>
				<div class="form-message" role="alert" aria-live="polite"></div>

				<div class="form-row">
					<div class="form-group">
						<label for="contact-name">Name <span aria-hidden="true">*</span></label>
						<input type="text" id="contact-name" name="name" autocomplete="name" required>
					</div>

					<div class="form-group">
						<label for="contact-phone">Phone</label>
						<input type="tel" id="contact-phone" name="phone" autocomplete="tel">
					</div>
				</div>

				<div class="form-row">
					<div class="form-group">
						<label for="contact-email">Email <span aria-hidden="true">*</span></label>
						<input type="email" id="contact-email" name="email" autocomplete="email" required>
					</div>

					<div class="form-group">
						<label for="contact-store">Which store?</label>
						<select id="contact-store" name="store">
							<option value="Urunga">Urunga Chainsaw &amp; Mower</option>
							<option value="Coffs Harbour">Coffs Harbour Outdoor Power Equipment</option>
							<option value="General">General enquiry</option>
						</select>
					</div>
				</div>

				<div class="form-group">
					<label for="contact-message">Message <span aria-hidden="true">*</span></label>
					<textarea id="contact-message" name="message" required></textarea>
				</div>

				<button type="submit" class="btn btn--primary">Send message</button>
			</form>
		</div>

	</div>
</section>

<?php get_footer(); ?>
