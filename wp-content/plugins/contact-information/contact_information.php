<?php
/*
Plugin Name: Contact Informations 
Description: Including address, google map, telephone
Version: 1.0
Author: Tuan Le
Author URI: https://www.facebook.com/lehongtuan29?fref=ts
*/
?>
<?php 
/**
 * Register custom post type: store-information
 *
 * @param @return void
 */
add_action('init', 'store_information_register_my_ctps');
function store_information_register_my_ctps() {
    $labels = array(
        "name" => "Contact Info",
        "singular_name" => "Contact Info",
        'add_new' => 'Add Contact Info',
        'add_new_item' => 'Add New Contact Info',
        'edit' => 'Edit',
        'edit_item' => 'Edit Contact Info',
        'new_item' => 'New Contact Info',
        'view' => 'View',
        'view_item' => 'View Contact Info',
        'search_items' => 'Search Contact Info',
        'not_found' => 'No Contact Infos found',
        'not_found_in_trash' => 'No Contact Infos found in Trash',
        'parent' => 'Parent Contact Info',
    );
    
    $imagepath = plugins_url('images/map.png', __FILE__); 
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
        "menu_icon" => $imagepath,
        "rewrite" => array("slug" => "store-information", "with_front" => true),
        "query_var" => true,
        "supports" => array("title"),
    );
    register_post_type("store-information", $args);
}
/**
 * Add fields for contact info
 *
 * @param @return void
 */
add_action('init', 'add_custom_field_contact_info');
function add_custom_field_contact_info() {
	register_field_group(array (
		'id' => 'acf_store-information',
		'title' => ' ',
		'fields' => array (
			array (
				'key' => 'field_56e0dfd571612',
				'label' => 'Contact Info',
				'name' => 'contact_info',
				'type' => 'textarea',
				'column_width' => '',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_56e0dfa371244',
				'label' => 'Address Group',
				'name' => 'address_group',
				'type' => 'repeater',
				'sub_fields' => array (
					
					array (
						'key' => 'field_56e0dfd571245',
						'label' => 'Business Name',
						'name' => 'building',
						'type' => 'text',
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'none',
						'maxlength' => '',
					),
					array (
						'key' => 'field_56e0dfe671246',
						'label' => 'Address',
						'name' => 'address',
						'type' => 'text',
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'none',
						'maxlength' => '',
					),
					array (
						'key' => 'field_56e0dfe671247',
						'label' => 'Telephone',
						'name' => 'telephone',
						'type' => 'text',
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'none',
						'maxlength' => '',
					),
					array (
						'key' => 'field_56e0dfe671248',
						'label' => 'Email',
						'name' => 'email',
						'type' => 'text',
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'none',
						'maxlength' => '',
					),
					array (
						'key' => 'field_56e0dfd571249',
						'label' => 'Lat',
						'name' => 'lat',
						'type' => 'text',
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'none',
						'maxlength' => '',
					),
					array (
						'key' => 'field_56e0dfd571250',
						'label' => 'Lng',
						'name' => 'lng',
						'type' => 'text',
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'none',
						'maxlength' => '',
					),
				),
				'row_min' => '1',
				'row_limit' => '1',
				'layout' => 'table',
				//'button_label' => 'Add Row',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'store-information',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}
/**
 * Change placeholder title
 *
 * @param $input
 *
 * @return $input
 */
add_filter('gettext','custom_enter_title_contact_info');
function custom_enter_title_contact_info( $input ) {
    global $post_type;
    if( is_admin() && 'Enter title here' == $input && 'store-information' == $post_type )
        return 'Enter new contact info';

    return $input;
}
?>