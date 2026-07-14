<?= view('partials/breadcrumb') ?>

<section class="cj-page-hero">
    <div class="cj-container">
        <h1 class="cj-page-hero__title">Areas We Serve in Jaipur</h1>
        <p class="cj-page-hero__subtitle">Home nursing and patient care available across all major neighborhoods</p>
    </div>
</section>

<section class="cj-section">
    <div class="cj-container">
        <div class="cj-areas-grid">
            <?php foreach (hc_config()->locations as $slug => $name): ?>
            <a href="<?= site_url('locations/' . $slug) ?>" class="cj-area-card">
                <span class="cj-area-card__icon" aria-hidden="true"><?= hc_icon('location') ?></span>
                <span class="cj-area-card__name"><?= esc($name) ?></span>
            </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?= view('partials/cta-banner') ?>
