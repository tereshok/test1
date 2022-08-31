<?php

function ajax_filter_function() {
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $query_post = [ 'post_type'      => 'property',
        'orderby'        => 'date',
        'order'          => 'ASC',
        'posts_per_page' => 2,
        'paged'          => $paged,
    ];


    if(isset($_POST['filter'])) {
        $query = [
            'tax_query' => [
                'relation' => 'AND',
            ],
        ];

        if(isset($_POST['filter']['amenities']) && is_array($_POST['filter']['amenities'])) {
            $termId = [];
            foreach ($_POST['filter']['amenities'] as $value) {
                array_push($termId, intval($value));
            }

            $query['tax_query'][] = [
                'taxonomy' => 'amenities',
                'fields' => 'term_id',
                'terms' => $termId
            ];
        }

        if(isset($_POST['filter']['extras']) && is_array($_POST['filter']['extras'])) {
            $termId = [];
            foreach ($_POST['filter']['extras'] as $value) {
                array_push($termId, intval($value));
            }

            $query['tax_query'][] = [
                'taxonomy' => 'extras',
                'fields' => 'term_id',
                'terms' => $termId
            ];
        }

        if(isset($_POST['filter']['accessibility']) && is_array($_POST['filter']['accessibility'])) {
            $termId = [];
            foreach ($_POST['filter']['accessibility'] as $value) {
                array_push($termId, intval($value));
            }

            $query['tax_query'][] = [
                'taxonomy' => 'accessibility',
                'fields' => 'term_id',
                'terms' => $termId
            ];
        }

        if(isset($_POST['filter']['bedroom_features']) && is_array($_POST['filter']['bedroom_features'])) {
            $termId = [];
            foreach ($_POST['filter']['bedroom_features'] as $value) {
                array_push($termId, intval($value));
            }

            $query['tax_query'][] = [
                'taxonomy' => 'bedroom_features',
                'fields' => 'term_id',
                'terms' => $termId
            ];
        }

        if(isset($_POST['filter']['property_type']) && is_array($_POST['filter']['property_type'])) {
            $termId = [];
            foreach ($_POST['filter']['property_type'] as $value) {
                array_push($termId, intval($value));
            }

            $query['tax_query'][] = [
                'taxonomy' => 'property_type',
                'fields' => 'term_id',
                'terms' => $termId
            ];
        }

        $query_post = array_merge($query_post, $query);
    } ?>


    <?php query_posts($query_post); ?>
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
    <?php else : ?>
        <div>
            <?php _e('Post not found.', 'Property'); ?>
        </div>
    <?php endif; ?>


    <?php
    echo '<pre>';
    print_r($_POST);
    echo '</pre>';
    ?>

    <?php wp_die();
}

add_action( 'wp_ajax_filter', 'ajax_filter_function' );
add_action( 'wp_ajax_nopriv_filter', 'ajax_filter_function' );
