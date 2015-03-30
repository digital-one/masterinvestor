<?php
/**
 * Plugin Name: User Profile Image
 * Plugin URI: http://URI_Of_Page_Describing_Plugin_and_Updates
 * Description: Adds a profile image upload to user page
 * Version: 0.1
 * Author: Neil Mills
 * Author URI: http://www.digital-one.co.uk
 * License: Private. Only Digital One customers are allowed to use this plugin
 */



class user_profile_image {

	function __construct() {
		add_action( 'admin_enqueue_scripts', array($this, 'scripts_and_styles'),0 );
		add_action( 'show_user_profile', array($this,'show_profile_image_field'), 0 );
		add_action( 'edit_user_profile', array($this,'show_profile_image_field'),0 );
		add_action( 'personal_options_update', array($this,'save_profile_image_field'),0);
		add_action( 'edit_user_profile_update', array($this, 'save_profile_image_field'),0 );
		
		
	}

	function scripts_and_styles(){
	//	if( is_admin() ) {
		wp_enqueue_media();
		wp_register_script( 'user_profile_image_js', plugin_dir_url( __FILE__ ) . 'libraries/user_profile_image.js', array(), '1.0.0', false );
        wp_enqueue_script( 'user_profile_image_js' );
   	//	 }
	}

	function save_profile_image_field($user_id){

		   if ( !current_user_can( 'edit_user', $user_id ) )
          return false;

      		  update_user_meta( $user_id, 'user_profile_image', $_POST['user_profile_image'] );
	}

	function show_profile_image_field($user){

		?>
		<h3>Profile Image</h3>
		<table class="form-table">
		<tbody>
		<tr class="user-description-wrap">
	<th><label for="description">Image</label></th>
	<td>
		<?php 
		$id = get_the_author_meta( 'user_profile_image', $user->ID);
		//if(!$id) 
		?>
		<div class="selected-profile-tn"><?php echo wp_get_attachment_image( $id, 'thumbnail'); ?></div>
	
		<div class="upload-image">
			<button type="button" class="button button-secondary" id="select-profile-image">Select Image</button>
			<input type="hidden"  name="user_profile_image" value="<?php echo $id ?>" />
		</div>
	<p class="description">Select or upload a profile image for user</p></td>
</tr>
</tbody></table>
<?php
	}

}
$upi = new user_profile_image();