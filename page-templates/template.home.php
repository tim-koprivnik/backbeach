<?php
/**
 * Template Name: Empty Page Template
 *
 * Template for displaying a page just with the header and footer area and a "naked" content area in between.
 * Good for landingpages and other types of pages where you want to add a lot of custom markup.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>

<div class="home-banner wow fadeIn" data-wow-duration="6s">
    <div class="container">
        <h1 class="wow fadeInUp" data-wow-delay="0.25s">A Dining Experience</h1>
    </div>
</div>

<div class="home-call-to-action">
    <div class="container">
        <div class="flex">
            <div class="col-md-4">
                <a href="#" class="call-to-action wow zoomIn">
                    <div class="image"></div>
                    <div class="title">Dining Menu</div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="#" class="call-to-action second wow zoomIn" data-wow-delay="0.25s">
                    <div class="image"></div>
                    <div class="title">Lunch Menu</div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="#" class="call-to-action third wow zoomIn" data-wow-delay="0.5s">
                    <div class="image"></div>
                    <div class="title">Function</div>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="home-welcome">
    <div class="title-holder">
        <div class="container">
            <h2 class="wow fadeInUp">
                <span>Welcome to</span>
                The Backbeach Eating House
            </h2>
        </div>
    </div>
    
    <div class="container">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-8">
                <p class="tagline wow fadeInUp">
                There's only one place like the Backbeach Cafe & Restaurant, located on Bunbury's Backbeach with uninterupted views of crisp white sand and the Indian Ocean. The perfect place to eat, relax, and enjoy.
                </p>
                <p class="wow fadeInUp">
                We are proud to support local business and local producers by sourcing as much as possible locally, including fish from Augusta, beef and chicken from Western Australia (DBC), coffee from Yallingup and wines from Ferguson Valley, Margaret River and throughout the South West.
                </p>
            </div>
            <div class="col-lg-3">
                <a href="#" class="btn btn-primary button wow fadeInRight">
                    Read More <i class="fa fa-chevron-right"></i>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="home-news">
    <div class="bg-image"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-5 col-xs-12">
                <a href="#" class="news-img wow zoomIn">
                    <div class="image"></div>
                    <div class="category">What's On</div>
                    <div class="date">10.06.2020</div>
                </a>
            </div>
            <div class="col-sm-1"></div>
            <div class="col-sm-6 col-xs-12">
                <h2 class="wow fadeInUp">Mother's Day</h2>
                <p class="wow fadeInUp">
                    Join us to celebrate your Mother's Day. Breakfast and Lunch are pretty full but we're taking Dinner bookings so you ...
                </p>
                <a href="#" class="btn btn-primary button wow fadeInRight">
                    Read More <i class="fa fa-chevron-right"></i>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="home-about">
    <div class="bg-image">
        <!-- <div class="top-overlay"> -->
            <img src="<?php echo get_template_directory_uri(); ?>/img/Group.png" alt="Cutout Top" width="100%" class="wow slideInDown">
        <!-- </div> -->
        <!-- <div class="bottom-overlay"> -->
            <img src="<?php echo get_template_directory_uri(); ?>/img/Vector.png" alt="Cutout Bottom" width="100%" class="wow slideInUp">
        <!-- </div> -->
    </div>
    <div class="title-holder">
        <div class="container">
            <h2 class="wow fadeInUp">
                <span>Served fresh</span>
                from the paddock to the plate
            </h2>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-8">
                <p class="tagline wow fadeInUp">
                Nulla hendrerit malesuada accumsan. Cras hendrerit nisl in lectus commodo, a molestie ante feguiat. Suspendisse nec convallis mauris.
                </p>
                <p class="wow fadeInUp">
                Donec elit lorior, lobortis sit amel lobortis el, feugiat sed quam. Aenean efficitur risus nec magna fin bus, vitae sodales ex aliquam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                </p>
            </div>
            <div class="col-lg-3">
                <a href="#" class="btn btn-primary button wow fadeInRight">
                    Read More <i class="fa fa-chevron-right"></i>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="home-about-images">
    <div class="container">
        <div class="flex">
            <div class="col-md-4">
                <a href="#" class="home-about-action wow zoomIn">
                    <div class="image"></div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="#" class="home-about-action second wow zoomIn" data-wow-delay="0.25s">
                    <div class="image"></div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="#" class="home-about-action third wow zoomIn" data-wow-delay="0.5s">
                    <div class="image"></div>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="home-testimonials">
    <div class="bg-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-5"></div>
            <div class="col-lg-7">
                <h2 class="wow fadeInUp">Happy Customers</h2>
                <div class="testimonial-holder wow fadeInRight">
                    <p>Ah! What a place. I could go have a breakfast every single day and not get tired by the views. The staff are very kind and helpful, and the food is AMAZING! A MUST visit place if you're visiting Bunbury!</p>
                    <div class="separator"></div>
                    <div>Saad Ulde</div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="home-subscribe">
    <div class="title-holder">
        <div class="container">
            <h2 class="wow fadeInUp">
                <span>Sign Up</span>
                Subscribe to our email newsletter
            </h2>
        </div>
    </div>

    <div class="subscribe-form">
        <div class="container">
            <div class="col-lg-1"></div>
            <div class="col-lg-11 wow fadeInUp">
                <?php echo do_shortcode('[contact-form-7 id="18" title="Newsletter Subscription"]'); ?>
            </div>
        </div>
    </div>
</div>

<div class="home-social wow fadeInUp">
    <div class="title-holder">
        <div class="container">
            <h2 class="wow fadeInUp">
                <span>Socials</span>
                Follow us on facebook & instagram
            </h2>
        </div>
    </div>
    
    <div class="container">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-10">
                <div class="facebook-holder wow fadeInUp">
                    <div class="title">
                        <i class="fa fa-facebook-square"></i>
                        What's new on facebook
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/call-to-action-1.png" alt="facebook photo">
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="content">
                                <div class="meta-data">
                                    <div class="date"><i class="fa fa-calendar"></i> Posted in 31 Jan 2020</div>
                                    <div class="likes"><i class="fa fa-thumbs-up"></i> 24 likes</div>
                                </div>
                                <p>Check out the view (and the dolphins, they're out there today!) Duis posuere justo sed tellus congue, a convallis metus molestie. Quisque pellen tesque ante feugiat velit ullam corper venenatis congue.</p>
                                <a href="#" class="button wow fadeInRight">Read on facebook</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="instagram-holder wow fadeInUp">
                    <div class="title">
                        <i class="fa fa-instagram"></i>
                        @backbeachcafe
                    </div>
                </div>
            </div>
            <div class="col-lg-1"></div>
        </div>
    </div>
</div>

<?php
get_footer();
?>