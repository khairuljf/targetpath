<?php

function post_list_shortcode($atts) {
    extract(shortcode_atts(array(
        'count' => '',
                    ), $atts));

    $q = new WP_Query(
            array('posts_per_page' => $count, 'post_type' => 'news', 'orderby' => 'menu_order', 'order' => 'ASC')
    );
    ?>



    <?php
    $list = ' <div class="container">
                    <div class="row">
                        <div class="white-space space-small"></div>
                         <div class="col-md-12 columns">';
    while ($q->have_posts()) : $q->the_post();
        $idd = get_the_ID();
        $custom_field = get_post_meta($idd, 'custom_field', true);
        $post_content = get_the_content();
        $prefix = 'clean_';
        $subtitle = get_post_meta(get_the_ID(), $prefix . 'news-subtitle', true);



        $list .= '<div class="row">
                                <a href="' . get_the_permalink() . '" target="">
                                    <h4 class="fancy-title"><span>' . get_the_title() . '</span></h4>
                                </a>
                                <a href="' . get_the_permalink() . '" target=""></a>
                               
                                    <img alt="" class="img-responsive thumbnail alignleft" src="' . get_the_post_thumbnail_url() . '" /></a>
                                <h5>' . $subtitle . '</h5>
                                <p> <p>' . read_mores(40) . '<br />
                                    <a href="' . get_the_permalink() . '"><br />
                                        Read More.</a></p></p>
                            </div>
                            <div class="white-space space-small">
                 </div>';

    endwhile;
    $list .= '</div></div></div>';
    wp_reset_query();
    return $list;
}

add_shortcode('post_list', 'post_list_shortcode');

function client_logo($atts) {
    extract(shortcode_atts(array(
        'count' => '',
        'title'=>'',
                    ), $atts));

    $q = new WP_Query(
            array('posts_per_page' => $count, 'post_type' => 'our_clients', 'orderby' => 'menu_order', 'order' => 'ASC')
    );
    
    
    if($title==""){
        $list .='<div class="container"><div class="row">
                            <div class="col-md-12 columns">';
        
    }
 else {
     $list = '<div class="container"><div class="row">
                            <div class="col-md-12 columns">
                                <hr class="hr-fancy text-center" />
                                <div class="white-space space-medium"></div>
                                <h3 class="fancy-title text-center"><span>'.$title.'<br />
                                    </span></h3>
                                <div class="white-space space-medium"></div>
                            </div>
                        </div>
               <div class="row">
                            <div class="col-md-12 columns">';
        
    }
    
    
    while ($q->have_posts()) : $q->the_post();
        $idd = get_the_ID();
        $custom_field = get_post_meta($idd, 'custom_field', true);
        $post_content = get_the_content();
   




        
            if (has_post_thumbnail()) {
               $list .='<div class="col-md-2">
                <img alt="" width="200" height="101" src="'.get_the_post_thumbnail_url().'"  class="img-responsive thumbnail aligntop" />
            </div>';
            }
     
    endwhile;
    $list .= '</div></div></div>';
    wp_reset_query();
    return $list;
}

add_shortcode('our-client', 'client_logo');

function services($atts) {
    extract(shortcode_atts(array(
        'count' => '',
                    ), $atts));

    $q = new WP_Query(
            array('posts_per_page' => $count, 'post_type' => 'service', 'orderby' => 'menu_order', 'order' => 'ASC')
    );
    ?>



    <?php
    $list = '<div class="container"> <div class="row">';
    $i = 0;
    while ($q->have_posts()) : $q->the_post();
        $idd = get_the_ID();
        $custom_field = get_post_meta($idd, 'custom_field', true);
        $post_content = get_the_content();
        $prefix = 'clean_';
        $icon = get_post_meta(get_the_ID(), $prefix . 'service-icon', true);
        ?>

        <?php
        if ($i % 2 == 0) {
            $list .='

            <div class="col-sm-6">
                <div class="white-space space-small"></div>
                <h4 class="animation fadeInLeft"><span> '.get_the_title().'</span></h4>
                <div class="animation fadeInLeft">
                    <img alt="" width="73" height="73" src="'.$icon.'" class="img-responsive thumbnail alignleft" />
                    <div class="animation fadeInLeft">
                       <p> '.get_the_content().'</p>
                    </div>
                </div>


                <div class="white-space space-small"></div>
            </div>
            <div class="col-sm-6">
                <div class="white-space space-small"></div>            
                <img src="'.get_the_post_thumbnail_url().'" class="img-responsive animation fadeInRight animation-active" alt="Process Step1">

                <div class="white-space space-small"></div>
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <hr class="hr-fancy text-center" />
                </div>
            </div>';
        }
        else {
           
            $list .= ' <div class="col-sm-6">
                <div class="white-space space-small"></div>

               
                 <img src="'.get_the_post_thumbnail_url().'" class="img-responsive animation fadeInLeft " alt="Process Step1">

                <div class="white-space space-small"></div>
            </div>

            <div class="col-sm-6">
                <div class="white-space space-small"></div>
                <h4 class="animation fadeInRight"><span><?php the_title(); ?></span></h4>
                <div class="animation fadeInRight">
                    <img alt="" width="73" height="73" src="'. $icon .'" class="img-responsive thumbnail alignleft" />
                    <div class="animation fadeInRight">
                       <p> '.get_the_content().'</p>
                    </div>
                </div>


                <div class="white-space space-small"></div>
            </div>

            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <hr class="hr-fancy text-center" />
                </div>
            </div>';

            



     
        }

        $i++;
      
    endwhile;
    $list .= '</div></div>';
    wp_reset_query();
    return $list;
}

