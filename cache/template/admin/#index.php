<?php defined('ROOT') or exit('Can\'t Access !'); ?>
<!DOCTYPE html>
<html>
  <head>
<meta name="Generator" content="CmsEasy 5_6_0_20170105_UTF8" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo get('sitename');?> - 后台管理中心</title>
    <link href="<?php echo $skin_path;?>/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo $skin_path;?>/css/admin.css" rel="stylesheet" type="text/css" />
<script src="<?php echo $skin_path;?>/js/jquery-1.11.2.min.js"></script>
<script src="<?php echo $base_url;?>/js/jquery-browser.js"></script>
  </head>
<body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar" aria-expanded="false" aria-controls="sidebar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="logo col-sm-3 col-md-2" href="<?php echo $base_url;?>/index.php?admin_dir=<?php echo get('admin_dir');?>&site=default"><img src="<?php echo $skin_path;?>/images/logo.png" alt="logo" /></a>
  <div id="sideNav" href=""><i class="glyphicon glyphicon-th-list"></i></div>
        </div>
        <div id="navbar" class="navbar-collapse collapse col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 pull-right">
           <ul class="nav navbar-top-links navbar-right"> 
<li><a href="<?php echo $base_url;?>/"  target="_blank">预览</a></li>
<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">静态
<span class="caret"></span></a>
<ul class="dropdown-menu tasks">
<li><a href="<?php echo $base_url;?>/index.php?case=cache&act=make_show&admin_dir=<?php echo get('admin_dir');?>&site=default">电脑版静态</a></li>
<li><a href="<?php echo $base_url;?>/index.php?case=wapcache&act=make_show&admin_dir=<?php echo get('admin_dir');?>&site=default">手机版静态</a></li>
</ul>
</li>

<li><a href="<?php echo $base_url;?>/index.php?case=table&act=add&table=archive&admin_dir=<?php echo get('admin_dir');?>">添加</a>
<li><a href="<?php echo url::create('config/remove');?>" class="on">缓存</a></li>
<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-bell"></i>
<span class="caret"></span></a>
<ul id="information" class="dropdown-menu envelope">    
</ul>
</li>
<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-tasks"></i>
<span class="caret"></span></a>
<ul class="dropdown-menu tasks">
<li><a href="http://www.cmseasy.cn/" target="_blank">软件官网</a></li>
<li><a href="http://www.cmseasy.cn/service/" target="_blank">购买授权</a></li>
<li><a href="http://www.cmseasy.org" target="_blank">问题交流</a></li>
<li><a href="http://www.cmseasy.cn/chm/" target="_blank">在线教程？</a></li>
</ul>
</li>
<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-globe"></i>
<span class="caret"></span></a>
<ul class="dropdown-menu tasks">
<?php if(is_array(getwebsite()))
foreach(getwebsite() as $d) { ?>
<li><a href="<?php echo $d['addr'];?>"><?php echo $d['name'];?></a></li>
<?php } ?>
</ul>
</li>
<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-user"></i> <?php echo $user['username'];?><span class="caret"></span></a>
<ul class="dropdown-menu user">
<li><a href="<?php echo $base_url;?>/index.php?case=index&act=index&mod=user&admin_dir=<?php echo get('admin_dir');?>&site=default"><i class="fa fa-user fa-fw"></i> 编辑资料</a></li>
<li><a href="<?php echo $base_url;?>/index.php?case=index&act=logout&admin_dir=<?php echo config::get('admin_dir');?>"><i class="fa fa-sign-out fa-fw"></i> 退出</a></li>
</ul>
</li>
</ul>
      </div>
    </div>
  </nav>

    <div class="container-fluid">
      <div class="row">
  <!-- 左侧 ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------>
        <div id="sidebar" class="sidebar navbar-side">
         <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
