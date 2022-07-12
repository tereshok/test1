<?php 

add_action('acf/init', 'property_gallery_acf');
function property_gallery_acf() {

    if( function_exists('acf_register_block_type') ) {
        acf_register_block_type([
            'name'              => 'property_gallery',
            'title'             => __('Property Gallery'),
            'description'       => __('A custom gallery block.'),
            'render_template'   => 'blocks/acf-block-gallery.php',
            'category'          => 'formatting',
            'icon'              => 'format-gallery',
            'post_types'        => ['property'],
            'mode'              => 'edit',
        ]);
    }
}

add_action('acf/init', 'property_plus_acf');
function property_plus_acf() {

    if( function_exists('acf_register_block_type') ) {
        acf_register_block_type([
            'name'              => 'property_plus',
            'title'             => __('Property Plus'),
            'description'       => __('A custom plus block.'),
            'render_template'   => 'blocks/acf-block-plus.php',
            'category'          => 'formatting',
            'icon'              => 'star-filled',
            'post_types'        => ['property'],
            'mode'              => 'edit',
        ]);
    }
}

add_action('acf/init', 'property_text_editor_acf');
function property_text_editor_acf() {

    if( function_exists('acf_register_block_type') ) {
        acf_register_block_type([
            'name'              => 'property_text_editor',
            'title'             => __('Property Text Editor'),
            'description'       => __('A custom text editor block.'),
            'render_template'   => 'blocks/acf-block-text-editor.php',
            'category'          => 'formatting',
            'icon'              => 'text-page',
            'post_types'        => ['property'],
            'mode'              => 'edit',
        ]);
    }
}

add_action('acf/init', 'property_amenities_acf');
function property_amenities_acf() {

    if( function_exists('acf_register_block_type') ) {
        acf_register_block_type([
            'name'              => 'property_amenities',
            'title'             => __('Property Amenities'),
            'description'       => __('A custom amenities block.'),
            'render_template'   => 'blocks/acf-block-amenities.php',
            'category'          => 'formatting',
            'icon'              => 'ellipsis',
            'post_types'        => ['property'],
            'mode'              => 'edit',
        ]);
    }
}