<?= view('partials/page-hero', [
    'heroTag'      => 'Contact Us',
    'heroTitle'    => 'Get In <span>Touch</span>',
    'heroSubtitle' => 'Call, WhatsApp, or send us a message — we respond 24×7.',
    'heroImage'    => hc_service_image('companion-care.png'),
    'heroButtons'  => [
        ['label' => 'Call Now', 'url' => hc_phone_link(), 'style' => 'primary', 'icon' => 'phone'],
        ['label' => 'WhatsApp', 'url' => hc_whatsapp_link('Hi, I need home care in Jaipur'), 'style' => 'outline'],
    ],
]) ?>

<section class="cj-section cj-section--page-first">
    <div class="cj-container cj-contact-grid">
        <div class="cj-card">
            <h3>Contact Information</h3>
            <ul class="cj-contact-list">
                <li>
                    <?= hc_icon('phone') ?>
                    <div>
                        <strong>Phone</strong>
                        <a href="<?= hc_phone_link() ?>"><?= esc(hc_config()->phoneDisplay) ?></a>
                    </div>
                </li>
                <li>
                    <?= hc_icon('email') ?>
                    <div>
                        <strong>Email</strong>
                        <a href="mailto:<?= esc(hc_config()->email) ?>"><?= esc(hc_config()->email) ?></a>
                    </div>
                </li>
                <li>
                    <?= hc_icon('location') ?>
                    <div>
                        <strong>Address</strong>
                        <span><?= esc(hc_config()->address) ?></span>
                    </div>
                </li>
                <li>
                    <?= hc_icon('clock') ?>
                    <div>
                        <strong>Hours</strong>
                        <span><?= esc(hc_config()->hours) ?></span>
                    </div>
                </li>
            </ul>
        </div>

        <div class="cj-card">
            <h3>Send Us A Message</h3>
            <form class="cj-form" onsubmit="event.preventDefault();alert('Thank you! We will respond shortly.');">
                <div class="cj-form__group">
                    <input type="text" class="cj-form__input" placeholder="Your Name *" required>
                </div>
                <div class="cj-form__group">
                    <input type="tel" class="cj-form__input" placeholder="Phone Number *" required>
                </div>
                <div class="cj-form__group">
                    <input type="email" class="cj-form__input" placeholder="Email Address">
                </div>
                <div class="cj-form__group">
                    <textarea class="cj-form__textarea" rows="5" placeholder="Your Message *" required></textarea>
                </div>
                <button type="submit" class="cj-btn cj-btn--primary cj-btn--block">Send Message</button>
            </form>
        </div>

        <div class="cj-card cj-card--map">
            <iframe title="Jaipur Map" src="https://maps.google.com/maps?q=Jaipur,Rajasthan,India&output=embed" width="100%" height="100%" loading="lazy"></iframe>
        </div>
    </div>
</section>

<?= view('partials/cta-banner') ?>
