<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Drossel
 */

?>

	</div><!-- #content -->
	<div class="newsletter-container">
		<div class="heading-center wrapp">newsletter</div>
		SEM IDE KURWA DOBRY NEWSLETTER
	</div>
	<div class="brand-container">
		<div class="heading-center wrapp">spolupracujeme</div>
		<div class="wrapp group">
			<?php dynamic_sidebar( 'brands-1' ) ?>
		</div>
	</div>
	<div class="instagram-container">
		<div class="heading-center wrapp">zo zákulisia</div>
			<div class="wrapper">
			<?php echo do_shortcode( '[insta-gallery id="1"]' ); ?>  <!-- instagram shortcode -->
			</div>
		</div>
	<footer id="colophon" class="site-footer">
		<div class="wrapp footer-menu-container group">
			<?php dynamic_sidebar( 'footer-menu-1' ) ?>
			<?php dynamic_sidebar( 'footer-menu-2' ) ?>
			<?php dynamic_sidebar( 'footer-menu-3' ) ?>
			<?php dynamic_sidebar( 'footer-menu-4' ) ?>
		</div>
		<div class="wrapp social-container">
			<i class="icon-instagram"></i>
			<i class="icon-facebook-squared"></i>
			<i class="icon-youtube"></i>
			<i class="icon-behance"></i>
		</div>
		<div class="wrapp signature">
			&copy<?php echo date(" Y "); bloginfo()?> spol. s.r.o. | Všetky práva vyhradené | Cookies
		</div>
	</footer><!-- #colophon -->
	<div class="wrapp sig">DROSSEL | CREATIVE STUDIO</div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
