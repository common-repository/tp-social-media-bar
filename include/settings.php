<?php
class TP_Social_Media_Bar_Settings {

	function __construct() {
		add_action( 'admin_init', array( $this, 'admin_settings_fields' ) );
		add_action( 'admin_menu', array( $this, 'admin_menu_item' ) );
	}
	public function admin_menu_item() {
		add_menu_page( 'TP Icons Bar', 'TP Social Icons Bar', 'manage_options', 'tp-social-media-bar', array( $this, 'settings_page' ) );
	}
	public function admin_settings_fields() {
		add_settings_section( 'tp_social_media_bar_section', 'TP Social Media Bar Settings', null, 'tp_social_media_bar_fields' );
		add_settings_field( 'tp_social_media_bar_switch', 'Social Media On/Off', array( $this, 'tp_social_media_bar_switch' ), 'tp_social_media_bar_fields', 'tp_social_media_bar_section' );
		add_settings_field( 'open_new_tab_switch', 'Open New tab On/Off', array( $this, 'open_new_tab_switch' ), 'tp_social_media_bar_fields', 'tp_social_media_bar_section' );
		add_settings_field( 'social_icon_font_size_field', 'Icon Font Size', array( $this, 'social_icon_font_size_field' ), 'tp_social_media_bar_fields', 'tp_social_media_bar_section' );
		add_settings_field( 'social_icon_color_field', 'Icon Color', array( $this, 'social_icon_color_field' ), 'tp_social_media_bar_fields', 'tp_social_media_bar_section' );
		add_settings_field( 'social_icon_hover_color_field', 'Icon Hover Color', array( $this, 'social_icon_hover_color_field' ), 'tp_social_media_bar_fields', 'tp_social_media_bar_section' );
		add_settings_field( 'social_icon_padding_field', 'Icon Padding', array( $this, 'social_icon_padding_field' ), 'tp_social_media_bar_fields', 'tp_social_media_bar_section' );
		add_settings_field( 'social_icon_bg_field', 'Icon BG Color', array( $this, 'social_icon_bg_field' ), 'tp_social_media_bar_fields', 'tp_social_media_bar_section' );
		add_settings_field( 'social_icon_bg_hover_field', 'Icon BG Hover Color', array( $this, 'social_icon_bg_hover_field' ), 'tp_social_media_bar_fields', 'tp_social_media_bar_section' );
		add_settings_field( 'social_tooltip_bg_field', 'Social Tooltip BG Color', array( $this, 'social_tooltip_bg_field' ), 'tp_social_media_bar_fields', 'tp_social_media_bar_section' );
		add_settings_field( 'social_tooltip_font_size_field', 'Social Tooltip Font Size', array( $this, 'social_tooltip_font_size_field' ), 'tp_social_media_bar_fields', 'tp_social_media_bar_section' );

		add_settings_field( 'facebook_icon_field', 'Facebook Icon Image', array( $this, 'facebook_icon_field' ), 'tp_social_media_bar_fields', 'tp_social_media_bar_section' );
		add_settings_field( 'facebook_font_icon_field', 'Facebook Icon', array( $this, 'facebook_font_icon_field' ), 'tp_social_media_bar_fields', 'tp_social_media_bar_section' );
		add_settings_field( 'facebook_field', 'Facebook URL', array( $this, 'facebook_field' ), 'tp_social_media_bar_fields', 'tp_social_media_bar_section' );
		add_settings_field( 'facebook_tooltip_field', 'Facebook Tooltip', array( $this, 'facebook_tooltip_field' ), 'tp_social_media_bar_fields', 'tp_social_media_bar_section' );

		add_settings_field( 'twitter_icon_field', 'Twitter Icon Image', array( $this, 'twitter_icon_field' ), 'tp_social_media_bar_fields', 'tp_social_media_bar_section' );
		add_settings_field( 'twitter_font_icon_field', 'Twitter Icon', array( $this, 'twitter_font_icon_field' ), 'tp_social_media_bar_fields', 'tp_social_media_bar_section' );
		add_settings_field( 'twitter_field', 'Twitter URL', array( $this, 'twitter_field' ), 'tp_social_media_bar_fields', 'tp_social_media_bar_section' );
		add_settings_field( 'twitter_tooltip_field', 'Twitter Tooltip', array( $this, 'twitter_tooltip_field' ), 'tp_social_media_bar_fields', 'tp_social_media_bar_section' );
		
		add_settings_field( 'linkedin_icon_field', 'Linkedin Icon Image', array( $this, 'linkedin_icon_field' ), 'tp_social_media_bar_fields', 'tp_social_media_bar_section' );
		add_settings_field( 'linkedin_font_icon_field', 'Linkedin Icon', array( $this, 'linkedin_font_icon_field' ), 'tp_social_media_bar_fields', 'tp_social_media_bar_section' );
		add_settings_field( 'linkedin_field', 'Linkedin URL', array( $this, 'linkedin_field' ), 'tp_social_media_bar_fields', 'tp_social_media_bar_section' );
		add_settings_field( 'linkedin_tooltip_field', 'Linkedin Tooltip', array( $this, 'linkedin_tooltip_field' ), 'tp_social_media_bar_fields', 'tp_social_media_bar_section' );

		add_settings_field( 'phone_icon_field', 'Phone Icon Image', array( $this, 'phone_icon_field' ), 'tp_social_media_bar_fields', 'tp_social_media_bar_section' );
		add_settings_field( 'phone_font_icon_field', 'Phone Icon', array( $this, 'phone_font_icon_field' ), 'tp_social_media_bar_fields', 'tp_social_media_bar_section' );
		add_settings_field( 'phone_field', 'Phone Number', array( $this, 'phone_field' ), 'tp_social_media_bar_fields', 'tp_social_media_bar_section' );
		add_settings_field( 'phone_tooltip_field', 'Phone Tooltip', array( $this, 'phone_tooltip_field' ), 'tp_social_media_bar_fields', 'tp_social_media_bar_section' );

		add_settings_field( 'whatsapp_icon_field', 'Whatsapp Icon Image', array( $this, 'whatsapp_icon_field' ), 'tp_social_media_bar_fields', 'tp_social_media_bar_section' );
		add_settings_field( 'whatsapp_font_icon_field', 'Whatsapp Icon', array( $this, 'whatsapp_font_icon_field' ), 'tp_social_media_bar_fields', 'tp_social_media_bar_section' );
		add_settings_field( 'whatsapp_field', 'Whatsapp URL', array( $this, 'whatsapp_field' ), 'tp_social_media_bar_fields', 'tp_social_media_bar_section' );
		add_settings_field( 'whatsapp_tooltip_field', 'Whatsapp Tooltip', array( $this, 'whatsapp_tooltip_field' ), 'tp_social_media_bar_fields', 'tp_social_media_bar_section' );
		
		add_settings_field( 'youtube_icon_field', 'Youtube Icon Image', array( $this, 'youtube_icon_field' ), 'tp_social_media_bar_fields', 'tp_social_media_bar_section' );
		add_settings_field( 'youtube_font_icon_field', 'Youtube Icon', array( $this, 'youtube_font_icon_field' ), 'tp_social_media_bar_fields', 'tp_social_media_bar_section' );
		add_settings_field( 'youtube_field', 'Youtube URL', array( $this, 'youtube_field' ), 'tp_social_media_bar_fields', 'tp_social_media_bar_section' );
		add_settings_field( 'youtube_tooltip_field', 'Youtube Tooltip', array( $this, 'youtube_tooltip_field' ), 'tp_social_media_bar_fields', 'tp_social_media_bar_section' );

		register_setting( 'tp_social_media_bar_section', 'socialmedia_switch' );
		register_setting( 'tp_social_media_bar_section', 'opennew_tab_switch' );
		register_setting( 'tp_social_media_bar_section', 'icon_font_size' );
		
		register_setting( 'tp_social_media_bar_section', 'icon_padding' );
		register_setting( 'tp_social_media_bar_section', 'icon_bg_color' );
		register_setting( 'tp_social_media_bar_section', 'icon_color' );
		register_setting( 'tp_social_media_bar_section', 'icon_hover_color' );
		register_setting( 'tp_social_media_bar_section', 'icon_bg_hover_color' );
		register_setting( 'tp_social_media_bar_section', 'social_tooltip_bg_color' );
		register_setting( 'tp_social_media_bar_section', 'social_tooltip_font_size' );

		register_setting( 'tp_social_media_bar_section', 'facebook_url' );
		register_setting( 'tp_social_media_bar_section', 'facebook_icon' );
		register_setting( 'tp_social_media_bar_section', 'facebook_font_icon' );
		register_setting( 'tp_social_media_bar_section', 'facebook_tooltip_text' );

		register_setting( 'tp_social_media_bar_section', 'twitter_url' );
		register_setting( 'tp_social_media_bar_section', 'twitter_icon' );
		register_setting( 'tp_social_media_bar_section', 'twitter_font_icon' );
		register_setting( 'tp_social_media_bar_section', 'twitter_tooltip_text' );

		register_setting( 'tp_social_media_bar_section', 'linkedin_url' );
		register_setting( 'tp_social_media_bar_section', 'linkedin_icon' );
		register_setting( 'tp_social_media_bar_section', 'facebook_font_icon' );
		register_setting( 'tp_social_media_bar_section', 'linkedin_tooltip_text' );

		register_setting( 'tp_social_media_bar_section', 'phone_url' );
		register_setting( 'tp_social_media_bar_section', 'phone_icon' );
		register_setting( 'tp_social_media_bar_section', 'phone_font_icon' );
		register_setting( 'tp_social_media_bar_section', 'phone_tooltip_text' );

		register_setting( 'tp_social_media_bar_section', 'whatsapp_url' );
		register_setting( 'tp_social_media_bar_section', 'whatsapp_icon' );
		register_setting( 'tp_social_media_bar_section', 'whatsapp_font_icon' );
		register_setting( 'tp_social_media_bar_section', 'whatsapp_tooltip_text' );

		register_setting( 'tp_social_media_bar_section', 'youtube_url' );
		register_setting( 'tp_social_media_bar_section', 'youtube_icon' );
		register_setting( 'tp_social_media_bar_section', 'youtube_font_icon' );
		register_setting( 'tp_social_media_bar_section', 'youtube_tooltip_text' );
		register_setting( 'tp_social_media_bar_section', 'set_icon' );
	}


