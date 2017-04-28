<div class="blog__container">
    <?php get_template_part('templates/page', 'header'); ?>
</div>
<?php
while (have_posts()) {
    the_post();
?>
    <article class="article article--full">
        <div class="article__heading">
            <?php get_template_part('templates/entry-meta'); ?>
            <h1 class="article__title"><?php the_title(); ?></h1>
        </div>
        <div class="article__container">
            <div class="article__content">
                <?php the_content(); ?>
            </div>
        </div>
    </article>
<?php
}
?>
