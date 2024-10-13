<?php

$postUrl = function_exists('get_field') ? get_field('post_format_url') : '';

?>

<article id=" <?php the_ID() ?> " <?php post_class('postbox__item format-video mb-50 transition-3') ?>>
    <div class="postbox__thumb postbox__video w-img p-relative">
        <a href="<?php the_permalink() ?>">
            <?php the_post_thumbnail('full'); ?>
        </a>
        <?php if (!empty($postUrl)): ?>
            <a href=" <?php echo esc_url($postUrl); ?>" class="play-btn pulse-btn popup-video"><i
                    class="fas fa-play"></i></a>
        <?php endif; ?>

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