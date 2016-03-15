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
                       编辑 素材</a></li>
                </ul>
            </div>
             <p class="extra_info">
               <a class="button2" href='?c=upfilesys&filetype=<?php echo ($filetype_int); ?>' style='margin-bottom: 2px;'>返回<?php if($filetype_int ==1): ?>图片<?php elseif($filetype_int ==2): ?>音乐 
<?php else: ?>背景
<?php endif; ?>列表</a>
            </p>
        </div>
        
        
        
       <form action="" method="post" enctype="multipart/form-data" onSubmit="return checkForm()">
        <div style="text-align: left; padding: 20px; text-align: left;">
           
            
             
             
            <!--打印帮助关键字配置-->
          
            <hr style="width: 50%; size: 1px; border: none;" />
            <table style="vertical-align: top;">
                <tr>
                    <td style="width: 98px;">
                            文件名
                    </td>
                    <td colspan="2">
                          <span class="frm_input_box">
                            <input name="user[filename_varchar]" type="text"  id="title"  class="frm_input"  value="<?php echo ($user["filename_varchar"]); ?>" /></span>
                    </td>
                </tr>
                <tr>
                    <td >
                        类型
                    </td>
                    <td colspan="2"> 
                       <select name="user[biztype_int]">
                         <?php if(is_array($filetypelist)): foreach($filetypelist as $key=>$item): ?><option value="<?php echo ($item["value"]); ?>" <?php if(($user[biztype_int]) == $item["value"]): ?>selected="selected"<?php endif; ?> ><?php echo ($item["title"]); ?></option><?php endforeach; endif; ?> </select>
   
                    </td>
                </tr>
               
                <tr>
                    <td>
                         上传文件
                    </td>
                    <td>
                        <input type="file" name="file">
                    </td>
                    <td>    
                      <?php if($user[filesrc_varchar]): ?>
                      <?php if(($filetype_int) == "2"): ?><audio controls><source src="/Uploads/<?php echo ($user["filesrc_varchar"]); ?>" type="audio/mpeg">你的浏览器不支持在线.</audio>
                                       <?php else: ?>
                                        <img src="/Uploads/<?php echo ($user["filethumbsrc_varchar"]); ?>" class="thbnail"><?php endif; ?>
                         <?php endif; ?>
                                    
                                         </td>
                </tr>
                <tr>
                    <td>  
                    </td>
                    <td colspan="2">
                    </td>
                </tr>
            </table>
          <div class="tool_bar border with_form">
                <span id="Span1" class="btn btn_primary btn_input">
                         <input type="hidden"  name="id" value="<?php echo ($user["fileid_bigint"]); ?>" />
                         
                          <input type="hidden"  name="fileType" value="<?php echo ($filetype_int); ?>" />
                          <input type="hidden"  name="userid_int" value="<?php echo ($user["userid_int"]); ?>" />
                    <input type="submit" name=" " value="保存"   /></span>
            </div>
        </div>
        </form>
        
    </div>
    <!--内容显示 End-->

  <script type="text/javascript">
   function checkForm(){
	   if($('#title').val()==''){
		   alert('文件名不能为空');
		 return false;  
		 }
		 return true;
	}
  </script>
 
</body>
</html>