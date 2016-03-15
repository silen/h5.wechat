<?php


/**
 * 
 * @param $count 要分页的总记录数
 * @param int $pagesize 每页查询条数
 * @return \Think\Page
 */
function getpage($count, $pagesize = 10) {
	$p = new Think\Page($count, $pagesize);
	$p->setConfig('header', '<li class="rows">共<b>%TOTAL_ROW%</b>条记录&nbsp;第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页</li>');
	$p->setConfig('prev', '上一页');
	$p->setConfig('next', '下一页');
	$p->setConfig('last', '末页');
	$p->setConfig('first', '首页');
	$p->setConfig('theme', '%FIRST%%UP_PAGE%%LINK_PAGE%%DOWN_PAGE%%END%%HEADER%');
	$p->lastSuffix = false;//最后一页不显示为总页数
	return $p;
}
function getBiztypeCateName($value){
	return M('cate')->where('value='.$value)->getField('title');
}


function getBiztypeCateNameN($type,$value){
	//echo $value.'  '.$type;
	$title=M('cate')->where('value='.$value." AND type='$type'")->getField('title');
 
	return $title;
}


function getPageMode($mode){
	$array=array('上下翻页','上下惯性翻页','左右翻页','左右惯性翻页','左右连续翻页');
	return $array[$mode];
}
function getCateName($mode){
	
	$array=array('tpType'=>'图片','bgType'=>'背景','musType'=>'音乐','scene_type'=>'场景' );
	return $array[$mode];
}
function getTpyeNameToId($mode){
	$array=array('tpType'=>1,'bgType'=>0,'musType'=>2  ,'scene_type'=>2);
	return $array[$mode];
}

function getUserName($id){
	$userinfo=M('users')->where("userid_int='$id'")->field('uname,email_varchar')->find();
	
	return $userinfo['uname']?$userinfo['uname']:$userinfo['email_varchar'];
}

function getAllCate(){
	  $cateAll_list=M('cate')->select();
	  $re_arr=array();
	  foreach($cateAll_list as $k=>$row){
		  
		}
  	
}
function getSceneType($type='scene_type',$value){
	 
	$title=M('cate')->where("value='$value' AND type='$type'")->getField('title');
	
	return $title;
	
}
function getSceneTag($biztypeId){

	$title=M('tag')->where("type_int=2 and tagid_int=".$biztypeId)->getField('name_varchar');
	return $title;
}
function getTagName($type_int,$biztypeId){
    if($type_int==2) return '';
	$title=M('tag')->where("type_int=$type_int and tagid_int=".$biztypeId)->getField('name_varchar');
	return $title;
}

function getAdWzi($ad_wzi){
	$arr=array('首页','尾页');
	return $arr[$ad_wzi];
}