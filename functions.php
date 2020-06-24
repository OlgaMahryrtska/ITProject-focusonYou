<?php
add_filter('show_admin_bar', '__return_true');

function wpfocusonYou_setup()
{
    load_theme_textdomain('wpfocus');

    add_theme_support('title-tag');

    add_theme_support('custom-logo', array(
        'height' => 100,
        'width' => 120,
        'flex-height' => true
    ));

    add_theme_support('post-thumbnails');
    set_post_thumbnail_size(105, 105, true);


    add_theme_support(
        'html5',
        array(
            'search_form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'aside',
            'chat',
            'image'
        )
    );
    register_nav_menu('primary', 'Primary menu');
}

add_action('after_setup_theme', 'wpfocusonYou_setup');

function wpfocusonYou_post_formats_setup()
{
    add_theme_support('post_formats', array('aside', 'image', 'gallery', 'video'));
}


add_action('after_setup_theme', 'wpfocusonYou_post_formats_setup');

function wpfocusonYou_scripts()
{
    wp_enqueue_style('style.css', get_stylesheet_uri());
    wp_enqueue_script(
        'script_name',
        get_template_directory_uri() . 'js/script.js',
        array(),
        '1.0.0',
        true
    );
}
add_action('wp_enqueue_scripts', 'wpfocusonYou_scripts');

