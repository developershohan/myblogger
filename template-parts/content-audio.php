<?php

$postUrl = function_exists('get_field') ? get_field('post_format_url') : '';

?>

<article id=" <?php the_ID() ?> " <?php post_class('postbox__item format-image mb-50 transition-3') ?>>




    <div class="postbox__thumb w-img ratio ratio-16x9">
    <?php echo wp_oembed_get( $postUrl ); ?>
    </div>
    <div class="postbox__content">
        <?php echo get_template_part('template-parts/blog/blog-meta') ?>
        <h3 class="postbox__title">
            <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
        </h3>
        <div class="postbox__text">
            <?php the_excerpt() ?>
        </div>
        <?php get_template_part('template-parts/blog/blog-btn') ?>
    </div>
</article>