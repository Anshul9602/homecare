<?= view('partials/breadcrumb') ?>

<section class="cj-page-hero">
    <div class="cj-container">
        <h1 class="cj-page-hero__title">Home Nursing &amp; Patient Care in <?= esc($areaName) ?></h1>
        <p class="cj-page-hero__subtitle">Professional nurses, GDA staff, and caregivers available 24×7 in <?= esc($areaName) ?>, Jaipur</p>
        <div class="cj-hero__btns" style="justify-content:center;margin-top:1.5rem;">
            <a href="<?= site_url('book-now') ?>" class="cj-btn cj-btn--primary">Book a Caregiver</a>
            <a href="<?= hc_whatsapp_link('Hi, I need home care in ' . $areaName) ?>" class="cj-btn cj-btn--whatsapp">WhatsApp Us</a>
        </div>
    </div>
</section>

<section class="cj-section">
    <div class="cj-container">
        <p style="text-align:center;max-width:700px;margin:0 auto 2rem;color:var(--cj-text);line-height:1.7;">
            Looking for reliable <strong>home nursing services in <?= esc($areaName) ?></strong>?
            <?= esc(hc_config()->brandName) ?> provides experienced nurses, GDA staff, elderly care, ICU nursing, physiotherapy, and medical equipment on rent — delivered to your doorstep.
        </p>
        <div class="cj-services-page-grid">
            <?php foreach (hc_config()->mainServices as $svc): ?>
            <a href="<?= site_url($svc['slug']) ?>" class="cj-service-card">
                <img src="<?= hc_photo($svc['image']) ?>" alt="<?= esc($svc['title']) ?>" loading="lazy">
                <div class="cj-service-card__body">
                    <h3><?= esc($svc['title']) ?></h3>
                    <p><?= esc($svc['desc']) ?></p>
                </div>
            </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?= view('partials/how-it-works') ?>
<?= view('partials/cta-banner') ?>
