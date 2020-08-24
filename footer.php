<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

    <div class="home-contact">
        <div class="bg-image"></div>
        <div class="title-holder">
            <div class="container">
                <h2 class="<?php if ( is_front_page() ) { ?> wow fadeInDown <?php } ?>wow fadeInUp">
                    <span>Contact</span>
                    Send us a message below
                </h2>
            </div>
        </div>
        
        <div class="container">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="contact-form <?php if ( is_front_page() ) { ?> wow fadeInDown <?php } ?>wow fadeInUp">
                        <?php echo do_shortcode('[contact-form-7 id="17" title="Contact form"]'); ?>
                    </div>
                    <div class="copyright <?php if ( is_front_page() ) { ?> wow fadeInDown <?php } ?>wow fadeInUp">
                        © Copyright The Backbeach Eating House - All Rights Reserved | Website by <a href="https://thedude23.github.io/tk_portfolio/" target="blank">TK</a>
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
    </div>

    <div class="footer-warning">
        <div class="container">
            <div class="row">
                <div class="col-sm-2 col-lg-2">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/glass-cheers@2x.png" alt="Liquor" xwidth="84">
                </div>
                <div class="col-sm-10 col-lg-10">
                    <p class="tagline">WARNING, Under the Liquor Control Act 1998, it is an offence:</p>
                    <p>To sell or supply liquour to a person under the age of 18 years on a licenced or regulated premises; or for a person under the age of 18 years to purchase, or attempt to purchase, liquor on a licenced or regulated premises.</p>
                </div>
            </div>
        </div>
    </div>

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

