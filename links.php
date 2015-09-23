<?php
/*
Template Name: Links
*/
?>
<?php get_header(); ?>
<div id="content">
	<div id="postlist">
		<div class="post-single">
		<div class="linkpage">
<ul>
<?php wp_list_bookmarks('categorize=1&
category_orderby=id&before=<li>&after=</li>&show_images=0&
show_description=1&orderby=name&title_before=<h3>&title_after=</h3>'); ?>
</ul>
<ul>
<li>●此页面为本站友情链接页面。</li>

</ul>
</div>
		
		</div>
	</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>