<?php defined('ROOT') or exit('Can\'t Access !'); ?>
<?php if(config::get('comment')=='1') { ?>


<link href="<?php echo $skin_path;?>/css/comment.css" rel="stylesheet">



<!-- 页面标题开始 -->
<div class="title">
<h3><a><?php echo lang(comment);?><small>COMMENT</small></a></h3>
<p></p>
<span>——</span>
</div>
<!-- 页面标题结束 -->


<hr class="featurette-divider">


<div class="container">



<form action="<?php echo url('comment/add'); ?>" method="POST" name="comment_form" id="comment" class="wow fadeIn" data-wow-delay="0.6s">
<div class="comm">
<div class="blank10"></div>
<input type="hidden" name="aid" value="<?php echo $archive['aid'];?>"/>
<?php echo lang('username');?>	Name
<div class="blank10"></div>
<input type="text" name="username" class="comm_name" value="<?php echo get('username');?>"   />
<div class="blank10"></div>
<?php if(config::get('mobilechk_enable') && config::get('mobilechk_comment')) { ?>
<script src="<?php echo $base_url;?>/js/mobilechk.js"></script>
<?php echo lang(tel);?> Tel
<div class="blank10"></div>
<input type="text" class="comm_name" name="telphone" id="telphone" />
<div class="blank10"></div>
<?php echo lang(phone_verification_code);?>
<div class="blank10"></div>
<input id="btm_sendMobileCode" onclick="sendMobileCode('<?php echo url('tool/smscode');?>',$('#telphone'));" type="button" value="<?php echo lang(send_cell_phone_verification_code);?>" />
<input type='text' id="mobilenum"  tabindex="4" placeholder="	<?php echo lang(please_enter_the_phone_verification_code);?>	"  name="mobilenum" />
<div class="blank10"></div>
<?php } ?>

<div class="blank10"></div>
<?php echo lang(comment);?> Comment

<div class="blank10"></div>
<textarea name="content" id="textarea"></textarea>

<?php if(config::get('verifycode')=='1') { ?>
<div class="balnk10"></div>
<?php echo lang('verifycode');?>
<div class="blank20"></div>
<input type='text' id="verify"  tabindex="3"  name="verify" /><?php echo verify();?>
<div class="balnk10"></div>
<?php } ?>

<?php if(config::get('verifycode')=='2') { ?>
<div class="blank20"></div>
<div id="verifycode_embed"></div>
<script src="http://api.geetest.com/get.php"></script>
<script>
var loadGeetest = function(config) {
window.gt_captcha_obj = new window.Geetest({
gt : config.gt,
challenge : config.challenge,
product : 'float',
offline : !config.success
});
gt_captcha_obj.appendTo("#verifycode_embed");
};

$.ajax({
url : '<?php echo url('tool/geetest',0);?>',
type : "get",
dataType : 'JSON',
success : function(result) {
//console.log(result);
loadGeetest(result)
}
});
</script>
<?php } ?>

<div class="blank30"></div>
<input name="submit" class="btn" value=" <?php echo lang('submit_on');?> " type="submit" />
<div class="blank30"></div>

<div class="comment_info">
<?php if($topid==0) { ?><?php } else { ?><a rel="nofollow" href="<?php echo url('comment/list/aid/'.$archive['aid']); ?>"><?php } ?><?php echo lang('have');?><span class="commentnumber">(<?php echo comment::countcomment($archive['aid']);?>)</span><?php echo lang(bitofcommenters);?>&nbsp;&nbsp;<strong><?php echo lang('clicktoview');?></strong></a>
</div>

</div><!-- /comm -->
</form>




<div class="blank60"></div>
</div><!-- /container -->
<?php } ?>