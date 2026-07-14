<?= view('partials/page-hero', [
    'heroTag'      => 'Book Now',
    'heroTitle'    => 'Book a <span>Caregiver</span>',
    'heroSubtitle' => 'Fill in the details and we\'ll assign the right nurse or GDA for your patient.',
    'heroImage'    => hc_service_image('bedridden-patient-care.png'),
]) ?>

<section class="cj-section cj-section--page-first">
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
                <button type="submit" class="cj-btn cj-btn--primary cj-btn--block">Submit Booking Request</button>
            </form>
        </div>
        <div class="cj-card">
            <h3>Why Book With Us?</h3>
            <ul class="cj-hero__checks">
                <li><?= hc_icon('circle-check', 'sm') ?> Quick Response — Staff assigned within hours</li>
                <li><?= hc_icon('circle-check', 'sm') ?> Verified &amp; Trained Professionals</li>
                <li><?= hc_icon('circle-check', 'sm') ?> Free Consultation</li>
                <li><?= hc_icon('circle-check', 'sm') ?> Affordable Packages</li>
                <li><?= hc_icon('circle-check', 'sm') ?> 24×7 Emergency Support</li>
                <li><?= hc_icon('circle-check', 'sm') ?> Personalized Care Plans</li>
            </ul>
            <div class="cj-booking-call">
                <p><strong>Or call us directly:</strong></p>
                <a href="<?= hc_phone_link() ?>" class="cj-btn cj-btn--blue"><?= esc(hc_config()->phoneDisplay) ?></a>
            </div>
        </div>
    </div>
</section>

<?= view('partials/cta-banner') ?>
