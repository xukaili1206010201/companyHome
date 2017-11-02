<?php defined('ROOT') or exit('Can\'t Access !'); ?>

<div class="container ">
<nav class="sub_menu">
<?php
if(front::get('case') == 'area'){
?>
<div>
<h3><?php echo area::getpositonhtml(get('province_id'),get('city_id'),get('section_id'),get('id'));?></h3>
</div>
<?php
}elseif($topid==0){
?>
<?php
}elseif(front::get('case') == 'announ'){
?>
<div>
<h3><a title="<?php echo lang(siteannoun);?>" href="#"><?php echo lang(siteannoun);?></a></h3>
</div>
<?php
}elseif(front::get('case') == 'guestbook'){
?>
<div>
<h3><a title="<?php echo lang('guestbook');?>" href="#"><?php echo lang('guestbook');?></a></h3>
</div>
<?php
}elseif(front::get('case') == 'comment'){
?>
<div>
<h3><a title="<?php echo $t['name'];?>" href="<?php echo $t['url'];?>"><?php echo lang('commentlist');?></a></h3>
</div>
<?php
}elseif(front::get('case') == 'type'){
?>
<div>
<h3><?php echo type::getpositionhtml($type['typeid']);?></h3>
</div>
<?php
}elseif(front::get('case') == 'special'){
?>
<div>
<h3><a title="<?php echo $special['title'];?>" href="#"><?php echo $special['title'];?></a></h3>
</div>
<?php
}elseif(front::get('case') == 'tag'){
?>
<div>
<h3><a title="<?php echo $tag;?>" href="#"><?php echo $tag;?></a></h3>
</div>
<?php
}elseif(front::get('case') == 'mailsubscription'){
?>
<div>
<h3><a href="#" title="<?php echo lang(mailsubscription);?>"><?php echo lang(mailsubscription);?></a></h3>
</div>
<?php
}else{
?>
<ol class="breadcrumb"><span class="glyphicon glyphicon-list"></span>
<li><a href="<?php echo $base_url;?>/"><?php echo lang(homepage);?></a></li>
<?php if(is_array(position($catid)))
foreach(position($catid) as $t) { ?>
<li><a title="<?php echo $t['name'];?>" href="<?php echo $t['url'];?>"><?php echo $t['name'];?></a></li>
<?php } ?>
</ol>

<?php
}
?>
</nav>
</div>
<!--/sub_menu-->