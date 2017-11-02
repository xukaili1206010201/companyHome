<?php defined('ROOT') or exit('Can\'t Access !'); ?>
<!--手机版幻灯片-->
<link href="<?php echo $skin_path;?>/css/royalslider.css" rel="stylesheet" media="all">
<link href="<?php echo $skin_path;?>/css/rs-minimal-white.css" rel="stylesheet" media="all">
<script src="<?php echo $skin_path;?>/js/jquery.royalslider.min.js"></script>
<div class="sliderContainer fullWidth clearfix">
  <div id="full-width-slider" class="royalSlider heroSlider rsMinW">
    <?php if(get('wslide_number')=='1') { ?><div class="rsContent"><a href="<?php echo get(wslide_pic1_url);?>"><img class="rsImg" src="<?php echo get(wslide_pic1);?>" /></a></div>
<?php } elseif (get('wslide_number')=='2') { ?>
<div class="rsContent"><a href="<?php echo get(wslide_pic1_url);?>"><img class="rsImg" src="<?php echo get(wslide_pic1);?>" /></a></div>
    <div class="rsContent"><a href="<?php echo get(wslide_pic2_url);?>"><img class="rsImg" src="<?php echo get(wslide_pic2);?>" /></a></div>
<?php } elseif (get('wslide_number')=='3') { ?>
<div class="rsContent"><a href="<?php echo get(wslide_pic1_url);?>"><img class="rsImg" src="<?php echo get(wslide_pic1);?>" /></a></div>
    <div class="rsContent"><a href="<?php echo get(wslide_pic2_url);?>"><img class="rsImg" src="<?php echo get(wslide_pic2);?>" /></a></div>
    <div class="rsContent"><a href="<?php echo get(wslide_pic3_url);?>"><img class="rsImg" src="<?php echo get(wslide_pic3);?>" /></a></div>
<?php } elseif (get('wslide_number')=='4') { ?>
<div class="rsContent"><a href="<?php echo get(wslide_pic1_url);?>"><img class="rsImg" src="<?php echo get(wslide_pic1);?>" /></a></div>
    <div class="rsContent"><a href="<?php echo get(wslide_pic2_url);?>"><img class="rsImg" src="<?php echo get(wslide_pic2);?>" /></a></div>
    <div class="rsContent"><a href="<?php echo get(wslide_pic3_url);?>"><img class="rsImg" src="<?php echo get(wslide_pic3);?>" /></a></div>
<div class="rsContent"><a href="<?php echo get(wslide_pic4_url);?>"><img class="rsImg" src="<?php echo get(wslide_pic4);?>" /></a></div>
<?php } else { ?>
<div class="rsContent"><a href="<?php echo get(wslide_pic1_url);?>"><img class="rsImg" src="<?php echo get(wslide_pic1);?>" /></a></div>
    <div class="rsContent"><a href="<?php echo get(wslide_pic2_url);?>"><img class="rsImg" src="<?php echo get(wslide_pic2);?>" /></a></div>
    <div class="rsContent"><a href="<?php echo get(wslide_pic3_url);?>"><img class="rsImg" src="<?php echo get(wslide_pic3);?>" /></a></div>
<div class="rsContent"><a href="<?php echo get(wslide_pic4_url);?>"><img class="rsImg" src="<?php echo get(wslide_pic4);?>" /></a></div>
<div class="rsContent"><a href="<?php echo get(wslide_pic5_url);?>"><img class="rsImg" src="<?php echo get(wslide_pic5);?>" /></a></div>
<?php } ?>
  </div>
</div>
<script>
jQuery(document).ready(function($) {
$('#full-width-slider').royalSlider({
arrowsNav: true,
loop: false,
keyboardNavEnabled: true,
controlsInside: false,
imageScaleMode: 'fill',
arrowsNavAutoHide: false,
autoScaleSlider: true, 
autoScaleSliderWidth: <?php echo get(wslide_width);?>,     
autoScaleSliderHeight: <?php echo get(wslide_height);?>,
controlNavigation: 'bullets',
thumbsFitInViewport: false,
navigateByClick: true,
startSlideId: 0,
autoPlay: false,
transitionType:'move',
globalCaption: true,
deeplinking: {
  enabled: true,
  change: false
},
imgWidth: 0,
imgHeight: 0
});
});
</script>

<style>
.royalSlider {
width: <?php echo get(wslide_width);?>px;
height: <?php echo get(wslide_height);?>px;
}
</style>
<!--手机版幻灯片-->