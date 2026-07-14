<?php
$post = $post ?? [];
$content = $post['content'] ?? [];
$intro = array_shift($content);
$listItems = $content;
?>
<?= view('partials/page-hero', [
    'heroTag'      => 'Blog',
    'heroTitle'    => esc($post['title']),
    'heroSubtitle' => date('F d, Y', strtotime($post['date'])),
]) ?>

<section class="cj-section cj-section--page-first">
    <div class="cj-container">
        <article class="cj-blog-article">
            <img src="<?= hc_photo($post['image']) ?>" alt="<?= esc($post['title']) ?>" class="cj-blog-article__image" loading="lazy">

            <div class="cj-blog-article__body">
                <?php if ($intro): ?>
                <p class="cj-blog-article__intro"><?= esc($intro) ?></p>
                <?php endif; ?>

                <?php if ($listItems): ?>
                <ol class="cj-blog-article__list">
                    <?php foreach ($listItems as $item): ?>
                    <?php $text = preg_replace('/^\d+\.\s*/', '', $item); ?>
                    <li><?= esc($text) ?></li>
                    <?php endforeach; ?>
                </ol>
                <?php endif; ?>
            </div>

            <div class="cj-blog-article__actions">
                <a href="<?= site_url('blog') ?>" class="cj-btn cj-btn--outline">&larr; Back to Blog</a>
                <a href="<?= site_url('book-now') ?>" class="cj-btn cj-btn--primary">Book a Caregiver</a>
            </div>
        </article>
    </div>
</section>

<?= view('partials/cta-banner') ?>
