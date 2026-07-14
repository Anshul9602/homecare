<?= view('partials/breadcrumb') ?>

<section class="cj-page-hero">
    <div class="cj-container">
        <h1 class="cj-page-hero__title">What Families Say About Us</h1>
        <p class="cj-page-hero__subtitle">Real reviews from families across Jaipur</p>
    </div>
</section>

<section class="cj-section">
    <div class="cj-container">
        <div class="cj-testimonial-grid">
            <?php foreach (hc_config()->testimonials as $t): ?>
            <div class="cj-testimonial-card">
                <?= hc_stars($t['rating']) ?>
                <p>"<?= esc($t['text']) ?>"</p>
                <div class="cj-testimonial-card__author">
                    <strong><?= esc($t['name']) ?></strong>
                    <span><?= esc($t['location']) ?></span>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="cj-section cj-section--gray">
    <div class="cj-container">
        <div class="cj-ratings-bar">
            <?php foreach (hc_config()->platformRatings as $r): ?>
            <div class="cj-rating-item">
                <strong><?= esc($r['platform']) ?></strong>
                <div class="cj-rating-item__score"><?= esc($r['rating']) ?>/5</div>
                <span><?= esc($r['reviews']) ?></span>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?= view('partials/cta-banner') ?>
