function wpe_add_google_fonts() {
	wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css2?family=Crimson+Text&display=swap', array(), null );
}
add_action( 'wp_enqueue_scripts', 'wpe_add_google_fonts' );
