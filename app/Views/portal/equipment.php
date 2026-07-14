<?= view('partials/page-hero', [
    'heroTag'      => 'Medical Equipment',
    'heroTitle'    => 'Equipment on <span>Rent</span>',
    'heroSubtitle' => 'Quality medical equipment delivered to your home in Jaipur.',
    'heroImage'    => hc_service_image('medical-equipment-rental.png'),
    'heroButtons'  => [
        ['label' => 'Rent Now', 'url' => site_url('book-now'), 'style' => 'primary'],
    ],
]) ?>

<section class="cj-section cj-section--page-first">
    <div class="cj-container">
        <div class="cj-heading">
            <h2 class="cj-heading__title">Available <span class="cj-text-primary">Equipment</span></h2>
            <div class="cj-heading__line"></div>
        </div>
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
