<?php

/*
	八彩五月网制作 www.8c5.cn
	QQ:312215120
*/
!defined('DEBUG') AND exit('Access Denied.');

$action = param(3);

if(empty($action)) {
	
	$staticlist = db_find('staticpic', array(), array('rank'=>-1), 1, 1000, 'staticpicid');
	$maxid = db_maxid('staticpic', 'staticpicid');
	
	if($method == 'GET') {
		
		include _include(APP_PATH.'plugin/pic_gl/setting.htm');
		
	} else {
		$rowidarr = param('rowid', array(0));
		$picnamearr = param('picname', array(''));
		$picurlarr = param('picurl', array(''));
		$picheightarr = param('picheight', array(''));
		$rankarr = param('rank', array(0));
		$weizhiarr = param('weizhi', array(''));
		$arrlist = array();

		foreach($rowidarr as $k=>$v) {
			
			if(empty($picurlarr[$k]) && empty($picheightarr[$k]) && empty($rankarr[$k])) continue;
			$arr = array(
				'staticpicid'=>$k,
				'picname'=>$picnamearr[$k],
				'pichight'=>$picheightarr[$k],
				'rank'=>$rankarr[$k],
				'weizhi'=>$weizhiarr[$k],
			);
			if(!empty($picurlarr[$k])) {
				
				$s = array_value($picurlarr, $k);
				$data = substr($s, strpos($s, ',') + 1);
				$data = base64_decode($data);
				$rands=time().rand(100000,999999).rand(100000,999999);
				$iconfile = "../upload/jttp/$rands.png";

				file_put_contents($iconfile, $data);
				
				$arr['picurl']=$iconfile;		
						
			}
			if(!isset($staticlist[$k])) {
				db_create('staticpic', $arr);
			} else {
				db_update('staticpic', array('staticpicid'=>$k), $arr);
			}
		}
		unset($arr['picurl']);
		// 删除
		$deletearr = array_diff_key($staticlist, $rowidarr);
		foreach($deletearr as $k=>$v) {
			db_delete('staticpic', array('staticpicid'=>$k));
		}
		
		message(0, '保存成功');
	}
}
?>