<?php

function ajax_filter_functio() {
    wp_die();
}

add_action( 'wp_ajax_filter', 'ajax_filter_function' );
add_action( 'wp_ajax_nopriv_filter', 'ajax_filter_function' );