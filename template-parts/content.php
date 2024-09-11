<?php if (is_single()): ?>
    <article id=" <?php the_ID() ?> " <?php post_class('postbox__item ') ?>>


        <div class="postbox__main-wrapper">
            <div class="postbox__thumb w-img mb-30">
                <?php the_post_thumbnail(); ?>
            </div>

            <?php echo get_template_part('template-parts/blog/blog-meta') ?>

            <div class="postbox__details-content-wrapper">
                <h3 class="postbox__details-title"><?php the_title() ?></h3>
                <p> <?php the_content() ?></p>
            </div>
            <div class="postbox__share-wrapper mb-60">
                <div class="row align-items-center">
                    <div class="col-xl-7">
                        <div class="tagcloud tagcloud-sm">
                            <span>Tags:</span>
                            <?php myblogger_get_tags() ?>
                        </div>
                    </div>
                    <div class="col-xl-5">
                        <div class="postbox__share text-xl-end">
                            <span>Share On:</span>
                            <?php myblogger_social_share() ?>
                        </div>
                    </div>
                </div>
            </div>
    </article>

<?php else: ?>

    <article id=" <?php the_ID() ?> " <?php post_class('postbox__item format-image mb-50 transition-3') ?>>
        <div class="postbox__thumb w-img">
            <a href="<?php the_permalink() ?>">
                <?php the_post_thumbnail(); ?>
            </a>
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

<?php endif; ?>