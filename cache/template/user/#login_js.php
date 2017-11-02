<?php defined('ROOT') or exit('Can\'t Access !'); ?>
<?php if(isset($user) && is_array($user)) { ?>
<?php if($user['groupid']=='888') { ?><a rel="external nofollow" href="<?php echo $admin_url;?>" target="_blank" class="top-login"><?php echo lang(admin_login);?></a><?php } ?>
<a rel="external nofollow" href="<?php echo url('user');?>" target="_blank"><?php echo lang(membercenter);?></a>
<?php }else{ ?>
<a rel="external nofollow" title="<?php echo lang(register);?>" href="<?php echo url('user/register');?>"><?php echo lang(register);?></a>
<a rel="external nofollow" title="<?php echo lang(login);?>" href="<?php echo url('user/login');?>" class="top-login"><?php echo lang(login);?></a>
<?php } ?>