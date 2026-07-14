<?= view('partials/page-hero', [
    'heroTag'      => 'Service Area',
    'heroTitle'    => 'Home Care in <span>' . esc($areaName) . '</span>',
    'heroSubtitle' => 'Professional nurses, GDA staff, and caregivers available 24×7 in ' . esc($areaName) . ', Jaipur.',
    'heroImage'    => hc_service_image('home-nursing-care.png'),
    'heroButtons'  => [
        ['label' => 'Book a Caregiver', 'url' => site_url('book-now'), 'style' => 'primary'],
        ['label' => 'WhatsApp', 'url' => hc_whatsapp_link('Hi, I need home care in ' . $areaName), 'style' => 'outline'],
    ],
]) ?>

<section class="cj-section cj-section--page-first">
    <div class="cj-container">
        <p class="cj-location-intro">
            Looking for reliable <strong>home nursing services in <?= esc($areaName) ?></strong>?
            <?= esc(hc_config()->brandName) ?> provides experienced nurses, GDA staff, elderly care, ICU nursing, physiotherapy, and medical equipment on rent — delivered to your doorstep.
        </p>
        <div class="cj-heading">
            <h2 class="cj-heading__title">Services in <span class="cj-text-primary"><?= esc($areaName) ?></span></h2>
            <div class="cj-heading__line"></div>
        </div>
        <div class="cj-services-page-grid">
            <?php foreach (hc_config()->mainServices as $svc): ?>
            <a href="<?= site_url($svc['slug']) ?>" class="cj-service-card">
                <img src="<?= hc_photo($svc['image']) ?>" alt="<?= esc($svc['title']) ?>" loading="lazy">
                <div class="cj-service-card__body">
                    <h3><?= esc($svc['title']) ?></h3>
                    <p><?= esc($svc['desc']) ?></p>
                    <span class="cj-service-card__link">View details &rarr;</span>
                </div>
            </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?= view('partials/how-it-works') ?>
<?= view('partials/cta-banner') ?>
