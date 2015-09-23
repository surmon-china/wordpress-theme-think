<script type='text/javascript' src='<?php bloginfo('template_directory'); ?>/js/webwidget_scroller_tab.js'></script>
<script language="javascript" type="text/javascript">
            $(function() {
                $(".webwidget_scroller_tab").webwidget_scroller_tab({
                    scroller_time_interval: '5000',
                    scroller_window_padding: '0',
                    scroller_window_width: '300',
                    scroller_window_height: '374',
                    scroller_head_text_color: '#fff',
                    scroller_head_current_text_color: '#f60',
                    directory: 'images'
                });
            });
        </script>
<div class="webwidget_scroller_tab" id="webwidget_scroller_tab">
          <div class="tabContainer">
            <ul class="tabHead">
              <li class="currentBtn"><a href="javascript:;">最热</a></li>
              <li><a href="javascript:;">最新</a></li>
              <li><a href="javascript:;">随机</a></li>
            </ul>
          </div>
<div class="tabBody" style="position: relative;"><ul>
<li class="tabCot">		
<?php $result = $wpdb->get_results("SELECT comment_count,ID,post_title FROM $wpdb->posts ORDER BY comment_count DESC LIMIT 0 , 15");  
 foreach ($result as $post) {
 setup_postdata($post);
 $postid = $post->ID;
 $title = $post->post_title;
 $commentcount = $post->comment_count;
 if ($commentcount != 0) { ?>
<div class="sidebar-tab-bt">◆ <a href="<?php echo get_permalink($postid); ?>" title="详细阅读-<?php echo $title ?>">
<?php echo $title ?></a></div>
<?php } } ?>
</li>
<li class="tabCot">			  
<?php $myposts = get_posts('numberposts=15&offset=0');foreach($myposts as $post) :?>
<div class="sidebar-tab-bt">◆ <a href="<?php the_permalink(); ?>" rel="bookmark" title="详细阅读-<?php the_title_attribute(); ?>">
<?php echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_title)), 0, 62,"...","utf-8"); ?></a>
</div><?php endforeach; ?>
</li>	  
<li class="tabCot">
<?php $myposts = get_posts('numberposts=15&orderby=rand');foreach($myposts as $post) :?>
<div class="sidebar-tab-bt">◆ <a href="<?php the_permalink(); ?>" rel="bookmark" title="详细阅读 <?php the_title_attribute(); ?>">
	  <?php echo cut_str($post->post_title,137); ?></a></div>
	  <?php endforeach; ?>
</li>
</ul>
<div style="clear:both"></div>
          </div>
        </div>