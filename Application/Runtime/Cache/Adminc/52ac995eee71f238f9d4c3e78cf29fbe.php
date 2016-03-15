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
                     编辑分类</eq>   </a></li>
                </ul>
            </div>
             
        </div>
        
        
        
       <form action="" method="post">
        <div style="text-align: left; padding: 20px; text-align: left;">
           
            
             
             
           
          
            <hr style="width: 50%; size: 1px; border: none;" />
            <table style="vertical-align: top;">
                <tr>
                    <td style="width: 198px;">
                          分类名称</eq>
                    </td>
                    <td>
                          <span class="frm_input_box">
                            <input name="user[name_varchar]" type="text"   class="frm_input"  value="<?php echo ($user["name_varchar"]); ?>" /></span>
                    </td>
                   
                </tr>
                
                <tr>
                    <td  >
                        排序
                    </td>
                    <td>
                          <span class="frm_input_box">
                            <input name="user[sort]" type="text"   class="frm_input" style="width: 200px;" value="<?php echo ($user["sort"]); ?>" /></span> 
                          
                    </td>
                </tr>
                 
                
                
                <tr>
                    <td>
                    </td>
                    <td  >
                    </td>
                </tr>
            </table>
          <div class="tool_bar border with_form">
                <span id="Span1" class="btn btn_primary btn_input">
                         <input type="hidden"  name="id" value="<?php echo ($user["id"]); ?>" />
                          <input type="hidden"  name="filetype" value="<?php echo ($filetype_int); ?>" />
                         <input type="hidden"  name="user[biztype_int]" value="<?php echo ($biztype); ?>" />
                          
                    <input type="submit" name=" " value="保存"   /></span>
            </div>
        </div>
        </form>
        
    </div>
    <!--内容显示 End-->


 
</body>
</html>