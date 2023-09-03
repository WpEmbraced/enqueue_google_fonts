function wpe_add_google_fonts() {
	wp_enqueue_style( 'wpb-google-fonts', '/wp-content/uploads/2023/09/CrimsonText-Bold.ttf', array(), null );
}
add_action( 'wp_enqueue_scripts', 'wpe_add_google_fonts' );
