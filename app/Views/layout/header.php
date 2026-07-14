<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= esc($pageTitle ?? 'Care Jaipur — Home Nursing & Patient Care') ?></title>
    <?php if (! empty($metaDescription)): ?>
    <meta name="description" content="<?= esc($metaDescription) ?>">
    <?php endif; ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/css/care-jaipur.css') ?>">
</head>
<body class="cj-body">

<header class="cj-header" id="cj-header">
    <div class="cj-container cj-header__inner">
        <a href="<?= site_url('/') ?>" class="cj-logo">
            <span class="cj-logo__icon"><?= hc_icon('plus') ?></span>
            <span class="cj-logo__text">
                <strong><?= esc(hc_config()->brandName) ?></strong>
                <small>Home Healthcare Jaipur</small>
            </span>
        </a>

        <button class="cj-mobile-toggle" id="cj-menu-btn" aria-label="Menu">
            <?= hc_icon('menu') ?>
        </button>

        <nav class="cj-nav" id="cj-nav">
            <a href="<?= site_url('/') ?>" class="cj-nav__link <?= ($activeNav ?? '') === 'home' ? 'cj-nav__link--active' : '' ?>">Home</a>
            <a href="<?= site_url('about-us') ?>" class="cj-nav__link <?= ($activeNav ?? '') === 'about' ? 'cj-nav__link--active' : '' ?>">About</a>
            <a href="<?= site_url('services') ?>" class="cj-nav__link <?= ($activeNav ?? '') === 'services' ? 'cj-nav__link--active' : '' ?>">Services</a>
            <a href="<?= site_url('equipment') ?>" class="cj-nav__link <?= ($activeNav ?? '') === 'equipment' ? 'cj-nav__link--active' : '' ?>">Equipment</a>
            <a href="<?= site_url('blog') ?>" class="cj-nav__link <?= ($activeNav ?? '') === 'blog' ? 'cj-nav__link--active' : '' ?>">Blog</a>
            <a href="<?= site_url('career') ?>" class="cj-nav__link <?= ($activeNav ?? '') === 'career' ? 'cj-nav__link--active' : '' ?>">Career</a>
            <a href="<?= site_url('contact') ?>" class="cj-nav__link <?= ($activeNav ?? '') === 'contact' ? 'cj-nav__link--active' : '' ?>">Contact Us</a>
        </nav>

        <a href="<?= site_url('book-now') ?>" class="cj-btn cj-btn--primary cj-header__cta">Book Now</a>
    </div>
</header>

<main>
