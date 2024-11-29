<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Virtul_Factory
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
      <div>

</div>
<div class="container hero">
    <div class="row">
        <div class="col-12 col-lg-6 col-xl-5 offset-xl-1">
            <h1>The revolution is here.</h1>
            <p>Mauris egestas tellus non ex condimentum, ac ullamcorper sapien dictum. Nam consequat neque quis sapien viverra convallis. In non tempus lorem. </p><button class="btn btn-light btn-lg action-button" type="button">Learn More</button></div>
        <div
            class="col-md-5 col-lg-5 offset-lg-1 offset-xl-0 d-none d-lg-block phone-holder">
            <div class="iphone-mockup"><img src="<?php echo get_template_directory_uri() . '/img/iphone.svg' ?>" class="device">
                <div class="screen"></div>
            </div>
    </div>
</div>
</div>
<div class="features-boxed">
    <div class="container">
        <div class="intro">
            <h2 class="text-center">Features </h2>
            <p class="text-center">Nunc luctus in metus eget fringilla. Aliquam sed justo ligula. Vestibulum nibh erat, pellentesque ut laoreet vitae.</p>
        </div>
        <div class="row justify-content-center features">
            <div class="col-sm-6 col-md-5 col-lg-4 item">
                <div class="box"><i class="fa fa-map-marker icon"></i>
                    <h3 class="name">Works everywhere</h3>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu.</p><a href="#" class="learn-more">Learn more »</a></div>
            </div>
            <div class="col-sm-6 col-md-5 col-lg-4 item">
                <div class="box"><i class="fa fa-clock-o icon"></i>
                    <h3 class="name">Always available</h3>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu.</p><a href="#" class="learn-more">Learn more »</a></div>
            </div>
            <div class="col-sm-6 col-md-5 col-lg-4 item">
                <div class="box"><i class="fa fa-list-alt icon"></i>
                    <h3 class="name">Customizable </h3>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu.</p><a href="#" class="learn-more">Learn more »</a></div>
            </div>
            <div class="col-sm-6 col-md-5 col-lg-4 item">
                <div class="box"><i class="fa fa-leaf icon"></i>
                    <h3 class="name">Organic </h3>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu.</p><a href="#" class="learn-more">Learn more »</a></div>
            </div>
            <div class="col-sm-6 col-md-5 col-lg-4 item">
                <div class="box"><i class="fa fa-plane icon"></i>
                    <h3 class="name">Fast </h3>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu.</p><a href="#" class="learn-more">Learn more »</a></div>
            </div>
            <div class="col-sm-6 col-md-5 col-lg-4 item">
                <div class="box"><i class="fa fa-phone icon"></i>
                    <h3 class="name">Mobile-first</h3>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu.</p><a href="#" class="learn-more">Learn more »</a></div>
            </div>
        </div>
    </div>
</div>
<div class="testimonials-clean">
    <div class="container">
        <div class="intro">
            <h2 class="text-center">Testimonials </h2>
            <p class="text-center">Our customers love us! Read what they have to say below. Aliquam sed justo ligula. Vestibulum nibh erat, pellentesque ut laoreet vitae.</p>
        </div>
        <div class="row people">
            <div class="col-md-6 col-lg-4 item">
                <div class="box">
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est.</p>
                </div>
                <div class="author"><img class="rounded-circle" src="<?php echo get_template_directory_uri() . '/img/1.jpg' ?>">
                    <h5 class="name">Ben Johnson</h5>
                    <p class="title">CEO of Company Inc.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 item">
                <div class="box">
                    <p class="description">Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, et interdum justo suscipit id.</p>
                </div>
                <div class="author"><img class="rounded-circle" src="<?php echo get_template_directory_uri() . '/img/3.jpg' ?>">
                    <h5 class="name">Carl Kent</h5>
                    <p class="title">Founder of Style Co.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 item">
                <div class="box">
                    <p class="description">Aliquam varius finibus est, et interdum justo suscipit. Vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu.</p>
                </div>
                <div class="author"><img class="rounded-circle" src="<?php echo get_template_directory_uri() . '/img/2.jpg' ?>">
                    <h5 class="name">Emily Clark</h5>
                    <p class="title">Owner of Creative Ltd.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="team-clean">
    <div class="container">
        <div class="intro">
            <h2 class="text-center">Team </h2>
            <p class="text-center">Nunc luctus in metus eget fringilla. Aliquam sed justo ligula. Vestibulum nibh erat, pellentesque ut laoreet vitae. </p>
        </div>
        <div class="row people">
            <div class="col-md-6 col-lg-4 item"><img class="rounded-circle" src="<?php echo get_template_directory_uri() . '/img/1.jpg' ?>">
                <h3 class="name">Ben Johnson</h3>
                <p class="title">Musician</p>
                <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, et interdum justo suscipit id. Etiam dictum feugiat tellus, a semper massa. </p>
                <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
            </div>
            <div class="col-md-6 col-lg-4 item"><img class="rounded-circle" src="<?php echo get_template_directory_uri() . '/img/2.jpg' ?>">
                <h3 class="name">Emily Clark</h3>
                <p class="title">Artist</p>
                <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, et interdum justo suscipit id. Etiam dictum feugiat tellus, a semper massa. </p>
                <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
            </div>
            <div class="col-md-6 col-lg-4 item"><img class="rounded-circle" src="<?php echo get_template_directory_uri() . '/img/3.jpg' ?>">
                <h3 class="name">Carl Kent</h3>
                <p class="title">Stylist</p>
                <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, et interdum justo suscipit id. Etiam dictum feugiat tellus, a semper massa. </p>
                <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
            </div>
        </div>
    </div>
</div>
		<?php
/*
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
*/
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
