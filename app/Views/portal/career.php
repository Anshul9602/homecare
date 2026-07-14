<?= view('partials/page-hero', [
    'heroTag'      => 'Careers',
    'heroTitle'    => 'Join Our <span>Care Team</span>',
    'heroSubtitle' => 'Make a difference in patients\' lives — we\'re hiring across Jaipur.',
    'heroImage'    => hc_service_image('24x7-nursing-support.png'),
    'heroButtons'  => [
        ['label' => 'View Open Roles', 'url' => '#open-positions', 'style' => 'primary'],
    ],
]) ?>

<section class="cj-section cj-section--page-first">
    <div class="cj-container">
        <div class="cj-heading">
            <h2 class="cj-heading__title">Why Work With <span class="cj-text-primary">Us</span></h2>
            <div class="cj-heading__line"></div>
        </div>
        <div class="cj-career-benefits">
            <?php foreach (hc_config()->careerBenefits as $benefit): ?>
            <div class="cj-about-why-card">
                <span class="cj-about-why-card__icon"><?= hc_icon('check') ?></span>
                <h3><?= esc($benefit) ?></h3>
            </div>
            <?php endforeach; ?>
        </div>

        <div class="cj-card cj-career-positions" id="open-positions">
            <div class="cj-heading cj-heading--left">
                <h2 class="cj-heading__title">Open Positions</h2>
                <div class="cj-heading__line"></div>
            </div>
            <div class="cj-career-table">
                <?php foreach (hc_config()->careers as $job): ?>
                <div class="cj-career-row">
                    <div>
                        <strong><?= esc($job['title']) ?></strong>
                        <span><?= esc($job['type']) ?> &middot; <?= esc($job['location']) ?></span>
                    </div>
                    <a href="mailto:<?= esc(hc_config()->email) ?>?subject=Application: <?= rawurlencode($job['title']) ?>" class="cj-btn cj-btn--primary cj-btn--sm">Apply Now</a>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<?= view('partials/cta-banner') ?>
