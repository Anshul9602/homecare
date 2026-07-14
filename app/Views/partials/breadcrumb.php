<?php if (! empty($breadcrumbs)): ?>
<nav class="cj-breadcrumb">
    <div class="cj-container">
        <a href="<?= site_url('/') ?>">Home</a>
        <?php foreach ($breadcrumbs as $crumb): ?>
        <span class="cj-breadcrumb__sep">›</span>
        <?php if (! empty($crumb['url'])): ?>
        <a href="<?= site_url($crumb['url']) ?>"><?= esc($crumb['label']) ?></a>
        <?php else: ?>
        <span><?= esc($crumb['label']) ?></span>
        <?php endif; ?>
        <?php endforeach; ?>
    </div>
</nav>
<?php endif; ?>
