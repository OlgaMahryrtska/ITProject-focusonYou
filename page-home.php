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
                <p class="secondlogo-text"> <?php the_field('secondlogo-text') ?></p>
            </div>
            <button id="logIn">Log In</button>
            <button id="review">Registration</button>
        </div>

        <div id="slider">
        <img src = <?php the_field('firstscreen_image') ?> >
        
        </div>
    </div>
    <div class="second-div">
        <div>
            <div>
                <h1 class="logo-text">Our the most popular events</h1>
                <p class="secondlogo-text"> Check out what is popular among our users</p>

                <div id="slider">
                <p id="description">some img</p>

                </div>
            </div>

        </div>
    </div>

    <div class="third-div" id="courses">
        <div width: 75%;>
            <div>
                <h1 class="logo-text">Paid courses</h1>
                <p class="secondlogo-text"> Courses created for improving or learning universal skills from scratch. 
                    <br>Such as cycling or a foreign language. They are designed for the long-term study(few weeks or months). 
                    <br> We are chosing the best courses from whole Poland </p>

                <div>
                    <div class="grid-container">
                        <div class="grid-item" id="first"><img src="polish_course.png" style="width: 50%">
                            <p>Polish Language For Foreigners</p>
                        </div>
                        <div class="grid-item"><img src="businessMan.png" style="width: 50%">
                            <p>YoungBusiness. Become a businessman in every age.</p>
                        </div>
                        <div class="grid-item">
                            <p>Pixel Precision</p>
                        </div>
                        <div class="grid-item">
                            <p>Vector Editing</p>
                        </div>
                        <div class="grid-item">
                            <p>Export Presels</p>
                        </div>
                        <div class="grid-item">
                            <p>Code Export</p>
                        </div>
                        <div class="grid-item">
                            <p>Grid and Guides</p>
                        </div>
                        <div class="grid-item">
                            <p>Prototyping</p>
                        </div>

                    </div>
                    <button style="align-items: center">More</button>
                </div>
            </div>
        </div>

    </div>

    <div class="fourt-div" id="workshops">
        <div >
            <div >
                <h1 class="logo-text">Paid workshops</h1>
                <p class="secondlogo-text">Workshop it's a form of learning that places an emphasis on practice. 
                    <br>Classes consist of exercises and active participation in them. 
                    <br>The workshop take into account the confrontation of induvidual people, their skills and ideas. 
                    <br>The success of the education process is supervised by a trainer who has a specific scenario for conducting classess and pretermined goals.</p>

                <div>
                    <div class="grid-container">
                        <div class="grid-item"><img src="wedding.png" style="width: 50%">
                            <p>The coolest wedding photographer in the jungle</p>
                        </div>
                        <div class="grid-item"><img src="makeup.png" style="width: 50%">
                            <p>Daily makeup for everyone</p>
                        </div>
                        <div class="grid-item">
                            <p>Pixel Precision</p>
                        </div>
                        <div class="grid-item">
                            <p>Vector Editing</p>
                        </div>
                        <div class="grid-item">
                            <p>Export Presels</p>
                        </div>
                        <div class="grid-item">
                            <p>Code Export</p>
                        </div>
                        <div class="grid-item">
                            <p>Grid and Guides</p>
                        </div>
                        <div class="grid-item">
                            <p>Prototyping</p>
                        </div>

                    </div>
                    <button style="align-items: center">More</button>
                </div>
            </div>
        </div>

    </div>
    <div class="fifth-div" id="free">
        <div>
            <div>
                <h1 class="logo-text">Free-of-charge events</h1>
                <p class="secondlogo-text">Useful information without spending even a cent. Sign up for an event for free and get extremely valuable knowledge. </p>

                <div>
                    <div class="grid-container">
                        <div class="grid-item"><img src="speed_reading.png" style="width: 50%">
                            <p>All Speed Reading Courses Explained In 1 hour</p>
                        </div>
                        <div class="grid-item">
                            <p>Non-destructive Editing</p>
                        </div>
                        <div class="grid-item">
                            <p>Pixel Precision</p>
                        </div>
                        <div class="grid-item">
                            <p>Vector Editing</p>
                        </div>
                        <div class="grid-item">
                            <p>Export Presels</p>
                        </div>
                        <div class="grid-item">
                            <p>Code Export</p>
                        </div>
                        <div class="grid-item">
                            <p>Grid and Guides</p>
                        </div>
                        <div class="grid-item">
                            <p>Prototyping</p>
                        </div>

                    </div>
                    <button style="align-items: center">More</button>
                </div>
            </div>
        </div>

    </div>
    <div class="partners" style="width: 100%;">
        <h2 style="text-align: center; ">OUR PARTNERS</h2>
        <div id ="slider_partners" class="grid-container" style="padding-left: 10%">
            <div class="grid_item">some logo</div>
            <div class="grid_item">some logo</div>
            <div class="grid_item">some logo</div>
            <div class="grid_item">some logo</div>
        </div>
        <div style="width: 75%; margin-left: 15%;  height: 200px;" class="container_1">
            <h2 style="width: 100%;">Be the first who'll know new event!</h2>
            <p style="width: 50%; float:left">Sign up to our news letter and stay informed</p> 
            <button style="float:right"> Sign up for news letter</button>
        </div>
    </div>
    <!-- <script>
        document.getElementById('logIn').addEventListener('click', function() {
            location.href = "";
        }, false)

        document.getElementById('first').addEventListener('click', function() {
            location.href = "";
        }, false)
    </script> -->
    <?php get_footer() ?>
</body>

</html>