function wptutsplus_widgets_init()
{
    // First footer widget area, located in the footer. Empty by default.
    register_sidebar(
        array(
            'name' => __('First Footer Widget Area', 'compass'),
            'id' => 'first-footer-widget-area',
            'description' => __('The first footer widget area', 'compass'),
            'before_widget' => '<div class="widget-container %2$s" id="%1$s">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>'
        )
    );

    // Second Footer Widget Area, located in the footer. Empty by default.
    register_sidebar(
        array(
            'name' => 'Second Footer Widget Area',
            'id' => 'second-footer-widget-area',
            'description' => 'The second footer widget area',
            'before_widget' => '<div class="widget-container %2$s" id="%1$s">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        )
    );

    // Third Footer Widget Area, located in the footer. Empty by default.
    register_sidebar(
        array(
            'name' => 'Third Footer Widget Area',
            'id' => 'third-footer-widget-area',
            'description' => 'The third footer widget area',
            'before_widget' => '<div class="widget-container %2$s" id="%1$s">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        )
    );

    // Fourth Footer Widget Area, located in the footer. Empty by default.
    register_sidebar(
        array(
            'name' => 'Fourth Footer Widget Area',
            'id' => 'fourth-footer-widget-area',
            'description' => 'The fourth footer widget area',
            'before_widget' => '<div class="widget-container %2$s" id="%1$s">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        )
    );

    // Fifth Footer Widget Area, located in the footer. Empty by default.
    register_sidebar(
        array(
            'name' => 'Fifth Footer Widget Area',
            'id' => 'fifth-footer-widget-area',
            'description' => 'The fifth footer widget area',
            'before_widget' => '<div class="widget-container %2$s" id="%1$s">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        )
    );
}

add_action('after_setup_theme', 'wptutsplus_widgets_init');


/* adding additional paragraph in dashboard menu */
function add_posttype()
{

    register_post_type(
        'event',
        // CPT Options
        array(
            'labels' => array(
                'name' => __('Events'),
                'singular_name' => __('Event')
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'event'),
            'supports' => array('title', 'thumbnail')
        )
    );

    register_post_type(
        'registration',
        array(
            'labels' => array(
                'name' => __('Registrations'),
                'singular_name' => __('Registration')
            ),
            'public' => true,
            'rewrite' => array('slug' => 'registration')
        )
    );
}
add_action('init', 'add_posttype');

/** taxonomy */

function AddCategoryTaxonomy()
{
    $labels = [
        'name' => _x('Categories', 'taxonomy general name'),
        'singular_name' => _x('Category', 'taxonomy singular name'),
        'search_items' => __('Search category'),
        'all_items' => __('all categories'),
        'edit_item' => __('Edit category'),
        'update_item' => __('Update category'),
        'add_new_item' => __('Add New category'),
        'new_item_name' => __('New Category Name'),
        'menu_name' => __('Categories'),
    ];
    $args = [
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => ['slug' => 'event-category'],

    ];
    register_taxonomy('event_category', ['event'], $args);
}

add_action('init', 'AddCategoryTaxonomy');
add_action('create_category', 'save_taxonomy_category_meta', 10, 2);

/*metaboxes to events*/

function event_add_metabox()
{
    add_meta_box(
        'event_metabox',
        'Event metabox',
        'event_display_metabox',
        'Event',
        'advanced',
        'default'
    );
}

add_action('admin_menu', 'event_add_metabox');


function event_display_metabox($post)
{
    wp_nonce_field(basename(__FILE__), 'event_metabox_nonce');
    $EventTitle = get_post_meta($post->ID, '_eventTitle', true);
    $EventDate = get_post_meta($post->ID, '_eventDate', true);
    $EventTime = get_post_meta($post->ID, '_eventTime', true);
    $EventPlace = get_post_meta($post->ID, '_eventPlace', true);
    $EventDescription = get_post_meta($post->ID, '_eventDescription', true);
    $EventPrice = get_post_meta($post->ID, '_eventPrice', true);
    $EventOrganizator = get_post_meta($post->ID, '_eventOrganizator', true);
    $EventDuration  = get_post_meta($post->ID, '_eventDuration', true);
?>
    <div class="inside">
        <h3><?php _e('Title of the event', 'event_example_plugin'); ?></h3>
        <p>
            <input type="text" name="EventTitle" , value="<?php echo $EventTitle; ?>" />
        </p>
        <h3> <?php _e('Date of event', 'event_example_plugin'); ?></h3>
        <p>
            <input type="datetime" name="EventDate" , value="<?php echo $EventDate; ?>" />
        </p>

        <h3> <?php _e('The time of event', 'event_example_plugin'); ?> </h3>
        <p>
            <input type="time" , name='EventTime' , value="<?php echo $EventTime; ?>" />
        </p>
        <h3> <?php _e('Place of event', 'event_example_plugin'); ?></h3>
        <p>
            <input type="text" , name='EventPlace' , value="<?php echo $EventPlace; ?>" />
        </p>
        <h3> <?php _e('Description of event', 'event_example_plugin'); ?></h3>
        <p>
            <input type="text" , name='EventDescription' , value="<?php echo $EventDescription; ?>" />
        </p>
        <h3> <?php _e('Price of the ticket', 'event_example_plugin'); ?></h3>
        <p>
            <input type="number" , name='EventPrice' , value="<?php echo $EventPrice; ?>" />
        </p>
        <h3> <?php _e('Organizator of event', 'event_example_plugin'); ?></h3>
        <p>
            <input type="text" , name="EventOrganizator" , value="<?php echo $EventOrganizator; ?>" />
        </p>
        <h3> <?php _e('The duration of event', 'event_example_plugin'); ?></h3>
        <p>
            <input type="text" , name="EventDuration" , value="<?php echo $EventDuration; ?>" />
        </p>
    </div>
<?php
}
function event_save_meta_box_data($post_id)
{
    if (!isset($_POST['event_metabox_nonce']) || !wp_verify_nonce($_POST['event_metabox_nonce'], basename(__FILE__))) {
        return;
    }
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    if (isset($_POST['EventTitle'])) {
        update_post_meta($post_id, '_eventTitle', sanitize_text_field($_POST['EventTitle']));
    }
    if (isset($_POST['EventDate'])) {
        update_post_meta($post_id, '_eventDate', sanitize_text_field($_POST['EventDate']));
    }
    if (isset($_POST['EventTime'])) {
        update_post_meta($post_id, '_eventTime', sanitize_text_field($_POST['EventTime']));
    }
    if (isset($_POST['EventPlace'])) {
        update_post_meta($post_id, '_eventPlace', sanitize_text_field($_POST['EventPlace']));
    }
    if (isset($_POST['EventDescription'])) {
        update_post_meta($post_id, '_eventDescription', sanitize_text_field($_POST['EventDescription']));
    }
    if (isset($_POST['EventPrice'])) {
        update_post_meta($post_id, '_eventPrice', sanitize_text_field($_POST['EventPrice']));
    }
    if (isset($_POST['EventOrganizator'])) {
        update_post_meta($post_id, '_eventOrganizator', sanitize_text_field($_POST['EventOrganizator']));
    }
    if (isset($_POST['EventDuration'])) {
        update_post_meta($post_id, '_eventDuration', sanitize_text_field($_POST['EventDuration']));
    }
}
add_action('save_post_event', 'event_save_meta_box_data');

$query = new WP_Query('category_name=free-workshop');
