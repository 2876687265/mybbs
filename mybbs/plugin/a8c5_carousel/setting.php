<?php

/*
	八彩五月网制作 www.8c5.cn
	QQ:312215120
*/
!defined('DEBUG') AND exit('Access Denied.');

$action = param(3);

if(empty($action)) {
	
	$slidelist = db_find('slide', array(), array('rank'=>-1), 1, 1000, 'slideid');
	$maxid = db_maxid('slide', 'slideid');
	
	if($method == 'GET') {
		
		include _include(APP_PATH.'plugin/a8c5_carousel/setting.htm');
		
	} else {
		$rowidarr = param('rowid', array(0));
		$namearr = param('name', array(''));
		$urlarr = param('url', array(''));
		//$slidepicarr = param('slidepic', array(''));
		$picurlarr = param('picurl', array(''));
		$picheightarr = param('picheight', array(''));
		$rankarr = param('rank', array(0));
		$weizhiarr = param('weizhi', array(''));
		$arrlist = array();

		foreach($rowidarr as $k=>$v) {
			
			if(empty($picurlarr[$k]) && empty($urlarr[$k]) && empty($picheightarr[$k]) && empty($rankarr[$k])) continue;
			$arr = array(
				'slideid'=>$k,
				'name'=>$namearr[$k],
				'url'=>$urlarr[$k],
				//'slidepic'=>$slidepicarr[$k],
				'picheight'=>$picheightarr[$k],
				'rank'=>$rankarr[$k],
				'weizhi'=>$weizhiarr[$k],
			);
			
			if(!empty($picurlarr[$k])) {
				
				$s = array_value($picurlarr, $k);
				$data = substr($s, strpos($s, ',') + 1);
				$data = base64_decode($data);
				$rands=time().rand(100000,999999).rand(100000,999999);
				$iconfile = "../upload/dttp/$rands.png";

				file_put_contents($iconfile, $data);
				
				$arr['picurl']=$iconfile;		
						
			}			
			
			if(!isset($slidelist[$k])) {
				db_create('slide', $arr);
			} else {
				db_update('slide', array('slideid'=>$k), $arr);
			}
		}
		unset($arr['picurl']);
		// 删除
		$deletearr = array_diff_key($slidelist, $rowidarr);
		foreach($deletearr as $k=>$v) {
			db_delete('slide', array('slideid'=>$k));
		}
		
		message(0, '保存成功');
	}
}
?>