<?php $service = $service ?? []; ?>
<?= view('partials/page-hero', [
    'heroTag'      => 'Home Healthcare',
    'heroTitle'    => esc($service['title']) . ' in <span>Jaipur</span>',
    'heroSubtitle' => $service['desc'],
    'heroImage'    => hc_photo($service['image'] ?? 'service-nursing'),
    'heroButtons'  => [
        ['label' => 'Book a Caregiver', 'url' => site_url('book-now'), 'style' => 'primary'],
        ['label' => 'Call Now', 'url' => hc_phone_link(), 'style' => 'outline', 'icon' => 'phone'],
    ],
]) ?>

<section class="cj-section cj-section--page-first">
    <div class="cj-container cj-about-grid">
        <div>
            <div class="cj-heading cj-heading--left">
                <h2 class="cj-heading__title">What We Offer</h2>
                <div class="cj-heading__line"></div>
            </div>
            <ul class="cj-hero__checks">
                <?php foreach ($service['items'] as $item): ?>
                <li><?= hc_icon('circle-check', 'sm') ?> <?= esc($item) ?></li>
                <?php endforeach; ?>
            </ul>
            <p class="cj-about-intro__lead" style="margin-top:1.5rem;">Our trained professionals deliver compassionate care tailored to your family's needs. Available across all major areas of Jaipur with 24×7 emergency support.</p>
            <a href="<?= site_url('book-now') ?>" class="cj-btn cj-btn--primary" style="margin-top:1rem;">Book Now</a>
        </div>
        <div class="cj-hero__image">
            <img src="<?= hc_photo($service['image'] ?? 'service-nursing') ?>" alt="<?= esc($service['title']) ?>" loading="lazy">
        </div>
    </div>
</section>

<?= view('partials/how-it-works') ?>

<section class="cj-section cj-section--gray">
    <div class="cj-container">
        <div class="cj-heading">
            <h2 class="cj-heading__title">Why Families Trust <span class="cj-text-primary">Care Jaipur</span></h2>
            <div class="cj-heading__line"></div>
        </div>
        <div class="cj-about-why-grid">
            <?php foreach (array_slice(hc_config()->aboutWhyChoose, 0, 6) as $item): ?>
            <div class="cj-about-why-card">
                <span class="cj-about-why-card__icon"><?= hc_icon($item['icon']) ?></span>
                <h3><?= esc($item['title']) ?></h3>
                <p><?= esc($item['desc']) ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?= view('partials/cta-banner') ?>
