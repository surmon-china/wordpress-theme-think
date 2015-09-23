<?php get_header(); ?>
<div id="content">
	<div id="postlist">
		<div class="post-single">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post-title"><h1><?php the_title(); ?></h1></div>
		<div class="post-content"><?php the_content(__('Read More')); ?></div>
		<div id="comments"><?php comments_template('', true); ?></div>
		</div>
		<?php endwhile; endif; ?>
		
	</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>