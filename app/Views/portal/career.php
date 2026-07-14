<?= view('partials/breadcrumb') ?>

<section class="cj-page-hero">
    <div class="cj-container">
        <h1 class="cj-page-hero__title">Join Our Care Team</h1>
        <p class="cj-page-hero__subtitle">Make a difference in patients' lives — we're hiring across Jaipur</p>
    </div>
</section>

<section class="cj-section">
    <div class="cj-container">
        <div class="cj-career-benefits">
            <?php foreach (hc_config()->careerBenefits as $benefit): ?>
            <div class="cj-why-card">
                <div class="cj-why-card__icon"><?= hc_icon('check') ?></div>
                <h3><?= esc($benefit) ?></h3>
            </div>
            <?php endforeach; ?>
        </div>

        <div class="cj-card" style="margin-top:2rem;">
            <h2 style="margin-bottom:1.5rem;">Open Positions</h2>
            <div class="cj-career-table">
                <?php foreach (hc_config()->careers as $job): ?>
                <div class="cj-career-row">
                    <div>
                        <strong><?= esc($job['title']) ?></strong>
                        <span><?= esc($job['type']) ?> · <?= esc($job['location']) ?></span>
                    </div>
                    <a href="mailto:<?= esc(hc_config()->email) ?>?subject=Application: <?= rawurlencode($job['title']) ?>" class="cj-btn cj-btn--primary cj-btn--sm">Apply Now</a>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<?= view('partials/cta-banner') ?>
