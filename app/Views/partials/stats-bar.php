<?php $statsItems = $stats ?? hc_config()->stats; ?>
<div class="cj-stats">
    <div class="cj-container">
        <div class="cj-stats__inner">
            <?php foreach ($statsItems as $stat): ?>
            <div class="cj-stats__item">
                <span class="cj-stats__icon"><?= hc_icon($stat['icon'] ?? 'heart') ?></span>
                <span class="cj-stats__value"><?= esc($stat['value']) ?></span>
                <span class="cj-stats__label"><?= esc($stat['label']) ?></span>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
