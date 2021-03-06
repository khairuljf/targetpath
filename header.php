<!DOCTYPE html>
<html <?php language_attributes(); ?>>

    <!-- BC_OBNW -->
    <head>

        <link type="text/css" href="<?php echo get_template_directory_uri() ?>/StyleSheets/ModuleStyleSheets.css" rel="StyleSheet" />
        <script type="text/javascript">var jslang = 'EN';</script>


        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_template_directory_uri() ?>/ico/apple-touch-icon-144-precomposed.png" />
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_template_directory_uri() ?>/ico/apple-touch-icon-114-precomposed.png" />
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_template_directory_uri() ?>/ico/apple-touch-icon-72-precomposed.png" />
        <link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri() ?>/ico/apple-touch-icon-57-precomposed.png" />
        <link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/favicon.ico" />
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <!-- Meta -->
        <meta name="description" content="New business start-up, launch and development experts.Experience. Vision. Leadership. Global connections. Unparalleled execution. And those are just some of the arrows in our quiver." />
        <meta name="keywords" content="product development, launch, startup, business" />
        <meta name="author" content="Targetpath" />
        <meta name="robots" content="index, follow" />
        <meta name="revisit-after" content="3 days" />
        <meta name="google-site-verification" content="RsSKRKrW8t1FbeMiEfE4OQ0PQ8nnbUW4tWw5Vl5UVPg" />
        <!-- Styles -->
        <!-- Bootstrap core CSS -->
        <!-- Bootstrap RTL 
                        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-rtl/3.2.0-rc2/css/bootstrap-rtl.css"> -->
        <!-- Font Awesome 4.1.0 -->
        <!-- Avendor Icons Font -->
        <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
        <!-- Animate CSS -->
        <!-- Lightbox CSS -->
        <!-- OWL Carousel -->
        <!-- Theme CSS -->
        <!-- Color CSS -->
        <!-- Google Fonts -->
        <!-- Fav and touch icons -->
        <?php if (is_page('contact')) { ?>

            <script src="https://maps.googleapis.com/maps/api/js"></script>
            <script>
                function initialize() {
                    var myLatlng = new google.maps.LatLng(45.3381144, -122.7735625);
                    var mapOptions = {
                        zoom: 16,
                        center: myLatlng
                    }
                    var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

                    var marker = new google.maps.Marker({
                        position: myLatlng,
                        map: map,
                        title: 'Hello World!'
                    });
                }

                google.maps.event.addDomListener(window, 'load', initialize);

            </script>

            <?php
        }
        ?>


        <link rel="stylesheet" type="text/css" href="<?php bloginfo("stylesheet_url") ?>">
        <style>

        </style>
