<?php get_header(); ?>
<div id="content">
<div class="error" style=" background-color: #FFF; border-top: 4px solid #f60; ">
<li style="font-size: 180px;text-align: center;color: #DDD;height: 350px;line-height: 350px;">404</li>
<li style="text-align: center;font-size:20px;width: 100%;height: 150px;line-height: 150px;">卧擦，页面找不到啦，有木有！，<span id="secondsDisplay">3</span> 秒钟之后返回首页。</FONT>
<script type="text/javascript">  
  var i = 3;  
  var intervalid;  
    intervalid = setInterval("fun()", 1000);  
    function fun() {  
          if (i == 0) {  
                  window.location.href = "<?php bloginfo('url'); ?>";  
                        clearInterval(intervalid);  
                      }  
  document.getElementById("secondsDisplay").innerHTML = i;  
  i--;   
    }  
</script>
</div></div>
<?php get_footer(); ?>