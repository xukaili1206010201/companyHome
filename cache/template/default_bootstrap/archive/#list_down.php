<?php defined('ROOT') or exit('Can\'t Access !'); ?>
<?php echo template('header.html'); ?>
<!-- 面包屑导航开始 -->
<?php echo template('position.html'); ?>
<!-- 面包屑导航结束 -->


<!-- 中部开始 -->
<div class="container list-container">
<div class="row">
<div class="col-md-12">
<!-- 内容列表开始 -->
<?php if(is_array($archives))
foreach($archives as $i => $archive) { ?>
<div class="row list-down">
<div class="col-sm-3">
<a title="<?php echo $archive['stitle'];?>" target="_blank" href="<?php echo $archive['url'];?>" class="img-auto"><img alt="<?php echo $archive['stitle'];?>" src="<?php echo $archive['thumb'];?>" class="img-responsive"  onerror='this.src="<?php echo config::get('onerror_pic');?>"' /></a>
</div>
<div class="col-sm-9">
<h4><a title="<?php echo $archive['stitle'];?>" href="<?php echo $archive['url'];?>" target="_blank" ><?php echo $archive['title'];?></a></h4>
<p><?php echo lang(date);?>：<?php echo $archive['adddate'];?><br /><?php echo lang(strgrade);?>：<?php echo $archive['strgrade'];?><br /><?php echo lang(nowdownload);?>：<?php if($archive['attachment_id']) { ?><?php echo attachment_js($archive['aid']);?><?php } else { ?><?php echo lang(nodownload);?><?php } ?></p>
<p><?php echo cut(strip_tags($archive['introduce']),100);?>… <a href="<?php echo $archive['url'];?>" target="_blank">[<?php echo lang(more);?>]</a></p>
</div>
</div>
<?php } ?>
<!-- 内容列表结束 -->
<div class="blank30"></div>
<!-- 内容列表分页开始 -->
<?php if(isset($pages)) { ?>
<?php echo category_pagination($catid);?>
<?php } ?>
<!-- 内容列表分页结束 -->
</div>
</div><!-- /row -->
</div><!-- /container -->


<div class="blank30"></div>


<!-- 页底推荐图文产品开始 -->
<?php echo templatetag::tag('内容页底图文产品三条');?>
<!-- 页底推荐图文产品结束 -->


<?php echo template('footer.html'); ?>