	public function settings_page() {
		?>
	  <div class="wrap">
		 <h1><?php esc_html_e( 'TP Social Media Bar Settings', 'tp-social-media-bar' ); ?></h1>
		 <form method="post" action="options.php">
		<?php
		   settings_fields( 'tp_social_media_bar_section' );
		   do_settings_sections( 'tp_social_media_bar_fields' );
		   submit_button();
		?>
		 </form>
	  </div>
		<?php
	}

	public function tp_social_media_bar_switch() {
		$options = get_option( 'socialmedia_switch' );
		if ( $options == '1' ) {
			$check = 'checked';
		}else{
			$check = '';
		}
		?>
		<input type="checkbox" name="socialmedia_switch" value="1" <?php echo esc_attr( $check ); ?>>
		<?php
	}
	public function open_new_tab_switch() {
		$options = get_option( 'opennew_tab_switch' );
		if ( $options == '1' ) {
			$check = 'checked';
		}else{
			$check = '';
		}
		?>
		<input type="checkbox" name="opennew_tab_switch" value="1" <?php echo esc_attr( $check ); ?>>
		<?php
	}
	public function social_icon_color_field() {
		$icon_color       = get_option( 'icon_color' );
		?>
		<input type="text" value="<?php echo esc_attr($icon_color);?>" name="icon_color" class="social-color-field" />
		<?php
	}
	public function social_icon_hover_color_field() {
		$icon_hover_color       = get_option( 'icon_hover_color' );
		?>
		<input type="text" value="<?php echo esc_attr($icon_hover_color);?>" name="icon_hover_color" class="social-color-field" />
		<?php
	}
	public function social_icon_font_size_field() {
		$icon_font_size       = get_option( 'icon_font_size' );
		?>
		<input type="text" value="<?php echo esc_attr($icon_font_size);?>" name="icon_font_size" placeholder="18px" />
		<?php
	}

