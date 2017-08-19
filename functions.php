<?php
add_theme_support('title-tag');


$args = array(
    'default-image' => get_template_directory_uri() . '/img/parallax/parallax-back13.jpg',
);
add_theme_support('custom-header', $args);



add_theme_support('custom-background');
add_theme_support('post-thumbnails');


register_nav_menus(array(
    'header-menu' => 'Header Menu',
    'footer-menu' => 'Footer Menu',
));

function default_menu() {
    echo '<ul class="nav navbar-nav navbar-right">';
    if (is_user_logged_in()) {
        echo '<li><a href="' . home_url() . '/wp-admin/nav-menus.php">Create a menu</a></li>';
    } else {
        echo '<li><a href="' . home_url() . '">Home</a></li>';
    }
    echo '</ul>';
}

/* Inlcule navwalker file */
include 'navwalker.php';

function mycustomize($customize) {



    $customize->add_section('heading-section', array(
        'title' => 'Header Option',
        'priority' => '10',
    ));
    $customize->add_setting('linkeding', array(
        'default' => '#',
        'transport' => 'refresh',
    ));
    $customize->add_control('linkeding', arraY(
        'section' => 'heading-section',
        'label' => 'Linkeding Profile',
        'type' => 'text',
    ));
    $customize->add_setting('googleplus', array(
        'default' => '#',
        'transport' => 'refresh',
    ));
    $customize->add_control('googleplus', arraY(
        'section' => 'heading-section',
        'label' => 'Google+ Profile',
        'type' => 'text',
    ));



    $customize->add_setting('logo_upload', array(
        'default' => get_template_directory_uri() . '/img/theme/logo.png',
        'transport' => 'refresh',
    ));
    $customize->add_control(
            new WP_Customize_Image_Control($customize, 'logo_upload', array(
        'section' => 'heading-section',
        'label' => 'Logo alternet text',
        'settings' => 'logo_upload',
            ))
    );


    $customize->add_section('footer-section', array(
        'title' => 'Footer Option',
        'priority' => '100',
    ));
    $customize->add_setting('copyright', array(
        'default' => '#',
        'transport' => 'refresh',
    ));
    $customize->add_control('copyright', arraY(
        'section' => 'footer-section',
        'label' => 'Copyright Text',
        'type' => 'text',
    ));
}

add_action('customize_register', 'mycustomize');



/* Include CMB2 meta box */
include 'metabox/init.php';
include 'metabox/functions.php';




/* Register style & script */

