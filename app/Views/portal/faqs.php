<?= view('partials/page-hero', [
    'heroTag'      => 'FAQs',
    'heroTitle'    => 'Frequently Asked <span>Questions</span>',
    'heroSubtitle' => 'Answers to common questions about our home healthcare services in Jaipur.',
    'heroImage'    => hc_service_image('gda-patient-attendant.png'),
]) ?>

<section class="cj-section cj-section--page-first">
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
            <div class="cj-card cj-faq-side__cta">
                <h3>Still have questions?</h3>
                <p>Our team is available 24×7 to help you.</p>
                <a href="<?= hc_phone_link() ?>" class="cj-btn cj-btn--primary">Call Us Now</a>
                <a href="<?= site_url('contact') ?>" class="cj-btn cj-btn--outline">Contact Us</a>
            </div>
        </div>
    </div>
</section>

<?= view('partials/cta-banner') ?>
