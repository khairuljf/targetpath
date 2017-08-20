<?php get_header(); ?>




<div class="parallax " data-stellar-background-ratio="0.4"> <a name="services"></a>
        <div class="white-space space-small"></div>
        <div class="main-wrapper">
            <div class="container">
            <?php
            
            while (have_posts()) :the_post(); 
            $prefix = 'clean_';
        $subtitle = get_post_meta(get_the_ID(), $prefix . 'news-subtitle', true);
        $thumb=get_the_post_thumbnail_url();
        ?>
            
            
              <h3><?php the_title();  ?></h3>
            <span class="date">
                <?php the_time('d-M y'); ?></span>&nbsp;
            <div>&nbsp;</div>
            <div>
                <h4><?php echo $subtitle ?></h4>
                
                <div class="single-news">
                     <?php the_content(); ?>
                </div>
            </div>
            <div class="goBack"><a href="<?php echo site_url('news-views'); ?>">Go Back</a></div>
            <div class="white-space space-medium"></div>
            </div>

</div>
            
            
            

                <?php 

            endwhile;
            ?>

        </div>

    </div>


          
<!-- /Main Container -->
<?php get_footer(); ?>