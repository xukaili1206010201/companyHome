<?php defined('ROOT') or exit('Can\'t Access !'); ?>

<?php
if(front::get('case') == 'area'){
?>
<style>.banner{background:url(<?php echo get(cslide_pic1);?>) no-repeat 50% bottom}</style>
<?php
}elseif(front::get('case') == 'announ'){
?>
<style>.banner{background:url(<?php echo get(cslide_pic1);?>) no-repeat 50% bottom}</style>
<?php
}elseif(front::get('case') == 'guestbook'){
?>
<style>.banner{background:url(<?php echo get(cslide_pic1);?>) no-repeat 50% bottom}</style>
<?php
}elseif(front::get('case') == 'comment'){
?>
<style>.banner{background:url(<?php echo get(cslide_pic1);?>) no-repeat 50% bottom}</style>
<?php
}elseif(front::get('case') == 'type'){
?>
<style>.banner{background:url(<?php echo get(cslide_pic1);?>) no-repeat 50% bottom}</style>
<?php
}elseif(front::get('case') == 'special'){
?>
<style>.banner{background:url(<?php echo get(cslide_pic1);?>) no-repeat 50% bottom}</style>
<?php
}elseif(front::get('case') == 'tag'){
?>
<style>.banner{background:url(<?php echo get(cslide_pic1);?>) no-repeat 50% bottom}</style>
<?php
}elseif(front::get('case') == 'mailsubscription'){
?>
<style>.banner{background:url(<?php echo get(cslide_pic1);?>) no-repeat 50% bottom}</style>
<?php
}else{
?>
<script type="text/javascript">
    //<!CDATA[
        var bodyBgs = [];
        bodyBgs[0] = "<?php echo get(cslide_pic1);?>";
        bodyBgs[1] = "<?php echo get(cslide_pic2);?>";
        bodyBgs[2] = "<?php echo get(cslide_pic3);?>";
        bodyBgs[3] = "<?php echo get(cslide_pic4);?>";
        bodyBgs[4] = "<?php echo get(cslide_pic5);?>";
        var randomBgIndex = Math.round( Math.random() * 4 );
    //输出随机的背景图
        document.write('<style>.banner{background:url(' + bodyBgs[randomBgIndex] + ') no-repeat 50% bottom}</style>');
    //]]>
</script>
<?php
}
?>
<section>
<div class="banner" style="height:<?php echo get('cslide_height');?>px;">
</div>
</section>