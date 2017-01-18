<?php

$portfolio_section_title                    = get_field('portfolio_section_title');
$portfolio_section_description              = get_field('portfolio_section_description');
$portfolio_section_button_image             = get_field('portfolio_section_button_image');

$portfolio_section_1_image                  = get_field('portfolio_section_1_image');
$portfolio_section_1_title_text             = get_field('portfolio_section_1_title_text');
$portfolio_section_1_description_text       = get_field('portfolio_section_1_description_text');
$portfolio_section_1_button_text            = get_field('portfolio_section_1_button_text');
$portfolio_section_1_service_url            = get_field('portfolio_section_1_service_url');


$portfolio_section_2_image                  = get_field('portfolio_section_2_image');
$portfolio_section_2_title_text             = get_field('portfolio_section_2_title_text');
$portfolio_section_2_description_text       = get_field('portfolio_section_2_description_text');
$portfolio_section_2_button_text            = get_field('portfolio_section_2_button_text');
$portfolio_section_2_service_url            = get_field('portfolio_section_2_service_url');

$portfolio_section_3_image                  = get_field('portfolio_section_3_image');
$portfolio_section_3_title_text             = get_field('portfolio_section_3_title_text');
$portfolio_section_3_description_text       = get_field('portfolio_section_3_description_text');
$portfolio_section_3_button_text            = get_field('portfolio_section_3_button_text');
$portfolio_section_3_service_url            = get_field('portfolio_section_3_service_url');

$portfolio_section_4_image                  = get_field('portfolio_section_4_image');
$portfolio_section_4_title_text             = get_field('portfolio_section_4_title_text');
$portfolio_section_4_description_text       = get_field('portfolio_section_4_description_text');
$portfolio_section_4_button_text            = get_field('portfolio_section_4_button_text');
$portfolio_section_4_service_url            = get_field('portfolio_section_4_service_url');

$portfolio_section_5_image                  = get_field('portfolio_section_5_image');
$portfolio_section_5_title_text             = get_field('portfolio_section_5_title_text');
$portfolio_section_5_description_text       = get_field('portfolio_section_5_description_text');
$portfolio_section_5_button_text            = get_field('portfolio_section_5_button_text');
$portfolio_section_5_service_url            = get_field('portfolio_section_5_service_url');

$portfolio_section_6_image                  = get_field('portfolio_section_6_image');
$portfolio_section_6_title_text             = get_field('portfolio_section_6_title_text');
$portfolio_section_6_description_text       = get_field('portfolio_section_6_description_text');
$portfolio_section_6_button_text            = get_field('portfolio_section_6_button_text');
$portfolio_section_6_service_url            = get_field('portfolio_section_6_service_url');

?>