add_shortcode('service', 'services');

function recent_comment($atts) {
    extract(shortcode_atts(array(
        'count' => '',
        'title' => 'WHAT OUR CLIENTS SAY ',
                    ), $atts));

    $q = new WP_Query(
            array('posts_per_page' => $count, 'post_type' => 'testimonial', 'orderby' => 'menu_order', 'order' => 'ASC')
    );

    $list = ' <div class="container">
                    <div class="row">
                        <div class="col-md-12 columns">
                            <hr class="hr-fancy text-center" />
                            <div class="white-space space-medium"></div>
                            <h3 class="fancy-title text-center">"' . $title . '"</h3>
                            <div class="white-space space-medium"></div>
                        </div>
                    </div>
                </div><div class="row"><div class="col-md-12 columns">';

    while ($q->have_posts()) : $q->the_post();
        $idd = get_the_ID();
        $custom_field = get_post_meta($idd, 'custom_field', true);
        $post_content = get_the_content();
        $prefix = 'clean_';
        $service = get_post_meta(get_the_ID(), $prefix . 'service1', true);
        $service2 = get_post_meta(get_the_ID(), $prefix . 'service2', true);
        $service3 = get_post_meta(get_the_ID(), $prefix . 'service3', true);
        $service4 = get_post_meta(get_the_ID(), $prefix . 'service4', true);
        $service5 = get_post_meta(get_the_ID(), $prefix . 'service5', true);



        $list .= '<div class="col-sm-4 col-md-4 columns">
            <div class="iconbox vertical panel panel-default">
                <div class="panel-body"> 
                <img alt="" width="200" height="101" src="' . get_the_post_thumbnail_url() . '" /><span style="text-align: center;"></span>
                    <div class="iconbox-content">
                        <p>"'.get_the_content().'"</p>
                        <p><strong>'.get_the_title().'</strong></p>
                        <div class="center-block">
                            <img alt="" width="50" height="50" src="' . $service . '" />
                            <img alt="" width="50" height="50" src="' . $service2 . '" />
                            <img alt="" width="50" height="50" src="' . $service3 . '" />
                            <img alt="" width="50" height="50" src="' . $service4 . '" />
                            <img alt="" width="50" height="50" src="' . $service5 . '" />
                        </div>
                    </div>
                </div>
            </div>
        </div>';








    endwhile;
    $list .= '</div></div>';
    wp_reset_query();
    return $list;
}

add_shortcode('recent-testimonial', 'recent_comment');

