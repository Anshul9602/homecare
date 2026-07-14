<div class="cj-stats">
    <div class="cj-container cj-stats__inner">
        <?php foreach (hc_config()->stats as $stat): ?>
        <div class="cj-stats__item">
            <div class="cj-stats__value"><?= esc($stat['value']) ?></div>
            <div class="cj-stats__label"><?= esc($stat['label']) ?></div>
        </div>
        <?php endforeach; ?>
    </div>
</div>
