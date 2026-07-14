<?= view('partials/page-hero', [
    'heroTag'      => 'Legal',
    'heroTitle'    => 'Terms &amp; <span>Conditions</span>',
    'heroSubtitle' => 'Last updated: July 2026',
]) ?>

<section class="cj-section cj-section--page-first">
    <div class="cj-container">
        <div class="cj-card cj-legal-content">
            <h2>1. Acceptance of Terms</h2>
            <p>By accessing or using the <?= esc(hc_config()->brandName) ?> website or services, you agree to be bound by these Terms &amp; Conditions.</p>
            <h2>2. Services</h2>
            <p><?= esc(hc_config()->brandName) ?> provides home nursing, GDA staff, patient attendant, elderly care, physiotherapy, and medical equipment rental services in Jaipur.</p>
            <h2>3. User Responsibilities</h2>
            <p>Users must provide accurate patient information, ensure a safe home environment for caregivers, and comply with medical advice from treating physicians.</p>
            <h2>4. Payments</h2>
            <p>Service fees are agreed upon before care begins. Payment terms and package details will be communicated during consultation.</p>
            <h2>5. Limitation of Liability</h2>
            <p><?= esc(hc_config()->brandName) ?> facilitates professional home healthcare services and maintains quality standards for all assigned staff.</p>
            <h2>6. Contact</h2>
            <p>For questions about these terms, contact <a href="mailto:<?= esc(hc_config()->email) ?>"><?= esc(hc_config()->email) ?></a>.</p>
        </div>
    </div>
</section>

<?= view('partials/cta-banner') ?>
