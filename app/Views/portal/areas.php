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
                <img src="<?= hc_photo('location') ?>" alt="<?= esc($name) ?>" loading="lazy">
                <span><?= esc($name) ?></span>
            </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?= view('partials/cta-banner') ?>
