<?php get_header(); ?>




<div class="parallax " data-stellar-background-ratio="0.4"> <a name="services"></a>
        <div class="white-space space-small"></div>
        <div class="main-wrapper">
            <div class="container">
                <div class="col-md-12">
                    <hr class="hr-fancy text-center">
            <?php
            
            while (have_posts()) :the_post(); 
          
        ?>
            
            
              <h3 class="fancy-title text-center">Latest Openings</h3>
          
            <div>&nbsp;</div>
            <div>
                <h4><?php echo $subtitle ?></h4>
                
                <div class="single-news">
                     <?php the_content(); ?>
                </div>
            </div>
            
            <div class="white-space space-medium"></div>
                </div>
                <p class="text-center animation fadeInUp animation-active"><a href="#" class="btn btn-primary btn-lg">Send Your Resume</a></p>
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