<div id="imgbox">
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.hoveraccordion.js"></script>
<script type="text/javascript"> 
$(document).ready(function(){
	$('#accoradion01').hoverAccordion({
		activateItem:3,	     //默认下设置第4个滑动门展开	 
		onClickOnly:true,   //点击或悬停触发"false"、"true" 
		speed:'fast'         //滑动门切换过渡效果"fast"、"slow"、"normal"
	}); 
});
</script>
<ul id="accoradion01" class="accoradion">
<?php query_posts('meta_key=sidebar&showposts=4');while (have_posts()) : the_post(); ?>
<?php if (0) : ?>
<?php else: ?>
<li><div class="sidebar-show-bt"><a href="javascript:;" title="<?php the_title(); ?>"><?php echo cut_str($post->post_title,41); ?></a></div>
<ul>
<li class="sidebar-show-img">
<?php if ( has_post_thumbnail() ) { ?>
<a href="<?php the_permalink(); ?>" target="_blank"  title="<?php the_title(); ?>"><?php the_post_thumbnail('sidebar-show'); ?></a><?php } else {?> 
<a href="<?php the_permalink(); ?>" target="_blank"  title="<?php the_title(); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/sidebar-nopic-<?php echo rand(1,6)?>.jpg" /></a>
<?php } ?>
</li>
</ul></li>
<?php endif; ?>
<?php endwhile; ?>
<?php wp_reset_query(); ?>
</ul>
</div>