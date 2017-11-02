<?php defined('ROOT') or exit('Can\'t Access !'); ?>
<?php echo template('header.html'); ?>
<!-- 面包屑导航开始 -->
<?php echo template('position.html'); ?>
<!-- 面包屑导航结束 -->

<!-- 页面标题开始 -->
<div class="title">
<h3 class="wow fadeInDown" data-wow-delay="0.5s"><a href="<?php echo $cat['url'];?>"><?php echo $category[$catid]['catname'];?><small><?php echo $category[$catid]['subtitle'];?></small></a></h3>
<p class="wow fadeIn" data-wow-delay="0.5s"><?php echo $category[$catid]['description'];?></p>
<span>——</span>
</div>
<!-- 页面标题结束 -->

<!-- 中部开始 -->
<div class="container">
<!--用于打印和文字放大-->
<div class="content_tools_box">
<p class="content_tools">
<a href="javascript:CallPrint('print');"><?php echo lang(printcontent);?></a> &nbsp; &nbsp; &nbsp; <a href="javascript:doZoom(14)"><?php echo lang(small);?></a>&nbsp; &nbsp;<a href="javascript:doZoom(18)"><?php echo lang(middle);?></a>&nbsp; &nbsp;<a href="javascript:doZoom(20)"><?php echo lang(big);?></a>
</p>
<div class="clearfix"></div>
<script src="<?php echo $skin_path;?>/js/c_tool.js" type="text/javascript" ></script>
</div>
<!--/用于打印和文字放大-->
<div class="content lead" id="print">
<!-- 内容 -->
<?php
$page = intval(front::$get['page']);
if($page==0)$page=1;
$content = $category[$catid][categorycontent];
$contents = preg_split('%<div style="page-break-after(.*?)</div>%si', $content);
if ($contents) {
$pages = count($contents);
front::$record_count = $pages * config::get('list_pagesize');
$category[$catid][categorycontent] = $contents[$page - 1];
}
?>

<?php echo $category[$catid]['categorycontent'];?>
<?php if($pages>1) { ?>
<!-- 内页分页 -->
<?php echo category_pagination($catid);?>
<?php } ?>
<!-- 内容结束 -->
<div class="blank60"></div>
</div>
</div><!-- /container -->


<div class="blank30"></div>


<!-- 页底推荐图文产品开始 -->
<?php echo templatetag::tag('内容页底图文产品三条');?>
<!-- 页底推荐图文产品结束 -->


<?php echo template('footer.html'); ?>