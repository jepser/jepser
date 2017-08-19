<?php

namespace App;

add_shortcode('cta-button', function ($atts, $content) {
    $atts = shortcode_atts([
        'href' => ''
    ], $atts);

    extract($atts);

    ob_start();
?>
<div class="cta">
    <a class="cta__button" href="<?= $href; ?>">
        <?= $content; ?>
    </a>
</div>
<?php

    $content = ob_get_contents();
    ob_end_clean();

    return $content;
});
