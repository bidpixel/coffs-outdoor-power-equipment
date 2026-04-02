</main>

<footer class="site-footer" role="contentinfo">

	<div class="site-footer__main">
		<div class="container">
			<div class="site-footer__grid">

				<div class="site-footer__col">
					<div class="site-footer__logo">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="Home">
							<img
								src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logos/coffs-harbour-outdoor-power-equipment-logo.webp' ); ?>"
								alt="Coffs Harbour Outdoor Power Equipment"
								width="315"
								height="90"
								loading="lazy"
							>
							<img
								src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logos/urunga-chainsaw-mower-logo.webp' ); ?>"
								alt="Urunga Chainsaw &amp; Mower"
								width="315"
								height="90"
								loading="lazy"
							>
						</a>
					</div>
					<p class="site-footer__about">Urunga Chainsaw &amp; Mower and Coffs Harbour Outdoor Power Equipment — locally owned outdoor power equipment specialists serving the Coffs Coast for over 30 years.</p>
					<div class="footer-social">
						<a href="<?php echo esc_url( coffsope_facebook('urunga') ); ?>" target="_blank" rel="noopener noreferrer" aria-label="Facebook — Urunga Chainsaw &amp; Mower">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"/></svg>
						</a>
						<a href="<?php echo esc_url( coffsope_facebook('coffs') ); ?>" target="_blank" rel="noopener noreferrer" aria-label="Facebook — Coffs Harbour Outdoor Power Equipment">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"/></svg>
						</a>
					</div>
				</div>

				<div class="site-footer__col">
					<h3 class="site-footer__col-heading">Urunga store</h3>
					<div class="footer-store-detail">
						<span>1 Marina Crescent, Urunga NSW 2455</span>
						<a href="<?php echo esc_attr( coffsope_phone_link('urunga') ); ?>"><?php echo esc_html( coffsope_phone('urunga') ); ?></a>
						<span>Mon–Fri: 8:30am–5:00pm</span>
						<span>Sat–Sun: Closed</span>
					</div>
					<a href="https://maps.app.goo.gl/HjYxUSK3DPKGZTcf7" target="_blank" rel="noopener noreferrer" class="btn btn--outline" style="font-size:0.875rem;padding:0.6rem 1.25rem;">Get directions</a>
				</div>

				<div class="site-footer__col">
					<h3 class="site-footer__col-heading">Coffs Harbour store</h3>
					<div class="footer-store-detail">
						<span>16 Wakelands Road, Sapphire Beach NSW 2450</span>
						<a href="<?php echo esc_attr( coffsope_phone_link('coffs') ); ?>"><?php echo esc_html( coffsope_phone('coffs') ); ?></a>
						<span>Tue–Fri: 8:30am–4:30pm</span>
						<span>Sat: 9:00am–12:00pm</span>
						<span>Mon &amp; Sun: Closed</span>
					</div>
					<a href="https://maps.app.goo.gl/2i7si1rnu49NJaXr9" target="_blank" rel="noopener noreferrer" class="btn btn--outline" style="font-size:0.875rem;padding:0.6rem 1.25rem;">Get directions</a>
				</div>

				<div class="site-footer__col">
					<h3 class="site-footer__col-heading">Quick links</h3>
					<ul class="footer-nav-list">
						<li><a href="<?php echo esc_url( home_url( '/products' ) ); ?>">Products</a></li>
						<li><a href="<?php echo esc_url( home_url( '/brands' ) ); ?>">Brands</a></li>
						<li><a href="<?php echo esc_url( home_url( '/servicing' ) ); ?>">Servicing</a></li>
						<li><a href="<?php echo esc_url( home_url( '/contact' ) ); ?>">Contact</a></li>
						<li><a href="<?php echo esc_url( home_url( '/finance' ) ); ?>">Finance</a></li>
					</ul>
				</div>

			</div>
		</div>
	</div>

	<div class="site-footer__bar">
		<div class="container">
			<div class="site-footer__bar-inner">
				<span>&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> Urunga Chainsaw &amp; Mower | ABN 15 654 044 890</span>
				<span>Site by <a href="https://noomalogic.com" target="_blank" rel="noopener noreferrer" style="color:var(--color-orange);">Nooma Logic</a></span>
			</div>
		</div>
	</div>

</footer>

<button class="scroll-top" aria-label="Back to top">
	<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="18 15 12 9 6 15"/></svg>
</button>

<?php wp_footer(); ?>
</body>
</html>
