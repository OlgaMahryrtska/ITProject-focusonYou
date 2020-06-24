<?php
$post = $wp_query->post;
if (in_category('events')) { //ID категории
    include(TEMPLATEPATH . '/single-event.php');
} else {
    include(TEMPLATEPATH . '/single-event.php');
}
