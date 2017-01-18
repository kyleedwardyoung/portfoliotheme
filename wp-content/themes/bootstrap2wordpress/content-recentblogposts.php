<?php

$project_feature_title      = get_field('recentblogposts_title');
$project_feature_body       = get_field('recentblogposts_body');

?>


<!--  RECENTBLOGPOSTS
=====================================-->
<section id="recentblogposts">
    <div class="container">

        <!--// Show Title and Feature Body Text-->
        <h1><?php echo $project_feature_title; ?></h1>
        <h2><?php echo $project_feature_body; ?></h2>

        <!--// Define our WP Query Parameters-->
        <?php $the_query = new WP_Query( 'posts_per_page=5' ); ?>

        <!--// Start our WP Query-->
        <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

        <div class="row">
            <div class="col-sm-2 recentblogposts-image">
                <!--// Display the Post Image -->
                <!--// Medium resolution (300 x 300 max height 300px)-->
                <?php echo get_the_post_thumbnail($post_id, 'thumbnail' ); ?>
            </div>

            <div class="col-sm-10">
                <!--// Display the Post Title with Hyperlink-->
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                
                <!--// Display the Post Excerpt -->
                <p><?php the_excerpt(__('(more…)')); ?></p>
            </div>
            
        </div> <!--// Row -->
        <!--// Repeat the process and reset once it hits the limit-->
        <?php
        endwhile;
        // Restore original Post Data 
        wp_reset_postdata();
        ?>

    </div><!-- container -->
</section><!-- project-features -->