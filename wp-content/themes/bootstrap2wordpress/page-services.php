<?php
/* Template Name: Services Page */

get_header();

$thumbnail_url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));

?>


<!-- FEATURE IMAGE
================================================== -->

<?php if( has_post_thumbnail()) {//check for feature image ?>

<section class="feature-image" style="background:url('<?php echo $thumbnail_url; ?>') no-repeat; background-size: cover;" data-type="background" data-speed="2">
    <h1 class="page-title"><?php the_title(); ?></h1>
</section>

<?php } else {// fallback image ?>

<section class="feature-image feature-image-default" data-type="background" data-speed="2">
    <h1 class="page-title"><?php the_title(); ?></h1>
</section>

<?php } ?>


<!-- MAIN CONTENT
================================================== -->
<div  id="services_section" data-type="background" data-speed="5">
<div class="container">
    <div class="row" id="primary">

        <div id="content" class="col-sm-12">
            
            
            

            <section class="main-content"> 
               
               
                <?php while ( have_posts()) : the_post(); ?>
                
                   
                <?php the_content(); ?>
                
                <?php endwhile; //end of the loop ?>
                
                <?php $loop = new WP_Query( array( 'post_type' => 'service', 'orderby' => 'post_id', 'order' => 'ASC')); ?>

                

                <div class="service-row clearfix">
                   
                <?php while ( $loop->have_posts()) : $loop->the_post(); ?>
                
                
                <?php
                $service_image = get_field("service_image");
                $service_recommendation_text = get_field("service_recommendation_text");
                $service_price = get_field("service_price");
                    $service_domain_text = get_field("service_domain_text");
                $service_hosting_text = get_field("service_hosting_text");
                    $service_blogging_website = get_field("service_blogging_website");
                    $spamware_protection = get_field("spamware_protection");
                    $service_crash_alert = get_field("service_crash_alert");
                $service_backups = get_field("service_backups");
                    $service_performance_monitoring_text = get_field("service_performance_monitoring_text");
                $service_wp_updates = get_field("service_wp_updates");
                $service_wp_lockdown = get_field("service_wp_lockdown");
                $service_malware = get_field("service_malware");
                $service_alerts = get_field("service_alerts");
                    $service_support_text = get_field("service_support_text");
                $service_protection = get_field("service_protection");
                $service_cleanup = get_field("service_cleanup");
                $service_url = get_field("service_url");
                $service_button_text = get_field("service_button_text");
                    $service_google_analytics_text = get_field("service_google_analytics_text");
                    $service_ssl_certificate_text = get_field("service_ssl_certificate_text");
                    $service_ecommerce_text = get_field("service_ecommerce_text");
                ?>
                
                
                
                
                <div class="service">
                   
                    <div>
                        <img src="<?php echo $service_image[url]; ?>" alt="<?php echo $service_image[alt]; ?>">
                    </div>
                    
                    <div>           
                        <h3 class=" services-bronze-recommendation"><?php echo $service_recommendation_text; ?></h3>
                    </div>
                         
                    <div>                  
                    <h3 class="services-bronze-title"><a href="<?php echo $service_url; ?>"><?php the_title(); ?></a></h3>
                    </div>
                    
                    <div>
                        <h4 class="services-bronze-description"><?php the_content(); ?></h4>
                    </div>
                    
                    <div>           
                        <h3 class=" services-bronze-price"><?php echo $service_price; ?></h3>
                    </div>
                    
                    <div>           
                        <h4 class="services-domain-text"><?php echo $service_domain_text; ?></h4>
                    </div>
                    
                    <div>           
                        <h4 class=" services-bronze-hosting"><?php echo $service_hosting_text; ?></h4>
                    </div>
                    
                    <div>           
                        <h4 class=" services-blogging-website"><?php echo $service_blogging_website; ?></h4>
                    </div>
                    
                    <div>           
                        <h4 class="spamware_protection"><?php echo $spamware_protection; ?></h4>
                    </div>
                    
                    <div>           
                        <h4 class="services-crash-alert"><?php echo $service_crash_alert; ?></h4>
                    </div>
                    
                    <div>           
                        <h4 class=" services-bronze-backups"><?php echo $service_backups; ?></h4>
                    </div>
                    
                    <div>           
                        <h4 class=" services-bronze-wp-updates"><?php echo $service_wp_updates; ?></h4>
                    </div>
                    
                   <div>           
                        <h4 class="services-support-text"><?php echo $service_support_text; ?></h4>
                    </div>
                    
                    <div>           
                        <h4 class="services-performance-monitoring-text"><?php echo $service_performance_monitoring_text; ?></h4>
                    </div>
                    
                     <div>           
                        <h4 class="services-google-analytics-text"><?php echo $service_google_analytics_text; ?></h4>
                    </div>
                    
                    <div>           
                        <h4 class="services-ssl-certificate-text"><?php echo $service_ssl_certificate_text; ?></h4>
                    </div>
                    
                    
                    
                    <div>           
                        <h4 class=" services-bronze-wp-lockdown"><?php echo $service_wp_lockdown; ?></h4>
                    </div>
                    
                     <div>       
                        <h4 class="services-bronze-malware"><?php echo $service_malware; ?></h4>
                    </div>
                    
                    <div>           
                        <h4 class="services-bronze-alerts"><?php echo $service_alerts; ?></h4>
                    </div>
                    
                    
                     <div>           
                        <h4 class="services-bronze-protection"><?php echo $service_protection; ?></h4>
                    </div>
                    
                    <div>           
                        <h4 class="services-bronze-cleanup"><?php echo $service_cleanup; ?></h4>
                    </div>
                    
                    <div>           
                        <h4 class="services-ecommerce-text"><?php echo $service_ecommerce_text; ?></h4>
                    </div>
                    
                    
                    
                    <div>
                    
                    <?php if( !empty($service_button_text)) : ?>
                    
                    </div>
                    
                    <div>
                    <a href="<?php echo $service_url; ?>" class="btn btn-success btn-lg services-bronze-button"><?php echo $service_button_text; ?></a>
                    
                    </div>
                    
                    
                    <?php endif; ?>
                </div><!-- service -->         
                
                              
                
                <?php endwhile; //end of the loop ?>
                        
                       
                </div><!-- service-row -->
            </section><!-- main-content -->

        </div><!-- content -->

    </div><!-- primary -->
</div><!-- container -->

</div>

<?php get_footer(); ?>