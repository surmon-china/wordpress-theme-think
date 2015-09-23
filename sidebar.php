<div id="sidebar">
	<?php include(TEMPLATEPATH . '/sidebar-show.php'); ?>
	<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
   <input class="searchInput" type="text" value="输入关键字" placeholder="输入关键字" onblur="if(this.value=='') this.value='输入关键字';" onfocus="if(this.value=='输入关键字') this.value='';" name="s" id="ls" x-webkit-speech="" lang="zh-CN">
   <input class="searchBtn" type="submit" id="searchsubmit" title="搜索" value="搜索">
</form>
<div id="guanzhu">
<a href="<?php if (get_option('Gztro_sina')!="") {?><?php echo stripslashes(get_option('Gztro_sina')); ?><?php }?>" target="_blank"><div class="weibo"></div></a>
<a href="<?php if (get_option('Gztro_tqq')!="") {?><?php echo stripslashes(get_option('Gztro_tqq')); ?><?php }?>" target="_blank"><div class="tqq"></div></a>
</div>
<div style=" display: none; ">
<img src="wp-content/themes/Nocower-Think/images/sina2.jpg">
<img src="wp-content/themes/Nocower-Think/images/tqq2.jpg">
</div>
<?php if (get_option('Gztro_sid_ad_top')!="") {?>
<div style="margin-bottom: 10px;"><?php echo stripslashes(get_option('Gztro_sid_ad_top')); ?></div>
<?php }?>
    <div class="feeds"><a href="/feed" target="_blank"><div class="feed-img"></div></a></div>
    <div class="submit" ><a href="/submit" target="_blank"  title="投稿给我们"><div class="submit-img"></div></a></div>

 <?php $html = '<ul class="index-tag">';
foreach (get_tags( array('number' => 45, 'orderby' => 'count', 'order' => 'DESC', 'hide_empty' => false) ) as $tag){
        $tag_link = get_tag_link($tag->term_id);
        $html .= "<a href='{$tag_link}' title='查看有关{$tag->name}的文章' class='{$tag->slug}'>";
        $html .= "<li>{$tag->name} ({$tag->count})</li></a>";
}
$html .= '</ul>';
echo $html; ?>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/soll.js"></script>
<div id="side-soll" style="overflow: hidden;">
<?php if (get_option('Gztro_sid_ad_bottom')!="") {?><div style="margin-bottom: 10px;"><?php echo stripslashes(get_option('Gztro_sid_ad_bottom')); ?></div><?php }?>
<?php include(TEMPLATEPATH.'/sidebar-tab.php'); ?>
</div>
</div>
</div>
