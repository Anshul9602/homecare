<!-- About Hero -->
<section class="cj-hero cj-hero--home cj-hero--about" style="--cj-banner: url('<?= hc_banner() ?>'); --cj-banner-mob: url('<?= hc_banner(true) ?>');">
    <div class="cj-container">
        <div class="cj-hero__grid">
            <div class="cj-hero__content">
                <span class="cj-hero__tag">About Care Jaipur</span>
                <h1 class="cj-hero__title">Your Health. Our Priority. <span>Care You Can Trust.</span></h1>
                <p class="cj-hero__subtitle">We provide reliable home healthcare services in Jaipur with trained nurses, GDA staff, patient attendants, and caregivers — delivering compassionate care in the comfort of your home.</p>
                <div class="cj-hero__btns">
                    <a href="<?= site_url('book-now') ?>" class="cj-btn cj-btn--primary">
                        Book a Consultation
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                    </a>
                    <a href="<?= hc_phone_link() ?>" class="cj-btn cj-btn--outline cj-btn--explore">
                        <?= hc_icon('phone', 'sm') ?>
                        Call Now
                    </a>
                </div>
            </div>
        </div>
    </div>
    <?= view('partials/stats-bar', ['stats' => hc_config()->aboutStats]) ?>
</section>

<!-- About Intro -->
<section class="cj-section cj-section--after-hero cj-about-intro">
    <div class="cj-container">
        <div class="cj-heading">
            <h2 class="cj-heading__title">About <span class="cj-text-primary">Care Jaipur</span></h2>
            <div class="cj-heading__line"></div>
        </div>
        <div class="cj-about-intro__grid">
            <div class="cj-about-intro__visual">
                <div class="cj-about-intro__circle">
                    <img src="<?= hc_service_image('gda-patient-attendant.png') ?>" alt="Care Jaipur caregiver with patient" loading="lazy">
                    <?php foreach (['nurse', 'heart', 'shield', 'home', 'clock', 'users'] as $i => $icon): ?>
                    <span class="cj-about-intro__orbit cj-about-intro__orbit--<?= $i + 1 ?>"><?= hc_icon($icon, 'sm') ?></span>
                    <?php endforeach; ?>
                </div>
                <div class="cj-about-intro__badge">
                    <strong>15+</strong>
                    <span>Years of Experience</span>
                </div>
            </div>
            <div class="cj-about-intro__content">
                <p class="cj-about-intro__lead">Care Jaipur is a trusted home healthcare provider serving families across Jaipur with professional nursing, GDA staff, elderly care, ICU care, and medical equipment on rent.</p>
                <p>Founded with a vision to make quality healthcare accessible at home, we combine clinical expertise with compassionate caregiving. Every member of our team is verified, trained, and committed to your family's wellbeing.</p>
                <div class="cj-about-mv-grid">
                    <div class="cj-about-mv-card">
                        <span class="cj-about-mv-card__icon"><?= hc_icon('heart') ?></span>
                        <h3>Our Mission</h3>
                        <p>To deliver compassionate, professional, and affordable home healthcare — helping patients recover with comfort, dignity, and independence at home.</p>
                    </div>
                    <div class="cj-about-mv-card">
                        <span class="cj-about-mv-card__icon"><?= hc_icon('shield') ?></span>
                        <h3>Our Vision</h3>
                        <p>To become Jaipur's most trusted home healthcare provider and expand across Rajasthan with the same commitment to quality care.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="cj-about-highlights">
            <?php foreach (hc_config()->aboutHighlights as $item): ?>
            <div class="cj-about-highlight">
                <span class="cj-about-highlight__icon"><?= hc_icon($item['icon']) ?></span>
                <span><?= esc($item['title']) ?></span>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Why Families Choose -->
<section class="cj-section cj-section--gray">
    <div class="cj-container">
        <div class="cj-heading">
            <h2 class="cj-heading__title">Why Families Choose <span class="cj-text-primary">Care Jaipur</span></h2>
            <div class="cj-heading__line"></div>
        </div>
        <div class="cj-about-why-grid">
            <?php foreach (hc_config()->aboutWhyChoose as $item): ?>
            <div class="cj-about-why-card">
                <span class="cj-about-why-card__icon"><?= hc_icon($item['icon']) ?></span>
                <h3><?= esc($item['title']) ?></h3>
                <p><?= esc($item['desc']) ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Our Journey -->
