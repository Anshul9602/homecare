<div class="cj-about-testimonials__panel">
    <div class="cj-about-testimonials__intro">
        <h2>What Our Families Say</h2>
        <?= hc_stars(5) ?>
        <p>Trusted by thousands of families in Jaipur.</p>
        <div class="cj-about-testimonials__nav">
            <button type="button" class="cj-about-testimonials__btn cj-about-test-prev" aria-label="Previous testimonial">&lsaquo;</button>
            <button type="button" class="cj-about-testimonials__btn cj-about-test-next" aria-label="Next testimonial">&rsaquo;</button>
        </div>
    </div>
    <div class="cj-about-testimonials__cards cj-about-testimonials-track">
        <?php foreach (hc_config()->testimonials as $t): ?>
        <div class="cj-testimonial-card cj-testimonial-card--about">
            <span class="cj-testimonial-card__mark" aria-hidden="true">&ldquo;</span>
            <p class="cj-testimonial-card__quote"><?= esc($t['text']) ?></p>
            <div class="cj-testimonial-card__author">
                <img src="<?= hc_photo($t['image'] ?? 'staff-1') ?>" alt="<?= esc($t['name']) ?>" class="cj-testimonial-card__avatar" loading="lazy">
                <div class="cj-testimonial-card__meta">
                    <div class="cj-testimonial-card__name"><?= esc($t['name']) ?></div>
                    <div class="cj-testimonial-card__location"><?= esc($t['location']) ?></div>
                </div>
                <div class="cj-testimonial-card__stars"><?= hc_stars($t['rating']) ?></div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
    <div class="cj-about-testimonials__photo">
        <img src="<?= hc_service_image('elderly-care.png') ?>" alt="Care Jaipur nurse with elderly patient" loading="lazy">
    </div>
</div>
