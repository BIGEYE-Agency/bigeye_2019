<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<?php
		// Start the loop.
		while ( have_posts() ) :
			the_post();

			// Include the single post content template.
			get_template_part( 'template-parts/content', 'single' );

			// If comments are open or we have at least one comment, load up the comment template.
			//acpl commented code for comment
			/*if ( comments_open() || get_comments_number() ) {
				comments_template();
			}*/

			/*if ( is_singular( 'attachment' ) ) {
				
				the_post_navigation(
					array(
						'prev_text' => _x( '<span class="meta-nav">Published in</span><span class="post-title">%title</span>', 'Parent post link', 'twentysixteen' ),
					)
				);
			} elseif ( is_singular( 'post' ) ) {
				
				the_post_navigation(
					array(
						'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'twentysixteen' ) . '</span> ' .
							'<span class="screen-reader-text">' . __( 'Next post:', 'twentysixteen' ) . '</span> ' .
							'<span class="post-title">%title</span>',
						'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'twentysixteen' ) . '</span> ' .
							'<span class="screen-reader-text">' . __( 'Previous post:', 'twentysixteen' ) . '</span> ' .
							'<span class="post-title">%title</span>',
					)
				);
			}*/

			// End of the loop.
		endwhile;
		?>

		
	
	</main><!-- .site-main -->

	<?php get_sidebar( 'content-bottom' ); ?>

</div><!-- .content-area -->
<?php get_sidebar(); ?>
    </div>
</div>

<!--<div class="case_study">
<div class="case_study_heading">Case Study References</div>
<?php
	
		/* $args = array(
		  'numberposts' => 3,
		 'category__in' => wp_get_post_categories( get_the_ID() ), 
		 'post__not_in' => array( get_the_ID() ),
		  
		);
		
		$case_study_posts = get_posts( $args );
			
			 foreach ( $case_study_posts as $post ) {

			 echo '<div class="toggle">
					<div class="toggle-question" >
						<div class="question">'.$post->post_title.'  
									<div class="plus">
											<span class="add">
												<img src="/images/faq_arrow.svg"  style="transform: rotate(0deg);" > 
											</span>
										</div>
										</div>
									
								</div>

								<div class="answer toggle-answer" style="display:none">  '.$post->post_content.' </div>
				</div>';
			 
			 } */
			?>


	
</div> -->



<div class="bottom_content">

<div class="container">
<div class="might_interested">
<div class="might_interested_heading">You might be interested in:</div>
	<?php
	//global $post;
		 $args = array(
		  'numberposts' => 3,	
		  //'offset'   => 1,
		  'order'=>'DESC',		
		 'category__in' => wp_get_post_categories( get_the_ID() ), 
		 'post__not_in' => array( get_the_ID() ),
		  
		);
		
		/*$category_detail=get_the_category(get_the_ID());//$post->ID
		foreach($category_detail as $cd){
		echo $cd->term_id;
		var_dump($cd);
		}*/

		$lastposts = get_posts( $args );
			/* Start the Loop */
			 foreach ( $lastposts as $post ) {
			//var_dump($post);
				//echo "<h2>". $post->post_title ."</h2>";
				
				 //echo $post->post_content;
				 
				 
			echo '<div class="latest_main">
				
				<div class="homecolfrstleft">
				<div class="post" id="post-'.$post->id.'">
						<div class="post_image">
						  '. get_the_post_thumbnail( $post->id, 'large').'
						</div>
						
						<div class="post_date">
						'.get_the_time("F jS, Y", $post->id).'
						</div>
						
					   <span>
						 <a href="'.get_permalink( $post->id ).'" rel="bookmark" title="'.$post->post_title.'">
						 '.$post->post_title.'</a>
					   </span>
					   
						<p>'.trunck_string(get_the_excerpt($post->id),80, true).'
						</p>
						
						<div class="redmore_link"> <a href="'.get_permalink( $post->id ).'">
Read the article</a>
						</div>
						
				  </div>
				  </div>
				 </div>';
			 } // End of the loop.
			?>
	</div>
	
	<div class="black_bar"></div>
	
	<div class="subscribers_wrap section_4_left_wrap container">
					
		<?php echo do_shortcode('[email-subscribers-form id="1"]'); ?>
	</div>
</div>			
</div>
<?php get_footer(); ?>

<script>
	$(document).ready(function() {
	  if( $(".toggle .toggle-question").hasClass('active') ){
	    $(".toggle .toggle-question.active").closest('.toggle').find('.toggle-answer').show();
	   }

    $(".toggle .toggle-question").click(function(){
      if( $(this).hasClass('active') ){
	      $(this).removeClass("active").closest('.toggle').find('.toggle-answer').slideUp(200);
	      $(this).find("img").css("transform", 'rotate(0deg)');
       } else {
				 $(this).addClass("active").closest('.toggle').find('.toggle-answer').slideDown(200);
			    $(this).find("img").css("transform", 'rotate(90deg)');
       }
    });
	});
</script>
