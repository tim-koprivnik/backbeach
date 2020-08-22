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

<div class="home-banner">
    <div class="container">
        <h1>A Dining Experience</h1>
    </div>
</div>

<div class="home-call-to-action">
    <div class="container">
        <div class="flex">
            <div class="col-md-4">
                <a href="#" class="call-to-action">
                    <div class="image"></div>
                    <div class="title">Dining Menu</div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="#" class="call-to-action second">
                    <div class="image"></div>
                    <div class="title">Lunch Menu</div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="#" class="call-to-action third">
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
            <h2>
                <span>Welcome to</span>
                The Backbeach Eating House
            </h2>
        </div>
    </div>
    
    <div class="container">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-8">
                <p class="tagline">
                There's only one place like the Backbeach Cafe & Restaurant, located on Bunbury's Backbeach with uninterupted views of crisp white sand and the Indian Ocean. The perfect place to eat, relax, and enjoy.
                </p>
                <p>
                We are proud to support local business and local producers by sourcing as much as possible locally, including fish from Augusta, beef and chicken from Western Australia (DBC), coffee from Yallingup and wines from Ferguson Valley, Margaret River and throughout the South West.
                </p>
            </div>
            <div class="col-lg-3">
                <a href="#" class="btn btn-primary button">
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
                <a href="#" class="news-img">
                    <div class="image"></div>
                    <div class="category">What's On</div>
                    <div class="date">10.06.2020</div>
                </a>
            </div>
            <div class="col-sm-1"></div>
            <div class="col-sm-6 col-xs-12">
                <h2>Mother's Day</h2>
                <p>
                    Join us to celebrate your Mother's Day. Breakfast and Lunch are pretty full but we're taking Dinner bookings so you ...
                </p>
                <a href="#" class="btn btn-primary button">
                    Read More <i class="fa fa-chevron-right"></i>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="home-about">
    <div class="bg-image">
        <!-- <div class="top-overlay"> -->
            <img src="<?php echo get_template_directory_uri(); ?>/img/Group.png" alt="Cutout Top" width="100%">
        <!-- </div> -->
        <!-- <div class="bottom-overlay"> -->
            <img src="<?php echo get_template_directory_uri(); ?>/img/Vector.png" alt="Cutout Bottom" width="100%">
        <!-- </div> -->
    </div>
    <div class="title-holder">
        <div class="container">
            <h2>
                <span>Served fresh</span>
                from the paddock to the plate
            </h2>
        </div>
    </div>
    
    <div class="container">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-8">
                <p class="tagline">
                Nulla hendrerit malesuada accumsan. Cras hendrerit nisl in lectus commodo, a molestie ante feguiat. Suspendisse nec convallis mauris.
                </p>
                <p>
                Donec elit lorior, lobortis sit amel lobortis el, feugiat sed quam. Aenean efficitur risus nec magna fin bus, vitae sodales ex aliquam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                </p>
            </div>
            <div class="col-lg-3">
                <a href="#" class="btn btn-primary button">
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
                <a href="#" class="home-about-action">
                    <div class="image"></div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="#" class="home-about-action second">
                    <div class="image"></div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="#" class="home-about-action third">
                    <div class="image"></div>
                </a>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
?>