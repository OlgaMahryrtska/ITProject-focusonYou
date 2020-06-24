<?php

/**
 * The template for displaying all single posts
 
 *
 * @package WordPress
 * @subpackage FocusonYou
 * @since 1.0
 * @version 1.0
 

 */
get_header();




$EventTitle = get_post_meta(get_the_ID(), '_eventTitle', true);
$EventDate = get_post_meta(get_the_ID(), '_eventDate', true);
$EventTime = get_post_meta(get_the_ID(), '_eventTime', true);
$EventPlace = get_post_meta(get_the_ID(), '_eventPlace', true);
$EventDescription = get_post_meta(get_the_ID(), '_eventDescription', true);
$EventPrice = get_post_meta(get_the_ID(), '_eventPrice', true);
$EventOrganizator = get_post_meta(get_the_ID(), '_eventOrganizator', true);
$EventDuration = get_post_meta(get_the_ID(), '_eventDuration', true);
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>

	<div>
		<h1 class="course-logo-text"><?php echo $EventTitle; ?></h1>
	</div>
    <div class="course_page" style="height: 700px;">
        <section class="container_2">
            <div class="one" style="width: 50%;" id="left">
                <img src="<?php the_field('upload_image'); ?>" style="width: 400px;">
            </div>
            <div class="two" style="width: 50%;" id="right">
                
                <div class="container_3">
                    <div style="float: left;">
                        <p>Date of event : <?php echo $EventDate; ?></p>
                        <p>Time : <?php echo $EventTime; ?></p>
                        <p>Place :<?php echo $EventPlace; ?></p>
                        <p>Price :<?php echo $EventPrice; ?></p>
                        <p>Organizator : <?php echo $EventOrganizator; ?></p>
                        <p>Adress : <?php echo  $EventPlace; ?></p>
                        <p>Duration :<?php echo $EventDuration; ?></p>
                    </div>
                    <div style="float: right;">
                        <p id="Data"></p>
                        <p id="Time"></p>
                        <p id="Place"></p>
                        <p id="Price"></p>
                        <p id="Organizator"></p>
                        <p id="Adres"></p>
                        <p id="Duration"></p>
                    </div>
                </div>
                <div class=read_more>
                    <button id="SignUp" onclick="window.location.href='http://www.test.seoanalytics.es/registration-2/?pr_preview=1&form_id=1&prFormId=1&form_name=Sign_up_to_the_course!'">Sign up!</button>
                    <p><?php echo $EventDescription; ?></p>
                </div>
            </div>
        </section>
    </div>

    <script>
        document.getElementById("Data").innerHTML = "";
        document.getElementById("Time").innerHTML = "";
        document.getElementById("Place").innerHTML = "";
        document.getElementById("Price").innerHTML = "";
        document.getElementById("Organizator").innerHTML = "";
        document.getElementById("Adres").innerHTML = "";
        document.getElementById("Duration").innerHTML = "";
    </script>
</body>
<?php get_footer(); ?>

</html>