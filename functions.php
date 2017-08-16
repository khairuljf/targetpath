<?php

add_theme_support('title-tag');


$args = array(
    'default-image' => get_template_directory_uri() . '/img/parallax/parallax-back13.jpg',
);
add_theme_support('custom-header', $args);



add_theme_support('custom-background');
add_theme_support('post-thumbnail');


register_nav_menus(array(
    'header-menu' => 'Header Menu',
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
}

add_action('customize_register', 'mycustomize');
?>