<section class="cj-section cj-about-journey">
    <div class="cj-container">
        <div class="cj-heading">
            <h2 class="cj-heading__title">Our Journey</h2>
            <div class="cj-heading__line"></div>
        </div>
        <div class="cj-timeline">
            <?php foreach (hc_config()->journey as $item): ?>
            <div class="cj-timeline__item">
                <span class="cj-timeline__icon"><?= hc_icon($item['icon']) ?></span>
                <span class="cj-timeline__year"><?= esc($item['year']) ?></span>
                <h4><?= esc($item['title']) ?></h4>
                <p><?= esc($item['desc']) ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Meet Our Team -->
<section class="cj-section cj-section--gray">
    <div class="cj-container">
        <div class="cj-heading">
            <h2 class="cj-heading__title">Meet Our Team</h2>
            <div class="cj-heading__line"></div>
        </div>
        <div class="cj-team-grid">
            <?php foreach (hc_config()->leadershipTeam as $member): ?>
            <div class="cj-team-card">
                <img src="<?= hc_photo($member['image']) ?>" alt="<?= esc($member['name']) ?>" loading="lazy">
                <h3><?= esc($member['name']) ?></h3>
                <p class="cj-team-card__role"><?= esc($member['role']) ?></p>
                <span class="cj-team-card__exp"><?= esc($member['exp']) ?> Experience</span>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Our Values -->
<section class="cj-section">
    <div class="cj-container">
        <div class="cj-heading">
            <h2 class="cj-heading__title">Our Values</h2>
            <div class="cj-heading__line"></div>
        </div>
        <div class="cj-values-grid">
            <?php foreach (hc_config()->values as $value): ?>
            <div class="cj-value-item">
                <span class="cj-value-item__icon"><?= hc_icon($value['icon']) ?></span>
                <h3><?= esc($value['title']) ?></h3>
                <p><?= esc($value['desc']) ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Our Care Process -->
<section class="cj-section cj-section--gray cj-about-process">
    <div class="cj-container">
        <div class="cj-heading">
            <h2 class="cj-heading__title">Our Care Process</h2>
            <div class="cj-heading__line"></div>
        </div>
        <div class="cj-process-grid">
            <?php foreach (hc_config()->careProcess as $i => $step): ?>
            <?php if ($i > 0): ?><div class="cj-process-grid__arrow" aria-hidden="true">&rsaquo;</div><?php endif; ?>
            <div class="cj-process-step">
                <span class="cj-process-step__num"><?= $step['num'] ?></span>
                <span class="cj-process-step__icon"><?= hc_icon($step['icon']) ?></span>
                <h4><?= esc($step['title']) ?></h4>
                <p><?= esc($step['desc']) ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Testimonials -->
<section class="cj-section cj-about-testimonials">
    <div class="cj-container cj-about-testimonials__grid">
        <div class="cj-about-testimonials__intro">
            <h2>What Our Families Say</h2>
            <p>Real stories from families who trusted Care Jaipur for home nursing and patient care.</p>
            <?= hc_stars(5) ?>
            <span class="cj-about-testimonials__rating">4.9/5 average rating</span>
        </div>
        <div class="cj-about-testimonials__cards">
            <?php foreach (hc_config()->testimonials as $t): ?>
            <div class="cj-testimonial-card cj-testimonial-card--compact">
                <?= hc_stars($t['rating']) ?>
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
        <div class="cj-about-testimonials__photo">
            <img src="<?= hc_service_image('elderly-care.png') ?>" alt="Care Jaipur nurse with elderly patient" loading="lazy">
        </div>
    </div>
</section>

<!-- Certifications -->
<section class="cj-section cj-section--gray">
    <div class="cj-container">
        <div class="cj-heading">
            <h2 class="cj-heading__title">Our Certifications &amp; Compliance</h2>
            <div class="cj-heading__line"></div>
        </div>
        <div class="cj-cert-grid">
            <?php foreach (hc_config()->certifications as $cert): ?>
            <div class="cj-cert-card">
                <span class="cj-cert-card__icon"><?= hc_icon($cert['icon']) ?></span>
                <span><?= esc($cert['title']) ?></span>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?= view('partials/cta-banner') ?>
