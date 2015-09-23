<?php get_header(); ?>
<span id="btn_page_prev"><?php next_post_link( '%link', '<span id="fanye">〈</span>' ); ?></span>
<span id="btn_page_next"><?php previous_post_link( '%link', '<span id="fanye">〉</span>' ); ?></span>   
<div id="content">
	<div id="postlist">
	<?php if(have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post-single">
			<div class="post-title-single"><h1><?php if (is_sticky()) {echo "<font style='color:#D54E21;'>[推荐]</font>";} ?><?php the_title(); ?><em><?php $t1=$post->post_date; $t2=date("Y-m-d H:i:s"); $diff=(strtotime($t2)-strtotime($t1))/3600; if($diff<24){echo "<font style='color:red;font-size:10px;'> New</font>";} ?></em></h1>
		<span class="post-single-span">本文由 <?php the_author(); ?> 于 <?php the_time('m') ?>月-<?php the_time('d') ?>日 发布在 <?php the_category(', ') ?> 分类下 | <?php printf( _e( '超过','Gztro' ) ); ?> <?php post_views(' '); ?> 次围观 | <?php comments_popup_link ('暂无评论','1条评论','%条评论'); ?> <?php edit_post_link(' | 编辑本文', '', ''); ?></span>
		</div>
		<div class="bdsharebuttonbox"  id="single-share"><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a><a href="#" class="bds_tqf" data-cmd="tqf" title="分享到腾讯朋友"></a><a href="#" class="bds_bdhome" data-cmd="bdhome" title="分享到百度新首页"></a><a href="#" class="bds_douban" data-cmd="douban" title="分享到豆瓣网"></a><a href="#" class="bds_thx" data-cmd="thx" title="分享到和讯微博"></a><a href="#" class="bds_sqq" data-cmd="sqq" title="分享到QQ好友"></a><a href="#" class="bds_mshare" data-cmd="mshare" title="分享到一键分享"></a><a href="#" class="bds_taobao" data-cmd="taobao" title="分享到我的淘宝"></a><a href="#" class="bds_hi" data-cmd="hi" title="分享到百度空间"></a><a href="#" class="bds_tsohu" data-cmd="tsohu" title="分享到搜狐微博"></a><a href="#" class="bds_qq" data-cmd="qq" title="分享到QQ收藏"></a><a href="#" class="bds_t163" data-cmd="t163" title="分享到网易微博"></a><a href="#" class="bds_ibaidu" data-cmd="ibaidu" title="分享到百度个人中心"></a><a href="#" class="bds_qy" data-cmd="qy" title="分享到奇艺奇谈"></a><a href="#" class="bds_mogujie" data-cmd="mogujie" title="分享到蘑菇街"></a><a href="#" class="bds_diandian" data-cmd="diandian" title="分享到点点网"></a><a href="#" class="bds_huaban" data-cmd="huaban" title="分享到花瓣"></a><a href="#" class="bds_share189" data-cmd="share189" title="分享到手机快传"></a><a href="#" class="bds_duitang" data-cmd="duitang" title="分享到堆糖"></a><a href="#" class="bds_youdao" data-cmd="youdao" title="分享到有道云笔记"></a><a href="#" class="bds_baidu" data-cmd="baidu" title="分享到百度搜藏"></a><a href="#" class="bds_hx" data-cmd="hx" title="分享到和讯"></a><a href="#" class="bds_tfh" data-cmd="tfh" title="分享到凤凰微博"></a></div>
<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"1","bdSize":"16"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
            <?php if (get_option('Gztro_sid_ad-single-top')!="") {?>
<div style=" margin: 10px 0; text-align: center;"><?php echo stripslashes(get_option('Gztro_sid_ad-single-top')); ?></div><?php }?>
			<div class="post-content">
			<?php the_content(__('阅读全文')); ?>
			<?php wp_link_pages(array('before' => '<div class="pnext-st">', 'after' => '', 'next_or_number' => 'next', 'previouspagelink' => '上一页', 'nextpagelink' => "")); ?>   <?php wp_link_pages(array('before' => '', 'after' => '', 'next_or_number' => 'number', 'link_before' =>'<span>', 'link_after'=>'</span>')); ?>   <?php wp_link_pages(array('before' => '', 'after' => '</div>', 'next_or_number' => 'next', 'previouspagelink' => '', 'nextpagelink' => "下一页")); ?>
		<div class="crinfo">
            <li>更新日期：<?php the_time('Y-m-d H:i:s'); ?></li>
			<li>文章标签：<?php the_tags('', ',', ' '); ?></li>
			<li>文章链接：<a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title() ?></a> </li>
			<li>站方声明：除特别标注, 本站所有文章均为原创, 互联分享, 尊重版权, 转载请注明.</li>
		</div>
</div>
<?php if (get_option('Gztro_sid_ad-single-bottom')!="") {?>
<div style=" margin-top: 10px; "><?php echo stripslashes(get_option('Gztro_sid_ad-single-bottom')); ?></div><?php }?>
<?php include(TEMPLATEPATH.'/related.php'); ?>
 <?php if (get_option('Gztro_ad_single_foot')!="") {?><div style=" margin-bottom: 10px; "><?php echo stripslashes(get_option('Gztro_ad_single_foot')); ?></div><?php }?>
<div id="comments"><?php comments_template('', true); ?></div>
</div>
<?php endwhile; endif; ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>