
</main>

<footer class="cj-footer">
    <div class="cj-container cj-footer__grid">
        <div>
            <a href="<?= site_url('/') ?>" class="cj-logo cj-logo--footer">
                <img src="<?= hc_logo() ?>" alt="<?= esc(hc_config()->brandName) ?> — Home Healthcare Jaipur" class="cj-logo__img" width="160" height="44">
            </a>
            <p class="cj-footer__desc">Compassionate, professional home nursing &amp; patient care across Jaipur. Available 24×7.</p>
            <div class="cj-footer__social">
                <a href="#" aria-label="Facebook"><?= hc_icon('facebook', 'sm') ?></a>
                <a href="#" aria-label="Instagram"><?= hc_icon('instagram', 'sm') ?></a>
                <a href="#" aria-label="LinkedIn"><?= hc_icon('linkedin', 'sm') ?></a>
            </div>
        </div>
        <div>
            <h4>Services</h4>
            <ul>
                <?php foreach (array_slice(hc_config()->mainServices, 0, 6) as $svc): ?>
                <li><a href="<?= site_url($svc['slug']) ?>"><?= esc($svc['title']) ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div>
            <h4>Quick Links</h4>
            <ul>
                <li><a href="<?= site_url('about-us') ?>">About Us</a></li>
                <li><a href="<?= site_url('our-staff') ?>">Our Staff</a></li>
                <li><a href="<?= site_url('areas-we-serve') ?>">Areas We Serve</a></li>
                <li><a href="<?= site_url('testimonials') ?>">Testimonials</a></li>
                <li><a href="<?= site_url('faqs') ?>">FAQs</a></li>
                <li><a href="<?= site_url('career') ?>">Career</a></li>
            </ul>
        </div>
        <div>
            <h4>Contact</h4>
            <ul class="cj-footer__contact">
                <li><?= hc_icon('phone', 'sm') ?> <a href="<?= hc_phone_link() ?>"><?= esc(hc_config()->phoneDisplay) ?></a></li>
                <li><?= hc_icon('email', 'sm') ?> <a href="mailto:<?= esc(hc_config()->email) ?>"><?= esc(hc_config()->email) ?></a></li>
                <li><?= hc_icon('location', 'sm') ?> <?= esc(hc_config()->address) ?></li>
            </ul>
        </div>
    </div>
    <div class="cj-footer__bottom">
        <div class="cj-container cj-footer__bottom-inner">
            <p>&copy; <?= date('Y') ?> <?= esc(hc_config()->brandName) ?>. All Rights Reserved.</p>
            <div class="cj-footer__legal">
                <a href="<?= site_url('privacy-policy') ?>">Privacy Policy</a>
                <a href="<?= site_url('terms-and-conditions') ?>">Terms &amp; Conditions</a>
            </div>
        </div>
    </div>
</footer>

<div class="cj-float-cta">
    <a href="<?= hc_whatsapp_link('Hi, I need home care in Jaipur') ?>" class="cj-float-btn cj-float-btn--wa" title="WhatsApp">
        <svg width="22" height="22" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.435 9.884-9.881 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
        <span>WhatsApp</span>
    </a>
    <a href="<?= hc_phone_link() ?>" class="cj-float-btn cj-float-btn--call" title="Call Now">
        <svg width="22" height="22" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
        <span>Call Now</span>
    </a>
</div>

<script>
(function(){
    var btn = document.getElementById('cj-menu-btn');
    var nav = document.getElementById('cj-nav');
    if (btn && nav) {
        btn.addEventListener('click', function(){ nav.classList.toggle('cj-nav--open'); });
    }
})();
</script>
</body>
</html>
