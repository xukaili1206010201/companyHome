
<script type="text/javascript">
jQuery(function($){
	$("#demo_btn").click(function(){
		$("#demo_div").attr("src",
			"demo.php?pattern="+$("#ifocus_pattern").val()+"&width="+$("#ifocus_width").val()+"&height="+$("#ifocus_height").val()+
			"&number="+$("#ifocus_number").val()+"&time="+$("#ifocus_time").val());
	});
	$('#sms_manage').load('<?php echo url('sms/manage');?>');
});
var base_url = '{config::get('site_url')}';


</script>

    <script type="text/javascript" src="{$base_url}/common/js/ajaxfileupload.js"></script>
    <script type="text/javascript" src="{$base_url}/common/js/jquery.imgareaselect.min.js"></script>
    <script type="text/javascript" src="{$base_url}/common/js/ThumbAjaxFileUpload.js"></script>
    <script type="text/javascript" src="{$base_url}/common/swfupload/swfupload.js"></script>
    <script type="text/javascript" src="{$base_url}/common/swfupload/swfupload.queue.js"></script>
    <script type="text/javascript" src="{$base_url}/common/swfupload/fileprogress.js"></script>
    <script type="text/javascript" src="{$base_url}/common/swfupload/system_handlers.js"></script>

<form method="post" action="<?php echo uri();?>" name="config_form">

 <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
  <?php $i=1;?>
      {loop $units $key $unit}
    <li role="presentation"{if $i==1} class="active"{/if}><a href="#tag{$i}" aria-controls="#tag{$i}" role="tab" data-toggle="tab">{$unit}</a></li>
	<?php $i++;?>
      {/loop}
  </ul>

<?php unset($i);?>

   <div class="tab-content">
     <?php $onei=1;?>
     {loop $units $key $unit}
     {if isset($items[$key])}
<div role="tabpanel" class="tab-pane{if $onei==1} active{/if}" id="tag{$onei}">

{loop $items[$key] $item}
<div class="row">

{if $item['name']=='sms_explain'}
<div style="padding:0px 20px;">
<div class="alert alert-danger" role="alert">
<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
<span class="glyphicon glyphicon-warning-sign"></span>	注意</span> 
充值前请先&nbsp;&nbsp;<a href="http://pay.cmseasy.cn/reg.php" target="_blank" class="btn btn-steeblue">注册用户</a>&nbsp;&nbsp;！并将短信设置里面账户和密码修改为注册用户和密码！在&nbsp;&nbsp;<a href="{$base_url}/index.php?case=sms&act=manage&admin_dir={get('admin_dir')}&site=default" class="btn btn-lightslategray">短信管理</a>&nbsp;&nbsp;内充值短信后方可正常使用！
</div>
</div>
<style>
#sms_explain {display:none;}
</style>
{elseif $item['name']=='mobilechk_explain'}
<div style="padding:0px 20px;">
<div class="alert alert-danger" role="alert">
<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
<span class="glyphicon glyphicon-warning-sign"></span>	注意</span> 
开启手机验证码后，需同时配置&nbsp;&nbsp;<a href="{$base_url}/index.php?case=config&act=system&set=sms&admin_dir={get('admin_dir')}&site=default" class="btn btn-steeblue">短信设置</a>&nbsp;&nbsp;！且在&nbsp;&nbsp;<a href="{$base_url}/index.php?case=sms&act=manage&admin_dir={get('admin_dir')}&site=default" class="btn btn-lightslategray">短信管理</a>&nbsp;&nbsp;内充值短信后方可正常使用！
</div>
</div>
<style>
#mobilechk_explain {display:none;}
</style>
{elseif $item['name']=='sms_manage'}
<!-- 短信管理页面 -->
<div id="sms_manage">
</div>
<style>
input#sms_manage {display:none;}
</style>
<!-- 短信管理页面 -->
{else}
<div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">{$item.title}：</div>
{/if}

{if $item['name']=='ditu_explain'}
<div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">

<span class="glyphicon glyphicon-warning-sign"></span>	
使用说明：<br />
1、首先，点击	<a href="http://api.map.baidu.com/lbsapi/getpoint/index.html" class="btn btn-steeblue" target="_blank">&nbsp;按钮&nbsp;</a>	，获取地图数值；<br />
2、数据包含：当前层级、当前坐标点；<br />
3、坐标点逗号前为经度值；<br />
4、坐标点逗号后为纬度值；<br />
5、将经纬度值复制到后台中的经纬度输入框，提交即可。<br />
6、地图调用代码为 {&nbsp;template 'ditu.html'&nbsp;} ,复制后，请将里面空格删除 。
<style>
#ditu_explain {display:none;}
</style>
{/if}


{if $item['name']=='template_dir'}
<div class="col-xs-8 col-sm-8 col-md-9 col-lg-10 text-left">

<div id="template">
{loop $item['select'] $key2 $val}
<div class="template_box">
<div class="t_box">
<div class="img-wrap">
<a><img src="{$base_url}/template/{$key2}/skin/thumbnails.jpg" /></a>
</div>
</div>
{$val}<div class="blank10"></div>
<input name="template_dir_select[]" type="radio" value="{$key2}" {if get($item['name'])==$key2} checked="checked" {/if} onclick="this.form.template_dir.value=this.value" />&nbsp;选择&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo url('template/del/tplname/'.$val,1);?>" onClick="return confirm('确定要删除吗?')"><img src="{$skin_path}/images/no.gif" /></a>
</div>
{/loop}
<div class="blank10"></div>
</div>