function boostrap_started_script() {
    wp_register_style('ModuleStyleSheets', get_template_directory_uri() . '/StyleSheets/ModuleStyleSheets.css');
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css');
    wp_register_style('awesome', 'http://netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css');
    wp_register_style('avendor-font-styles', get_template_directory_uri() . '/css/avendor-font-styles.css');
    wp_register_style('settings', get_template_directory_uri() . '/css/revolutionslider/settings.css');
    wp_register_style('animate', get_template_directory_uri() . '/css/themecss/animate.css');
    wp_register_style('lightbox', get_template_directory_uri() . '/css/themecss/lightbox.css');
    wp_register_style('carousel', get_template_directory_uri() . '/css/owl-carousel/owl.carousel.css');
    wp_register_style('transitions', get_template_directory_uri() . '/css/owl-carousel/owl.transitions.css');
    wp_register_style('avendor', get_template_directory_uri() . '/css/avendor.css');
    wp_register_style('color-red', get_template_directory_uri() . '/css/colors/color-red.css');
    wp_register_style('googleapis1', 'http://fonts.googleapis.com/css?family=Raleway:400,200,300,100,500,600,700,800,900');
    wp_register_style('googleapis2', 'http://fonts.googleapis.com/css?family=Playball');
    wp_register_style('Box-vs', get_template_directory_uri() . '/CatalystStyles/Box-vs=b2324.r509702-phase1.css');



    wp_register_script('Java_Box', get_template_directory_uri() . '/CatalystScripts/Java_Box-vs=b2324.r509702-phase1.js');
    wp_register_script('jquery', get_template_directory_uri() . '/js/jquery-1.11.1.min.js');
    wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js');
    wp_register_script('jquery.countdown', get_template_directory_uri() . '/js/themejs/jquery.countdown.js');
    wp_register_script('jquery.queryloader2', get_template_directory_uri() . '/js/themejs/jquery.queryloader2.min.js');
    wp_register_script('SmoothScroll', get_template_directory_uri() . '/js/themejs/SmoothScroll.js');
    wp_register_script('jquery.stickOnScroll', get_template_directory_uri() . '/js/themejs/jquery.stickOnScroll.js');
    wp_register_script('jquery.easing', 'http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js');
    wp_register_script('jquery.themepunch', get_template_directory_uri() . '/js/revolutionslider/jquery.themepunch.plugins.min.js');
    wp_register_script('themepunch.revolution', get_template_directory_uri() . '/js/revolutionslider/jquery.themepunch.revolution.min.js');
    wp_register_script('livicons', get_template_directory_uri() . '/js/livicons/livicons-1.3.min.js');
    wp_register_script('raphael', get_template_directory_uri() . '/js/livicons/raphael-min.js');
    wp_register_script('jquery.isotope', get_template_directory_uri() . '/js/themejs/jquery.isotope.min.js');
    wp_register_script('jquery.colio', get_template_directory_uri() . '/js/themejs/jquery.colio.min.js');
    wp_register_script('stellar', get_template_directory_uri() . '/js/themejs/jquery.stellar.min.js');
    wp_register_script('owl.carousel', get_template_directory_uri() . '/js/owl-carousel/owl.carousel.js');
    wp_register_script('jquery.countTo', get_template_directory_uri() . '/js/themejs/jquery.countTo.js');
    wp_register_script('magnific', get_template_directory_uri() . '/js/themejs/jquery.magnific-popup.min.js');
    wp_register_script('Tooltip', get_template_directory_uri() . '/js/themejs/jQuery.Opie.Tooltip.min.js');
    wp_register_script('waypoints', get_template_directory_uri() . '/js/themejs/jquery.waypoints.min.js');
    wp_register_script('easypiechart', get_template_directory_uri() . '/js/themejs/jquery.easypiechart.min.js');
    wp_register_script('jquery.tweet', 'http://www.targetpath.com/twitter/jquery.tweet.js');
    wp_register_script('application', get_template_directory_uri() . '/js/themejs/application.js');





    wp_enqueue_style('ModuleStyleSheets');
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('awesome');
    wp_enqueue_style('avendor-font-styles');
    wp_enqueue_style('settings');
    wp_enqueue_style('animate');
    wp_enqueue_style('lightbox');
    wp_enqueue_style('carousel');
    wp_enqueue_style('transitions');
    wp_enqueue_style('avendor');
    wp_enqueue_style('color-red');
    wp_enqueue_style('googleapis1');
    wp_enqueue_style('googleapis2');
    wp_enqueue_style('Box-vs');


    wp_enqueue_script('Java_Box');
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap');
    wp_enqueue_script('jquery.countdown');
    wp_enqueue_script('jquery.queryloader2');
    wp_enqueue_script('SmoothScroll');
    wp_enqueue_script('jquery.stickOnScroll');
    wp_enqueue_script('jquery.easing');
    wp_enqueue_script('jquery.themepunch');
    wp_enqueue_script('themepunch.revolution');
    wp_enqueue_script('livicons');
    wp_enqueue_script('raphael');
    wp_enqueue_script('jquery.isotope');
    wp_enqueue_script('jquery.colio');
    wp_enqueue_script('stellar');
    wp_enqueue_script('owl.carousel');
    wp_enqueue_script('jquery.countTo');
    wp_enqueue_script('magnific');
    wp_enqueue_script('Tooltip');
    wp_enqueue_script('waypoints');
    wp_enqueue_script('easypiechart');
    wp_enqueue_script('jquery.tweet');
    wp_enqueue_script('application');
}

add_action('wp_enqueue_scripts', 'boostrap_started_script');

function create_post_type() {
    register_post_type('news', array(
        'labels' => array(
            'name' => 'News & Views',
        ),
        'public' => true,
        'supports' => array('thumbnail', 'title', 'editor')
            )
    );
    register_post_type('our_clients', array(
        'labels' => array(
            'name' => 'Our Client',
        ),
        'public' => true,
        'supports' => array('thumbnail', 'title',)
            )
    );
    
    
    
    
    
    register_post_type('service', array(
        'labels' => array(
            'name' => 'Service',
        ),
        'public' => true,
        'supports' => array('thumbnail', 'title', 'editor')
            )
    );
    
    register_post_type('testimonial', array(
        'labels' => array(
            'name' => 'Testimonials',
        ),
        'public' => true,
        'supports' => array('thumbnail', 'title', 'editor')
            )
    );
        register_post_type('team', array(
        'labels' => array(
            'name' => 'Team Members',
        ),
        'public' => true,
        'supports' => array('thumbnail', 'title', 'editor')
            )
    );
        
        register_post_type('partner', array(
      'labels' => array(
          'name' => 'Our Partner',
      ),
      'public' => true,
      'supports' => array('thumbnail', 'title')
          )
    );
        
        register_taxonomy( 'team_member', 'team', array(
    'labels'=>array(
        'name'=>'Member Designation',
        'add_new_item'=>'Add New Designation',
    ),
    'public'=>true,
    'hierarchical'=>true,
) );
}

add_action('init', 'create_post_type');




// custom image size 

add_image_size( 'news', 258, 198, true );
add_image_size( 'client-logo', 200, 101, true );
add_image_size( 'service-icon', 73, 73, true );
add_image_size( 'service-thumb', 555, 309, true );



// inlcuding shortcode

include 'inc/shortcode.php';


