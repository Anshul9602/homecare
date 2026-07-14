<?= view('partials/page-hero', [
    'heroTag'      => 'Blog',
    'heroTitle'    => 'Care Tips & <span>Health Guides</span>',
    'heroSubtitle' => 'Tips, guides, and insights on home nursing and patient care.',
    'heroImage'    => hc_service_image('post-surgical-care.png'),
]) ?>

<section class="cj-section cj-section--page-first">
    <div class="cj-container">
        <?php $posts = hc_config()->blogPosts; $featured = $posts[0]; $rest = array_slice($posts, 1); ?>

        <div class="cj-heading">
            <h2 class="cj-heading__title">Latest <span class="cj-text-primary">Articles</span></h2>
            <div class="cj-heading__line"></div>
        </div>

        <a href="<?= site_url('blog/' . $featured['slug']) ?>" class="cj-blog-featured">
            <img src="<?= hc_photo($featured['image']) ?>" alt="<?= esc($featured['title']) ?>" loading="lazy">
            <div>
                <span class="cj-blog-meta"><?= date('M d, Y', strtotime($featured['date'])) ?></span>
                <h2><?= esc($featured['title']) ?></h2>
                <p><?= esc($featured['excerpt']) ?></p>
                <span class="cj-service-card__link">Read more &rarr;</span>
            </div>
        </a>

        <div class="cj-blog-grid">
            <?php foreach ($rest as $post): ?>
            <a href="<?= site_url('blog/' . $post['slug']) ?>" class="cj-blog-card">
                <img src="<?= hc_photo($post['image']) ?>" alt="<?= esc($post['title']) ?>" loading="lazy">
                <div class="cj-blog-card__body">
                    <span class="cj-blog-meta"><?= date('M d, Y', strtotime($post['date'])) ?></span>
                    <h3><?= esc($post['title']) ?></h3>
                    <p><?= esc($post['excerpt']) ?></p>
                </div>
            </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?= view('partials/cta-banner') ?>
