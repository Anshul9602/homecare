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
    <link rel="icon" href="<?= hc_logo() ?>" type="image/png">
    <link rel="stylesheet" href="<?= base_url('assets/css/care-jaipur.css') ?>">
</head>
<body class="cj-body" style="margin:0px !important;">

<header class="cj-header" id="cj-header">
    <div class="cj-container cj-header__inner">
        <a href="<?= site_url('/') ?>" class="cj-logo">
            <img src="<?= hc_logo() ?>" alt="<?= esc(hc_config()->brandName) ?> — Home Healthcare Jaipur" class="cj-logo__img" width="180" height="48">
        </a>

        <button class="cj-mobile-toggle" id="cj-menu-btn" aria-label="Menu">
            <?= hc_icon('menu') ?>
        </button>

        <nav class="cj-nav" id="cj-nav">
            <a href="<?= site_url('/') ?>" class="cj-nav__link <?= ($activeNav ?? '') === 'home' ? 'cj-nav__link--active' : '' ?>">Home</a>
            <a href="<?= site_url('about-us') ?>" class="cj-nav__link <?= ($activeNav ?? '') === 'about' ? 'cj-nav__link--active' : '' ?>">About Us</a>
            <a href="<?= site_url('services') ?>" class="cj-nav__link <?= ($activeNav ?? '') === 'services' ? 'cj-nav__link--active' : '' ?>">Services</a>
            <a href="<?= site_url('our-staff') ?>" class="cj-nav__link <?= ($activeNav ?? '') === 'staff' ? 'cj-nav__link--active' : '' ?>">Our Staff</a>
            <a href="<?= site_url('career') ?>" class="cj-nav__link <?= ($activeNav ?? '') === 'career' ? 'cj-nav__link--active' : '' ?>">Careers</a>
            <a href="<?= site_url('blog') ?>" class="cj-nav__link <?= ($activeNav ?? '') === 'blog' ? 'cj-nav__link--active' : '' ?>">Blog</a>
            <a href="<?= site_url('contact') ?>" class="cj-nav__link <?= ($activeNav ?? '') === 'contact' ? 'cj-nav__link--active' : '' ?>">Contact Us</a>
        </nav>

        <div class="cj-header__actions">
            <a href="<?= hc_phone_link() ?>" class="cj-header__phone"><?= hc_icon('phone', 'sm') ?> <?= esc(hc_config()->phoneDisplay) ?></a>
            <a href="<?= site_url('book-now') ?>" class="cj-btn cj-btn--primary cj-header__cta">Book Now</a>
        </div>
    </div>
</header>

<main>
