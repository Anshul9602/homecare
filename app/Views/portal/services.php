<?= view('partials/page-hero', [
    'heroTag'      => 'Our Services',
    'heroTitle'    => 'Complete Home Healthcare <span>Solutions</span>',
    'heroSubtitle' => 'Professional nursing, GDA staff, elderly care, ICU care, and medical equipment on rent across Jaipur.',
    'heroImage'    => hc_service_image('home-nursing-care.png'),
    'heroButtons'  => [
        ['label' => 'Book a Caregiver', 'url' => site_url('book-now'), 'style' => 'primary'],
        ['label' => 'Call Now', 'url' => hc_phone_link(), 'style' => 'outline', 'icon' => 'phone'],
    ],
]) ?>

<section class="cj-section cj-section--page-first">
    <div class="cj-container">
        <div class="cj-heading">
            <h2 class="cj-heading__title">All Our <span class="cj-text-primary">Services</span></h2>
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

<?= view('partials/cta-banner') ?>
