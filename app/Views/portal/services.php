<?= view('partials/breadcrumb') ?>

<section class="cj-page-hero">
    <div class="cj-container">
        <h1 class="cj-page-hero__title">Our Services</h1>
        <p class="cj-page-hero__subtitle">Complete home healthcare solutions for every patient need in Jaipur</p>
    </div>
</section>

<section class="cj-section">
    <div class="cj-container">
        <div class="cj-services-page-grid">
            <?php foreach (hc_config()->mainServices as $svc): ?>
            <a href="<?= site_url($svc['slug']) ?>" class="cj-service-card">
                <img src="<?= hc_photo($svc['image']) ?>" alt="<?= esc($svc['title']) ?>" loading="lazy">
                <div class="cj-service-card__body">
                    <h3><?= esc($svc['title']) ?></h3>
                    <p><?= esc($svc['desc']) ?></p>
                    <span class="cj-service-card__link">View details →</span>
                </div>
            </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?= view('partials/cta-banner') ?>
