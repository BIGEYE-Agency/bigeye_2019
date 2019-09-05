<?php /* Template Name: Home */ ?>
<?php get_header(); ?>

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
		);
		
		$lastposts = get_posts( $args );
			/* Start the Loop */
			 foreach ( $lastposts as $post ) {
			//var_dump($post);
				//echo "<h2>". $post->post_title ."</h2>";
				
				 //echo $post->post_content;
				 
				 
			echo '<div class="latest_main">
				
				<div class="post" id="post-'.$post->id.'">
						<div class="dash">
						-
						</div>
						
						<div class="post_date">
						'.the_time("F jS, Y", $post->id).'
						
						</div>
						
					   <h2>
						 <a href="'.get_permalink( $post->id ).'" rel="bookmark" title="'.$post->post_title.'">
						 '.$post->post_title.'</a>
					   </h2>
					   
						<div class="entry">'. wp_trim_words( strip_shortcodes( strip_tags( $post->post_content ) ), 12 ).'
						</div>
						
						<div class="redmore_link"> <a href="'.get_permalink( $post->id ).'">Read the article</a>
						</div>
						
				  </div>
				  
				  <div class="post_image">
				  '. get_the_post_thumbnail( $post->id, 'large').'
				  </div>
				  
			 </div>';
				
				

			 } // End of the loop.
			?>
</div>






<div id="section2">



<?php 
//All Post...
echo do_shortcode('[ajax_load_more id="9165166084" theme_repeater="css-grid.php" container_type="div" css_classes="main_container" post_type="post" posts_per_page="9" offset=1 post_format="standard" pause="false" scroll="false" button_label="LOAD MORE" button_loading_label="LOAD MORE" transition_container_classes="css-grid"]'); 


?>
</div>	



	<section class="section3" id="section3">
		
			<div class="content">
				<div class="section_3_image-left-wrap">
					
					<img src="<?php echo $sec_3_img; ?>">
				</div>
				
				
				 <div class="section_3_heading-right-wrap">
					<div class="section_3_heading-text-wrap">
						<?php echo $sec_3_head; ?>
					</div>
				</div>
				
				 <div class="section_3_tag-right-wrap">
					<div class="section_3_tag-text-wrap">
						<?php echo $sec_3_tag; ?>
					</div>
				</div>
				
				
				<div class="section_3_link-right-wrap">
					<div class="section_3_link-text-wrap">
						<a class="button" href="<?php echo $sec_3_link; ?>">LEARN MORE</a>
					</div>
				</div>
				 
			</div>
		
	
	</section>
	
	<section class="section4" id="section4">
		
			<div class="content">
				<div class="section_4_left_wrap">
					
				<?php echo do_shortcode('[email-subscribers-form id="1"]'); ?>
				</div>
				
			</div>
		
	
	</section>
	
	
</section>

</div>

<?php get_footer(); ?>
