<?php
/**
 * The template for displaying the footer.
 *
 * Contains the body & html closing tags.
 *
 * @package HelloElementor
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'footer' ) ) {
	if ( did_action( 'elementor/loaded' ) && hello_header_footer_experiment_active() ) {
		get_template_part( 'template-parts/dynamic-footer' );
	} else {
		get_template_part( 'template-parts/footer' );
	}
}



// $email_id = get_field('email_id');

// if ( $email_id ) {
// 	echo '<footer id="colophon" class="site-footer" role="contentinfo">';
// 	echo '<div class="footer-content">';
// 	echo '<p>Email us at <a href="mailto:' . esc_attr( antispambot( $email_id ) ) . '">' . esc_html( antispambot( $email_id ) ) . '</a></p>';
// 	echo '</div>';
// 	echo '</footer>';
// }

?>




<?php wp_footer(); ?>

</body>
</html>