<ul class="nav" id="main-menu">
<?php $menu=admin_menu::allmenu(); $i=0; $class1 = '';?>
<?php if($menu) { ?>
<?php if(is_array($menu))
foreach($menu as $ns => $ms) { ?>
<?php
if($ns == '网站设置' && !chkpower('sitesystem')){
continue;
}
if($ns == '多站点设置' && !chkpower('website')){
continue;
}
if($ns == '栏目管理' && !chkpower('category')){
continue;
}
if($ns == '内容管理' && !chkpower('archive')){
continue;
}
if($ns == '分类管理' && !chkpower('mtype')){
continue;
}
if($ns == '专题管理' && !chkpower('special')){
continue;
}
if($ns == '用户管理' && !chkpower('user_manage')){
continue;
}
if($ns == '用户组管理' && !chkpower('user_group')){
continue;
}
if($ns == '推广联盟' && !chkpower('user_union')){
continue;
}
if($ns == '生成管理' && !chkpower('cache_manage')){
continue;
}
if($ns == '订单管理' && !chkpower('order_manage')){
continue;
}
if($ns == '数据管理' && !chkpower('func_data')){
continue;
}
if($ns == '投票管理' && !chkpower('func_ballot')){
continue;
}
if($ns == '留言评论' && !chkpower('func_book')){
continue;
}
if($ns == '公告管理' && !chkpower('func_announc')){
continue;
}

if($ns == '标签列表' && !chkpower('templatetag_list')){
continue;
}
if($ns == '添加标签' && !chkpower('templatetag_add')){
continue;
}
if($ns == '模板管理' && !chkpower('template_manage')){
continue;
}
if($ns == '数据统计' && !chkpower('seo_status')){
continue;
}
if($ns == '内容链接管理' && !chkpower('seo_linkword')){
continue;
}
if($ns == '友情链接管理' && !chkpower('seo_friendlink')){
continue;
}
if($ns == '邮件管理' && !chkpower('seo_mail')){
continue;
}
if($ns == '自定义表单' && !chkpower('defined_form')){
continue;
}
if($ns == '自定义字段' && !chkpower('defined_field')){
continue;
}
if($ns == session::get('modname')){
    ?>
                 <li class="active"><a class="active-menu waves-effect waves-dark" href="#">
<?php if($i==1) { ?><span class="glyphicon glyphicon-list-alt"></span> 
<?php } elseif ($i==2) { ?><span class="glyphicon glyphicon-user"></span> 
<?php } elseif ($i==3) { ?><span class="glyphicon glyphicon-shopping-cart"></span> 
<?php } elseif ($i==4) { ?><span class="glyphicon glyphicon-th-list"></span> 
<?php } elseif ($i==5) { ?><span class="glyphicon glyphicon-th"></span> 
<?php } elseif ($i==6) { ?><span class="glyphicon glyphicon-signal"></span> 
<?php } elseif ($i==7) { ?><span class="glyphicon glyphicon-edit"></span> 
<?php } else { ?>
<span class="glyphicon glyphicon-cog"></span> 
<?php } ?>
 <?php echo $ns;?></a>
                    <ul class="nav nav-second-level in">
                <?php
}else{
    ?>
                        <li><a class="active-menu waves-effect waves-dark" href="#">
<?php if($i==1) { ?><span class="glyphicon glyphicon-list-alt"></span> 
<?php } elseif ($i==2) { ?><span class="glyphicon glyphicon-user"></span> 
<?php } elseif ($i==3) { ?><span class="glyphicon glyphicon-shopping-cart"></span> 
<?php } elseif ($i==4) { ?><span class="glyphicon glyphicon-th-list"></span> 
<?php } elseif ($i==5) { ?><span class="glyphicon glyphicon-th"></span> 
<?php } elseif ($i==6) { ?><span class="glyphicon glyphicon-signal"></span> 
<?php } elseif ($i==7) { ?><span class="glyphicon glyphicon-edit"></span> 
<?php } else { ?>
<span class="glyphicon glyphicon-cog"></span> 
<?php } ?>
<?php echo $ns;?></a>
                            
<?php
}
?>

<ul class="nav nav-second-level">
<?php if(is_array($ms))
foreach($ms as $n => $m) { ?>
<?php
if($n == '网站配置' && !chkpower('system')){
continue;
}
if($n == '水印设置' && !chkpower('system')){
   continue;
}
if($n == '附件设置' && !chkpower('system')){
   continue;
}
if($n == '字符过滤' && !chkpower('system')){
   continue;
}
if($n == '邮件发送' && !chkpower('system')){
   continue;
}
if($n == '统计配置' && !chkpower('system')){
   continue;
}
if($n == '内容推荐' && !chkpower('setting_archive')){
   continue;
}
if($n == '热门标签' && !chkpower('system')){
   continue;
}
if($n == '语言包编辑' && !chkpower('language')){
   continue;
}
if($n == '幻灯片设置' && !chkpower('system')){
   continue;
}
if($n == '内页切换图片' && !chkpower('system')){
   continue;
}
if($n == '焦点图设置' && !chkpower('system')){
   continue;
}
if($n == '短信设置' && !chkpower('sms')){
   continue;
}
if($n == '短信管理' && !chkpower('sms')){
   continue;
}
if($n == '地图设置' && !chkpower('system')){
   continue;
}
if($n == '站点列表' && !chkpower('website_list')){
continue;
}
if($n == '增加站点' && !chkpower('website_add')){
continue;
}

if($n == '栏目管理' && !chkpower('category_list')){
continue;
}
if($n == '添加栏目' && !chkpower('category_add')){
continue;
}
if($n == '栏目URL规则' && !chkpower('category_htmlrule')){
continue;
}

if($n == '图片管理' && !chkpower('archive_image')){
continue;
}
if($n == '热门关键词' && !chkpower('archive_hotsearch')){
continue;
}
if($n == '推荐位设置' && !chkpower('archive_setting')){
continue;
}
if($n == '审核内容' && !chkpower('archive_check')){
continue;
}
if($n == '添加内容' && !chkpower('archive_add')){
continue;
}
if($n == '内容列表' && !chkpower('archive_list')){
continue;
}

if($n == '添加分类' && !chkpower('type_add')){
continue;
}
if($n == '分类管理' && !chkpower('type_list')){
continue;
}

if($n == '添加专题' && !chkpower('special_add')){
continue;
}
if($n == '专题管理' && !chkpower('special_list')){
continue;
}
if($n == '用户管理' && !chkpower('user_list')){
continue;
}
if($n == '添加用户' && !chkpower('user_add')){
continue;
}
if($n == '登录配置' && !chkpower('user_ologin')){
continue;
}

if($n == '用户组管理' && !chkpower('usergroup_list')){
continue;
}
if($n == '添加用户组' && !chkpower('usergroup_add')){
continue;
}

if($n == '联盟用户' && !chkpower('union_list')){
continue;
}
if($n == '结算记录' && !chkpower('union_pay')){
continue;
}
if($n == '访问统计' && !chkpower('union_visit')){
continue;
}
if($n == '注册统计' && !chkpower('union_reguser')){
continue;
}
if($n == '联盟配置' && !chkpower('union_config')){
continue;
}

if($n == '内容Html生成' && !chkpower('cache_content')){
continue;
}
if($n == '栏目Html生成' && !chkpower('cache_category')){
continue;
}
if($n == '首页Html生成' && !chkpower('cache_index')){
continue;
}
if($n == '分类Html生成' && !chkpower('cache_type')){
continue;
}
if($n == '专题Html生成' && !chkpower('cache_special')){
continue;
}
if($n == '标签Html生成' && !chkpower('cache_tag')){
continue;
}
if($n == 'Baidu地图生成' && !chkpower('cache_baidu')){
continue;
}
if($n == 'Google地图生成' && !chkpower('cache_google')){
continue;
}

if($n == '订单列表' && !chkpower('order_list')){
continue;
}
if($n == '支付配置' && !chkpower('order_pay')){
continue;
}
if($n == '配货配置' && !chkpower('order_logistics')){
continue;
}

if($n == '备份数据库' && !chkpower('func_data_baker')){
continue;	
}
if($n == '还原数据库' && !chkpower('func_data_restore')){
continue;	
}
if($n == '导入PHPweb数据' && !chkpower('func_data_phpweb')){
continue;	
}
if($n == '替换字符串' && !chkpower('func_data_replace')){
continue;	
}
if($n == '日志管理' && !chkpower('func_data_adminlogs')){
continue;	
}
if($n == '网站安全' && !chkpower('func_data_safe')){
continue;	
}
if($n == '添加投票' && !chkpower('func_ballot_add')){
continue;	
}
if($n == '投票管理' && !chkpower('func_ballot_list')){
continue;	
}
if($n == '留言管理' && !chkpower('func_book_list')){
continue;	
}
if($n == '评论管理' && !chkpower('func_book_pllist')){
continue;	
}
if($n == '公告管理' && !chkpower('func_announc_list')){
continue;	
}
if($n == '添加公告' && !chkpower('func_announc_add')){
continue;	
}

if($n == '函数标签' && !chkpower('templatetag_list_function')){
continue;
}
if($n == '系统标签' && !chkpower('templatetag_list_system')){
continue;
}
if($n == '内容标签' && !chkpower('templatetag_list_content')){
continue;
}
if($n == '栏目标签' && !chkpower('templatetag_list_category')){
continue;
}
if($n == '自定义标签' && !chkpower('templatetag_list_define')){
continue;
}
if($n == '添加内容标签' && !chkpower('templatetag_add_content')){
continue;
}
if($n == '添加栏目标签' && !chkpower('templatetag_add_category')){
continue;
}
if($n == '添加自定义标签' && !chkpower('templatetag_add_define')){
continue;
}
if($n == '模板选择' && !chkpower('template_set')){
continue;
}
if($n == '模板结构' && !chkpower('template_note')){
continue;
}
if($n == '当前模板编辑' && !chkpower('template_edit')){
continue;
}
if($n == '蜘蛛统计' && !chkpower('seo_status_spider')){
continue;
}
if($n == 'CNZZ全景统计' && !chkpower('seo_status_cnzz')){
continue;
}
if($n == '添加链接' && !chkpower('seo_linkword_add')){
continue;
}
if($n == '链接管理' && !chkpower('seo_linkword_list')){
continue;
}
if($n == '添加友情链接' && !chkpower('seo_friendlink_add')){
continue;
}
if($n == '友情链接管理' && !chkpower('seo_friendlink_list')){
continue;
}
if($n == '友情链接配置' && !chkpower('seo_friendlink_setting')){
continue;
}
if($n == '会员邮件群发' && !chkpower('seo_mail_usersend')){
continue;
}
if($n == '发送邮件' && !chkpower('seo_mail_send')){
continue;
}
if($n == '订阅邮件群发' && !chkpower('seo_mail_subscription')){
continue;
}

if($n == '添加表单' && !chkpower('defined_form_add')){
continue;
}
if($n == '管理表单' && !chkpower('defined_form_list')){
continue;
}
if($n == '添加内容字段' && !chkpower('defined_field_content_add')){
continue;
}
if($n == '内容字段' && !chkpower('defined_field_content')){
continue;
}
if($n == '添加用户字段' && !chkpower('defined_field_user_add')){
continue;
}
if($n == '用户字段' && !chkpower('defined_field_user')){
continue;
}


?>
<li><a href="<?php echo $m;?>"><?php echo $n;?></a></li>
<?php } ?>
</ul></li>
<?php $i++;?>
<?php $j++;?>
<?php $k++;?>
<?php } ?>
<?php } else { ?>
无可用操作
<?php } ?> 
</ul>
</div>
</div>


