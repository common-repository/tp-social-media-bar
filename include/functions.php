<?php
function tp_social_media_bar_func() {
	global $wpdb;
	$socialmedia_switch   = get_option( 'socialmedia_switch' );
	$opennew_tab_switch   = get_option( 'opennew_tab_switch' );

	$facebook_url   = get_option( 'facebook_url' );
	$facebook_tooltip   = get_option( 'facebook_tooltip_text' );
	$facebook_icon       = get_option( 'facebook_icon' );
	$facebook_font_icon       = get_option( 'facebook_font_icon' );

	$twitter_url   = get_option( 'twitter_url' );
	$twitter_icon       = get_option( 'twitter_icon' );
	$twitter_tooltip   = get_option( 'twitter_tooltip_text' );
	$twitter_font_icon       = get_option( 'twitter_font_icon' );

	$linkedin_url   = get_option( 'linkedin_url' );
	$linkedin_icon       = get_option( 'linkedin_icon' );
	$linkedin_tooltip   = get_option( 'linkedin_tooltip_text' );
	$linkedin_font_icon       = get_option( 'linkedin_font_icon' );

	$phone_url   = get_option( 'phone_url' );
	$phone_icon       = get_option( 'phone_icon' );
	$phone_tooltip   = get_option( 'phone_tooltip_text' );
	$phone_font_icon       = get_option( 'phone_font_icon' );

	$whatsapp_url   = get_option( 'whatsapp_url' );
	$whatsapp_tooltip   = get_option( 'whatsapp_tooltip_text' );
	$whatsapp_font_icon       = get_option( 'whatsapp_font_icon' );
	$whatsapp_icon       = get_option( 'whatsapp_icon' );

	$youtube_url   = get_option( 'youtube_url' );
	$youtube_tooltip   = get_option( 'youtube_tooltip_text' );
	$youtube_icon       = get_option( 'youtube_icon' );
	$youtube_font_icon       = get_option( 'youtube_font_icon' );

	if ( isset( $opennew_tab_switch ) && $opennew_tab_switch == '1' ) {
		$target = 'target="_blank"';
	}else{
		$target = '';
	}

	if ( isset( $socialmedia_switch ) && $socialmedia_switch == '1' ) {
		?>
		<div class="tp-social-media-bar-wrapper">
			<ul>
				<?php if(isset($facebook_url) && !empty($facebook_url)){?>
					<li class="facebook tooltips" tooltip="<?php echo esc_attr($facebook_tooltip);?>" tooltip-position="left"><a <?php echo wp_kses_post($target);?> href="<?php echo esc_url($facebook_url); ?>">
					<?php 
					if( $facebook_icon = wp_get_attachment_image_src( $facebook_icon ) ) {
					echo '<img src="'.esc_url($facebook_icon[0]).'"/>';
					}elseif($facebook_font_icon){
						echo '<i class="'.esc_attr($facebook_font_icon).'"></i>';
					} else{?>
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"/></svg>
					<?php } ?>
					</a></li>
				<?php } ?>
				<?php if(isset($twitter_url) && !empty($twitter_url)){?>
					<li class="twitter tooltips" tooltip="<?php echo esc_attr($twitter_tooltip);?>" tooltip-position="left"><a <?php echo wp_kses_post($target);?> href="<?php echo esc_url($twitter_url); ?>">
					<?php 
					if( $twitter_icon = wp_get_attachment_image_src( $twitter_icon ) ) {
						echo '<img src="'.esc_url($twitter_icon[0]).'"/>';
					}elseif($twitter_font_icon){
						echo '<i class="'.esc_attr($twitter_font_icon).'"></i>';
					} else{?>
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"/></svg>
					<?php } ?>
				</a></li>
				<?php } ?>
				<?php if(isset($linkedin_url) && !empty($linkedin_url)){?>
					<li class="linkedin tooltips" tooltip="<?php echo esc_attr($linkedin_tooltip);?>" tooltip-position="left"><a <?php echo wp_kses_post($target);?> href="<?php echo esc_url($linkedin_url); ?>">
					<?php 
					if( $linkedin_icon = wp_get_attachment_image_src( $linkedin_icon ) ) {
						echo '<img src="'.esc_url($linkedin_icon[0]).'"/>';
					}elseif($linkedin_font_icon){
						echo '<i class="'.esc_attr($linkedin_font_icon).'"></i>';
					} else{?>
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"/></svg></svg>
					<?php } ?>
				</a></li>
				<?php } ?>
				<?php if(isset($phone_url) && !empty($phone_url)){?>
					<li class="phone tooltips" tooltip="<?php echo esc_attr($phone_tooltip);?>" tooltip-position="left"><a href="tel:<?php echo esc_attr($phone_url); ?>">
					<?php 
					if( $phone_icon = wp_get_attachment_image_src( $phone_icon ) ) {
						echo '<img src="'.esc_url($phone_icon[0]).'"/>';
					}elseif($phone_font_icon){
						echo '<i class="'.esc_attr($phone_font_icon).'"></i>';
					} else{?>
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M511.2 387l-23.25 100.8c-3.266 14.25-15.79 24.22-30.46 24.22C205.2 512 0 306.8 0 54.5c0-14.66 9.969-27.2 24.22-30.45l100.8-23.25C139.7-2.602 154.7 5.018 160.8 18.92l46.52 108.5c5.438 12.78 1.77 27.67-8.98 36.45L144.5 207.1c33.98 69.22 90.26 125.5 159.5 159.5l44.08-53.8c8.688-10.78 23.69-14.51 36.47-8.975l108.5 46.51C506.1 357.2 514.6 372.4 511.2 387z"/></svg></svg>
					<?php } ?>
				</a></li>
				<?php } ?>
				<?php if(isset($whatsapp_url) && !empty($whatsapp_url)){?>
				<li class="whatsapp tooltips" tooltip="<?php echo esc_attr($whatsapp_tooltip);?>" tooltip-position="left"><a <?php echo wp_kses_post($target);?> href="<?php echo esc_url($whatsapp_url); ?>">
				<?php 
					if( $whatsapp_icon = wp_get_attachment_image_src( $whatsapp_icon ) ) {
						echo '<img src="'.esc_url($whatsapp_icon[0]).'"/>';
					}elseif($whatsapp_font_icon){
						echo '<i class="'.esc_attr($whatsapp_font_icon).'"></i>';
					} else{?>
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/></svg>
				<?php } ?>
				</a></li>
				<?php } ?>
				<?php if(isset($youtube_url) && !empty($youtube_url)){?>
				<li class="youtube tooltips" tooltip="<?php echo esc_attr($youtube_tooltip);?>" tooltip-position="left"><a <?php echo wp_kses_post($target);?> href="<?php echo esc_url($youtube_url); ?>">
				<?php 
					if( $youtube_icon = wp_get_attachment_image_src( $youtube_icon ) ) {
						echo '<img src="'.esc_url($youtube_icon[0]).'"/>';
					}elseif($youtube_font_icon){
						echo '<i class="'.esc_attr($youtube_font_icon).'"></i>';
					} else{?>
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"/></svg>
				<?php } ?>
				</a></li>
				<?php } ?>
			</ul>
		</div>
		<?php
	}
}
add_action( 'wp_footer', 'tp_social_media_bar_func' );