<?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?> data-spy="scroll" data-target=".navbar" class="bg-pattern1">


        <div id="preloader"></div>
        <!-- Page Main Wrapper -->
        <div class="page-wrapper" id="page-top">
            <!-- Header Container -->
            <div class="header-wrapper">
                <!-- Header Top Container -->
                <div class="header-top">
                    <!-- Container -->
                    <div class="container">
                        <div class="row">
                            <!-- Left -->
                            <div class="col-md-6 col-sm-6 columns">
                                <div class="header-top-left">
                                    <ul class="social-top">
                                        <li><a href="<?php echo get_theme_mod('linkeding'); ?>" target="_blank" class="ToolTip" title="Linkedin"><span class="fa fa-linkedin"></span></a> </li>
                                        <li><a href="<?php echo get_theme_mod('googleplus'); ?>" target="_blank" class="ToolTip" title="Google+"><span class="fa fa-google-plus"></span></a> </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /Left -->
                            <!-- Right -->
                            <div class="col-md-6 col-sm-6 columns">
                                <div class="header-top-right">
                                    <!-- Right Menu -->
                                    <ul class="top-menu">
                                        <li><a href="<?php echo site_url('contact'); ?>">Let's Connect</a></li>
                                        <li>
                                        </li>
                                    </ul>
                                    <!-- /Right Menu -->
                                </div>
                            </div>
                            <!-- /right -->
                        </div>
                    </div>
                    <!-- /Container -->
                </div>
                <!-- /Header Top Container -->
                <!-- Header Main Container -->
                <div class="header-main">
                    <!-- Container -->
                    <div class="container">
                        <!-- Main Navigation & Logo -->
                        <div class="main-navigation">
                            <div class="row">
                                <!-- Main Navigation -->
                                <div class="col-md-12 columns">
                                    <nav class="navbar navbar-default gfx-mega nav-left" role="navigation">
                                        <!-- Brand and toggle get grouped for better mobile display -->
                                        <div class="navbar-header">
                                            <a class="navbar-toggle" data-toggle="collapse" data-target="#gfx-collapse"></a>
                                            <div class="logo">
                                                <a href="<?php bloginfo('home') ?>"><img src="<?php echo get_theme_mod('logo_upload') ?>" alt="Logo" /></a>
                                            </div>
                                        </div>
                                        <!-- Collect the nav links, forms, and other content for toggling -->
                                        <!--  <div class="collapse navbar-collapse" id="gfx-collapse">
                                               <ul class="nav navbar-nav gfx-nav">
                                                   <li><a href="home.html">Home</a></li>
                                                   <li class="dropdown"><a href="team.html" class="dropdown-toggle" data-toggle="dropdown">Our Team <strong class="caret"></strong></a>
                                                       <ul class="dropdown-menu">
                                                           <li class="active"><a href="job-openings.html">Careers</a></li>
                                                       </ul>
                                                   </li>
                                                   <li><a href="services.html">Services</a></li>
                                                   <li><a href="results.html">Results</a></li>
                                                   <li><a href="news-views.html">News &amp; Views</a></li>
                                                   <li><a href="contact-us.html">Contact</a></li>
                                               </ul>
                                           </div> -->


                                        <div class="collapse navbar-collapse" id="gfx-collapse">
                                            <?php
                                            wp_nav_menu(array(
                                                'theme_location' => 'header-menu',
                                                'menu_class' => 'nav navbar-nav gfx-nav', /* add class in ul */
                                                'container' => '', /* when you no need class  id or div before ul  */
                                                'container_class' => '', /* add div with class before ul */
                                                'container_ud' => '', /* add div with id before ul */
                                                'fallback_cb' => 'default_menu', /* when menu not selected it will work from default_menu functon functions.php */
                                                'walker' => new WP_Bootstrap_Navwalker(),
                                            ));
                                            ?>
                                        </div>
                                        <!-- /.navbar-collapse -->
                                    </nav>
                                </div>
                                <!-- /Main Navigation -->
                            </div>
                        </div>
                        <!-- /Main Navigation & Logo -->
                    </div>
                    <!-- /Container -->
                </div>
                <!-- /Header Main Container -->
            </div>
            <!-- /Header Container -->
            <!-- Slider Container --><!-- /Slider Container -->
            <!-- Main Container -->
            <div class="main-wrapper">

<?php
$prefix = 'clean_';
$title = get_post_meta(get_the_ID(), $prefix . 'title-text', true);
$subtitle = get_post_meta(get_the_ID(), $prefix . 'subtitle-text', true);
?>

                <!-- Parallax -->
                <?php
                if (is_page('contact' )) {
                    
                }
                elseif (is_404() ) {
                    
               
                }
                else {
                    ?>
                    <div data-stellar-background-ratio="0.1" class="parallax parallax-background13"  style="background-image:url('<?php header_image() ?>')"   >
                        <div class="bg-overlay bg-color-default"></div>
                        <div class="white-space space-big"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1">
                                    <h3 class="fancy-title color-white text-center animation fadeInDown"><span><?php echo $title; ?></span></h3>
                                    <p class="lead text-center color-white"><?php echo $subtitle; ?> </p>
                                </div>
                            </div>
                        </div>
                        <div class="white-space space-big"></div>
                    </div>


    <?php
}
?>
                <!-- /Parallax -->
                <!-- Container -->