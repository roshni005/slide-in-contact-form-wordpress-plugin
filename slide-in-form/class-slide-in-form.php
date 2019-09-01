<?php
/**
 * SlideIn Form Class
 *
 * @package   Slide_In_Form
 * @author    Roshni Mansuri <roshnimansuri01@gmail.com>
 * @link      https://www.roshnimansuri.info/
 */

/**
 * @package Slide_In_Form
 * @author  Roshni Mansuri <roshnimansuri01@gmail.com>
 */
class Slide_In_Form {
	
	/**
	 * Plugin version, used for cache-busting of style and script file references.
	 * 
	 * @since 1.0
	 *
	 * @var string
	 */
	const VERSION = '1.0';

	/**
	 * Unique identifier for plugin.
	 *
	 * @since 1.0
	 * 
	 * @var string
	 */
	protected $plugin_slug = 'slide_in_form';

	/**
	 * Instance of this class.
	 *
	 * @since 1.0
	 * 
	 * @var object
	 */
	protected static $instance = null;

	/**
	 * Stores form active status
	 *
	 * @since 1.2
	 * 
	 * @var string
	 */
	protected $form_active;

	
	/**
	 * Stores form icon url
	 *
	 * @since 1.0
	 * 
	 * @var string
	 */
	protected $form_title_image;


	/**
	 * Stores form header color
	 *
	 * @since 1.0
	 * 
	 * @var string
	 */
	protected $form_header_color;

	/**
	 * Stores form header border color
	 *
	 * @since 1.1
	 * 
	 * @var string
	 */
	protected $form_header_border_color;

	/**
	 * Stores form place
	 *
	 * @since 1.0
	 * 
	 * @var string
	 */
	protected $form_place;

	/**
	 * Stores form top margin in percentage
	 *
	 * @since 1.1
	 * 
	 * @var string
	 */
	protected $form_top_margin;
	
	/**
	 * Stores form content
	 *
	 * @since 1.0
	 * 
	 * @var string
	 */
	protected $form_content;

	/**
	 * Stores form option for show in homepage
	 *
	 * @since 1.1
	 * 
	 * @var string
	 */
	protected $show_on_homepage;	

	/**
	 * Stores form option for show in posts
	 *
	 * @since 1.1
	 * 
	 * @var string
	 */
	protected $show_on_posts;

	/**
	 * Stores form option for show in pages
	 *
	 * @since 1.1
	 * 
	 * @var string
	 */
	protected $show_on_pages;

	/**
	 * Initialize the plugin by loading public scripts and styels or admin page
	 *
	 * @since 1.0
	 */
	public function __construct() {

		$this->form_active = get_option( 'sf_form_active' );
		$this->form_title_image = get_option( 'sf_form_title_image' );
		$this->form_header_color = get_option( 'sf_form_header_color' );
		$this->form_header_border_color = get_option( 'sf_form_header_border_color' );
		$this->form_place = get_option( 'sf_form_place' );
		$this->form_top_margin = get_option( 'sf_form_top_margin' );
		$this->form_content = get_option( 'sf_form_content' );

		$this->show_on_homepage = get_option( 'sf_show_on_homepage' );
		$this->show_on_posts = get_option( 'sf_show_on_posts' );
		$this->show_on_pages = get_option( 'sf_show_on_pages' );
		if ( is_admin() ) {
			// Add the settings page and menu item.
			add_action( 'admin_menu', array( $this, 'plugin_admin_menu' ) );
			// Add an action link pointing to the settings page.
			$plugin_basename = plugin_basename( plugin_dir_path( __FILE__ ) . $this->plugin_slug . '.php' );
			add_filter( 'plugin_action_links_' . $plugin_basename, array( $this, 'add_action_links' ) );
			
			add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_admin_styles' ) );
			add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_admin_scripts' ) );
		} else {

			add_action( 'wp', array( $this, 'load_slide_in_form' ) );
		}
	}

