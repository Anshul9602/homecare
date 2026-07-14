<?= view('partials/breadcrumb') ?>

<section class="cj-page-hero">
    <div class="cj-container">
        <h1 class="cj-page-hero__title">Medical Equipment on Rent</h1>
        <p class="cj-page-hero__subtitle">Quality medical equipment delivered to your home in Jaipur</p>
    </div>
</section>

<section class="cj-section">
    <div class="cj-container">
        <div class="cj-equip-grid">
            <?php foreach (hc_config()->equipment as $item): ?>
            <div class="cj-equip-card">
                <img src="<?= hc_photo($item['image']) ?>" alt="<?= esc($item['name']) ?>" loading="lazy">
                <h3><?= esc($item['name']) ?></h3>
                <div class="cj-equip-card__price">
                    <strong><?= esc($item['price']) ?></strong>
                    <span><?= esc($item['period']) ?></span>
                </div>
                <a href="<?= site_url('book-now') ?>" class="cj-btn cj-btn--primary cj-btn--sm">Rent Now</a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?= view('partials/cta-banner') ?>
