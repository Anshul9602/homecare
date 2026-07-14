<!-- Hero -->
<section class="cj-hero">
    <div class="cj-container cj-hero__grid">
        <div class="cj-hero__content">
            <h1 class="cj-hero__title">Professional Home Nursing &amp; Patient Care Services in Jaipur</h1>
            <p class="cj-hero__subtitle">Experienced nurses, GDA staff, patient attendants, elderly care, ICU care, and home healthcare services available 24×7 across Jaipur and nearby areas.</p>
            <ul class="cj-hero__checks">
                <li><?= hc_icon('check') ?> 24×7 Emergency Support</li>
                <li><?= hc_icon('check') ?> Background Verified Staff</li>
                <li><?= hc_icon('check') ?> Affordable Packages</li>
            </ul>
            <div class="cj-hero__btns">
                <a href="<?= site_url('book-now') ?>" class="cj-btn cj-btn--primary">Book a Caregiver</a>
                <a href="<?= hc_phone_link() ?>" class="cj-btn cj-btn--outline">Call Now</a>
                <a href="<?= hc_whatsapp_link('Hi, I need home care in Jaipur') ?>" class="cj-btn cj-btn--whatsapp cj-btn--sm">WhatsApp Us</a>
            </div>
        </div>
        <div class="cj-hero__image">
            <img src="<?= hc_photo('hero') ?>" alt="Nurse caring for patient in Jaipur" loading="eager">
        </div>
    </div>
</section>

<?= view('partials/stats-bar') ?>

<!-- Services -->
<section class="cj-section">
    <div class="cj-container">
        <div class="cj-heading">
            <h2 class="cj-heading__title">Our Services</h2>
            <div class="cj-heading__line"></div>
            <p class="cj-heading__sub">Comprehensive home healthcare delivered with compassion</p>
        </div>
        <div class="cj-services-grid">
            <?php foreach (array_slice(hc_config()->mainServices, 0, 4) as $svc): ?>
            <a href="<?= site_url($svc['slug']) ?>" class="cj-service-card">
                <img src="<?= hc_photo($svc['image']) ?>" alt="<?= esc($svc['title']) ?>" loading="lazy">
                <div class="cj-service-card__body">
                    <h3><?= esc($svc['title']) ?></h3>
                    <p><?= esc($svc['desc']) ?></p>
                    <span class="cj-service-card__link">Learn more →</span>
                </div>
            </a>
            <?php endforeach; ?>
        </div>
        <div style="text-align:center;margin-top:2rem;">
            <a href="<?= site_url('services') ?>" class="cj-btn cj-btn--outline">View All Services</a>
        </div>
    </div>
</section>

<!-- Why Choose Us -->
<section class="cj-section cj-section--gray">
    <div class="cj-container">
        <div class="cj-heading">
            <h2 class="cj-heading__title">Why Choose Us?</h2>
            <div class="cj-heading__line"></div>
        </div>
        <div class="cj-why-grid">
            <?php foreach (hc_config()->whyChooseUs as $item): ?>
            <div class="cj-why-card">
                <div class="cj-why-card__icon"><?= hc_icon($item['icon']) ?></div>
                <h3><?= esc($item['title']) ?></h3>
                <p><?= esc($item['desc']) ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?= view('partials/how-it-works') ?>

<!-- Areas -->
<section class="cj-section">
    <div class="cj-container">
        <div class="cj-heading">
            <h2 class="cj-heading__title">Service Across Jaipur</h2>
            <div class="cj-heading__line"></div>
        </div>
        <div class="cj-areas-grid cj-areas-grid--compact">
            <?php foreach (hc_config()->locations as $slug => $name): ?>
            <a href="<?= site_url('locations/' . $slug) ?>" class="cj-area-card">
                <img src="<?= hc_photo('location') ?>" alt="<?= esc($name) ?>" loading="lazy">
                <span><?= esc($name) ?></span>
            </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Testimonials preview -->
<section class="cj-section cj-section--gray">
    <div class="cj-container">
        <div class="cj-heading">
            <h2 class="cj-heading__title">Trusted by Families</h2>
            <div class="cj-heading__line"></div>
        </div>
        <div class="cj-testimonial-grid">
            <?php foreach (hc_config()->testimonials as $t): ?>
            <div class="cj-testimonial-card">
                <?= hc_stars($t['rating']) ?>
                <p>"<?= esc($t['text']) ?>"</p>
                <div class="cj-testimonial-card__author">
                    <strong><?= esc($t['name']) ?></strong>
                    <span><?= esc($t['location']) ?></span>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?= view('partials/cta-banner') ?>
