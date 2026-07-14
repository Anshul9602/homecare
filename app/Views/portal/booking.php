<?= view('partials/breadcrumb') ?>

<section class="cj-page-hero">
    <div class="cj-container">
        <h1 class="cj-page-hero__title">Book a Caregiver</h1>
        <p class="cj-page-hero__subtitle">Fill in the details and we'll assign the right nurse or GDA for your patient</p>
    </div>
</section>

<section class="cj-section">
    <div class="cj-container cj-booking-grid">
        <div class="cj-card">
            <h2>Booking Form</h2>
            <form class="cj-form" onsubmit="event.preventDefault();alert('Thank you! We will contact you shortly.');">
                <div class="cj-form__group">
                    <label>Full Name *</label>
                    <input type="text" class="cj-form__input" placeholder="Your full name" required>
                </div>
                <div class="cj-form__group">
                    <label>Phone Number *</label>
                    <input type="tel" class="cj-form__input" placeholder="10-digit mobile number" required>
                </div>
                <div class="cj-form__group">
                    <label>Service Required *</label>
                    <select class="cj-form__select" required>
                        <option value="">Select a service</option>
                        <?php foreach (hc_config()->mainServices as $svc): ?>
                        <option value="<?= esc($svc['slug']) ?>"><?= esc($svc['title']) ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="cj-form__group">
                    <label>Preferred Date</label>
                    <input type="date" class="cj-form__input">
                </div>
                <div class="cj-form__group">
                    <label>Address in Jaipur *</label>
                    <input type="text" class="cj-form__input" placeholder="Area, street, landmark" required>
                </div>
                <div class="cj-form__group">
                    <label>Patient Requirements</label>
                    <textarea class="cj-form__textarea" rows="4" placeholder="Describe the patient's condition and care needs"></textarea>
                </div>
                <button type="submit" class="cj-btn cj-btn--primary" style="width:100%;">Submit Booking Request</button>
            </form>
        </div>
        <div class="cj-card">
            <h3>Why Book With Us?</h3>
            <ul class="cj-hero__checks">
                <li><?= hc_icon('check') ?> Quick Response — Staff assigned within hours</li>
                <li><?= hc_icon('check') ?> Verified &amp; Trained Professionals</li>
                <li><?= hc_icon('check') ?> Free Consultation</li>
                <li><?= hc_icon('check') ?> Affordable Packages</li>
                <li><?= hc_icon('check') ?> 24×7 Emergency Support</li>
                <li><?= hc_icon('check') ?> Personalized Care Plans</li>
            </ul>
            <div style="margin-top:2rem;">
                <p><strong>Or call us directly:</strong></p>
                <a href="<?= hc_phone_link() ?>" class="cj-btn cj-btn--blue" style="margin-top:0.5rem;"><?= esc(hc_config()->phoneDisplay) ?></a>
            </div>
        </div>
    </div>
</section>
