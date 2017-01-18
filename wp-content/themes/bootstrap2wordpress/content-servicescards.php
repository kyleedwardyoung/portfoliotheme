<?php



$services_sectioncard_title                         = get_field('services_sectioncard_title');
$services_sectioncard_description                          = get_field('services_sectioncard_description');

$services_sectioncard_1_image                  = get_field('services_sectioncard_1_image');
$services_sectioncard_1_title_text             = get_field('services_sectioncard_1_title_text');
$services_sectioncard_1_description_text       = get_field('services_sectioncard_1_description_text');
$services_sectioncard_1_button_text            = get_field('services_sectioncard_1_button_text');
$services_sectioncard_1_service_url            = get_field('services_sectioncard_1_service_url');

$services_sectioncard_2_image                  = get_field('services_sectioncard_2_image');
$services_sectioncard_2_title_text             = get_field('services_sectioncard_2_title_text');
$services_sectioncard_2_description_text       = get_field('services_sectioncard_2_description_text');
$services_sectioncard_2_button_text            = get_field('services_sectioncard_2_button_text');
$services_sectioncard_2_service_url            = get_field('services_sectioncard_2_service_url');

$services_sectioncard_3_image                  = get_field('services_sectioncard_3_image');
$services_sectioncard_3_title_text             = get_field('services_sectioncard_3_title_text');
$services_sectioncard_3_description_text       = get_field('services_sectioncard_3_description_text');
$services_sectioncard_3_button_text            = get_field('services_sectioncard_3_button_text');
$services_sectioncard_3_service_url            = get_field('services_sectioncard_3_service_url');


$services_sectioncard_4_image                  = get_field('services_sectioncard_4_image');
$services_sectioncard_4_title_text             = get_field('services_sectioncard_4_title_text');
$services_sectioncard_4_description_text       = get_field('services_sectioncard_4_description_text');
$services_sectioncard_4_button_text            = get_field('services_sectioncard_4_button_text');
$services_sectioncard_4_service_url            = get_field('services_sectioncard_4_service_url');


$services_sectioncard_5_image                  = get_field('services_sectioncard_5_image');
$services_sectioncard_5_title_text             = get_field('services_sectioncard_5_title_text');
$services_sectioncard_5_description_text       = get_field('services_sectioncard_5_description_text');
$services_sectioncard_5_button_text            = get_field('services_sectioncard_5_button_text');
$services_sectioncard_5_service_url            = get_field('services_sectioncard_5_service_url');


$services_sectioncard_6_image                  = get_field('services_sectioncard_6_image');
$services_sectioncard_6_title_text             = get_field('services_sectioncard_6_title_text');
$services_sectioncard_6_description_text       = get_field('services_sectioncard_6_description_text');
$services_sectioncard_6_button_text            = get_field('services_sectioncard_6_button_text');
$services_sectioncard_6_service_url            = get_field('services_sectioncard_6_service_url');


$services_sectioncard_7_image                  = get_field('services_sectioncard_7_image');
$services_sectioncard_7_title_text             = get_field('services_sectioncard_7_title_text');
$services_sectioncard_7_description_text       = get_field('services_sectioncard_7_description_text');
$services_sectioncard_7_button_text            = get_field('services_sectioncard_7_button_text');
$services_sectioncard_7_service_url            = get_field('services_sectioncard_7_service_url');

$services_sectioncard_8_image                  = get_field('services_sectioncard_8_image');
$services_sectioncard_8_title_text             = get_field('services_sectioncard_8_title_text');
$services_sectioncard_8_description_text       = get_field('services_sectioncard_8_description_text');
$services_sectioncard_8_button_text            = get_field('services_sectioncard_8_button_text');
$services_sectioncard_8_service_url            = get_field('services_sectioncard_8_service_url');



?>




