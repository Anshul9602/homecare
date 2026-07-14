<?php
/**
 * Inner page hero — matches Home / About design system.
 *
 * @var string       $heroTitle    HTML allowed (use spans for teal accent)
 * @var string|null  $heroSubtitle
 * @var string|null  $heroTag
 * @var string|null  $heroImage    Right-column image URL (enables split layout)
 * @var array        $heroButtons  [['label','url','style'=>'primary|outline|explore|whatsapp|blue','icon'=>?]]
 * @var array|null   $heroStats    Stats array for overlapping bar, or null to hide
 */
$heroTag      = $heroTag ?? null;
$heroTitle    = $heroTitle ?? '';
$heroSubtitle = $heroSubtitle ?? null;
$heroImage    = $heroImage ?? null;
$heroButtons  = $heroButtons ?? [];
$heroStats    = $heroStats ?? null;
$split        = $heroImage !== null && $heroImage !== '';
$withStats    = $heroStats !== null;
?>
<?= view('partials/breadcrumb') ?>

<section class="cj-hero cj-hero--inner<?= $split ? ' cj-hero--inner-split' : ' cj-hero--inner-centered' ?><?= $withStats ? ' cj-hero--with-stats' : '' ?>">
    <div class="cj-hero--inner__bg" aria-hidden="true"></div>
    <div class="cj-container">
        <?php if ($split): ?>
        <div class="cj-hero__grid">
            <div class="cj-hero__content">
                <?php if ($heroTag): ?><span class="cj-hero__tag"><?= esc($heroTag) ?></span><?php endif; ?>
                <h1 class="cj-hero__title cj-hero--inner__title"><?= $heroTitle ?></h1>
                <?php if ($heroSubtitle): ?><p class="cj-hero__subtitle"><?= esc($heroSubtitle) ?></p><?php endif; ?>
                <?php if ($heroButtons): ?>
                <div class="cj-hero__btns">
                    <?php foreach ($heroButtons as $btn): ?>
                    <a href="<?= esc($btn['url']) ?>" class="cj-btn cj-btn--<?= esc($btn['style'] ?? 'primary') ?>">
                        <?php if (! empty($btn['icon'])): ?><?= hc_icon($btn['icon'], 'sm') ?><?php endif; ?>
                        <?= esc($btn['label']) ?>
                    </a>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>
            </div>
            <div class="cj-hero__image cj-hero--inner__image">
                <img src="<?= esc($heroImage) ?>" alt="" loading="lazy">
            </div>
        </div>
        <?php else: ?>
        <div class="cj-hero__content cj-hero--inner__content">
            <?php if ($heroTag): ?><span class="cj-hero__tag"><?= esc($heroTag) ?></span><?php endif; ?>
            <h1 class="cj-hero__title cj-hero--inner__title"><?= $heroTitle ?></h1>
            <?php if ($heroSubtitle): ?><p class="cj-hero__subtitle"><?= esc($heroSubtitle) ?></p><?php endif; ?>
            <?php if ($heroButtons): ?>
            <div class="cj-hero__btns">
                <?php foreach ($heroButtons as $btn): ?>
                <a href="<?= esc($btn['url']) ?>" class="cj-btn cj-btn--<?= esc($btn['style'] ?? 'primary') ?>">
                    <?php if (! empty($btn['icon'])): ?><?= hc_icon($btn['icon'], 'sm') ?><?php endif; ?>
                    <?= esc($btn['label']) ?>
                </a>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
        </div>
        <?php endif; ?>
    </div>
    <?php if ($withStats): ?>
    <?= view('partials/stats-bar', ['stats' => $heroStats]) ?>
    <?php endif; ?>
</section>
