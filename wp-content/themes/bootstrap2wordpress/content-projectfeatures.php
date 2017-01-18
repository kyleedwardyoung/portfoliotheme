<?php

$project_feature_title = get_field('project_feature_title');

$project_feature_body = get_field('project_feature_body');

?>




<!-- PROJECT FEATURES ============================================== -->
        <section id="project-features">
		<div class="container">
		
		
            <h1><?php echo $project_feature_title; ?></h1>
            
            <h2><?php echo $project_feature_body; ?></h2>
			
			<div class="row">
			
			
			<?php $loop = new WP_Query( array( 'post_type' => 'project_feature', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>
				
				<?php while( $loop->have_posts() ) : $loop->the_post(); ?>
				
				<div class="col-sm-4">
					
					<?php
                    
                    if ( has_post_thumbnail() ) {
                        the_post_thumbnail();
                    }
                    
                    
                    
                    ?>
                    
                    
                    <h2 class="project-features-title"><?php the_title(); ?></h2>
                    <p class="project-features-content"><?php the_content(); ?></p>
				</div><!-- col -->
				
				<?php endwhile; wp_reset_query(); ?>

				
			</div><!-- row -->
			
		</div><!-- container -->
	</section><!-- project-features -->