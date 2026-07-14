<section class="cj-section cj-section--gray">
    <div class="cj-container">
        <div class="cj-heading">
            <h2 class="cj-heading__title">How It Works</h2>
            <div class="cj-heading__line"></div>
        </div>
        <div class="cj-steps">
            <?php foreach (hc_config()->howItWorks as $i => $step): ?>
            <?php if ($i > 0): ?><div class="cj-step__arrow">›</div><?php endif; ?>
            <div class="cj-step">
                <div class="cj-step__num"><?= $step['num'] ?></div>
                <div class="cj-step__icon"><?= hc_icon($step['icon']) ?></div>
                <h4><?= esc($step['title']) ?></h4>
                <p><?= esc($step['desc']) ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
