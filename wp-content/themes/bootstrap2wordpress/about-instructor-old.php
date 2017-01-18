<?php

$instructor_section_title   = get_field('about_instructor_section_title');
$instructor_name            = get_field('about_instructor_name');
$bio_excerpt                = get_field('about_bio_excerpt');
$full_bio                   = get_field('about_full_bio');
$twitter_username           = get_field('about_twitter_username');
$facebook_username          = get_field('about_facebook_username');
$google_plus_username       = get_field('about_google_plus_username');
$num_students               = get_field('about_num_students');
$num_reviews                = get_field('about_num_reviews');
$num_courses                = get_field('about_num_courses');

?>


<!--  INSTRUCTOR 
=====================================-->
<section id="instructor">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-md-6">
                <div class="row">
                    <div class="col-lg-8">
                        <h1><?php echo $instructor_section_title; ?> <small><br><?php echo $instructor_name; ?></small></h1>
                    </div><!-- end col -->

                   <div class="instructor-badges">
                    <div class="col-lg-4">
                        <?php if( !empty($twitter_username)) : ?>
                        <a href="https://twitter.com/<?php echo $twitter_username; ?>" class="badge social twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                        <?php endif; ?>

                        <?php if( !empty($facebook_username)) : ?>
                        <a href="https://facebook.com/<?php echo $facebook_username; ?>" class="badge social facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                        <?php endif; ?>

                        <?php if( !empty($google_plus_username)) : ?>
                        <a href="https://plus.google.com/<?php echo $google_plus_username; ?>" class="badge social gplus" target="_blank"><i class="fa fa-google-plus"></i></a>
                        <?php endif; ?>

                    </div><!-- end col -->
                    </div>
                </div><!-- row -->

                <h2 class="instructor-bio-excerpt"><?php echo $bio_excerpt; ?></h2>

                <?php echo $full_bio; ?>

                <hr>

                <h2>The Numbers <small>They Don't Lie</small></h2>
                <div class="row">
                    <div class="col-xs-4">
                        <div class="num">
                            <div class="num-content">
                                <?php echo $num_students; ?> <span>Websites</span>
                            </div><!-- num-content -->
                        </div><!-- num -->
                    </div><!-- end col -->

                    <div class="col-xs-4">
                        <div class="num">
                            <div class="num-content">
                                <?php echo $num_reviews; ?> <span>Reviews</span>
                            </div><!-- num-content -->
                        </div><!-- num -->
                    </div><!-- end col -->

                    <div class="col-xs-4">
                        <div class="num">
                            <div class="num-content">
                                <?php echo $num_courses; ?> <span>Blog Posts</span>
                            </div><!-- num-content -->
                        </div><!-- num -->
                    </div><!-- end col -->
                </div><!-- row -->

            </div><!-- end col -->
        </div><!-- row -->
    </div><!-- container -->
</section><!-- instructor -->