	public function load_slide_in_form () {
		
		$show_slidein_form=false;
		if($this->form_active)
		{
			if($this->show_on_homepage!=1 && $this->show_on_posts!=1 && $this->show_on_pages!=1 )
			{
				$show_slidein_form=true;
					
			}
			else
			{				
				if( $this->show_on_homepage==1 && is_front_page() )
				{
					$show_slidein_form=true;					
				}
				if( $this->show_on_posts==1 && ( is_single() || is_home() || is_archive() ) )
				{
					$show_slidein_form=true;	
				}
				if( $this->show_on_pages==1 && is_page() )
				{
					$show_slidein_form=true;
				}
			}
			if($show_slidein_form)
			{
				add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_styles' ) );
				add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_scripts' ) );
				add_action( 'wp_head', array( $this, 'head_styles' ) );
				add_filter( 'wp_footer', array( $this, 'get_slide_in_form' ) );
				add_action( 'wp_footer', array( $this, 'footer_scripts' ) );
			}
		}
	}

	/**
	 * Return an instance of this class.
	 *
	 * @since 1.0
	 * 
	 * @return object A single instance of this class.
	 */
	public static function get_instance() {

		// If the single instance hasn't been set, set it now.
		if ( null == self::$instance ) {
			self::$instance = new self;
		}

		return self::$instance;
	}

	/**
	 * Register the settings menu for this plugin into the WordPress Settings menu.
	 * 
	 * @since 1.0
	 */
	public function plugin_admin_menu() {
		add_options_page( __( 'SlideIn Form Settings', 'slide-in-form' ), __( 'SlideIn Form', 'slide-in-form' ), 'manage_options', $this->plugin_slug, array( $this, 'slide_in_form_options' ) );
	}

	/**
	 * Register and enqueue admin-specific JavaScript.
	 *
	 * @since     1.0
	 *
	 * @return    null    Return early if no settings page is registered.
	 */
	public function enqueue_admin_scripts() {
	
		$screen = get_current_screen();
		if ( 'settings_page_'.$this->plugin_slug == $screen->id ) {			
			wp_enqueue_script( $this->plugin_slug . '-admin-script', plugins_url( 'js/admin.js', __FILE__ ), array( 'jquery', 'wp-color-picker' ), Slide_In_Form::VERSION );
			wp_enqueue_media();        	
		}
	}

	/**
	 * Register and enqueue admin-specific style sheet.
	 *
	 * @since  1.0
	 *
	 * @return    null    Return early if no settings page is registered.
	 */
	public function enqueue_admin_styles() {
		
		$screen = get_current_screen();		
		if ( 'settings_page_'.$this->plugin_slug == $screen->id ) {
			wp_enqueue_style( $this->plugin_slug . '-admin-style', plugins_url( 'css/admin.css', __FILE__ ), Slide_In_Form::VERSION );
			wp_enqueue_style( 'wp-color-picker' );
		}		
	}

	/**
	 * Add settings action link to the plugins page.
	 * 
	 * @param array $links
	 *
	 * @since 1.0
	 *
	 * @return array Plugin settings links
	 */
	public function add_action_links( $links ) {
		return array_merge(
			array(
				'settings' => '<a href="' . admin_url( 'options-general.php?page=' . $this->plugin_slug ) . '">' . __( 'Settings', $this->plugin_slug ) . '</a>'
			),
			$links
		);	
	}

