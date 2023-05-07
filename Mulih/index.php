<?php get_header(); ?>
<div class="search" style="background-image: url('<?php the_field('home_background')?>');">
    <div class="search_title">
        <p class="search_title-name">
            REAL ESTATE
        </p>
        <h1 class="search_title-main">
            <?php the_field('home_title') ?>
        </h1>
        <p class="search_title-desc">
            <?php the_field('home_subtitle') ?>
        </p>
    </div>
    <div class="search_container">
        <div class="search_container-btns">
            <a class="button_rent">Rent</a>
            <a class="button_buy">Buy</a>
        </div>
        <div class="search_container-block">
            <ul class="search_container-list">
                <li class="search_container-list-item">
                    <p class="item_title">Location</p>
                    <select>
                        <option value="1">House 1</option>
                        <option value="2">House 2</option>
                        <option value="3">House 3</option>
                        <option value="4">House 4</option>
                        <option value="5">House 5</option>
                    </select>
                </li>
                <li class="search_container-list-item">
                    <p class="item_title">Type</p>
                    <select>
                        <option value="1">Home</option>
                        <option value="2">House</option>
                        <option value="3">Flat</option>
                        <option value="4">Apartament</option>
                        <option value="5">Room</option>
                    </select>
                </li>
                <li class="search_container-list-item">
                    <p class="item_title">Price Range</p>
                    <select>
                        <option value="1">200-300$</option>
                        <option value="2">300-400$</option>
                        <option value="3">400-500$</option>
                        <option value="4">500-600$</option>
                        <option value="5">600-700$</option>
                    </select>
                </li>
            </ul>
            <div class="search_button">
                <button>Search</button>
            </div>
        </div>
    </div>
</div>
<div class="advertisement">
    <div class="advertisement_title">
        <p class="advertisement_title-name">
            DISCOVER
        </p>
        <h1 class="advertisement_title-main">
            <?php the_field('property_title') ?>
        </h1>
        <p class="advertisement_title-desc">
            <?php the_field('property_subtitle') ?>
        </p>
    </div>
    <div class="container">
    <?php
    // параметры по умолчанию
        $rent = false;
        $my_posts = get_posts( array(
            'numberposts' => 5,
            'category'    => 0,
            'orderby'     => 'date',
            'order'       => 'DESC',
            'include'     => array(),
            'exclude'     => array(),
            'meta_key'    => '',
            'meta_value'  =>'',
            'post_type'   => 'houses',
            'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
        ) );

        global $post;
        foreach( $my_posts as $post ){
            setup_postdata( $post );
            ?>
                <div class="advertisement_card">
                    <img class="advertisement_card-img" src="<?php the_field('house_image')?>">
                    <h2 class="advertisement_card-title"><?php the_field('house_title')?></h2>
                    <p class="advertisement_card-desc"><?php the_field('house_loc')?></p>
                        <div class="advertisement_card-info">
                            <p class="bedrooms">Bedrooms: <mark><?php the_field('house_bedroom')?></mark></p>
                            <p class="bathrooms">Bathrooms: <mark><?php the_field('house_bathroom')?></mark></p>
                            <p class="square-m">Living Area: <mark><?php the_field('house_area')?>sqft</mark> </p>
                        </div>
                        <div class="advertisement_card-price">
                            <p class="price">$<?php the_field('house_price')?></p>
                        </div>
                    <div class="advertisement_card-btn">
                        <button>Send Inquiry</button>
                    </div>
                </div>
            <?php

            // формат вывода the_title() ...
        }

        wp_reset_postdata(); // сброс
     ?>
    </div>
