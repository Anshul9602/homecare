<?= view('partials/breadcrumb') ?>

<section class="cj-page-hero">
    <div class="cj-container">
        <h1 class="cj-page-hero__title">Frequently Asked Questions</h1>
        <p class="cj-page-hero__subtitle">Answers to common questions about our home healthcare services</p>
    </div>
</section>

<section class="cj-section">
    <div class="cj-container cj-faq-grid">
        <div>
            <?php foreach (hc_config()->faqs as $i => $faq): ?>
            <details class="cj-faq-item" <?= $i === 0 ? 'open' : '' ?>>
                <summary><?= esc($faq['q']) ?></summary>
                <p><?= esc($faq['a']) ?></p>
            </details>
            <?php endforeach; ?>
        </div>
        <div class="cj-faq-side">
            <img src="<?= hc_photo('faq') ?>" alt="Care Jaipur nurse" loading="lazy" class="cj-img-round">
            <div class="cj-card" style="margin-top:1.5rem;text-align:center;">
                <h3>Still have questions?</h3>
                <p>Our team is available 24×7 to help you.</p>
                <a href="<?= hc_phone_link() ?>" class="cj-btn cj-btn--primary" style="margin-top:1rem;">Call Us Now</a>
                <a href="<?= site_url('contact') ?>" class="cj-btn cj-btn--outline" style="margin-top:0.5rem;">Contact Us</a>
            </div>
        </div>
    </div>
</section>
