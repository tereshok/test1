<?php

function ajax_pagination_function() {
    $paged = $_POST['paged']; ?>

    <div class="column-xl-8 post-content post-block">
    <?php query_posts([ 'post_type'      => 'property', 
                        'orderby'        => 'date', 
                        'order'          => 'ASC', 
                        'posts_per_page' => 6, 
                        'paged'          => $paged]); 
    ?>
    <?php if (have_posts() ) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <div class="post-item">
                <div>
                    
                </div>
                <a href="<?php the_permalink(); ?>">
                    <h3><?php the_title(); ?></h3>
                </a>
            </div>
        <?php endwhile; ?>
        <?php the_posts_pagination(
            $args = [
                'show_all'           => false, 
                'end_size'           => 1,     
                'mid_size'           => 1,    
                'prev_next'          => false,  
                'add_args'           => false, 
                'add_fragment'       => '',     
                'screen_reader_text' => __( 'Posts navigation' ),
                'aria_label'         => __( 'Posts' ), 
                'class'              => 'pagination', 
            ]); ?>
            <?php  wp_reset_query(); ?>
    <?php else : ?>
        <div>
            <?php _e('Post not found.', 'Property'); ?>
        </div>
    <?php endif; ?> 
</div>

<?php
    die();
}

add_action( 'wp_ajax_pagination', 'ajax_pagination_function' );
add_action( 'wp_ajax_nopriv_pagination', 'ajax_pagination_function' );
