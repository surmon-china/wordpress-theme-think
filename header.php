<!DOCTYPE HTML>
<html dir="ltr" lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php if ( is_home() ) { ?><?php bloginfo('name'); ?> - <?php bloginfo('description');?><?php } ?>
<?php if ( is_tag() ) { ?><?php single_tag_title(); ?><? $paged = get_query_var('paged'); if ( $paged > 1 ) printf('– 第 %s 页 ',$paged); ?> - <?php bloginfo('name'); ?><?php } ?>
<?php if ( is_category() ) { ?><?php single_cat_title(); ?><? $paged = get_query_var('paged'); if ( $paged > 1 ) printf('– 第 %s 页 ',$paged); ?> - <?php bloginfo('name'); ?><?php } ?>
<?php if ( is_page() ) { ?><?php single_post_title(''); ?> - <?php bloginfo('name'); ?><?php } ?>
<?php if ( is_single() ) { ?><?php echo trim(wp_title('',0)); ?><?php if (get_query_var('page')) { echo ' - 第'; echo get_query_var('page'); echo '页';}?> - <?php bloginfo('name'); ?><?php } ?>
<?php if ( is_search() ) { ?>"<?php echo $s; ?>"<?php printf( _e( 'searchResult','Gztro' ) ); ?><?php bloginfo('name'); ?><?php } ?>
<?php if ( is_404() ) { ?><?php printf( _e( 'title404','Gztro' ) ); ?> - <?php bloginfo('name'); ?><?php } ?>
<?php if ( is_author() ) { ?><?php printf( _e( 'titlelist','Gztro' ) ); ?> - <?php bloginfo('name'); ?><?php } ?>
<?php if ( is_month() || is_day() ) { ?><?php the_time('Y - F'); ?> - <?php bloginfo('name'); ?><?php } ?>
</title>
<meta http-equiv="X-UA-Compatible" content="IE=7"/>
<?php if (get_option('Gztro_keywords')!="") {?>
<meta name="keywords" content="<?php echo stripslashes(get_option('Gztro_keywords')); ?>" />
<?php } ?>
<?php if (get_option('Gztro_description')!="") {?>
<meta name="description" content="<?php echo stripslashes(get_option('Gztro_description')); ?>" />
<?php }?>
<link rel="Shortcut Icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico" type="image/x-icon"/>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_directory'); ?>/style.css" />
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>"/>
<?php wp_head(); ?>
</head>
<body>
<div id="header-all">
<?php if ( is_user_logged_in() ) { ?><ul class="login-yes" >
<li style="float: left;margin-right: 22px;"><font style="color:#ffffff">欢迎，</font><?php echo get_avatar( get_current_user_id(), 16 );?>&nbsp;&nbsp;<a class="user_info" href="/wp-admin/profile.php" title="设置个人资料，绑定微博"><?php global $current_user; get_currentuserinfo(); echo $current_user->display_name; ?></a></li>
<li style="float:right;" ><a href="<?php echo wp_logout_url("/"); ?>" title="退出">退出</a></li></ul>
<?php } else { ?><ul class="login-no" style="width: 80px;">
<li style="float: left;"><a href="<?php echo get_settings('home'); ?>/wp-login.php" target="_blank">登陆</a></li>
<li style="float: right;"><a href="<?php echo get_settings('home'); ?>/wp-login.php?action=register" target="_blank">注册</a></li>
</ul><?php } ?> 
</div>
<div id="container">
<div class="header">
<div class="header-inner">
	<?php
	if(function_exists('wp_nav_menu')) {
	wp_nav_menu(array('theme_location'=>'nav','fallback_cb' => 'link_to_menu_editor','menu_class'=>'nav','menu_id'=>'nav','container'=>'ul'));
	}
	?>
<div class="toplogo">
<a href="<?php echo get_settings('home'); ?>" title="<?php bloginfo('name'); ?>" ><div class="logopng"></div></a>
</div>
</div>
</div>