	public function social_icon_padding_field() {
		$icon_padding       = get_option( 'icon_padding' );
		?>
		<input type="text" value="<?php echo esc_attr($icon_padding);?>" name="icon_padding" placeholder="5px 10px" />
		<?php
	}
	public function social_icon_bg_field() {
		$icon_bg_color       = get_option( 'icon_bg_color' );
		?>
		<input type="text" value="<?php echo esc_attr($icon_bg_color);?>" name="icon_bg_color" class="social-color-field" />
		<?php
	}
	public function social_icon_bg_hover_field() {
		$icon_bg_hover_color       = get_option( 'icon_bg_hover_color' );
		?>
		<input type="text" value="<?php echo esc_attr($icon_bg_hover_color);?>" name="icon_bg_hover_color" class="social-color-field" />
		<?php
	}
	public function social_tooltip_font_size_field() {
		$social_tooltip_font_size       = get_option( 'social_tooltip_font_size' );
		?>
		<input type="text" value="<?php echo esc_attr($social_tooltip_font_size);?>" name="social_tooltip_font_size" placeholder="12px" />
		<?php
	}
	public function social_tooltip_bg_field() {
		$social_tooltip_bg_color       = get_option( 'social_tooltip_bg_color' );
		?>
		<input type="text" value="<?php echo esc_attr($social_tooltip_bg_color);?>" name="social_tooltip_bg_color" class="social-color-field" />
		<?php
	}
	public function facebook_icon_field() {
		$facebook_icon       = get_option( 'facebook_icon' );
		if( $image = wp_get_attachment_image_src( $facebook_icon ) ) {
		echo '<a href="#" class="misha-upl"><img width="50px" src="' . esc_url($image[0]) . '" /></a>
			<a href="#" class="misha-rmv">Remove image</a>
			<input type="hidden" name="facebook_icon" value="' . esc_attr($facebook_icon) . '">';
		} else {
		echo '<a href="#" class="misha-upl">Upload image</a>
			<a href="#" class="misha-rmv" style="display:none">Remove image</a>
			<input type="hidden" name="facebook_icon" value="">';
		}
	}
	public function facebook_font_icon_field() {
		$facebook_font_icon       = get_option( 'facebook_font_icon' );
		?>
		<div class="icon-select-wapper">
		<input type="text" name="facebook_font_icon" value="<?php echo esc_attr($facebook_font_icon);?>" class="set-icon-field" placeholder="Click here"/>
		<?php if(isset($facebook_font_icon) && !empty($facebook_font_icon)){?>
		<span class="font-icon-preview"><?php esc_html_e('Selected Icon','tp-social-media-bar');?><i class="<?php echo esc_attr($facebook_font_icon);?>"></i></span>
		<?php } ?>
		<?php
		tp_social_media_bar_all_icon_list();
		?>
		</div>
		<?php
	}
	public function facebook_field() {
		$facebook_url       = get_option( 'facebook_url' );
		$facebookurl = 'https://facebook.com';
		if ( $facebook_url ) {
			$facebookurl = $facebook_url;
		}
		?>
		<input type="text" name="facebook_url" value="<?php echo esc_attr( $facebookurl ); ?>">
		<?php
	}
	public function facebook_tooltip_field() {
		$facebook_tooltip_text       = get_option( 'facebook_tooltip_text' );
		$facebook_tooltip = 'Facebook';
		if ( $facebook_tooltip_text ) {
			$facebook_tooltip = $facebook_tooltip_text;
		}
		?>
		<input type="text" name="facebook_tooltip_text" value="<?php echo esc_attr( $facebook_tooltip ); ?>">
		<?php
	}	
	public function twitter_field() {
		$twitter_url       = get_option( 'twitter_url' );
		$twitterurl = 'https://twitter.com';
		if ( $twitter_url ) {
			$twitterurl = $twitter_url;
		}
		?>
		<input type="text" name="twitter_url" value="<?php echo esc_attr( $twitterurl ); ?>">
		<?php
	}
	public function twitter_icon_field() {
		$twitter_icon       = get_option( 'twitter_icon' );
		if( $image = wp_get_attachment_image_src( $twitter_icon ) ) {
		echo '<a href="#" class="misha-upl"><img width="50px" src="' . esc_url($image[0]) . '" /></a>
			<a href="#" class="misha-rmv">Remove image</a>
			<input type="hidden" name="twitter_icon" value="' . esc_attr($twitter_icon) . '">';
		} else {
		echo '<a href="#" class="misha-upl">Upload image</a>
			<a href="#" class="misha-rmv" style="display:none">Remove image</a>
			<input type="hidden" name="twitter_icon" value="">';
		}
	}
	public function twitter_font_icon_field() {
		$twitter_font_icon       = get_option( 'twitter_font_icon' );
		?>
		<div class="icon-select-wapper">
		<input type="text" name="twitter_font_icon" value="<?php echo esc_attr($twitter_font_icon);?>" class="set-icon-field" placeholder="Click here"/>
		<?php if(isset($twitter_font_icon) && !empty($twitter_font_icon)){?>
		<span class="font-icon-preview"><?php esc_html_e('Selected Icon','tp-social-media-bar');?><i class="<?php echo esc_attr($twitter_font_icon);?>"></i></span>
		<?php }
		tp_social_media_bar_all_icon_list();
		?>
		</div>
		<?php
	}
	public function twitter_tooltip_field() {
		$twitter_tooltip_text       = get_option( 'twitter_tooltip_text' );
		$twitter_tooltip = 'Twitter';
		if ( $twitter_tooltip_text ) {
			$twitter_tooltip = $twitter_tooltip_text;
		}
		?>
		<input type="text" name="twitter_tooltip_text" value="<?php echo esc_attr( $twitter_tooltip ); ?>">
		<?php
	}
	public function linkedin_field() {
		$linkedin_url       = get_option( 'linkedin_url' );
		$linkedinurl = 'https://linkedin.com';
		if ( $linkedin_url ) {
			$linkedinurl = $linkedin_url;
		}
		?>
		<input type="text" name="linkedin_url" value="<?php echo esc_attr( $linkedinurl ); ?>">
		<?php
	}
	public function linkedin_icon_field() {
		$linkedin_icon       = get_option( 'linkedin_icon' );
		if( $image = wp_get_attachment_image_src( $linkedin_icon ) ) {
		echo '<a href="#" class="misha-upl"><img width="50px" src="' . esc_url($image[0]) . '" /></a>
			<a href="#" class="misha-rmv">Remove image</a>
			<input type="hidden" name="linkedin_icon" value="' . esc_attr($linkedin_icon) . '">';
		} else {
		echo '<a href="#" class="misha-upl">Upload image</a>
			<a href="#" class="misha-rmv" style="display:none">Remove image</a>
			<input type="hidden" name="linkedin_icon" value="">';
		}
	}
	public function linkedin_font_icon_field() {
		$linkedin_font_icon       = get_option( 'linkedin_font_icon' );
		?>
		<div class="icon-select-wapper">
		<input type="text" name="linkedin_font_icon" value="<?php echo esc_attr($linkedin_font_icon);?>" class="set-icon-field" placeholder="Click here"/>
		<?php if(isset($linkedin_font_icon) && !empty($linkedin_font_icon)){?>
		<span class="font-icon-preview"><?php esc_html_e('Selected Icon','tp-social-media-bar');?><i class="<?php echo esc_attr($linkedin_font_icon);?>"></i></span>
		<?php }
		tp_social_media_bar_all_icon_list();
		?>
		</div>
		<?php
	}
	public function linkedin_tooltip_field() {
		$linkedin_tooltip_text       = get_option( 'linkedin_tooltip_text' );
		$linkedin_tooltip = 'Linkedin';
		if ( $linkedin_tooltip_text ) {
			$linkedin_tooltip = $linkedin_tooltip_text;
		}
		?>
		<input type="text" name="linkedin_tooltip_text" value="<?php echo esc_attr( $linkedin_tooltip ); ?>">
		<?php
	}
	public function phone_field() {
		$phone_url       = get_option( 'phone_url' );
		?>
		<input type="text" name="phone_url" value="<?php echo esc_attr( $phone_url ); ?>">
		<?php
	}
	public function phone_icon_field() {
		$phone_icon       = get_option( 'phone_icon' );
		if( $image = wp_get_attachment_image_src( $phone_icon ) ) {
		echo '<a href="#" class="misha-upl"><img width="50px" src="' . esc_url($image[0]) . '" /></a>
			<a href="#" class="misha-rmv">Remove image</a>
			<input type="hidden" name="phone_icon" value="' . esc_attr($phone_icon) . '">';
		} else {
		echo '<a href="#" class="misha-upl">Upload image</a>
			<a href="#" class="misha-rmv" style="display:none">Remove image</a>
			<input type="hidden" name="phone_icon" value="">';
		}
	}
	public function phone_font_icon_field() {
		$phone_font_icon       = get_option( 'phone_font_icon' );
		?>
		<div class="icon-select-wapper">
		<input type="text" name="phone_font_icon" value="<?php echo esc_attr($phone_font_icon);?>" class="set-icon-field" placeholder="Click here"/>
		<?php if(isset($phone_font_icon) && !empty($phone_font_icon)){?>
		<span class="font-icon-preview"><?php esc_html_e('Selected Icon','tp-social-media-bar');?><i class="<?php echo esc_attr($phone_font_icon);?>"></i></span>
		<?php }
		tp_social_media_bar_all_icon_list();
		?>
		</div>
		<?php
	}
	public function phone_tooltip_field() {
		$phone_tooltip_text       = get_option( 'phone_tooltip_text' );
		$phone_tooltip = 'Phone';
		if ( $phone_tooltip_text ) {
			$phone_tooltip = $phone_tooltip_text;
		}
		?>
		<input type="text" name="phone_tooltip_text" value="<?php echo esc_attr( $phone_tooltip ); ?>">
		<?php
	}
	public function whatsapp_field() {
		$whatsapp_url       = get_option( 'whatsapp_url' );
		?>
		<input type="text" name="whatsapp_url" value="<?php echo esc_attr( $whatsapp_url ); ?>">
		<?php
	}
	public function whatsapp_icon_field() {
		$whatsapp_icon       = get_option( 'whatsapp_icon' );
		if( $image = wp_get_attachment_image_src( $whatsapp_icon ) ) {
		echo '<a href="#" class="misha-upl"><img width="50px" src="' . esc_url($image[0]) . '" /></a>
			<a href="#" class="misha-rmv">Remove image</a>
			<input type="hidden" name="whatsapp_icon" value="' . esc_attr($whatsapp_icon) . '">';
		} else {
		echo '<a href="#" class="misha-upl">Upload image</a>
			<a href="#" class="misha-rmv" style="display:none">Remove image</a>
			<input type="hidden" name="whatsapp_icon" value="">';
		}
	}
	public function whatsapp_font_icon_field() {
		$whatsapp_font_icon       = get_option( 'whatsapp_font_icon' );
		?>
		<div class="icon-select-wapper">
		<input type="text" name="whatsapp_font_icon" value="<?php echo esc_attr($whatsapp_font_icon);?>" class="set-icon-field" placeholder="Click here"/>
		<?php if(isset($whatsapp_font_icon) && !empty($whatsapp_font_icon)){?>
		<span class="font-icon-preview"><?php esc_html_e('Selected Icon','tp-social-media-bar');?><i class="<?php echo esc_attr($whatsapp_font_icon);?>"></i></span>
		<?php }
		tp_social_media_bar_all_icon_list();
		?>
		</div>
		<?php
	}
	public function whatsapp_tooltip_field() {
		$whatsapp_tooltip_text       = get_option( 'whatsapp_tooltip_text' );
		$whatsapp_tooltip = 'Whatsapp';
		if ( $whatsapp_tooltip_text ) {
			$whatsapp_tooltip = $whatsapp_tooltip_text;
		}
		?>
		<input type="text" name="whatsapp_tooltip_text" value="<?php echo esc_attr( $whatsapp_tooltip ); ?>">
		<?php
	}
	public function youtube_field() {
		$youtube_url       = get_option( 'youtube_url' );
		?>
		<input type="text" name="youtube_url" value="<?php echo esc_attr( $youtube_url ); ?>">
		<?php
	}
	public function youtube_icon_field() {
		$youtube_icon       = get_option( 'youtube_icon' );
		if( $image = wp_get_attachment_image_src( $youtube_icon ) ) {
		echo '<a href="#" class="misha-upl"><img width="50px" src="' . esc_url($image[0]) . '" /></a>
			<a href="#" class="misha-rmv">Remove image</a>
			<input type="hidden" name="youtube_icon" value="' . esc_attr($youtube_icon) . '">';
		} else {
		echo '<a href="#" class="misha-upl">Upload image</a>
			<a href="#" class="misha-rmv" style="display:none">Remove image</a>
			<input type="hidden" name="youtube_icon" value="">';
		}
	}
	public function youtube_font_icon_field() {
		$youtube_font_icon       = get_option( 'youtube_font_icon' );
		?>
		<div class="icon-select-wapper">
		<input type="text" name="youtube_font_icon" value="<?php echo esc_attr($youtube_font_icon);?>" class="set-icon-field" placeholder="Click here"/>
		<?php if(isset($youtube_font_icon) && !empty($youtube_font_icon)){?>
		<span class="font-icon-preview"><?php esc_html_e('Selected Icon','tp-social-media-bar');?><i class="<?php echo esc_attr($youtube_font_icon);?>"></i></span>
		<?php }
		tp_social_media_bar_all_icon_list();?>
		</div>
		<?php
	}
	public function youtube_tooltip_field() {
		$youtube_tooltip_text       = get_option( 'youtube_tooltip_text' );
		$youtube_tooltip = 'Youtube';
		if ( $youtube_tooltip_text ) {
			$youtube_tooltip = $youtube_tooltip_text;
		}
		?>
		<input type="text" name="youtube_tooltip_text" value="<?php echo esc_attr( $youtube_tooltip ); ?>">
		<?php
	}
}

new TP_Social_Media_Bar_Settings();