function testimonials($atts) {
    extract(shortcode_atts(array(
        'count' => '',
        'title' => 'HOW WE’VE HELPED OUR CLIENTS ',
                    ), $atts));

    $q = new WP_Query(
            array('posts_per_page' => $count, 'post_type' => 'testimonial', 'orderby' => 'menu_order', 'order' => 'ASC')
    );

    $list = ' 
                

                <div class="row">
                    <div class="col-md-12 columns">
                        <hr class="hr-fancy text-center" />
                        <div class="white-space space-medium"></div>
                        <h3 class="fancy-title text-center"><span>"' . $title . '"</span></h3>
                        <div class="white-space space-medium"></div>
                    </div>
                </div>
  
';

    while ($q->have_posts()) : $q->the_post();
        $idd = get_the_ID();
        $custom_field = get_post_meta($idd, 'custom_field', true);
        $post_content = get_the_content();
        $prefix = 'clean_';
        $service = get_post_meta(get_the_ID(), $prefix . 'service1', true);
        $service2 = get_post_meta(get_the_ID(), $prefix . 'service2', true);
        $service3 = get_post_meta(get_the_ID(), $prefix . 'service3', true);
        $service4 = get_post_meta(get_the_ID(), $prefix . 'service4', true);
        $service5 = get_post_meta(get_the_ID(), $prefix . 'service5', true);



        $list .= '<div class="row">
                    <div class="col-md-10 columns col-xs-offset-1">
                        <div class="col-md-3 columns">
                            <img alt="" width="200" height="101" class="img-responsive thumbnail aligntop" src="' . get_the_post_thumbnail_url() . '" />

                            
 
                            <div class="center-block">
                                <img alt="" width="33" height="33" src="' . $service . '" />
                                <img alt="" width="33" height="33" src="' . $service2 . '" />
                                <img alt="" width="33" height="33" src="' . $service3 . '" />
                                <img alt="" width="33" height="33" src="' . $service4 . '" />
                                <img alt="" width="33" height="33" src="' . $service5 . '" />
                            </div>
                        </div>
                        <div class="col-md-9 columns">
                            <p>'.get_the_content().'</p>
                            <div class="white-space space-small"></div>
                        </div>
                    </div>
                </div>';

    endwhile;
    $list .= '';
    wp_reset_query();
    return $list;
}

add_shortcode('testimonials', 'testimonials');

function contact_us($atts) {
    extract(shortcode_atts(array(
        'count' => '',
        'title' => 'Need help? Let our team show you whats possible.',
                    ), $atts));



    $list = '<div data-stellar-background-ratio="0.4" class="parallax parallax-background10">
        <div class="bg-overlay bg-overlay-dark bg-color-default"></div>
                    <div class="white-space space-medium"></div>';


    $idd = get_the_ID();
    $custom_field = get_post_meta($idd, 'custom_field', true);
    $post_content = get_the_content();

    $list .= '<div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="white-space space-xsmall"></div>
                                <p class="lead text-center color-white">'.$title.'</p>
                            </div>
                            <div class="col-md-6">
                                <div class="text-center"><a href="'.site_url(contact).'" class="btn btn-white btn-alt btn-lg">Contact Us</a></div>
                            </div>
                        </div>
                    </div>';


    $list .= '<div class="white-space space-medium"></div></div>';
    wp_reset_query();
    return $list;
}

add_shortcode('contact-us', 'contact_us');

function service_list($atts) {
    extract(shortcode_atts(array(
        'count' => '',
        'desc'=>' TargetPath offers a comprehensive approach to supporting your business goals 
             with an emphasis on new business development and operational infrastructure needed to
             support new revenue. Our systematic approach to growing your business
             and expanding your markets includes a wide range of services and disciplines, including:',
        
        'title'=>'hello',
        'image'=>get_template_directory_uri(). '/img/services/TargetPath_Infographic.jpg',
                    ), $atts));

    $q = new WP_Query(
            array('posts_per_page' => $count, 'post_type' => 'service', 'orderby' => 'menu_order', 'order' => 'ASC')
    );



    $list = '<div class="container">
        <div class="white-space space-small"></div> <div class="row">
        <div class="col-md-12 col-md-offset-1 columns">
         <p class="animation fadeInRight"> 
         <img alt="" width="599" height="600" src="  ' .$image . '" class="img-responsive alignleft" />
            '.$desc.'
             </p>
        
';



    while ($q->have_posts()) : $q->the_post();
        $idd = get_the_ID();
        $custom_field = get_post_meta($idd, 'custom_field', true);
        $post_content = get_the_content();


        $list .= '<p><a href="services.html#strategy"><strong>' . get_the_title() . '</strong></a></p>';


    endwhile;


    $list .= '</div></div></div><div class="col-md-8 col-md-offset-2">
        <hr class="hr-fancy text-center">
        </div>';
    wp_reset_query();
    return $list;
}

add_shortcode('service-list', 'service_list');

