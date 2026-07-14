<?php $post = $post ?? []; ?>
<?= view('partials/breadcrumb') ?>

<section class="cj-section">
    <div class="cj-container cj-blog-detail">
        <img src="<?= hc_photo($post['image']) ?>" alt="<?= esc($post['title']) ?>" class="cj-blog-detail__hero" loading="lazy">
        <span class="cj-blog-meta"><?= date('F d, Y', strtotime($post['date'])) ?></span>
        <h1><?= esc($post['title']) ?></h1>
        <div class="cj-blog-detail__content">
            <?php foreach ($post['content'] as $para): ?>
            <p><?= esc($para) ?></p>
            <?php endforeach; ?>
        </div>
        <div style="margin-top:2rem;">
            <a href="<?= site_url('blog') ?>" class="cj-btn cj-btn--outline">← Back to Blog</a>
            <a href="<?= site_url('book-now') ?>" class="cj-btn cj-btn--primary" style="margin-left:0.5rem;">Book a Caregiver</a>
        </div>
    </div>
</section>

<?= view('partials/cta-banner') ?>
