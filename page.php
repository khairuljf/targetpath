<?php get_header();
?>



<!-- /Container -->
<!-- Parallax Container -->

<?php if (is_page('contact')) { ?>
    <div class="main-wrapper">
        <div class="container">
            <div class="white-space space-big"></div>
            <div class="row">
                
                
                
                    <?php
                    while (have_posts()) :the_post();

                        the_content();

                    endwhile;
                    ?>


            </div>
        </div>

    </div>
    <?php
} else {
    ?>

    <div class="parallax " data-stellar-background-ratio="0.4"> <a name="services"></a>
        <div class="white-space space-small"></div>
        <div class="main-wrapper">
            <?php
            while (have_posts()) :the_post();

                the_content();

            endwhile;
            ?>

        </div>

    </div>


    <?php
}
?>






<!-- /Parallax Container -->
<!-- Container -->

<!-- /Container -->
<!-- Parallax Container -->
<!-- /Parallax Container -->


</div>
<!-- /Main Container -->
<?php get_footer(); ?>