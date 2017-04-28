<?php
$postCategory = get_the_category();
?>
<div class="article__date">
    <span class="article__day"><?= get_the_modified_date('d'); ?></span>
    <span class="article__month"><?= get_the_modified_date('M'); ?></span>
    <span class="article__year"><?= get_the_modified_date('Y'); ?></span>
</div>
<div class="article__category">
    <a href="<?= get_category_link($postCategory[0]); ?>" class="article__link">
        <?= $postCategory[0]->name; ?>
    </a>
</div>
