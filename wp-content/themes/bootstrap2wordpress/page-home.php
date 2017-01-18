<?php
/*
	Template Name: Home Page	
*/

//Custom Fields



// Advanced custom fields


get_header(); ?>


 
 
	<?php get_template_part('content', 'hero'); ?>
       
        
	<?php get_template_part('content', 'optin'); ?>
	
	<?php get_template_part('content', 'projectfeatures'); ?>

	
	 <?php get_template_part('content', 'services'); ?>
	 
	 
	
	<?php get_template_part('content',  'servicescards'); ?>
	
	<?php get_template_part('content',  'portfolio'); ?>
	
	<?php get_template_part('content', 'recentblogposts'); ?>
	
	<?//php get_template_part('content', 'blog'); ?>
	
<?//php get_template_part('content', 'benefits'); ?>
	
	
	
    <?//php get_template_part('content', 'coursefeatures'); ?>
       
   
       
    <?//php get_template_part('content', 'featurette'); ?>
       
<?php get_template_part('content', 'instructor'); ?>
       
    <?php get_template_part('content', 'testimonials'); ?>
      
      
      <?//php get_template_part('content', 'purchaseoptions'); ?>
      
      
     
    
<?php get_footer(); ?>