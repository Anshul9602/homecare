<!-- Hero -->
<section class="cj-hero cj-hero--home" style="--cj-banner: url('<?= hc_banner() ?>'); --cj-banner-mob: url('<?= hc_banner(true) ?>');">
    <div class="cj-container">
        <div class="cj-hero__grid">
            <div class="cj-hero__content">
                <span class="cj-hero__tag">Trusted Home Nursing &amp; Care Services in Jaipur</span>
                <h1 class="cj-hero__title">Compassionate Care Right at Your <span>Doorstep</span></h1>
                <p class="cj-hero__subtitle">Professional nursing and patient care services at home. Your health, our priority.</p>
                <div class="cj-hero__btns">
                    <a href="<?= site_url('book-now') ?>" class="cj-btn cj-btn--primary">
                        Book a Care
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                    </a>
                    <a href="<?= site_url('services') ?>" class="cj-btn cj-btn--outline cj-btn--explore">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><polygon points="10 8 16 12 10 16 10 8" fill="currentColor" stroke="none"/></svg>
                        Explore Services
                    </a>
                </div>
            </div>
        </div>
    </div>
    <?= view('partials/stats-bar') ?>
</section>

<!-- Our Services Carousel -->
<section class="cj-section cj-home-services cj-section--after-hero">
    <div class="cj-container">
        <div class="cj-heading">
            <h2 class="cj-heading__title">Our Services</h2>
            <div class="cj-heading__line"></div>
        </div>
        <div class="cj-services-carousel">
            <button type="button" class="cj-services-carousel__btn cj-services-carousel__btn--prev" aria-label="Previous services">&lsaquo;</button>
            <div class="cj-services-carousel__track" id="cj-services-track">
                <?php foreach (array_slice(hc_config()->mainServices, 0, 4) as $svc): ?>
                <a href="<?= site_url($svc['slug']) ?>" class="cj-service-slide">
                    <div class="cj-service-slide__media">
                        <img src="<?= hc_photo($svc['image']) ?>" alt="<?= esc($svc['title']) ?>" loading="lazy">
                        <span class="cj-service-slide__icon"><?= hc_icon($svc['icon']) ?></span>
                    </div>
                    <div class="cj-service-slide__body">
                        <h3><?= esc($svc['title']) ?></h3>
                        <p><?= esc($svc['desc']) ?></p>
                        <span class="cj-service-slide__link">Learn More &rarr;</span>
                    </div>
                </a>
                <?php endforeach; ?>
            </div>
            <button type="button" class="cj-services-carousel__btn cj-services-carousel__btn--next" aria-label="Next services">&rsaquo;</button>
        </div>
        <div class="cj-home-services__cta">
            <a href="<?= site_url('services') ?>" class="cj-btn cj-btn--outline">View All Services</a>
        </div>
    </div>
</section>

<!-- Why Choose Us -->
<section class="cj-section cj-section--gray cj-home-why">
    <div class="cj-container cj-home-why__grid">
        <div class="cj-home-why__visual">
            <div class="cj-home-why__circle">
                <img src="<?= hc_why_image() ?>" alt="Care Jaipur caregiver with patient" loading="lazy">
            </div>
        </div>
        <div class="cj-home-why__content">
            <div class="cj-heading cj-heading--left">
                <h2 class="cj-heading__title">Why Families Choose Care Jaipur</h2>
                <div class="cj-heading__line"></div>
            </div>
            <div class="cj-home-why__features">
                <?php foreach (hc_config()->whyChooseUs as $item): ?>
                <div class="cj-home-why__feature">
                    <span class="cj-home-why__feature-icon"><?= hc_icon($item['icon']) ?></span>
                    <div>
                        <h3><?= esc($item['title']) ?></h3>
                        <p><?= esc($item['desc']) ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <a href="<?= site_url('about-us') ?>" class="cj-btn cj-btn--primary">Know More About Us</a>
        </div>
    </div>
</section>

<!-- How It Works -->
<section class="cj-section cj-home-process">
    <div class="cj-container">
        <div class="cj-heading">
            <h2 class="cj-heading__title">How It Works</h2>
            <div class="cj-heading__line"></div>
            <p class="cj-heading__sub">Our Process</p>
        </div>
        <div class="cj-home-steps">
            <?php foreach (hc_config()->howItWorks as $i => $step): ?>
            <?php if ($i > 0): ?><div class="cj-home-steps__arrow" aria-hidden="true">&rarr;</div><?php endif; ?>
            <div class="cj-home-step">
                <div class="cj-home-step__icon"><?= hc_icon($step['icon']) ?></div>
                <span class="cj-home-step__num">Step <?= $step['num'] ?></span>
                <h4><?= esc($step['title']) ?></h4>
                <p><?= esc($step['desc']) ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Services We Offer -->
<section class="cj-section cj-section--gray cj-home-offer">
    <div class="cj-container">
        <div class="cj-heading">
            <h2 class="cj-heading__title">Services We Offer</h2>
            <div class="cj-heading__line"></div>
        </div>
        <div class="cj-service-icons-grid">
            <?php foreach (hc_config()->mainServices as $svc): ?>
            <a href="<?= site_url($svc['slug']) ?>" class="cj-service-icon-tile">
                <span class="cj-service-icon-tile__icon"><?= hc_icon($svc['icon']) ?></span>
                <span class="cj-service-icon-tile__name"><?= esc($svc['title']) ?></span>
            </a>
            <?php endforeach; ?>
        </div>
        <div class="cj-home-services__cta">
            <a href="<?= site_url('services') ?>" class="cj-btn cj-btn--outline">Explore All Services</a>
        </div>
    </div>
</section>

<!-- Testimonials -->
<section class="cj-section cj-home-testimonials">
    <div class="cj-container">
        <div class="cj-heading">
            <h2 class="cj-heading__title">Trusted by Families</h2>
            <div class="cj-heading__line"></div>
        </div>
        <div class="cj-testimonial-grid">
            <?php foreach (hc_config()->testimonials as $t): ?>
            <div class="cj-testimonial-card">
                <span class="cj-testimonial-card__mark" aria-hidden="true"><?= hc_icon('consult') ?></span>
                <p class="cj-testimonial-card__quote">"<?= esc($t['text']) ?>"</p>
                <div class="cj-testimonial-card__author">
                    <img src="<?= hc_photo($t['image'] ?? 'staff-1') ?>" alt="<?= esc($t['name']) ?>" class="cj-testimonial-card__avatar" loading="lazy">
                    <div>
                        <div class="cj-testimonial-card__name"><?= esc($t['name']) ?></div>
                        <div class="cj-testimonial-card__location"><?= esc($t['location']) ?></div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?= view('partials/cta-banner') ?>

<script>
(function () {
    var track = document.getElementById('cj-services-track');
    if (!track) return;
    var prev = document.querySelector('.cj-services-carousel__btn--prev');
    var next = document.querySelector('.cj-services-carousel__btn--next');
    var scrollAmount = function () {
        var slide = track.querySelector('.cj-service-slide');
        return slide ? slide.offsetWidth + 24 : 320;
    };
    if (prev) prev.addEventListener('click', function () { track.scrollBy({ left: -scrollAmount(), behavior: 'smooth' }); });
    if (next) next.addEventListener('click', function () { track.scrollBy({ left: scrollAmount(), behavior: 'smooth' }); });
})();
</script>
