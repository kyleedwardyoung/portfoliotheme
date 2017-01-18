<?php






?>


<!-- FEATURE IMAGE
================================================== -->

<!--
<//?php if( has_post_thumbnail()) {//check for feature image ?>

<section class="feature-image" style="background:url('<//?php echo $thumbnail_url; ?>') no-repeat; background-size: cover;" data-type="background" data-speed="2">
    <h1 class="page-title"><//?php the_title(); ?></h1>
</section>

<//?php } else {// fallback image ?>

<section class="feature-image feature-image-default" data-type="background" data-speed="2">
    <h1 class="page-title"><//?php the_title(); ?></h1>
</section>

<//?php } ?>
-->


<!-- MAIN CONTENT
================================================== -->
<section id="purchase-choices">

    <div class="container">
       
       
       
       <p><?php echo $purchase_image; ?></p>
       <h2><?php echo $purchase_title; ?></h2>
			<p class="lead"><?php echo $purchase_body; ?></p>
       
       
       <div class="row">
                   
                   
                <?php while ( have_posts()) : the_post(); ?>
                
                    <?php the_content(); ?>
                
                <?php endwhile; //end of the loop ?>
                  
                  
                  
                   <?php $loop = new WP_Query( array( 'post_type' => 'purchase', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>
                   
                   <hr>
                  
                  <div class="purchase-row clearfix">
                   
                <?php while ( $loop->have_posts()) : $loop->the_post(); ?>
                  
                  
                  <?php 
                       
                    $purchase_section_image = get_field("purchase_section_image");
                    $purchase_section_recommendation = get_field("purchase_section_recommendation");
                    $purchase_section_price = get_field("purchase_section_price");
                    $purchase_section_url = get_field("purchase_section_url");
                    $purchase_section_add_button = get_field("purchase_section_add_button");
                    $purchase_section_hosting = get_field("purchase_section_hosting");
                    $purchase_section_backups = get_field("purchase_section_backups");
                    $purchase_section_wp_updates = get_field("purchase_section_wp_updates");
                    $purchase_section_wp_lockdown = get_field("purchase_section_wp_lockdown");
                    $purchase_section_malware = get_field("purchase_section_malware");
                    $purchase_section_alerts = get_field("purchase_section_alerts");
                    $purchase_section_protection = get_field("purchase_section_protection");
                    $purchase_section_cleanup = get_field("purchase_section_cleanup");
                    $purchase_section_button_text = get_field("purchase_section_button_text");
                    $purchase_section_image_2 = get_field("purchase_section_image_2");
                ?>
                  
                  
                  <div class="purchase">
                   
                    <div class="purchase-image">
                        <img src="<?php echo $purchase_section_image[url]; ?>" alt="<?php echo $purchase_section_image[alt]; ?>">
                    </div>
                    
                    <div>           
                        <h3 class=" purchase-recommendation"><?php echo $purchase_section_recommendation; ?></h3>
                    </div>
                    
                     <div>                  
                    <h3 class="purchase-title"><a href="<?php echo $purchase_section_url; ?>"><?php the_title(); ?></a></h3>
                    </div>
                    
                    <div>
                    <?php the_content(); ?>
                    </div>
                    
                    <div>           
                        <h3 class=" purchase-price"><?php echo $purchase_section_price; ?></h3>
                    </div>
                    
                    <div>           
                        <h3 class=" purchase-hosting"><?php echo $purchase_section_hosting; ?></h3>
                    </div>
                    
                    <div>           
                        <h3 class=" purchase-backups"><?php echo $purchase_section_backups; ?></h3>
                    </div>
                    
                     <div>           
                        <h3 class=" purchase-wp-updates"><?php echo $purchase_section_wp_updates; ?></h3>
                    </div>
                    
                    <div>           
                        <h3 class=" purchase-wp-lockdown"><?php echo $purchase_section_wp_lockdown; ?></h3>
                    </div>
                    
                    <div>           
                        <h3 class=" purchase-malware"><?php echo $purchase_section_malware; ?></h3>
                    </div>
                    
                    <div>           
                        <h3 class=" purchase-protection"><?php echo $purchase_section_protection; ?></h3>
                    </div>
                    
                    <div>           
                        <h3 class=" purchase-cleanup"><?php echo $purchase_section_cleanup; ?></h3>
                    </div>
                   
                    
                    
                     <div>
                    <a href="<?php echo $purchase_section_url; ?>" class="btn btn-success btn-lg service-button"><?php echo $purchase_section_button_text; ?></a>
                    
                    </div>
                  
                    
                    <div class="purchase-image-2">
                        <img src="<?php echo $purchase_section_image_2[url]; ?>" alt="<?php echo $purchase_section_image_2[alt]; ?>">
                    </div>
                     
                     
                      </div> <!--purchase-->
                      
                      <?php endwhile; //end of the loop ?>
                   </div> <!--purchase-row-->
                   
                  
                  
        </div><!--Row-->
                  
    </div> <!--container -->
                 
    
                  
</section>
                  
                  
                
                  
                  
                  

                   
                 
				

                   

                    


