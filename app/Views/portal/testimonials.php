<?= view('partials/page-hero', [
    'heroTag'      => 'Testimonials',
    'heroTitle'    => 'What Families <span>Say About Us</span>',
    'heroSubtitle' => 'Real reviews from families across Jaipur who trusted Care Jaipur.',
    'heroImage'    => hc_service_image('mother-baby-care.png'),
]) ?>

<section class="cj-section cj-section--page-first cj-about-testimonials">
    <div class="cj-container">
        <?= view('partials/testimonials-panel') ?>
    </div>
</section>

<section class="cj-section cj-section--gray">
    <div class="cj-container">
        <div class="cj-heading">
            <h2 class="cj-heading__title">Platform <span class="cj-text-primary">Ratings</span></h2>
            <div class="cj-heading__line"></div>
        </div>
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

<script>
(function () {
    document.querySelectorAll('.cj-about-testimonials-track').forEach(function (track) {
        var panel = track.closest('.cj-about-testimonials__panel');
        if (!panel) return;
        var prev = panel.querySelector('.cj-about-test-prev');
        var next = panel.querySelector('.cj-about-test-next');
        if (!prev || !next) return;
        var scrollCards = function (dir) {
            var card = track.querySelector('.cj-testimonial-card');
            var amount = card ? card.offsetHeight + 14 : 120;
            track.scrollBy({ top: dir * amount, behavior: 'smooth' });
        };
        prev.addEventListener('click', function () { scrollCards(-1); });
        next.addEventListener('click', function () { scrollCards(1); });
    });
})();
</script>

<?= view('partials/cta-banner') ?>