</div>
<div class="advantages">
    <div class="advantages_title">
        <p class="advantages_title-name">
            OUR ADVANTE
        </p>
        <h1 class="advantages_title-main">
           <?php the_field('service_title') ?>
        </h1>
    </div>
    <div class="advantages_container">
        <div class="advantages_card">
            <img class="advantages_card-img" src="<?php bloginfo('template_directory') ?>/source/heart.png" width="45px" height="45px">
            <h2 class="advantages_card-title">Comfortable</h2>
            <p class="advantages_card-desc">Enjoy lifestyle amenities designed to provide every homeowners modern
                comfort, a stone's throw away from schools, churches, and hospitals.</p>
        </div>
        <div class="advantages_card">
            <img class="advantages_card-img" src="<?php bloginfo('template_directory') ?>/source/heart.png">
            <h2 class="advantages_card-title">Comfortable</h2>
            <p class="advantages_card-desc">Enjoy lifestyle amenities designed to provide every homeowners modern
                comfort, a stone's throw away from schools, churches, and hospitals.</p>
        </div>
        <div class="advantages_card">
            <img class="advantages_card-img" src="<?php bloginfo('template_directory') ?>/source/heart.png">
            <h2 class="advantages_card-title">Comfortable</h2>
            <p class="advantages_card-desc">Enjoy lifestyle amenities designed to provide every homeowners modern
                comfort, a stone's throw away from schools, churches, and hospitals.</p>
        </div>
        <div class="advantages_card">
            <img class="advantages_card-img" src="<?php bloginfo('template_directory') ?>/source/heart.png">
            <h2 class="advantages_card-title">Comfortable</h2>
            <p class="advantages_card-desc">Enjoy lifestyle amenities designed to provide every homeowners modern
                comfort, a stone's throw away from schools, churches, and hospitals.</p>
        </div>
        <div class="advantages_card">
            <img class="advantages_card-img" src="<?php bloginfo('template_directory') ?>/source/heart.png">
            <h2 class="advantages_card-title">Comfortable</h2>
            <p class="advantages_card-desc">Enjoy lifestyle amenities designed to provide every homeowners modern
                comfort, a stone's throw away from schools, churches, and hospitals.</p>
        </div>
        <div class="advantages_card">
            <img class="advantages_card-img" src="<?php bloginfo('template_directory') ?>/source/heart.png">
            <h2 class="advantages_card-title">Comfortable</h2>
            <p class="advantages_card-desc">Enjoy lifestyle amenities designed to provide every homeowners modern
                comfort, a stone's throw away from schools, churches, and hospitals.</p>
        </div>
    </div>
</div>
<div class="reputation">
    <div class="reputation_left">
        <div class="reputation_left-container">
            <img id="aboutUs" src="<?php the_field('aboutus_background') ?>" alt="About Us">
            <div class="reputation_left-card">
                <img src="<?php bloginfo('template_directory') ?>/source/square.svg" alt="grade">
                <p class="grade" id="num3"></p>
                <img src="<?php bloginfo('template_directory') ?>/source/stars.svg" alt="start">
                <p class="trusted_on">Trusted on</p>
                <p class="reviews">500+ Reviews</p>
            </div>
            <div class="reputation_left-stat">
                <div class="sale">
                    <h1 id="num1"></h1>
                    <label>+</label>
                    <p>Property <br> Sale</p>
                </div>
                <div class="rent">
                    <h1 id="num2"></h1>
                    <label>+</label>
                    <p>Apartament <br> Rent</p>
                </div>
            </div>
        </div>
    </div>
    <div class="reputation_right">
        <div class="reputation_title">
            <p class="reputation_title-name">
                ABOUT US
            </p>
            <h1 class="reputation_title-main">
                <?php the_field('aboutus_title') ?>
            </h1>
            <p class="reputation_title-desc">
                <?php the_field('aboutus_subtitle') ?>
            </p>
            <button>
                Learn More
            </button>
        </div>
    </div>
</div>
<div class="feedback">
    <div class="feedback_title">
        <p class="feedback_title-name">
            CUSTOMER TESTIMONIAL
        </p>
        <h1 class="feedback_title-main">
            <?php the_field('feedback_title') ?>
        </h1>
    </div>
    <div class="feedback_container">
        <div class="feedback_card">
            <h3 class="feedback_card-title">It proved to be exactly the <br> kind of home we wanted.</h3>
            <p class="feedback_card-desc">We wish to express our thanks for your hard work in finding us a temporary
                home, which proved to be exactly what we wanted.</p>
            <div class="feedback_card-person">
                <img id="b" class="feedback_card-img" src="<?php bloginfo('template_directory') ?>/source/person.png">
                <div class="person_details">
                    <h3 id="a">Jaydon Aminoff</h3>
                    <p id="c">UX Designer</p>
                </div>
            </div>
        </div>
        <div class="feedback_card">
            <h3 class="feedback_card-title">It proved to be exactly the <br> kind of home we wanted.</h3>
            <p class="feedback_card-desc">We wish to express our thanks for your hard work in finding us a temporary
                home, which proved to be exactly what we wanted.</p>
            <div class="feedback_card-person">
                <img id="b" class="feedback_card-img" src="<?php bloginfo('template_directory') ?>/source/person.png">
                <div class="person_details">
                    <h3 id="a">Jaydon Aminoff</h3>
                    <p id="c">UX Designer</p>
                </div>
            </div>
        </div>
        <div class="feedback_card">
            <h3 class="feedback_card-title">It proved to be exactly the <br> kind of home we wanted.</h3>
            <p class="feedback_card-desc">We wish to express our thanks for your hard work in finding us a temporary
                home, which proved to be exactly what we wanted.</p>
            <div class="feedback_card-person">
                <img id="b" class="feedback_card-img" src="<?php bloginfo('template_directory') ?>/source/person.png">
                <div class="person_details">
                    <h3 id="a">Jaydon Aminoff</h3>
                    <p id="c">UX Designer</p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>