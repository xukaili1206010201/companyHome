<?php defined('ROOT') or exit('Can\'t Access !'); ?>
<?php echo template('header_index.html'); ?>


<div class="diyihang">
<div class="diyihang_title">
<?php echo templatetagwap::tag('手机版首页第一行栏目');?>
</div>


<link href="<?php echo $skin_path;?>/css/jquery.mCustomScrollbar.css" rel="stylesheet" />
<script type="text/javascript" src="<?php echo $skin_path;?>/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script>
(function($){
$(window).load(function(){

$.mCustomScrollbar.defaults.theme="light-2"; //set "light-2" as the default theme

$("#ho").mCustomScrollbar({
axis:"x",
advanced:{autoExpandHorizontalScroll:true}
});

});
})(jQuery);
</script>
<script>
(function($){
$(window).load(function(){

$.mCustomScrollbar.defaults.theme="light-2"; //set "light-2" as the default theme

$("#ho").mCustomScrollbar({
axis:"x",
advanced:{autoExpandHorizontalScroll:true}
});

});
})(jQuery);
</script>
<div class="made scrollbox" id="horizontal">
<div class="madegame">
<ul class="clearfix" id="ho">
<?php echo templatetagwap::tag('手机版首页第一行图片左右拉动10条');?>
</ul>
</div>
<div class="blank30"></div>
</div>
</div>

<div class="blank30"></div>
<?php echo templatetagwap::tag('手机版首页第二行图片翻页5条');?>

<script src="<?php echo $skin_path;?>/js/swipe.js"></script>  
<script>  
var slider =  
  Swipe(document.getElementById('slider_swipe'), {  
    auto: 3000,  
    continuous: true,  
    callback: function(pos) {  
        var i = bullets.length;  
        while(i--){  
            bullets[i].className = ' ';  
        }  
        bullets[pos].className = 'on';  
    }  
  });  
var bullets = document.getElementById('position').getElementsByTagName('li');  
</script>

<div class="blank30"></div>



<div class="disanhang">
<div class="disanhang_title">
<?php echo templatetagwap::tag('手机版首页第三行栏目');?>
</div>

<script type="text/javascript" src="<?php echo $skin_path;?>/js/TouchSlide.1.1.js"></script>
<!-- 多图滚动 -->
<div id="scrollBox" class="scrollBox">

<div class="hd">
<span class="prev"></span>
<ul></ul>
<span class="next"></span>
</div>
<div class="blank10"></div>
<div class="bd">
<?php echo templatetagwap::tag('手机版首页第三行图片滚动6条');?>
</div>


</div><!-- scrollBox E -->
<script type="text/javascript">
TouchSlide({ 
slideCell:"#scrollBox",
titCell:".hd ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
effect:"leftLoop", 
autoPage:true, //自动分页
switchLoad:"_src" //切换加载，真实图片路径为"_src" 
});
</script>



</div>
</div>


<div>
<div class="disihang">
<?php echo templatetagwap::tag('手机版首页第四行栏目图片说明');?>
<div class="disihang_3">
<ul>
<li class="disihang_3_1"><?php echo templatetagwap::tag('手机版首页第四行右侧子栏目图片');?></li>
<li class="disihang_3_2"><?php echo templatetagwap::tag('手机版首页第四行左侧子栏目图片');?></li>
<li class="disihang_3_3"><?php echo templatetagwap::tag('手机版首页第四行左侧子栏目标题说明');?></li>
<div class="clear"></div>
</ul>
</div>
</div>
</div>


<?php echo template('footer.html'); ?>