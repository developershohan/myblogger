<?php


// myblogger theme support
function myblogger_theme_support()
{

    add_theme_support('title-tag');

    add_theme_support(
        'post-thumbnails'
    );
    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');


    /** post formats */
    $post_formats = array('aside', 'image', 'gallery', 'video', 'audio', 'link', 'quote', 'status');
    add_theme_support('post-formats', $post_formats);


    /** HTML5 support **/
    add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption'));

    /** refresh widgest **/
    add_theme_support('customize-selective-refresh-widgets');

    register_nav_menus(
        array(
            'main-menu' => __('Main Menu'),
            'side-panel-menu' => __('Side Panel Menu')
        )
    );


}

add_action('after_setup_theme', 'myblogger_theme_support');


add_theme_support('woocommerce');
add_filter('woocommerce_enqueue_styles', '__return_false');



function myblogger_logo()
{
    $myblogger_logo = get_theme_mod('myblogger_logo', get_template_directory_uri() . '/assets/img/logo/logo-black.svg');
    ?>


    <a href="<?php echo esc_url(home_url('/')); ?> ">
        <img src="<?php echo esc_url($myblogger_logo); ?>" alt=" <?php echo bloginfo() ?> ">
    </a>

    <?php

}

// myblogger_search_logo
function myblogger_search_logo()
{
    $myblogger_search_logo = get_theme_mod('myblogger_search_logo', get_template_directory_uri() . '/assets/img/logo/logo.svg');
    ?>


    <a href="<?php echo esc_url(home_url('/')); ?> ">
        <img src="<?php echo esc_url($myblogger_search_logo); ?>" alt=" <?php echo bloginfo() ?> ">
    </a>

    <?php

}

// myblogger_search_logo
function myblogger_side_panel_logo()
{
    $myblogger_side_panel_logo = get_theme_mod('myblogger_side_panel_logo', get_template_directory_uri() . '/assets/img/logo/logo-black.svg');
    ?>


    <a href="<?php echo esc_url(home_url('/')); ?> ">
        <img src="<?php echo esc_url($myblogger_side_panel_logo); ?>" alt=" <?php echo bloginfo() ?> ">
    </a>

    <?php

}

function myblogger_clasic_widget_support()
{
    remove_theme_support('widgets-block-editor');
}
add_action('after_setup_theme', 'myblogger_clasic_widget_support');


function myblogger_widgets_init()
{

    $footer_style_2_switch = get_theme_mod('footer_layout_2_switch', false);
    $footer_style_3_switch = get_theme_mod('footer_layout_2_switch', false);

    /**
     * blog sidebar
     */
    register_sidebar([
        'name' => esc_html__('Blog Sidebar', 'myblogger'),
        'id' => 'blog-sidebar',
        'before_widget' => '<div id="%1$s" class="sidebar__widget mb-45 %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="sidebar__widget-title">',
        'after_title' => '</h3>',
    ]);

    /**
     * blog sidebar
     */
    if (class_exists("TP_Core")):
        register_sidebar([
            'name' => esc_html__('Services Sidebar', 'myblogger'),
            'id' => 'tp-services-sidebar',
            'before_widget' => '<div id="%1$s" class="tp-service-widget-item tp-service-widget-tab mb-40 %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="tp-service-widget-title">',
            'after_title' => '</h3>',
        ]);
    endif;


    $footer_widgets = get_theme_mod('footer_widget_number', 4);

    // footer default
    for ($num = 1; $num <= $footer_widgets; $num++) {
        register_sidebar([
            'name' => sprintf(esc_html__('Footer %1$s', 'myblogger'), $num),
            'id' => 'footer-' . $num,
            'description' => sprintf(esc_html__('Footer Column %1$s', 'myblogger'), $num),
            'before_widget' => '<div id="%1$s" class="tp-footer-widget tp-footer-2-col-' . $num . ' mb-50 %2$s"> <div class="tp-footer-widget-content">',
            'after_widget' => '</div></div>',
            'before_title' => '<h3 class="tp-footer-widget-title">',
            'after_title' => '</h3>',
        ]);
    }

    // footer 2
    if ($footer_style_2_switch) {
        for ($num = 1; $num <= $footer_widgets; $num++) {

            register_sidebar([
                'name' => sprintf(esc_html__('Footer Style 2 : %1$s', 'myblogger'), $num),
                'id' => 'footer-2-' . $num,
                'description' => sprintf(esc_html__('Footer Style 2 : %1$s', 'myblogger'), $num),
                'before_widget' => '<div id="%1$s" class="tp-footer-widget tp-footer-col-' . $num . ' mb-50 %2$s"> <div class="tp-footer-widget-content">',
                'after_widget' => '</div></div>',
                'before_title' => '<h3 class="tp-footer-widget-title">',
                'after_title' => '</h3>',
            ]);
        }
    }

    // footer 3
    if ($footer_style_3_switch) {
        for ($num = 1; $num <= $footer_widgets; $num++) {

            register_sidebar([
                'name' => sprintf(esc_html__('Footer Style 3 : %1$s', 'myblogger'), $num),
                'id' => 'footer-3-' . $num,
                'description' => sprintf(esc_html__('Footer Style 3 : %1$s', 'myblogger'), $num),
                'before_widget' => '<div id="%1$s" class="tp-footer-widget tp-footer-3-col-' . $num . ' mb-50 %2$s"> <div class="tp-footer-widget-content">',
                'after_widget' => '</div></div>',
                'before_title' => '<h3 class="tp-footer-widget-title">',
                'after_title' => '</h3>',
            ]);
        }
    }
}
add_action('widgets_init', 'myblogger_widgets_init');

/**
 * Generate custom search form
 *
 * @param string $form Form HTML.
 * @return string Modified form HTML.
 */
function wpdocs_my_search_form($form)
{
    $form = '                           
    <div class="sidebar__widget-content">
    <div class="sidebar__search">
       <form role="search" method="get"  action="' . home_url('/') . '" >
          <div class="sidebar__search-input">
             <input type="text" value="' . get_search_query() . '" name="s" id="s" placeholder="Enter your keywords...">
             <button type="submit">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                   <path d="M9.55 18.1C14.272 18.1 18.1 14.272 18.1 9.55C18.1 4.82797 14.272 1 9.55 1C4.82797 1 1 4.82797 1 9.55C1 14.272 4.82797 18.1 9.55 18.1Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                   <path d="M19.0002 19.0002L17.2002 17.2002" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
             </button>
          </div>
       </form>
    </div>
 </div>';

    return $form;
}
add_filter('get_search_form', 'wpdocs_my_search_form');

include_once('inc/common/scripts.php');
if (class_exists('Kirki')) {

    include_once('inc/myblogger-kirki.php');
}
include_once('inc/template-function.php');
include_once('inc/nav-walker.php');
include_once('inc/breadcrumb.php');
if (class_exists('WooCommerce')) {

include_once('inc/woocommerce/myblogger-woo.php');
}
include_once('inc/sidebar-rc-post-widget.php');
