<div class="blog__container">
    <?php get_template_part('templates/page', 'header'); ?>
</div>
<div class="blog__container">
    <?php if (!have_posts()) : ?>
        <div class="alert alert-warning">
            <?php _e('Sorry, no results were found.', 'sage'); ?>
        </div>
        <?php get_search_form(); ?>
    <?php endif; ?>

    <?php

    query_posts($query_string . '&posts_per_page=-1&orderby=modified');
    while (have_posts()) {
        the_post();
    ?>
        <?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
    <?php
    }
    ?>
</div>
<div class="blog__container">
    <?php the_posts_navigation(); ?>
</div>
