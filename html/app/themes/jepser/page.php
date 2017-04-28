<?php while (have_posts()) : the_post(); ?>
    <div class="page__container--wider">
        <?php get_template_part('templates/page', 'header'); ?>
    </div>
    <div class="page__container">
        <?php get_template_part('templates/content', 'page'); ?>
    </div>
<?php endwhile; ?>