	/**
	 * Render the settings page for this plugin.
	 * 
	 * @since 1.0
	 */
	public function slide_in_form_options() {
		if ( ! current_user_can( 'manage_options' ) )  {
			wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
		}
		
		if ( ! empty( $_POST ) && check_admin_referer( 'slide_in_form', 'save_slide_in_form' ) ) {


			

			//add or update slidein form active stats
			if ( $this->form_active !== false ) {
				update_option( 'sf_form_active', $_POST['form_active'] );
			} else {
				add_option( 'sf_form_active', $_POST['form_active'], null, 'no' );
			}

			//add or update slidein form title icon
			if ( $this->form_title_image !== false ) {
				update_option( 'sf_form_title_image', $_POST['form_title_image'] );
			} else {
				add_option( 'sf_form_title_image', $_POST['form_title_image'], null, 'no' );
			}

			//add or update slidein form header color
			if ( $this->form_header_color !== false ) {
				update_option( 'sf_form_header_color', $_POST['form_header_color'] );
			} else {
				add_option( 'sf_form_header_color', $_POST['form_header_color'], null, 'no' );
			}
			
			//add or update slidein form header border color since version 1.1
			if ( $this->form_header_border_color !== false ) {
				update_option( 'sf_form_header_border_color', $_POST['form_header_border_color'] );
			} else {
				add_option( 'sf_form_header_border_color', $_POST['form_header_border_color'], null, 'no' );
			}

			//add or update slidein form place
			if ( $this->form_place !== false ) {
				update_option( 'sf_form_place', $_POST['form_place'] );
			} else {
				add_option( 'sf_form_place', $_POST['form_place'], null, 'no' );
			}
			//add or update slidein form Top Margin when position is left or right included since 1.1
			if ( $this->form_top_margin !== false ) {
				update_option( 'sf_form_top_margin', $_POST['form_top_margin'] );
			} else {
				add_option( 'sf_form_top_margin', $_POST['form_top_margin'], null, 'no' );
			}
			//add or update slidein form content
			if ( $this->form_content !== false ) {				
				update_option( 'sf_form_content', wp_unslash( $_POST['form_content'] ) );
			} else {
				add_option( 'sf_form_content', wp_unslash( $_POST['form_content'] ), null, 'no' );
			}

			//add or update slidein form option for show on homepage
			if ( $this->show_on_homepage !== false ) {				
				update_option( 'sf_show_on_homepage', wp_unslash( $_POST['show_on_homepage'] ) );
			} else {
				add_option( 'sf_show_on_homepage', wp_unslash( $_POST['show_on_homepage'] ), null, 'no' );
			}

			//add or update slidein form option for show on posts
			if ( $this->show_on_posts !== false ) {				
				update_option( 'sf_show_on_posts', wp_unslash( $_POST['show_on_posts'] ) );
			} else {
				add_option( 'sf_show_on_posts', wp_unslash( $_POST['show_on_posts'] ), null, 'no' );
			}

			//add or update slidein form option for show on pages
			if ( $this->show_on_pages !== false ) {				
				update_option( 'sf_show_on_pages', wp_unslash( $_POST['show_on_pages'] ) );
			} else {
				add_option( 'sf_show_on_pages', wp_unslash( $_POST['show_on_pages'] ), null, 'no' );
			}

			wp_redirect( admin_url( 'options-general.php?page='.$_GET['page'].'&updated=1' ) );
		}
		?>
		<div class="wrap">
			<h2><?php _e( 'SlideIn Form Settings', 'slide-in-form' );?></h2>
			<form method="post" action="<?php echo esc_url( admin_url( 'options-general.php?page='.$_GET['page'].'&noheader=true' ) ); ?>" enctype="multipart/form-data">
				<?php wp_nonce_field( 'slide_in_form', 'save_slide_in_form' ); ?>
				<div class="slide_in_form_form">
					<table class="form-table" width="100%">
						<tr>
							<th scope="row"></th>
							<td>								
								<input type="checkbox" name="form_active" id="form_active" value="1" <?php if($this->form_active)  echo 'checked="checked"'; else '';?>>&nbsp;<label for="form_active"><strong><?php _e( 'Enable', 'slide-in-form' );?></strong></label></td>
						</tr>
						
						<tr>
							<th scope="row"><label for="form_title_image"><?php _e( 'Form Title Right Side Icon', 'slide-in-form' );?></label></th>
							<td><input type="text" name="form_title_image" id="form_title_image" maxlength="255" size="60" value="<?php echo ($this->form_title_image)?$this->form_title_image:'fa fa-headset fa-3x'; ?>">
	    					<br />Enter a Class of font awsome Icon. Ex: (fa fa-headset fa-3x)</td>
						</tr>
						
						<tr>
							<th scope="row"><label for="form_header_color"><?php _e( 'Form Header Color', 'slide-in-form' );?></label></th>
							<td><input type="text" name="form_header_color" id="form_header_color" maxlength="255" size="25" value="<?php echo ($this->form_header_color)?$this->form_header_color:'#ffffff'; ?>"></td>
						</tr>
						<tr>
							<th scope="row"><label for="form_header_border_color"><?php _e( 'Form Header Border Color', 'slide-in-form' );?></label></th>
							<td><input type="text" name="form_header_border_color" id="form_header_border_color" maxlength="255" size="25" value="<?php echo ($this->form_header_border_color)?$this->form_header_border_color:'#dd3333'; ?>"></td>
						</tr>
						<tr>
							<th scope="row"><label for="form_place"><?php _e( 'Form Place', 'slide-in-form' );?></label></th>
							<td><select name="form_place" id="form_place">
							<?php foreach ( $this->get_form_place() as $key => $value ): ?>
							<option value="<?php esc_attr_e( $key ); ?>"<?php esc_attr_e( $key == $this->form_place ? ' selected="selected"' : '' ); ?>><?php esc_attr_e( $value ); ?></option>
							<?php endforeach;?>
						</select></td>
						</tr>
						
						<tr>
							<th scope="row"><label for="form_top_margin"><?php _e( 'Form Top Margin', 'slide-in-form' );?></label></th>
							<td><input type="number" name="form_top_margin" id="form_top_margin" maxlength="255" size="25" value="<?php echo ($this->form_top_margin)?$this->form_top_margin:0; ?>">%<br>
								<small>Top margin is only included if form place Left or Right is selected. Please enter numeric value.</td>
						</tr>

						<tr>
							<th></th>
							<td>
								<table border="0">
									<tr>
										<td><input type="checkbox" name="show_on_homepage" value="1" <?php if($this->show_on_homepage==1) echo 'checked="checked"';?> ><label for="show_on_homepage"><?php _e( 'Show on Homepage', 'slide-in-form' );?></label><br><br>
										<input type="checkbox" name="show_on_posts" value="1" <?php if($this->show_on_posts==1) echo 'checked="checked"';?> ><label for="show_on_posts"><?php _e( 'Show on Posts', 'slide-in-form' );?></label>
										<br><br>
										<input type="checkbox" name="show_on_pages" value="1" <?php if($this->show_on_pages==1) echo 'checked="checked"';?> ><label for="show_on_pages"><?php _e( 'Show on Pages', 'slide-in-form' );?></label>
									</td>
									</tr>
								</table>
							</td>
						</tr>

						<tr>
							<th scope="row"><label for="form_content"><?php _e( 'Form Content', 'slide-in-form' );?><br></label><small><?php _e( 'you can add shortcode or html', 'slide-in-form' );?></small></th>
							<td></td>
						</tr>		
						<tr>
							<td colspan="2">
								<div style="100%;">
									<?php 		
									if($this->form_content != ''){
										$formContent = $this->form_content;
									} else {
										$formContent = '[contact-form-7 id="5" title="Contact form 1"]';
									}

									$args = array(
										'textarea_name' => 'form_content',
									    'textarea_rows' => 10,
									    'editor_class'	=> 'sf_content',
									    'wpautop'		=> true,
									);
									wp_editor( $formContent, 'form_content', $args ); 
									?>
								</div>
							</td>
						</tr>			
					</table>
					<p class="submit">
						<input type="submit" name="Submit" class="button-primary" value="<?php esc_attr_e( 'Save Changes' ) ?>" />
					</p>
				</div>
			</form>
		</div>
		<?php
	}	

