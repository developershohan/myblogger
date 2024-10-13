<?php

if (is_single()): ?>
    <div class="postbox__main-wrapper">
        <div class="postbox__thumb w-img mb-30">
            <?php the_post_thumbnail(); ?>
        </div>

        <div class="postbox__meta">
            <?php echo get_template_part('template-parts/blog/blog-meta') ?>
        </div>
        <div class="postbox__details-content-wrapper">
            <h3 class="postbox__details-title"><?php the_title() ?></h3>
            <p><?php the_content() ?></p>
        </div>
        <div class="postbox__more-navigation white-bg d-none d-md-flex justify-content-between flex-wrap mb-40">
            <div class="postbox__more-left d-flex align-items-center">
                <div class="postbox__more-icon">
                    <a href="blog-details.html">
                        <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7 12.9718L2.06061 8.04401C1.47727 7.46205 1.47727 6.50975 2.06061 5.92778L7 1"
                                stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </a>
                </div>
                <div class="postbox__more-content">
                    <p>Previous Article</p>
                    <h4>
                        <a href="blog-details.html">Traveling Solo Is Awesome</a>
                    </h4>
                </div>
            </div>
            <div class="postbox__more-right d-flex align-items-center">
                <div class="postbox__more-content">
                    <p>Next Article</p>
                    <h4>
                        <a href="blog-details.html">A Beautiful Sunday Morning</a>
                    </h4>
                </div>
                <div class="postbox__more-icon">
                    <a href="blog-details.html">
                        <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 12.9718L5.93939 8.04401C6.52273 7.46205 6.52273 6.50975 5.93939 5.92778L1 1"
                                stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="postbox__share-wrapper mb-60">
            <div class="row align-items-center">
                <div class="col-xl-7">
                    <div class="tagcloud tagcloud-sm">
                        <span>Tags:</span>
                        <a href="#">Blog</a>
                        <a href="#">Creative</a>
                        <a href="#">Portfoilo</a>
                        <a href="#">Harry</a>
                    </div>
                </div>
                <div class="col-xl-5">
                    <div class="postbox__share text-xl-end">
                        <span>Share On:</span>
                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="postbox__author d-sm-flex align-items-start white-bg mb-95">
            <div class="postbox__author-thumb">
                <a href="#">
                    <img src="assets/img/users/user-14.jpg" alt="">
                </a>
            </div>
            <div class="postbox__author-content">
                <h3 class="postbox__author-title">
                    <a href="#">Colene Landin</a>
                </h3>
                <p>Digital content wrangler | UX enthusiast | Recovering educator & GIF hockey fan Oxford comma or death.!
                </p>

                <div class="postbox__author-social d-flex align-items-center">
                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>

        <div class="postbox__related mb-65">
            <h3 class="postbox__related-title">You may also like</h3>

            <div class="row">
                <div class="col-xl-6 col-lg-12 col-md-6">
                    <div class="blog__grid-item">
                        <div class="blog__item-10 white-bg transition-3 mb-30 fix">
                            <div class="blog__thumb-10 w-img fix">
                                <a href="blog-details.html">
                                    <img src="assets/img/blog/grid/blog-grid-1.jpg" alt="">
                                </a>
                                <div class="blog__tag-10">
                                    <a href="#">Work Life</a>
                                </div>
                            </div>
                            <div class="blog__content-10">
                                <div class="blog__content-10-top">
                                    <div class="blog__meta-10-wrapper d-flex align-items-center">
                                        <div class="blog__meta-10 has-date">
                                            <span>
                                                <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M7.5 14C11.0899 14 14 11.0899 14 7.5C14 3.91015 11.0899 1 7.5 1C3.91015 1 1 3.91015 1 7.5C1 11.0899 3.91015 14 7.5 14Z"
                                                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M7.5 3.59961V7.49961L10.1 8.79961" stroke="currentColor"
                                                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg> January 21, 2022
                                            </span>
                                        </div>
                                    </div>
                                    <h3 class="blog__title-10">
                                        <a href="blog-details.html">How to Create an Effective Design Portfolio</a>
                                    </h3>

                                    <p>Lorem ipsum is simply dummy text ipsum been dummy...</p>
                                </div>
                                <div class="blog__content-10-bottom d-flex align-items-center justify-content-between">
                                    <div class="blog__meta-author-10 d-flex align-items-center">
                                        <div class="blog__meta-author-thumb-10">
                                            <a href="#">
                                                <img src="assets/img/users/user-2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="blog__meta-author-content-10">
                                            <span>By<a href="#"> Jason</a></span>
                                        </div>
                                    </div>
                                    <div class="blog__meta-10 blog-meta-10-2">
                                        <span>
                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12.9718 6.66668C12.9741 7.54659 12.769 8.4146 12.3732 9.20001C11.9039 10.1412 11.1825 10.9328 10.2897 11.4862C9.39697 12.0396 8.36813 12.3329 7.31844 12.3333C6.4406 12.3356 5.57463 12.13 4.79106 11.7333L1 13L2.26369 9.20001C1.86791 8.4146 1.66281 7.54659 1.6651 6.66668C1.66551 5.61452 1.95815 4.58325 2.51025 3.68838C3.06236 2.79352 3.85211 2.0704 4.79106 1.60002C5.57463 1.20331 6.4406 0.997725 7.31844 1.00002H7.65099C9.03729 1.07668 10.3467 1.66319 11.3284 2.64726C12.3102 3.63132 12.8953 4.94378 12.9718 6.33334V6.66668Z"
                                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>35
                                        </span>
                                        <span>
                                            <svg width="17" height="14" viewBox="0 0 17 14" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M11.0443 7.00397C11.0443 8.43962 9.88694 9.59974 8.45466 9.59974C7.02238 9.59974 5.86499 8.43962 5.86499 7.00397C5.86499 5.56832 7.02238 4.4082 8.45466 4.4082C9.88694 4.4082 11.0443 5.56832 11.0443 7.00397Z"
                                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M8.45466 13C11.0082 13 13.3881 11.4918 15.0446 8.88157C15.6956 7.85921 15.6956 6.14078 15.0446 5.11843C13.3881 2.50816 11.0082 1 8.45466 1C5.90115 1 3.52126 2.50816 1.86474 5.11843C1.21371 6.14078 1.21371 7.85921 1.86474 8.88157C3.52126 11.4918 5.90115 13 8.45466 13Z"
                                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>234,5k
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12 col-md-6">
                    <div class="blog__grid-item">
                        <div class="blog__item-10 white-bg transition-3 mb-30 fix">
                            <div class="blog__thumb-10 w-img fix">
                                <a href="blog-details.html">
                                    <img src="assets/img/blog/grid/blog-grid-2.jpg" alt="">
                                </a>
                                <div class="blog__tag-10">
                                    <a href="#">Music</a>
                                </div>
                            </div>
                            <div class="blog__content-10">
                                <div class="blog__content-10-top">
                                    <div class="blog__meta-10-wrapper d-flex align-items-center">
                                        <div class="blog__meta-10 has-date">
                                            <span>
                                                <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M7.5 14C11.0899 14 14 11.0899 14 7.5C14 3.91015 11.0899 1 7.5 1C3.91015 1 1 3.91015 1 7.5C1 11.0899 3.91015 14 7.5 14Z"
                                                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M7.5 3.59961V7.49961L10.1 8.79961" stroke="currentColor"
                                                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg> January 22, 2022
                                            </span>
                                        </div>
                                    </div>
                                    <h3 class="blog__title-10">
                                        <a href="blog-details.html">Look at usual things with unusual eyes</a>
                                    </h3>

                                    <p>Lorem ipsum is simply dummy text ipsum been dummy...</p>
                                </div>
                                <div class="blog__content-10-bottom d-flex align-items-center justify-content-between">
                                    <div class="blog__meta-author-10 d-flex align-items-center">
                                        <div class="blog__meta-author-thumb-10">
                                            <a href="#">
                                                <img src="assets/img/users/user-1.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="blog__meta-author-content-10">
                                            <span>By<a href="#"> Bivouac</a></span>
                                        </div>
                                    </div>
                                    <div class="blog__meta-10 blog-meta-10-2">
                                        <span>
                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12.9718 6.66668C12.9741 7.54659 12.769 8.4146 12.3732 9.20001C11.9039 10.1412 11.1825 10.9328 10.2897 11.4862C9.39697 12.0396 8.36813 12.3329 7.31844 12.3333C6.4406 12.3356 5.57463 12.13 4.79106 11.7333L1 13L2.26369 9.20001C1.86791 8.4146 1.66281 7.54659 1.6651 6.66668C1.66551 5.61452 1.95815 4.58325 2.51025 3.68838C3.06236 2.79352 3.85211 2.0704 4.79106 1.60002C5.57463 1.20331 6.4406 0.997725 7.31844 1.00002H7.65099C9.03729 1.07668 10.3467 1.66319 11.3284 2.64726C12.3102 3.63132 12.8953 4.94378 12.9718 6.33334V6.66668Z"
                                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>35
                                        </span>
                                        <span>
                                            <svg width="17" height="14" viewBox="0 0 17 14" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M11.0443 7.00397C11.0443 8.43962 9.88694 9.59974 8.45466 9.59974C7.02238 9.59974 5.86499 8.43962 5.86499 7.00397C5.86499 5.56832 7.02238 4.4082 8.45466 4.4082C9.88694 4.4082 11.0443 5.56832 11.0443 7.00397Z"
                                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M8.45466 13C11.0082 13 13.3881 11.4918 15.0446 8.88157C15.6956 7.85921 15.6956 6.14078 15.0446 5.11843C13.3881 2.50816 11.0082 1 8.45466 1C5.90115 1 3.52126 2.50816 1.86474 5.11843C1.21371 6.14078 1.21371 7.85921 1.86474 8.88157C3.52126 11.4918 5.90115 13 8.45466 13Z"
                                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>234,5k
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="postbox__comment-wrapper">
            <div class="postbox__comment mb-95">
                <h3 class="postbox__comment-title">Comments (2)</h3>
                <ul>
                    <li>
                        <div class="postbox__comment-box d-sm-flex align-items-start">
                            <div class="postbox__comment-info">
                                <div class="postbox__comment-avater">
                                    <img src="assets/img/users/user-17.jpg" alt="">
                                </div>
                            </div>
                            <div class="postbox__comment-text ">
                                <div class="postbox__comment-name">
                                    <span class="post-meta"> July 14, 2022</span>
                                    <h5><a href="#">Eleanor Fant</a></h5>
                                </div>
                                <p>One’s of the best template out of there. design, code quality, updates etc everything you
                                    needs guys, buy it you won’t regret it!</p>
                                <div class="postbox__comment-reply">
                                    <a href="#">Reply</a>
                                </div>
                            </div>
                        </div>
                        <ul class="children">
                            <li>
                                <div class="postbox__comment-box d-sm-flex align-items-start">
                                    <div class="postbox__comment-info">
                                        <div class="postbox__comment-avater">
                                            <img src="assets/img/users/user-19.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="postbox__comment-text ">
                                        <div class="postbox__comment-name">
                                            <span class="post-meta"> July 14, 2022</span>
                                            <h5><a href="#">Alexander Ljung</a></h5>
                                        </div>
                                        <p>This theme is super awesome! But I had one small issue with link option in
                                            parallax portfolio. The other day! </p>
                                        <div class="postbox__comment-reply">
                                            <a href="#">Reply</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <div class="postbox__comment-box d-sm-flex align-items-start">
                            <div class="postbox__comment-info">
                                <div class="postbox__comment-avater">
                                    <img src="assets/img/users/user-18.jpg" alt="">
                                </div>
                            </div>
                            <div class="postbox__comment-text ">
                                <div class="postbox__comment-name">
                                    <span class="post-meta"> July 14, 2022</span>
                                    <h5><a href="#">Shahnewaz Sakil</a></h5>
                                </div>
                                <p>His many legs, pitifully thin compared with the size of the rest of him, waved about
                                    helplessly as he looked</p>
                                <div class="postbox__comment-reply">
                                    <a href="#">Reply</a>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="postbox__comment-form">
                <h3 class="postbox__comment-form-title">Leave A Reply</h3>
                <p>Your email address will not be published. Required fields are marked *</p>
                <form action="#">
                    <div class="row">
                        <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6">
                            <div class="postbox__comment-input">
                                <input type="text" placeholder="Name*">
                            </div>
                        </div>
                        <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6">
                            <div class="postbox__comment-input">
                                <input type="email" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-xxl-4 col-xl-4 col-lg-12">
                            <div class="postbox__comment-input">
                                <input type="text" placeholder="Website">
                            </div>
                        </div>
                        <div class="col-xxl-12">
                            <div class="postbox__comment-input">
                                <textarea placeholder="Your Comment Here..."></textarea>
                            </div>
                        </div>
                        <div class="col-xxl-12">
                            <div class="postbox__comment-agree d-flex align-items-start mb-25">
                                <input class="e-check-input" type="checkbox" id="e-agree">
                                <label class="e-check-label" for="e-agree">Save my name, email, and website in this browser
                                    for the next time I comment.</label>
                            </div>
                        </div>
                        <div class="col-xxl-12">
                            <div class="postbox__comment-btn">
                                <button type="submit" class="tp-btn">Submit Comment</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


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