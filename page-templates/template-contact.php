<?php
/**
 * Template Name: Template: Contact
 *
 * Template for displaying a page just with the header and footer area and a "naked" content area in between.
 * Good for landingpages and other types of pages where you want to add a lot of custom markup.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );

?>

<header class="entry-header page-header">
	<div class="container">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</div>
</header><!-- .entry-header -->

<div class="entry-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-10">
                <?php the_content(); ?>
            </div>
            <div class="col-lg-1"></div>
        </div>
    </div>

    <?php
    wp_link_pages(
        array(
            'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
            'after'  => '</div>',
        )
    );
    ?>
</div><!-- .entry-content -->

<div class="contact-us-holder">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <?php echo do_shortcode('[contact-form-7 id="46" title="Contact Us Page Form"]'); ?>
            </div>
            <div class="col-lg-6">
                <div class="contact-us-hours">
                    <div class="content line-bottom">
                        <h3>Opening Hours</h3>
                    </div>
                    <div class="content">
                        <div class="hours">
                            <div class="hour">
                                <span>Mon - Tue</span>
                                <span>7am - 4pm</span>
                                <strong>(Last Orders 3pm)</strong>
                            </div>
                            <div class="hour">
                                <span>Wed - Sat</span>
                                <span>7am - 9pm</span>
                                <strong>(Last Orders)</strong>
                            </div>
                            <div class="hour">
                                <span>Sun</span>
                                <span>7am - 8pm</span>
                                <strong>(Last Orders)</strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="contact-us-image">
    <div class="container">
        <div class="entry-content">
            <div class="row">
                <div class="col-lg-1"></div>
                <div class="col-lg-10">
                    <div class="img-widescreen">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/contact-us.png" alt="Contact us" class="logo">
                    </div>
                </div>
                <div class="col-lg-1"></div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();