function team_members($atts) {
    extract(shortcode_atts(array(
        'count' => '',
                    ), $atts));

    $q = new WP_Query(
            array('posts_per_page' => $count, 'post_type' => 'team', 'orderby' => 'menu_order', 'order' => 'ASC')
    );




    $list = '<div class="container"><div class="white-space space-small"></div><div class="row"><div class="col-md-12">';
    $i = 0;
    while ($q->have_posts()) : $q->the_post();
        $idd = get_the_ID();
        $custom_field = get_post_meta($idd, 'custom_field', true);
        $post_content = get_the_content();
        $prefix = 'clean_';
        $mail = get_post_meta(get_the_ID(), $prefix . 'mail', true);

        $positions = get_the_terms(get_the_ID(), 'team_member');

        foreach ($positions as $position) {

            $list .= '<div class="col-md-3 col-sm-6 columns">
            <div class="panel panel-default animation fadeInLeft delay1">
                                    <div class="panel-body">
                                       
                                        <div class="team-wrapper team-wrapper-alt">
                                            <div class="team-member">
                                            <img src="' . get_the_post_thumbnail_url() . '" alt="Team Member" class="img-responsive img-rounded" />
                                                <div class="team-info">
                                                    <h5 class="team-name">' . get_the_title() . '</h5>
                                                    <p class="team-role">' . $position->name . '</p>
                                                </div>
                                                <hr class="hr-fancy text-center" />
                                                <div style="display: none;" class="myToolTipTemlate">
                                                    <h4 class="color-white">{title}</h4>
                                                    <div style="max-width: 310px;">
                                                        <p class="text-center">{data-opie-content}</p>
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                                <!-- /HTML Tooltip content-->
                                                <p class="text-center">
                                                    <a data-opie-content=" ' . get_the_content() . '" title="' . get_the_title() . ' : ' . $position->name . '" data-opie-template=".myToolTipTemlate" data-opie-position="tc:bc" target="_blank" href="team.html#" class="ToolTip btn btn-default btn-alt">Read Bio</a>
                                                </p>
                                                <div class="text-center">
                                                    <ul class="list-inline">
                                                        <li><a target="_blank" title="Email" data-opie-position="tc:bc" class="ToolTip" href="mailto:' . $mail . '"><span class="fa fa-at fa-lg"></span></a> </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>';
        }








    endwhile;


    $list .= '</div></div></div>';
    wp_reset_query();
    return $list;
}

add_shortcode('member-list', 'team_members');

function our_partner($atts) {
    extract(shortcode_atts(array(
        'count' => '',
        'title' => 'Our Partners ',
                    ), $atts));

    $q = new WP_Query(
            array('posts_per_page' => $count, 'post_type' => 'partner', 'orderby' => 'menu_order', 'order' => 'ASC')
    );

    $list = ' <div class="row">
                    <div class="col-md-12 columns">
                        <hr class="hr-fancy text-center" />
                        <h4 class="fancy-title text-center"><span>'.$title.'</span></h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 columns">
                        <!-- PARTNERS -->
                        <div class="portfolio clearfix">
                            <div class="portfolio-grid portfolio-4-cols portfolio-classic">
                

  
';

    while ($q->have_posts()) : $q->the_post();
        $idd = get_the_ID();
        $custom_field = get_post_meta($idd, 'custom_field', true);
        $post_content = get_the_content();
        $prefix = 'clean_';
        $siteurl = get_post_meta(get_the_ID(), $prefix . 'website', true);





        $list .= '<div class="element isotope-item branding">
                        <div class="element-inner animation fadeInLeft">
                            <div class="overlay-wrapper"> <img alt="" src="' . get_the_post_thumbnail_url() . '" /> </div>
                            <div class="portfolio-item-content">
                                <h3 class="portfolio-item-title"><a target="_blank" href="' . $siteurl . '">' . get_the_title() . '</a></h3>
                            </div>
                        </div>
                    </div>';

    endwhile;
    $list .= '</div></div></div></div>';
    wp_reset_query();
    return $list;
}

add_shortcode('our-partners', 'our_partner');

function career($atts) {
    extract(shortcode_atts(array(
        'count' => '',
        'content'=>'If you are talented, highly motivated, hardworking, passionate about your work and want to join our team... ',
        'title' => 'HOW WE’VE HELPED OUR CLIENTS ',
                    ), $atts));



    $list = ' 
        <div data-stellar-background-ratio="0.4" class="parallax parallax-background12">
                    <div class="bg-overlay bg-overlay-dark"></div>
                    <div class="white-space space-big"></div>
                    <div class="container">
                        <div class="row">
                

  
';







    $list .= ' <div class="col-md-8 col-md-offset-2">
                        <h3 class="light text-center color-white animation fadeInDown delay1">'.$content.'</h3>
                        <div class="white-space space-xsmall"></div>
                        <p class="text-center animation fadeInUp"><a href="'.site_url('careers').'" class="btn btn-primary btn-lg">Careers Available at TargetPath</a></p>
                    </div>';

    $list .= '</div></div></div>';
    wp_reset_query();
    return $list;
}

