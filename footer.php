<div class="clear"></div>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/scrolltopcontrol.js"></script>
<?php wp_footer(); ?>
<div id="footer">
<div id="footer-body">
<div id="footer-content">
<li> </li>
<li><a href="<?php bloginfo('url'); ?>/sitemap_baidu.xml" target="_blank" title="sitemap_baidu">百度地图</a> | <a href="<?php bloginfo('url'); ?>/sitemap.xml" target="_blank" title="sitemap_baidu">谷歌地图</a> | <a href="/submit" target="_blank">点此投稿</a> 
<?php if (get_option('Gztro_analytics')!="") {?>
<?php echo stripslashes(get_option('Gztro_analytics')); ?>
<?php }?>
</li>
<li style=" width: 950px; "><font style="float:left;">友情链接：</font><?php
	if(function_exists('wp_nav_menu')) {
	wp_nav_menu(array('theme_location'=>'foot','fallback_cb' => 'link_to_menu_editor','menu_class'=>'foot','menu_id'=>'foot','container'=>'foot'));
	}
    ?></li>
<li>&copy; <?php echo date("Y"); ?> <a href="<?php echo get_settings('home'); ?>"><?php bloginfo('name'); ?></a> All rights reserved ，不得在未经允许的情况下转载本站文章</li>
<li>Powered by Wordpress 
请勿发布违反中华人民共和国法律法规的言论，会员观点不代表本站官方立场。</li>
</div>
<?php if ( is_singular() ){ ?>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/comments-ajax.js"></script>
<?php }?>
<script type="text/javascript">
$(function(){
$(".widget ul li:last").css("border","none");
$(".widget .tab_post_links li:last").css("border","none");
$(".widget .sid_comm li:last").css("border","none");
$(".widget .blogroll li:last").css("border-bottom","1px dashed #CCC");
})
</script>
<script>
	$(function () {
		$.scrollUp();
	});
</script>
</body>
</html>