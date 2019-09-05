<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

		</div><!-- .site-content -->

		<footer id="colophon" class="site-footer" role="contentinfo">
			<?php if ( has_nav_menu( 'primary' ) ) : ?>
				<nav class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Primary Menu', 'twentysixteen' ); ?>">
					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'primary',
								'menu_class'     => 'primary-menu',
							)
						);
					?>
				</nav><!-- .main-navigation -->
			<?php endif; ?>

			<?php if ( has_nav_menu( 'social' ) ) : ?>
				<nav class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Social Links Menu', 'twentysixteen' ); ?>">
					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'social',
								'menu_class'     => 'social-links-menu',
								'depth'          => 1,
								'link_before'    => '<span class="screen-reader-text">',
								'link_after'     => '</span>',
							)
						);
					?>
				</nav><!-- .social-navigation -->
			<?php endif; ?>

			<!--<div class="site-info">
				<?php
					
					//do_action( 'twentysixteen_credits' );
				?>
				<span class="site-title"><a href="<?php //echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php //bloginfo( 'name' ); ?></a></span>
				<?php
				/*if ( function_exists( 'the_privacy_policy_link' ) ) {
					the_privacy_policy_link( '', '<span role="separator" aria-hidden="true"></span>' );
				}*/
				?>
				<a href="<?php //echo esc_url( __( 'https://wordpress.org/', 'twentysixteen' ) ); ?>" class="imprint">
					<?php// printf( __( 'Proudly powered by %s', 'twentysixteen' ), 'WordPress' ); ?>
				</a>
			</div> .site-info -->
			
		

		</footer><!-- .site-footer -->
	</div><!-- .site-inner -->
</div><!-- .site -->

<?php wp_footer(); ?>
	<footer>
<div class="black_bg">
<div class="container">
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
<img class="footer_logo" src="<?php bloginfo('template_url'); ?>/images/footer_logo.png" />
<p>Reaching the right people, in the 
right place, at the right time.&reg; </p>
<p class="smallpara"> &copy; 2018 BIGEYE. All rights reserved.
Privacy &bull; Site Map</p>
</div>

<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
<div class="menu_socialtitle">Head Office:</div>
<p><a href="https://www.google.com/maps/place/3203+Lawton+Rd+%23200,+Orlando,+FL+32803/@28.5607367,-81.3445637,17z/data=!3m1!4b1!4m2!3m1!1s0x88e77ab576d6c015:0x3f122cb2d714a2d2" target="_blank">3203 Lawton Road, 2nd Floor<br>Orlando, FL 32803</a></p>

<div class="menu_addrestitle"><a href="tel:4078398599">407.839.8599</a> </div>
<div class="menu_addrestitle"><a href="mailto:newbiz@bigeyeagency.com">newbiz@bigeyeagency.com</a></div>
</div>

<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
<div class="menu_socialtitle">Website:</div>
<ul>
<li><a href="#">Research</a></li>
<li><a href="#">Creative</a></li>
<li><a href="#">Digitial</a></li>
<li><a href="#">Strategy</a></li>
<li><a href="#">Media</a></li>
<li><a href="#">Web</a></li>
</ul>

<ul>
<li><a href="#">Branding</a></li>
<li><a href="#">Video</a></li>
<li><a href="#">Social</a></li>
<li><a href="#">Influencer</a></li>
<li><a href="#">PR</a></li>

</ul>
</div>

<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
<div class="menu_socialtitle">Social:</div>
<ul class="social_icon">

<li><a href="https://www.linkedin.com/company/bigeye"><i class="fa fa-linkedin"></i></a></li>
<li><a href="http://www.facebook.com/BIGEYEagency"><i class="fa fa-facebook"></i> </a></li>
<li><a href="https://www.instagram.com/bigeyeagency/"><i class="fa fa-instagram"></i> </a></li>
<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
<li><a href="https://twitter.com/BIGEYEagency"><i class="fa fa-twitter"></i></a></li>


</ul>

</div>


</div>
</div>

</footer>

</body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
	
	$("#section5").hide();
  $(".menu_close").click(function(){
    $("#section5").toggle();
	$("#section5").removeClass("hidden");
  });
  
  $("#nav-icon3").click(function(){
	  $("#section5").removeClass("hidden");
    $("#section5").toggle();
  });
  
  
  //sticky header
  
  
  var $sticky = $('.sticky');
  var $stickyrStopper = $('.sticky_end');
  if (!!$sticky.offset()) { // make sure ".sticky" element exists

    var generalSidebarHeight = $sticky.innerHeight();
    var stickyTop = $sticky.offset().top;
    var stickOffset = 0;
    var stickyStopperPosition = $stickyrStopper.offset().top;
    var stopPoint = stickyStopperPosition - generalSidebarHeight - stickOffset;
    var diff = stopPoint + stickOffset;

    $(window).scroll(function(){ // scroll event
      var windowTop = $(window).scrollTop(); // returns number
		$sticky.css({ position: 'fixed', top: stickOffset });
    /*  if (stopPoint < windowTop) {
          $sticky.css({ position: 'relative', top: diff });
      } else if (stickyTop < windowTop+stickOffset) {
          $sticky.css({ position: 'fixed', top: stickOffset });
      } else {
          $sticky.css({position: 'relative', top: 'initial'});
      }*/
    });

  }
  
  
  //show hide left header
  
   //$(".sticky").hide(); //hide your div initially
    var topOfOthDiv = $(".excerpt-wrap").offset().top;
	   var hideAtPoint = $(".excerpt-wrap").offset().top;
    /*$(window).scroll(function() {
        if($(window).scrollTop() > topOfOthDiv) { //scrolled past the other div?
            $(".sticky").show(); //reached the desired point -- show div
        }else if($(window).scrollTop() < hideAtPoint)
		{
			 $(".sticky").hide(); //
		}
    });*/
	
	
							var targetOffset = $(".entry-content").offset().top;

										var $w = $(window).scroll(function(){
											var hideAtPoint = (  $(".sticky_end").offset().top - $(".sticky").height());
										    if ( $w.scrollTop() > targetOffset && $w.scrollTop() < hideAtPoint ) {
												$('.sticky').removeClass("hidden");
										      $('.sticky').css({"opacity":"1",'z-index' : "9"});
										    } else {
											    $('.sticky').css({"opacity":"0",'z-index' : "-1"});
												}
										});
	
	
});

$(document).scroll(function() {
 /* var y = $(this).scrollTop();
  if (y > 800) {
    $('.excerpt-wrap').fadeIn();
  } else {
    //$('.entry-footer').fadeOut();
  }*/
});


</script>


