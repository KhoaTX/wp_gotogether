<?php
/*
Plugin Name: Prices List
Description: Prices of products
Version: 1.0
Author: Khoa Tran
Author URI: https://www.facebook.com/txkhoa
*/
?>
<?php 
/**
 * Register custom post type: price-information
 *
 * @param @return void
 */
add_action('init', 'prices_information_register_my_ctps');
function prices_information_register_my_ctps() {
    $labels = array(
        "name" => "Price Info",
        "singular_name" => "Price Info",
        'add_new' => 'Add Price Info',
        'add_new_item' => 'Add New Price Info',
        'edit' => 'Edit',
        'edit_item' => 'Edit Price Info',
        'new_item' => 'New Price Info',
        'view' => 'View',
        'view_item' => 'View Price Info',
        'search_items' => 'Search Price Info',
        'not_found' => 'No Price Infos found',
        'not_found_in_trash' => 'No Price Infos found in Trash',
        'parent' => 'Parent Price Info',
    );
    
    $imagepath = plugins_url('images/money.png', __FILE__); 
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
        "rewrite" => array("slug" => "price-information", "with_front" => true),
        "query_var" => true,
        "supports" => array("title"),
    );
    register_post_type("price-information", $args);
}
/**
 * Add fields for Price info
 *
 * @param @return void
 */
add_action('init', 'add_custom_field_price_info');
function add_custom_field_price_info() {
	register_field_group(array (
		'id' => 'acf_price-information',
		'title' => ' ',
		'fields' => array (
			array (
				'key' => 'field_58e0dfd571612',
				'label' => 'Price Info',
				'name' => 'price_info',
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
				'key' => 'field_58e0dfa371244',
				'label' => 'Product List',
				'name' => 'product_list',
				'type' => 'repeater',
				'sub_fields' => array (
					
					array (
						'key' => 'field_58e0dfd571245',
						'label' => 'Product Name',
						'name' => 'product_name',
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
						'key' => 'field_58e0dfe671246',
						'label' => 'Lorem',
						'name' => 'lorem',
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
						'key' => 'field_58e0dfe671247',
						'label' => 'Ipsum',
						'name' => 'ipsum',
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
						'key' => 'field_58e0dfe671248',
						'label' => 'Dolor',
						'name' => 'dolor',
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
						'key' => 'field_58e0dfd571249',
						'label' => 'Sit',
						'name' => 'sit',
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
						'key' => 'field_58e0dfd571250',
						'label' => 'Comment',
						'name' => 'comment',
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
						'key' => 'field_58e0d98439840',
						'label' => 'Price',
						'name' => 'price',
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
						'key' => 'field_58e0090934350',
						'label' => 'period',
						'name' => 'period',
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
				'row_min' => '3',
				'row_limit' => '3',
				'layout' => 'table',
				//'button_label' => 'Add Row',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'price-information',
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
add_filter('gettext','custom_enter_title_price_info');
function custom_enter_title_price_info( $input ) {
    global $post_type;
    if( is_admin() && 'Enter title here' == $input && 'price-information' == $post_type )
        return 'Enter new price info';

    return $input;
}
?>