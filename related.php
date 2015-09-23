	<?php
	$backup = $post; 
	$tags = wp_get_post_tags($post->ID);
	$tagIDs = array();
	if ($tags) {
		echo '<ul class="related-post" >';
		$tagcount = count($tags);
		for ($i = 0; $i < $tagcount; $i++) {
			$tagIDs[$i] = $tags[$i]->term_id;
		}
		$args=array(
			'tag__in' => $tagIDs,
			'post__not_in' => array($post->ID),
			'showposts'=>10,
			'caller_get_posts'=>1
		);
		$my_query = new WP_Query($args);
		if( $my_query->have_posts() ) {
			while ($my_query->have_posts()) : $my_query->the_post(); ?>
<?php if ( has_post_thumbnail() ) { ?> 
<li class="single-xg">
<a href="<?php the_permalink(); ?>" target="_blank" title="<?php the_title(); ?>"><?php the_post_thumbnail('post-list'); ?></a>
<?php } else {?> 
<li class="single-xg"><a href="<?php the_permalink(); ?>" target="_blank" title="<?php the_title(); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/single-nopic.jpg" /></a>
<?php } ?>
<div class="single-xg-bt"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php echo cut_str($post->post_title,58); ?></a></div>
</li>
			<?php endwhile;
				echo '</ul>';
		} else { ?>

		<?php
		query_posts(array('orderby' => 'rand', 'showposts' => 10, 'caller_get_posts' => 4));
		if (have_posts()) :
		while (have_posts()) : the_post();?>
		
<?php if ( has_post_thumbnail() ) { ?> 
<li class="single-xg"><a href="<?php the_permalink(); ?>" target="_blank" title="<?php the_title(); ?>"><?php the_post_thumbnail('post-list'); ?></a>
<?php } else {?> 
<li class="single-xg"><a href="<?php the_permalink(); ?>" target="_blank" title="<?php the_title(); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/single-nopic.jpg" /></a>
<?php } ?>
<div class="single-xg-bt"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php echo cut_str($post->post_title,58); ?></a></div></li>
<?php endwhile;endif; ?>
	<?php }
	}
	$post = $backup;
	wp_reset_query();
	?>