<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Virtul_Factory
 */

?>

	</div><!-- #content -->
		<div class="footer-dark">
			<footer>
					<div class="container">
							<div class="row">
									<div class="col-sm-6 col-md-3 item">
											<h3>Services</h3>
											<ul>
													<li><a href="#">Web design</a></li>
													<li><a href="#">Development</a></li>
													<li><a href="#">Hosting</a></li>
											</ul>
									</div>
									<div class="col-sm-6 col-md-3 item">
											<h3>About</h3>
											<ul>
													<li><a href="#">Company</a></li>
													<li><a href="#">Team</a></li>
													<li><a href="#">Careers</a></li>
											</ul>
									</div>
									<div class="col-md-6 item text">
											<h3>Company Name</h3>
											<p>Praesent sed lobortis mi. Suspendisse vel placerat ligula. Vivamus ac sem lacus. Ut vehicula rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit pulvinar dictum vel in justo.</p>
									</div>
									<div class="col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div>
							</div>
							<p class="copyright">Company Name © 2017</p>
					</div>
			</footer>
	</div>
	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'virtul-factory' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'virtul-factory' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'virtul-factory' ), 'virtul-factory', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