	/**
	 * Returns list of Form Place
	 * 
	 * @since 1.0
	 *
	 * @return array Form Place
	 */
	public function get_form_place() {
		return array(
				'right' => 'Right',
				'left' => 'Left',			
				'right-bottom' => 'Right Bottom',
				'left-bottom' => 'Left Bottom',
				'top-left' => 'Top Left',
				'top-right' => 'Top Right',					
			);
	}

	/**
	 * Register and enqueue public-facing style sheet.
	 *
	 * @since 1.0
	 */
	public function enqueue_styles() {
		wp_enqueue_style( $this->plugin_slug . '-style', plugins_url( 'css/slide-in-form.css', __FILE__ ), array(), self::VERSION );
	}

	/**
	 * Register and enqueues public-facing JavaScript files.
	 *
	 * @since 1.0
	 */
	public function enqueue_scripts() {
		wp_enqueue_script( $this->plugin_slug . '-modernizr-script', plugins_url( 'js/modernizr.custom.js', __FILE__ ), array(), self::VERSION );
		wp_enqueue_script( $this->plugin_slug . '-jquery-cookie', plugins_url( 'js/jquery.cookie.js', __FILE__ ), array(), self::VERSION );		
	}

	/**
	 * Print form html code
	 *	 
	 * @since 1.0
	 */
	public function get_slide_in_form(){
		$this->form_active = get_option( 'sf_form_active' );
		$this->form_place  = get_option( 'sf_form_place' );
		$this->form_title_image = get_option( 'sf_form_title_image' );
		$this->form_header_color = get_option( 'sf_form_header_color' );
		$this->form_header_border_color = get_option( 'sf_form_header_border_color' );
		$this->form_top_margin = get_option( 'sf_form_top_margin' );
		$this->form_content = get_option( 'sf_form_content' );
		$this->show_on_homepage = get_option( 'sf_show_on_homepage' );
		$this->show_on_posts = get_option( 'sf_show_on_posts' );
		$this->show_on_pages = get_option( 'sf_show_on_pages' );

		if($this->form_title_image != ''){
			$formTitleImage = $this->form_title_image;
		} else {
			$formTitleImage = "fa fa-headset fa-3x";
		}
		

		if($this->form_content != ''){
			$formContent = $this->form_content;
		} else {
			$formContent = '[contact-form-7 id="5" title="Contact form 1"]';
		}
		

		if($this->form_header_border_color != ''){
			$formborder = $this->form_header_border_color;
		} else {
			$formborder = '#dd3333';
		}
			
		$form_html  = '<div class="slide-in-form">';
		$form_html .= '<div class="form-wrap">';
		if($this->form_place!='top-left' && $this->form_place!='top-right')
		{
			$form_html .= '<div class="form-header">';
			if( $formTitleImage != '') {
				$form_html .= '<i class="'.$formTitleImage.'" style="color :'.$formborder.'"></i>';
			}
			$form_html .= '</div>';
		}
		
		$form_html .= '<div class="form-content">';
		$form_html .= '<div class="form-content-pad">';
		if( $formContent != '') {

			$formContent = apply_filters('the_content', $formContent );
			$formContent = str_replace( ']]>', ']]&gt;', $formContent );
			$form_html .= $formContent;			
		}
		$form_html .= '</div>';
		$form_html .= '</div>';

		if($this->form_place == 'top-left' || $this->form_place == 'top-right')
		{
			$form_html .= '<div class="form-header">';
			if( $formTitleImage != '') {
				$form_html .= '<i class="'.$formTitleImage.'"></i>';	
			}
			$form_html .= '</div>';
		}

		$form_html .= '</div>';
		$form_html .= '</div>';
		echo $form_html;
	}

