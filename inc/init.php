<?php

add_action( 'init', 'register_post_types_property' );
function register_post_types_property(){
	register_post_type( 'property', [
		'label'  => '',
		'labels' => [
			'name'               => 'Property', // основное название для типа записи
			'singular_name'      => 'Property', // название для одной записи этого типа
			'add_new'            => 'Add Property', // для добавления новой записи
			'add_new_item'       => 'Add New Property', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Edit Property', // для редактирования типа записи
			'new_item'           => 'New Property', // текст новой записи
			'view_item'          => 'View Property', // для просмотра записи этого типа.
			'search_items'       => 'Search property', // для поиска по этим типам записи
			'not_found'          => 'Property Not Found', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Property Not Found in Trash', // если не было найдено в корзине
			'menu_name'          => 'Property', // название меню
		],
		'public'              => true,
		'show_in_rest'		  => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-store',
		'supports'            => [ 'title', 'editor', 'thumbnail', 'excerpt' ], 
		'taxonomies'          => ['city', 'amenities', 'extras', 'accessibility', 'bedroom_features', 'property_type'],
		'has_archive'         => true,
	] );
}

add_action( 'init', 'create_taxonomy_city' );
function create_taxonomy_city(){
	register_taxonomy( 'city', [ 'property' ], [
		'label'                 => '', 
		'labels'                => [
			'name'              => 'City',
			'singular_name'     => 'City',
			'search_items'      => 'Search Citys',
			'all_items'         => 'All Citys',
			'view_item '        => 'View City',
			'edit_item'         => 'Edit City',
			'update_item'       => 'Update City',
			'add_new_item'      => 'Add New City',
			'new_item_name'     => 'New City Name',
			'menu_name'         => 'City',
			'back_to_items'     => '← Back to City',
		],
		'rewrite'				=> false,
	] );
}

add_action( 'init', 'create_taxonomy_amenities' );
function create_taxonomy_amenities(){
	register_taxonomy( 'amenities', [ 'property' ], [
		'label'                 => '', 
		'labels'                => [
			'name'              => 'Amenities',
			'singular_name'     => 'Amenities',
			'search_items'      => 'Search Amenities',
			'all_items'         => 'All Amenities',
			'view_item '        => 'View Amenities',
			'edit_item'         => 'Edit Amenities',
			'update_item'       => 'Update Amenities',
			'add_new_item'      => 'Add New Amenities',
			'new_item_name'     => 'New Amenities Name',
			'menu_name'         => 'Amenities',
			'back_to_items'     => '← Back to Amenities',
		],
		'rewrite'				=> false,
	] );
}

add_action( 'init', 'create_taxonomy_extras' );
function create_taxonomy_extras(){
	register_taxonomy( 'extras', [ 'property' ], [
		'label'                 => '', 
		'labels'                => [
			'name'              => 'Extras',
			'singular_name'     => 'Extras',
			'search_items'      => 'Search Extras',
			'all_items'         => 'All Extras',
			'view_item '        => 'View Extras',
			'edit_item'         => 'Edit Extras',
			'update_item'       => 'Update Extras',
			'add_new_item'      => 'Add New Extras',
			'new_item_name'     => 'New Extras Name',
			'menu_name'         => 'Extras',
			'back_to_items'     => '← Back to Extras',
		],
		'rewrite'				=> false,
	] );
}

add_action( 'init', 'create_taxonomy_accessibility' );
function create_taxonomy_accessibility(){
	register_taxonomy( 'accessibility', [ 'property' ], [
		'label'                 => '', 
		'labels'                => [
			'name'              => 'Accessibility',
			'singular_name'     => 'Accessibility',
			'search_items'      => 'Search Accessibility',
			'all_items'         => 'All Accessibility',
			'view_item '        => 'View Accessibility',
			'edit_item'         => 'Edit Accessibility',
			'update_item'       => 'Update Accessibility',
			'add_new_item'      => 'Add New Accessibility',
			'new_item_name'     => 'New Accessibility Name',
			'menu_name'         => 'Accessibility',
			'back_to_items'     => '← Back to Accessibility',
		],
		'rewrite'				=> false,
	] );
}

add_action( 'init', 'create_taxonomy_bedroom_features' );
function create_taxonomy_bedroom_features(){
	register_taxonomy( 'bedroom_features', [ 'property' ], [
		'label'                 => '', 
		'labels'                => [
			'name'              => 'Bedroom Features',
			'singular_name'     => 'Bedroom Features',
			'search_items'      => 'Search Bedroom Features',
			'all_items'         => 'All Bedroom Features',
			'view_item '        => 'View Bedroom Features',
			'edit_item'         => 'Edit Bedroom Features',
			'update_item'       => 'Update Bedroom Features',
			'add_new_item'      => 'Add New Bedroom Features',
			'new_item_name'     => 'New Bedroom Features Name',
			'menu_name'         => 'Bedroom Features',
			'back_to_items'     => '← Back to Bedroom Features',
		],
		'rewrite'				=> false,
	] );
}

add_action( 'init', 'create_taxonomy_property_type' );
function create_taxonomy_property_type(){
	register_taxonomy( 'property_type', [ 'property' ], [
		'label'                 => '', 
		'labels'                => [
			'name'              => 'Property Type',
			'singular_name'     => 'Property Type',
			'search_items'      => 'Search Property Types',
			'all_items'         => 'All Property Types',
			'view_item '        => 'View Property Type',
			'edit_item'         => 'Edit Property Type',
			'update_item'       => 'Update Property Type',
			'add_new_item'      => 'Add New Property Type',
			'new_item_name'     => 'New Property Type Name',
			'menu_name'         => 'Property Type',
			'back_to_items'     => '← Back to Property Type',
		],
		'rewrite'				=> false,
	] );
}