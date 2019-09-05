<div class="flex-item">
	<?php if ( has_post_thumbnail() ) { ?>
		<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('alm-cta'); ?></a>
	<?php }?>
	<div class="details">
    	<p class="the-date"><?php the_time("F d, Y"); ?></p>
		<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
		<?php the_excerpt(); ?> 
	</div>
</div>