	/**
	 * Add styles for form header color
	 * 
	 * @since 1.0
	 */
	public function head_styles() {
		$this->form_title_color = get_option( 'sf_form_title_color' );
		$this->form_header_color = get_option( 'sf_form_header_color' );
		$this->form_header_border_color = get_option( 'sf_form_header_border_color' );
		$this->form_place = get_option( 'sf_form_place' );
		$this->form_top_margin = get_option( 'sf_form_top_margin' );
		?>
		<style type="text/css">
			.slide-in-form .form-header
			{
			<?php
			if( $this->form_header_color !='' ) {
			?>	
				background-color : <?php echo $this->form_header_color; ?>;		
			<?php
			} else {
			?>
				background-color : #ffffff;		
			<?php
			}
			?>
				
		}
		
		<?php
		if($this->form_place == 'left' || $this->form_place == 'right')
		{
		?>
			.slide-in-form-right, .slide-in-form-left
			{
				<?php
				if( $this->form_top_margin !='' ) {
				?>	
					top : <?php echo $this->form_top_margin; ?>%;		
				<?php
				} else {
				?>
					top : 0%;		
				<?php
				}
				?>
			}

		<?php } ?>
		</style>
		<?php
	}

	/**
	 * Add Javascript for form place
	 * 
	 * @since 1.0
	 */
	public function footer_scripts() { ?>
		<script type="text/javascript">
			function openBox() {
			    setTimeout( function() {
			    	jQuery('.form-header').trigger('click');
			    	jQuery.cookie('visited', 'yes', { expires: 3 }); 
				},10000);
			}
			
			jQuery( document ).ready(function() {	
			    var visited = jQuery.cookie('visited');
			    console.log(visited);
			    if (visited == 'yes') {
			        return false;
			    } else {
			        openBox();
			    }
			});

		</script>
		<?php if( $this->form_place == 'right-bottom' ){ ?>
			<script type="text/javascript">
				jQuery( document ).ready(function() {	
					jQuery( ".slide-in-form" ).addClass('right-bottom');
					var contheight = jQuery( ".form-content" ).outerHeight()+2;      	
			      	jQuery( ".slide-in-form" ).css( "bottom", "-"+contheight+"px" );

			      	jQuery( ".slide-in-form" ).css( "visibility", "visible" );

			      	jQuery('.slide-in-form').addClass("open_slide_in_form");
			      	jQuery('.slide-in-form').addClass("form-content-bounce-in-up");
			      	
			        jQuery( ".form-header" ).click(function() {
			        	if(jQuery('.slide-in-form').hasClass("open"))
			        	{
			        		jQuery('.slide-in-form').removeClass("open");
			        		jQuery( ".slide-in-form" ).css( "bottom", "-"+contheight+"px" );
			        	}
			        	else
			        	{
			        		jQuery('.slide-in-form').addClass("open");
			          		jQuery( ".slide-in-form" ).css( "bottom", 0 );		
			        	}
			          
			        });		    
				});
			</script>
		<?php	
		} elseif( $this->form_place == 'left-bottom' ) {
		?>
			<script type="text/javascript">
				jQuery( document ).ready(function() {	
					jQuery( ".slide-in-form" ).addClass('left-bottom');
					var contheight = jQuery( ".form-content" ).outerHeight()+2;      	
			      	jQuery( ".slide-in-form" ).css( "bottom", "-"+contheight+"px" );

			      	jQuery( ".slide-in-form" ).css( "visibility", "visible" );

			      	jQuery('.slide-in-form').addClass("open_slide_in_form");
			      	jQuery('.slide-in-form').addClass("form-content-bounce-in-up");
			      	
			        jQuery( ".form-header" ).click(function() {
			        	if(jQuery('.slide-in-form').hasClass("open"))
			        	{
			        		jQuery('.slide-in-form').removeClass("open");
			        		jQuery( ".slide-in-form" ).css( "bottom", "-"+contheight+"px" );
			        	}
			        	else
			        	{
			        		jQuery('.slide-in-form').addClass("open");
			          		jQuery( ".slide-in-form" ).css( "bottom", 0 );		
			        	}
			          
			        });		    
				});
			</script>
		<?php
		} elseif( $this->form_place == 'left' ) {
		?>
			<script type="text/javascript">
				jQuery( document ).ready(function() {	
					if (/*@cc_on!@*/true) {						
						var ieclass = 'ie' + document.documentMode; 
						jQuery( ".form-wrap" ).addClass(ieclass);
					} 
					jQuery( ".slide-in-form" ).addClass('slide-in-form-left');
					var contwidth = jQuery( ".form-content" ).outerWidth()+2;      	
			      	jQuery( ".slide-in-form" ).css( "left", "-"+contwidth+"px" );

			      	jQuery( ".slide-in-form" ).css( "visibility", "visible" );

			      	jQuery('.slide-in-form').addClass("open_slide_in_form_left");
			      	jQuery('.slide-in-form').addClass("form-content-bounce-in-left");
			      	
			        jQuery( ".form-header" ).click(function() {
			        	if(jQuery('.slide-in-form').hasClass("open"))
			        	{
			        		jQuery('.slide-in-form').removeClass("open");
			        		jQuery( ".slide-in-form" ).css( "left", "-"+contwidth+"px" );
			        	}
			        	else
			        	{
			        		jQuery('.slide-in-form').addClass("open");
			          		jQuery( ".slide-in-form" ).css( "left", 0 );		
			        	}
			          
			        });		    
				});
			</script>
		<?php
		} elseif( $this->form_place == 'right' ) {
		?>
			<script type="text/javascript">
				jQuery( document ).ready(function() {	
					if (/*@cc_on!@*/true) { 						
						var ieclass = 'ie' + document.documentMode; 
						jQuery( ".form-wrap" ).addClass(ieclass);
					} 
					jQuery( ".slide-in-form" ).addClass('slide-in-form-right');
					
					var contwidth = jQuery( ".form-content" ).outerWidth()+2;      	
			      	jQuery( ".slide-in-form" ).css( "right", "-"+contwidth+"px" );

			      	jQuery( ".slide-in-form" ).css( "visibility", "visible" );

			      	jQuery('.slide-in-form').addClass("open_slide_in_form_right");
			      	jQuery('.slide-in-form').addClass("form-content-bounce-in-right");
			      	

			        jQuery( ".form-header" ).click(function() {
			        	if(jQuery('.slide-in-form').hasClass("open"))
			        	{
			        		jQuery('.slide-in-form').removeClass("open");
			        		jQuery( ".slide-in-form" ).css( "right", "-"+contwidth+"px" );
			        	}
			        	else
			        	{
			        		jQuery('.slide-in-form').addClass("open");
			          		jQuery( ".slide-in-form" ).css( "right", 0 );		
			        	}
			          
			        });		    
				});
			</script>
		<?php
		} elseif( $this->form_place == 'top-left' ) {
		?>
			<script type="text/javascript">
				jQuery( document ).ready(function() {	
					jQuery( ".slide-in-form" ).addClass('top-left');
					var contheight = jQuery( ".form-content" ).outerHeight()+2;      	
			      	jQuery( ".slide-in-form" ).css( "top", "-"+contheight+"px" );
					
			      	jQuery( ".slide-in-form" ).css( "visibility", "visible" );

			      	jQuery('.slide-in-form').addClass("open_slide_in_form_top");
			      	jQuery('.slide-in-form').addClass("form-content-bounce-in-down");
			      	
			        jQuery( ".form-header" ).click(function() {
			        	if(jQuery('.slide-in-form').hasClass("open"))
			        	{
			        		jQuery('.slide-in-form').removeClass("open");
			        		jQuery( ".slide-in-form" ).css( "top", "-"+contheight+"px" );
			        	}
			        	else
			        	{
			        		jQuery('.slide-in-form').addClass("open");
			          		jQuery( ".slide-in-form" ).css( "top", 0 );		
			        	}
			          
			        });		    
				});
			</script>
		<?php
		} elseif( $this->form_place == 'top-right' ) {
		?>
			<script type="text/javascript">
				jQuery( document ).ready(function() {	
					jQuery( ".slide-in-form" ).addClass('top-right');
					var contheight = jQuery( ".form-content" ).outerHeight()+2;      	
			      	jQuery( ".slide-in-form" ).css( "top", "-"+contheight+"px" );
					
			      	jQuery( ".slide-in-form" ).css( "visibility", "visible" );

			      	jQuery('.slide-in-form').addClass("open_slide_in_form_top");
			      	jQuery('.slide-in-form').addClass("form-content-bounce-in-down");
			      	
			        jQuery( ".form-header" ).click(function() {
			        	if(jQuery('.slide-in-form').hasClass("open"))
			        	{
			        		jQuery('.slide-in-form').removeClass("open");
			        		jQuery( ".slide-in-form" ).css( "top", "-"+contheight+"px" );
			        	}
			        	else
			        	{
			        		jQuery('.slide-in-form').addClass("open");
			          		jQuery( ".slide-in-form" ).css( "top", 0 );		
			        	}
			          
			        });		    
				});
			</script>
		<?php
		} else {
		?>
			<script type="text/javascript">
				jQuery( document ).ready(function() {	
					jQuery( ".slide-in-form" ).addClass('right-bottom');
					var contheight = jQuery( ".form-content" ).outerHeight()+2;      	
			      	jQuery( ".slide-in-form" ).css( "bottom", "-"+contheight+"px" );

			      	jQuery( ".slide-in-form" ).css( "visibility", "visible" );

			      	jQuery('.slide-in-form').addClass("open_slide_in_form");
			      	jQuery('.slide-in-form').addClass("form-content-bounce-in-up");
			      	
			        jQuery( ".form-header" ).click(function() {
			        	if(jQuery('.slide-in-form').hasClass("open"))
			        	{
			        		jQuery('.slide-in-form').removeClass("open");
			        		jQuery( ".slide-in-form" ).css( "bottom", "-"+contheight+"px" );
			        	}
			        	else
			        	{
			        		jQuery('.slide-in-form').addClass("open");
			          		jQuery( ".slide-in-form" ).css( "bottom", 0 );		
			        	}
			          
			        });		    
				});
			</script>
		<?php
		}
	}
}