add_shortcode('career', 'career');

function job_post($atts) {
    extract(shortcode_atts(array(
        'count' => '',
                    ), $atts));

    $q = new WP_Query(
            array('posts_per_page' => $count, 'post_type' => 'jobs', 'orderby' => 'menu_order', 'order' => 'ASC')
    );



    $list = '
                <div class="container"><div class="row"><div class="col-md-12 columns">
                            <hr class="hr-fancy text-center" />
                            <div class="white-space space-medium"></div><h3 class="fancy-title text-center">
                ';



    while ($q->have_posts()) : $q->the_post();
        $idd = get_the_ID();
        $custom_field = get_post_meta($idd, 'custom_field', true);
        $post_content = get_the_content();


        $list .= '<table>
                                    <tbody>
                                        <tr>
                                            <td valign="top"><a   href="'.get_the_permalink().'">'.get_the_time('Y-m-d').' '.get_the_title().' </a></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="white-space space-medium"></div>
                                ';


    endwhile;


    $list .= '</h3> <div class="white-space space-medium"></div>
                            <p class="text-center animation fadeInUp"><a href="#" class="btn btn-primary btn-lg">Send Your Resume</a></p>
                            <div class="white-space space-xsmall"></div></div></div> <div class="white-space space-medium"></div></div>';
    wp_reset_query();
    return $list;
}

add_shortcode('current-job-post', 'job_post');

function home_service($atts) {
    extract(shortcode_atts(array(
        'count' => '',
                    ), $atts));

    $q = new WP_Query(
            array('posts_per_page' => $count, 'post_type' => 'page', 'orderby' => 'menu_order', 'order' => 'ASC')
    );

    $list = '<div class="container">
    <div class="white-space space-medium"></div>
    <div class="row">         
                ';

    while ($q->have_posts()) : $q->the_post();
        $idd = get_the_ID();
        $custom_field = get_post_meta($idd, 'custom_field', true);
        $post_content = get_the_content();
        $prefix = 'clean_';
            $subtitle = get_post_meta(get_the_ID(), $prefix . 'subtitle-text', true);
            $k = get_the_title();
            
            if ($k == 'Our Team' || $k == 'Services' || $k == 'Results') {

             $list .='   <div class="col-md-4">
                    <div class="iconbox vertical animation fadeInUp delay2">
                        <div class="iconbox-content">
                            <h3 class="fancy-title text-center">
                                <span>
                       '. get_the_title().'
                                </span>
                            </h3>
                            <p>'.$subtitle.'</p>
                            <a class="btn btn-success btn-xs" href="'.get_the_permalink().'">Read More</a> </div>
                    </div>
                    <div class="white-space space-small"></div>
                </div>';      
    }

    endwhile;


    $list .= '</div>
</div>';
    wp_reset_query();
    return $list;
}

add_shortcode('home-serive', 'home_service');



