<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?>
<?php astra_content_bottom(); ?>
	</div> <!-- ast-container -->
	</div><!-- #content -->
<?php 
	astra_content_after();
		
	astra_footer_before();?>
		
	<footer> 
		<?php
		wp_nav_menu([
			
			'theme_location' => 'footer_menu',
			'container' => false,
			
		])
?>
		
	
</footer>
	<?php	
	astra_footer_after(); 
?>
	</div>

	<!-- Début de l'insertion du footer-->
	
<!-- Fin de l'insertion du footer -->

<!-- #page -->
<?php 
	astra_body_bottom();    
	wp_footer(); 
?>
	</body>
</html>
