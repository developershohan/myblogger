<?php

$postUrl = function_exists('get_field') ? get_field('post_gallery') : '';

?>

<article id=" <?php the_ID() ?> " <?php post_class('postbox__item format-image mb-50 transition-3') ?>>


    <div class="postbox__thumb w-img">

        <div class="swiper post_gallery fix">
            <div class="swiper-wrapper">
                <?php foreach ($postUrl as $item):
                    ?>
                    <div class="swiper-slide">
                        <img src="<?php echo esc_url($item['url']) ?>" alt="">
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
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