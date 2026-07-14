<section class="sow-page-section hc-contact-cta-section">
    <div class="container mx-auto px-4">
        <div class="hc-contact-cta-card">
            <div class="hc-contact-cta-content">
                <h2>Need a Nurse or Caregiver Today?</h2>
                <p>Call or WhatsApp us for a free consultation. We assign suitable staff quickly across Jaipur.</p>
                <div class="hc-contact-cta-btns">
                    <a href="<?= site_url('contact') ?>" class="hc-btn-blue">Book a Caregiver</a>
                    <a href="<?= hc_phone_link() ?>" class="sow-btn-hero-primary">Call <?= esc(hc_config()->phoneDisplay) ?></a>
                    <a href="<?= hc_whatsapp_link('Hi, I need home care services in Jaipur') ?>" class="sow-btn-hero-light hc-btn-whatsapp">WhatsApp Us</a>
                </div>
            </div>
            <div class="hc-contact-cta-form">
                <h3>Quick Enquiry</h3>
                <form action="<?= site_url('contact') ?>" method="get" class="hc-enquiry-form">
                    <input type="text" name="name" placeholder="Your Name" required>
                    <input type="tel" name="phone" placeholder="Phone Number" required>
                    <select name="service">
                        <option value="">Select Service</option>
                        <?php foreach (hc_config()->mainServices as $svc): ?>
                        <option value="<?= esc($svc['slug']) ?>"><?= esc($svc['title']) ?></option>
                        <?php endforeach; ?>
                    </select>
                    <textarea name="message" rows="3" placeholder="Patient requirements (optional)"></textarea>
                    <button type="submit" class="hc-btn-blue w-full">Submit Enquiry</button>
                </form>
            </div>
        </div>
    </div>
</section>
