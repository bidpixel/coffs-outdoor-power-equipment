(function () {
	'use strict';

	// ── Mobile nav ──────────────────────────────────────────
	const toggle    = document.querySelector('.nav-toggle');
	const mobileNav = document.querySelector('.mobile-nav');

	if (toggle && mobileNav) {
		toggle.addEventListener('click', function () {
			const expanded = this.getAttribute('aria-expanded') === 'true';
			this.setAttribute('aria-expanded', String(!expanded));
			mobileNav.classList.toggle('is-open', !expanded);
			document.body.classList.toggle('nav-open', !expanded);
		});

		// Close on outside click
		document.addEventListener('click', function (e) {
			if (!toggle.contains(e.target) && !mobileNav.contains(e.target)) {
				toggle.setAttribute('aria-expanded', 'false');
				mobileNav.classList.remove('is-open');
				document.body.classList.remove('nav-open');
			}
		});

		// Close on Escape
		document.addEventListener('keydown', function (e) {
			if (e.key === 'Escape') {
				toggle.setAttribute('aria-expanded', 'false');
				mobileNav.classList.remove('is-open');
				document.body.classList.remove('nav-open');
				toggle.focus();
			}
		});
	}

	// ── Phone dropdown ──────────────────────────────────────
	const phoneToggle = document.querySelector('.phone-dropdown__toggle');
	const phoneMenu   = document.querySelector('.phone-dropdown__menu');

	if (phoneToggle && phoneMenu) {
		phoneToggle.addEventListener('click', function (e) {
			e.stopPropagation();
			const expanded = this.getAttribute('aria-expanded') === 'true';
			this.setAttribute('aria-expanded', String(!expanded));
			phoneMenu.classList.toggle('is-open', !expanded);
		});

		// Close on outside click
		document.addEventListener('click', function (e) {
			if (!phoneToggle.contains(e.target) && !phoneMenu.contains(e.target)) {
				phoneToggle.setAttribute('aria-expanded', 'false');
				phoneMenu.classList.remove('is-open');
			}
		});

		// Close on Escape
		document.addEventListener('keydown', function (e) {
			if (e.key === 'Escape' && phoneMenu.classList.contains('is-open')) {
				phoneToggle.setAttribute('aria-expanded', 'false');
				phoneMenu.classList.remove('is-open');
				phoneToggle.focus();
			}
		});
	}

	// ── Floating call button (mobile) ───────────────────────
	const floatingBtn  = document.querySelector('.floating-call__btn');
	const floatingMenu = document.querySelector('.floating-call__menu');

	if (floatingBtn && floatingMenu) {
		floatingBtn.addEventListener('click', function (e) {
			e.stopPropagation();
			const expanded = this.getAttribute('aria-expanded') === 'true';
			this.setAttribute('aria-expanded', String(!expanded));
			floatingMenu.classList.toggle('is-open', !expanded);
		});

		document.addEventListener('click', function (e) {
			if (!floatingBtn.contains(e.target) && !floatingMenu.contains(e.target)) {
				floatingBtn.setAttribute('aria-expanded', 'false');
				floatingMenu.classList.remove('is-open');
			}
		});

		document.addEventListener('keydown', function (e) {
			if (e.key === 'Escape' && floatingMenu.classList.contains('is-open')) {
				floatingBtn.setAttribute('aria-expanded', 'false');
				floatingMenu.classList.remove('is-open');
				floatingBtn.focus();
			}
		});
	}

	// ── Scroll-aware header ─────────────────────────────────
	const header = document.querySelector('.site-header');
	const brandsJumpNav = document.querySelector('.brands-jump-nav');
	if (header) {
		function updateJumpNav(scrolled) {
			if (brandsJumpNav) {
				const adminBar = document.getElementById('wpadminbar');
				const adminBarHeight = adminBar ? adminBar.offsetHeight : 0;
				const headerHeight = scrolled ? 72 : 120;
				brandsJumpNav.style.top = (adminBarHeight + headerHeight) + 'px';
			}
		}
		window.addEventListener('scroll', function () {
			const scrolled = window.scrollY > 40;
			header.classList.toggle('is-scrolled', scrolled);
			updateJumpNav(scrolled);
		}, { passive: true });
		// Set correct position on load
		updateJumpNav(false);
	}

	// ── Contact form ────────────────────────────────────────
	const contactForm = document.querySelector('.js-contact-form');
	if (contactForm) {
		contactForm.addEventListener('submit', async function (e) {
			e.preventDefault();

			const btn     = this.querySelector('button[type="submit"]');
			const message = this.querySelector('.form-message');
			const data    = new FormData(this);
			data.append('action', 'coffsope_contact');
			data.append('nonce', coffsopeData.nonce);

			btn.disabled    = true;
			btn.classList.add('is-loading');
			btn.setAttribute('aria-busy', 'true');
			btn.textContent = 'Sending…';
			if (message) { message.className = 'form-message'; message.textContent = ''; }

			try {
				const res  = await fetch(coffsopeData.ajaxUrl, { method: 'POST', body: data });
				const json = await res.json();

				if (json.success) {
					if (message) {
						message.className   = 'form-message success';
						message.textContent = json.data.message;
					}
					contactForm.reset();
				} else {
					if (message) {
						message.className   = 'form-message error';
						message.textContent = json.data.message || 'An error occurred. Please try again.';
					}
				}
			} catch {
				if (message) {
					message.className   = 'form-message error';
					message.textContent = 'An error occurred. Please call us directly.';
				}
			} finally {
				btn.disabled    = false;
				btn.classList.remove('is-loading');
				btn.removeAttribute('aria-busy');
				btn.textContent = 'Send message';
			}
		});
	}

	// ── Mobile nav sub-menus ─────────────────────────────────
	document.querySelectorAll('.mobile-nav__toggle').forEach(function (btn) {
		btn.addEventListener('click', function () {
			const sub = this.nextElementSibling;
			if (!sub) return;
			const open = sub.classList.contains('is-open');
			sub.classList.toggle('is-open', !open);
			this.setAttribute('aria-expanded', String(!open));
		});
	});

	// ── Scroll-reveal ─────────────────────────────────────
	const revealTargets = document.querySelectorAll(
		'.section-header, .store-card, .product-card, .brand-logo, .reviews__carousel, ' +
		'.servicing-preview__image, .servicing-preview__content, ' +
		'.about-preview .section-header, .about-preview p, ' +
		'.footer-cta h2, .footer-cta p'
	);

	if (revealTargets.length && 'IntersectionObserver' in window) {
		revealTargets.forEach(function (el) { el.classList.add('reveal'); });

		const revealObserver = new IntersectionObserver(function (entries) {
			entries.forEach(function (entry) {
				if (entry.isIntersecting) {
					entry.target.classList.add('is-visible');
					revealObserver.unobserve(entry.target);
				}
			});
		}, { threshold: 0.12 });

		// Stagger children within grid containers
		document.querySelectorAll('.stores__grid, .products__grid, .brands__grid').forEach(function (grid) {
			Array.from(grid.children).forEach(function (child, i) {
				child.style.setProperty('--delay', (i * 80) + 'ms');
			});
		});

		revealTargets.forEach(function (el) { revealObserver.observe(el); });
	}

	// ── Reviews carousel ──────────────────────────────────
	(function () {
		var wrap = document.querySelector('.reviews__carousel');
		if (!wrap) return;

		var track    = wrap.querySelector('.reviews__track');
		var cards    = Array.from(track.querySelectorAll('.review-card'));
		var prevBtn  = wrap.querySelector('.reviews__btn--prev');
		var nextBtn  = wrap.querySelector('.reviews__btn--next');
		var dotsWrap = document.querySelector('.reviews__dots');
		var current  = 0;
		var autoTimer;

		function slidesVisible() {
			return window.innerWidth >= 1024 ? 3 : window.innerWidth >= 640 ? 2 : 1;
		}

		function maxIndex() {
			return Math.max(0, cards.length - slidesVisible());
		}

		function goTo(n) {
			current = Math.max(0, Math.min(n, maxIndex()));
			track.style.transform = 'translateX(-' + cards[current].offsetLeft + 'px)';
			prevBtn.disabled = current === 0;
			nextBtn.disabled = current === maxIndex();
			dotsWrap.querySelectorAll('.reviews__dot').forEach(function (d, i) {
				d.classList.toggle('is-active', i === current);
				d.setAttribute('aria-selected', String(i === current));
			});
		}

		// Build dots
		cards.forEach(function (_, i) {
			var dot = document.createElement('button');
			dot.className = 'reviews__dot';
			dot.setAttribute('role', 'tab');
			dot.setAttribute('aria-label', 'Go to review ' + (i + 1));
			dot.addEventListener('click', function () { goTo(i); resetAuto(); });
			dotsWrap.appendChild(dot);
		});

		prevBtn.addEventListener('click', function () { goTo(current - 1); resetAuto(); });
		nextBtn.addEventListener('click', function () { goTo(current + 1); resetAuto(); });

		function startAuto() {
			autoTimer = setInterval(function () {
				goTo(current >= maxIndex() ? 0 : current + 1);
			}, 3000);
		}
		function resetAuto() { clearInterval(autoTimer); startAuto(); }

		wrap.addEventListener('mouseenter', function () { clearInterval(autoTimer); });
		wrap.addEventListener('mouseleave', startAuto);
		wrap.addEventListener('focusin',    function () { clearInterval(autoTimer); });
		wrap.addEventListener('focusout',   startAuto);

		var resizeTimer;
		window.addEventListener('resize', function () {
			clearTimeout(resizeTimer);
			resizeTimer = setTimeout(function () { goTo(Math.min(current, maxIndex())); }, 200);
		});

		goTo(0);
		startAuto();
	}());

	// ── Scroll-to-top ─────────────────────────────────────
	const scrollTopBtn = document.querySelector('.scroll-top');
	if (scrollTopBtn) {
		window.addEventListener('scroll', function () {
			scrollTopBtn.classList.toggle('is-visible', window.scrollY > 400);
		}, { passive: true });

		scrollTopBtn.addEventListener('click', function () {
			window.scrollTo({ top: 0, behavior: 'smooth' });
		});
	}

})();
