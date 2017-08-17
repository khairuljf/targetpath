<?php get_header();
?>


<div class="container">
    <div class="white-space space-medium"></div>
    <div class="row">

        <?php
        $mypage = new WP_Query(array(
            'post_type' => 'page',
                ))
        ?>

        <?php
        while ($mypage->have_posts()): $mypage->the_post();
            $k = get_the_title();

            $prefix = 'clean_';
            $subtitle = get_post_meta(get_the_ID(), $prefix . 'subtitle-text', true);
            ?>

            <?php if ($k == 'Our Team' || $k == 'Services' || $k == 'Results') { ?>

                <div class="col-md-4">
                    <div class="iconbox vertical animation fadeInUp delay2">
                        <div class="iconbox-content">
                            <h3 class="fancy-title text-center">
                                <span>
        <?php the_title(); ?>
                                </span>
                            </h3>
                            <p><?php echo $subtitle ?></p>
                            <a class="btn btn-success btn-xs" href="<?php the_permalink(); ?>">Read More</a> </div>
                    </div>
                    <div class="white-space space-small"></div>
                </div>
        <?php
    }
    ?>


        <?php endwhile; ?>


    </div>
</div>
<!-- /Container -->
<!-- Parallax Container -->
<div class="parallax parallax-background6" data-stellar-background-ratio="0.4"> <a name="services"></a>
    <div class="white-space space-small"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="fancy-title text-center"><span>How We Can Help</span></h2>
            </div>
            <div class="col-md-8 col-md-offset-2">
                <p class="lead text-center">We know what it takes to bring new brands to market and to grow established companies. Our team will quickly assess your needs and provide the expertise and support you need to achieve success.</p>
                <div class="white-space space-small"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <!-- Icon List-->
                <ul class="list-unstyled iconbox-list">
                    <li>
                        <div class="iconbox">
                            <div class="iconbox-wrapper circle iconbox-2x pull-right bg-color-none animation zoomIn"> <img alt="" width="78" height="78" src="img/theme/icons/strategy.png" /></div>
                            <div class="iconbox-content animation fadeInLeft">
                                <h5 class="bold text-right"><strong><a href="services.html#strategy">Corporate Management &amp; Strategic Planning</a></strong></h5>
                                <p class="text-right">Interim corporate leadership, strategic business plan development, and business reviews to provide business owners and investors on options to drive business growth and valuation. </p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="iconbox">
                            <div class="iconbox-wrapper circle iconbox-2x pull-right bg-color-none animation zoomIn delay2"> <img alt="" width="78" height="78" src="img/theme/icons/roadmap.png" /> </div>
                            <div class="iconbox-content animation fadeInLeft delay2">
                                <h5 class="bold text-right"><strong><a href="services.html#roadmap">Product Innovation</a></strong></h5>
                                <p class="text-right">Competitive analysis and development of the product roadmap, along with business positioning, disruptive technologies and differentiating features.</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="iconbox">
                            <div class="iconbox-wrapper circle iconbox-2x pull-right bg-color-none animation zoomIn delay2"> <img alt="" width="78" height="78" src="img/theme/icons/channel.png" /> </div>
                            <div class="iconbox-content animation fadeInLeft delay2">
                                <h5 class="bold text-right"><strong><a href="services.html#channel">Channel Development &amp; Expansion</a></strong></h5>
                                <p class="text-right">A comprehensive review of the go-to-market options and recommendations, channel partner identification and program development needed to drive broad global distribution and sales</p>
                            </div>
                        </div>
                    </li>
                </ul>
                <!-- /Icon List-->
            </div>
            <div class="col-md-4"> <img width="360" height="706" src="<?php echo get_template_directory_uri() ?>/img/home/what-we-offer.jpg" alt="Offer" class="img-responsive animation fadeInUp" />
                <div class="white-space space-small"></div>
            </div>
            <div class="col-md-4">
                <!-- Icon List-->
                <ul class="list-unstyled iconbox-list">
                    <li>
                        <div class="iconbox">
                            <div class="iconbox-wrapper circle iconbox-2x bg-color-none animation zoomIn"> <img alt="" width="78" height="78" src="<?php echo get_template_directory_uri() ?>/img/theme/icons/marketing.png" /> </div>
                            <div class="iconbox-content animation fadeInRight">
                                <h5 class="bold"><strong><a href="services.html#marketing">Marketing &amp; Brand Development</a></strong></h5>
                                <p>Work with internal and external creative resources to deliver a compelling and comprehensive brand identity, product positioning, messaging, marketing communications and a sustainable ongoing plan. </p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="iconbox">
                            <div class="iconbox-wrapper circle iconbox-2x bg-color-none animation zoomIn delay2"> <img alt="" width="78" height="78" src="<?php echo get_template_directory_uri() ?>/img/theme/icons/finance.png" /> </div>
                            <div class="iconbox-content animation fadeInRight delay2">
                                <h5 class="bold"><strong><a href="services.html#financial">Financial, Legal &amp; Funding Support</a></strong></h5>
                                <p>From financial business model development, to strategic acquisition due diligence, to IP reviews, TargetPath helps clients fund new businesses and formulate and execute to the financial objective</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="iconbox">
                            <div class="iconbox-wrapper circle iconbox-2x bg-color-none animation zoomIn delay2"> <img alt="" width="78" height="78" src="<?php echo get_template_directory_uri() ?>/img/theme/icons/supplychain.png" /> </div>
                            <div class="iconbox-content animation fadeInRight delay2">
                                <h5 class="bold"><strong><a href="services.html#logistics">Supply Chain, Logistics &amp; Operations</a></strong></h5>
                                <p>We are experts in finding and negotiating with the ideal manufacturing partner and establishing  the operational infrastructure needed to be competitive in today&rsquo;s global marketplace</p>
                            </div>
                        </div>
                    </li>
                </ul>
                <!-- /Icon List-->
            </div>
        </div>
    </div>
    <div class="white-space space-big"></div>