{form::hidden($item['name'],get($item['name']))}

{elseif $item['name']=='template_mobile_dir'}
<div class="col-xs-8 col-sm-8 col-md-9 col-lg-10 text-left">
    <div id="template">
        {loop $mobiletpllist $key2 $val}
        <div class="template_box">
            <div class="t_box">
                <div class="img-wrap">
                    <a><img src="{$base_url}/template/{$key2}/skin/thumbnails.jpg" /></a>
                </div>
            </div>
            {$val}<div class="blank10"></div>
            <input name="template_mobile_dir" type="radio" value="{$key2}" {if get($item['name'])==$key2} checked="checked" {/if} />&nbsp;选择&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo url('template/del/tplname/'.$val,1);?>" onClick="return confirm('确定要删除吗?')"><img src="{$skin_path}/images/no.gif" /></a>
        </div>
        {/loop}
        <div class="blank10"></div>

    </div>

{elseif $item['name']=='admin_template_dir'}
<div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">
<div id="template" style="float:left;">
{form::select($item['name'],get($item['name']),$admintpllist,'class="select"')}

</div>
    {elseif $item['name']=='user_template_dir'}
<div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">
    <div id="template" style="float:left;">
        {form::select($item['name'],get($item['name']),$usertpllist,'class="select"')}

    </div>
 
			  {else}
<div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">
                {if isset($item['select']) && is_array($item['select'])}
                {form::select($item['name'],get($item['name']),$item['select'],'class="select"')}
                {elseif strlen(get($item['name']))>50}
                {form::textarea($item['name'],get($item['name']),' class="textarea"')}
                {elseif isset($item['image'])}
                <script type="text/javascript">
                 $(document).ready(function(){
			        var swfu_{$item['name']};
			        var settings_{$item['name']} = {
			        	callback_data_des: '{$item['name']}',
			            flash_url : "{$base_url}/common/swfupload/swfupload.swf",
			            upload_url: "{url('tool/uploadimage/site/'.front::get('site'),false)}",
			            post_params: {"PHPSESSID" : "<?php echo session_id(); ?>"},
			            file_size_limit : "{ini_get('upload_max_filesize')}B",
			            file_types : "*.jpg;*.gif;*.png;*.bmp",
			            file_types_description : "图片", //All Files
			            file_upload_limit : 100,
			            file_queue_limit : 0,
			            custom_settings : {
			                progressTarget : "fsUploadProgress",
			                cancelButtonId : "btnCancel"
			            },
			            debug: false,

			            // Button settings
			            //button_image_url: "{$base_url}/common/swfupload/botton.png",
			            button_width: "39",
			            button_height: "18",
			            button_placeholder_id: "spanButtonPlaceHolder_{$item['name']}",
			            //button_text: '<span class="theFont">上传</span>',
			            //button_text_style: ".theFont{float:left;display:block;color:#529fd0;font-size:14px;width:160px;height:40px;line-height:22px;font-weight:bold;}",
			            //button_text_left_padding: 7,
			            //button_text_top_padding: 5,
			            button_disabled : false,
			            button_window_mode: SWFUpload.WINDOW_MODE.TRANSPARENT,
			            button_cursor: SWFUpload.CURSOR.HAND,

			            // The event handler functions are defined in handlers.js
			            file_queued_handler : fileQueued,
			            file_queue_error_handler : fileQueueError,
			            file_dialog_complete_handler : fileDialogComplete,
			            upload_start_handler : uploadStart,
			            upload_progress_handler : uploadProgress,
			            upload_error_handler : uploadError,
			            upload_success_handler : uploadSuccess,
			            upload_complete_handler : uploadComplete,
			            queue_complete_handler : queueComplete	// Queue plugin event


			        };
			        swfu_{$item['name']} = new SWFUpload(settings_{$item['name']});

                 });
                </script>
				<div id="img_upload">
                <input type="text" name="{$item['name']}" id="{$item['name']}" class="upload_text" value='{config::get($item['name'])}'/>
                <span style="float:left;" id="spanButtonPlaceHolder_{$item['name']}"></span>
                <input id="btnCancel" type="button" value="取消" disabled="disabled" style="display:none;" />
				</div>
                {else}
				{form::input($item['name'],get($item['name']),'class="form-control"')}
                {/if}




                {if $item['name']=='watermark_pos'}
                {template 'config/watermark_pos_select.php'}
                {/if}

           {/if}


          {if strlen($item['intro'])>1}{$item['intro']}{/if}{if $item['title']=='风格应用选择'}<button id="demo_btn" type="button" style="width:80px; height:30px; margin:4px;">演 示</button><br />
<iframe id="demo_div" width="100%" height="400" frameborder="0" scrolling="no" src="demo.php"></iframe>

{/if}


</div>
</div>
<div class="clearfix blank20"></div>
    {/loop}

	


    <?php $onei++;?>

   </div>

  {/loop}
  {/if}
  </div>
</div>
<div class="blank30"></div>
<div class="line"></div>
<div class="blank30"></div>
<input name="submit" type="submit" value="提交" class="btn btn-primary">
</form>