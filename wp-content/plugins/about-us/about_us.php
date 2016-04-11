<?php
/*
Plugin Name: About Us
Description: Introduce about your business.
Version: 1.0
Author: Hoang Nguyen
Author URI: https://www.facebook.com/serenity.nguyen.1612
*/
?>
<?php 
add_action('init', 'about_us_register_my_ctps');
/**
 * Create post type about us
 *
 * @param @return void
 */
function about_us_register_my_ctps() {
	$labels = array(
        "name" => "About Us",
        "singular_name" => "About Us",
        'add_new' => 'Add about us',
        'add_new_item' => 'Add New about us',
        'edit' => 'Edit',
        'edit_item' => 'Edit about us',
        'new_item' => 'New about us',
        'view' => 'View',
        'view_item' => 'View about us',
        'search_items' => 'Search about us',
        'not_found' => 'No about uss found',
        'not_found_in_trash' => 'No about uss found in Trash',
        'parent' => 'Parent about us',
    );
    $imagepath = plugins_url( 'images/info.png', __FILE__ );
    $args = array(
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "show_ui" => true,
        "has_archive" => false,
        "show_in_menu" => true,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        'menu_icon' => $imagepath,
        "rewrite" => array("slug" => "about-us", "with_front" => true),
        "query_var" => true,
        "supports" => array("title"),
    );
    register_post_type("about_us", $args);
}
/**
 * Change placeholder title
 *
 * @param $input
 *
 * @return $input
 */
add_filter('gettext','custom_enter_title_about_us');
function custom_enter_title_about_us( $input ) {
    global $post_type;
    if( is_admin() && 'Enter title here' == $input && 'about_us' == $post_type )
        return 'Enter title for about us';

    return $input;
}
/**
 * Add custom field
 *
 * @param @return void
 */
add_action('init', 'add_custom_field_about_us');
function add_custom_field_about_us() {
	register_field_group(array(
        'id' => 'acf_uptime',
        'title' => ' ',
        'fields' => array(
            array(
                'key' => 'about_us_sub_title',
                'label' => 'Sub Title',
                'name' => 'sub_title',
                'type' => 'text',
                'default_value' => '',
                'placeholder' => 'Example: our story, our discover',
                'prepend' => '',
                'append' => '',
                'formatting' => 'none',
                'maxlength' => '',
            ),
            array(
                'key' => 'about_us_content',
                'label' => 'Content',
                'name' => 'content',
                'type' => 'wysiwyg',
                'default_value' => '',
                'toolbar' => 'full',
                'media_upload' => 'yes',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'about_us',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array(
            'position' => 'normal',
            'layout' => 'no_box',
            'hide_on_screen' => array(
            ),
        ),
        'menu_order' => 0,
    ));
}
?>