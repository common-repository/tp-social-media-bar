<?php
/**
 * Plugin Name: TP Social Media Bar
 * Plugin URI: https://wordpress.org/plugins/tp-social-media-bar
 * Description: This is a Social Media Bar plugin to social media icons on the site right side for all pages.
 * Author: A.R. RONY
 * Version: 1.0.0
 * Author URI: https://profiles.wordpress.org/arrony200
 * Text Domain: tp-social-media-bar
 * Domain Path: /languages
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'TP_SOCIAL_MEDIA_BAR_VERSION', '1.0.0' );
define( 'TP_SOCIAL_MEDIA_BAR_CORE_URL', plugin_dir_url( __FILE__ ) );
define( 'TP_SOCIAL_MEDIA_BAR_PLUGIN_ROOT', __FILE__ );
define( 'TP_SOCIAL_MEDIA_BAR_PLUGIN_DIR', __DIR__ );
define( 'TP_SOCIAL_MEDIA_BAR_PLUGIN_URL', plugins_url( '/', TP_SOCIAL_MEDIA_BAR_PLUGIN_ROOT ) );
define( 'TP_SOCIAL_MEDIA_BAR_PLUGIN_PATH', plugin_dir_path( TP_SOCIAL_MEDIA_BAR_PLUGIN_ROOT ) );
define( 'TP_SOCIAL_MEDIA_BAR_CORE_ASSETS', TP_SOCIAL_MEDIA_BAR_CORE_URL );

require_once TP_SOCIAL_MEDIA_BAR_PLUGIN_DIR . '/include/settings.php';
require_once TP_SOCIAL_MEDIA_BAR_PLUGIN_DIR . '/include/functions.php';
require_once TP_SOCIAL_MEDIA_BAR_PLUGIN_DIR . '/include/icons.php';


add_action( 'wp_enqueue_scripts','tp_social_media_bar_assets_scripts' );
function tp_social_media_bar_assets_scripts() {
	wp_enqueue_style( 'font-awesome-all', TP_SOCIAL_MEDIA_BAR_PLUGIN_URL . 'assets/css/all.min.css', '', time(), false );
	wp_enqueue_style( 'tp-social-media-bar-style', TP_SOCIAL_MEDIA_BAR_PLUGIN_URL . 'assets/css/tp-social-media-bar.css', '', time(), false );
	if ( function_exists( 'tp_social_media_bar_get_custom_color' ) ) {
		wp_add_inline_style( 'tp-social-media-bar-style', tp_social_media_bar_get_custom_color() );
	}
	wp_enqueue_script( 'tp-social-media-bar-js', TP_SOCIAL_MEDIA_BAR_PLUGIN_URL . 'assets/js/tp-social-media-bar.js', array( 'jquery'), time(), true );
}



add_action( 'admin_enqueue_scripts', 'tp_social_media_bar_admin_assets_scripts' );
function tp_social_media_bar_admin_assets_scripts() {
	wp_enqueue_style( 'font-awesome-all', TP_SOCIAL_MEDIA_BAR_PLUGIN_URL . 'assets/css/all.min.css', '', time(), false );
    wp_enqueue_style( 'wp-color-picker' );
	if ( ! did_action( 'wp_enqueue_media' ) ) {
		wp_enqueue_media();
	}
	wp_enqueue_script( 'tp-social-media-bar-admin', TP_SOCIAL_MEDIA_BAR_PLUGIN_URL . 'assets/js/tp-social-media-bar-admin.js', array( 'jquery','wp-color-picker' ), time(), true );
}


function tp_social_media_bar_get_custom_color() {
	$icon_font_size       = get_option( 'icon_font_size' );
	$icon_color       = get_option( 'icon_color' );
	$icon_hover_color       = get_option( 'icon_hover_color' );
	$icon_padding       = get_option( 'icon_padding' );
	$icon_bg_color       = get_option( 'icon_bg_color' );
	$icon_bg_hover_color       = get_option( 'icon_bg_hover_color' );
	$social_tooltip_bg_color       = get_option( 'social_tooltip_bg_color' );
	$social_tooltip_font_size       = get_option( 'social_tooltip_font_size' );

	ob_start();
	if (  isset($icon_font_size) && ! empty( $icon_font_size )  ) {
		?>
	.tp-social-media-bar-wrapper ul li a i{
		font-size: <?php echo esc_attr( $icon_font_size ); ?>;
	}
	<?php }
	if (  isset($icon_color) && ! empty( $icon_color )  ) {
		?>
	.tp-social-media-bar-wrapper ul li a svg,
	.tp-social-media-bar-wrapper ul li a i{
		color: <?php echo esc_attr( $icon_color ); ?>;
		fill: <?php echo esc_attr( $icon_color ); ?>;
	}
	<?php }
	if (  isset($icon_hover_color) && ! empty( $icon_hover_color )  ) {
		?>
	.tp-social-media-bar-wrapper ul li a:hover svg,
	.tp-social-media-bar-wrapper ul li a:hover i{
		color: <?php echo esc_attr( $icon_hover_color ); ?>;
		fill: <?php echo esc_attr( $icon_hover_color ); ?>;
	}
	<?php }
	if (  isset($social_tooltip_font_size) && ! empty( $social_tooltip_font_size )  ) {
		?>
	.tooltips span{
		font-size: <?php echo esc_attr( $social_tooltip_font_size ); ?>;
	}
	<?php }
	if (  isset($icon_padding) && ! empty( $icon_padding )  ) {
		?>
	.tp-social-media-bar-wrapper ul li a{
		padding: <?php echo esc_attr( $icon_padding ); ?>;
	}
	<?php }
	if (  isset($icon_bg_color) && ! empty( $icon_bg_color )  ) {
		?>
	.tp-social-media-bar-wrapper ul li a{
		background-color: <?php echo esc_attr( $icon_bg_color ); ?>;
	}
	<?php
	}
	if (  isset($icon_bg_hover_color) && ! empty( $icon_bg_hover_color )  ) {
	?>
	.tp-social-media-bar-wrapper ul li:hover a{
		background-color: <?php echo esc_attr( $icon_bg_hover_color ); ?>;
	}
	<?php
	}
	if (  isset($social_tooltip_bg_color) && ! empty( $social_tooltip_bg_color )  ) {
		?>
		.tooltips span {
			background: <?php echo esc_attr( $social_tooltip_bg_color ); ?>;
		}
		.tooltips[tooltip-position="left"] span:after{
			border-left-color: <?php echo esc_attr( $social_tooltip_bg_color ); ?>;
		}
		<?php
	}
	$tp_social_media_bar_custom_css = ob_get_clean();

	return $tp_social_media_bar_custom_css;
}
