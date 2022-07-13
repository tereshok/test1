<?php

function ajax_pagination_function() {
    echo $_POST['paged']; 
    die();
}

add_action( 'wp_ajax_pagination', 'ajax_pagination_function' );
add_action( 'wp_ajax_nopriv_pagination', 'ajax_pagination_function' );