function home_all_service($atts) {
    extract(shortcode_atts(array(
        'count' => '',
                    ), $atts));

    
    $prefix = 'clean_';
    $title = get_post_meta('50', $prefix . 'title-text', true);
    $subtitle = get_post_meta('50', $prefix . 'subtitle-text', true);
    
    $list = '<div class="parallax parallax-background6" data-stellar-background-ratio="0.4"> <a name="services"></a> 
         <div class="white-space space-small"></div>
          <div class="container">
          <div class="row">
            <div class="col-md-12">
                <h2 class="fancy-title text-center"><span>'.$title.'</span></h2>
            </div>
            <div class="col-md-8 col-md-offset-2">
                <p class="lead text-center">'. $subtitle .'</p>
                <div class="white-space space-small"></div>
            </div>
        </div> <div class="row">
        
                <!-- Icon List-->
                ';
    $q = new WP_Query(
            array('posts_per_page' => 3, 'post_type' => 'service', 'orderby' => 'menu_order', 'order' => 'ASC')
    );
    $list .='<div class="col-md-4"><ul class="list-unstyled iconbox-list">';
    while ($q->have_posts()) : $q->the_post();
        $idd = get_the_ID();
        $custom_field = get_post_meta($idd, 'custom_field', true);
        $post_content = get_the_content();
        $prefix = 'clean_';
        $service = get_post_meta(get_the_ID(), $prefix .'service-icon', true);
      
        
        
        
       $list .= ' <li>
                        <div class="iconbox">
                            <div class="iconbox-wrapper circle iconbox-2x pull-right bg-color-none animation zoomIn"> <img alt="" width="78" height="78" src="'.$service.'" /></div>
                            <div class="iconbox-content animation fadeInLeft">
                                <h5 class="bold text-right"><strong><a href="'.get_the_permalink().'#strategy">'.get_the_title().'</a></strong></h5>
                                <p class="text-right">'.read_mores(25).'</p>
                            </div>
                        </div>
                    </li>
                ';
    endwhile;
     $list .='</ul></div>';
     
     
     $list .='<div class="col-md-4"> 
                <img width="360" height="706" src="'.get_template_directory_uri().'/img/home/what-we-offer.jpg" alt="Offer" class="img-responsive animation fadeInUp" />
                <div class="white-space space-small"></div>
            </div>';
     
     $q = new WP_Query(
            array('posts_per_page' => 3, 'post_type' => 'service', 'orderby' => 'menu_order', 'order' => 'DESC')
    );
    $list .='<ul class="list-unstyled iconbox-list">';
    while ($q->have_posts()) : $q->the_post();
        $idd = get_the_ID();
        $custom_field = get_post_meta($idd, 'custom_field', true);
        $post_content = get_the_content();
        $prefix = 'clean_';
        $service = get_post_meta(get_the_ID(), $prefix . 'service-icon', true);
      
        
        
        
       $list .= ' <li>
                        <div class="iconbox">
                            <div class="iconbox-wrapper circle iconbox-2x bg-color-none animation zoomIn"> <img alt="" width="78" height="78" src="'.$service.'" /> </div>
                            <div class="iconbox-content animation fadeInRight">
                                <h5 class="bold"><strong><a href="'.get_the_permalink().'#marketing">'.get_the_title().'</a></strong></h5>
                                <p>'.read_mores(25).'</p>
                            </div>
                        </div>
                    </li>
                ';
    endwhile;
     $list .='</ul></div>';
     
     
     


    $list .= '</div></div></div>';
    wp_reset_query();
    return $list;
}

add_shortcode('home-all-services', 'home_all_service');




function our_concept($atts) {
    extract(shortcode_atts(array(
        'count' => '',
                    ), $atts));

    

    $list = '<div class="container">
    <div class="white-space space-small"></div>    
<div class="row">    
                ';
$q = new WP_Query(
            array('posts_per_page' => 1, 'post_type' => 'concept', 'orderby' => 'menu_order', 'order' => 'DES')
    );
    while ($q->have_posts()) : $q->the_post();
        $idd = get_the_ID();
        $custom_field = get_post_meta($idd, 'custom_field', true);
        $post_content = get_the_content();
        $prefix = 'clean_';
            $subtitle = get_post_meta(get_the_ID(), $prefix . 'subtitle-text', true);
            $k = get_the_title();
            
            
             $list .='<div class="col-md-3">
            <h5 class="fancy-title animation fadeInLeft"><span>'.get_the_title().'</span></h5>
            <p>'.get_the_content().'</p>
            <!-- span class="cl-effect-4"><a href="projects-grid-full.html">View Portfolio<span class="fa fa-angle-right iconright"></span></a></span -->
            <div class="white-space space-small"></div>
        </div>';
                   
   
    endwhile;
    
    
    $q = new WP_Query(
            array('posts_per_page' => $count, 'post_type' => 'concept', 'orderby' => 'menu_order', 'order' => 'ASC')
    );
    $list .='<div class="col-md-9">';
    while ($q->have_posts()) : $q->the_post();
        $idd = get_the_ID();
        $custom_field = get_post_meta($idd, 'custom_field', true);
        $post_content = get_the_content();
        $prefix = 'clean_';
            $subtitle = get_post_meta(get_the_ID(), $prefix . 'subtitle-text', true);
            $k = get_the_title();
            
            if (has_post_thumbnail()==true) {
                $list .='<div class="row">
                <div class="col-md-6">
                    <img alt="Services" class="img-responsive aligncenter animation fadeInUp" src="'.get_the_post_thumbnail_url().'" />
                    <div class="white-space space-small"></div>
                </div>
                <div class="col-md-6">
                    <p>'.get_the_content().'</p>
                    <div class="white-space space-small"></div>
                </div>
            </div>';
                
                
            }
             
                   
   
    endwhile;
    $list .='</div>';


    $list .= '</div></div>';
    wp_reset_query();
    return $list;
}

add_shortcode('concept', 'our_concept');








