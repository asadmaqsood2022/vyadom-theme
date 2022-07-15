<?php 
/*
    Template Name: Home Page
*/
get_header();
?>

    <!-- banner section starts here -->
    <?php $image = get_field('background_image'); ?>
    <div class="banner" style="background-image: url(<?php echo esc_url($image['url']); ?>);">
        <div class="container">
            <div class="banner-inner">
                <h1><?php the_field('banner_title'); ?></h1>
                <p><?php the_field('banner_sub_title'); ?></p>
                <a href="<?php the_field('banner_button_link'); ?>"><?php the_field('banner_button_text'); ?></a>
            </div>
        </div>
    </div>
    <!-- banner section ends here -->

    <!-- content section starts here -->
    <content>
        <div class="vyadom-aviation">
            <div class="container">
                <div class="vyadom-aviation-inner">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="aviation-info">
                                <h3 class="aviation-heading"><?php the_field('welcome_title'); ?></h3>
                                <?php the_field('welcome_content'); ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="aviation-img">
                                <?php $image = get_field('welcome_image'); ?>
                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="we-offer">
            <div class="container">
                <h3 class="aviation-heading">WELCOME TO VYADOM-AVIATION</h3>
                <div class="offer-inner">
                    <div class="row">
                        <?php
                            $args = array(
                                'posts_per_page' => 4, /* how many post you need to display */
                                'offset' => 0,
                                'orderby' => 'post_date',
                                'order' => 'DESC',
                                'post_type' => 'post', /* your post type name */
                                'post_status' => 'publish'
                            );
                            $query = new WP_Query($args);
                            if ($query->have_posts()) :
                                while ($query->have_posts()) : $query->the_post();
                                    ?>
                                <div class="col-md-6 integration">
                                    <div class="supply-managemnet">
                                        <div class="management-img">
                                        <?php echo get_the_post_thumbnail(get_the_ID()); ?>
                                        </div>
                                        <div class="management-info">
                                            <h4><?php the_title(); ?></h4>
                                            <?php the_content(); ?>
                                            <a href="<?php the_permalink(); ?>">READ MORE<img src="<?php echo get_template_directory_uri() ?>/images/arrow-img.png" alt="arrow image"></a>
                                        </div>
                                    </div>
                                </div>

                            <?php
                                    endwhile;
                                endif;
                            ?>
                        <!-- <div class="col-md-6 integration">
                            <div class="supply-managemnet">
                                <div class="management-img">
                                    <img src="images/offer-image2.png" alt="offer image">
                                </div>
                                <div class="management-info">
                                    <h4>BACKWARD AND FORWARD INTEGRATION</h4>
                                    <p>We can build a strong rock solid suppy chain management system for your company. We have specialities in all of these carriers. Civil - Boeing, Airbus, Cessna, ATR, Bombardier, Fokker Military – Antonov, Lockhead Martin, Sukhoi, Dassalt Choppers – Euro Copter, Boeing, Westland.</p>
                                    <a href="">READ MORE<img src="images/arrow-img.png" alt="arrow image"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 integration">
                            <div class="supply-managemnet flex-row-reverse">
                                <div class="management-img">
                                    <img src="images/offer-image3.png" alt="offer image">
                                </div>
                                <div class="management-info">
                                    <h4>REPAIR OVERHAUL</h4>
                                    <p>Our Repair and Maintenance team resolves to offer high-end repair services authorized by OEM stations. Our services range from repair and overhaul of aircraft engines, avionics, aircraft components and parts. We make sure that the work we do is cost-productive and time-efficient, thus reducing the downtime of the aircrafts.</p>
                                    <a href="">READ MORE<img src="images/arrow-img.png" alt="arrow image"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 integration">
                            <div class="supply-managemnet flex-row-reverse">
                                <div class="management-img">
                                    <img src="images/offer-image4.png" alt="offer image">
                                </div>
                                <div class="management-info">
                                    <h4>CONSULTING</h4>
                                    <p>Being one of the leading service providers in the aviation industry, we tend to share our experience with our customers as well as suppliers. Our highly-professional staff has the ability to make a detailed report on the possibilities of your product so as to enhance your business horizons by taking it to an unprecedented level.</p>
                                    <a href="">READ MORE<img src="images/arrow-img.png" alt="arrow image"></a>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="location-wrapper">
            <div class="container">
                <div class="location-inner">
                    <div class="location">
                        <h3 class="aviation-heading">OUR LOCATION</h3>
                        <img src="images/map.png" alt="map image">
                    </div>
                    <div class="get-quote">
                        <h3 class="aviation-heading">GET A QUOTE</h3>
                        <form class="contact-form">
                            <div class="form-group">
                              <input type="text" class="form-control" placeholder="Your Name">
                            </div>
                            <div class="form-group">
                              <input type="text" class="form-control" placeholder="Your Email">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Your Subjects">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Your Phone Number">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" rows="6" placeholder="Description Services Needed"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">SUBMIT</button>
                          </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="our-products">
            <div class="container">
                <h3 class="aviation-heading">OUR PRODUCTS</h3>
                <div class="row">
                    <div class="col-md-4 avionics">
                        <div class="product-inner">
                            <img src="images/product-img-1.png" alt="product image">
                            <h5>PARTS & COMPONENTS</h5>
                            <p>Can't find a spare part anywhere? Chances are we've got it! Thanks to our rock solid supply-chain management system we've got all bases covered. We are always ensuring we've got decent levels of stocks of all major manufacturers as well as the smaller players</p>
                            <a href="javascript:void(0);">READ MORE<img src="images/arrow-img.png" alt="arrow image"></a>
                        </div>
                    </div>
                    <div class="col-md-4 avionics">
                        <div class="product-inner">
                            <img src="images/product-img-2.png" alt="product image">
                            <h5>AVIONICS</h5>
                            <p>We supply a wide range of the latest avionics components. We also understand that your avionics requirements are exactly to your fleet of aircraft, and that is where our ability to design custom solutions comes in. Our avionics components capabilities include</p>
                            <a href="javascript:void(0);">READ MORE<img src="images/arrow-img.png" alt="arrow image"></a>
                        </div>
                    </div>
                    <div class="col-md-4 avionics">
                        <div class="product-inner">
                            <img src="images/product-image-3.png" alt="product image">
                            <h5>GROUND SUPPORT EQUIPMENT</h5>
                            <p>We supply a wide range of Ground Support Equipment manufactured by the industry’s leading OEMs. These include:- Ground Support and Handling Equipment, Measuring and Testing Equipment Wheels and Brakes, Conveyor</p>
                            <a href="javascript:void(0);">READ MORE<img src="images/arrow-img.png" alt="arrow image"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </content>
    <!-- content section ends here -->

    <?php
    get_footer();
    ?>