<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>
<?php get_sidebar(); ?>
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

<div class="bottom_content">
<div class="might_interested">
<div class="might_interested_heading">You might be interested in:</div>
	<?php
	//global $post;
	
	
        echo $category_id = get_cat_ID('featured');
				
		 $args = array(
		  'numberposts' => 3,	
		  'offset'   => 1,
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
						  '. get_the_post_thumbnail( $post->id, 'thumbnail').'
						</div>
						
						<div class="post_date">
						'.get_the_time("F jS, Y", $post->id).'
						</div>
						
					   <h3>
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
				 </div>';
			 } // End of the loop.
			?>
	</div>
	
	<div class="black_bar"></div>
	
	<div class="subscribers_wrap">
					
		<?php echo do_shortcode('[email-subscribers-form id="1"]'); ?>
	</div>
</div>			

<?php get_footer(); ?>
