<?php 


$blog_section_title                    = get_field('blog_section_title');
$blog_section_description              = get_field('blog_section_description');

$blog_section_1_image                  = get_field('blog_section_1_image');
$blog_section_1_with_title                  = get_field('blog_section_1_with_title');
$blog_section_1_description            = get_field('blog_section_1_description');
$blog_section_1_button                 = get_field('blog_section_1_button');
$blog_section_1_url                    = get_field('blog_section_1_url');


$blog_section_2_image                  = get_field('blog_section_2_image');
$blog_section_2_title                  = get_field('blog_section_2_title');
$blog_section_2_description            = get_field('blog_section_2_description');
$blog_section_2_button                 = get_field('blog_section_2_button');
$blog_section_2_url                    = get_field('blog_section_2_url');



$blog_section_3_image                  = get_field('blog_section_3_image');
$blog_section_3_title                  = get_field('blog_section_3_title');
$blog_section_3_description            = get_field('blog_section_3_description');
$blog_section_3_button                 = get_field('blog_section_3_button');
$blog_section_3_url                    = get_field('blog_section_3_url');



?>
 

 
 
 <section  data-type="background">
  <div class="container">

    <div class="blog-header">


    <h2><?php echo $blog_section_title; ?></h2>

    </div><!-- section-header -->

    
    <p class="section-description"><?php echo $blog_section_description; ?></p>
      
      
      
          <div class="row">
           <div class="col-sm-4">
        
   
                <div class="blog-section-1">
            
                 <!-- If user uploaded image -->
                 
              
                    <div class="blog-section-1-image">
               
               
                        <?php if(!empty($blog_section_1_image) ) : ?>
                            <img src="<?php echo $blog_section_1_image['url']; ?>" alt="<?php echo $blog_section_1_image['alt']; ?>">
                        <?php endif; ?>
                    </div>
                

                    <div class="blog-section-1-title">
                    <h3><?php echo $blog_section_1_with_title; ?></h3>
                    </div>
                
                
                
                
                    <div class="blog-section-1-description">
                     <h4><?php echo $blog_section_1_description; ?></h4>
                    </div>

                    <div>
                  <a href="<?php echo $blog_section_1_url; ?>" class="btn btn-lg blog-1-button"><h3><?php echo $blog_section_1_button; ?></h3></a>
                    </div>

                </div>
            </div><!-- end col -->
            
            
            
            <div class="col-sm-4">
        
   
                <div class="blog-section-2">
            
                 <!-- If user uploaded image -->
                 
              
                    <div class="blog-section-2-image">
               
               
                        <?php if(!empty($blog_section_2_image) ) : ?>
                            <img src="<?php echo $blog_section_2_image['url']; ?>" alt="<?php echo $blog_section_2_image['alt']; ?>">
                        <?php endif; ?>
                    </div>
                

                    <div class="blog-section-2-title">
                    <h3><?php echo $blog_section_2_title; ?></h3>
                    </div>
                
                
                
                
                    <div class="blog-section-2-description">
                     <h4><?php echo $blog_section_2_description; ?></h4>
                    </div>

                    <div>
                  <a href="<?php echo $blog_section_2_url; ?>" class="btn btn-lg blog-2-button"><h3><?php echo $blog_section_2_button; ?></h3></a>
                    </div>

                </div>
            </div><!-- end col -->
            
            
            
            
            
            
            <div class="col-sm-4">
        
   
                <div class="blog-section-3">
            
                 <!-- If user uploaded image -->
                 
              
                    <div class="blog-section-3-image">
               
               
                        <?php if(!empty($blog_section_3_image) ) : ?>
                            <img src="<?php echo $blog_section_3_image['url']; ?>" alt="<?php echo $blog_section_3_image['alt']; ?>">
                        <?php endif; ?>
                    </div>
                

                    <div class="blog-section-3-title">
                    <h3><?php echo $blog_section_3_title; ?></h3>
                    </div>
                
                
                
                
                    <div class="blog-section-3-description">
                     <h4><?php echo $blog_section_3_description; ?></h4>
                    </div>

                    <div>
                  <a href="<?php echo $blog_section_3_url; ?>" class="btn btn-lg blog-3-button"><h3><?php echo $blog_section_3_button; ?></h3></a>
                    </div>

                </div>
            </div><!-- end col -->
            
        </div>
    </div>
</section>