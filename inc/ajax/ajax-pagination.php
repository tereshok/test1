<?php

function ajax_pagination_function() {
    $paged = $_POST['paged'];
    query_posts([ 'post_type'      => 'property', 
                                    'orderby'        => 'date', 
                                    'order'          => 'ASC', 
                                    'posts_per_page' => 2, 
                                    'paged'          => $paged]); 
                ?>
                
                    <?php while (have_posts()) : the_post(); ?>
                        <div class="post-item">
                            <div>
                                
                            </div>
                            <a href="<?php the_permalink(); ?>">
                                <h3><?php the_title(); ?></h3>
                            </a>
                        </div>
                    <?php endwhile; ?>
   <?php
    wp_die();
}

add_action( 'wp_ajax_pagination', 'ajax_pagination_function' );
add_action( 'wp_ajax_nopriv_pagination', 'ajax_pagination_function' );


