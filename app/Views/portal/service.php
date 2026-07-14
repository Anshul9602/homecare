<?php $service = $service ?? []; ?>
<?= view('partials/breadcrumb') ?>

<section class="cj-page-hero">
    <div class="cj-container">
        <h1 class="cj-page-hero__title"><?= esc($service['title']) ?> in Jaipur</h1>
        <p class="cj-page-hero__subtitle"><?= esc($service['desc']) ?></p>
        <div class="cj-hero__btns" style="justify-content:center;margin-top:1.5rem;">
            <a href="<?= site_url('book-now') ?>" class="cj-btn cj-btn--primary">Book a Caregiver</a>
            <a href="<?= hc_phone_link() ?>" class="cj-btn cj-btn--outline">Call Now</a>
        </div>
    </div>
</section>

<section class="cj-section">
    <div class="cj-container cj-about-grid">
        <div>
            <h2>What We Offer</h2>
            <ul class="cj-hero__checks">
                <?php foreach ($service['items'] as $item): ?>
                <li><?= hc_icon('check') ?> <?= esc($item) ?></li>
                <?php endforeach; ?>
            </ul>
            <p style="margin-top:1.5rem;color:var(--cj-text);">Our trained professionals deliver compassionate care tailored to your family's needs. Available across all major areas of Jaipur with 24×7 emergency support.</p>
            <a href="<?= site_url('book-now') ?>" class="cj-btn cj-btn--primary" style="margin-top:1rem;">Book Now</a>
        </div>
        <div class="cj-hero__image">
            <img src="<?= hc_photo($service['image'] ?? 'service-nursing') ?>" alt="<?= esc($service['title']) ?>" loading="lazy">
        </div>
    </div>
</section>

<?= view('partials/how-it-works') ?>

<section class="cj-section cj-section--gray">
    <div class="cj-container">
        <div class="cj-heading">
            <h2 class="cj-heading__title">Why Families Trust Us</h2>
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

<?= view('partials/cta-banner') ?>
