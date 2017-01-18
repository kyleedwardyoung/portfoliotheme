<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootstrap_to_WordPress
 */

?>



<?php wp_footer(); ?>



<!-- SIGN UP SECTION ============================================== -->
        <section id="signup" data-type="background" data-speed="4">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-sm-offset-3">
					<h1>Ready to have an <strong>Awesome Website</strong>?</h1>
					<p><a href="" class="btn btn-lg btn-block btn-success">Yes, sign me up!</a></p>
				</div> <!--end col -->
			</div> <!--row -->
		</div> <!--container -->
	</section> <!--signup -->
        
        <!-- FOOTER ============================================== -->
        <footer>
        
        
		<div class="container">
		
		
		<div class="navbar navbar-inverse navbar-fixed-bottom" role="navigation">
		
		
		
		<div class="facebook"></div>
		
		<div class="twitter"></div>
		
		<div class="linkedin"></div>
            
<!--
			<div class="col-sm-3">
				<p><a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo.png" alt="Bootstrap to WordPress"></a></p>
			</div> end col 
-->
			<div class="col-sm-12">
				<?php
						wp_nav_menu( array(
							
							'theme_location'	=> 'footer',
							'container'			=> 'nav',
							
							'menu_class'		=> 'list-unstyled list-inline'
							
						) );
					?>
            </div>
			</div><!-- end col -->
<!--
			<div class="col-sm-3">
				<p class="pull-right"><?php bloginfo('name'); ?> &copy; <?php echo date('Y'); ?> | <?php the_author_link(); ?></p>
			</div> end col 
-->
		</div> <!--container -->
            
	</footer>

        
        <!-- MODAL ============================================== -->
        <div class="modal fade" id="myModal">
		<div class="modal-dialog">
			<div class="modal-content">
			
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
					<h4 class="modal-title" id="myModalLabel"><i class="fa fa-envelope"></i> Subscribe to our Mailing List</h4>
				</div> <!--modal-header -->
				
				<div class="modal-body">
					<p>Simply enter your name and email! As a thank you for joining us, we're going to give you one of our best-selling courses, <em>for free!</em></p>
					
					<form class="form-inline" role="form">
						<div class="form-group">
							<label class="sr-only" for="subscribe-name">Your first name</label>
							<input type="text" class="form-control" id="subscribe-name" placeholder="Your first name">
						</div>
						<div class="form-group">
							<label class="sr-only" for="subscribe-email">and your email</label>
							<input type="text" class="form-control" id="subscribe-email" placeholder="and your email">
						</div>
						<input type="submit" class="btn btn-danger" value="Subscribe!">
					</form>
					
					<hr>
					
					<p><small>By providing your email you consent to receiving occasional promotional emails &amp; newsletters. <br>No Spam. Just good stuff. We respect your privacy &amp; you may unsubscribe at any time.</small></p>
				</div><!-- modal-body -->
				
			</div><!-- modal-content -->
		</div><!-- modal-dialog -->
	</div> <!--modal -->

<!-- BOOTSTRAP CORE JAVASCRIPT Placed at the end of the document so the pages load faster!============================================== -->
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script src="assets/js/jquery-3.1.0.min.js"></script>

<!--        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>-->
        <script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery-2.1.1.min.js"></script>
        <script src="assets/js/jquery-2.1.1.min.js"></script>

        
        <script src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap.min.js"></script>
        
        <script src="<?php bloginfo('template_directory'); ?>/assets/js/main.js"></script>
        
        
        
<!--         TypeKit Fonts -->
        
        <script type="text/javascript" src="//use.typekit.net/gla7wnd.js"></script>
	   <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
    











<!--

<div id="wrap">
<div id="main" class="sumome-share-client-animated sumome-share-client-share sumome-share-client-share-share sumome-share-client-count" data-sumome-share="share" style="background-color: rgb(255, 255, 255); color: black; width: 100.44444444444444px; background-position: initial initial; background-repeat: initial initial;"><span style="bottom: auto; top: 6px;"><strong>229</strong><br>Shares</span></div>
</div>
<footer class="footer"></footer>


<a title="Facebook Like" class="sumome-share-client-animated sumome-share-client-share sumome-share-client-count" data-sumome-share="facebooklike" href="javascript:void(0);" style="background-color: rgb(90, 115, 157); color: rgb(255, 255, 255); width: 100.44444444444444px; background-position: initial initial; background-repeat: initial initial;"><img src="//sumome-140a.kxcdn.com/static/131267898a82eb80b8cfe52fbe9f8a6fdd3589ea/client/images/apps/9e8a4d2a-6f8c-415e-851b-bdfe4c01d5c1/facebooklike-white-60.png" alt="Facebook Like"><span>160</span></a>


