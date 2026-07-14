<?= view('partials/breadcrumb') ?>

<section class="cj-page-hero cj-page-hero--image" style="background-image:url('<?= hc_photo('staff-hero') ?>')">
    <div class="cj-container">
        <h1 class="cj-page-hero__title">Our Staff</h1>
        <p class="cj-page-hero__subtitle">Meet our verified nurses, GDA staff, physiotherapists, and caregivers</p>
    </div>
</section>

<section class="cj-section">
    <div class="cj-container">
        <div class="cj-staff-filters">
            <button class="cj-staff-filter cj-staff-filter--active" data-filter="all">All</button>
            <button class="cj-staff-filter" data-filter="nurses">Nurses</button>
            <button class="cj-staff-filter" data-filter="gda">GDA Staff</button>
            <button class="cj-staff-filter" data-filter="physio">Physiotherapists</button>
            <button class="cj-staff-filter" data-filter="caregivers">Caregivers</button>
        </div>
        <div class="cj-staff-grid">
            <?php foreach (hc_config()->staff as $member): ?>
            <div class="cj-staff-card" data-category="<?= esc($member['category']) ?>">
                <img src="<?= hc_photo($member['image']) ?>" alt="<?= esc($member['name']) ?>" loading="lazy" class="cj-img-round">
                <h3><?= esc($member['name']) ?></h3>
                <p class="cj-staff-card__role"><?= esc($member['role']) ?></p>
                <?= hc_stars((int) $member['rating']) ?>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<script>
(function(){
    var filters = document.querySelectorAll('.cj-staff-filter');
    var cards = document.querySelectorAll('.cj-staff-card');
    filters.forEach(function(btn){
        btn.addEventListener('click', function(){
            filters.forEach(function(b){ b.classList.remove('cj-staff-filter--active'); });
            btn.classList.add('cj-staff-filter--active');
            var cat = btn.getAttribute('data-filter');
            cards.forEach(function(card){
                card.style.display = (cat === 'all' || card.getAttribute('data-category') === cat) ? '' : 'none';
            });
        });
    });
})();
</script>

<?= view('partials/cta-banner') ?>
