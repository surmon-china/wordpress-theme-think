<?php
/*
Template Name: archives
*/
?>
<?php get_header(); ?>
<div id="content">
	<div id="postlist">
		<div class="post-single">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post-title"><h1><?php the_title(); ?></h1></div>
		<div class="post-content"><?php the_content(__('Read More')); ?></div>
		<div id="arch_title"><a id="expand_collapse" href="#">全部展开/收缩</a>
<div id="archives"><?php archives_list_SHe(); ?></div>
</div>
		</div>
		<?php endwhile; endif; ?>
	</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>