<a title="Facebook" class="sumome-share-client-animated sumome-share-client-share sumome-share-client-count" data-sumome-share="facebook" href="javascript:void(0);" style="background-color: rgb(59, 89, 152); color: rgb(255, 255, 255); width: 100.44444444444444px; background-position: initial initial; background-repeat: initial initial;"><img src="//sumome-140a.kxcdn.com/static/131267898a82eb80b8cfe52fbe9f8a6fdd3589ea/client/images/apps/9e8a4d2a-6f8c-415e-851b-bdfe4c01d5c1/facebook-white-60.png" alt="Facebook"><span>160</span></a>


<a title="LinkedIn" class="sumome-share-client-animated sumome-share-client-share sumome-share-client-count" data-sumome-share="linkedin" href="javascript:void(0);" style="background-color: rgb(0, 123, 182); color: rgb(255, 255, 255); width: 100.44444444444444px; background-position: initial initial; background-repeat: initial initial;"><img src="//sumome-140a.kxcdn.com/static/131267898a82eb80b8cfe52fbe9f8a6fdd3589ea/client/images/apps/9e8a4d2a-6f8c-415e-851b-bdfe4c01d5c1/linkedin-white-60.png" alt="LinkedIn"><span>12</span></a>


<a title="Google+" class="sumome-share-client-animated sumome-share-client-share sumome-share-client-count" data-sumome-share="googleplus" href="javascript:void(0);" style="background-color: rgb(221, 75, 57); color: rgb(255, 255, 255); width: 100.44444444444444px; background-position: initial initial; background-repeat: initial initial;"><img src="//sumome-140a.kxcdn.com/static/131267898a82eb80b8cfe52fbe9f8a6fdd3589ea/client/images/apps/9e8a4d2a-6f8c-415e-851b-bdfe4c01d5c1/googleplus-white-60.png" alt="Google+"><span>1</span></a>



<a title="Pinterest" class="sumome-share-client-animated sumome-share-client-share sumome-share-client-count" data-sumome-share="pinterest" href="javascript:void(0);" style="background-color: rgb(203, 32, 39); color: rgb(255, 255, 255); width: 100.44444444444444px; background-position: initial initial; background-repeat: initial initial;"><img src="//sumome-140a.kxcdn.com/static/131267898a82eb80b8cfe52fbe9f8a6fdd3589ea/client/images/apps/9e8a4d2a-6f8c-415e-851b-bdfe4c01d5c1/pinterest-white-60.png" alt="Pinterest"><span>1</span></a>



<a title="Reddit" class="sumome-share-client-animated sumome-share-client-share" data-sumome-share="reddit" href="javascript:void(0);" style="background-color: rgb(255, 87, 0); color: rgb(255, 255, 255); width: 100.44444444444444px; background-position: initial initial; background-repeat: initial initial;"><img src="//sumome-140a.kxcdn.com/static/131267898a82eb80b8cfe52fbe9f8a6fdd3589ea/client/images/apps/9e8a4d2a-6f8c-415e-851b-bdfe4c01d5c1/reddit-white-60.png" alt="Reddit"></a>



<a title="Twitter" class="sumome-share-client-animated sumome-share-client-share" data-sumome-share="twitter" href="javascript:void(0);" style="background-color: rgb(0, 172, 237); color: rgb(255, 255, 255); width: 100.44444444444444px; background-position: initial initial; background-repeat: initial initial;"><img src="//sumome-140a.kxcdn.com/static/131267898a82eb80b8cfe52fbe9f8a6fdd3589ea/client/images/apps/9e8a4d2a-6f8c-415e-851b-bdfe4c01d5c1/twitter-white-60.png" alt="Twitter"></a>



<a title="SumoMe" class="sumome-share-client-animated sumome-share-client-share" data-sumome-share="sumome" href="javascript:void(0);" style="background-color: rgb(15, 82, 186); color: rgb(255, 255, 255); width: 100.44444444444444px; margin-right: 0px; background-position: initial initial; background-repeat: initial initial;"><img src="//sumome-140a.kxcdn.com/static/131267898a82eb80b8cfe52fbe9f8a6fdd3589ea/client/images/apps/9e8a4d2a-6f8c-415e-851b-bdfe4c01d5c1/sumome-white-60.png" alt="SumoMe"></a>

    -->
