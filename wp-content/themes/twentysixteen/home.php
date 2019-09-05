


<?php /* Template Name: Home */ ?>
<?php get_header(); ?>
<style>


@media (min-width: 992px) and (max-width: 1280px) {
body::before{ width:300px !important; height:400px !important;}

}

</style>
<div class="bigeye-home"> 



<section class="home" id="home">
		
<div id="section1">

<?php

global $wp_query;



  
?>
<?php  $sec_3_img = get_field('section_3_image'); ?>
<?php  $sec_3_head = get_field('section_3_heading'); ?>
<?php  $sec_3_tag = get_field('section_3_tag'); ?>
<?php  $sec_3_link = get_field('section_3_link'); ?>
<?php
		 $args = array(
		  'numberposts' => 1,
		  'order'=>'DESC',		  
		);
		
		$lastposts = get_posts( $args );
			/* Start the Loop */
			 foreach ( $lastposts as $post ) {
			//var_dump($post);
				//echo "<h2>". $post->post_title ."</h2>";
				
				 //echo $post->post_content;
				 
				 
			echo '<div class="latest_main">
			<div class="container">

			<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 bigeyelogo">
			</div>
			
<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 industry_in_txt">
<div class="home_banrtoptxt">
<div class="dash"></div>
<h1>Industry
Insights</h1>
<p>Gain industry insights, find inspiration, tap into the latest trends, learn about our creative process & more.</p>
</div>
</div>
</div>
				  
				  <div class="margin_top">
				  <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12 pull-right nopadding_right">
				  <div class="homefrstriht_img">
				  '. get_the_post_thumbnail( $post->id, 'large').'
				  </div>
				  </div>
				  
				  <div class="container">
								<div class="col-lg-4 col-md-4  col-sm-4 col-xs-12 widthbig">
				<div class="homecolfrstleft">
				<div class="post post_date" id="post-'.$post->id.'">
						<div class="dash">
						-
						</div>
						
						<div class="post_date">
						'.get_the_time( "F jS, Y", $post->id ).'
						
						</div>
						
					   <h3 class="blog_title">
						 <a href="'.get_permalink( $post->id ).'" rel="bookmark" title="'.$post->post_title.'">
						 '.$post->post_title.'</a>
					   </h3>
					   
						<p>'. wp_trim_words( strip_shortcodes( strip_tags( $post->post_content ) ), 12 ).'
						</p>
						
						<div class="redmore_link"> <a href="'.get_permalink( $post->id ).'">
Read the article</a>
						</div>
						
				  </div>
				  </div>
				 </div>
				 
				 </div>
				  
				   </div>
				  		
						
				
				  
				  
			 ';
				
				

			 } // End of the loop.
			?>
</div>




<div class="clearfix"></div>

<div id="section2" class="container">
<div class="section_3_link-text-wrap button_white hidden">
						<a href="/"></a>
					</div>

<?php 
//All Post...
echo do_shortcode('[ajax_load_more id="9165166084"  order="DESC" theme_repeater="css-grid.php" container_type="div" css_classes="main_container" post_type="post" posts_per_page="9" offset=1 post_format="standard" pause="false" scroll="false" button_label="LOAD MORE" button_loading_label="LOAD MORE" transition_container_classes="css-grid"]'); 


?>

</div>	



	<section class="section3 black_bg " id="section3">
	
			<div class="content ">
            <div class="col-md-4">
				<div class="section_3_image-left-wrap">
					<img src="<?php echo $sec_3_img; ?>">
				</div>
				</div>
                
                
				 <div class="col-md-8">
				 <div class="section_3_heading-right-wrap">
					<div class="section_3_heading-text-wrap">
						<h1><?php echo $sec_3_head; ?></h1>
					</div>
				</div>
				
				 <div class="section_3_tag-right-wrap">
					<div class="section_3_tag-text-wrap">
						<p><?php echo $sec_3_tag; ?></p>
					</div>
				</div>
				
				
				<div class="section_3_link-right-wrap">
                <div class="section_3_link-text-wrap button_white hidden">
						<a href="<?php echo $sec_3_link; ?>"></a>
					</div>
					<div class="section_3_link-text-wrap button_white">
						<a href="<?php echo $sec_3_link; ?>"></a>
					</div>
				</div>
                </div>
				 
			</div>
	
	</section>
	
	<section class="section4" id="section4">
		
			<div class="content">
				<div class="section_4_left_wrap container">
					
				<?php echo do_shortcode('[email-subscribers-form id="1"]'); ?>
				</div>
				
			</div>
		
	
	</section>
    
   
	
</section>

</div>


<?php get_footer(); ?>
