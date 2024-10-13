<?php

// header options
function myblogger_header()
{

    $myblogger_header_option = get_theme_mod('myblogger_header_select_setting', 'header-1');
    if ($myblogger_header_option == 'header-1') {
        # code...
        get_template_part('template-parts/header/header-1');
    } elseif ($myblogger_header_option == 'header-2') {
        get_template_part('template-parts/header/header-2');

    }

}


// myblogger_menu
function myblogger_menu()
{
    wp_nav_menu(
        array(
            'theme_location' => 'main-menu',
            'menu_class' => '',
            'menu_id' => '',
            'fallback_cb' => 'Myblogger_Walker_Nav_Menu::fallback',
            'walker' => new Myblogger_Walker_Nav_Menu,
        )
    );
}

// myblogger_side_panel_menu
function myblogger_side_panel_menu()
{
    wp_nav_menu(
        array(
            'theme_location' => 'side-panel-menu',
            'menu_class' => '',
            'menu_id' => '',
            'fallback_cb' => 'Myblogger_Walker_Nav_Menu::fallback',
            'walker' => new Myblogger_Walker_Nav_Menu,
        )
    );
}


// socail media info

function myblogger_social_media()
{
    $myblogger_facebook = get_theme_mod('myblogger_facebook', __('#', 'myblogger'));
    $myblogger_twitter = get_theme_mod('myblogger_twitter', __('#', 'myblogger'));
    $myblogger_youtube = get_theme_mod('myblogger_youtube', __('#', 'myblogger'));
    $myblogger_linkedin = get_theme_mod('myblogger_linkedin', __('#', 'myblogger'));
    ?>
    <?php if (!empty($myblogger_facebook)): ?>
        <a href="<?php echo esc_url($myblogger_facebook) ?>  "><i class="fab fa-facebook-f"></i></a>
    <?php endif; ?>
    <?php if (!empty($myblogger_twitter)): ?>

        <a href="<?php echo esc_url($myblogger_twitter) ?> "><i class="fab fa-twitter"></i></a>
    <?php endif; ?>
    <?php if (!empty($myblogger_youtube)): ?>

        <a href="<?php echo esc_url($myblogger_youtube) ?> "><i class="fab fa-youtube"></i></a>
    <?php endif; ?>
    <?php if (!empty($myblogger_linkedin)): ?>

        <a href="<?php echo esc_url($myblogger_linkedin) ?> "><i class="fab fa-linkedin"></i></a>
    <?php endif; ?>
<?php

}

add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10, 3 );

function remove_thumbnail_dimensions( $html, $post_id, $post_image_id ) {
    $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
    return $html;
}

/**
 *
 * pagination
 */
if ( !function_exists( 'myblogger_pagination' ) ) {

    function _myblogger_pagi_callback( $pagination ) {
        return $pagination;
    }

    //page navegation
    function myblogger_pagination( $prev, $next, $pages, $args ) {
        global $wp_query, $wp_rewrite;
        $menu = '';
        $wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;

        if ( $pages == '' ) {
            global $wp_query;
            $pages = $wp_query->max_num_pages;

            if ( !$pages ) {
                $pages = 1;
            }

        }

        $pagination = [
            'base'      => add_query_arg( 'paged', '%#%' ),
            'format'    => '',
            'total'     => $pages,
            'current'   => $current,
            'prev_text' => $prev,
            'next_text' => $next,
            'type'      => 'array',
        ];

        //rewrite permalinks
        if ( $wp_rewrite->using_permalinks() ) {
            $pagination['base'] = user_trailingslashit( trailingslashit( remove_query_arg( 's', get_pagenum_link( 1 ) ) ) . 'page/%#%/', 'paged' );
        }

        if ( !empty( $wp_query->query_vars['s'] ) ) {
            $pagination['add_args'] = ['s' => get_query_var( 's' )];
        }

        $pagi = '';
        if ( paginate_links( $pagination ) != '' ) {
            $paginations = paginate_links( $pagination );
            $pagi .= '<div class="tp-pagination tp-pagination-style-2 mt-20"><nav><ul>';
            foreach ( $paginations as $key => $pg ) {
                $pagi .= '<li>' . $pg . '</li>';
            }
            $pagi .= '</ul></nav></div>';
        }

        print _myblogger_pagi_callback( $pagi );
    }
}
