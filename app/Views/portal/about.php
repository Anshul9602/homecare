<?= view('partials/breadcrumb') ?>

<section class="cj-page-hero">
    <div class="cj-container">
        <h1 class="cj-page-hero__title">About Us</h1>
        <p class="cj-page-hero__subtitle">Your Health. Our Priority. Care You Can Trust.</p>
    </div>
</section>

<section class="cj-section">
    <div class="cj-container cj-about-grid">
        <div class="cj-about-image">
            <img src="<?= hc_photo('about') ?>" alt="Care Jaipur nurse with patient" loading="lazy">
            <div class="cj-experience-badge">15+ Years of Experience</div>
        </div>
        <div>
            <h2>Your Health. Our Priority.<br>Care You Can Trust.</h2>
            <p>We provide reliable home healthcare services in Jaipur with trained nurses, General Duty Assistants (GDA), patient attendants, and caregivers. Our mission is to deliver compassionate, professional, and affordable care in the comfort of your home.</p>
            <ul class="cj-hero__checks">
                <li><?= hc_icon('check') ?> Experienced Nursing Staff</li>
                <li><?= hc_icon('check') ?> Trained GDA Professionals</li>
                <li><?= hc_icon('check') ?> Verified Caregivers</li>
                <li><?= hc_icon('check') ?> 24×7 Customer Support</li>
                <li><?= hc_icon('check') ?> Emergency Assistance</li>
                <li><?= hc_icon('check') ?> Quality Home Healthcare</li>
            </ul>
        </div>
    </div>
</section>

<section class="cj-section cj-section--gray">
    <div class="cj-container cj-mv-grid">
        <div class="cj-card">
            <div class="cj-why-card__icon"><?= hc_icon('heart') ?></div>
            <h3>Our Mission</h3>
            <p>To deliver compassionate, professional, and affordable home healthcare in Jaipur — helping patients recover and live with comfort, dignity, and independence in their own homes.</p>
        </div>
        <div class="cj-card">
            <div class="cj-why-card__icon"><?= hc_icon('shield') ?></div>
            <h3>Our Vision</h3>
            <p>To become Jaipur's most trusted home healthcare provider — and expand across Rajasthan with the same commitment to quality care that families depend on today.</p>
        </div>
    </div>
</section>

<?= view('partials/stats-bar') ?>
<?= view('partials/cta-banner') ?>
