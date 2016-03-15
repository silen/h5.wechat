<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta charset="utf-8" /><title>
	后台管理
</title>
      <script src="/assets/admin/js/listTable.js" type="text/javascript"></script>

    
    <script src="/Public/js/jquery-1.7.1.min.js" type="text/javascript"></script>
 
    <link rel="Stylesheet" href="/assets/admin/css/main.css" /><link rel="stylesheet" type="text/css" href="/assets/admin/css/layout_head.css" /><link rel="stylesheet" type="text/css" href="/assets/admin/css/base.css" /><link rel="stylesheet" type="text/css" href="/assets/admin/css/model.css" />
<style type="text/css">
.thbnail{ max-height:70px; max-width:100px}
</style>
     

</head>
<body>
    
     <!--内容显示 Begin-->
    <div class="col_main">
        <input name="ctl00$ContentPlaceHolder1$txt" type="hidden" id="ctl00_ContentPlaceHolder1_txt" />
        <div class="main_hd">
            <div class="title_tab" id="topTab">
                <ul class="tab_navs mt title_tab">
                    <li class="tab_nav js_top  selected" data-id="mphelper"><a href="javascript:void(0);">
                      <?php if(($user[userid_int]) == "0"): ?>编辑模板<?php else: ?>编辑 案例<?php endif; ?>   </a></li>
                </ul>
            </div>
             
        </div>
        
        
        
       <form action="" method="post">
        <div style="text-align: left; padding: 20px; text-align: left;">
           
            
             
             
            <!--打印帮助关键字配置-->
          
            <hr style="width: 50%; size: 1px; border: none;" />
            <table style="vertical-align: top;">
                <tr>
                    <td style="width: 98px;">
                           <?php if(($user[userid_int]) == "0"): ?>模板名<?php else: ?> 案例名称<?php endif; ?>
                    </td>
                    <td>
                          <span class="frm_input_box">
                            <input name="user[scenename_varchar]" type="text"   class="frm_input"  value="<?php echo ($user["scenename_varchar"]); ?>" /></span>
                    </td>
                </tr>
                <tr>
                    <td >
                        类型 
                    </td>
                    <td>
                       <select name="user[scenetype_int]" id="scenetype" onChange="changeSceneType()">
                        <?php if(is_array($scene_type_list)): foreach($scene_type_list as $key=>$item): ?><option value="<?php echo ($item["value"]); ?>" <?php if(($item[value]) == $user['scenetype_int']): ?>selected="selected"<?php endif; ?>><?php echo ($item["title"]); ?></option><?php endforeach; endif; ?>                     
                       
                       </select>
                       
                       小类
                       <select name="user[tagid_int]" id="scenetype_int">
                        <?php if(is_array($scene_type_list2)): foreach($scene_type_list2 as $key=>$item): ?><option value="<?php echo ($item["tagid_int"]); ?>" <?php if(($item[tagid_int]) == $user['tagid_int']): ?>selected="selected"<?php endif; ?>><?php echo ($item["name_varchar"]); ?></option><?php endforeach; endif; ?>     
                       </select>
   
                    </td>
                </tr>
                <tr>
                    <td  >
                        权重
                    </td>
                    <td>
                          <span class="frm_input_box">
                            <input name="user[rank]" type="text"   class="frm_input" style="width: 200px;" value="<?php echo ($user["rank"]); ?>" /></span> 
                            <font color="red" > 权重越大，在列表中将越靠前</font>
                    </td>
                </tr>
                <tr>
                    <td>
                         启用状态
                    </td>
                    <td>
                        <table id="ctl00_ContentPlaceHolder1_rdiIsEnable_help" border="0">
	<tr>
    <td><input id="ctl00_ContentPlaceHolder1_rdiIsEnable_help_1" type="radio"   name="user[delete_int]" value="0" <?php if(($user['delete_int']) == "0"): ?>checked="checked"<?php endif; ?>/><label for="ctl00_ContentPlaceHolder1_rdiIsEnable_help_1">启用</label></td>
		<td><input id="ctl00_ContentPlaceHolder1_rdiIsEnable_help_0" type="radio" name="user[delete_int]" value="1" <?php if(($user['delete_int']) == "1"): ?>checked="checked"<?php endif; ?>/><label for="ctl00_ContentPlaceHolder1_rdiIsEnable_help_0">禁用</label></td>
	</tr><tr>
		
	</tr>
</table>
                    </td>
                </tr>
                
                
                <tr>
                    <td>
                    </td>
                    <td>
                    </td>
                </tr>
            </table>
          <div class="tool_bar border with_form">
                <span id="Span1" class="btn btn_primary btn_input">
                         <input type="hidden"  name="id" value="<?php echo ($user["sceneid_bigint"]); ?>" />
                          <input type="hidden"  name="userid_int" value="<?php echo ($user["userid_int"]); ?>" />
                    <input type="submit" name=" " value="保存"   /></span>
            </div>
        </div>
        </form>
        
    </div>
    <!--内容显示 End-->

  <script type="text/javascript">
   function changeSceneType(){
	   var biztypeId=$('#scenetype').val();
	   $.get('?c=scene&a=getSceneTag',{biztypeId:biztypeId},function(data){
		    if(data.status==1){
			  $('#scenetype_int').html(data.info);	
			}
		 },'json');
	}
  </script>
 
</body>
</html>