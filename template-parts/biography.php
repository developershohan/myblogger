<?php
    $author_data = get_the_author_meta( 'description', get_query_var( 'author' ) );
    $author_info = get_the_author_meta( 'finbest_write_by');
    $author_name = get_the_author_meta( 'display_name');
    $author_description = get_the_author_meta( 'display_name');
    $facebook_url = get_the_author_meta( 'finbest_facebook' );
    $twitter_url = get_the_author_meta( 'finbest_twitter' );
    $linkedin_url = get_the_author_meta( 'finbest_linkedin' );
    $instagram_url = get_the_author_meta( 'finbest_instagram' );
    $finbest_url = get_the_author_meta( 'finbest_youtube' );
    $finbest_write_by = get_the_author_meta( 'finbest_write_by' );
    $author_bio_avatar_size = 180;
  
?>


<div class="postbox__author d-sm-flex align-items-start white-bg mb-95">
    <div class="postbox__author-thumb">
        <a href="<?php print esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) )?>">
        <?php print get_avatar( get_the_author_meta( 'user_email' ), $author_bio_avatar_size, '', '', [ 'class' => 'media-object img-circle' ] );?> 
        </a>
    </div>
    <div class="postbox__author-content">
        <h3 class="postbox__author-title">
            <a href="#"><?php echo esc_html($author_name) ?></a>
        </h3>
        <p><?php echo esc_html($author_description) ?></p>

        <div class="postbox__author-social d-flex align-items-center">
            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="#"><i class="fa-brands fa-twitter"></i></a>
            <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
        </div>
    </div>
</div>


