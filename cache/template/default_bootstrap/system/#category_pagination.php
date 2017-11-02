<?php defined('ROOT') or exit('Can\'t Access !'); ?>
<nav>
<ul class="pagination">
    <?php if(pages('up')) { ?>
    <li><a href="<?php echo category::url($catid,pages('up'));?>"><span aria-hidden="true">«</span></a></li>
    <?php } ?>
<?php if(is_array(pages()))
foreach(pages() as $p) { ?>
<?php if($p==$page) { ?>
<li class="active"><a><?php echo $p;?></a></li>
<?php } else { ?>
<li><a href="<?php echo category::url($catid,$p);?>"><?php echo $p;?></a></li>
<?php } ?>
    <?php } ?>
<?php if(pages('down')) { ?>
<li><a href="<?php echo category::url($catid,pages('down'));?>" aria-label="Next"><span aria-hidden="true">»</span></a></li>
<?php } ?>
</ul>
</nav>