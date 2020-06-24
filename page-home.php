<?php get_header();
?>

<!DOCTYPE html>
<html>

<head>
    <title><?php the_title(); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div class="first-div" style="padding-top:40px; ">
        <div>
            <div>
                <h1 class="logo-text"><?php the_field('logo-text') ?></h1>
                <p class="secondlogo-text"> <?php the_field('secondlogo-text'); ?></p>
            </div>
            <button id="logIn" onclick="window.location.href='http://www.test.seoanalytics.es/login/';">Log In</button>
            <button id="review" onclick="window.location.href='http://www.test.seoanalytics.es/register/';">Registration</button>
        </div>

        <div>

			<a href="https://www.test.seoanalytics.es/event/the-coolest-wedding-photographer-in-the-jungle/"><img class=img src=<?php the_field('firstscreen_image'); ?>> </a>

        </div>
    </div>
    <div class="second-div">
        <div>
            <div>
                <h1 class="logo-text"><?php the_field('title_2') ?></h1>
                <p class="secondlogo-text"><?php the_field('sub_title_2'); ?></p>

                <div >
                    <a href="https://www.test.seoanalytics.es/event/polish-language-for-foreigners/"> <img class="img" src=<?php the_field('image_2'); ?>> </a>

                </div>
            </div>

        </div>
    </div>

    <div class="third-div" id="courses">
        <div width: 75%;>
            <div>
                <h1 class="logo-text"><?php the_field('title_3'); ?></h1>
                <p class="secondlogo-text"> <?php the_field('sub_title_3'); ?> </p>

                <div>
                    <div class="grid-container">

                        <!--  <p> <?php the_field('paid_courses_objects'); ?></p> -->
                        <?php

                        $args = array(
                            'post_type' => 'event',
                            'tax_query' => array([
                                'taxonomy' => 'event_category',
                                'field' => 'slug',
                                'terms' => 'paid-courses'
                            ]),
                            'post_status' => 'publish',
                        );
                        // The Query
                        $the_query = new WP_Query($args);

                        // The Loop
                        if ($the_query->have_posts()) {
                            echo '<ul>';
                            while ($the_query->have_posts()) {
                                $the_query->the_post(); ?>
                                <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
                                <a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail(); ?></a>

                        <?php

                            }
                            echo '</ul>';
                        } else {
                            // no posts found
                        }
                        /* Restore original Post Data */
                        wp_reset_postdata();

                        ?>
                    </div>
                    <button style="align-items: center" onClick="location.href = 'http://www.test.seoanalytics.es/event-category/paid-courses/'">More</button>
                </div>
            </div>
        </div>

    </div>

    <div class="fourt-div" id="workshops">
        <div>
            <div>
                <h1 class="logo-text"><?php the_field('title_4'); ?></h1>
                <p class="secondlogo-text"><?php the_field('subtitle_4'); ?></p>

                <div>
                    <div class="grid-container">
                        <!--  <p> <?php the_field('paid_courses_objects'); ?></p> -->
                        <?php

                        $args = array(

                            'post_type' => 'event',
                            'tax_query' => array([
                                'taxonomy' => 'event_category',
                                'field' => 'slug',
                                'terms' => 'paid-workshops'
                            ]),
                            'post_status' => 'publish',
                        );
                        // The Query
                        $the_query = new WP_Query($args);

                        // The Loop
                        if ($the_query->have_posts()) {
                            echo '<ul>';
                            while ($the_query->have_posts()) {
                                $the_query->the_post(); ?>
                                <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
                                <a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail(); ?></a>

                        <?php

                            }
                            echo '</ul>';
                        } else {
                            // no posts found
                        }
                        /* Restore original Post Data */
                        wp_reset_postdata();

                        ?>

                    </div>
                    <button style="align-items: center" onclick="location.href  = 'http://www.test.seoanalytics.es/event-category/paid-workshops/'">More</button>
                </div>
            </div>
        </div>

    </div>
    <div class="fifth-div" id="free">
        <div>
            <div>
                <h1 class="logo-text"><?php the_field('title_5'); ?></h1>
                <p class="secondlogo-text"><?php the_field('subtitle_5'); ?> </p>

                <div>
                    <div class="grid-container">
                        <!--  <p> <?php the_field('paid_courses_objects'); ?></p> -->
                        <?php

                        $args = array(

                            'post_type' => 'event',
                            'tax_query' => array([
                                'taxonomy' => 'event_category',
                                'field' => 'slug',
                                'terms' => 'free-of-charge-events'
                            ]),
                            'post_status' => 'publish',
                        );
                        // The Query
                        $the_query = new WP_Query($args);

                        // The Loop
                        if ($the_query->have_posts()) {
                            echo '<ul>';
                            while ($the_query->have_posts()) {
                                $the_query->the_post(); ?>
                                <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
                                <a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail(); ?></a>

                        <?php

                            }
                            echo '</ul>';
                        } else {
                            // no posts found
                        }
                        /* Restore original Post Data */
                        wp_reset_postdata();

                        ?>


                    </div>
                    <button style="align-items: center" onClick="location.href = 'http://www.test.seoanalytics.es/event-category/free-of-charge-events/'"> More</button>

                </div>
            </div>
        </div>

    </div>
    <div class="partners" style="width: 100%;">
        <h2 style="text-align: center; ">OUR PARTNERS</h2>
        <div id="slider_partners" class="grid-container" style="padding-left: 10%">
            <div class="grid_item"><img src="http://www.test.seoanalytics.es/wp-content/uploads/2020/06/partner_logo.png" style="width: 50%;"></div>
            <div class="grid_item"><img src="http://www.test.seoanalytics.es/wp-content/uploads/2020/06/partner_logo2.png" style="width: 50%;"></div>
            <div class="grid_item"><img src="http://www.test.seoanalytics.es/wp-content/uploads/2020/06/partner_logo3.png"style="width: 50%;"></div>
            <div class="grid_item"><img src="http://www.test.seoanalytics.es/wp-content/uploads/2020/06/partner_logo4.png"style="width: 50%;"></div>
        </div>
        <div style="width: 75%; margin-left: 15%;  height: 200px;" class="container_1">
            <h2 style="width: 100%;">Be the first who'll know new event!</h2>
            <p style="width: 50%; float:left">Sign up to our news letter and stay informed</p>
			<a href="https://www.test.seoanalytics.es/newsletter/"><button style="float:right"> Sign up for news letter</button></a>
        </div>
    </div>
    <script>
        /*document.getElementById('logIn').addEventListener('click', function() {
            location.href = "";
        }, false)*/

        document.getElementById('first').addEventListener('click', function() {
            location.href = "http://www.test.seoanalytics.es/newsletter/";
        }, false)
    </script> 
    <?php get_footer() ?>
</body>

</html>