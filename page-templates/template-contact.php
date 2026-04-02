<?php
/**
 * Template Name: Contact
 */
get_header();
?>

<div class="page-hero">
	<div class="container">
		<h1><?php echo esc_html( get_theme_mod( 'contact_h1', 'Get in touch' ) ); ?></h1>
		<p class="page-hero__intro"><?php echo esc_html( get_theme_mod( 'contact_intro', "Whether you've got a question about a product, need a service booked in, or just want some advice on what to buy — we're happy to help. Give us a call, send a message, or come in and see us." ) ); ?></p>
	</div>
</div>

<section class="section-pad">
	<div class="container">
		<div class="contact-grid">

			<div>
				<div class="contact-store">
					<h3>Urunga Chainsaw &amp; Mower</h3>
					<p>1 Marina Crescent, Urunga NSW 2455</p>
					<p>Phone: <a href="<?php echo esc_attr( coffsope_phone_link('urunga') ); ?>"><?php echo esc_html( coffsope_phone('urunga') ); ?></a></p>
					<p>Mon–Fri 8:30am–5:00pm &nbsp;|&nbsp; Sat–Sun Closed</p>
					<a class="btn btn--outline" href="https://maps.app.goo.gl/HjYxUSK3DPKGZTcf7" target="_blank" rel="noopener noreferrer" style="margin-top:1rem;display:inline-flex;font-size:0.875rem;padding:0.6rem 1.25rem;">Get directions</a>
				</div>

				<div class="contact-store">
					<h3>Coffs Harbour Outdoor Power Equipment</h3>
					<p>16 Wakelands Road, Sapphire Beach NSW 2450</p>
					<p>Phone: <a href="<?php echo esc_attr( coffsope_phone_link('coffs') ); ?>"><?php echo esc_html( coffsope_phone('coffs') ); ?></a></p>
					<p>Email: <a href="mailto:<?php echo esc_attr( coffsope_email() ); ?>"><?php echo esc_html( coffsope_email() ); ?></a></p>
					<p>Tue–Fri 8:30am–4:30pm &nbsp;|&nbsp; Sat 9:00am–12:00pm &nbsp;|&nbsp; Mon &amp; Sun Closed</p>
					<a class="btn btn--outline" href="https://maps.app.goo.gl/2i7si1rnu49NJaXr9" target="_blank" rel="noopener noreferrer" style="margin-top:1rem;display:inline-flex;font-size:0.875rem;padding:0.6rem 1.25rem;">Get directions</a>
				</div>
			</div>

			<div>
				<h2 style="font-size:1.75rem;margin-bottom:1.5rem;">Send us a message</h2>
				<form class="contact-form js-contact-form" novalidate>
					<div class="form-message" role="alert" aria-live="polite"></div>

					<div class="form-group">
						<label for="contact-name">Name <span aria-hidden="true">*</span></label>
						<input type="text" id="contact-name" name="name" autocomplete="name" required>
					</div>

					<div class="form-group">
						<label for="contact-phone">Phone</label>
						<input type="tel" id="contact-phone" name="phone" autocomplete="tel">
					</div>

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

					<div class="form-group">
						<label for="contact-message">Message <span aria-hidden="true">*</span></label>
						<textarea id="contact-message" name="message" required></textarea>
					</div>

					<button type="submit" class="btn btn--primary">Send message</button>
				</form>
			</div>

		</div>
	</div>
</section>

<?php get_footer(); ?>
