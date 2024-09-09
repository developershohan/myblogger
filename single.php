<?php get_header() ?>




<!-- postbox area start -->
<section class="postbox__area grey-bg-4 pt-120 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-xxl-8 col-lg-8">
                <div class="postbox__wrapper">
                    <?php if (have_posts()):
                        while (have_posts()):
                            the_post(); ?>
                            <?php get_template_part('template-parts/content', get_post_format()); ?>
                        <?php endwhile; else: ?>
                        <p><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p>
                    <?php endif; ?>

                    <?php myblogger_pagination('<i class="fa-regular fa-arrow-left"></i>Prev', '<i class="fa-regular fa-arrow-right"></i>', '', ['class' => '']) ?>
                </div>
            </div>

            <div class="col-xxl-4 col-lg-4">
                <div class="sidebar__wrapper pl-40">
                    <?php get_sidebar() ?>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- postbox area end -->


<?php get_footer() ?>