<!--  PORTFOLIO SECTION
=====================================-->
<section id="portfolio-section" data-type="background" data-speed="5">
 
  <div class="container">

    
        <h1><?php echo $portfolio_section_title; ?></h1>
    

    <h2><?php echo $portfolio_section_description; ?></h2>
    
        
        <div class="row">

            <div class="col-sm-4">
                <div class="portfolio-section-1">

                    <div class="portfolio-section-1-image">
                        <!-- If user uploaded image -->
                        <?php if(!empty($portfolio_section_1_image) ) : ?>
                            <img src="<?php echo $portfolio_section_1_image['url']; ?>" alt="<?php echo $portfolio_section_1_image['alt']; ?>">
                        <?php endif; ?>
    
                        <div>
                          <a href="<?php echo $portfolio_section_1_service_url; ?>" class="btn btn-info portfolio-section-1-button">
                          <img src="<?php echo $portfolio_section_button_image['url']; ?>" alt="<?php echo $portfolio_section_button_image['alt']; ?>" class=" portfolio-section-1-button-image">
                          <h3 class="portfolio-section-1-title"><?php echo $portfolio_section_1_title_text; ?></h3>
                          <h4 class="portfolio-section-1-description"><?php echo $portfolio_section_1_description_text; ?></h4>
                          </a>
                        </div>
                    </div>
                    
                </div>
            </div><!-- end col -->




             <div class="col-sm-4">
                <div class="portfolio-section-2">

                    <div class="portfolio-section-2-image">
                        <!-- If user uploaded image -->
                        <?php if(!empty($portfolio_section_2_image) ) : ?>
                            <img src="<?php echo $portfolio_section_2_image['url']; ?>" alt="<?php echo $portfolio_section_2_image['alt']; ?>">
                        <?php endif; ?>

                        <div>
                          <a href="<?php echo $portfolio_section_2_service_url; ?>" class="btn btn-info portfolio-section-2-button">
                          <img src="<?php echo $portfolio_section_button_image['url']; ?>" alt="<?php echo $portfolio_section_button_image['alt']; ?>" class=" portfolio-section-2-button-image">
                          <h3 class="portfolio-section-2-title"><?php echo $portfolio_section_2_title_text; ?></h3>
                          <h4 class="portfolio-section-2-description"><?php echo $portfolio_section_2_description_text; ?></h4>
                          </a>
                        </div>
                    </div>
                    
                </div>
            </div><!-- end col -->  



              <div class="col-sm-4">
                <div class="portfolio-section-3">

                    <div class="portfolio-section-3-image">
                        <!-- If user uploaded image -->
                        <?php if(!empty($portfolio_section_3_image) ) : ?>
                            <img src="<?php echo $portfolio_section_3_image['url']; ?>" alt="<?php echo $portfolio_section_3_image['alt']; ?>">
                        <?php endif; ?>

                        <div>
                          <a href="<?php echo $portfolio_section_3_service_url; ?>" class="btn btn-info portfolio-section-3-button">
                          <img src="<?php echo $portfolio_section_button_image['url']; ?>" alt="<?php echo $portfolio_section_button_image['alt']; ?>" class=" portfolio-section-3-button-image">
                          <h3 class="portfolio-section-3-title"><?php echo $portfolio_section_3_title_text; ?></h3>
                          <h4 class="portfolio-section-3-description"><?php echo $portfolio_section_3_description_text; ?></h4>
                          </a>
                        </div>
                    </div>
                    
                </div>
            </div><!-- end col -->    




            <div class="col-sm-4">
                <div class="portfolio-section-4">

                    <div class="portfolio-section-4-image">
                        <!-- If user uploaded image -->
                        <?php if(!empty($portfolio_section_4_image) ) : ?>
                            <img src="<?php echo $portfolio_section_4_image['url']; ?>" alt="<?php echo $portfolio_section_4_image['alt']; ?>">
                        <?php endif; ?>

                        <div>
                          <a href="<?php echo $portfolio_section_4_service_url; ?>" class="btn btn-info portfolio-section-4-button">
                          <img src="<?php echo $portfolio_section_button_image['url']; ?>" alt="<?php echo $portfolio_section_button_image['alt']; ?>" class=" portfolio-section-4-button-image">
                          <h3 class="portfolio-section-4-title"><?php echo $portfolio_section_4_title_text; ?></h3>
                          <h4 class="portfolio-section-4-description"><?php echo $portfolio_section_4_description_text; ?></h4>
                          </a>
                        </div>
                    </div>
                    
                </div>
            </div><!-- end col -->   



              <div class="col-sm-4">
                <div class="portfolio-section-5">

                    <div class="portfolio-section-5-image">
                        <!-- If user uploaded image -->
                        <?php if(!empty($portfolio_section_5_image) ) : ?>
                            <img src="<?php echo $portfolio_section_5_image['url']; ?>" alt="<?php echo $portfolio_section_5_image['alt']; ?>">
                        <?php endif; ?>

                        <div>
                          <a href="<?php echo $portfolio_section_5_service_url; ?>" class="btn btn-info portfolio-section-5-button">
                          <img src="<?php echo $portfolio_section_button_image['url']; ?>" alt="<?php echo $portfolio_section_button_image['alt']; ?>" class=" portfolio-section-5-button-image">
                          <h3 class="portfolio-section-5-title"><?php echo $portfolio_section_5_title_text; ?></h3>
                          <h4 class="portfolio-section-5-description"><?php echo $portfolio_section_5_description_text; ?></h4>
                          </a>
                        </div>
                    </div>
                    
                </div>
            </div><!-- end col -->   



               <div class="col-sm-4">
                <div class="portfolio-section-6">

                    <div class="portfolio-section-6-image">
                        <!-- If user uploaded image -->
                        <?php if(!empty($portfolio_section_6_image) ) : ?>
                            <img src="<?php echo $portfolio_section_6_image['url']; ?>" alt="<?php echo $portfolio_section_6_image['alt']; ?>">
                        <?php endif; ?>

                        <div>
                          <a href="<?php echo $portfolio_section_6_service_url; ?>" class="btn btn-info portfolio-section-6-button">
                          <img src="<?php echo $portfolio_section_button_image['url']; ?>" alt="<?php echo $portfolio_section_button_image['alt']; ?>" class=" portfolio-section-6-button-image">
                          <h3 class="portfolio-section-6-title"><?php echo $portfolio_section_6_title_text; ?></h3>
                          <h4 class="portfolio-section-6-description"><?php echo $portfolio_section_6_description_text; ?></h4>
                          </a>
                        </div>
                    </div>
                    
                </div>
            </div><!-- end col -->   


        </div><!-- row -->

    </div><!-- container -->
</section><!-- portfolio_section -->