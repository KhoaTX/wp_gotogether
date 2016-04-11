<?php
/*
Plugin Name: Add More Fields For Page
Description: Add title and sub-title for page.
Version: 1.0
Author: Hoang Nguyen
Author URI: https://www.facebook.com/serenity.nguyen.1612
*/
?>
<?php 
/** 
 * Create meta box
 *
 * @param @return void
 */
add_action( 'add_meta_boxes', 'cd_meta_box_add_custom_fields_page' );
function cd_meta_box_add_custom_fields_page() {
    add_meta_box( 'my-meta-box-id', 'Page Details', 'cd_meta_box_cb', 'page', 'normal', 'high' );
}
/**
 * Meta box page details
 *
 * @param $post
 *
 * @return void
 */
function cd_meta_box_cb( $post ) {
    $values = get_post_custom( $post->ID );
    $text = isset( $values['introduce_text'] ) ? esc_attr( $values['introduce_text'][0] ) : '';
    $sub_text = isset( $values['sub_introduce_text'] ) ? esc_attr( $values['sub_introduce_text'][0] ) : '';
    wp_nonce_field( 'my_meta_box_nonce', 'meta_box_nonce' );
    ?>
    <div class="custom-field-page">
        <div class="item">
            <div class="label">
                <label for="my_meta_box_text">Add a introduce text</label>
            </div>
            <div class="input">
                <input type="text" name="introduce_text" id="introduce_text" value="<?php echo $text; ?>" />
            </div>
        </div>
        <div class="item">
            <div class="label">
                <label for="my_meta_box_sub_text">Add a sub-introduce text</label>
            </div>
            <div class="input">
                <input type="text" name="sub_introduce_text" id="my_meta_box_sub_text" value="<?php echo $sub_text; ?>" />
            </div>
        </div>
    </div>
    <?php   
}
/**
 * Save custom fields
 *
 * @param $post_id
 *
 * @return void
 */
add_action( 'save_post', 'cd_meta_box_save' );
function cd_meta_box_save( $post_id ) {
    if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
    if( !isset( $_POST['meta_box_nonce'] ) || !wp_verify_nonce( $_POST['meta_box_nonce'], 'my_meta_box_nonce' ) ) return;
    if( !current_user_can( 'edit_post', $post_id ) ) return;
    $allowed = array( 
        'a' => array(
            'href' => array()
        )
    );
    if( isset( $_POST['introduce_text'] ) ) {
        update_post_meta( $post_id, 'introduce_text', wp_kses( $_POST['introduce_text'], $allowed ) );
    }
    if( isset( $_POST['sub_introduce_text'] ) ) {
        update_post_meta( $post_id, 'sub_introduce_text', wp_kses( $_POST['sub_introduce_text'], $allowed ) );
    }
}
/**
 * Add css
 *
 * @param @return void
 */
function custom_field_page_css() {
    wp_register_style('customFieldPage', plugins_url('css/custom_field_page.css', __FILE__));
    wp_enqueue_style('customFieldPage');
}
add_action( 'admin_init', 'custom_field_page_css' );
?>