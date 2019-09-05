<?php
/**
 * The template for the sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>


	
<div class="col-sec1-4">
<div class="container">
	<div class="col-md-3">
	<aside id="secondary" class="sidebar widget-area" role="complementary">
	
	
	<div class="social">
	<div class="social_heading">Share Article:</div>
	<div class="social_icon"><?php echo do_shortcode('[Sassy_Social_Share  align="left"]'); ?></div>
	</div>

	<div class="sticky hidden">
	<div class="social_sharing">
	<div class="social_sharing_heading">Share Article:</div>
	<div class="social_sharing_icon"><?php echo do_shortcode('[Sassy_Social_Share  align="left"]'); ?></div>
	
	</div>
		<?php //dynamic_sidebar( 'sidebar-1' ); ?>

<div class="realated_wrapper">
			<div class="social_sharing_heading">Related Content</div>

		<?php

		$related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => 3,'order'=>'DESC', 'post__not_in' => array($post->ID) ) );
		if( $related ) foreach( $related as $post ) {
		setup_postdata($post); ?>
		
				<div class="realated_content">
				<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a>
					
				</div>
			   
		<?php }
		wp_reset_postdata(); ?>
</div>

</div>
	</aside><!-- .sidebar .widget-area -->
    </div>
    
<?php endif; ?>
