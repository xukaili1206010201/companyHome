<?php defined('ROOT') or exit('Can\'t Access !'); ?>

<?php if(vote::title($aid,1)) { ?>

<!-- 页面标题开始 -->
<div class="t_1 wow fadeIn">
<div>
<h3><?php echo lang(vote);?></h3>
<p>Vote</p>
</div>
</div>
<form name="voteform" method="post" action="<?php echo url('vote/do'); ?>">
    <input type="hidden" name="aid" value="<?php echo $aid;?>"/>

     
            <?php if(!vote::voted($aid,$user['username'])) { ?>


 <div class="blank60"></div>
   <div id="content_vote" class="w_set">
            <ul>
                <?php $i=1; while(vote::title($aid,$i)) { ?>

                <li>
                   <span class="content-num"> <?php echo $i;?></span> <span><?php echo vote::title($aid,$i);?></span>
                    <?php if(vote::img($aid,$i)) { ?>
                    <img src="<?php echo vote::img($aid,$i);?>" width="60" class="vote_img" />
                    <?php } ?>
                   <div class="optionba"> <?php echo form::radio('vote',$i,0);?> </div>
   <div class="clear">&nbsp;</div>
                </li>

                <?php $i++; } unset($i); ?>

            </ul>
 <div class="blank10"></div>

            <?php echo form::submit();?> 
</div>
            <?php } else { ?>



 <div class="blank60"></div>
   <div id="content_vote" class="w_set">
            <ul>
                
                
                <?php $i=1; while(vote::title($aid,$i)) { ?>

                <li>
                    <span class="content-num"><?php echo $i;?></span> <span><?php echo vote::title($aid,$i);?></span>
                        <?php if(vote::img($aid,$i)) { ?>
                        <img src="<?php echo vote::img($aid,$i);?>" width="60" />
                        <?php } ?>
      
                    <div class=optionbar><div style="width: <?php echo vote::get($aid,$i)*3+5;?>px;"></div></div>
                    <?php echo vote::get($aid,$i);?>
                    <div class="clear">&nbsp;</div>
                </li>

                <?php $i++; } unset($i);?>

            </ul>
</div>
            <?php } ?>
            
</form>
<?php } ?>