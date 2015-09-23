<?php get_header(); ?>
<div id="content">
	<div id="postlist">
	<?php if(have_posts()) : while (have_posts()) : the_post(); ?>
<div class="article">
<div>
		 <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" target="_blank" class="post-thumb">
			<?php if ( get_post_meta($post->ID, 'show', true) ) : ?>
				<?php $image = get_post_meta($post->ID, 'show', true); ?>
				<img src="<?php echo $image; ?>"width="120" height="120" alt="<?php the_title(); ?>"/>
				<?php else: ?>
				<?php if (has_post_thumbnail()) { the_post_thumbnail('post-list' ,array( 'alt' => trim(strip_tags( $post->post_title )), 'title' => trim(strip_tags( $post->post_title )),'class' => 'post-list')); }
				else { ?><img src="<?php echo my_thumbnail() ?>" alt="<?php the_title(); ?>" width="120" height="120" />
				<?php } ?>
				<?php endif; ?>
				</a>
		<h3><a href="<?php the_permalink() ?>" target="_blank" rel="bookmark" title="<?php the_title_attribute(); ?>">
		<?php the_title(); ?><em><?php $t1=$post->post_date; $t2=date("Y-m-d H:i:s"); $diff=(strtotime($t2)-strtotime($t1))/3600; if($diff<24){echo "<font style='color:red;font-weight: bold;font-size:8px;'> New</font>";} ?></em></a></h3>
<p><?php echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 290,"..."); ?><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" target="_blank">【阅读全文】</a></p>
</div>
<span class="post-list-span">本文由 <?php the_author(); ?> 于 <?php the_time('m') ?>-<?php the_time('d') ?> 发布在 <?php the_category(', ') ?> 分类下 <?php printf( _e( '超过','Gztro' ) ); ?> <?php post_views(' '); ?> 次围观 <?php comments_popup_link ('暂无评论','1条评论','%条评论'); ?> &nbsp; <?php edit_post_link('编辑本文', '', ''); ?></span>
</div>	
<?php endwhile; endif; ?>
<div class="pagenavi"><?php pagenavi(); ?></div></div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>