




<?php



$thumbnail_url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));

$services_section_image                         = get_field('services_section_image');
$services_section_title                         = get_field('services_section_title');
$services_section_desc                          = get_field('services_section_description');

$services_section_bronze_image                  = get_field('services_section_bronze_image');
$services_section_bronze_recommendation_text    = get_field('services_section_bronze_recommendation_text');
$services_section_bronze_title_text             = get_field('services_section_bronze_title_text');
$services_section_bronze_description_text       = get_field('services_section_bronze_description_text');
$services_section_bronze_price_text             = get_field('services_section_bronze_price_text');
$services_section_bronze_hosting_text           = get_field('services_section_bronze_hosting_text');
$services_section_bronze_backups_text           = get_field('services_section_bronze_backups_text');
$services_section_bronze_wp_updates_text        = get_field('services_section_bronze_wp_updates_text');
$services_section_bronze_wp_lockdown_text       = get_field('services_section_bronze_wp_lockdown_text');
$services_section_bronze_malware_text           = get_field('services_section_bronze_malware_text');
$services_section_bronze_wp_lockdown_text       = get_field('services_section_bronze_wp_lockdown_text');
$services_section_bronze_alerts_text            = get_field('services_section_bronze_alerts_text');
$services_section_bronze_protection_text        = get_field('services_section_bronze_protection_text');
$services_section_bronze_cleanup_text           = get_field('services_section_bronze_cleanup_text');
$services_section_bronze_button_text            = get_field('services_section_bronze_button_text');
$services_section_bronze_service_url            = get_field('services_section_bronze_service_url');


$services_section_silver_image                  = get_field('services_section_silver_image');
$services_section_silver_recommendation_text    = get_field('services_section_silver_recommendation_text');
$services_section_silver_title_text             = get_field('services_section_silver_title_text');
$services_section_silver_description_text       = get_field('services_section_silver_description_text');
$services_section_silver_price_text             = get_field('services_section_silver_price_text');
$services_section_silver_hosting_text           = get_field('services_section_silver_hosting_text');
$services_section_silver_backups_text           = get_field('services_section_silver_backups_text');
$services_section_silver_wp_updates_text        = get_field('services_section_silver_wp_updates_text');
$services_section_silver_wp_lockdown_text       = get_field('services_section_silver_wp_lockdown_text');
$services_section_silver_malware_text           = get_field('services_section_silver_malware_text');
$services_section_silver_wp_lockdown_text       = get_field('services_section_silver_wp_lockdown_text');
$services_section_silver_alerts_text            = get_field('services_section_silver_alerts_text');
$services_section_silver_protection_text        = get_field('services_section_silver_protection_text');
$services_section_silver_cleanup_text           = get_field('services_section_silver_cleanup_text');
$services_section_silver_button_text            = get_field('services_section_silver_button_text');
$services_section_silver_service_url            = get_field('services_section_silver_service_url');

$services_section_gold_image                    = get_field('services_section_gold_image');
$services_section_gold_recommendation_text      = get_field('services_section_gold_recommendation_text');
$services_section_gold_title_text               = get_field('services_section_gold_title_text');
$services_section_gold_description_text         = get_field('services_section_gold_description_text');
$services_section_gold_price_text               = get_field('services_section_gold_price_text');
$services_section_gold_hosting_text             = get_field('services_section_gold_hosting_text');
$services_section_gold_backups_text             = get_field('services_section_gold_backups_text');
$services_section_gold_wp_updates_text          = get_field('services_section_gold_wp_updates_text');
$services_section_gold_wp_lockdown_text         = get_field('services_section_gold_wp_lockdown_text');
$services_section_gold_malware_text             = get_field('services_section_gold_malware_text');
$services_section_gold_wp_lockdown_text         = get_field('services_section_gold_wp_lockdown_text');
$services_section_gold_alerts_text              = get_field('services_section_bronze_alerts_text');
$services_section_gold_protection_text          = get_field('services_section_gold_protection_text');
$services_section_gold_cleanup_text             = get_field('services_section_gold_cleanup_text');
$services_section_gold_button_text              = get_field('services_section_gold_button_text');
$services_section_gold_service_url              = get_field('services_section_gold_service_url');