<!-- 右侧 --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
<div id="page-wrapper" class="main">
<div class="container-fluid">
<div class="row">
<?php
$this->render();
?>
</div>

<div class="blank30"></div>
<div class="copy">Powered by <a href="http://www.cmseasy.cn" title="CmsEasy企业网站系统" target="_blank">CmsEasy</a></div>
<div class="clearfix"></div>
</div>
</div>

</div>
<div class="blank30"></div>
</div>


<script type="text/javascript">
<!--

//标签页
$('#myTabs a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
})

//去掉虚线框
function bluring(){
if(event.srcElement.tagName=="A"||event.srcElement.tagName=="IMG") document.body.focus();
}
document.onfocusin=bluring;

//点击关闭提示信息层
function turnoff(obj){
document.getElementById(obj).style.display="none";
}

//信息提示框
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})

//-->
</script>

<?php if(hasflash()) { ?>
<div id='message'>
<div class="alert alert-danger alert-dismissible fade in" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
      <span class="glyphicon glyphicon-warning-sign"></span>	  <?php echo showflash(); ?>
    </div>
</div>
<script type="text/javascript">
<!--
function lick(){
$("#message").hide();
}
window.setTimeout("lick()",3000);
//-->
</script>
<?php } ?>



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo $skin_path;?>/js/bootstrap.min.js"></script>
<!-- Metis Menu Js -->
    <script src="<?php echo $skin_path;?>/js/jquery.metisMenu.js"></script>
    <!-- Custom Js -->
    <script src="<?php echo $skin_path;?>/js/custom-scripts.js"></script> 
<script language="javascript" type="text/javascript" src="<?php echo $skin_path;?>/js/admin.js"></script>
<script src="<?php echo $skin_path;?>/js/jquery.nicescroll.min.js"></script> 

<script type="text/javascript">
<!--
$('.sidebar').niceScroll({
    cursorcolor: "#152944",//#CC0071 光标颜色
    cursoropacitymax: 0, //改变不透明度非常光标处于活动状态（scrollabar“可见”状态），范围从1到0
    touchbehavior: false, //使光标拖动滚动像在台式电脑触摸设备
    cursorwidth: "0px", //像素光标的宽度
    cursorborder: "0", // 游标边框css定义
    cursorborderradius: "0px",//以像素为光标边界半径
    autohidemode: true //是否隐藏滚动条
});
//-->
</script>
<script>
   $(document).ready(function(){
      $.get('./lib/tool/getinf.php?type=officialinf',function(data){
          $("#information").append(data);
      });
   });
</script>

</body>
</html>