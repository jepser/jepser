<style>
    body, .article__date {
        background-color: <?= $body; ?>;
        color: <?= $text; ?>;
    }
    .article--full .article__category {
        background-color: <?= $text; ?>;
    }
    .article--full .article__category a {
        color: <?= $body; ?>;
    }
    .header__logo svg * {
        stroke: <?= $text; ?>;
    }
    .header__logo svg:hover * {
        stroke: <?= $body; ?>;
        stroke-width: 2px;
        fill: <?= $text; ?>;
    }
    .c-cta__link:hover {
        background-color: <?= $text; ?>;
        color: <?= $body; ?>;
        border-color: <?= $text; ?>
    }
</style>
