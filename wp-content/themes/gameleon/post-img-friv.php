<?php

// If this file is called directly, busted!
if (!defined('ABSPATH')) {
	exit;
}

/*----------------------------------------------------------------------------------------------------------
	POST IMAGE THUMBNAILS TEMPLATE-PART FILE
-----------------------------------------------------------------------------------------------------------*/
?>


<div class="td-friv grid-image grid col-70">
	<?php if (has_post_thumbnail() || is_myarcade_game()) : ?>

		<?php $image = '<a href="' . get_permalink() . '">' . get_the_post_thumbnail(get_the_ID(), 'module-friv') . '</a>'; ?>
		<?php if (empty($image[0])) $image[0] = myarcade_featured_image(); ?>
		<div title="<?php the_title(); ?>">
			<?php echo html_entity_decode(esc_html($image)); ?>
		</div>
	<?php else :
	?>
		<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
			<img src="<?php echo get_post_meta(get_the_ID(), 'game_thumb1')[0] ?>" width="90" height="90" alt="<?php the_title(); ?>" />
		</a>

	<?php endif; 
	?>
</div>