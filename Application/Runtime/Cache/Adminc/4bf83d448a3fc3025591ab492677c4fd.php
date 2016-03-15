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
    
   <div class="col_main">
        <div class="main_hd">
            <div class="title_tab" id="topTab">
                <ul class="tab_navs mt title_tab">
                    <li class="tab_nav js_top  selected" data-id="mphelper"><a href="javascript:void(0);">
                      <?php echo (getCateName($type)); ?>分类 </a></li>
                </ul>
            </div>
            <p class="extra_info">
               <a class="button2" href='?c=cate&a=add&type=<?php echo ($type); ?>' style='margin-bottom: 2px; '>添加</a>
            </p>
        </div>
        <div style="padding: 10px;">
            <div>
                <div id="ctl00_ContentPlaceHolder1_UpdatePanel1">
 
 
  

      <!--内容显示 Begin-->
     <div class="col_main">
         
         
        <div style="padding: 10px;">
            <div id="ctl00_ContentPlaceHolder1_UpdatePanel1">
	   
                    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="gv">
                        <tr>
                            <th scope="col" width="3%">
                                ID
                            </th>
                              <th align="center" scope="col" abbr="lbtnOperate">操作</th>
                            <th scope="col"  ><span style="padding-top: 10px; padding-left: 10px; padding-right: 10px;">类别名称</span></th>
                            <th scope="col" width="12%">
                               值</th>
                            <th scope="col" width="12%">排序</th>
                            <th scope="col" width="15%">
                                添加时间
                            </th>
                        </tr>
                        
                                
                              <?php if(is_array($select)): foreach($select as $key=>$item): ?><tr onMouseOver="this.className='RecordRowOver'" onMouseOut="this.className=''">
                                    <td align="center">
                                       <?php echo ($item["id"]); ?>
                                    </td>
                                    <td align="center" style="width:60px;"> <a href="?c=cate&a=e&id=<?php echo ($item["id"]); ?>"><img src="/assets/admin/images/edit.png" /> </a>
                                    <a href="javascript:;" onClick="javascript:if(confirm('你确信要删除[<?php echo ($item["scenename_varchar"]); ?>]吗？')) window.location='?c=cate&a=del&id=<?php echo ($item["id"]); ?>&type=<?php echo ($type); if(($flag) == "useranli"): ?>&flag=useranli<?php endif; ?>'"><img src="/assets/admin/images/delet.png" /> </a>
                                      
                                      <a href="?c=tag&a=index&biztype=<?php echo ($item["value"]); ?>&type=<?php echo ($type); ?>">管理小类 </a>
                                    </td>
                                    <td>
                                        <?php echo ($item["title"]); ?> 
                                    </td>
                                    <td>
                                         <?php echo ($item["value"]); ?> 
                                    </td>
                                    <td>  <?php echo ($item["sort"]); ?></td>
                                    <td>
                                    <?php if($item['create_time'] > 0): echo (date("Y-m-d",$item["create_time"])); endif; ?>
                                       
                                    </td>
                                </tr><?php endforeach; endif; ?>
            
                                <tr>
                                <td colspan="8">
                                 
                  
                     
                                </td>
                                </tr>
                            
                    </table>
                    
                    
                       <div class="pages">
                        <?php echo ($page); ?>
                </div>
                
</div>
        </div>
    </div>
    <!--内容显示 End-->




    
           
        

<div id="divIsSetHeight" style="display: none;">
    1
</div>



<script type="text/javascript">
    // <![CDATA[
    //    function ShowVisibleColumnWindow() {
    //        pcVisibleColumn.Show();
    //    }
    // ]]> 
</script>

<script type='text/javascript'>    SetHeight();</script>


                    
</div>
            </div>
        </div>
    </div>

 
</body>
</html>