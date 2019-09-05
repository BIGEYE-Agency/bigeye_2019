<?php
/**
 * The template part for displaying single posts
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>
<link href="<?php bloginfo('template_directory'); ?>/css/article.css" rel="stylesheet" type="text/css" />
<div class="col-sec1-8">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<div class="post-meta posted-at"><?php the_time('F jS, Y'); ?></div>
<div class="read_time"><ul><li><?php echo do_shortcode('[rt_reading_time postfix="mins read" postfix_singular="min read"]'); ?>
</li></ul>
</div>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<?php //twentysixteen_excerpt(); ?>

	<?php twentysixteen_post_thumbnail(); ?>

	<div class="excerpt-wrap">
		
		<?php if(get_field('intro')): ?>
		<div class="excerpt">
			<?php the_field('intro'); ?>
		</div>
		<?php endif; ?>
	</div>
	
	<div class="entry-content">
		<?php
			the_content();

			wp_link_pages(
				array(
					'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentysixteen' ) . '</span>',
					'after'       => '</div>',
					'link_before' => '<span>',
					'link_after'  => '</span>',
					'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>%',
					'separator'   => '<span class="screen-reader-text">, </span>',
				)
			);

			if ( '' !== get_the_author_meta( 'description' ) ) {
				get_template_part( 'template-parts/biography' );
			}
			?>
	</div><!-- .entry-content -->
<div class="sticky_end">
	<footer class="entry-footer">
	<a href="<?php echo get_home_url(); ?>"><span>Back to Articles</span></a>
		<?php //twentysixteen_entry_meta(); ?>
		<?php
			/*edit_post_link(
				sprintf(
					
					__( 'Edit<span class="screen-reader-text"> "%s"</span>', 'twentysixteen' ),
					get_the_title()
				),
				'<span class="edit-link">',
				'</span>'
			);*/
			?>
	</footer><!-- .entry-footer -->
	</div>
	
	
	
	
	
	
	
	
	
</article><!-- #post-<?php the_ID(); ?> -->
</div>