</div>
<!-- /Parallax Container -->
<!-- Container -->
<div class="container">
    <div class="white-space space-small"></div>
    <div class="row">
        <div class="col-md-3">
            <h5 class="fancy-title animation fadeInLeft"><span>Brands we&rsquo;ve helped to develop, from business strategy to global success.</span></h5>
            <p>From the product concept to global success, these are companies that TargetPath has played a critical role in creating and continue to help grow.</p>
            <!-- span class="cl-effect-4"><a href="projects-grid-full.html">View Portfolio<span class="fa fa-angle-right iconright"></span></a></span -->
            <div class="white-space space-small"></div>
        </div>
        <div class="col-md-9">
            <!-- /row -->
            <div class="row">
                <div class="col-md-6"> <img alt="Services" class="img-responsive aligncenter animation fadeInUp" src="<?php echo get_template_directory_uri() ?>/img/home/popslate.jpg" />
                    <div class="white-space space-small"></div>
                </div>
                <div class="col-md-6">
                    <p>popSLATE has developed the second screen for your smartphone that allows you to customize and share compelling content on a low-power epaper screen mounted to the back of your iPhone.  TargetPath has been engaged in supporting popSLATE since its inception providing strategic planning, fundraising support, manufacturing partner contracting, operations and marketing planning.</p>
                    <div class="white-space space-small"></div>
                </div>
            </div>
            <!-- /row -->
            <div class="row">
                <div class="col-md-6"> <img alt="Services" class="img-responsive aligncenter animation fadeInUp" src="<?php echo get_template_directory_uri() ?>/img/home/sol2.jpg" />
                    <div class="white-space space-small"></div>
                </div>
                <div class="col-md-6">
                    <p>Founded in 2011, SOL REPUBLIC is a global consumer electronics company dedicated to enhancing people&rsquo;s lives through better-sounding headphones and accessories.  We are music fanatics who develop products from the ground up to make headphones and speakers that look, sound and feel unlike anything else in the market.  TargetPath was integral in the development, launch and management of SOL REPUBLIC from conception to current position as on of the fastest growing audio brand in it&rsquo;s category month-over-month for the last 12 months.</p>
                    <div class="white-space space-small"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6"> <img alt="Services" class="img-responsive aligncenter animation fadeInUp" src="<?php echo get_template_directory_uri() ?>/img/home/agile.jpg" />
                    <div class="white-space space-small"></div>
                </div>
                <div class="col-md-6">
                    <p>Agile Display Solutions is a leading supplier of high value, large size professional display solutions for select OEM partners. TargetPath created and manage this this specialty display manufacturing company from our long-term partnership with the Chilin / Chi Mei group of companies, which is an anchor partner managing their global commercial displays business unit from product development to customer acquisition to managing the manufacturing team in Taiwan.</p>
                    <div class="white-space space-small"></div>
                </div>
            </div>
            <!-- /row -->
        </div>
    </div>
    <div class="col-md-16">
        <div class="col-md-2">
            
        </div>
        <div class="col-md-2">
            <img alt="" width="200" height="101" src="<?php echo get_template_directory_uri() ?>/img/results/logos-grayscale/apf-logo.jpg" class="img-responsive thumbnail aligntop" />
        </div>
        <div class="col-md-2">
            <img alt="" width="200" height="101" src="<?php echo get_template_directory_uri() ?>/img/results/logos-grayscale/agile-logo.jpg" class="img-responsive thumbnail aligntop" />
        </div>
        <div class="col-md-2">
            <img alt="" width="200" height="101" src="<?php echo get_template_directory_uri() ?>/img/results/logos-grayscale/ameristar-logo.jpg" class="img-responsive thumbnail aligntop" />
        </div>
        <div class="col-md-2">
            <img alt="" width="200" height="101" src="<?php echo get_template_directory_uri() ?>/img/results/logos-grayscale/artison.jpg" class="img-responsive thumbnail aligntop" />
        </div>
        <div class="col-md-2">

            <img alt="" width="200" height="101" src="<?php echo get_template_directory_uri() ?>/img/results/logos-grayscale/ati.jpg" class="img-responsive thumbnail aligntop" />
        </div>
        <div class="col-md-2">
            <img alt="" width="200" height="101" src="<?php echo get_template_directory_uri() ?>/img/results/logos-grayscale/avocor.jpg" class="img-responsive thumbnail aligntop" />
        </div>
        <div class="col-md-2">
            <img alt="" width="200" height="101" src="<?php echo get_template_directory_uri() ?>/img/results/logos-grayscale/barco-logo.jpg" class="img-responsive thumbnail aligntop" />
        </div>
        <div class="col-md-2">
            <img alt="" width="200" height="101" src="<?php echo get_template_directory_uri() ?>/img/results/logos-grayscale/boxlight-logo.jpg" class="img-responsive thumbnail aligntop" />
        </div>
        <div class="col-md-2">
            <img alt="" width="200" height="101" src="<?php echo get_template_directory_uri() ?>/img/results/logos-grayscale/broadsign-logo.jpg" class="img-responsive thumbnail aligntop" />
        </div>
        <div class="col-md-2">
            <img alt="" width="200" height="101" src="<?php echo get_template_directory_uri() ?>/img/results/logos-grayscale/carbonaudio-logo.jpg" class="img-responsive thumbnail aligntop" />
        </div>
        <div class="col-md-2">
            <img alt="" width="200" height="101" src="<?php echo get_template_directory_uri() ?>/img/results/logos-grayscale/chatid.jpg" class="img-responsive thumbnail aligntop" />
        </div>
        <div class="col-md-2"><img alt="" width="200" height="101" src="<?php echo get_template_directory_uri() ?>/img/results/logos-grayscale/civiq-smartscapes.jpg" class="img-responsive thumbnail aligntop" />
        </div>
        <div class="col-md-2">
            <img alt="" width="200" height="101" src="<?php echo get_template_directory_uri() ?>/img/results/logos-grayscale/coolsign-logo.jpg" class="img-responsive thumbnail aligntop" />
        </div>
        <div class="col-md-2">
            <img alt="" width="200" height="101" src="<?php echo get_template_directory_uri() ?>/img/results/logos-grayscale/disiq-logo.jpg" class="img-responsive thumbnail aligntop" />
        </div>
        <div class="col-md-2">
            <img alt="" width="200" height="101" src="<?php echo get_template_directory_uri() ?>/img/results/logos-grayscale/haivision-logo.jpg" class="img-responsive thumbnail aligntop" />
        </div>
        <div class="col-md-2">
            <img alt="" width="200" height="101" src="<?php echo get_template_directory_uri() ?>/img/results/logos-grayscale/handful.jpg" class="img-responsive thumbnail aligntop" />
        </div>
        <div class="col-md-2">
            <img alt="" width="200" height="101" src="<?php echo get_template_directory_uri() ?>/img/results/logos-grayscale/hp-logo.jpg" class="img-responsive thumbnail aligntop" />
        </div>
        <div class="col-md-2">
            <img alt="" width="200" height="101" src="<?php echo get_template_directory_uri() ?>/img/results/logos-grayscale/infocus-logo.jpg" class="img-responsive thumbnail aligntop" />
        </div>
        <div class="col-md-2">
            <img alt="" width="200" height="101" src="<?php echo get_template_directory_uri() ?>/img/results/logos-grayscale/knomo.jpg" class="img-responsive thumbnail aligntop" />
        </div>
        <div class="col-md-2">
            <img alt="" width="200" height="101" src="<?php echo get_template_directory_uri() ?>/img/results/logos-grayscale/logitech-logo.jpg" class="img-responsive thumbnail aligntop" />
        </div>
        <div class="col-md-2">
            <img alt="" width="200" height="101" src="<?php echo get_template_directory_uri() ?>/img/results/logos-grayscale/lumaglo.jpg" class="img-responsive thumbnail aligntop" />
        </div>
        <div class="col-md-2">
            <img alt="" width="200" height="101" src="<?php echo get_template_directory_uri() ?>/img/results/logos-grayscale/mod-logo.jpg" class="img-responsive thumbnail aligntop" />
        </div><div class="col-md-2">
            <img alt="" width="200" height="101" src="<?php echo get_template_directory_uri() ?>/img/results/logos-grayscale/mta-logo.jpg" class="img-responsive thumbnail aligntop" />
        </div>
        <div class="col-md-2">
            <img alt="" width="200" height="101" src="<?php echo get_template_directory_uri() ?>/img/results/logos-grayscale/nano-lumens-logo.jpg" class="img-responsive thumbnail aligntop" />
        </div>
        <div class="col-md-2">
            <img alt="" width="200" height="101" src="<?php echo get_template_directory_uri() ?>/img/results/logos-grayscale/ncr-logo.jpg" class="img-responsive thumbnail aligntop" />
        </div><div class="col-md-2">
            <img alt="" width="200" height="101" src="<?php echo get_template_directory_uri() ?>/img/results/logos-grayscale/onvocal.jpg" class="img-responsive thumbnail aligntop" />
        </div>
        <div class="col-md-2">
            <img alt="" width="200" height="101" src="<?php echo get_template_directory_uri() ?>/img/results/logos-grayscale/ostendo-logo.jpg" class="img-responsive thumbnail aligntop" />
        </div>
        <div class="col-md-2">
            <img alt="" width="200" height="101" src="<?php echo get_template_directory_uri() ?>/img/results/logos-grayscale/pentagon-logo.jpg" class="img-responsive thumbnail aligntop" />
        </div>
        <div class="col-md-2">
            <img alt="" width="200" height="101" src="<?php echo get_template_directory_uri() ?>/img/results/logos-grayscale/pervasive-logo.jpg" class="img-responsive thumbnail aligntop" />
        </div>
        <div class="col-md-2">
            <img alt="" width="200" height="101" src="<?php echo get_template_directory_uri() ?>/img/results/logos-grayscale/planar-logo.jpg" class="img-responsive thumbnail aligntop" />
        </div>
        <div class="col-md-2">
            <img alt="" width="200" height="101" src="<?php echo get_template_directory_uri() ?>/img/results/logos-grayscale/popslate-logo.jpg" class="img-responsive thumbnail aligntop" />
        </div>
        <div class="col-md-2"><img alt="" width="200" height="101" src="img/results/logos-grayscale/prysm-logo.jpg" class="img-responsive thumbnail aligntop" />
        </div><div class="col-md-2">
            <img alt="" width="200" height="101" src="<?php echo get_template_directory_uri() ?>/img/results/logos-grayscale/riva.jpg" class="img-responsive thumbnail aligntop" />
        </div>
        <div class="col-md-2">
            <img alt="" width="200" height="101" src="<?php echo get_template_directory_uri() ?>/img/results/logos-grayscale/showmedia-logo.jpg" class="img-responsive thumbnail aligntop" />
        </div>
        <div class="col-md-2">
            <img alt="" width="200" height="101" src="<?php echo get_template_directory_uri() ?>/img/results/logos-grayscale/sol-logo.jpg" class="img-responsive thumbnail aligntop" />
        </div>
        <div class="col-md-2">
            <img alt="" width="200" height="101" src="<?php echo get_template_directory_uri() ?>/img/results/logos-grayscale/stelle.jpg" class="img-responsive thumbnail aligntop" />
        </div>
        <div class="col-md-2">
            <img alt="" width="200" height="101" src="<?php echo get_template_directory_uri() ?>/img/results/logos-grayscale/toshiba-logo.jpg" class="img-responsive thumbnail aligntop" />
        </div>
        <div class="col-md-2">
            <img alt="" width="200" height="101" src="<?php echo get_template_directory_uri() ?>/img/results/logos-grayscale/vertigo-logo.jpg" class="img-responsive thumbnail aligntop" />
        </div>
        <div class="col-md-2">
            <img alt="" width="200" height="101" src="<?php echo get_template_directory_uri() ?>/img/results/logos-grayscale/welcome.jpg" class="img-responsive thumbnail aligntop" />
        </div>
        <div class="col-md-2">
            <img alt="" width="200" height="101" src="<?php echo get_template_directory_uri() ?>/img/results/logos-grayscale/wpp-logo.jpg" class="img-responsive thumbnail aligntop" />
        </div>
    </div>
</div>
<!-- /Container -->
<!-- Parallax Container -->
<!-- /Parallax Container -->


</div>
<!-- /Main Container -->
<?php get_footer(); ?>