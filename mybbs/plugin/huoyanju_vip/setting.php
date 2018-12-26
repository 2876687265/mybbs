<?php

/*
    会员vip图标 1.0 由火焰驹秦腔网制作
    @火焰驹（QQ：312215120）
*/

!defined('DEBUG') AND exit('Access Denied.');

if($method == 'GET') {
  
	$setting['huoyanju_vip_name_1_htm'] = setting_get('huoyanju_vip_name_1_htm');
    $setting['huoyanju_vip_name_2_htm'] = setting_get('huoyanju_vip_name_2_htm');
	$setting['huoyanju_vip_name_3_htm'] = setting_get('huoyanju_vip_name_3_htm');
    $setting['huoyanju_vip_name_4_htm'] = setting_get('huoyanju_vip_name_4_htm');
	$setting['huoyanju_vip_name_5_htm'] = setting_get('huoyanju_vip_name_5_htm');
    $setting['huoyanju_vip_name_6_htm'] = setting_get('huoyanju_vip_name_6_htm');
	$setting['huoyanju_vip_name_7_htm'] = setting_get('huoyanju_vip_name_7_htm');
    $setting['huoyanju_vip_name_8_htm'] = setting_get('huoyanju_vip_name_8_htm');
	$setting['huoyanju_vip_name_9_htm'] = setting_get('huoyanju_vip_name_9_htm');
    $setting['huoyanju_vip_name_10_htm'] = setting_get('huoyanju_vip_name_10_htm');
	$setting['huoyanju_vip_name_11_htm'] = setting_get('huoyanju_vip_name_11_htm');
    $setting['huoyanju_vip_name_12_htm'] = setting_get('huoyanju_vip_name_12_htm');
	$setting['huoyanju_vip_name_101_htm'] = setting_get('huoyanju_vip_name_101_htm');
    $setting['huoyanju_vip_name_102_htm'] = setting_get('huoyanju_vip_name_102_htm');
	$setting['huoyanju_vip_name_103_htm'] = setting_get('huoyanju_vip_name_103_htm');
    $setting['huoyanju_vip_name_104_htm'] = setting_get('huoyanju_vip_name_104_htm');
	$setting['huoyanju_vip_name_105_htm'] = setting_get('huoyanju_vip_name_105_htm');
	$setting['huoyanju_vip_name_106_htm'] = setting_get('huoyanju_vip_name_106_htm');

	
	include _include(APP_PATH.'plugin/huoyanju_vip/setting.htm');
	
} else {

	setting_set('huoyanju_vip_name_1_htm', param('huoyanju_vip_name_1_htm', '', FALSE));
	setting_set('huoyanju_vip_name_2_htm', param('huoyanju_vip_name_2_htm', '', FALSE));
	setting_set('huoyanju_vip_name_3_htm', param('huoyanju_vip_name_3_htm', '', FALSE));
	setting_set('huoyanju_vip_name_4_htm', param('huoyanju_vip_name_4_htm', '', FALSE));
	setting_set('huoyanju_vip_name_5_htm', param('huoyanju_vip_name_5_htm', '', FALSE));
	setting_set('huoyanju_vip_name_6_htm', param('huoyanju_vip_name_6_htm', '', FALSE));
	setting_set('huoyanju_vip_name_7_htm', param('huoyanju_vip_name_7_htm', '', FALSE));
	setting_set('huoyanju_vip_name_8_htm', param('huoyanju_vip_name_8_htm', '', FALSE));
	setting_set('huoyanju_vip_name_9_htm', param('huoyanju_vip_name_9_htm', '', FALSE));
	setting_set('huoyanju_vip_name_10_htm', param('huoyanju_vip_name_10_htm', '', FALSE));
	setting_set('huoyanju_vip_name_11_htm', param('huoyanju_vip_name_11_htm', '', FALSE));
	setting_set('huoyanju_vip_name_12_htm', param('huoyanju_vip_name_12_htm', '', FALSE));
	setting_set('huoyanju_vip_name_101_htm', param('huoyanju_vip_name_101_htm', '', FALSE));
	setting_set('huoyanju_vip_name_102_htm', param('huoyanju_vip_name_102_htm', '', FALSE));
	setting_set('huoyanju_vip_name_103_htm', param('huoyanju_vip_name_103_htm', '', FALSE));
	setting_set('huoyanju_vip_name_104_htm', param('huoyanju_vip_name_104_htm', '', FALSE));
	setting_set('huoyanju_vip_name_105_htm', param('huoyanju_vip_name_105_htm', '', FALSE));
	setting_set('huoyanju_vip_name_106_htm', param('huoyanju_vip_name_106_htm', '', FALSE));

	message(0, '配置成功');
}
	
?>