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



include_once('inc/common/scripts.php');
if (class_exists('Kirki')) {

    include_once('inc/myblogger-kirki.php');
}
include_once('inc/template-function.php');
include_once('inc/nav-walker.php');
 include_once('inc/breadcrumb.php');