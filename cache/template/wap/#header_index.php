<?php defined('ROOT') or exit('Can\'t Access !'); ?>
<!DOCTYPE html>
<html>
<head>
<meta name="Generator" content="CmsEasy 5_6_0_20170105_UTF8" />
<title><?php echo getTitle($archive,$category,$catid,$type);?></title>
<meta name="renderer" content="webkit">
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta name="keywords" content="<?php echo getKeywords($archive,$category,$catid,$type);?>" />
<meta name="description" content="<?php echo getDescription($archive,$category,$catid,$type);?>" />
<meta name="author" content="CmsEasy Team" />
<link rel="stylesheet" href="<?php echo $skin_path;?>/css/dl-menu.css" media="all"/>
<link href="<?php echo $skin_path;?>/css/wap-style.css" rel="stylesheet" /> 
<link href="<?php echo $skin_path;?>/css/wap-reset.css" rel="stylesheet" /> 
<?php if(get('wap_style_color')=='1') { ?>
<link href="<?php echo $skin_path;?>/wap1.css" rel="stylesheet" /> 
<?php } elseif (get('wap_style_color')=='2') { ?>
<link href="<?php echo $skin_path;?>/wap2.css" rel="stylesheet" /> 
<?php } elseif (get('wap_style_color')=='3') { ?>
<link href="<?php echo $skin_path;?>/wap3.css" rel="stylesheet" /> 
<?php } elseif (get('wap_style_color')=='4') { ?>
<link href="<?php echo $skin_path;?>/wap4.css" rel="stylesheet" /> 
<?php } elseif (get('wap_style_color')=='5') { ?>
<link href="<?php echo $skin_path;?>/wap5.css" rel="stylesheet" /> 
<?php } elseif (get('wap_style_color')=='6') { ?>
<link href="<?php echo $skin_path;?>/wap6.css" rel="stylesheet" /> 
<?php } elseif (get('wap_style_color')=='7') { ?>
<link href="<?php echo $skin_path;?>/wap7.css" rel="stylesheet" /> 
<?php } elseif (get('wap_style_color')=='8') { ?>
<link href="<?php echo $skin_path;?>/wap8.css" rel="stylesheet" /> 
<?php } elseif (get('wap_style_color')=='9') { ?>
<link href="<?php echo $skin_path;?>/wap9.css" rel="stylesheet" /> 
<?php } else { ?>
<?php } ?> 
</head>
<body>


<!--手机版菜单-->
<script type="text/javascript" src="<?php echo $skin_path;?>/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="<?php echo $skin_path;?>/js/modernizr.custom.js"></script>
<script type="text/javascript" src="<?php echo $skin_path;?>/js/jquery.dlmenu.js"></script>


<!--手机版菜单-->



<!--手机版头部-->
<header class="header">
<div class="w_set">
<a title="<?php echo get(sitename);?>" href="<?php echo $base_url;?>/" class="logo" ><img src="<?php echo get('wap_logo');?>" alt="<?php echo get(sitename);?>" width="<?php echo get(wlogo_width);?>" height="<?php echo get(wlogo_height);?>" />
<span><?php echo get('sitename');?></span></a>
<!--/logo-->

<!--搜索框-->
<script type="text/javascript">
$(document).ready(function(){

$(".btn-search").click(function(){
$("#search_mp").slideToggle("slow");
$(this).toggleClass("active"); return false;
});

 
});
</script>

<a  class="btn-search"></a>
<div id="search_mp" class="pc_show">
<div id="triangle-up"></div>
<form name='search' class="search_mp" action="<?php echo url('archive/search');?>" onsubmit="search_check();" method="post">
<input type="text" name="keyword" value="" placeholder="<?php echo lang(pleaceinputtext);?>" class="s_text" />
<input name='submit' type="submit" value=" <?php echo lang('search');?> " align="middle" class="s_btn" />
</form>
</div>

<menu id="dl-menu" class="dl-menuwrapper">
<button id="dl-menu-button">Open Menu</button>
<ul class="dl-menu">
<li><a href="<?php echo $base_url;?>/wap/"><?php echo lang(homepage);?></a></li>
<?php if(is_array(categories_nav()))
foreach(categories_nav() as $t) { ?>
<li><a href="<?php if(count(categories($t['catid']))) { ?>Line<?php } else { ?><?php echo $t['url'];?><?php } ?>"><?php echo $t['catname'];?></a>
<?php if(count(categories($t['catid']))) { ?>
<ul class="dl-submenu">
<li class="dl-back"><a href="#"><?php echo lang(go_back);?></a></li>
<?php if(is_array(categories($t['catid'])))
foreach(categories($t['catid']) as $t1) { ?>
<li><a title="<?php echo $t1['catname'];?>" href="<?php echo $t1['url'];?>"><?php echo $t1['catname'];?></a>
<?php if(count(categories($t1['catid']))) { ?>
<ul class="dl-submenu">
<li class="dl-back"><a href="#"><?php echo lang(go_back);?></a></li>
<?php if(is_array(categories($t1['catid'])))
foreach(categories($t1['catid']) as $t2) { ?>
<li><a href="<?php echo $t2['url'];?>" title="<?php echo $t2['catname'];?>"><?php echo $t2['catname'];?></a>
<?php if(count(categories($t2['catid']))) { ?>
<ul class="dl-submenu">
<li class="dl-back"><a href="#"><?php echo lang(go_back);?></a></li>
<?php if(is_array(categories($t2['catid'])))
foreach(categories($t2['catid']) as $t3) { ?>
<li><a href="<?php echo $t3['url'];?>" title="<?php echo $t3['catname'];?>"><?php echo $t3['catname'];?></a></li>
<?php } ?>
</ul>
<?php } ?>
</li>
<?php } ?>
</ul>
<?php } ?>
</li>
<?php } ?>
</ul>
<?php } ?>
</li>
<?php } ?>
</ul>
</menu>
<!--/dl-menu-->
<script type="text/javascript">$(function(){$( '#dl-menu' ).dlmenu();});</script><!--/手机菜单-->
</div>
<!--/w_set-->
</header>
<!--/header-->
<!--手机版头部-->

<div style="height:50px;"></div><!-- 页头绝对定位站位 -->


<div class="banner">
<?php echo template('system/wapslide.html'); ?>
</div>
