<?php

namespace App;

add_shortcode('cta-button', function ($atts, $content) {
    $atts = shortcode_atts([
        'href' => '',
        'popup' => false,
        'classes'  => []
    ], $atts);

    extract($atts);

    $classes[] =  'cta__button';

    if ($popup) {
        $classes[] = 'typeform-share';
    }

    ob_start();
?>
<div class="cta">
    <a
        class="<?= implode(' ', $classes); ?>"
        href="<?= $href; ?>"
        <?= $popup ? 'data-mode="popup" ' : ''; ?>
    >
        <?= $content; ?>
    </a>
</div>
<?php

    $content = ob_get_contents();
    ob_end_clean();

    return $content;
});
