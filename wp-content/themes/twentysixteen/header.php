<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
	
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" type="text/css" media="all" />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/font-awesome.css" type="text/css" media="all" />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/responsive.css" type="text/css" media="all" />
    
    <link href="https://fonts.googleapis.com/css?family=Lora:400i&display=swap" rel="stylesheet">
    
    <script>

	$(document).ready(function(){
	  $(".headline").fadeIn(5000);
	});

	$( '#menu-header-main-menu li:nth-of-type(1)' ).hover(function() {
		$(this).closest(".nav-class").toggleClass("hovered")
	});

	$( '#menu-header-main-menu li:nth-of-type(2)' ).hover(function() {
		$(this).closest(".nav-class").toggleClass("hovered-2")
	});

	$( '#menu-header-main-menu li:nth-of-type(3)' ).hover(function() {
		$(this).closest(".nav-class").toggleClass("hovered-3")
	});

	$( '#menu-header-main-menu li:nth-of-type(4)' ).hover(function() {
		$(this).closest(".nav-class").toggleClass("hovered-4")
	});

</script>
	
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<div> <!--removed this class  class="site-inner"-->
		<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentysixteen' ); ?></a>

		
		<header id="black-header">
        
        <div class="container">
			<div class="closed-nav">
				<div class="headerLogo">
                <div class="black_logo"><a href="<?php echo get_home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt=""/></a></div>
					<!--<div id="nav-icon3">
					
						<?php //include( '/images/menu.svg'); ?>
					</div>-->
					<div id="nav-icon3">
								<!--?xml version="1.0" encoding="utf-8"?-->
								<!-- Generator: Adobe Illustrator 16.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->

								<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="24px" height="24px" viewBox="206.198 174.356 100 56.522" enable-background="new 206.198 174.356 100 56.522" xml:space="preserve">
								<g>
									<path d="M299.436,174.356h-86.635c-3.704,0-6.603,2.898-6.603,6.602s2.899,6.603,6.603,6.603h86.796
										c3.703,0,6.602-2.899,6.602-6.603C306.038,177.255,303.139,174.356,299.436,174.356z"></path>
									<path d="M299.436,217.674h-86.635c-3.704,0-6.603,2.898-6.603,6.602s2.899,6.603,6.603,6.603h86.796
										c3.703,0,6.602-2.899,6.602-6.603C306.038,220.572,303.139,217.674,299.436,217.674z"></path>
								</g>
								</svg>
					</div>
					<?php //if (! is_single() ) { ?>
					<div class="breadcrumbs">
						<?php
						/*if ( function_exists('yoast_breadcrumb') ) {
						yoast_breadcrumb('<p id="breadcrumbs">','</p>');}*/ ?>
					</div>
					<?php //} ?>
				</div>
			<!--	<div class="nav-btn-wrap">
					<div class="nav-btn dn">
						<div id="nav-icon3">
						<h4>MENU</h4>
						</div>
					</div>
				</div>-->
			</div>
            
            </div>

		<nav class="nav-class open-black-menu">

		<!--	<?php //wp_nav_menu(array('menu'=>'Header Main Menu','container' => false, 'items_wrap'   => '<ul id="%1$s" class="header-nav %2$s ">%3$s</ul>' )); ?>

			<div class="right-nav-hidden">
				<a class="contact-nav" href="<?php //echo get_home_url(); ?>/contact">CONTACT</a>
				<a class="careers-nav" href="<?php //echo get_home_url(); ?>/careers">CAREERS</a>
			</div>

			<div class="black-bottom">
				<div class="left-nav">
				<?php //if( have_rows('office_information','options') ): ?>
				<?php //while( have_rows('office_information','options') ): the_row(); ?>
				<?php //$stripTel = get_sub_field('phone_number'); ?>
				<?php //$stripTel = str_replace(".", "", $stripTel); ?>
					<div class="telephone">
						<p>READY TO SERVE</p>
						<a href="mailto:abc@bigeyeagency.com">abc@bigeyeagency.com</a>
					<?php //if( have_rows('links','options') ): ?>
					<?php //while( have_rows('links','options') ): the_row(); ?>
						<div class="social">
							<a href="<?php //the_sub_field('facebook'); ?>" target="_blank"><i class="fa fa-facebook fa-lg" aria-hidden="true"></i></a>
							<a href="<?php //the_sub_field('twitter'); ?>" target="_blank"><i class="fa fa-twitter fa-lg" aria-hidden="true"></i></a>
							<a href="<?php //the_sub_field('instagram'); ?>" target="_blank"><i class="fa fa-instagram fa-lg" aria-hidden="true"></i></a>
							<a href="<?php //the_sub_field('linkedin'); ?>" target="_blank"><i class="fa fa-linkedin fa-lg" aria-hidden="true"></i></a>
						</div>
					</div>
					<?php //endwhile; ?>
					<?php //endif; ?>
					<div class="address">
						<p class="subhead">HEADQUARTERS</p>
						<a href="tel:407-839-8599">407.839.8599</a><br>
						<a href="<?php //the_sub_field('google_map_url'); ?>" target="_bank">3203 Lawton Rd<br>
						 Second Floor<br>
						 Orlando, FL 32803
						 <br>Directions</a>
					</div>
					<?php //endwhile; ?>
					<?php //endif; ?>
				</div>

				<div class="right-nav">
					<a class="contact-nav" href="<?php //echo get_home_url(); ?>/contact">CONTACT</a>
					<a class="careers-nav" href="<?php //echo get_home_url(); ?>/careers">CAREERS</a>
				</div>
			</div>-->
			
			
				<section class="section5 black_bg nav_menu hidden" id="section5">

			
           
            
		<div class="container">
        <div class="menu_droplogo"><a href="<?php echo get_home_url(); ?>"><img class="menulogo" src="<?php bloginfo('template_url'); ?>/images/logo_white.png" alt="" /></a> <a class="menu_close" href="#">&nbsp;</a></div>
        </div>
        <div class="container">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 pull-right nopadding_right float">
			<div class="menu_socialtitle menu_socialtitle2"><div class="dash_smallwhite">-</div> Website:</div>
            
            <ul class="navmenubig">
            <li><a href="<?php echo get_home_url(); ?>">Home</a></li>
            <li><a href="#">Work</a></li>
            <li><a href="#">Agency</a></li>
            <li><a href="#">Our Approach</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">Careers</a></li>
            </ul>	
				
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 nopaddingright">
				<div class="menu_socialtitle social_2"><div class="dash_smallwhite">-</div> Social:</div>
                <ul>
                <li><a href="https://www.linkedin.com/company/bigeye"><i class="fa fa-linkedin"></i> LinkedIn</a></li>
                <li><a href="http://www.facebook.com/BIGEYEagency"><i class="fa fa-facebook"></i> Facebook</a></li>
                <li><a href="https://www.instagram.com/bigeyeagency/"><i class="fa fa-instagram"></i> Instagram</a></li>
                <li><a href="#"><i class="fa fa-dribbble"></i> Dribbble</a></li>
				<li><a href="https://twitter.com/BIGEYEagency"><i class="fa fa-twitter"></i> Twitter</a></li>
			
				
                </ul>
                
                <div class="menu_socialtitle social_2"><div class="dash_smallwhite">-</div> Company:</div>
                <div class="menu_addrestitle">Bigeye</div>
                <p><a href="https://www.google.com/maps/place/3203+Lawton+Rd+%23200,+Orlando,+FL+32803/@28.5607367,-81.3445637,17z/data=!3m1!4b1!4m2!3m1!1s0x88e77ab576d6c015:0x3f122cb2d714a2d2" target="_blank">3203 Lawton Road, 2nd Floor<br>Orlando, FL 32803</a></p>
                <div class="menu_addrestitle"><a href="tel:4078398599">407.839.8599</a> </div>
                <div class="menu_addrestitle"><a href="mailto:newbiz@bigeyeagency.com">newbiz@bigeyeagency.com</a></div>
				
			</div>
            
            
            
            
            
            
		</div>
        
	
	</section>
		</nav>

		
		
	

</header><!-- .site-header -->

 
	
		<div id="content" class="">
