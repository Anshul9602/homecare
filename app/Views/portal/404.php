<?= view('partials/page-hero', [
    'heroTitle'    => 'Page <span>Not Found</span>',
    'heroSubtitle' => 'The page you\'re looking for doesn\'t exist or has been moved.',
    'heroButtons'  => [
        ['label' => 'Go to Home', 'url' => site_url('/'), 'style' => 'primary'],
        ['label' => 'Contact Us', 'url' => site_url('contact'), 'style' => 'outline'],
    ],
]) ?>

<section class="cj-section cj-section--page-first">
    <div class="cj-container cj-404">
        <div class="cj-404__code">404</div>
        <img src="<?= hc_photo('404') ?>" alt="Care Jaipur" loading="lazy" class="cj-404__image">
    </div>
</section>

<?= view('partials/cta-banner') ?>
