<?= view('partials/page-hero', [
    'heroTag'      => 'Legal',
    'heroTitle'    => 'Privacy <span>Policy</span>',
    'heroSubtitle' => 'Last updated: July 2026',
]) ?>

<section class="cj-section cj-section--page-first">
    <div class="cj-container">
        <div class="cj-card cj-legal-content">
            <h2>1. Information We Collect</h2>
            <p>When you use <?= esc(hc_config()->brandName) ?>, we may collect your name, phone number, email address, home address, and patient care requirements necessary to provide home nursing and healthcare services.</p>
            <h2>2. How We Use Your Information</h2>
            <p>We use your information to arrange caregivers, nurses, and GDA staff, communicate about care plans, improve our services, and respond to your enquiries.</p>
            <h2>3. Data Sharing</h2>
            <p>We share necessary information with verified healthcare professionals assigned to your care. We do not sell your personal data to third parties.</p>
            <h2>4. Data Security</h2>
            <p>We implement industry-standard security measures to protect your personal and health-related information.</p>
            <h2>5. Contact</h2>
            <p>For privacy-related queries, contact us at <a href="mailto:<?= esc(hc_config()->email) ?>"><?= esc(hc_config()->email) ?></a>.</p>
        </div>
    </div>
</section>

<?= view('partials/cta-banner') ?>
