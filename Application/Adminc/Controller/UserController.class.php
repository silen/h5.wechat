<?php
namespace Adminc\Controller;
use Adminc\Controller\BaseController;
class UserController extends BaseController {
    public function index(){
		if(!defined('VIRIFY')){
			aboutaa();
		}
 
		$m = M('users');
		$where=array();
		$filename_varchar = trim(I('post.scenename_varchar')); 
		if($filename_varchar){
			$where['email_varchar']  = array('like','%'.$filename_varchar.'%');
			
		}
		
		 
		$count = $m->where($where)->count();
		$p = getpage($count,16);
		$list = $m->field(true)->where($where)->order('create_time desc')->limit($p->firstRow, $p->listRows)->select();
		$this->assign('select', $list); 
		$this->assign('page', $p->show());  
		 
		//var_export($list);
		//echo C('TEST_ADMIN_ID');
		 
		
		$this->display();
    }
	public function del(){
		if(session('adminRole')==2  ){
			$this->error ( '您没有相关权限', U (  'user/index' ) );
		}
		$m = M('users');      
		$m->where('userid_int='.$_REQUEST['id'])->delete();
		$this->success ( '操作成功', '/adminc.php?c=user');  // U ('user/index')
		
	}
	
	public function add(){
		$m = M('users'); 
		$field=C('REG_FIELD')? C('REG_FIELD'):'email_varchar';	

		
		if(IS_POST){
			
			
			$where['userid_int']=I('post.id');
			$userinfo=I('post.user');
			 
			$userinfo['create_time'] = date('y-m-d H:i:s',time());
			$userinfo['last_time'] = date('y-m-d H:i:s',time());
			$userinfo['createip_varchar'] = get_client_ip();
			$userinfo['lastip_varchar'] = get_client_ip();
			$userinfo['end_time']=strtotime( $userinfo['end_time']);
			//$userinfo['end_time'] = 0;
			$userinfo['headimg']='';
			
			$field=C('REG_FIELD')? C('REG_FIELD'):'email_varchar';	
			$is_exist_id=$m->where("$field='".$userinfo[$field] ."'")->getField('userid_int');
			 if($is_exist_id){
			 
			 	
				$this->error ( '账号已经存在' ); 
				 
			}
			
		
			if(I('post.password_varchar')){
				$userinfo['password_varchar']=md5(I('post.password_varchar'));
			}else{
				$this->assign('user', $userinfo); 
				
				$this->error ( '密码不能为空'  );
				
			}
		 	 
			$m->where($where)->add($userinfo);
			 
			$this->success ( '操作成功','/adminc.php?c=user' );

		}else{
		 
			$this->assign('field', $field); 
			
			$this->display('e');
		}
	}
	
	public function e(){
		$m = M('users'); 
		 $field=C('REG_FIELD')? C('REG_FIELD'):'email_varchar';	

		
		if(IS_POST){
			$where['userid_int']=I('post.id');
			$update_arr=I('post.user');
			if(I('post.password_varchar')){
				$update_arr['password_varchar']=md5(I('post.password_varchar'));
			}
			 $update_arr['end_time']=strtotime( $update_arr['end_time']);
			$m->where($where)->save($update_arr);
			$this->success ( '操作成功','/adminc.php?c=user' );

		}else{
			$where['userid_int']=I('get.id');
			$userinfo=	$m->where($where)->find();
		 
			$this->assign('user', $userinfo); 
			 $this->assign('field', $field); 
			
		 $this->display();
		}
	}
}