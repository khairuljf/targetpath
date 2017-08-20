<?php get_header();
?>



    <div class="main-wrapper">


        <?php
        while (have_posts()) :the_post();

            the_content();

        endwhile;
        ?>

    </div>




<!-- /Container -->
<!-- Parallax Container -->

<!-- /Parallax Container -->
<!-- Container -->

<!-- /Container -->
<!-- Parallax Container -->
<!-- /Parallax Container -->


</div>
<!-- /Main Container -->
<?php get_footer(); ?>