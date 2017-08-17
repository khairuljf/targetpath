<!-- Footer Container -->
<div class="footer-wrapper">
    <!-- Footer Top Container -->
    <div class="footer-top">
        <!-- Google Map -->
        <!-- /Google Map -->
    </div>
    <!-- /Footer Top Container -->
    <!-- Footer Bottom Container -->
    <div class="footer-bottom">
        <!-- Container -->
        <div class="container">
            <div class="row">
                <!-- Footer Menu -->
                <div class="col-md-12 col-sm-12 columns">
                    <div class="menu-footer">
     
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'footer-menu',
                            'menu_class' => 'list-inline', /* add class in ul */
                            'container' => '', /* when you no need class  id or div before ul  */
                            'container_class' => '', /* add div with class before ul */
                            'container_ud' => '', /* add div with id before ul */
           

                        ));
                        ?>

 
                    </div>
                </div>
                <!-- /Footer Menu -->
                <!-- Copyright -->
                <div class="col-md-12 col-sm-12 columns">
                    <div class="copyright">
                        <p><p>Copyright&copy; &ndash; <?php echo get_theme_mod('copyright'); ?></p></p>
                    </div>
                </div>
                <!-- /Copyright -->
                <!-- Footer Social -->
                <div class="col-md-12 col-sm-12 columns">
                    <div class="social-footer">
                        <ul class="list-inline social-list">
                            <li><a href="<?php echo get_theme_mod('linkeding'); ?>" target="_blank" class="ToolTip" title="Linkedin"><span class="fa fa-linkedin"></span></a> </li>
                            <li><a href="<?php echo get_theme_mod('googleplus'); ?>" target="_blank" class="ToolTip" title="Google+"><span class="fa fa-google-plus"></span></a> </li>
                        </ul>
                    </div>
                </div>
                <!-- /Footer Social -->
            </div>
        </div>
        <!-- /Container -->
    </div>
    <!-- /Footer Bottom Container -->
</div>
<!-- /Footer Container -->
</div>
<!-- Back To Top -->
<a href="index.html#page-top" class="scrollup smooth-scroll"><span class="fa fa-angle-up"></span></a>
<!-- /Back To Top -->
<!-- Javascripts
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="<?php echo get_template_directory_uri() ?>/js/jquery-1.11.1.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/themejs/jquery.countdown.js"></script>
<!-- Preloader -->
<script src="<?php echo get_template_directory_uri() ?>/js/themejs/jquery.queryloader2.min.js" type="text/javascript"></script>
<!-- Smooth Scroll -->
<script src="<?php echo get_template_directory_uri() ?>/js/themejs/SmoothScroll.js" type="text/javascript"></script>
<!-- Stick On Scroll -->
<script src="<?php echo get_template_directory_uri() ?>/js/themejs/jquery.stickOnScroll.js" type="text/javascript"></script>
<!-- Scrolling Smooth to section - requires jQuery Easing plugin -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
<script src="<?php echo get_template_directory_uri() ?>/js/revolutionslider/jquery.themepunch.plugins.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/revolutionslider/jquery.themepunch.revolution.min.js"></script>
<!-- LivIcons -->
<script src="<?php echo get_template_directory_uri() ?>/js/livicons/livicons-1.3.min.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/livicons/raphael-min.js" type="text/javascript"></script>
<!-- Portfolio -->
<script src="<?php echo get_template_directory_uri() ?>/js/themejs/jquery.isotope.min.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/themejs/jquery.colio.min.js" type="text/javascript"></script>
<!-- Parallax -->
<script src="<?php echo get_template_directory_uri() ?>/js/themejs/jquery.stellar.min.js" type="text/javascript"></script>
<!-- Carousel -->
<script src="<?php echo get_template_directory_uri() ?>/js/owl-carousel/owl.carousel.js" type="text/javascript"></script>
<!-- Counters -->
<script src="<?php echo get_template_directory_uri() ?>/js/themejs/jquery.countTo.js" type="text/javascript"></script>
<!-- Lightbox -->
<script src="<?php echo get_template_directory_uri() ?>/js/themejs/jquery.magnific-popup.min.js" type="text/javascript"></script>
<!-- Tooltips -->
<script src="<?php echo get_template_directory_uri() ?>/js/themejs/jQuery.Opie.Tooltip.min.js" type="text/javascript"></script>
<!-- Animation Viewport -->
<script src="<?php echo get_template_directory_uri() ?>/js/themejs/jquery.waypoints.min.js" type="text/javascript"></script>
<!-- Pie Chart -->
<script src="<?php echo get_template_directory_uri() ?>/js/themejs/jquery.easypiechart.min.js" type="text/javascript"></script>
<!-- Twitter -->
<script src="http://www.targetpath.com/twitter/jquery.tweet.js" type="text/javascript"></script>
<!-- Google Maps -->
<!-- Load Scripts -->
<script src="<?php echo get_template_directory_uri() ?>/js/themejs/application.js"></script>
<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-80210702-1', 'auto');
    ga('send', 'pageview');

</script>
<?php wp_footer(); ?>
</body>
</html>