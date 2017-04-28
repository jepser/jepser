<article class="article article--mini">
    <?php get_template_part('templates/entry-meta'); ?>
    <div class="article__title-wrap">
        <div class="article__title-container">
            <h2 class="article__title">
                <a href="<?php the_permalink(); ?>" class="article__link">
                    <?php the_title(); ?>
                </a>
            </h2>
        </div>
    </div>    
</article>
