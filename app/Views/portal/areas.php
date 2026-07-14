<?= view('partials/page-hero', [
    'heroTag'      => 'Service Areas',
    'heroTitle'    => 'Areas We Serve in <span>Jaipur</span>',
    'heroSubtitle' => 'Home nursing and patient care available across all major neighborhoods.',
    'heroImage'    => hc_service_image('physiotherapy-at-home.png'),
]) ?>

<section class="cj-section cj-section--page-first">
    <div class="cj-container">
        <div class="cj-heading">
            <h2 class="cj-heading__title">Jaipur <span class="cj-text-primary">Locations</span></h2>
            <div class="cj-heading__line"></div>
        </div>
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