?>




<!--  SERVICES SECTION
=====================================-->
<section id="services_section" data-type="background" data-speed="5">
  <div class="container">

    <div class="section-header">

    <!-- If user uploaded image -->
    <?php if(!empty($services_section_image) ) : ?>
        <img src="<?php echo $services_section_image['url']; ?>" alt="<?php echo $services_section_image['alt']; ?>">
    <?php endif; ?>

    <h1 class="services-section-title"><?php echo $services_section_title; ?></h1>
        
    </div><!-- section-header -->

    
      <h2 class="services-section-description"><?php echo $services_section_desc; ?></h2>
    
    
    <div class="row">
        <div class="col-sm-4">
        <div class="services-section-bronze-image">
    <!-- If user uploaded image -->
            <?php if(!empty($services_section_bronze_image) ) : ?>
                <img src="<?php echo $services_section_bronze_image['url']; ?>" alt="<?php echo $services_section_bronze_image['alt']; ?>">
            <?php endif; ?>
            
            </div>
            
            <div>
                <h3 class="services-section-bronze-recommendation"><?php echo $services_section_bronze_recommendation_text; ?></h3>
            </div>
            
            <div>
                <h3 class="services-section-bronze-title"><?php echo $services_section_bronze_title_text; ?></h3>
            </div>
            
            <div>
                <h3 class="services-section-bronze-description"><?php echo $services_section_bronze_description_text; ?></h3>
            </div>
            
            <div>
                <h3 class="services-section-bronze-price"><?php echo $services_section_bronze_price_text; ?></h3>
            </div>
            
            <div>
                <h3 class="services-section-bronze-hosting"><?php echo $services_section_bronze_hosting_text; ?></h3>
            </div>
            
            <div>
                <h3 class="services-section-bronze-backups"><?php echo $services_section_bronze_backups_text; ?></h3>
            </div>
            
            <div>
                <h3 class="services-section-bronze-wp-updates"><?php echo $services_section_bronze_wp_updates_text; ?></h3>
            </div>
            
            <div>
                <h3 class="services-section-bronze-wp-lockdown"><?php echo $services_section_bronze_wp_lockdown_text; ?></h3>
            </div>
            
            <div>
                <h3 class="services-section-bronze-malware"><?php echo $services_section_bronze_malware_text; ?></h3>
            </div>
            
            <div>
                <h3 class="services-section-bronze-alerts"><?php echo $services_section_bronze_alerts_text; ?></h3>
            </div>
            
            <div>
                <h3 class="services-section-bronze-protection"><?php echo $services_section_bronze_protection_text; ?></h3>
            </div>
            
            <div>
                <h3 class="services-section-bronze-cleanup"><?php echo $services_section_bronze_cleanup_text; ?></h3>
            </div>
            
            <div>
              <a href="<?php echo $services_section_bronze_service_url; ?>" class="btn btn-success btn-lg services-section-bronze-button"><h3><?php echo $services_section_bronze_button_text; ?></h3></a>
            </div>
                        
        </div><!-- end col -->

       
        <div class="col-sm-4">
        <div class="services-section-silver-image">
    <!-- If user uploaded image -->
            <?php if(!empty($services_section_silver_image) ) : ?>
                <img src="<?php echo $services_section_silver_image['url']; ?>" alt="<?php echo $services_section_silver_image['alt']; ?>">
            <?php endif; ?>
            </div>
            <div>
                <h3 class="services-section-silver-recommendation"><?php echo $services_section_silver_recommendation_text; ?></h3>
            </div>
            
            <div>
                <h3 class="services-section-silver-title"><?php echo $services_section_silver_title_text; ?></h3>
            </div>
            
            <div>
                <h3 class="services-section-silver-description"><?php echo $services_section_silver_description_text; ?></h3>
            </div>
            
            <div>
                <h3 class="services-section-silver-price"><?php echo $services_section_silver_price_text; ?></h3>
            </div>
            
            <div>
                <h3 class="services-section-silver-hosting"><?php echo $services_section_silver_hosting_text; ?></h3>
            </div>
            
            <div>
                <h3 class="services-section-silver-backups"><?php echo $services_section_silver_backups_text; ?></h3>
            </div>
            
            <div>
                <h3 class="services-section-silver-wp-updates"><?php echo $services_section_silver_wp_updates_text; ?></h3>
            </div>
            
            <div>
                <h3 class="services-section-silver-wp-lockdown"><?php echo $services_section_silver_wp_lockdown_text; ?></h3>
            </div>
            
            <div>
                <h3 class="services-section-silver-malware"><?php echo $services_section_silver_malware_text; ?></h3>
            </div>
            
            <div>
                <h3 class="services-section-silver-alerts"><?php echo $services_section_silver_alerts_text; ?></h3>
            </div>
            
            <div>
                <h3 class="services-section-silver-protection"><?php echo $services_section_silver_protection_text; ?></h3>
            </div>
            
            <div>
                <h3 class="services-section-silver-cleanup"><?php echo $services_section_silver_cleanup_text; ?></h3>
            </div>
            
            <div>
              <a href="<?php echo $services_section_silver_service_url; ?>" class="btn btn-success btn-lg services-section-silver-button"><h3><?php echo $services_section_silver_button_text; ?></h3></a>
            </div>
            
        </div><!-- end col -->

        <div class="col-sm-4">
        
        <div class="services-section-gold-image">
    <!-- If user uploaded image -->
            <?php if(!empty($services_section_gold_image) ) : ?>
                <img src="<?php echo $services_section_gold_image['url']; ?>" alt="<?php echo $services_section_gold_image['alt']; ?>">
            <?php endif; ?>
            </div>
            
            <div>
                <h3 class="services-section-gold-recommendation"><?php echo $services_section_gold_recommendation_text; ?></h3>
            </div>
            
            <div>
            <h3 class="services-section-gold-title"><?php echo $services_section_gold_title_text; ?></h3>
            </div>
            
            <div>
                <h3 class="services-section-gold-description"><?php echo $services_section_gold_description_text; ?></h3>
            </div>
            
            <div>
                <h3 class="services-section-gold-price"><?php echo $services_section_gold_price_text; ?></h3>
            </div>
            
            <div>
                <h3 class="services-section-gold-hosting"><?php echo $services_section_gold_hosting_text; ?></h3>
            </div>
            
            <div>
                <h3 class="services-section-gold-backups"><?php echo $services_section_gold_backups_text; ?></h3>
            </div>
            
            <div>
                <h3 class="services-section-gold-wp-updates"><?php echo $services_section_gold_wp_updates_text; ?></h3>
            </div>
            
            <div>
                <h3 class="services-section-gold-wp-lockdown"><?php echo $services_section_gold_wp_lockdown_text; ?></h3>
            </div>
            
            <div>
                <h3 class="services-section-gold-malware"><?php echo $services_section_gold_malware_text; ?></h3>
            </div>
            
            <div>
                <h3 class="services-section-gold-alerts"><?php echo $services_section_gold_alerts_text; ?></h3>
            </div>
            
            <div>
                <h3 class="services-section-gold-protection"><?php echo $services_section_gold_protection_text; ?></h3>
            </div>
            
            <div>
                <h3 class="services-section-gold-cleanup"><?php echo $services_section_gold_cleanup_text; ?></h3>
            </div>
            
            <div>
              <a href="<?php echo $services_section_gold_service_url; ?>" class="btn btn-success btn-lg services-section-gold-button"><h3><?php echo $services_section_gold_button_text; ?></h3></a>
            </div>
                        
        </div><!-- end col -->
    </div><!-- row -->

    </div><!-- container -->
</section><!-- services_section -->