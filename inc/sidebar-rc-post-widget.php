<?php 


// Register Latest Posts Widget
function register_latest_posts_widget() {
    register_widget('Latest_Posts_Widget');
}
add_action('widgets_init', 'register_latest_posts_widget');

// Define the widget class
class Latest_Posts_Widget extends WP_Widget {

    function __construct() {
        parent::__construct(
            'latest_posts_widget',  // Widget ID
            __('Latest Posts', 'text_domain'), // Widget Name
            array('description' => __('Displays the latest posts', 'text_domain'))
        );
    }

    // Frontend display of the widget
    public function widget($args, $instance) {
        $title = apply_filters('widget_title', $instance['title']);
        $num_posts = !empty($instance['num_posts']) ? $instance['num_posts'] : 5; // Default to 5 posts

        echo $args['before_widget'];

        if (!empty($title)) {
            echo $args['before_title'] . $title . $args['after_title'];
        }

        // Fetch the latest posts
        $recent_posts = wp_get_recent_posts(array(
            'numberposts' => $num_posts,
            'post_status' => 'publish'
        ));

        echo '<div class="sidebar__post">'; // Wrapper div
        foreach ($recent_posts as $post) {
            $thumbnail = get_the_post_thumbnail_url($post['ID'], 'thumbnail');
            if (!$thumbnail) {
                $thumbnail = 'assets/img/blog/sidebar/blog-sm-1.jpg'; // Default image
            }

            echo '<div class="rc__post d-flex align-items-center">';
            echo '<div class="rc__post-thumb">';
            echo '<a href="' . get_permalink($post['ID']) . '"><img src="' . $thumbnail . '" alt="' . esc_attr($post['post_title']) . '"></a>';
            echo '</div>';
            echo '<div class="rc__post-content">';
            echo '<h3 class="rc__post-title"><a href="' . get_permalink($post['ID']) . '">' . $post['post_title'] . '</a></h3>';
            echo '<div class="rc__meta">';
            echo '<span><svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7.5 14C11.0899 14 14 11.0899 14 7.5C14 3.91015 11.0899 1 7.5 1C3.91015 1 1 3.91015 1 7.5C1 11.0899 3.91015 14 7.5 14Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M7.5 3.59961V7.49961L10.1 8.79961" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg> ' . get_the_date('F j, Y', $post['ID']) . '</span>';
            echo '</div>'; // Close .rc__meta
            echo '</div>'; // Close .rc__post-content
            echo '</div>'; // Close .rc__post
        }
        echo '</div>'; // Close .sidebar__post

        echo $args['after_widget'];
    }

    // Widget Backend
    public function form($instance) {
        $title = !empty($instance['title']) ? $instance['title'] : __('Latest Posts', 'text_domain');
        $num_posts = !empty($instance['num_posts']) ? $instance['num_posts'] : 5;
        ?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php _e('Title:'); ?></label> 
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($title); ?>">
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('num_posts')); ?>"><?php _e('Number of posts to display:'); ?></label> 
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('num_posts')); ?>" name="<?php echo esc_attr($this->get_field_name('num_posts')); ?>" type="number" value="<?php echo esc_attr($num_posts); ?>" min="1">
        </p>
        <?php 
    }

    // Update widget settings
    public function update($new_instance, $old_instance) {
        $instance = array();
        $instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';
        $instance['num_posts'] = (!empty($new_instance['num_posts'])) ? strip_tags($new_instance['num_posts']) : '';
        return $instance;
    }
}
