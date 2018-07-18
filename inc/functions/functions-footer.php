<?php
/**
 * Footer functions
 *
 * @package Talon
 */

/**
 * Footer sidebar
 */
function talon_footer_sidebar() {
	if ( is_active_sidebar( 'footer-1' ) ) {
		get_sidebar('footer');		
	}
}
add_action('talon_footer', 'talon_footer_sidebar', 7);

/**
 * Footer credits
 */
function talon_footer_credits() {
	?>
		<div class="site-info col-md-12">
					<p>No information or images from this website may be reused or reproduced without authorization.</p>
			<hr>
					<p>68 Fukakusa Yabunouchi-cho, Fushimi-ku, Kyoto City 612-0882　Phone (075) 641-7331　Fax (075) 642-2153</p>
		</div><!-- .site-info -->
	<?php
}
add_action('talon_footer', 'talon_footer_credits', 8);

/**
 * Footer menu
 */
function talon_footer_menu() {
	?>
			<div class="footer_license" style="float:right">
				<p>Copyright © Fushimi Inari Taisha, All Rights Reserved.</p>
			</div>
	<?php
}
add_action('talon_footer', 'talon_footer_menu', 9);