<!--  SERVICES CARDS SECTION
=====================================-->
<section  data-type="background">
  <div class="container">

    <div>


    <h1 class="sectioncard-header"><?php echo $services_sectioncard_title; ?></h1>

    </div><!-- section-header -->

    
    <h2 class="sectioncard-description"><?php echo $services_sectioncard_description; ?></h2>
    
    
    <div class="row">
       
        <div class="col-sm-4">
        
   
            <div class="services-sectioncard-1">
            
                 <!-- If user uploaded image -->
             
                <?php if(!empty($services_sectioncard_1_image) ) : ?>
                    <img src="<?php echo $services_sectioncard_1_image['url']; ?>" alt="<?php echo $services_sectioncard_1_image['alt']; ?>">
                <?php endif; ?>

            </div>
               
                <div>
                    <h3 class="services-sectioncard-1-title"><?php echo $services_sectioncard_1_title_text; ?></h3>
                </div>

                <div>
                     <h4 class="services-sectioncard-1-description"><?php echo $services_sectioncard_1_description_text; ?></h4>
                </div>

                <div>
                  <a href="<?php echo $services_sectioncard_1_service_url; ?>" class="btn btn-success btn-lg servicecard-1-button"><h3><?php echo $services_sectioncard_1_button_text; ?></h3></a>
                </div>

        
        </div><!-- end col -->

       
        <div class="col-sm-4">
    <!-- If user uploaded image -->
           
           <div class="services-sectioncard-2">
            <?php if(!empty($services_sectioncard_2_image) ) : ?>
                <img src="<?php echo $services_sectioncard_2_image['url']; ?>" alt="<?php echo $services_sectioncard_2_image['alt']; ?>">
            <?php endif; ?>
            </div>
            
            <div>
                <h3 class="services-sectioncard-2-title"><?php echo $services_sectioncard_2_title_text; ?></h3>
                
               </div>
                
            <div>
               
                <h4 class="services-sectioncard-2-description"><?php echo $services_sectioncard_2_description_text; ?></h4>
                
            </div>
            
             <div>
             
              <a href="<?php echo $services_sectioncard_2_service_url; ?>" class="btn btn-success btn-lg servicecard-2-button"><h3><?php echo $services_sectioncard_2_button_text; ?></h3></a>
              
            </div>
            
            
            
            
           
            
        </div><!-- end col -->

        <div class="col-sm-4">
    <!-- If user uploaded image -->
           
           <div class="services-sectioncard-3">
           
            <?php if(!empty($services_sectioncard_3_image) ) : ?>
                <img src="<?php echo $services_sectioncard_3_image['url']; ?>" alt="<?php echo $services_sectioncard_3_image['alt']; ?>">
            <?php endif; ?>
            </div>
            
            <div>
                <h3 class="services-sectioncard-3-title"><?php echo $services_sectioncard_3_title_text; ?></h3>
               </div>
                
            <div>
               
                <h4 class="services-sectioncard-3-description"><?php echo $services_sectioncard_3_description_text; ?></h4>
                
            </div>
            
             <div>
              <a href="<?php echo $services_sectioncard_3_service_url; ?>" class="btn btn-success btn-lg servicecard-3-button"><h3><?php echo $services_sectioncard_3_button_text; ?></h3></a>
            </div>
            
            
            
            
           
                        
        </div><!-- end col -->
        
        
        <div class="col-sm-4">
    <!-- If user uploaded image -->
           
           <div class="services-sectioncard-4">
           
            <?php if(!empty($services_sectioncard_4_image) ) : ?>
                <img src="<?php echo $services_sectioncard_4_image['url']; ?>" alt="<?php echo $services_sectioncard_4_image['alt']; ?>">
            <?php endif; ?>
            
            </div>
            
            <div>
                <h3 class="services-sectioncard-4-title"><?php echo $services_sectioncard_4_title_text; ?></h3>
               </div>
                
            <div>
               
                <h4 class="services-sectioncard-4-description"><?php echo $services_sectioncard_4_description_text; ?></h4>
                
            </div>
            
             <div>
              <a href="<?php echo $services_sectioncard_4_service_url; ?>" class="btn btn-success btn-lg servicecard-4-button"><h3><?php echo $services_sectioncard_4_button_text; ?></h3></a>
            </div>
            
            
            
            
           
                        
        </div><!-- end col -->
        
        
        
        <div class="col-sm-4">
    <!-- If user uploaded image -->
           
           <div class="services-sectioncard-5">
           
            <?php if(!empty($services_sectioncard_5_image) ) : ?>
                <img src="<?php echo $services_sectioncard_5_image['url']; ?>" alt="<?php echo $services_sectioncard_5_image['alt']; ?>">
            <?php endif; ?>
            
            </div>
            
            <div>
                <h3 class="services-sectioncard-5-title"><?php echo $services_sectioncard_5_title_text; ?></h3>
               </div>
                
            <div>
               
                <h4 class="services-sectioncard-5-description"><?php echo $services_sectioncard_5_description_text; ?></h4>
                
            </div>
            
             <div>
              <a href="<?php echo $services_sectioncard_5_service_url; ?>" class="btn btn-success btn-lg servicecard-5-button"><h3><?php echo $services_sectioncard_5_button_text; ?></h3></a>
            </div>
            
            
            
            
           
                        
        </div><!-- end col -->
        
        
        
        <div class="col-sm-4">
    <!-- If user uploaded image -->
           
           <div class="services-sectioncard-6">
           
            <?php if(!empty($services_sectioncard_6_image) ) : ?>
                <img src="<?php echo $services_sectioncard_6_image['url']; ?>" alt="<?php echo $services_sectioncard_6_image['alt']; ?>">
            <?php endif; ?>
            
            </div>
            
            <div>
                <h3 class="services-sectioncard-6-title"><?php echo $services_sectioncard_6_title_text; ?></h3>
               </div>
                
            <div>
               
                <h4 class="services-sectioncard-6-description"><?php echo $services_sectioncard_6_description_text; ?></h4>
                
            </div>
            
             <div>
              <a href="<?php echo $services_sectioncard_6_service_url; ?>" class="btn btn-success btn-lg servicecard-6-button"><h3><?php echo $services_sectioncard_6_button_text; ?></h3></a>
            </div>
            
            
            
            
           
                        
        </div><!-- end col -->
        
        
        
        <div class="col-sm-4">
    <!-- If user uploaded image -->
           
           <div class="services-sectioncard-7">
           
            <?php if(!empty($services_sectioncard_7_image) ) : ?>
                <img src="<?php echo $services_sectioncard_7_image['url']; ?>" alt="<?php echo $services_sectioncard_7_image['alt']; ?>">
            <?php endif; ?>
            
            </div>
            
            <div>
                <h3 class="services-sectioncard-7-title"><?php echo $services_sectioncard_7_title_text; ?></h3>
               </div>
                
            <div>
               
                <h4 class="services-sectioncard-7-description"><?php echo $services_sectioncard_7_description_text; ?></h4>
                
            </div>
            
             <div>
              <a href="<?php echo $services_sectioncard_7_service_url; ?>" class="btn btn-success btn-lg servicecard-7-button"><h3><?php echo $services_sectioncard_7_button_text; ?></h3></a>
            </div>
            
            
            
            
           
                        
        </div><!-- end col -->
        
        
        
        <div class="col-sm-4">
    <!-- If user uploaded image -->
           
           <div class="services-sectioncard-8">
           
            <?php if(!empty($services_sectioncard_8_image) ) : ?>
                <img src="<?php echo $services_sectioncard_8_image['url']; ?>" alt="<?php echo $services_sectioncard_8_image['alt']; ?>">
            <?php endif; ?>
            
            </div>
            
            <div>
                <h3 class="services-sectioncard-8-title"><?php echo $services_sectioncard_8_title_text; ?></h3>
               </div>
                
            <div>
               
                <h4 class="services-sectioncard-8-description"><?php echo $services_sectioncard_8_description_text; ?></h4>
                
            </div>
            
             <div>
              <a href="<?php echo $services_sectioncard_8_service_url; ?>" class="btn btn-success btn-lg servicecard-8-button"><h3><?php echo $services_sectioncard_8_button_text; ?></h3></a>
            </div>
            
            
            
            
           
                        
        </div><!-- end col -->
    </div><!-- row -->

    </div><!-- container -->
</section><!-- services_section -->