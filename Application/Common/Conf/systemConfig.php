<?php

$public_system_db_host = '127.0.0.1';
$public_system_db_name = 'baby_show';  //'cj';
$public_system_db_user = 'baby_show';
$public_system_db_pwd =  'Lh*1234567890';//feitian20!#'asd489QWD145QWSA4S@269S45S';
if (in_array($_SERVER['SERVER_ADDR'], array('192.168.31.12', '127.0.0.1'))){
    $public_system_db_host = '192.168.31.12';
    $public_system_db_name = 'baby_show';  //'cj';
    $public_system_db_user = 'baby_show';
    $public_system_db_pwd =  'baby_show1206';//feitian20!#'asd489QWD145QWSA4S@269S45S';
}


return array (
    'LOG_RECORD' => false,
	'SITE_INFO' => 
			array ( 
					'name' => 'xxxx',
					'keyword' => '我的关键词',
					'description' => '这里写描述',
					'url' => 'http://www.haoid.cn',
					'ossurl' => 'http://ttttt.oss-cn-hangzhou.aliyuncs.com/e.wesambo.com/1/webroot',
			), 
	'TOKEN' => 
			array (
					'false_static' => 2,
				),
					'WEB_ROOT' =>'http:share.com',// 'http://e.yywaimai.com'
					'DB_HOST' => $public_system_db_host,
					'DB_NAME' => $public_system_db_name,
					'DB_USER' => $public_system_db_user,
					'DB_PWD' => $public_system_db_pwd,
					'DB_PORT' => '3306',
					'DB_PREFIX' => 'cj_',
					'webPath' => '/',
			);
?>
