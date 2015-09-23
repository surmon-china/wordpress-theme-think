<?php get_header(); ?>
<div id="content">
<div id="postlist">
<div id="index-all">
<div class="index-top">
<div class="index-top-left">
<?php query_posts('meta_key=hot&showposts=5');while (have_posts()) : the_post(); ?>
<?php if (1) : ?>
<div class="index-top-left-one">
<h3><a href="<?php the_permalink(); ?>" target="_blank" title="<?php the_title(); ?>"><?php echo cut_str($post->post_title,31); ?></a></h3>
<?php if ( has_post_thumbnail() ) { ?> 
<a href="<?php the_permalink(); ?>" target="_blank" title="<?php the_title(); ?>"><?php the_post_thumbnail('index-top'); ?></a>
<?php } else {?> 
<a href="<?php the_permalink(); ?>" target="_blank" title="<?php the_title(); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/index-nopic-<?php echo rand(1,6)?>.jpg" /></a>
<?php } ?>
<p><?php if (has_excerpt()) {
                echo $description = get_the_excerpt(); //文章编辑中的摘要
            }else {
                echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 73,"…"); //文章编辑中若无摘要，自定截取文
            } ?></p></div>
<?php endif; ?>
<?php endwhile; ?>
<?php wp_reset_query(); ?>
</div>
<div class="index-top-right-top">
<div class="index-top-right-top-bt">推荐阅读</div>
<?php query_posts('meta_key=top&showposts=5');while (have_posts()) : the_post(); ?>
<?php if (0) : ?>
<?php else: ?>
<div class="index-top-right-top-one">
<h3><a href="<?php the_permalink(); ?>" target="_blank" title="<?php the_title(); ?>"><?php echo cut_str($post->post_title,41); ?></a></h3>
<p><?php if (has_excerpt()) {
                echo $description = get_the_excerpt(); //文章编辑中的摘要
            }else {
                echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 114,"…"); //文章编辑中若无摘要，自定截取文
            } ?></p>
			</div>
<?php endif; ?>
<?php endwhile; ?>
<?php wp_reset_query(); ?>
</div>
<div class="index-top-right-bottom">
<?php query_posts('meta_key=zhuanti&showposts=1');while (have_posts()) : the_post(); ?>
<?php if (1) : ?>
<?php if ( has_post_thumbnail() ) { ?> 
<a href="<?php the_permalink(); ?>" target="_blank" title="<?php the_title(); ?>"><?php the_post_thumbnail('index-top'); ?></a><?php } else {?> 
<a href="<?php the_permalink(); ?>" target="_blank"  title="<?php the_title(); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/zhuanti.jpg" /></a>
<?php } ?>
<h3><a href="<?php the_permalink(); ?>"  target="_blank" title="<?php the_title(); ?>"><?php echo cut_str($post->post_title,31); ?></a></h3>
<p><?php if (has_excerpt()) {
                echo $description = get_the_excerpt(); //文章编辑中的摘要
            }else {
                echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 80,"…"); //文章编辑中若无摘要，自定截取文
            } ?></p>
<?php endif; ?>
<?php endwhile; ?>
<?php wp_reset_query(); ?> 
</div>
</div>
 <?php if (get_option('Gztro_index_ad_top')!="") {?><div style=" margin-top: 10px; "><?php echo stripslashes(get_option('Gztro_index_ad_top')); ?></div><?php }?>
<div class="index-bottom">
<div class="index-bottom-bt">最新资讯</div>
<?php $pop = $wpdb->get_results("SELECT id, post_title FROM {$wpdb->prefix}posts WHERE post_type='post' AND post_status='publish' AND post_password='' AND comment_count = 0 ORDER BY post_date desc LIMIT 40"); ?>
<?php $myposts = get_posts('numberposts=40&offset=0');foreach($myposts as $post) :?>
<li><a href="<?php the_permalink() ?>" target="_blank" title="详细阅读 <?php the_title(); ?>"><?php echo cut_str($post->post_title,41); ?></a>
<span><?php the_time('m/d'); ?></span></li><?php endforeach; ?>
</div>
</div>
<?php if (get_option('Gztro_index_ad_bottom')!="") {?><div style=" margin-bottom: 10px; "><?php echo stripslashes(get_option('Gztro_index_ad_bottom')); ?></div><?php }?>
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
