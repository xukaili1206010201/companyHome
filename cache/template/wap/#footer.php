<?php defined('ROOT') or exit('Can\'t Access !'); ?>
<div class="contact">
<div class="contact_title">
<?php echo lang(contactus);?>
</div>
<dl>
<dt><?php echo lang(zaixianfuwuzhichi);?></dt>
<dd><?php echo lang(ruguoninywenti);?></dd>
</dl>
<ul>
<li class="li1">Addres:<br /><?php echo get(address);?></li>
<li class="li2">Phone:<br /><?php echo get(tel);?></li>
<li class="li3">Email:<br /><?php echo get(email);?></li>
<?php if(config::get('site_login')=='1') { ?><li class="li4">Member:<br /><?php echo login_js();?><?php } ?></li>
<li class="li5">Powered by <a href="http://www.cmseasy.cn" title="CmsEasy企业网站系统" target="_blank">CmsEasy</a></li>
</ul>
</div>
<!--手机版尾部导航-->



<?php if(config::get('wap_foot_nav')=='1') { ?>
<?php echo template('foot_nav_b.html'); ?>
<?php } elseif (config::get('wap_foot_nav')=='2') { ?>
<?php echo template('foot_nav_c.html'); ?>
<?php } else { ?>
<?php echo template('foot_nav_a.html'); ?>
<?php } ?> 

<!--手机版尾部-->


<script language='JavaScript'>
//去掉虚线框
function bluring(){
if(event.srcElement.tagName=="A"||event.srcElement.tagName=="IMG") document.body.focus();
}
document.onfocusin=bluring;
</script>


</body>
</html>